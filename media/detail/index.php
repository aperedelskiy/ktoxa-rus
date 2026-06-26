<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Медиа - детальная");
?>

<!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>12.05.2025</h2>
          <p>Открытие мемориала «Воинам внутренних войск»</p>
        </div>

        <div class="col-12 col-lg-8">
        <p>
            Монументальный Памятник Воинам внутренних войск МВД России (Москва) стоит напротив Центрального музея внутренних войск. Он находится на территории Краснокурсантского сквера (1-ый Краснокурсантский проезд). Ближайшие станции метро – Лефортово, Авиамоторная.</p>
        <p>
            Скульптор: Бичуков А.А., архитекторы: Кузьмин А.В., Воскресенский И.Н.</p>
        <p>
            Памятник торжественно открыли 10 ноября 2002 года. В церемонии открытия принял участие Президент России Владимир Путин. Он отметил, что монумент посвятили «всем, кто ценой собственной жизни отстаивал закон и порядок»… Тем, кто обеспечивал безопасность граждан России, стабильность и мир. На церемонии присутствовали также: Председатель Государственной Думы Геннадий Селезнев, глава МВД РФ Борис Грызлов. Здесь же находились:  главнокомандующий внутренних войск МВД Вячеслав Тихомиров, директор Федеральной погранслужбы Константин Тоцкий. Среди приглашённых был и мэр Москвы Юрий Лужков, другие официальные лица, приглашённые граждане.</p>

        </div>
      </div>

<!-- Контейнер галереи -->
<div class="gallery-container">
  <div class="row g-3" id="galleryGrid">
    <!-- Элемент 1 -->
    <div class="col-6 col-md-4 col-lg-3 gallery-item-wrapper">
      <div class="gallery-item" 
           data-bs-toggle="modal" 
           data-bs-target="#galleryModal" 
           data-bs-slide-to="0">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-1.jpg" alt="Открытие мемориала" class="img-fluid">
        <div class="gallery-overlay">
          <i class="bi bi-zoom-in display-5"></i>
        </div>
      </div>
    </div>

    <!-- Элемент 2 -->
    <div class="col-6 col-md-4 col-lg-3 gallery-item-wrapper">
      <div class="gallery-item" 
           data-bs-toggle="modal" 
           data-bs-target="#galleryModal" 
           data-bs-slide-to="1">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-2.jpg" alt="Чемпионат по Ралли" class="img-fluid">
        <div class="gallery-overlay">
          <i class="bi bi-zoom-in display-5"></i>
        </div>
      </div>
    </div>

    <!-- Элемент 3 -->
    <div class="col-6 col-md-4 col-lg-3 gallery-item-wrapper">
      <div class="gallery-item" 
           data-bs-toggle="modal" 
           data-bs-target="#galleryModal" 
           data-bs-slide-to="2">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-3.jpg" alt="Вручение наград" class="img-fluid">
        <div class="gallery-overlay">
          <i class="bi bi-zoom-in display-5"></i>
        </div>
      </div>
    </div>

    <!-- Элемент 4 -->
    <div class="col-6 col-md-4 col-lg-3 gallery-item-wrapper">
      <div class="gallery-item" 
           data-bs-toggle="modal" 
           data-bs-target="#galleryModal" 
           data-bs-slide-to="3">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-4.jpg" alt="Турнир по самбо" class="img-fluid">
        <div class="gallery-overlay">
          <i class="bi bi-zoom-in display-5"></i>
        </div>
      </div>
    </div>

    <!-- Повторяем элементы 5–8 по аналогии (индексы 4–7) -->
    <!-- ... -->
  </div>

  <!-- Кнопка "загрузить еще" -->
  <div class="load-more-wrapper text-center mt-4">
    <button class="load-more-btn" id="loadMoreBtn">загрузить еще</button>
  </div>
</div>

<!-- Модальное окно (лайтбокс) -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0 d-flex align-items-center justify-content-center">
        <div id="galleryCarousel" class="carousel slide w-100 h-100" data-bs-ride="false">
          <!-- Индикаторы (точки) – опционально -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3"></button>
            <!-- ... для всех слайдов -->
          </div>

          <!-- Слайды -->
          <div class="carousel-inner h-100">
            <div class="carousel-item active h-100">
              <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-1.jpg" class="d-block mh-100 mx-auto" alt="...">
            </div>
            <div class="carousel-item h-100">
              <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-2.jpg" class="d-block mh-100 mx-auto" alt="...">
            </div>
            <div class="carousel-item h-100">
              <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-3.jpg" class="d-block mh-100 mx-auto" alt="...">
            </div>
            <div class="carousel-item h-100">
              <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-4.jpg" class="d-block mh-100 mx-auto" alt="...">
            </div>
            <!-- ... для всех слайдов -->
          </div>

          <!-- Стрелки навигации -->
          <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>

          <!-- Кнопка закрытия (крестик) -->
          <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-4" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
      </div>
    </div>
  </div>
</div>

        <div class="gallery-container">
          <div class="gallery-grid" id="galleryGrid">
            <!-- Элемент 1 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-1.jpg');" data-name="Открытие мемориала «Воинам внутренних войск»" data-date="12.05.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 2 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-2.jpg');" data-name="Чемпионат России по Ралли Рейдам" data-date="03.06.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 3 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-3.jpg');" data-name="Вручение наград от Ассоциации Русь" data-date="18.07.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 4 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-4.jpg');" data-name="Турнир по самбо памяти героя РФ Андрея Крестьянинова" data-date="22.08.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 1 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-1.jpg');" data-name="Открытие мемориала «Воинам внутренних войск»" data-date="12.05.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 2 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-2.jpg');" data-name="Чемпионат России по Ралли Рейдам" data-date="03.06.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 3 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-3.jpg');" data-name="Вручение наград от Ассоциации Русь" data-date="18.07.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

            <!-- Элемент 4 -->
            <div class="gallery-item" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/event-4.jpg');" data-name="Турнир по самбо памяти героя РФ Андрея Крестьянинова" data-date="22.08.2025">
              <div class="gallery-overlay">
                <div class="gallery-title"><i class="bi bi-zoom-in display-5"></i></div>
              </div>
            </div>

          </div>

          <div class="load-more-wrapper">
            <button class="load-more-btn" id="loadMoreBtn">загрузить еще</button>
          </div>
        </div>
    </section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
