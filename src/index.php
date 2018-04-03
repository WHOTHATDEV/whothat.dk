<?php
// variabler til metatags
$page = ''; // sidens navn

include 'start.php' ?>

       <!-- content -->
       <section id="header_section" class="forside_header">
         <img src="assets/images/office.jpg" alt="">
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
             <a href="magasin">
               <img src="assets/images/mag_thumb.jpg" alt="">
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
           <a href="arkk">
             <img src="assets/images/ark_thumb.jpg" alt="">
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
           <a href="waterfront">
           <img src="assets/images/water_thumb.jpg" alt="">
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

          <?php foreach ($ikon as $key => $value): ?>
            <div class="ikon"><h4><?= $value['titel'] ?></h4><p><?= $value['text'] ?></p></div>
          <?php endforeach; ?>

        </div>
       </section>
       <section id="partner_logoer">
         <div class="wrapper">
           <?php foreach ($partner_logos as $key => $value): ?>
             <img src="<?= $value ?>" alt="">
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
