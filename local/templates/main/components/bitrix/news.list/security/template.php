<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>
<div class="row g-4">
<?php foreach ($arResult["ITEMS"] as $arItem):
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
    $license  = $arItem["PROPERTIES"]["LICENSE"]["VALUE"]  ?? "";
    $director = $arItem["PROPERTIES"]["DIRECTOR"]["VALUE"] ?? "";
    $address  = $arItem["PROPERTIES"]["ADDRESS"]["VALUE"]  ?? "";
    $phone    = $arItem["PROPERTIES"]["PHONE"]["VALUE"]    ?? "";
?>
  <div class="col-12 col-sm-6 col-lg-4" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
    <div class="card custom-card h-100">
      <div class="card-top">
        <h3 class="fw-light pt-2 mb-0"><?= htmlspecialcharsbx($arItem["NAME"]) ?></h3>
      </div>
      <div class="card-body-custom">
        <div class="org-title"><?= $arItem["PREVIEW_TEXT"] ?></div>
        <?php if ($license): ?>
        <div class="license small gray d-flex">
          <i class="fas fa-id-card text-muted mt-1"></i>
          <div class="mx-2"><?= htmlspecialcharsbx($license) ?></div>
        </div>
        <?php endif; ?>
        <?php if ($director): ?>
        <div class="director d-flex">
          <i class="fas fa-user-tie text-muted mt-1"></i>
          <div class="mx-2"><strong>Генеральный директор:</strong> <?= htmlspecialcharsbx($director) ?></div>
        </div>
        <?php endif; ?>
        <?php if ($address): ?>
        <div class="address d-flex">
          <i class="fas fa-map-marker-alt text-muted mt-1"></i>
          <div class="mx-2"><strong>Адрес:</strong> <?= htmlspecialcharsbx($address) ?></div>
        </div>
        <?php endif; ?>
        <?php if ($phone): ?>
        <div class="phone d-flex">
          <i class="fas fa-phone-alt text-muted mt-1"></i>
          <div class="mx-1"><strong>Тел.:</strong> <?= htmlspecialcharsbx($phone) ?></div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
