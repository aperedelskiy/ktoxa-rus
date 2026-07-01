<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
$this->setFrameMode(true);
if (empty($arResult["ID"])) return;
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNSD_ELEMENT_DELETE_CONFIRM')]);
?>
<article class="news-detail" id="<?= $this->GetEditAreaId($arResult['ID']) ?>">
  <?php if ($arResult["DISPLAY_ACTIVE_FROM"]): ?>
    <p class="text-muted small mb-3"><i class="bi bi-calendar3"></i> <?= $arResult["DISPLAY_ACTIVE_FROM"] ?></p>
  <?php endif; ?>

  <?php
  $pic = !empty($arResult["DETAIL_PICTURE"]["SRC"])  ? $arResult["DETAIL_PICTURE"]
    : (!empty($arResult["PREVIEW_PICTURE"]["SRC"]) ? $arResult["PREVIEW_PICTURE"] : null);
  if ($pic): ?>
    <div class="mb-4">
      <img src="<?= $pic["SRC"] ?>" class="img-fluid rounded" alt="<?= htmlspecialcharsbx($arResult["NAME"]) ?>">
    </div>
  <?php endif; ?>

  <div class="news-detail__text">
    <?= $arResult["DETAIL_TEXT"] ?>
  </div>
</article>

<div class="mt-4">
  <a href="/activity/books/" class="btn btn-outline-secondary">
    <i class="bi bi-arrow-left me-1"></i> Назад к книгам
  </a>
</div>