<!-- barba.js container end -->
 </div>
</div>
<!-- barba.js container end -->




  <!-- footer  -->
<?php include 'inc/footer.php'; ?>
  <!-- footer  end -->



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/typeit@5.9.0/dist/typeit.min.js" /></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-visible/1.2.0/jquery.visible.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.6.2/rellax.js"></script>

<script src="js/script.js"></script>

<?php foreach ($scripts as $value): ?>
  <script type="text/javascript" src="<?= $value ?>"></script>
<?php endforeach; ?>
</body>
</html>

<?php
  // include 'inc/cach_end.php';
?>
