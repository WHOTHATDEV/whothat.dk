
<?php

header("Cache-Control: max-age=2592000");

// include 'inc/cach.php';
$sitepath = "http://localhost/xampp_projects/whothat.dk/dist/";
$sitepath = "http://clients.whothat.dk/whothat.dk/";




$page = 'WHOTHAT'; // sidens navn
$shareimage = 'shareimages_forside.png'; // share image
$pagedescription = '';
$keywords = '';

http://clients.whothat.dk/whothat.dk/
$scripts = array();

include 'inc/assets.php'; ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr" itemscope itemtype="http://schema.org/Article">
   <?php include  'inc/head.php'; ?>
   <body>
     <script type="text/javascript">
     window.sitepath = "<?= $sitepath ?>";
     </script>

     <!-- menu -->
     <?php include 'inc/nav.php'; ?>
     <!-- menu end -->

     <div class="viewport" id="main">

       <!-- barba.js container start -->
       <div id="barba-wrapper">
         <div class="barba-container">
        <!-- barba.js container start -->
