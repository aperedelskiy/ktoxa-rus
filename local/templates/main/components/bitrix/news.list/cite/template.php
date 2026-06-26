<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult["ITEMS"])) return; ?>

<section id="testimonials" class="testimonials section dark-background">

  <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

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
          }
        }
      </script>

      <div class="swiper-wrapper">
        <?php foreach ($arResult["ITEMS"] as $arItem):
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
          $pic  = !empty($arItem["PREVIEW_PICTURE"]["SRC"]) ? $arItem["PREVIEW_PICTURE"]["SRC"] : '';
          $role = !empty($arItem["PROPERTIES"]["ROLE"]["VALUE"]) ? $arItem["PROPERTIES"]["ROLE"]["VALUE"] : '';
        ?>
          <div class="swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']) ?>">
            <div class="testimonial-item">
              <?php if ($pic): ?>
                <img src="<?= htmlspecialcharsbx($pic) ?>" class="testimonial-img" alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>">
              <?php endif; ?>
              <h3><?= htmlspecialcharsbx($arItem["NAME"]) ?></h3>
              <?php if ($role): ?>
                <h4><?= htmlspecialcharsbx($role) ?></h4>
              <?php endif; ?>
              <?php if ($arItem["PREVIEW_TEXT"]): ?>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span><?= $arItem["PREVIEW_TEXT"] ?></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>