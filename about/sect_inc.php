<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CMain $APPLICATION */
global $APPLICATION;
$APPLICATION->IncludeComponent("bitrix:menu", "section", array(
    "ROOT_MENU_TYPE"        => "section",
    "MENU_CACHE_TYPE"       => "A",
    "MENU_CACHE_TIME"       => "36000000",
    "MENU_CACHE_USE_GROUPS" => "Y",
    "MENU_CACHE_GET_VARS"   => array(),
    "MAX_LEVEL"             => "1",
    "CHILD_MENU_TYPE"       => "section",
    "USE_EXT"               => "N",
    "ALLOW_MULTI_SELECT"    => "N"
), false);
