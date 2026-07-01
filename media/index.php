<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Медиа");
?>
<section class="container-fluid py-5 bg-light" id="media">
  <div class="container py-5">

    <?php $APPLICATION->IncludeComponent("bitrix:news", "media", [
      "IBLOCK_TYPE"               => "media",
      "IBLOCK_ID"                 => IBLOCK_ID_MEDIA,
      "NEWS_COUNT"                => "10",
      "SORT_BY1"                  => "ACTIVE_FROM",
      "SORT_ORDER1"               => "DESC",
      "SORT_BY2"                  => "SORT",
      "SORT_ORDER2"               => "ASC",
      "CHECK_DATES"               => "Y",
      "SEF_MODE"                  => "Y",
      "SEF_FOLDER"                => "/media/",
      "SEF_URL_TEMPLATES"         => [
        "news" => "",
        "section" => "",
        "detail"  => "#ELEMENT_CODE#/",
      ],
      "DISPLAY_DATE"              => "Y",
      "DISPLAY_PICTURE"           => "Y",
      "DISPLAY_PREVIEW_TEXT"      => "Y",
      "PREVIEW_TRUNCATE_LEN"      => "",
      "LIST_ACTIVE_DATE_FORMAT"   => "d F Y",
      "DETAIL_ACTIVE_DATE_FORMAT" => "d F Y",
      "SET_TITLE"                 => "Y",
      "SET_STATUS_404"            => "Y",
      "SHOW_404"                  => "N",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
      "ADD_SECTIONS_CHAIN"        => "Y",
      "DISPLAY_TOP_PAGER"         => "N",
      "DISPLAY_BOTTOM_PAGER"      => "Y",
      "PAGER_TITLE"               => "Медиа",
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
      "DETAIL_PROPERTY_CODE"      => ["FILES", "VIDEO_FILES", ""],
    ], false); ?>

  </div>
</section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>