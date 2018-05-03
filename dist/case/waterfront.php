<?php
header("Content-Encoding: none");
// variabler til metatags
$page = 'Stockholm waterfron congres center'; // sidens navn
include '../start.php' ?>


<section id="header_section" class="case_headsection waterfront">
  <img src="<?=$sitepath?>assets/images/waterfront.png" alt="">
  <div class="wrapper" id="first_section">
    <h1>Stockholm Waterfront <br>
Congress Centre</h1>
    <h2>Udvikling af multilingualt website
med interaktive grundplaner</h2>
  </div>

  <div class="hashtags">
    <span>#webudvikling</span>
    <span>#multilanguage</span>
    <span>#interaktivitet</span>
    <span>#wordpress</span>
  </div>

  <div class="wrapper">



  <div class="labtop">
    <img src="<?=$sitepath?>assets/images/labtop.png" alt="">
    <div class="showcase">
      <img src="<?=$sitepath?>assets/images/swcc_site.jpg" alt="" class="rellax" data-rellax-speed="10"  >
    </div>
  </div>

  <div class="text">
    <div class="phone">
      <img src="<?=$sitepath?>assets/images/iphone.png" alt="">
      <div class="showcase">
        <img src="<?=$sitepath?>assets/images/swcc_mobilsite.jpg" alt="" class="rellax" data-rellax-speed="30" data-rellax-percentage=".005">
      </div>
    </div>
    <div class="body">
      <h2>En skræddersyet WP løsning</h2>
      <p class="text_rubrik">i Forbindelse med Stockholm Waterfront Congress Centre’s nye website blev WHOTHAT valgt som udviklingspartner, mens Marvelous stod for design og kundekontakt.</p>

      <p>Vi valgte sammen med kunden at det nye site skulle leve på en Wordpress platform, men at alt derudover skulle udvikles fra bunden. Fra det unikke design med de skrå linier (implementeret fra deres logo), til bookingmodul og et interaktivt grundplanselement. Websitet havde tidligere benyttet flash - og disse elementer skulle retolkes og udvikles i HTML for at skabe større kompatibilitet på kryds og tværs af browsere, styresystemer og platforme.</p>

      <p>Der blev lagt stor vægt på at det skulle være nemt at vedligeholde. Så udover den brugervenlighed Wordpress tilbyder, blev alt udspecificeret med skræddersyede Post-typer og formularfelter. </p>
    </div>

  </div>

  <div class="live_link">
    Se website live

  </div>


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
