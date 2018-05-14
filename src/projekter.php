<?php
// variabler til metatags
$page = 'Se vores projekter | WHOTHAT'; // sidens navn
$shareimage = 'shareimages_projekter.png'; // share image
$pagedescription = 'WHOTHAT er et kreativt bureau med ekspertise i det digitale og en særlig forkærlighed til sociale medier.';
$keywords = 'WHOTHAT, cases, referencer, projekter, Arkk, Copenhagen, Vivaldi Catering, SWCC, Stockholm Waterfront';

include 'start.php' ?>



<section id="header_section" class="projekter">
  <img src="<?=$sitepath?>assets/images/projekter.png" alt="projekter" class="page_img">

  <div class="wrapper" id="first_section">

    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Projekter</h1>
    <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Vi er ret stolte over det vi har skruet sammen, i samarbejde med vores kunder.</h2>



  </div>
</section>

<section>

  <div class="cases wrapper">
    <div class="case_thumb full init_reveal_fadeup" style="transition-delay: 700ms;">
      <a href="<?=$sitepath?>case/waterfront">

        <div class="container"><img src="<?=$sitepath?>assets/images/swcc_full.jpg" alt="stockholm waterfront"></div>
        <div class="txt">
          <div class="labels">
            Kunde
            <br>
            Projekt
          </div>
          <div class="">
            Stockholm Waterfront, Marvelous
            <br>
            Udvikling af website
          </div>
        </div>
      </a>
    </div>

    <!-- <div class="row">
      <div class="case_thumb half">
        <a href="#"></a>
        <img src="<?=$sitepath?>assets/images/arkk_small.jpg" alt="">
        <div class="txt">
          <div class="labels">
            Kunde
            <br>
            Projekt
          </div>
          <div class="">
            <br>
          </div>
        </div>
      </div>


      <div class="case_thumb half">
        <a href="#"></a>
        <div class="container"><img src="<?=$sitepath?>assets/images/arkk_small.jpg" alt=""></div>
        <div class="txt">
          <div class="labels">
            Kunde
            <br>
            Projekt
          </div>
          <div class="">
            <br>
          </div>
        </div>
      </div>
    </div> -->

    <div class="case_thumb full">
      <a href="<?=$sitepath?>case/arkk">
      <div class="container"><img src="<?=$sitepath?>assets/images/arkk_full.jpg" alt="arkk"></div>
      <div class="txt">
        <div class="labels">
          Kunde
          <br>
          Projekt
        </div>
        <div class="">
          Arkk Copenhagen
          <br>
          Online banner kampagne
        </div>
      </div>
      </a>
    </div>

    <div class="case_thumb full">
      <a href="<?=$sitepath?>case/vivaldi">
      <div class="container"><img src="<?=$sitepath?>assets/images/vivaldi_full.jpg" alt="vivalid"></div>
      <div class="txt">
        <div class="labels">
          Kunde
          <br>
          Projekt
        </div>
        <div class="">
          Vivaldi Catering
          <br>
          Social Media Content
        </div>
      </div>
      </a>
    </div>

    <div class="row">
      <!-- <div class="case_thumb tall">
        <a href="#"></a>
        <div class="container"><img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt=""></div>
        <div class="txt">
          <div class="labels">
            Kunde
            <br>
            Projekt
          </div>
          <div class="">
            <br>
          </div>
        </div>
      </div>

      <div class="case_thumb tall">
        <a href="#"></a>
        <div class="container"><img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt=""></div>
        <div class="txt">
          <div class="labels">
            Kunde
            <br>
            Projekt
          </div>
          <div class="">
            <br>
          </div>
        </div>
      </div>

      <div class="case_thumb tall">
        <a href="#"></a>
        <div class="container"><img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt=""></div>
        <div class="txt">
          <div class="labels">
            Kunde
            <br>
            Projekt
          </div>
          <div class="">
            <br>
          </div>
        </div>
      </div> -->
    </div>
  </div>

</section>



 <?php include 'end.php' ?>
