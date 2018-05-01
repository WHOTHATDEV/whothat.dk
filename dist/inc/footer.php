<footer id="pagefooter">
  <div class="positioner">

    <div class="wrapper">
      <div class="vert_center">

        <img src="<?= $sitepath ?>assets/images/footerlogo.png" alt="" class="logo">

        <ul class="primery">
          <a href="<?= $sitepath ?>whothat"><li><span class="ani_whothat footer_ani">Forside</span></li></a>
          <a href="<?= $sitepath ?>projekter" class="ani_projekter footer_ani"><li><span class="ani_projekter footer_ani">Projekter</span></li></a>
          <a href="<?= $sitepath ?>bureauet" class="ani_bureauet footer_ani"><li><span class="ani_bureauet footer_ani">Bureauet</span></li></a>
          <a href="<?= $sitepath ?>kontakt" class="ani_kontakt footer_ani"><li><span class="ani_kontakt footer_ani">Kontakt</span></li></a>
          <a href="<?= $sitepath ?>login" class="ani_login footer_ani"><li><span class="ani_login footer_ani">Kunde login</span></li></a>
        </ul>

        <ul class="SoMe">
          <a href="https://www.facebook.com/whothatdenmark/"><li><?php include 'assets/icons/fb.svg'; ?></li></a>
          <a href="https://www.linkedin.com/company/whothat/"><li><?php include 'assets/icons/in.svg'; ?></li></a>
          <a href="https://www.instagram.com/explore/locations/1014271099/whothat/"><li><?php include 'assets/icons/insta.svg'; ?></li></a>
          <a href="https://vimeo.com/user51045781"><li><?php include 'assets/icons/v.svg'; ?></li></a>
        </ul>
        <ul class="adr">
          <li><?= $adr ?></li>
          <li><?= $post ?></li>
          <li><?= $tel ?></li>
          <li><?= $cvr ?></li>
        </ul>
      </div>


    </div>
  </div>
</footer>
