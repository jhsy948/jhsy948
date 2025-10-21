// 이 코드는 star-animation.js 파일입니다. (순수 JS, Canvas, GSAP)

// 필요한 DOM 요소 가져오기
const canvas = document.getElementById('bg-stars');

// canvas가 있을 경우에만 로직 실행
if (canvas) {
    const ctx = canvas.getContext('2d');

    let stars = [];
    let resizeTimeout; 

    // 별 설정값
    const numStars = 100;
    const starColor = '#fff';
    const maxStarRadius = 4;
    const minStarOpacity = 0.3;
    const starFadeSpeed = 0.005;

    // 초기 별 생성 함수
    function initializeStars(canvasWidth, canvasHeight) {
        let newStars = [];
        for (let i = 0; i < numStars; i++) {
            newStars.push({
                x: Math.random() * canvasWidth,
                y: Math.random() * canvasHeight,
                baseY: 0,
                radius: Math.random() * maxStarRadius,
                opacity: minStarOpacity + Math.random() * (1 - minStarOpacity),
                targetOpacity: minStarOpacity + Math.random() * (1 - minStarOpacity)
            });
        }
        return newStars;
    }

    /**
     * [전역 함수] 캔버스 크기를 BODY의 전체 스크롤 높이에 맞춰 설정하고 별 위치를 업데이트합니다.
     */
    window.updateCanvasAndStars = function() {
        // 캔버스 너비는 윈도우 너비로 설정
        canvas.width = window.innerWidth;

        // 캔버스 포지션을 강제로 absolute로 설정하고 z-index를 조정하여 배경으로 배치합니다.
        canvas.style.position = 'absolute';
        canvas.style.top = '0';
        canvas.style.left = '0';
        canvas.style.zIndex = '-1'; // 콘텐츠 뒤에 배치
        
        // ⭐ display: none; 요소를 제외한, 실제 보이는 콘텐츠의 가장 낮은 지점을 수동으로 계산합니다.
        let calculatedHeight = window.innerHeight; // 최소한 뷰포트 높이 보장

        // Body의 자식 요소들을 순회하며 실제 높이를 측정합니다.
        const bodyChildren = document.body.children;
        
        for (let i = 0; i < bodyChildren.length; i++) {
            const el = bodyChildren[i];
            const style = window.getComputedStyle(el);
            
            // display: none 이 아니고, position: fixed가 아닌 요소만 계산에 포함
            if (style.display !== 'none' && style.position !== 'fixed' && el.tagName !== 'SCRIPT' && el.id !== 'bg-stars') {
                // offsetTop + offsetHeight은 요소의 바닥 지점을 문서 기준으로 나타냅니다.
                const bottomPosition = el.offsetTop + el.offsetHeight;
                if (bottomPosition > calculatedHeight) {
                    calculatedHeight = bottomPosition;
                }
            }
        }
        
        // 최종 캔버스 높이 설정 (하단 마진 등을 고려하여 약간의 여백 추가)
        const finalHeight = calculatedHeight + 50; 
        canvas.height = finalHeight;

        // 만약 height가 0이나 너무 작으면, 최소 뷰포트 높이를 보장
        if (canvas.height < window.innerHeight) {
             canvas.height = window.innerHeight;
        }


        // 별들을 캔버스의 새로운 크기에 맞춰 재생성 및 위치 조정
        stars = initializeStars(canvas.width, canvas.height);
        stars.forEach(star => {
            star.y = Math.random() * canvas.height; 
            star.baseY = star.y; // 패럴랙스 계산을 위한 기준 Y 좌표 저장
        });
        
        // ScrollTrigger.refresh를 next tick(0ms 지연)으로 지연 실행하여 정확한 높이 계산을 보장
        if (typeof ScrollTrigger !== 'undefined') {
            setTimeout(() => { 
                // 기존 GSAP 인스턴스 파괴 후 재생성 (높이 재계산을 위해 필수)
                window.setupGSAPAnimations(true); 
                ScrollTrigger.refresh(true); 
            }, 0); 
        }
    }

    // 별 그리기 함수 (파랄랙스 적용)
    function drawStar(star, scrollY) {
        ctx.beginPath();
        // 스크롤 양에 따라 별의 위치를 조정하여 패럴랙스 효과 생성
        const parallaxY = star.baseY - scrollY * 0.3; 
        ctx.arc(star.x, parallaxY, star.radius, 0, Math.PI * 2);
        ctx.fillStyle = starColor;
        ctx.globalAlpha = star.opacity;
        ctx.fill();
    }

    /**
     * [전역 함수] 별 애니메이션 루프를 시작합니다.
     */
    window.animateStars = function() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        const scrollY = window.scrollY; 

        stars.forEach(star => {
            // 별 밝기 깜박임 효과
            if (Math.abs(star.opacity - star.targetOpacity) < starFadeSpeed) {
                star.opacity = star.targetOpacity;
                star.targetOpacity = minStarOpacity + Math.random() * (1 - minStarOpacity);
            } else {
                if (star.opacity < star.targetOpacity) {
                    star.opacity += starFadeSpeed;
                } else {
                    star.opacity -= starFadeSpeed;
                }
            }
            drawStar(star, scrollY);
        });

        requestAnimationFrame(animateStars);
    }

    /**
     * [전역 함수] GSAP 스크롤 기반 애니메이션을 설정
     */
    window.setupGSAPAnimations = function(destroyIfExists = false) {
        // GSAP 및 ScrollTrigger 로드 여부 확인
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
            // console.warn 제거
            return;
        }

        if (destroyIfExists) {
            // GSAP 애니메이션 및 ScrollTrigger를 모두 파괴 (높이 재계산을 위해 필수)
            ScrollTrigger.getAll().forEach(trigger => trigger.kill());
            gsap.killTweensOf(".filled_content");
        }

        gsap.registerPlugin(ScrollTrigger);

        const textFillElement = document.querySelector('.filled_content');
        if (textFillElement) {
            gsap.to(textFillElement, {
                width: '100%',
                duration: 1.5,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".infomation_sec",
                    start: "top 70%", // .infomation_sec가 뷰포트 70%에 도달하면 시작
                    end: "bottom center",
                }
            });
        }
    }

    // ----------------------------------------------------------------------
    // 초기화 및 이벤트 리스너
    // ----------------------------------------------------------------------

    // window.onload로 묶어 DOM 및 CSS 로딩 완료 후 실행되도록 합니다.
    window.addEventListener('load', function() {
        window.updateCanvasAndStars();
        window.animateStars();
        window.setupGSAPAnimations(); // GSAP 애니메이션 초기 설정
    });
    
    // ⭐ 리사이즈 대응 (Debounce 적용)
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout); 
        resizeTimeout = setTimeout(function() {
            // setupHover 함수 (jQuery 파일에서 정의됨)를 먼저 호출하여 높이를 정리
            if (typeof setupHover === 'function') {
                setupHover(); 
            }
            // 캔버스 크기 재계산 (내부에서 setupGSAPAnimations(true)를 호출하여 GSAP을 초기화)
            window.updateCanvasAndStars(); 
        }, 300); // 300ms debounce
    });

} else {
    // console.warn 제거
}
