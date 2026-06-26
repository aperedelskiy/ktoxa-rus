<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Публикации");
?>
<section id="service-details" class="service-details section">
  <div class="container">
    <div class="row gy-5">

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Деятельность</h2>
            <p>Публикации</p>
          </div>
        </div>

        <?php $APPLICATION->IncludeComponent("bitrix:news", "publications", [
            "IBLOCK_TYPE"               => "news",
            "IBLOCK_ID"                 => IBLOCK_ID_PUBLICATIONS,
            "NEWS_COUNT"                => "20",
            "SORT_BY1"                  => "ACTIVE_FROM",
            "SORT_ORDER1"               => "DESC",
            "SORT_BY2"                  => "SORT",
            "SORT_ORDER2"               => "ASC",
            "CHECK_DATES"               => "Y",
            "SEF_MODE"                  => "Y",
            "SEF_FOLDER"                => "/activity/publications/",
            "SEF_URL_TEMPLATES"         => [
                "news"    => "",
                "section" => "#SECTION_CODE#/",
                "detail"  => "#ELEMENT_ID#/",
                "rss"     => "rss/",
            ],
            "DISPLAY_DATE"              => "Y",
            "DISPLAY_PICTURE"           => "N",
            "DISPLAY_PREVIEW_TEXT"      => "Y",
            "PREVIEW_TRUNCATE_LEN"      => "",
            "LIST_ACTIVE_DATE_FORMAT"   => "d.m.Y",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d F Y",
            "SET_TITLE"                 => "Y",
            "SET_STATUS_404"            => "Y",
            "SHOW_404"                  => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN"        => "Y",
            "DISPLAY_TOP_PAGER"         => "N",
            "DISPLAY_BOTTOM_PAGER"      => "Y",
            "PAGER_TITLE"               => "Публикации",
            "PAGER_SHOW_ALWAYS"         => "N",
            "PAGER_TEMPLATE"            => "",
            "PAGER_DESC_NUMBERING"      => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
            "PAGER_SHOW_ALL"            => "N",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
            "DETAIL_PAGER_TITLE"        => "Страница",
            "DETAIL_PAGER_SHOW_ALL"     => "N",
            "META_KEYWORDS"             => "-",
            "META_DESCRIPTION"          => "-",
            "BROWSER_TITLE"             => "-",
            "DISPLAY_NAME"              => "Y",
            "CACHE_TYPE"                => "A",
            "CACHE_TIME"                => "36000000",
            "CACHE_FILTER"              => "N",
            "CACHE_GROUPS"              => "Y",
            "USE_PERMISSIONS"           => "N",
            "USE_RSS"                   => "N",
            "USE_SEARCH"                => "N",
            "USE_FILTER"                => "N",
            "LIST_FIELD_CODE"           => ["", ""],
            "LIST_PROPERTY_CODE"        => ["", ""],
            "DETAIL_FIELD_CODE"         => ["", ""],
            "DETAIL_PROPERTY_CODE"      => ["", ""],
        ], false); ?>

      </div>

      <div class="col-lg-4 ps-lg-5" data-aos="fade-up" data-aos-delay="100">
        <?php $APPLICATION->IncludeComponent("bitrix:main.include", ".default", [
            "AREA_FILE_SHOW"      => "sect",
            "AREA_FILE_SUFFIX"    => "inc",
            "AREA_FILE_RECURSIVE" => "Y",
            "EDIT_MODE"           => "html",
            "EDIT_TEMPLATE"       => "sect_inc.php",
        ]); ?>
      </div>

    </div>
  </div>
</section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
