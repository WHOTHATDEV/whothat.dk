<div class="navigation">
  <div class="viewport">


    <a href="whothat"><img src="assets/images/whothat.png" alt="" class="logo"> </a>

    <div class="menu">
      <span class="menu-circle"></span>
      <a href="#" class="menu-link">
        <span class="menu-icon">
          <span class="menu-line menu-line-1"></span>
          <span class="menu-line menu-line-2"></span>
          <span class="menu-line menu-line-3"></span>
        </span>
      </a>
    </div>

    <div id="background"><img src="" alt="" id="bg_image"></div>
    <div class="menu-overlay">
      <div class="content">
        <ul class="primery">
          <a href="whothat" class="nav_link"><li>Forside</li></a>
          <a href="projekter" class="nav_link"><li>Projekter</li></a>
          <a href="bureauet" class="nav_link"><li>Bureauet</li></a>
          <a href="kontakt" class="nav_link"><li>Kontakt</li></a>
          <a href="kundelogin" class="nav_link"><li>Kunde login</li></a>
        </ul>

        <ul class="cases">
          <?php foreach ($cases as $key => $value): ?>
            <a href="<?= $value['page'] ?>"><li class="case_link nav_link" data-img="<?= $value['img'] ?>" ><?= $key ?></li></a>
          <?php endforeach; ?>
        </ul>


        <ul class="SoMe">

        </ul>
      </div>
    </div>
  </div>
</div>
