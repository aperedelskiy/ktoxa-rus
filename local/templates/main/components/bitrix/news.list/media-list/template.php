<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
$this->setFrameMode(true);
?>
<div class="row g-4">
  <?php foreach ($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
    $hasPic = !empty($arItem["PREVIEW_PICTURE"]["SRC"]);
  ?>
    <div class="col-12" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
      <div class="media-card">
        <div class="row g-0 h-100">
          <?php if ($hasPic): ?>
            <div class="col-md-4 col-lg-3">
              <div class="media-img-wrapper h-100">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>" class="media-img w-100">
              </div>
            </div>
            <div class="col-md-8 col-lg-9">
            <?php else: ?>
              <div class="col-12">
              <?php endif; ?>
              <div class="media-content">
                <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                  <div class="media-date">
                    <i class="far fa-calendar-alt"></i>
                    <? echo $arItem["DISPLAY_ACTIVE_FROM"] ?>
                  </div>
                <? endif ?>

                <h3 class="media-title"><?= $arItem["NAME"] ?></h3>
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="media-link">Подробнее <i class="fas fa-chevron-right"></i></a>
              </div>
              </div>
            </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] && $arResult["NAV_STRING"]): ?>
      <div class="d-flex justify-content-center mt-5">
        <nav aria-label="Навигация"><?= $arResult["NAV_STRING"] ?></nav>
      </div>
    <?php endif; ?>