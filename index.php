<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ассоциация РУСЬ");
?>

<section id="hero" class="hero section" style="position: relative; min-height: 80vh; display: flex; align-items: center; overflow: hidden;">

  <?php $APPLICATION->IncludeComponent("bitrix:news.list", "slider", [
    "IBLOCK_TYPE"          => "news",
    "IBLOCK_ID"            => IBLOCK_ID_SLIDER,
    "NEWS_COUNT"           => "10",
    "SORT_BY1"             => "SORT",
    "SORT_ORDER1"          => "ASC",
    "SORT_BY2"             => "ID",
    "SORT_ORDER2"          => "ASC",
    "CHECK_DATES"          => "Y",
    "DISPLAY_DATE"         => "N",
    "DISPLAY_PICTURE"      => "Y",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "SET_TITLE"            => "N",
    "CACHE_TYPE"           => "A",
    "CACHE_TIME"           => "36000000",
    "CACHE_GROUPS"         => "Y",
    "DISPLAY_TOP_PAGER"    => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "FIELD_CODE"           => ["", ""],
    "PROPERTY_CODE"        => ["", ""],
  ], false); ?>

  <div class="container pt-5" style="position: relative; z-index: 2;">

    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">

      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="customers-badge">
          <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/ao-russ-embleme.png" alt="Ассоциация РУСЬ" class="img-fluid mx-auto" style="max-width: 100%; height: auto;">
        </div>
      </div>
      <div class="col-xl-6 col-lg-8">

        <h2 class="text-white">Ассоциация <span class="triodion">«РУСЬ»</span></h2>
        <h4 class="fw-light text-white text-uppercase"><span>Служим Отечеству и спецназу!</span></h4>
      </div>
    </div>

    <div class="row gy-2 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <!-- i class="bi bi-star"></i -->
          <h3><a href="" class="text-white">Офицерское Братство</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-box">
          <!-- i class="bi bi-star"></i -->
          <h3 class="text-white fw-bold"><a href="">Поддержка семей павших</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="icon-box">
          <!-- i class="bi bi-star"></i -->
          <h3 class="text-white"><a href="">Соцзащита и реабилитация</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="icon-box">
          <!-- i class="bi bi-star"></i -->
          <h3 class="text-white"><a href="">Патриотическое воспитание</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
        <div class="icon-box">
          <!-- i class="bi bi-star"></i -->
          <h3 class="text-white"><a href="">Тренинги, обмен опытом</a></h3>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="about section">

  <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 align-items-top justify-content-between">

      <div class="col-lg-4 order-1 order-lg-2 aos-init aos-animate mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="image-wrapper">
          <div class="accent images position-relative aos-init aos-animate" data-aos="zoom-out" data-aos-delay="400">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/Petrov_LK.jpg" alt="Петров Леонид Константинович" class="img-fluid main-image rounded-1">
            <h5 class="mb-0 mt-3">Петров Леонид Константинович</h5>
            <p class="text-dark my-2">
              Президент Ассоциации ветеранов спецназа «РУСЬ», полковник милиции в отставке</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 order-2 order-lg-1 aos-init aos-animate left-container" data-aos="fade-up" data-aos-delay="200">

        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Обращение</h2>
            <p>Сила — в единстве!</p>
          </div>
        </div>

        <!-- h2 class="about-title mb-4 text-uppercase">Сила — в единстве</h2 -->
        <p class="about-description text-dark fw-normal"><strong>Ассоциация «Русь»</strong> — это не просто ветеранское объединение, это сообщество людей, связанных службой, долгом и взаимной ответственностью.</p>
        <p class="about-description text-dark fw-normal">
          Организация была создана 20 декабря 1995 года по инициативе офицеров и генералов Главка по борьбе с организованной преступностью МВД РФ, а также ветеранов спецназа «Витязь». Со временем в ее ряды вошли представители Минобороны, МВД, ФСБ и других силовых ведомств, объединенные общими профессиональными и нравственными принципами.</p>
        <p class="about-description text-dark fw-normal">С момента основания Ассоциация выстраивает работу вокруг конкретной помощи тем, кто оказался в трудной жизненной ситуации после службы. В центре внимания — военнослужащие и сотрудники спецподразделений, получившие ранения или увечья при исполнении долга, семьи погибших боевых товарищей, а также ветераны, нуждающиеся в поддержке при возвращении к гражданской жизни.</p>
        <p class="about-description  text-dark fw-normal">Особое место в деятельности «Руси» занимает принцип офицерского братства. Для Ассоциации это не формула и не декларация, а основа внутренней культуры — уважение к боевому опыту, верность товарищам, готовность не оставлять своих в беде. Именно на этом фундаменте строится вся работа организации: помощь, сопровождение, сохранение памяти и реальная поддержка тех, кто посвятил жизнь службе Отечеству.</p>

      </div>

    </div>

  </div>

