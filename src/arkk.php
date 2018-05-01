<?php
header("Content-Encoding: none");
// variabler til metatags
$page = 'Stockholm waterfron congres center'; // sidens navn
include 'start.php' ?>


<section id="header_section" class="case_headsection arkk">
  <img src="assets/images/arkk.png" alt="">
  <div class="wrapper" id="first_section">
    <h1>Arkk Copenhagen</h1>
    <h2>Udvikling af digital bannerkampagne i forindelse med produktlancering.</h2>
  </div>

  <div class="hashtags">
    <span>#html5</span>
    <span>#banner</span>
    <span>#video</span>
    <span>#superfedesko</span>
  </div>

  <div class="wrapper">


    <div class="banner">
      <img src="assets/images/arkk_banner_bg.jpg" alt="arkk banner" class="">
      <div class="row">
        <div class="banners">
          <iframe src="assets/case_code/Raven_Men/index.html" width="300" height="250" scrolling="no"></iframe>
          <iframe src="assets/case_code/Camo/index.html" width="300" height="250" scrolling="no"></iframe>
          <iframe src="assets/case_code/Raven_Women/index.html" width="300" height="250" scrolling="no"></iframe>
        </div>
      </div>
    </div>


    <div class="stripe_breaker">

    </div>

  <!-- <div class="labtop">
    <img src="assets/images/labtop.png" alt="">
    <div class="showcase">
      <img src="assets/images/swcc_site.jpg" alt="">
    </div>
  </div> -->

  <div class="devices">

    <div class="ipad">
      <img src="assets/images/ipad.png" alt="">
      <div class="showcase">
        <video src="assets/videos/arkk_video_banner.mp4" autoplay loop>

        </video>
      </div>
    </div>

    <div class="phone">
      <img src="assets/images/iphone.png" alt="">
      <div class="showcase">
        <video src="assets/videos/ark_video_banner_mobile.mp4" autoplay loop>

        </video>
      </div>
    </div>
  </div>


  <div class="text">
    <div class="image">

      <!-- <img src="assets/images/arkk_bannner.jpg" alt=""> -->
      <iframe src="assets/case_code/arkk_160x600/ind.html" width="160" height="600" class="iframe_banner"></iframe>
      <img src="assets/images/arkk_sprite_1.jpg" alt="" class="large">
      <img src="assets/images/arkk_sprite_2.jpg" alt="" class="small">

    </div>
    <div class="body">
      <h2>Den kreative løsning</h2>
      <p class="text_rubrik">Det danske sneaker brand Arkk Copenhagen har på ganske få år etableret sig selv på den internationale sneaker scene og deres sko forhandles lige nu i mere end 35 lande.</p>

      <p>Deres sneakers er minimalistiske, lækre og rene i designet - Noget som vi også forsøger at fortolke i deres digitale markedsføring. WHOTHAT har i forbindelse med diverse produktlanceringer designet og udviklet HTML5 bannere til forskellige platforme, og da Arkks markedsføring primært er båret af video og billeder, skulle dette også være de bærende elementer i bannerne.</p>

      <p>Derfor skulle der tænkes kreativt da Google Adwords netværket ikke normalvis tillader fjernhostet video og ikke har plads til crossbrowser kompatible videoformater. Løsningen blev at vi eksporterede videoerne som stilbilleder i et sprite-grid og brugte Javascript til at afspille det i banneret.</p>

      <p>Arkk fik deres videobannere, Googles reglement blev overholdt og vi tog et ekstra hiv i M&Ms automaten. Good Times.</p>
    </div>

  </div>


  <div class="partner_logo">
    <img src="assets/images/arkk_logo.png" alt="arkk">
  </div>

  </div>
</section>





 <?php include 'end.php' ?>
