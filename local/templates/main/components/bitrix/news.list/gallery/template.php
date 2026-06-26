<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
$this->setFrameMode(true);
?>
<?php foreach ($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
    $bgStyle = !empty($arItem["PREVIEW_PICTURE"]["SRC"])
        ? 'background-image: url(\'' . $arItem["PREVIEW_PICTURE"]["SRC"] . '\');'
        : '';
?>
  <div class="gallery-item" id="<?= $this->GetEditAreaId($arItem['ID']) ?>"
       style="<?= $bgStyle ?>"
       data-name="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"
       data-date="<?= htmlspecialcharsbx($arItem["DISPLAY_ACTIVE_FROM"]) ?>"
       data-link="<?= $arItem["DETAIL_PAGE_URL"] ?>">
    <div class="gallery-overlay">
      <div class="gallery-title"><?= htmlspecialcharsbx($arItem["NAME"]) ?></div>
      <?php if ($arItem["DISPLAY_ACTIVE_FROM"]): ?>
      <div class="gallery-date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
      <?php endif; ?>
    </div>
  </div>
<?php endforeach; ?>
