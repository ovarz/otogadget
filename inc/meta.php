<head>
<title><?php echo $video_title; ?></title>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">	
<meta name="googlebot" content="all" />
<meta name="googlebot-news" content="index,follow" />
<meta name="googlebot-image" content="index,follow" />
<meta name="google-site-verification" content="" />
<meta content="OTOGADGET" name="author" />
<meta content="id" name="language" />
<meta content="id" name="geo.country" />
<meta content="Indonesia" name="geo.placename" />
<meta http-equiv="content-language" content="In-Id" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="copyright" content="2023 | OTOGADGET">

<meta name="description" content="<?php echo $video_desc; ?>">
<meta name="keywords" content="<?php foreach($videotag_array as $videotag_list){ ?><?php echo($videotag_list['videotag_title']) ?>, <?php } ?>" />
<meta name="news_keywords" content="<?php foreach($videotag_array as $videotag_list){ ?><?php echo($videotag_list['videotag_title']) ?>, <?php } ?>" />

<meta property="fb:app_id" content="" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.otogadget.id/<?php echo $video_url; ?>" />
<meta property="og:title" content="<?php echo $video_title; ?>" />
<meta property="og:image" content="https://www.otogadget.id/img/content/content-<?php echo $video_curr; ?>.jpg" />
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1080">
<meta property="og:description" content="<?php echo $video_desc; ?>" />

<!--
<meta name="twitter:image:src" content="https://www.otogadget.id/img/content/content-<php echo $video_curr; ?>.jpg" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@OtoGadget" />
<meta name="twitter:site:id" content="@OtoGadget" />
<meta name="twitter:creator" content="@OtoGadget" />
<meta name="twitter:description" content="<php echo $video_desc; ?>" />
-->

<link rel="preconnect" href="https://www.otogadget.id">
<link rel="dns-prefetch" href="https://www.otogadget.id" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />

<link rel="preload" href="fonts/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXh0pg.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['OG'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
</head>
<body>
<?php if($video_curr == 0){ ?>
  <h1 class="hide"><?php echo $video_title; ?></h1>
<?php } ?>