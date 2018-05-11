<?php
// variabler til metatags
$page = ''; // sidens navn
$shareimage = 'shareimages_forside.png'; // share image
$pagedescription = '';

include 'start.php' ?>

       <!-- content -->
       <section id="header_section" class="forside_header">
         <img src="<?=$sitepath?>assets/images/frontpage.png" alt="" class="page_img">
         <div class="ontop">
           <div class="wrapper">

             <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Et kreativt bureau</h1>
             <h2 class="init_reveal_fadeup" id="txtloop" style="transition-delay: 500ms;">
               <div id="wheel">
                 <span class="promt">Der er f€%ing sjove at lege med…</span>
                 <span class="promt">Der blander storbytanker med provinsielle priser.</span>
                 <span class="promt">Der holder kreativ fest hver dag - og alle er inviteret.</span>
                 <span class="promt">Der forvandler salgsstrategier til emojis på sociale medier.</span>
                 <span class="promt">Med masser af svung i - skulle vi hilse og sige…</span>
               </div>
              </h2>
           </div>
         </div>
       </section>

       <section id="forside_cases">
         <div class="wrapper">
           <div class="case_thumb tall init_reveal_fadeup" style="transition-delay: 600ms;">
             <a href="<?=$sitepath?>case/vivaldi">
               <img src="<?=$sitepath?>assets/images/vivaldi_thumb.jpg" alt="">
             <div class="txt">
               <div class="labels">
                 Kunde
                 <br>
                 Projekt
               </div>
               <div class="">
                 Vivaldi Catering
                 <br>
                 Social Media Content
               </div>
               </div>
             </a>
           </div>
         <div class="case_thumb tall init_reveal_fadeup" style="transition-delay: 700ms;">
           <a href="<?=$sitepath?>case/arkk">
             <img src="<?=$sitepath?>assets/images/arkk_thumb.jpg" alt="">
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
         <div class="case_thumb tall init_reveal_fadeup" style="transition-delay: 800ms;">
           <a href="<?=$sitepath?>case/waterfront">
           <img src="<?=$sitepath?>assets/images/swcc_thumb.jpg" alt="">
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


       <section id="forside_cases_mobil">
         <div class="wrapper">
           <div class="case_thumb small init_reveal_fadeup" style="transition-delay: 600ms;">
             <a href="<?=$sitepath?>case/vivaldi">
               <img src="<?=$sitepath?>assets/images/vivaldi_small.jpg" alt="">
             <div class="txt">
               <div class="labels">
                 Kunde
                 <br>
                 Projekt
               </div>
               <div class="">
                 Vivaldi Catering
                 <br>
                 Social Media Content
               </div>
               </div>
             </a>
           </div>
         <div class="case_thumb small init_reveal_fadeup" style="transition-delay: 700ms;">
           <a href="<?=$sitepath?>case/arkk">
             <img src="<?=$sitepath?>assets/images/arkk_small.jpg" alt="">
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
         <div class="case_thumb small init_reveal_fadeup" style="transition-delay: 800ms;">
           <a href="<?=$sitepath?>case/waterfront">
           <img src="<?=$sitepath?>assets/images/swcc_small.jpg" alt="">
           <div class="txt">
             <div class="labels">
               Kunde
               <br>
               Projekt
             </div>
             <div class="">
               Stockholm Waterfront, Marvelous
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
