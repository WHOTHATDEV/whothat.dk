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

        <div class="hov_exit">
          <div class="p_wrapper">

            <ul class="primery">
                <a href="whothat" class="">
                  <li>
                    <span class="case_link ani_whothat nav_ani" data-img="frontpage.png">Forside</span>
                  </li>
                </a>
                <br>
                <a href="projekter" class="">
                  <li>
                    <span class="case_link ani_projekter nav_ani " data-img="projekter.png">Projekter</span>
                  </li>
                </a>
                <br>
                <a href="bureauet" class="">
                  <li class="" >
                    <span class="case_link ani_bureauet nav_ani " data-img="bureauet.png">Bureauet</span>
                  </li>
                </a>
                <br>
                <a href="kontakt" class="">
                  <li class="" >
                    <span class="case_link ani_kontakt nav_ani " data-img="kontakt.png">Kontakt</span>
                  </li>
                </a>
                <br>
                <a href="login" class="">
                  <li class="" >
                    <span class="case_link ani_login nav_ani " data-img="login.png">Kunde login</span>
                  </li>
                </a>
            </ul>

          </div>

          <ul class="cases">
            <?php foreach ($cases as $key => $value): ?>
            <a href="<?= $value['page'] ?>"><li class="case_link" data-img="<?= $value['img'] ?>" ><?= $key ?></li></a>
          <?php endforeach; ?>
          </ul>
        </div>


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

  </div>
</div>
