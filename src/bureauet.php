<?php
// variabler til metatags
$page = ''; // sidens navn

include 'config/personale.php';
include 'start.php' ?>

<section id="header_section">
  <img src="assets/images/bureauet.jpg" alt="">
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

    <div class="img">
      <img src="assets/images/lokaler.jpg" alt="">
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
        <video src="assets/videos/<?= $value['video'] ?>" class="video video_hide" muted></video><img src="assets/images/<?= $value['img'] ?>" alt="">
      <footer>
        <div class="title_card">
          <div class="t">

            <h3><?= $value['navn'] ?></h3>
            <h4><?= $value['titel'] ?></h4>
            <h6><a href="mailto:<?= $value['email'] ?>"><?= $value['email'] ?></a></h6>
          </div>
        </div>
      </footer>

      </div>
      <?php endif; ?>
    <?php endforeach; ?>
    <a href="mailto:job@whothat.dk" class="sog">

      <div class="sog_job">
        <div class="content">
          Er det dig og dine kompetencer vi mangler?
  Send os cv og motiveret ansøgning på job@whothat.dk
        </div>
      </div>
    </a>
  </div>
  <div class="gamle">
    <div class="profil">

    </div>
  </div>
</section>



 <?php include 'end.php' ?>
