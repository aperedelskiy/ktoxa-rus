<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/main/pager_transform.php";

if (!empty($arResult["NAV_STRING"])) {
    $arResult["NAV_STRING"] = bx_transform_pager($arResult["NAV_STRING"]);
}
