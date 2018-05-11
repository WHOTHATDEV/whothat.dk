<?php
// variabler til metatags
$page = 'Projekter'; // sidens navn
$shareimage = 'shareimages_projekter.png'; // share image
$pagedescription = '';

include 'start.php' ?>



<section id="header_section" class="projekter">
  <img src="<?=$sitepath?>assets/images/projekter.png" alt="" class="page_img">

  <div class="wrapper" id="first_section">

    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Projekter</h1>
    <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Vi er ret stolte over det vi har skruet sammen, i samarbejde med vores kunder.</h2>



  </div>
</section>

<section>

  <div class="cases wrapper">
    <div class="case_thumb full init_reveal_fadeup" style="transition-delay: 700ms;">
      <a href="<?=$sitepath?>case/waterfront">

        <img src="<?=$sitepath?>assets/images/swcc_full.jpg" alt="">
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
    </div> -->

    <div class="case_thumb full">
      <a href="<?=$sitepath?>case/arkk">
      <img src="<?=$sitepath?>assets/images/arkk_full.jpg" alt="">
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
      <img src="<?=$sitepath?>assets/images/vivaldi_full.jpg" alt="">
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
        <img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt="">
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
        <img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt="">
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
        <img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt="">
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
