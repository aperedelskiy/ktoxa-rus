<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * Шаблон хлебных крошек.
 * Вызывается через AddBufferContent с $bIncludeOnce = true — обязан return string.
 * $arResult — цепочка из GetNavChain(), собранная из .section.php директорий.
 * Каждый элемент: ["TITLE" => string, "LINK" => string].
 * START_FROM=1 исключает корневой элемент ("Главная"), он вставляется хардкодом.
 */

/** @var CMain $APPLICATION */
global $APPLICATION;

if (empty($arResult)) {
    return "";
}

$itemSize = count($arResult);
$curPage  = $APPLICATION->GetCurPage(false);

// Для страниц, не являющихся index.php раздела (e.g. /about/mission.php),
// последний элемент цепочки — родительский раздел, а не сама страница.
// Добавляем заголовок текущей страницы как финальный элемент без ссылки.
$lastItem = $arResult[$itemSize - 1];
if ($lastItem["LINK"] !== "" && $lastItem["LINK"] !== $curPage) {
    $arResult[] = ["TITLE" => $APPLICATION->GetTitle(), "LINK" => ""];
    $itemSize++;
}

$out  = '<div class="page-title dark-background" data-aos="fade">';
$out .= '<nav class="breadcrumbs"><div class="container"><ol>';
$out .= '<li><a href="' . SITE_DIR . '">Главная</a></li>';

foreach ($arResult as $index => $arItem) {
    $title = htmlspecialcharsbx($arItem["TITLE"]);
    if ($index < $itemSize - 1) {
        $out .= '<li><a href="' . htmlspecialcharsbx($arItem["LINK"]) . '">' . $title . '</a></li>';
    } else {
        $out .= '<li class="current">' . $title . '</li>';
    }
}

$out .= '</ol></div></nav>';
$out .= '</div>';

return $out;
