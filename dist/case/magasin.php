<?php

  // variabler til metatags
  $page = ''; // sidens navn

  include '../inc/assets.php';

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <?php include '../inc/head.php'; ?>
   <body>

     <!-- menu -->
     <?php include '../inc/nav.php'; ?>
     <!-- menu end -->
     <div class="viewport" id="main">

       <!-- barba.js container start -->
       <div id="barba-wrapper">
         <div class="barba-container">
        <!-- barba.js container start -->

           <!-- content -->
           <section id="header_section" class="magazin_header">
             <img src="<?=$sitepath?>assets/images/b1.jpg" alt="">
             <div class="wrapper">

               <h1>magazin case</h1>
               <h2>Yay</h2>
             </div>
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

        <!-- barba.js container end -->
         </div>
       </div>
        <!-- barba.js container end -->




         <!-- footer  -->
         <?php include '../inc/footer.php'; ?>
         <!-- footer  end -->



     </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>
  <script src="js/script.js">

  </script>
   </body>
 </html>
