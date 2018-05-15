<?php
// header("Content-Encoding: none");
// variabler til metatags
$page = 'Stockholm Waterfront Congress Centre | WHOTHAT'; // sidens navn
$shareimage = 'shareimages_case_water.png'; // share image
$pagedescription = 'Se Stockholm Waterfront case beskrivelse her - Udvikling af multilingualt website med interaktive grundplaner.';
$keywords = '';

include '../start.php' ?>


<section id="header_section" class="case_headsection waterfront">
  <img src="<?=$sitepath?>assets/images/waterfront.png" alt="Stockholm waterfront" class="page_img">
  <div class="wrapper case_header" id="first_section">
    <div class="center_header">
    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Stockholm Waterfront <br>
Congress Centre</h1>
    <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Udvikling af multilingualt website
med interaktive grundplaner</h2>
    </div>
  </div>

  <div class="hashtags ">
    <span class="init_reveal_fadeup" style="transition-delay: 600ms;">#webudvikling</span>
    <span class="init_reveal_fadeup" style="transition-delay: 700ms;">#multilanguage</span>
    <span class="init_reveal_fadeup" style="transition-delay: 800ms;">#interaktivitet</span>
    <span class="init_reveal_fadeup" style="transition-delay: 900ms;">#wordpress</span>
  </div>

  <div class="wrapper">



  <div class="labtop init_reveal_fadeup" style="transition-delay: 1100ms;">
    <img src="<?=$sitepath?>assets/images/labtop.png" alt="labtop">
    <div class="showcase">
      <img src="<?=$sitepath?>assets/images/swcc_site.jpg" alt="website" class="rellax" data-rellax-speed="10"  id="water_desktop_page">
    </div>
  </div>

  <div class="text">
    <div class="phone">
      <img src="<?=$sitepath?>assets/images/iphone.png" alt="iphone">
      <div class="showcase">
        <img src="<?=$sitepath?>assets/images/swcc_mobilsite.jpg" alt="responsive website" class="rellax" data-rellax-speed="30" data-rellax-percentage=".005">
      </div>
    </div>
    <div class="body">
      <h2>En skræddersyet WP løsning</h2>
      <p class="text_rubrik">i Forbindelse med Stockholm Waterfront Congress Centre’s nye website blev WHOTHAT valgt som udviklingspartner, mens Marvelous stod for design og kundekontakt.</p>

      <p>Vi valgte sammen med kunden at det nye site skulle leve på en Wordpress platform, men at alt derudover skulle udvikles fra bunden. Fra det unikke design med de skrå linier (implementeret fra deres logo), til bookingmodul og et interaktivt grundplanselement. Websitet havde tidligere benyttet flash - og disse elementer skulle retolkes og udvikles i HTML for at skabe større kompatibilitet på kryds og tværs af browsere, styresystemer og platforme.</p>

      <p>Der blev lagt stor vægt på at det skulle være nemt at vedligeholde. Så udover den brugervenlighed Wordpress tilbyder, blev alt udspecificeret med skræddersyede Post-typer og formularfelter. </p>
    </div>

  </div>

  <a href="http://www.stockholmwaterfront.com/" target="_blank
  ">
    <div class="live_link">
      Se website live

    </div>
  </a>


  <div class="billeder">
    <img src="<?=$sitepath?>assets/images/swcc_plan1.jpg" alt="stockholm waterfront plan tegning" class="rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
    <img src="<?=$sitepath?>assets/images/swcc_plan2.jpg" alt="stockholm waterfront plan tegning" class="rellax" data-rellax-speed="-2" data-rellax-percentage="0.5">
  </div>


  <div class="partner_logo">
    <img src="<?=$sitepath?>assets/images/SWCC_WHITE.png" alt="stockholm waterfront">
    <img src="<?=$sitepath?>assets/images/marvelous.png" alt="marvelous">
  </div>

  </div>
</section>


 <?php include '../end.php' ?>
