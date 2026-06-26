<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>
<?php
$countries = [];
foreach ($arResult["ITEMS"] as $arItem) {
    $countries[] = $arItem["NAME"];
}
?>
<script>
const countriesData = <?= json_encode($countries, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>;
</script>
