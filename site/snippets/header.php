<!DOCTYPE html>
<html lang="en" markdown="1">
<head>

  <meta charset="utf-8" />
  <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.ico">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php

    echo css('assets/css/main.css');

    $cssURI  = 'assets/css/' . $page->template() . '.css';
    $cssRoot = c::get('root') . '/' . $cssURI;

    echo css($cssURI);

  ?>

  <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">

</head>
<body class="<?php echo date('l'); ?> <?php if(date('H') == 17 || date('H') == 7 ){ ?> goldenhour <?php } ?>">
