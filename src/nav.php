<section id="navigation">


  <div class="nav_bar">
    <img src="assets/images/whothat.png" alt="">
    <div id="bars">
      <span id="menu_animaton" class=""></span>
    </div>
  </div>

  <div class="nav_shade"></div>

  <nav class="display" id="menu">
    <div id="viewport">
      <div class="body">
        <div class="wrapper">
          <ul class="primery">
            <a href="whothat"><li>Forside</li></a>
            <a href="projekter"><li>Projekter</li></a>
            <a href="bureauet"><li>Bureauet</li></a>
            <a href="kontakt"><li>Kontakt</li></a>
            <a href="kundelogin"><li>Kunde login</li></a>
          </ul>

          <ul>
            <?php foreach ($cases as $key => $value): ?>
              <a href="#"><li><?= $key ?></li></a>
            <?php endforeach; ?>
          </ul>


          <ul>
            <?php foreach ($SoMe as $key => $value): ?>
              <a href="<?= $value ?>"><li><?= $key ?></li></a>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>

</section>