</section>



<?php $APPLICATION->IncludeComponent("bitrix:news.list", "events", [
  "IBLOCK_TYPE"          => "news",
  "IBLOCK_ID"            => IBLOCK_ID_NEWS,
  "NEWS_COUNT"           => "4",
  "SORT_BY1"             => "ACTIVE_FROM",
  "SORT_ORDER1"          => "DESC",
  "SORT_BY2"             => "SORT",
  "SORT_ORDER2"          => "ASC",
  "CHECK_DATES"          => "Y",
  "DISPLAY_DATE"         => "Y",
  "DISPLAY_PICTURE"      => "Y",
  "DISPLAY_PREVIEW_TEXT" => "Y",
  "ACTIVE_DATE_FORMAT"   => "d F Y",
  "DETAIL_URL"           => "/news/#ELEMENT_ID#/",
  "SET_TITLE"            => "N",
  "CACHE_TYPE"           => "A",
  "CACHE_TIME"           => "36000000",
  "CACHE_GROUPS"         => "Y",
  "DISPLAY_TOP_PAGER"    => "N",
  "DISPLAY_BOTTOM_PAGER" => "N",
  "FIELD_CODE"           => ["", ""],
  "PROPERTY_CODE"        => ["", ""],
], false); ?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list", "cite", [
  "IBLOCK_TYPE"          => "news",
  "IBLOCK_ID"            => IBLOCK_ID_CITE,
  "NEWS_COUNT"           => "20",
  "SORT_BY1"             => "SORT",
  "SORT_ORDER1"          => "ASC",
  "SORT_BY2"             => "ID",
  "SORT_ORDER2"          => "ASC",
  "CHECK_DATES"          => "Y",
  "DISPLAY_DATE"         => "N",
  "DISPLAY_PICTURE"      => "Y",
  "DISPLAY_PREVIEW_TEXT" => "Y",
  "PREVIEW_TRUNCATE_LEN" => "",
  "SET_TITLE"            => "N",
  "CACHE_TYPE"           => "A",
  "CACHE_TIME"           => "36000000",
  "CACHE_GROUPS"         => "Y",
  "DISPLAY_TOP_PAGER"    => "N",
  "DISPLAY_BOTTOM_PAGER" => "N",
  "FIELD_CODE"           => ["", ""],
  "PROPERTY_CODE"        => ["ROLE", ""],
], false); ?>


<?php $APPLICATION->IncludeComponent("bitrix:news.list", "gallery", [
  "IBLOCK_TYPE"          => "news",
  "IBLOCK_ID"            => IBLOCK_ID_MEDIA,
  "NEWS_COUNT"           => "6",
  "SORT_BY1"             => "ACTIVE_FROM",
  "SORT_ORDER1"          => "DESC",
  "SORT_BY2"             => "SORT",
  "SORT_ORDER2"          => "ASC",
  "CHECK_DATES"          => "Y",
  "DISPLAY_DATE"         => "Y",
  "DISPLAY_PICTURE"      => "Y",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "ACTIVE_DATE_FORMAT"   => "d.m.Y",
  "DETAIL_URL"           => "/media/#ELEMENT_ID#/",
  "SET_TITLE"            => "N",
  "CACHE_TYPE"           => "A",
  "CACHE_TIME"           => "36000000",
  "CACHE_GROUPS"         => "Y",
  "DISPLAY_TOP_PAGER"    => "N",
  "DISPLAY_BOTTOM_PAGER" => "N",
  "FIELD_CODE"           => ["", ""],
  "PROPERTY_CODE"        => ["", ""],
], false); ?>


<?php $APPLICATION->IncludeComponent("bitrix:news.list", "partners", [
  "IBLOCK_TYPE"          => "news",
  "IBLOCK_ID"            => IBLOCK_ID_PARTNERS,
  "NEWS_COUNT"           => "30",
  "SORT_BY1"             => "SORT",
  "SORT_ORDER1"          => "ASC",
  "SORT_BY2"             => "ID",
  "SORT_ORDER2"          => "ASC",
  "CHECK_DATES"          => "Y",
  "DISPLAY_DATE"         => "N",
  "DISPLAY_PICTURE"      => "Y",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "SET_TITLE"            => "N",
  "CACHE_TYPE"           => "A",
  "CACHE_TIME"           => "36000000",
  "CACHE_GROUPS"         => "Y",
  "DISPLAY_TOP_PAGER"    => "N",
  "DISPLAY_BOTTOM_PAGER" => "N",
  "FIELD_CODE"           => ["", ""],
  "PROPERTY_CODE"        => ["LINK", ""],
], false); ?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>