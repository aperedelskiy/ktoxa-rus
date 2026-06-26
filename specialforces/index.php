<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О Спецназе");
?>
<section class="py-5">
      <div class="container">
        <div class="row gy-5">
          <!-- Левая колонка: список карточек и детальный вид -->
          <div class="col-lg-8 ps-lg-8 order-2 order-lg-1 aos-init aos-animate left-container" data-aos="fade-up" data-aos-delay="200">
            <div id="listView">
              <div class="section-title mb-4">
                  <h2>О Спецназе</h2>
                  <p>Отряды специального назначения</p>
            </div>
              <div id="unitsContainer" class="row g-4"></div>
            </div>
            <div id="detailView" style="display: none;"></div>
          </div>

          <!-- Правая колонка: фильтры (всегда видима) -->
         <div class="col-lg-4 order-1 order-lg-2 aos-init aos-animate mb-4" data-aos="fade-up" data-aos-delay="300">

            <div class="filter-widget">
              <h4 class="fw-normal"><i class="bi bi-sliders2 me-2"></i> СТРАНЫ</h4>
              <div class="filter-group" id="filterGroup"></div>
              <button id="resetFiltersBtn" class="reset-filters btn w-100 mt-3"><i class="bi bi-arrow-repeat me-1"></i> Сбросить фильтры</button>
            </div>
            <div class="mt-4 p-3 bg-light rounded-4 small text-muted">
              <i class="bi bi-info-circle-fill me-2 text-warning"></i> Нажмите на карточку для подробной информации.
            </div>
          </div>
        </div>
      </div>
    </section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
