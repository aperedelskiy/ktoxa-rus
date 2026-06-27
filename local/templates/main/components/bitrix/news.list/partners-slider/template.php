<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>

<section id="clients" class="clients section bg-white">

  <div class="container section-title" data-aos="fade-up">
    <h2>Сила в единстве!</h2>
    <p>НАШИ ПАРТНЕРЫ</p>
  </div>

  <div class="container py-5" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": { "slidesPerView": 2, "spaceBetween": 40 },
            "480": { "slidesPerView": 3, "spaceBetween": 60 },
            "640": { "slidesPerView": 4, "spaceBetween": 40 },
            "992": { "slidesPerView": 4, "spaceBetween": 40 }
          }
        }
      </script>

      <div class="swiper-wrapper align-items-center">
        <?php foreach ($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            $pic  = !empty($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : '';
            $link = !empty($arItem["PROPERTIES"]["LINK"]["VALUE"]) ? $arItem["PROPERTIES"]["LINK"]["VALUE"] : '';
        ?>
          <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
            <?php if ($link): ?>
            <a href="<?= htmlspecialcharsbx($link) ?>" target="_blank" rel="noopener">
            <?php endif; ?>
              <?php if ($pic): ?>
              <img src="<?= htmlspecialcharsbx($pic) ?>" class="img-fluid" width="160"
                   alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"
                   title="<?= htmlspecialcharsbx($arItem["NAME"]) ?>">
              <?php endif; ?>
            <?php if ($link): ?>
            </a>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="pt-2 swiper-pagination"></div>
    </div>

  </div>

</section>
