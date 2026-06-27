<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>
<div class="row g-4">
<?php foreach ($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
    $pic  = !empty($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : '';
    $link = !empty($arItem["PROPERTIES"]["LINK"]["VALUE"]) ? $arItem["PROPERTIES"]["LINK"]["VALUE"] : '';
?>
  <div class="col-12 col-sm-6 col-md-4 col-lg-3" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
    <div class="card h-100 border-0 shadow-sm partner-card position-relative">
      <?php if ($pic): ?>
      <img src="<?= htmlspecialcharsbx($pic) ?>"
           class="card-img-top"
           alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"
           title="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"
           loading="lazy">
      <?php endif; ?>
      <div class="card-body text-center">
        <h6 class="mb-0 fw-normal">
          <?php if ($link): ?>
          <a href="<?= htmlspecialcharsbx($link) ?>"
             class="stretched-link-title stretched-link"
             target="_blank" rel="noopener noreferrer">
            <?= htmlspecialcharsbx($arItem["NAME"]) ?>
          </a>
          <?php else: ?>
          <?= htmlspecialcharsbx($arItem["NAME"]) ?>
          <?php endif; ?>
        </h6>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
