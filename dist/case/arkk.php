<?php
header("Content-Encoding: none");
// variabler til metatags
$page = 'Arkk Copenhagen | WHOTHAT'; // sidens navn
$shareimage = 'shareimages_case_arkk.png'; // share image
$pagedescription = 'Se Arkk case beskrivelse her - Udvikling af digital bannerkampagne i forindelse med produktlancering.';
$keywords = '';

include '../start.php' ?>


<section id="header_section" class="case_headsection arkk">
  <img class="page_img" src="<?=$sitepath?>assets/images/arkk.png" alt="arkk compenhagen" class="page_img">
  <div class="wrapper case_header" id="first_section">
    <div class="center_header">
      <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Arkk Copenhagen</h1>
      <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Udvikling af digital bannerkampagne i forbindelse med produktlancering.</h2>
    </div>
  </div>

  <div class="hashtags">
    <span class="init_reveal_fadeup" style="transition-delay: 600ms;">#html5</span>
    <span class="init_reveal_fadeup" style="transition-delay: 700ms;">#banner</span>
    <span class="init_reveal_fadeup" style="transition-delay: 800ms;">#video</span>
    <span class="init_reveal_fadeup" style="transition-delay: 900ms;">#superfedesko</span>
  </div>

  <div class="wrapper">


    <div class="banner init_reveal_fadeup" style="transition-delay: 1100ms;">
      <div class="row">
        <div class="banners" id="iframes">
          <!-- <iframe src="<?=$sitepath?>assets/case_code/Raven_Men/index.html" width="300" height="250" scrolling="no" class="init_reveal_fadeup" style="transition-delay: 1300ms;"></iframe> -->
          <iframe src="" width="300" height="250" scrolling="no" class="init_reveal_fadeup" style="transition-delay: 1300ms;"></iframe>
          <!-- <iframe src="<?=$sitepath?>assets/case_code/Raven_Mesh_Soft_Army/index.html" width="300" height="250" scrolling="no" class="init_reveal_fadeup" style="transition-delay: 1500ms;" ></iframe> -->
          <iframe src="" width="300" height="250" scrolling="no" class="init_reveal_fadeup" style="transition-delay: 1500ms;" ></iframe>
          <!-- <iframe src="<?=$sitepath?>assets/case_code/Raven_Women/index.html" width="300" height="250" scrolling="no" class="init_reveal_fadeup" style="transition-delay: 1700ms;"></iframe> -->
          <iframe src="" width="300" height="250" scrolling="no" class="init_reveal_fadeup" style="transition-delay: 1700ms;"></iframe>
        </div>
      </div>
    </div>


    <div class="stripe_breaker init_reveal_fadeup" style="transition-delay: 1800ms;">

    </div>

  <!-- <div class="labtop">
    <img src="assets/images/labtop.png" alt="">
    <div class="showcase">
      <img src="assets/images/swcc_site.jpg" alt="">
    </div>
  </div> -->

  <div class="devices" >

    <div class="ipad rellax init_reveal_fadeup" style="transition-delay: 2000ms;"   data-rellax-speed="0" data-rellax-percentage="0.5" data-rellax-zindex="5">
      <img src="<?=$sitepath?>assets/images/ipad.png" alt="ipad">
      <div class="showcase">
        <img src="<?=$sitepath?>assets/videos/arkk_video_banner.gif" alt="video banner add">
      </div>
    </div>

    <div class="phone rellax scr_reveal_fadeup" data-rellax-speed="1" data-rellax-percentage="0.5" data-rellax-zindex="15">
      <img src="<?=$sitepath?>assets/images/iphone.png" alt="iphone">
      <div class="showcase">
        <img src="<?=$sitepath?>assets/videos/ark_video_banner_mobile.gif" alt="video banner add">

        </video>
      </div>
    </div>
  </div>


  <div class="text">
    <div class="image">


      <div id="fra" class="iframe_banner large rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
        <img class="layer start" id="c" src="<?=$sitepath?>assets/case_code/cta.png" alt="buy button">
        <img class="layer start" id="logo" src="<?=$sitepath?>assets/case_code/logo.png" alt="call to action">
        <img class="layer start" id="body" src="<?=$sitepath?>assets/case_code/body.png" alt="text">
        <img class="layer" src="<?=$sitepath?>assets/case_code/edge.png" alt="border">
        <img src="<?=$sitepath?>assets/case_code/sprite.jpg" id="sprite" alt="spritesheet">
        <div id="button"><div class="glair"></div></div>
      </div>

      <img src="<?=$sitepath?>assets/images/arkk_sprite_1.jpg" alt="spritesheet" class="large rellax" data-rellax-speed="2" data-rellax-percentage="0.5">
      <img src="<?=$sitepath?>assets/images/arkk_sprite_2.jpg" alt="spritesheet" class="small rellax" data-rellax-speed="1" data-rellax-percentage="0.5" >

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
    <img src="<?=$sitepath?>assets/images/arkk_logo.png" alt="arkk copenhagen">
  </div>

  </div>
</section>


<?php
  $scripts[] = "../assets/case_code/script.js";

   include '../end.php' ?>
