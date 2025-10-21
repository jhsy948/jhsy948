// 이 코드는 HTML에서 jQuery 라이브러리 (jquery-3.x.min.js) 로드 '다음'에 로드되어야 합니다.

$(function () { // jQuery 시작 (DOM 로드 후 실행)
    
    const $body = $('body');
    
    // 3. 카드 호버 설정 (PC 버전) - setupHover 함수를 전역에서 사용할 수 있도록 밖으로 뺌
    function setupHover() {
        const pcVersion = document.getElementById('pc-version');
        // 'pc-version' 엘리먼트가 존재해야 실행
        if (pcVersion) {
             // PC 버전 로직 (화면 너비 1024px 초과 시)
            if (window.innerWidth > 1200) {
                $(pcVersion).find('.row').each(function() {
                    const $boxes = $(this).find('.box');
                    $boxes.off('mouseenter mouseleave').on('mouseenter', function() { // 이벤트 중복 방지
                        $boxes.removeClass('shrink expand');
                        $boxes.not(this).addClass('shrink');
                        $(this).addClass('expand');
                    }).on('mouseleave', function() {
                        $boxes.removeClass('shrink expand');
                    });
                });
            } else {
                // 모바일/태블릿 이하 사이즈일 경우 모든 클래스 제거
                $(pcVersion).find('.box').removeClass('shrink expand');
            }
        }
        // 이 함수가 숨겨진 다른 반응형 요소 (예: #mobile-version)의 높이를 정리하지 못하면
        // 해당 요소에 대한 추가적인 높이 정리 로직이 필요할 수 있습니다.
    }
    
    // ⭐ DOM 로드 직후 최초 호출 (높이 정리)
    setupHover(); 

    // 시작 로딩후 스크롤 복구 액션
    $('.loadingbg').delay(6000).fadeOut(500);
    setTimeout(function () {
        $body.removeClass('no-scroll');
        $body.css('overflow', 'auto'); 
        
        // 🔥 높이 계산 전, 콘텐츠 영역 정리
        setupHover(); 

        // 🔥 정리된 BODY 높이를 기반으로 캔버스 높이 재계산
        if (typeof window.updateCanvasAndStars === 'function') {
            window.updateCanvasAndStars(); 
            window.setupGSAPAnimations(); 
        }
    }, 6000);

    // ----------------------------------------------------------------------
    // 이미지 모달윈도우
    // ----------------------------------------------------------------------
    
    // 1. 모달 열기
    $('a.modal_img').click(function(e) {
        e.preventDefault(); 
        const imgSrc = $(this).attr('href');
        
        $('.img_glayLayer, .overLayer').show(); 
        $('.overLayer > img.poster_big').attr('src', imgSrc);
        
        // 모달 열림: 스크롤 방지
        $body.css('overflow', 'hidden'); 
    });

    // 2. 모달 닫기 이벤트 처리 
    $('.overLayer , .overLayer > icon_close, .img_glayLayer').click(function() {
        $('.img_glayLayer, .overLayer').hide();
        $body.css('overflow', 'auto');
        
        // 🔥 높이 계산 전, 콘텐츠 영역 정리
        setupHover(); 

        // 🔥 정리된 BODY 높이를 기반으로 캔버스 높이 재계산
        if (typeof window.updateCanvasAndStars === 'function') {
            window.updateCanvasAndStars(); 
        }
    });

    // 초기 로드 및 리사이즈 시 호버 설정 호출 (JS Debounce가 있으므로 이중 호출될 수 있음. 하지만 일단 유지)
    $(window).on('load resize', setupHover); 
});