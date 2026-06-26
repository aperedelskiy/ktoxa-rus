<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?php IncludeTemplateLangFile(__FILE__); ?>
<?php
/** @var CMain $APPLICATION */
/** @var CUser $USER */
$isMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
$bodyClass = $isMainPage ? 'index-page' : '';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php $APPLICATION->ShowTitle() ?></title>

  <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/assets/img/android-chrome-512x512.png" sizes="512x512">
  <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/assets/img/android-chrome-192x192.png" sizes="192x192">
  <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/favicon.ico">
  <link href="<?=SITE_TEMPLATE_PATH?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Onest:wght@100..900&family=Triodion&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="<?=SITE_TEMPLATE_PATH?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=SITE_TEMPLATE_PATH?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="<?=SITE_TEMPLATE_PATH?>/assets/css/main.css" rel="stylesheet">

  <?php $APPLICATION->ShowHead() ?>
</head>

<body class="<?=htmlspecialcharsbx($bodyClass)?>">

  <?php $APPLICATION->ShowPanel() ?>

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?=SITE_DIR?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/ao-russ-short.png" alt="Ассоциация РУСЬ">
      </a>

      <nav id="navmenu" class="navmenu">
        <?php $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
          "ROOT_MENU_TYPE"        => "top",
          "MENU_CACHE_TYPE"       => "A",
          "MENU_CACHE_TIME"       => "36000000",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "MENU_CACHE_GET_VARS"   => array(),
          "MAX_LEVEL"             => "2",
          "CHILD_MENU_TYPE"       => "section",
          "USE_EXT"               => "N",
          "ALLOW_MULTI_SELECT"    => "N"
        ), false); ?>
      </nav>

    </div>
  </header>

  <main class="main">
  <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", [
      "START_FROM" => "1",
      "PATH"       => "",
      "SITE_ID"    => SITE_ID,
  ], false); ?>
