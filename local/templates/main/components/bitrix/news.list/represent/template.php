<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>

<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Ассоциация РУСЬ</h2>
    <p>Представительства и филиалы</p>
  </div>

  <div class="container">
    <div class="col-12 col-lg-8">
      <p>Межрегиональная Ассоциация социальной защиты ветеранов и сотрудников спецподразделений правоохранительных органов и спецслужб «РУСЬ» входит в состав Регионального Политического Общественного Движения «РУСЬ», которое также объединяет следующие организации:</p>
    </div>

    <div class="row g-4">
      <?php foreach ($arResult["ITEMS"] as $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
      ?>
        <div class="col-12 col-sm-6 col-lg-4 col-xl-4" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
          <div class="card custom-card h-100">
            <div class="card-top">
              <h3 class="fw-light m-0"><?= htmlspecialcharsbx($arItem["NAME"]) ?></h3>
            </div>
            <div class="card-body-custom">
              <div class="org-title"><?= $arItem["PREVIEW_TEXT"] ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>

</section>