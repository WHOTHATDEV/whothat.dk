<footer>

  // logo

  <div class="">
    <ul>
      <a href="whothat"><li>Forside</li></a>
      <a href="projekter"><li>Projekter</li></a>
      <a href="bureauet"><li>Bureauet</li></a>
      <a href="kontakt"><li>Kontakt</li></a>
      <a href="kundelogin"><li>Kunde login</li></a>
    </ul>

    <ul>
      <?php foreach ($SoMe as $key => $value): ?>
        <a href="<?= $value ?>"><li><?= $key ?></li></a>
      <?php endforeach; ?>
    </ul>
  </div>


  <div class="">
    <?= $adr ?>
    <?= $post ?>
    <?= $tel ?>
    <?= $cvr ?>
  </div>
</footer>
