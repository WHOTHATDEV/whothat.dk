<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= ($page != '')? "$page" : 'WHOTHAT' ;?></title>
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:300,700|Merriweather:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?= $sitepath ?>css/master.css">
  <link rel="stylesheet" href="<?= $sitepath ?>css/ani.css">
  <link rel="<?= $sitepath ?>apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $sitepath ?>favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $sitepath ?>favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#58a1a9">
  <link rel="shortcut icon" href="favicon.ico">
  <meta name="msapplication-TileColor" content="#ff0000">
  <meta name="msapplication-config" content="browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

<meta http-equiv="Cache-control" content="public">

<!--  geotags -->

<meta name="geo.region" content="DK-85" />
<meta name="geo.placename" content="Slagelse" />
<meta name="geo.position" content="55.41092;11.379293" />
<meta name="ICBM" content="55.41092, 11.379293" />


  <!-- Update your html tag to include the itemscope and itemtype attributes. -->


<meta name="description" content="<?= $pagedescription ?>" />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?= ($page != '')? $page : 'WHOTHAT' ;?>">
<meta itemprop="description" content="<?= $pagedescription ?>">
<meta itemprop="image" content="<?= $sitepath . "assets/images/" . $shareimage ?>">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?= ($page != '')? $page: 'WHOTHAT' ;?>">
<meta name="twitter:description" content="<?= $pagedescription ?>">
<meta name="twitter:image:src" content="<?= $sitepath . "assets/images/" . $shareimage ?>">

<!-- Open Graph data -->
<meta property="og:title" content="<?= ($page != '')? $page : 'WHOTHAT' ;?>" />
<meta property="og:type" content="website" />
<!-- <meta property="og:url" content="http://www.whothat.dk" /> -->
<meta property="og:image" content="<?= $sitepath . "assets/images/" . $shareimage ?>" />
<meta property="og:description" content="<?= $pagedescription ?>" />
<meta property="og:site_name" content="<?= ($page != '')? $page : 'WHOTHAT' ;?>" />
<meta property="article:published_time" content="2018-05-10T10:00:00+01:00" />
<!-- <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" /> -->
<!-- <meta property="article:section" content="Article Section" /> -->
<meta property="article:tag" content="<?= $keywords ?>" />
<meta property="fb:admins" content="799667523483681" />


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119171494-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119171494-1');
</script>


</head>
