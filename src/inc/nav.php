<div class="navigation">
      <div class="viewport">

       <a href="#"><img src="assets/images/whothat.png" alt="" class="logo"> </a>

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

        <div class="menu-overlay">
          <div class="content">
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
                <a href="<?= $value ?>"><li><img src="assets/icons/<?= $key ?>.svg"  alt=""></li></a>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
