<?php
// variabler til metatags
$page = ' Om bureauet | WHOTHAT'; // sidens navn
$shareimage = 'shareimages_bureauet.png'; // share image
$pagedescription = 'WHOTHAT er et kreativt bureau med ekspertise i det digitale og en særlig forkærlighed til sociale medier. ';
$keywords = 'Kreativt bureau, reklamebureau, online, annoncering, webudvikling, sociale medier';

include 'config/personale.php';
include 'start.php' ?>

<section id="header_section">
  <img src="<?=$sitepath?>assets/images/bureauet.png" alt="bureauet" class="page_img">
  <div class="wrapper" id="first_section">

    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Hmm Whothat?</h1>
    <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Fra ordlyden i et Facebookopslag
      til store komplekse udviklingsopgaver.</h2>
  </div>
</section>

<section class="wrapper rubrik init_reveal_fadeup" style="transition-delay: 700ms;">

<h4>WHOTHAT er et kreativt bureau med <span>ekspertise i det digitale</span> og en særlig forkærlighed til <span>sociale medier.</span> I skulle næsten prøve at se os - vi er knivskarpe til webudvikling, online annoncering og de sociale platforme.</h4>

</section>

<section class="fullwidth init_reveal_fadeup" id="dna" style="transition-delay: 900ms;">

  <div class="wrapper">

    <!-- <div class="img scr_reveal_fadeup">
      <img src="<?=$sitepath?>assets/images/lokaler.jpg" alt="digital dna">
    </div> -->
    <div class="text_headline">
      <h1>Digital dna</h1>
    </div>
    <div class="text">
      <!-- <p class="indledning">Her en tekst om vores filosofi. hvornår vi startede og vores primære kompetencer. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <p>Quisque elementum, orci in efficitur lobortis, justo est fringilla sapien, tincidunt molestie nisi magna vel nibh. Donec fermentum pulvinar cursus. Aliquam eget quam eget leo euismod dapibus sit amet ut felis. Nam rutrum pulvinar nisl, eget elementum sem ornare faucibus. Suspendisse a vehicula turpis. Integer posuere congue magna, eu varius nunc facilisis sed.</p> -->



      <p>
      Det var en blanding af flere års erfaring fra de københavnske kreative reklame- og produktionsbureauer, hjemstavnskærlighed og kreative ambitioner, der lagde fundamentet til WHOTHAT. I sommeren 2015 slog vi de første pløkker i jorden, åbnede op og er siden vokset fra 2 til 9 mand, i takt med at både kunder og opgaver bliver større og større.</p>

      <p>Kontoret emmer af digital ja-hat og en “uden overligger” agtig stemning - meget millennials agtigt. Filosofien er enkel - Alt er muligt uanset om det er et website der skal bygges, en målgruppe der skal rammes, en social platform der skal erobres eller noget helt syvende.</p>

      <p>Digital markedsføring kan være et virvar af muligheder, platforme og kanaler og tit er kunsten at fravælge mere end at tilvælge. Det gør også at vores kompetencer breder sig ud i kreativ sparring, webudvikling, HTML5-bannere, annoncering, tekstforfatning og contentproduktion. Derudover har vi in-house video- og fotoproduktion så vi nemt og hurtigt kan lave indhold af højeste kvalitet.</p>

    </div>
  </div>

</section>

<section class="wrapper" id="team">
  <h1>Sig hej til os</h1>
  <h2>...et super dedikeret team af kreative og vanvittigt søde mennesker.</h2>
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

        <video src="<?=$sitepath?>assets/videos/<?= $value['video'] ?>" class="video video_hide" defaultMuted muted preload autoplay playsinline></video>
        <img src="<?=$sitepath?>assets/images/<?= $value['img'] ?>" alt="<?= $value['navn'] ?>">
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
