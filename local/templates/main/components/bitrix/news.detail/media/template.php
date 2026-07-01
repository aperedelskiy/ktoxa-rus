<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$this->setFrameMode(true);
if (empty($arResult["ID"])) return;
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNSD_ELEMENT_DELETE_CONFIRM')]);

$files = [];
if (!empty($arResult["PROPERTIES"]["FILES"]["VALUE"])) {
    foreach ((array)$arResult["PROPERTIES"]["FILES"]["VALUE"] as $fileId) {
        if ((int)$fileId > 0) {
            $path = CFile::GetPath((int)$fileId);
            if ($path) $files[] = $path;
        }
    }
}
if (empty($files) && !empty($arResult["DETAIL_PICTURE"]["SRC"])) {
    $files[] = $arResult["DETAIL_PICTURE"]["SRC"];
}
$initialShow = 8;
?>

<section id="gallery" class="gallery" id="<?= $this->GetEditAreaId($arResult['ID']) ?>">

  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <?php if ($arResult["DISPLAY_ACTIVE_FROM"]): ?>
      <h2><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></h2>
      <?php endif; ?>
      <p><?= htmlspecialcharsbx($arResult["NAME"]) ?></p>
    </div>

    <?php if ($arResult["DETAIL_TEXT"] || $arResult["PREVIEW_TEXT"]): ?>
    <div class="row">
      <div class="col-12 col-lg-9 mb-5">
        <?= $arResult["DETAIL_TEXT"] ?: $arResult["PREVIEW_TEXT"] ?>
      </div>
    </div>
    <?php endif; ?>
  </div>

  <?php if ($files): ?>
  <div class="gallery-container">
    <div class="row g-3" id="galleryGrid">
      <?php foreach ($files as $i => $src): ?>
      <div class="col-6 col-md-4 col-lg-3 gallery-item-wrapper<?= $i >= $initialShow ? ' d-none gallery-hidden' : '' ?>">
        <div class="gallery-item"
             data-bs-toggle="modal"
             data-bs-target="#galleryModal"
             data-bs-slide-to="<?= $i ?>"
             style="cursor: pointer;">
          <img src="<?= htmlspecialcharsbx($src) ?>"
               alt="<?= htmlspecialcharsbx($arResult["NAME"]) ?>"
               class="img-fluid" loading="lazy">
          <div class="gallery-overlay">
            <i class="bi bi-zoom-in display-5"></i>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <?php if (count($files) > $initialShow): ?>
    <div class="load-more-wrapper text-center mt-4">
      <button class="load-more-btn" id="galleryLoadMoreBtn">загрузить еще</button>
    </div>
    <?php endif; ?>
  </div>

  <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-body p-0 d-flex align-items-center justify-content-center">
          <div id="galleryCarousel" class="carousel slide w-100 h-100" data-bs-ride="false">

            <div class="carousel-indicators">
              <?php foreach ($files as $i => $src): ?>
              <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="<?= $i ?>"
                <?= $i === 0 ? 'class="active" aria-current="true"' : '' ?>></button>
              <?php endforeach; ?>
            </div>

            <div class="carousel-inner h-100">
              <?php foreach ($files as $i => $src): ?>
              <div class="carousel-item<?= $i === 0 ? ' active' : '' ?> h-100">
                <img src="<?= htmlspecialcharsbx($src) ?>"
                     class="d-block mh-100 mx-auto"
                     alt="<?= htmlspecialcharsbx($arResult["NAME"]) ?>">
              </div>
              <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Следующий</span>
            </button>
            <button type="button"
                    class="btn-close btn-close-white position-absolute top-0 end-0 m-4"
                    data-bs-dismiss="modal" aria-label="Закрыть"></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var modalEl = document.getElementById('galleryModal');
    if (modalEl) {
      modalEl.addEventListener('show.bs.modal', function(e) {
        var index = e.relatedTarget ? parseInt(e.relatedTarget.getAttribute('data-bs-slide-to'), 10) : 0;
        bootstrap.Carousel.getOrCreateInstance(
          document.getElementById('galleryCarousel'), { interval: false }
        ).to(index);
      });
    }
    var loadMoreBtn = document.getElementById('galleryLoadMoreBtn');
    if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', function() {
        var hidden = document.querySelectorAll('#galleryGrid .gallery-hidden');
        Array.prototype.slice.call(hidden, 0, 4).forEach(function(el) {
          el.classList.remove('d-none', 'gallery-hidden');
        });
        if (!document.querySelector('#galleryGrid .gallery-hidden')) {
          loadMoreBtn.style.display = 'none';
        }
      });
    }
  });
  </script>
  <?php endif; ?>

  <div class="container mt-4">
    <a href="/media/" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left me-1"></i> Назад к галерее
    </a>
  </div>

</section>
