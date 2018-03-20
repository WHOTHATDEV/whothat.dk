<footer id="pagefooter">

  <img src="assets/images/footerlogo.png" alt="" class="logo">

  <ul class="primery">
    <a href="whothat"><li>Forside</li></a>
    <a href="projekter"><li>Projekter</li></a>
    <a href="bureauet"><li>Bureauet</li></a>
    <a href="kontakt"><li>Kontakt</li></a>
    <a href="kundelogin"><li>Kunde login</li></a>
  </ul>

  <ul class="SoMe">
    <?php foreach ($SoMe as $key => $value): ?>
      <a href="<?= $value ?>"><li><img src="assets/icons/<?= $key ?>.svg"  alt=""></li></a>
    <?php endforeach; ?>
  </ul>
  <ul class="adr">
    <li>vej</li>
    <li>email</li>
  </ul>
</footer>
