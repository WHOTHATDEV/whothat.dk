<?php
// variabler til metatags
$page = ''; // sidens navn

include 'start.php' ?>

       <!-- content -->
       <section id="header_section" class="forside_header">
         <img src="<?=$sitepath?>assets/images/frontpage.png" alt="">
         <div class="ontop">
           <div class="wrapper">

             <h1>Et kreativt bureau</h1>
             <h2>...der tør tænke ud af boksen.</h2>
           </div>
         </div>
       </section>
       <section id="forside_cases">
         <div class="wrapper">
           <div class="case_thumb tall">
             <a href="<?=$sitepath?>case/magasin">
               <img src="<?=$sitepath?>assets/images/mag_thumb.jpg" alt="">
             <div class="txt">
               <div class="labels">
                 Kunde
                 <br>
                 Projekt
               </div>
               <div class="">
                 Magasin du Nord
                 <br>
                 Mere weekend i hverdagen
               </div>
               </div>
             </a>
           </div>
         <div class="case_thumb tall">
           <a href="<?=$sitepath?>case/arkk">
             <img src="<?=$sitepath?>assets/images/ark_thumb.jpg" alt="">
           <div class="txt">
             <div class="labels">
               Kunde
               <br>
               Projekt
             </div>
             <div class="">
               Arkk Copenhagen
               <br>
               Online banner kampagne
             </div>

           </div>
          </a>
         </div>
         <div class="case_thumb tall">
           <a href="<?=$sitepath?>case/waterfront">
           <img src="<?=$sitepath?>assets/images/water_thumb.jpg" alt="">
           <div class="txt">
             <div class="labels">
               Kunde
               <br>
               Projekt
             </div>
             <div class="">
               Stockholm Waterfront, Mrvls
               <br>
               Udvikling af website
             </div>
           </div>
           </a>
         </div>
       </div>
       </section>
       <section id="ikoner">
        <div class="wrapper">


            <div class="ikon"><?php include 'assets/icons/'.$ikon[0]['ikon']; ?> <h4><?= $ikon[0]['titel'] ?></h4><p><?= $ikon[0]['text'] ?></p></div>

            <div class="ikon"><?php include 'assets/icons/'.$ikon[1]['ikon']; ?> <h4><?= $ikon[1]['titel'] ?></h4><p><?= $ikon[1]['text'] ?></p></div>

            <div class="ikon"><?php include 'assets/icons/'.$ikon[2]['ikon']; ?> <h4><?= $ikon[2]['titel'] ?></h4><p><?= $ikon[2]['text'] ?></p></div>

            <div class="ikon"><?php include 'assets/icons/'.$ikon[3]['ikon']; ?> <h4><?= $ikon[3]['titel'] ?></h4><p><?= $ikon[3]['text'] ?></p></div>

            <div class="ikon"><?php include 'assets/icons/'.$ikon[4]['ikon']; ?> <h4><?= $ikon[4]['titel'] ?></h4><p><?= $ikon[4]['text'] ?></p></div>

            <!-- <div class="ikon"><?php include 'assets/icons/'.$ikon[4]['ikon']; ?> <h4><?= $ikon[4]['titel'] ?></h4><p><?= $ikon[4]['text'] ?></p></div> -->

            <div class="ikon"><?php include 'assets/icons/'.$ikon[5]['ikon']; ?> <h4><?= $ikon[5]['titel'] ?></h4><p><?= $ikon[5]['text'] ?></p></div>


        </div>
       </section>
       <section id="partner_logoer">
         <div class="wrapper">
           <?php foreach ($partner_logos as $key => $value): ?>
             <img src="<?=$sitepath?><?= $value ?>" alt="">
           <?php endforeach; ?>
         </div>
       </section>
       <section id="insta">
         <div class="wrapper">
           <div id="instafeed">

           </div>
         </div>
       </section>
         <!-- content end -->

 <?php include 'end.php' ?>
