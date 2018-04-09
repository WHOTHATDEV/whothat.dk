<?php
// variabler til metatags
$page = ''; // sidens navn
include 'start.php' ?>


<section id="header_section">
  <img src="assets/images/login.jpg" alt="">
  <div class="wrapper" id="first_section">
    <h1>Kundeområde</h1>
    <h2>Få overblik over aktuelle kampagner
og contentplanlægning</h2>
  </div>
</section>

<section class="wrapper login">
  <form class="" action="index.html" method="post">
    <div class="inp">
      <span><img src="assets/icons/profil.png" alt=""> </span><input type="text" name="user" value="">
    </div>
    <div class="inp">
      <span><img src="assets/icons/lock.png" alt=""></span><input type="password" name="pw" value="">
    </div>
    <button type="button" name="button">Log ind</button>
  </form>

  <div class="login_disclaimer">Kundeområde gælder kun WHOTHAT’s kunder.
  Har du glemt dit login så kontakt os på 53 884 888</div>
</section>




 <?php include 'end.php' ?>
