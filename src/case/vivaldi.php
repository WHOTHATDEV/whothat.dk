<?php
// header("Content-Encoding: none");
// variabler til metatags
$page = 'Vivaldi Catering | WHOTHAT'; // sidens navn
$shareimage = 'vivaldi_shareimage.jpg'; // share image
$pagedescription = 'Se Vivaldi Catering case beskrivelse her - Storytelling og catering på social media.';
$keywords = '';

include '../start.php' ?>


<section id="header_section" class="case_headsection vivaldi">
  <img src="<?=$sitepath?>assets/images/vivaldi.png" alt="vivaldi catering" class="page_img">
  <div class="wrapper case_header" id="first_section">
    <div class="center_header">
    <h1 class="init_reveal_fadeup" style="transition-delay: 200ms;">Vivaldi Catering</h1>
    <h2 class="init_reveal_fadeup" style="transition-delay: 400ms;">Storytelling og catering på social media.</h2>
    </div>
  </div>

  <div class="hashtags">
    <span class="init_reveal_fadeup" style="transition-delay: 600ms;">#Socialemedier</span>
    <span class="init_reveal_fadeup" style="transition-delay: 700ms;">#Storytelling</span>
    <span class="init_reveal_fadeup" style="transition-delay: 800ms;">#Contenthåndtering</span>
    <span class="init_reveal_fadeup" style="transition-delay: 900ms;">#Videoproduktion</span>
    <span class="init_reveal_fadeup" style="transition-delay: 1000ms;">#Kage</span>
  </div>

  <div class="wrapper">

    <div class="main_image init_reveal_fadeup" style="transition-delay: 1200ms;">
      <img src="<?=$sitepath?>assets/images/kage.jpg" alt="kage buffet">
    </div>


    <div class="story">
      <div class="text scr_reveal_fadeup_large">
        <h2>Der er god kage i godt content</h2>
        <p class="text_rubrik">Fra en konkurrencepræget Facebookside uden de store samtaler - til en side hvor relationer, dialog og fællesskab nu danner hele rammen for tilstedeværelsen.</p>
        <p>Strategien var at “tale” til målgruppens indre cookiemonster og lade det bløde content og de vanvittige kage- og madbilleder være fundamentet. Medarbejderne skulle desuden have en ny central rolle - fra at stå i køkkenet og røre i gryderne, fik de nu plads i rampelyset og blev “afsender” på den content der var knyttet til deres arbejdsområde.</p>
        <p>Vivaldis kager har især dannet grobund for tilstedeværelsen på Facebook - alt fra kagebilleder til kagevideoer har formået at fastholde målgruppens interessere - og kombineret med menneskerne bag er fællesskabet og engagementet vokset - endda uden at vi fremstår pushy og opmærksomhedskrævende.</p>
      </div>
      <img src="<?=$sitepath?>assets/images/cake.png" alt="kager" class="scr_reveal_fadeup">
    </div>

    <div class="stats">
      <h2>De første 6 måneder</h2>
      <div class="stat scr_reveal_fadeup">
        <span>26%</span>
        Stigning af følger på Facebook
      </div>
      <div class="stat scr_reveal_fadeup" style="transition-delay: 200ms;">
        <span>63.600</span>
        Videovisninger fordelt på 4 videoer
      </div>
      <div class="stat scr_reveal_fadeup" style="transition-delay: 500ms;">
        <span>131%</span>
        Organisk rækkevidde i forhold til antal følgere
      </div>
    </div>


    <div class="stripe_breaker"></div>

    <div class="video">
      <p>For at brede Vivaldi Catering ud til mere end bare Facebook, tog vi dem ud på gaden til et møde med deres kunder i øjenhøjde. Heldigvis er kage ikke det sværeste at “sælge” på en gråvejrsdag - og vi fik filmet opgøret med myten om at cateringmad kun er vakumpakket rullebåndsmad.</p>

      <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/252868867?color=57a1a9&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
    </div>

    <div class="stripe_breaker"></div>



  <div class="partner_logo">
    <img src="<?=$sitepath?>assets/images/vivalid_logo.png" alt="vivaldi">
  </div>

  </div>
</section>


<?php
  $scripts[] = "../assets/case_code/script.js";

   include '../end.php' ?>
