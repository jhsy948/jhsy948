<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hr PORTFOLIO</title>
  <link href="./my_favicon.png" rel="icon">
  <!-- INC -->
  <?php include_once ("inc/port_meta.php");?>
  <!-- CSS -->
  <link href="common/css/stylelist.css" rel="stylesheet">
  <link href="common/css/header.css" rel="stylesheet">
  <link href="common/css/img-link.css" rel="stylesheet">
  <!-- JS -->
  <script src="common/js/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>
<body class="no-scroll" oncontextmenu="return false" ondragstart="return false">
    <!-- @@@로딩 가리기 -->
    <div class="loadingbg">
      <div class="main_loader"></div>
    </div>
    <canvas id="bg-stars"></canvas>
    <section class="intro-visual-section">
    <!-- <?php include_once ("inc/port_header.php");?> -->
      <video autoplay muted loop playsinline id="main-background-video">
        <source src="video/jelly2.mp4" type="video/mp4">
      </video>
      <div class="main-bg"><img src="img/main-bg.jpg" alt=""></div>
      <h2 class="__introtxt">WEB DESIGNER,<br>WEB PUBLISHER</h2><br>
    </section>
    <section class="infomation_sec port-wrap1">
      <!-- <div class="noise_text"></div> -->
      <div class="info_t_txt">
        <h1 class="text_fill_effect" data-filled-text="어떤 일이건 책임감을 가지고 <br> 최선을 위해 도전하는 디자이너,">어떤 일이건 책임감을 가지고 <br class="tbr"> 최선을 위해 도전하는 디자이너,
          <span class="filled_on filled_content pbr">어떤 일이건 <span class="sub_t_c">책임감</span>을 가지고 <br class="tbr"> 최선을 위해 도전하는 <span class="main_t_c">디자이너</span>,</span>
          <span class="filled_on tbr" style="width: 100%;">어떤 일이건 <span class="sub_t_c">책임감</span>을 가지고 <br class="tbr"> 최선을 위해 도전하는 <span class="main_t_c">디자이너</span>,</span>
        </h1>
      </div>
      <ul class="infomation_view">
        <li class="profile_image"><img src="img/profile_image.jpg" alt=""></li>
        <li class="profile_list_txt">
          <ul>
            <li class="fw6">이혜린</li>
            <li><span class="fw6">생년월일</span> : 1997.09.29</li>
            <li><span class="fw6">전화번호</span> : 010-8664-0980</li>
            <li><span class="fw6">학력사항</span> : 2018.02 수원과학대학교 산업디자인과 졸업</li>
            <li>2016.02 안양여자고등학교 졸업</li>
            <li>경력사항</li>
            <li>- 2017.07 ~ 2017.08 대학교 과정 회사 실무 실습</li>
            <li>- 2017 수원대학교 산업디자인과 졸업 전시 위원회 (도록 제작 및 기타 운영 참여)</li>
            <li class="fw6">- 2021.06 ~ 2021.11 (디지털 디자인) 스마트기기 웹디자인 (웹퍼블리셔) 양성과정 수료</li>
            <li class="fw6" style="margin: 16px 0 8px;">- 2022.02 ~ 2022.09 eepop 웹 개발팀 근무</li>
            <li>IBK기업은행 사보 (<a href="http://ibkmagazine.co.kr/withibk/data/202209/main.php" target='_blank'>With IBK</a>, <a href="http://ibkmagazine.co.kr/wm/data/202209/main.php" target='_blank'>WIN CLASS</a>, <a href="http://ibkmagazine.co.kr/welcome/data/202209/sub/p01.php" target='_blank'>아름다운 은퇴</a>) ,</li>
            <li>금융감독원 사보 <a href="https://fsszine.or.kr/data/22_0708/main.php" target='_blank'>금감원 이야기</a> 웹진 담당 및 유지보수</li>
            <li>수자원 공사 웹진 <a href="http://k-waterwebzine.com/data/202208_ko/main/index.php" target='_blank'>물, 자연 그리고 사람</a> 제작 입찰(구축) 참여</li>
            <li>대한주택건설협회 웹진 <a href="plus-h.co.kr" target='_blank'>주택플러스</a> 제작 입찰(구축) 참여 </li>
            <li>자사 홈페이지 제작 참여 
              <br class="mbr"><a href="https://www.gdweb.co.kr/sub/view.asp?Txt_fgbn=5&str_no=18149&Txt_word=%EC%9D%B4%ED%8C%9D" class="fw6" style="color:var(--color-sub);" target='_blank'>[2022 GDWEB DESIGN AWARD 선정]</a>
            </li>
            <li class="fw6" style="margin: 16px 0 8px;">- 2023.03 ~ 2024.12 오상테크놀로지 디자인팀 근무</li>
            <li><a href="https://www.kumc.or.kr/kr/index.do">고려대학교병원</a> (의료원, 전체 병원 및 하위기관) 프로젝트 구축 및 유지보수</li>
            <li><a href="https://www.woorisavingsbank.com/" target='_blank'>우리금융저축은행</a> 구축 및 유지보수
              <br class="mbr"><a href="https://www.gdweb.co.kr/sub/view.asp?Txt_fgbn=5&str_no=20700&Txt_word=%EC%9A%B0%EB%A6%AC%EA%B8%88%EC%9C%B5%EC%A0%80%EC%B6%95%EC%9D%80%ED%96%89" class="fw6" style="color:var(--color-sub);" target='_blank'>[2023 GDWEB DESIGN AWARD 선정]</a>
              <br class="tbr"><a href="https://www.i-award.or.kr/Web/Assess/FinalCandidateView.aspx?REG_SEQNO=12696" class="fw6" style="color:#e3252b;" target='_blank'>[2023 웹어워드 코리아 은행분야 대상]</a>
            </li>
            <li><a href="https://www.fatimahosp.co.kr/" target='_blank'>창원파티마병원</a> 구축 및 유지보수
              <br class="mbr"><a href="https://www.i-award.or.kr/Web/Assess/FinalCandidateView.aspx?REG_SEQNO=13565" class="fw6" style="color:#e3252b;" target='_blank'>[2024 웹어워드 코리아 종합의료분야 최우수상]</a>
            </li>
            <li>이대병원 (<a href="https://aorta.eumc.ac.kr/" target='_blank'>대동맥혈관병원</a>, <a href="https://mombaby.eumc.ac.kr/" target='_blank'>엄마아기병원</a>, 뇌혈관병원) 구축 및 운영</li>
            <li>임업진흥원 유지보수, 제안서 작업 수주</li>
          </ul>
        </li>
      </ul>
    </section>
    <section class="port-wrap1 container_mg">
      <div id="pc-version" class="card-container">
        <h3>PORTFOLIO</h3>
        <div class="row">
          <a href="https://aorta.eumc.ac.kr/kr/main" class="box" target='_blank'>
            <div class="thumbnail port-thumb-1"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">이대대동맥혈관병원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Dec. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="https://mombaby.eumc.ac.kr/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-2"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">이대엄마아기병원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Dec. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="https://www.fatimahosp.co.kr/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-3"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">창원파티마병원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Sep. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="https://www.woorisavingsbank.com/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-4"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">우리금융저축은행</div>
                <div class="desc">Design - PC, Mobile Main + sub<br>Sep. 2023</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="https://www.kumc.or.kr/kr/index.do" class="box" target='_blank'>
            <div class="thumbnail port-thumb-5"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">고려대학교의료원 및 산하기관</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>May. 2023</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="sub/kofpi_sub.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-6"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">임업진흥원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Jan. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="http://eepop.co.kr/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-7"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">eepop</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Aug. 2022</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="http://ibkmagazine.co.kr/withibk/data/202209/main.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-8"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">with IBK (기업은행 웹진)</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Sep. 2022</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="http://k-waterwebzine.com/data/202208_ko/main/index.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-9"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">물, 자연 그리고 사람 (수자원공사 웹진)</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Sep. 2022</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
            <a href="https://fsszine.or.kr/data/22_0708/main.php" class="box" target='_blank'>
             <div class="thumbnail port-thumb-10"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">금감원 이야기 (금융감독원 웹진)</div>
                 <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Sep. 2022</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
            <a href="sub/dr_smile_k/dr_smile_k.html" class="box" target='_blank'>
             <div class="thumbnail port-thumb-11"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title"> Dr. Smile K (개인 작업)</div>
                 <div class="desc">Design+Publishing - PC, Mobile 반응형 Main<br>Nov. 2021</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
            <a href="sub/olympicpark/main.html" class="box" target='_blank'>
             <div class="thumbnail port-thumb-12"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">올림픽공원 (개인 작업)</div>
                 <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Aug. 2021</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
         </div>
        <div class="row">
            <a href="sub/hollyscoffee/main.html" class="box" target='_blank'>
             <div class="thumbnail port-thumb-13"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">HOLLYS COFFEE (개인 작업)</div>
                 <div class="desc">Design+Publishing - PC Main<br>May. 2021</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
           <a href="img/2shiny.jpg" class="box modal_img">
            <div class="thumbnail port-thumb-14"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">빛이나 예술제</div>
                <div class="desc">포스터 제작 부분 공모전 선정<br>Dec. 2019</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
            <a href="./img/2017_col.pdf" class="box" target='_blank'>
             <div class="thumbnail port-thumb-15"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">수원과학대학교 산업디자인과 졸업전시</div>
                 <div class="desc">Design - 전시위원회 도록<br>Nov. 2017</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
         </div>
      <!-- 추가시에 이쪽 수정 -->
      </div>
      <div id="tablet-mobile-version" class="card-container">
        <h3>PORTFOLIO</h3>
        <div class="row">
          <a href="#" class="box">
            <div class="thumbnail port-thumb-1"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">이대대동맥혈관병원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Dec. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="#" class="box">
            <div class="thumbnail port-thumb-2"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">이대엄마아기병원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Dec. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="https://www.fatimahosp.co.kr/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-3"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">창원파티마병원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Sep. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="https://www.woorisavingsbank.com/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-4"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">우리금융저축은행</div>
                <div class="desc">Design - PC, Mobile Main + sub<br>Sep. 2023</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="https://www.kumc.or.kr/kr/index.do" class="box" target='_blank'>
            <div class="thumbnail port-thumb-5"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">고려대학교의료원 및 산하기관</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>May. 2023</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="sub/kofpi_sub.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-6"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">임업진흥원</div>
                <div class="desc">Design - PC, Mobile 반응형 Main + sub<br>Jan. 2024</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="http://eepop.co.kr/" class="box" target='_blank'>
            <div class="thumbnail port-thumb-7"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">eepop</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Aug. 2022</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="http://ibkmagazine.co.kr/withibk/data/202209/main.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-8"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">with IBK (기업은행 웹진)</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Sep. 2022</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
          <a href="http://k-waterwebzine.com/data/202208_ko/main/index.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-9"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">물, 자연 그리고 사람 (수자원공사 웹진)</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Sep. 2022</div>
              </div>
              <div class="arrow"></div>
            </div>
          </a>
          <a href="https://fsszine.or.kr/data/22_0708/main.php" class="box" target='_blank'>
            <div class="thumbnail port-thumb-10"></div>
            <div class="info">
              <div class="text-block">
                <div class="title">금감원 이야기 (금융감독원 웹진)</div>
                <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Sep. 2022</div>
              </div>
            <div class="arrow"></div>
            </div>
          </a>
        </div>
        <div class="row">
            <a href="sub/dr_smile_k/dr_smile_k.html" class="box" target='_blank'>
             <div class="thumbnail port-thumb-11"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title"> Dr. Smile K (개인 작업)</div>
                 <div class="desc">Design+Publishing - PC, Mobile 반응형 Main<br>Nov. 2021</div>
               </div>
               <div class="arrow"></div>
             </div>
          </a>
          <a href="sub/olympicpark/main.html" class="box" target='_blank'>
             <div class="thumbnail port-thumb-12"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">올림픽공원 (개인 작업)</div>
                 <div class="desc">Design+Publishing - PC, Mobile 반응형 Main + sub<br>Aug. 2021</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
        </div>
        <div class="row">
            <a href="sub/hollyscoffee/main.html" class="box" target='_blank'>
             <div class="thumbnail port-thumb-13"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">HOLLYS COFFEE (개인 작업)</div>
                 <div class="desc">Design+Publishing - PC Main<br>May. 2021</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
           <a href="img/2shiny.jpg" class="box modal_img">
             <div class="thumbnail port-thumb-14"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">빛이나 예술제</div>
                 <div class="desc">포스터 제작 부분 공모전 선정<br>Dec. 2019</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
         </div>
         <div class="row">
            <a href="./img/2017_col.pdf" class="box" target='_blank'>
             <div class="thumbnail port-thumb-15"></div>
             <div class="info">
               <div class="text-block">
                 <div class="title">수원과학대학교 산업디자인과 졸업전시</div>
                 <div class="desc">Design - 전시위원회 도록<br>Nov. 2017</div>
               </div>
               <div class="arrow"></div>
             </div>
           </a>
         </div>
      </div>
    </section>
    <div class="img_glayLayer"></div>
    <div class="overLayer">
        <img src="img/2shiny.jpg" class="poster_big" alt="모달 이미지">
        <span class="img_icon icon_close"></span>
    </div>
    <!-- <?php include_once ("inc/port_footer.php"); ?> -->
    <script src="common/js/port_main.js"></script>
    <script src="common/js/stars_effect.js"></script>
</body>
</html>