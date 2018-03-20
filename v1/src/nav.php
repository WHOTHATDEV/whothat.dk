<section id="navigation">


  <div class="nav_bar">
    <img src="assets/images/whothat.png" alt="">
    <div id="bars">
      <span id="menu_animaton" class=""></span>
    </div>
  </div>

  <div class="nav_shade"></div>

  <nav class="" id="menu">
    <div id="viewport">
      <div id="background"></div>
      <div id="color"></div>
      <div class="body">
        <div class="wrapper">
          <div class="container">
            <ul class="primery">
              <a href="whothat"><li>Forside</li></a>
              <a href="projekter"><li>Projekter</li></a>
              <a href="bureauet"><li>Bureauet</li></a>
              <a href="kontakt"><li>Kontakt</li></a>
              <a href="kundelogin"><li>Kunde login</li></a>
            </ul>

            <ul class="cases">
              <?php foreach ($cases as $key => $value): ?>
                <a href="<?= $value['page'] ?>"><li class="case_link" data-img="<?= $value['img'] ?>" ><?= $key ?></li></a>
              <?php endforeach; ?>
            </ul>


            <ul class="SoMe">
              <?php foreach ($SoMe as $key => $value): ?>
                <a href="<?= $value ?>"><li><?= $key ?></li></a>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

</section>
