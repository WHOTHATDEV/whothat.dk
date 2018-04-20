<?php
header("Content-Encoding: none");
// variabler til metatags
$page = ''; // sidens navn
include 'start.php' ?>

<section id="header_section" class="kontakt_page">
  <img src="assets/images/kontakt.png" alt="">
  <div class="dot"></div>
  <div class="wrapper" id="first_section">
    <h1>Kig forbi</h1>
    <h2>Straight outta <span id="click_city" class="type"></span> <span class="biline">(eller bare Slagelse om man vil...)</span></h2>
  </div>
</section>

<section class="wrapper adresse">
<?= $navn ?>
<br>
<?= $adr ?>
<br>
<?= $post ?>

<br>
<br>


<a href="mailto:<?= $emails['info']?>">
  <?= $emails['info']?>
</a>
<br>
<?= $tel ?>

<div class="disclaimer">
  Drejer din henvendelse sig om jobmuligheder i WHOTHAT
kan du skrive til <a href="mailto:<?= $emails['job']?>"><?= $emails['job']?></a>
</div>

</section>



 <?php include 'end.php' ?>
