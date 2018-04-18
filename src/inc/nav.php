<div class="navigation">
  <div id="nav_controler" class="viewport">


    <!-- <a href="whothat"><img src="assets/images/whothat.png" alt="" class="logo"> </a> -->
        <a href="whothat" class="page_logo"><?php include 'assets/images/whothat.svg'; ?> </a>

    <div class="ldBar"></div>
    <div class="menu">
      <!-- <span class="menu-circle"></span> -->
      <a href="" class="menu-link">
        <span class="menu-icon">
          <span class="menu-line menu-line-1"></span>
          <span class="menu-line menu-line-2"></span>
          <span class="menu-line menu-line-3"></span>
        </span>
      </a>
      <div class="n_nav">
      </div>
    </div>

    <div class="inner_nav">
      <div class="con">


        <ul class="primery">
          <a href="whothat"><li class="case_link" data-img="frontpage.png">Forside</li></a>
          <a href="projekter"><li class="case_link" data-img="projekter.png">Projekter</li></a>
          <a href="bureauet"><li class="case_link" data-img="bureauet.png">Bureauet</li></a>
          <a href="kontakt"><li class="case_link" data-img="kontakt.png">Kontakt</li></a>
          <a href="login"><li class="case_link" data-img="login.png">Kunde login</li></a>
        </ul>

        <ul class="cases">
          <?php foreach ($cases as $key => $value): ?>
          <a href="<?= $value['page'] ?>"><li class="case_link" data-img="<?= $value['img'] ?>" ><?= $key ?></li></a>
        <?php endforeach; ?>
        </ul>


        <ul class="SoMe">
          <div class="wrap">

          <li>
            <a href="#">
              <?php include 'assets/icons/fb.svg'; ?>
            </a>
          </li>
          <li>
            <a href="#">
              <?php include 'assets/icons/insta.svg'; ?>
            </a>
          </li>
          <li>
            <a href="#">
              <?php include 'assets/icons/in.svg'; ?>
            </a>
          </li>
          <li>
            <a href="#">
              <?php include 'assets/icons/v.svg'; ?>
            </a>
          </li>
          </div>
        </ul>

      </div>
    </div>
    <div id="bg">
      <img src="" alt="" id="bg_image">
      <img src="" alt="" id="bg_image2">
    </div>

    <!-- <div id="background"><div class="ldBar"></div><img src="" alt="" id="bg_image"></div> -->
    <!-- <div class="menu-overlay">
      <div class="content">
        <ul class="primery">
          <a href="whothat"><li class="case_link" data-img="office.jpg">Forside</li></a>
          <a href="projekter"><li class="case_link" data-img="projekter.jpg">Projekter</li></a>
          <a href="bureauet"><li class="case_link" data-img="bureauet.jpg">Bureauet</li></a>
          <a href="kontakt"><li class="case_link" data-img="kontakt.jpg">Kontakt</li></a>
          <a href="login"><li class="case_link" data-img="login.jpg">Kunde login</li></a>
        </ul>

        <ul class="cases">
          <?php foreach ($cases as $key => $value): ?>
            <a href="<?= $value['page'] ?>"><li class="case_link" data-img="<?= $value['img'] ?>" ><?= $key ?></li></a>
          <?php endforeach; ?>
        </ul>


        <ul class="SoMe">

        </ul>
      </div>
    </div> -->
  </div>
</div>
