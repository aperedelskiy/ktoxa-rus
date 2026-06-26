<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (!empty($arResult)): ?>
<div class="service-box">
    <h4><?= htmlspecialcharsbx($arResult[0]["TEXT"]) ?></h4>
    <div class="services-list">
    <?php foreach ($arResult as $arItem): ?>
        <a href="<?= htmlspecialcharsbx($arItem["LINK"]) ?>"<?php if (!empty($arItem["SELECTED"])) echo ' class="active"'; ?>>
            <i class="bi bi-arrow-right-circle"></i><span><?= htmlspecialcharsbx($arItem["TEXT"]) ?></span>
        </a>
    <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
