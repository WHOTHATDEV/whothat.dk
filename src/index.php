<?php

  $page = '';
  include 'config/cases.php';
  include 'config/SoMe.php';
  include 'config/data.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>WHOTHAT <?= ($page != '')? " - $page" : '' ;?></title>
     <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:300,700|Merriweather:400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body>

     <!-- menu -->
     <?php include 'inc/nav.php'; ?>
     <!-- menu end -->

     <div class="viewport" id="main">
       <div class="wrapper">

         <!-- content -->

         <div class="page">


           <section>
             <h1>Et kreativt bureau</h1>
             <h2>...Der tør tænke ud af boksen.</h2>
           </section>
           <section>
             3 stk cases
           </section>
           <section>
             6 ikoner
           </section>
           <section>
             partner logoer
           </section>
           <section>
             insta feed
           </section>
         <!-- content end -->
       </div>

         <!-- footer  -->
         <?php include 'inc/footer.php'; ?>
         <!-- footer  end -->

       </div>
     </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script> -->
  <script src="js/script.js">

  </script>
   </body>
 </html>
