<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
use Bitrix\Iblock\ElementTable;

// Collect linked COUNTRY element IDs (property type E)
$countryIds = [];
foreach ($arResult["ITEMS"] as $arItem) {
    $val = $arItem["PROPERTIES"]["COUNTRY"]["VALUE"];
    if ($val) {
        foreach ((array)$val as $id) {
            $id = (int)$id;
            if ($id > 0) $countryIds[$id] = $id;
        }
    }
}

// Resolve IDs → names via D7
$countryMap = [];
if ($countryIds) {
    $res = ElementTable::getList([
        'filter' => ['ID' => array_values($countryIds)],
        'select' => ['ID', 'NAME'],
    ]);
    while ($row = $res->fetch()) {
        $countryMap[(int)$row['ID']] = $row['NAME'];
    }
}

$units = [];
foreach ($arResult["ITEMS"] as $arItem) {
    $val = $arItem["PROPERTIES"]["COUNTRY"]["VALUE"];
    $countryId = is_array($val) ? (int)reset($val) : (int)$val;
    $units[] = [
        "name"        => $arItem["NAME"],
        "slug"        => $arItem["CODE"] ?: "unit-" . $arItem["ID"],
        "country"     => $countryMap[$countryId] ?? "",
        "emblem"      => $arItem["PREVIEW_PICTURE"]["SRC"] ?? "",
        "description" => strip_tags($arItem["~DETAIL_TEXT"] ?? ""),
        "history"     => strip_tags($arItem["PROPERTIES"]["HISTORY"]["~VALUE"]["TEXT"] ?? ""),
        "weapon"      => strip_tags($arItem["PROPERTIES"]["ARMS"]["~VALUE"]["TEXT"] ?? ""),
    ];
}
?>
<script>
const unitsData = <?= json_encode($units, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>;
</script>
