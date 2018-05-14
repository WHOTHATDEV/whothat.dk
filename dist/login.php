<?php
// variabler til metatags
$page = 'Kundeområde | WHOTHAT'; // sidens navn
$shareimage = 'shareimages_login.png'; // share image
$pagedescription = 'Vi giver mulighed for at vores kunder kan monitorere og ændre i gangværende kampagner og apps, samt få overblik over projekter og content.';


include 'start.php' ?>


<section id="header_section">
  <img src="<?=$sitepath?>assets/images/login.png" alt="login" class="page_img">
  <div class="wrapper" id="first_section">
    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Kundeområde</h1>
    <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Få overblik over aktuelle kampagner
og contentplanlægning</h2>
  </div>
</section>

<section class="wrapper login">
  <form class="" action="http://cm.whothat.dk/" method="post">
    <input type="hidden" name="job" value="login">
    <div class="inp init_reveal_fadeup" style="transition-delay: 800ms;">
      <span><img src="<?=$sitepath?>assets/icons/profil.png" alt="user"> </span><input type="text" name="username" value="">
    </div>
    <div class="inp init_reveal_fadeup" style="transition-delay: 1000ms;">
      <span><img src="<?=$sitepath?>assets/icons/lock.png" alt="lock"></span><input type="password" name="password" value="">
    </div>
    <button type="submit" name="button" class="init_reveal_fadeup" style="transition-delay: 1200ms;">Log ind</button>
  </form>

  <div class="login_disclaimer init_reveal_fadeup" style="transition-delay: 1600ms;">Kundeområde gælder kun WHOTHAT’s kunder.
  Har du glemt dit login så kontakt os på 53 884 888</div>
</section>




 <?php include 'end.php' ?>
