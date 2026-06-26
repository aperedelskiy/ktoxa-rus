<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>

<div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">

  <div class="carousel-inner">
    <?php foreach ($arResult["ITEMS"] as $i => $arItem):
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
      $pic = !empty($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : '';
    ?>
      <div class="carousel-item<?= $i === 0 ? ' active' : '' ?>" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
        <?php if ($arItem["DETAIL_PAGE_URL"] && $arItem["DETAIL_PAGE_URL"] !== '#'): ?>
          <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
          <?php endif; ?>
          <div class="hero-slide" style="background-image: url('<?= htmlspecialcharsbx($pic) ?>');"
            title="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"></div>
          <?php if ($arItem["DETAIL_PAGE_URL"] && $arItem["DETAIL_PAGE_URL"] !== '#'): ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="carousel-indicators">
    <?php foreach ($arResult["ITEMS"] as $i => $arItem): ?>
      <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="<?= $i ?>"
        <?= $i === 0 ? 'class="active" aria-current="true"' : '' ?>
        aria-label="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"></button>
    <?php endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>