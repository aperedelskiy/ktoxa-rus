<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спортивные мероприятия");
?>

<section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="section-title">
                  <h2>Ассоциация РУСЬ</h2>
                  <p>Спортивные мероприятия</p>
                </div>

            <p>Ассоциация «Русь» выступает организатором и партнером тематических турниров, соревнований и других знаковых мероприятий.</p>
            <h3>
                Турниры и соревнования</h3>
            <p>
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/event-4.jpg" class="img-fluid" alt="Спортивные турниры"></p>
            <p>Турниры по рукопашному бою памяти Героев России А. Романова, В. Ласточкина, И. Шелохвостова и журналиста А. Ягодина.</p>

            <p>Ежегодный юношеский турнир по боксу памяти Героя России А. Крестьянинова.</p>

            <p>Профессиональные первенства: Турнир на звание лучшего сотрудника ОМСН (СОБР) по ЮФО.</p>
            <h3>
                Ралли</h3>

            <p>Команда Ассоциации «Русь» является организатором и постоянным участником Ралли по бездорожью.</p>

            <p>
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/rally.jpg" class="img-fluid" alt="Ралли"></p>

          </div>

          <div class="col-lg-4 ps-lg-5" data-aos="fade-up" data-aos-delay="100">
            <?php $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                "AREA_FILE_SHOW"      => "sect",
                "AREA_FILE_SUFFIX"    => "inc",
                "AREA_FILE_RECURSIVE" => "Y",
                "EDIT_MODE"           => "html",
                "EDIT_TEMPLATE"       => "sect_inc.php"
            )); ?>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
