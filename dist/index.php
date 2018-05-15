<?php
// variabler til metatags

$page = 'WHOTHAT Kreativt Bureau'; // sidens navn
$shareimage = 'shareimages_forside.png'; // share image
$pagedescription = 'Digitalt kreativt bureau i Slagelse der hjælper med alt fra ordlyden i et Facebookopslag til store komplekse udviklingsopgaver.';
$keywords = 'WHOTHAT, Reklamebureau, Kreativt, bureau, marketing, digital, website, webdesign, adwords, slagelse, annoncering, Sjælland, html5 banner, content, sociale medier';
include 'start.php'
?>

       <!-- content -->
       <section id="header_section" class="forside_header">
         <img src="<?=$sitepath?>assets/images/frontpage.png" alt="whothat" class="page_img">
         <div class="ontop">
           <div class="wrapper">

             <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Et kreativt bureau</h1>
             <h2 class="init_reveal_fadeup" id="txtloop" style="transition-delay: 500ms;">
               <div id="wheel">
                 <span class="promt">Der altid inviterer med ned i sandkassen.</span>
                 <span class="promt">Der har rimelig godt styr på de der sociale medier.</span>
                 <span class="promt">Der forvandler salgsstrategier til emojis på sociale medier.</span>
                 <span class="promt">Der ikke bruger beskidte tricks som bindinger og licensløsninger.</span>
                 <span class="promt">Der trods adressen i udkantsdanmark tør tænke stort!</span>
                 <span class="promt">Der har savet overliggeren af så der kan tænkes stort og nyt.</span>
                 <span class="promt">Der blander storbytanker med provinsielle priser.</span>
                  <span class="promt">Der både byder små lokale og store internationale virksomheder op til dans.</span>
                  <span class="promt">Der gerne misser et par timers nattesøvn for det perfekte resultat.</span>
                  <span class="promt">Der ikke møder op med det trivielle bureausæt; slips og powerpoint.</span>
                 <span class="promt">Der holder kreativ fest hver dag - og alle er inviteret.</span>
                 <span class="promt">Der er f€%ing sjove at lege med…</span>
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
               <div class="container">
                 <img src="<?=$sitepath?>assets/images/vivaldi_thumb.jpg" alt="vivaldi">
               </div>
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
             <div class="container">
               <img src="<?=$sitepath?>assets/images/arkk_thumb.jpg" alt="arkk">
             </div>
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
             <div class="container">
           <img src="<?=$sitepath?>assets/images/swcc_thumb.jpg" alt="stockholm waterfront"></div>
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

                 <img src="<?=$sitepath?>assets/images/vivaldi_small.jpg" alt="vivalid">

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
             <img src="<?=$sitepath?>assets/images/arkk_small.jpg" alt="arkk">
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
           <img src="<?=$sitepath?>assets/images/swcc_small.jpg" alt="stockholm">
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
             <img src="<?=$sitepath?><?= $value ?>" alt="instafeed">
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
