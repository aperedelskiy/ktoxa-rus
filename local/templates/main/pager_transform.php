<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * Трансформирует стандартный Bitrix-пейджер (font-теги) в .bx-pagination ul.
 * Вызывается из result_modifier.php шаблонов.
 */
function bx_transform_pager(string $nav): string
{
    if (empty(trim(strip_tags($nav)))) {
        return $nav;
    }

    // Текущая страница — жирный номер
    $currentPage = 1;
    if (preg_match('/<b>\s*(\d+)\s*<\/b>/i', $nav, $m)) {
        $currentPage = (int)$m[1];
    }

    // Все ссылки
    preg_match_all('/<a\s+href="([^"]+)"[^>]*>\s*(.*?)\s*<\/a>/si', $nav, $matches, PREG_SET_ORDER);

    $pageLinks = [];
    $prevLink   = null;
    $nextLink   = null;

    foreach ($matches as $match) {
        $url  = $match[1];
        $text = html_entity_decode(trim(strip_tags($match[2])), ENT_QUOTES, 'UTF-8');

        if (is_numeric($text)) {
            $pageLinks[(int)$text] = $url;
        } elseif (mb_strpos($text, 'Пред') !== false) {
            $prevLink = $url;
        } elseif (mb_strpos($text, 'След') !== false) {
            $nextLink = $url;
        }
        // Начало / Конец пропускаем — дублируют numbered pagination
    }

    // Собираем все видимые номера страниц
    $allPages = array_keys($pageLinks);
    $allPages[] = $currentPage;
    $allPages = array_unique($allPages);
    sort($allPages);

    $html = '<ul class="bx-pagination">';

    // Кнопка «Назад»
    if ($prevLink) {
        $html .= '<li class="bx-pagination-left"><a href="' . htmlspecialcharsbx($prevLink) . '">&laquo;</a></li>';
    } else {
        $html .= '<li class="bx-pagination-left disabled"><span>&laquo;</span></li>';
    }

    // Номера страниц
    foreach ($allPages as $pageNum) {
        if ($pageNum === $currentPage) {
            $html .= '<li class="bx-active"><span>' . $pageNum . '</span></li>';
        } else {
            $html .= '<li><a href="' . htmlspecialcharsbx($pageLinks[$pageNum]) . '">' . $pageNum . '</a></li>';
        }
    }

    // Кнопка «Вперёд»
    if ($nextLink) {
        $html .= '<li class="bx-pagination-right"><a href="' . htmlspecialcharsbx($nextLink) . '">&raquo;</a></li>';
    } else {
        $html .= '<li class="bx-pagination-right disabled"><span>&raquo;</span></li>';
    }

    $html .= '</ul>';

    return $html;
}
