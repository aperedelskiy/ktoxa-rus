<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Совет Ассоциации");
?>

<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Совет Ассоциации</h2>
    <p>Президент</p>
  </div>

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Petrov_LK.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Петров Леонид Константинович</h4>
            <p>Президент Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container section-title pt-5" data-aos="fade-up">
    <h2>Совет Ассоциации</h2>
    <p>Вице-президенты</p>
  </div>

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Nikishin_AN.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Никишин Александр Николаевич</h4>
            <p>Вице-президент Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Baluhta_AB.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Балухта Алексей Борисович</h4>
            <p>Вице-президент Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container section-title pt-5" data-aos="fade-up">
    <h2>Совет Ассоциации</h2>
    <p>Члены СОВЕТА</p>
  </div>

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Skvortsov_AN.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Скворцов Андрей Николаевич</h4>
            <p>Секретарь Совета Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Juravlev_SV.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Журавлев Сергей Викторович</h4>
            <p>Член Совета Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Lyashenko_BV.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Ляшенко Борис Владимирович</h4>
            <p>Член Совета Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Juravlev_VV.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Журавлев Валерий Викторович</h4>
            <p>Член Совета Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member">
          <div class="member-img">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person/Malinovskiy_NI.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Малиновский Николай Иосифович</h4>
            <p>Член Совета Ассоциации «Русь»</p>
          </div>
        </div>
      </div>

    </div>
  </div>

</section><!-- /Team Section -->

<section id="clients" class="clients section bg-white">


  <div class="container section-title" data-aos="fade-up">
    <h2></h2>
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
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 40
            },
            "992": {
              "slidesPerView": 4,
              "spaceBetween": 40
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/ligabop.jpg" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/obredmvd.jpg" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/mvdrf.jpg" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/gumvd.jpg" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/cultmvdrf.jpg" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/ru-weapon.png" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/rus-obsch.png" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/szkp.png" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/nordman.png" class="img-fluid" width="160" alt=""></div>
        <div class="swiper-slide"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/bb.png" class="img-fluid" width="160" alt=""></div>

      </div>
      <div class="pt-2 swiper-pagination"></div>
    </div>

  </div>

</section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>