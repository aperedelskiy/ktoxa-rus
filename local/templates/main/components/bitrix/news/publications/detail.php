<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
/** @global CMain $APPLICATION */
$this->setFrameMode(true);
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "publication",
    [
        "DISPLAY_DATE"              => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME"              => $arParams["DISPLAY_NAME"],
        "DISPLAY_PICTURE"           => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT"      => $arParams["DISPLAY_PREVIEW_TEXT"],
        "IBLOCK_TYPE"               => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID"                 => $arParams["IBLOCK_ID"],
        "FIELD_CODE"                => $arParams["DETAIL_FIELD_CODE"],
        "PROPERTY_CODE"             => $arParams["DETAIL_PROPERTY_CODE"],
        "DETAIL_URL"                => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL"               => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "IBLOCK_URL"                => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "META_KEYWORDS"             => $arParams["META_KEYWORDS"],
        "META_DESCRIPTION"          => $arParams["META_DESCRIPTION"],
        "BROWSER_TITLE"             => $arParams["BROWSER_TITLE"],
        "SET_TITLE"                 => $arParams["SET_TITLE"],
        "SET_STATUS_404"            => $arParams["SET_STATUS_404"],
        "SHOW_404"                  => $arParams["SHOW_404"],
        "FILE_404"                  => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
        "ADD_SECTIONS_CHAIN"        => $arParams["ADD_SECTIONS_CHAIN"],
        "ACTIVE_DATE_FORMAT"        => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
        "CACHE_TYPE"                => $arParams["CACHE_TYPE"],
        "CACHE_TIME"                => $arParams["CACHE_TIME"],
        "CACHE_GROUPS"              => $arParams["CACHE_GROUPS"],
        "ELEMENT_ID"                => $arResult["VARIABLES"]["ELEMENT_ID"],
        "ELEMENT_CODE"              => $arResult["VARIABLES"]["ELEMENT_CODE"],
        "SECTION_ID"                => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE"              => $arResult["VARIABLES"]["SECTION_CODE"],
    ],
    $component
);
?>
<p class="mt-4"><a href="<?= $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"] ?>"><i class="bi bi-arrow-left"></i> Назад к списку</a></p>
