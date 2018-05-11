<?php
header("Content-Encoding: none");
// variabler til metatags
$page = 'Kontakt'; // sidens navn
$shareimage = 'shareimages_kontakt.png'; // share image
$pagedescription = '';

include 'start.php' ?>

<section id="header_section" class="kontakt_page">
  <img src="<?=$sitepath?>assets/images/kontakt.png" alt="" class="page_img">
  <div class="dot"></div>
  <div class="wrapper" id="first_section">
    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Kig forbi</h1>
    <h2>Straight outta <span id="click_city" class="type"></span> <span class="biline init_reveal_fadeup" style="transition-delay: 1200ms;">(eller bare Slagelse om man vil...)</span></h2>
  </div>
</section>

<section class="wrapper adresse init_reveal_fadeup" style="transition-delay: 1400ms;">
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

<div class="disclaimer init_reveal_fadeup" style="transition-delay: 1600ms;">
  Drejer din henvendelse sig om jobmuligheder i WHOTHAT
kan du skrive til <a href="mailto:<?= $emails['job']?>"><?= $emails['job']?></a>
</div>

</section>



 <?php include 'end.php' ?>
