<!Doctype html>
<html lang="nb">
<head>
  <base href="<?php
    $d = str_replace("\\", "/", __DIR__); $root = str_replace($_SERVER['DOCUMENT_ROOT'], "", $d); $root = str_replace("Elements", "", $root);
    echo $root; global $root;
  ?>">

  <meta charset="UTF-8">
  <link rel="shortcut icon" href="Images/Favicon.ico">
  <link rel="stylesheet" href="Styling/Styling.css">
  <title><?php echo $title; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta name="keywords" content="sandergodard.com, sandergodard, Sander Godard, portfolio, Web utvikler, Sander Maurice Godard">

  <meta name="author" content="Sander Godard">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#6C1919">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#6C1919">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#6C1919">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <script defer type="text/javascript" src="Scripts/ScrollTop.js"></script>
  <script defer type="text/javascript" src="Scripts/Scroll.js"></script>
  <!--  <script defer type="text/javascript" src="Scripts/MobileArrows.js"></script>  -->
  <!-- <script defer type="text/javascript" src="../Scripts/MobileMenuIndex.js"></script> -->
  <script defer type="text/javascript" src="Scripts/SMS.js"></script>
  <script defer type="text/javascript" src="Scripts/MobileMenu.js"></script>
  <script defer type="text/javascript" src="Scripts/Search.js"></script>
  <script defer type="text/javascript" src="Scripts/Modal.js"></script>
  <script defer type="text/javascript" src="Scripts/HashLink.js"></script>

</head>
