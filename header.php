<?php

require_once './settings.php';
require_once './app/libs/Dev.php';

//$x = new Dev(true);

?>

<html lang="en">
    <head>
        <title><?=$title;?></title>

        <meta charset="UTF-8">
        <meta name="theme-color" content="#FFF">
        <meta name="author" content="webnet.kz">
        <meta name="description" content="<?=$description;?>">
        <meta name="keywords" content="<?=$keywords;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="./assets/css/styles.css">
        <link rel="stylesheet" href="./assets/css/mobile.css">

        <link rel="icon" type="image/x-icon" href="./favicon.ico">
        <link rel="apple-touch-icon" href="./assets/logo512.png">
        <link rel="manifest" href="./manifest.json">

        <meta name="google-site-verification" content="UGwPJEZYHEornsuWBBjKDpaKe9ag7E-c-O6N-fAxaeA" />
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
          (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
          m[i].l=1*new Date();
          for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
          k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

          ym(99108203, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
          });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/99108203" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
      </head>
<body>
