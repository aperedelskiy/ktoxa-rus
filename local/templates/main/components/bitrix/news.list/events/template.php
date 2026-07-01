<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
$this->setFrameMode(true);
?>
<section class="container-fluid  py-5 bg-light" id="events">
  <div class="container py-5">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>События</h2>
        <p>Новости Ассоциации</p>
      </div>
    </div>

    <div class="events-grid">
      <?php foreach ($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
      ?>
        <div class="event-card" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
          <div class="event-card__image">
            <?php if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])): ?>
              <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>">
            <?php endif; ?>
          </div>
          <div class="event-card__content">
            <?php if ($arItem["DISPLAY_ACTIVE_FROM"]): ?>
              <div class="event-card__date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
            <?php endif; ?>
            <h3 class="event-card__title">
              <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= htmlspecialcharsbx($arItem["NAME"]) ?></a>
            </h3>
            <?php if ($arItem["PREVIEW_TEXT"]): ?>
              <p class="event-card__text"><?= $arItem["PREVIEW_TEXT"] ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if ($arResult["NAV_STRING"]): ?>
      <div class="bx-pagination-container">
        <?= $arResult["NAV_STRING"] ?>
      </div>
    <?php elseif (empty($arParams["IBLOCK_URL"])): ?>
      <div class="load-more-wrapper">
        <a href="/news/" class="load-more-btn">Перейти в архив</a>
      </div>
    <?php endif; ?>

  </div>
</section>