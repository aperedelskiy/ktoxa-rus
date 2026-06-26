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
?>
  <div class="date" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
    <p>
      <?php if ($arItem["DISPLAY_ACTIVE_FROM"]): ?>
        <span class="small"><strong><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></strong></span><br>
      <?php endif; ?>
      <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= htmlspecialcharsbx($arItem["NAME"]) ?></a>
      <?php if ($arItem["PREVIEW_TEXT"]): ?>
        | <span class="small"><?= $arItem["PREVIEW_TEXT"] ?></span>
      <?php endif; ?>
    </p>
  </div>
<?php endforeach; ?>
<?php if ($arParams["DISPLAY_BOTTOM_PAGER"] && $arResult["NAV_STRING"]): ?>
  <div class="d-flex justify-content-center mt-3"><?= $arResult["NAV_STRING"] ?></div>
<?php endif; ?>