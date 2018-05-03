<?php
// variabler til metatags
$page = ''; // sidens navn

include 'config/personale.php';
include 'start.php' ?>

<section id="header_section">
  <img src="<?=$sitepath?>assets/images/bureauet.png" alt="">
  <div class="wrapper" id="first_section">

    <h1>Hmm Whothat?</h1>
    <h2>Fra ordlyden i et Facebookopslag
      til store komplekse udviklingsopgaver.</h2>
  </div>
</section>

<section class="wrapper rubrik">
  <h4>WHOTHAT er et kreativt bureau med <span>ekspertise i det digitale</span> og en særlig forkærlighed til <span>sociale medier</span>. Vi har samlet kræfter og kompetencer inden for særligt webudvikling, online annoncering og de sociale platforme.</h4>
</section>

<section class="fullwidth" id="dna">

  <div class="wide_wrapper">

    <div class="img scr_reveal_fadeup">
      <img src="<?=$sitepath?>assets/images/lokaler.jpg" alt="">
    </div>
    <div class="text">
      <h1>Digital dna</h1>
      <p class="indledning">Her en tekst om vores filosofi. hvornår vi startede og vores primære kompetencer. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <p>Quisque elementum, orci in efficitur lobortis, justo est fringilla sapien, tincidunt molestie nisi magna vel nibh. Donec fermentum pulvinar cursus. Aliquam eget quam eget leo euismod dapibus sit amet ut felis. Nam rutrum pulvinar nisl, eget elementum sem ornare faucibus. Suspendisse a vehicula turpis. Integer posuere congue magna, eu varius nunc facilisis sed.</p>
    </div>
  </div>

</section>

<section class="wrapper" id="team">
  <h1>Sig hej til os</h1>
  <h2>...et super dedikeret team af kreative og vanvittigt søde menneser.</h2>
  <div class="aktive">




    <?php foreach ($medarbejder as $key => $value): ?>
      <?php if ($value['aktiv']): ?>

      <div class="profil">

        <div class="blockgin_out"></div>
        <div class="green_filter"></div>

        <div class="title">
          <h4><?= $value['titel'] ?></h4>
        </div>
        <div class="img">

        <video src="<?=$sitepath?>assets/videos/<?= $value['video'] ?>" class="video video_hide" muted preload autoplay playsinline></video>
        <img src="<?=$sitepath?>assets/images/<?= $value['img'] ?>" alt="">
        <div class="gradient">

        </div>
        <footer>
          <div class="title_card">
            <div class="t">

              <h3><?= $value['navn'] ?></h3>
              <h6><a href="mailto:<?= $value['email'] ?>"><?= $value['email'] ?></a><?php if(isset($value['tlf'])){ ?><a href="tel:<?= $value['tlf'] ?>"><?= $value['tlf'] ?></a><?php }?></h6>
              <div class="somerow">
                <?php if (isset($value['fb'])): ?>
                  <a href="<?= $value['fb'] ?>" target="_blank"><?php include "assets/icons/fb.svg" ?></a>
                <?php endif; ?>
                <?php if (isset($value['insta'])): ?>
                  <a href="<?= $value['insta'] ?>" target="_blank"><?php include "assets/icons/insta.svg" ?></a>
                <?php endif; ?>
                <?php if (isset($value['in'])): ?>
                  <a href="<?= $value['in'] ?>" target="_blank"><?php include "assets/icons/in.svg" ?></a>
                <?php endif; ?>
                <?php if (isset($value['v'])): ?>
                  <a href="<?= $value['v'] ?>" target="_blank"><?php include "assets/icons/v.svg" ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </footer>
      </div>

      </div>
      <?php endif; ?>
    <?php endforeach; ?>


    <div class="profil">
      <div class="blockgin_out"></div>
      <div class="green_filter"></div>
      <a href="mailto:job@whothat.dk" class="sog">
      <div class="title">
        <h4>Stilling</h4>
      </div>
      <div class="img sog_job">

        <div class="content">

          Er det dig og dine kompetencer vi mangler?
          <br>
          <br>
          Send os cv og motiveret ansøgning på job@whothat.dk
        </div>

      </div>
    </a>
    </div>




  </div>


    <!-- <div class="profil">

      <div class="img">

      </div>
    </div> -->

    <!-- <div class="profil">

      </div> -->

    <!-- </div> -->

      <!-- <div class="sog_job">
      </div> -->


</section>



 <?php include 'end.php' ?>
