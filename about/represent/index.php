<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Структура и представительства");
?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list", "represent", [
    "IBLOCK_TYPE"               => "news",
    "IBLOCK_ID"                 => IBLOCK_ID_REPRESENT,
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "NEWS_COUNT"                => "100",
    "SORT_BY1"                  => "SORT",
    "SORT_ORDER1"               => "ASC",
    "SORT_BY2"                  => "NAME",
    "SORT_ORDER2"               => "ASC",
    "CHECK_DATES"               => "Y",
    "DISPLAY_DATE"              => "N",
    "DISPLAY_PICTURE"           => "N",
    "DISPLAY_PREVIEW_TEXT"      => "Y",
    "PREVIEW_TRUNCATE_LEN"      => "",
    "SET_TITLE"                 => "N",
    "CACHE_TYPE"                => "A",
    "CACHE_TIME"                => "36000000",
    "CACHE_GROUPS"              => "Y",
    "DISPLAY_TOP_PAGER"         => "N",
    "DISPLAY_BOTTOM_PAGER"      => "N",
    "FIELD_CODE"                => ["", ""],
    "PROPERTY_CODE"             => ["", ""],
], false); ?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list", "partners-slider", [
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