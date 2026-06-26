<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тренинги");
?>

<section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <div class="section-title">
                  <h2>Ассоциация РУСЬ</h2>
                  <p>Тренинги</p>
                </div>
            <p>Ассоциация «Русь» совместно с Яцеком Палкевичем, всемирно известным путешественником, регулярно проводит экспедиции с участием представителей силовых структур.</p>

            <p>С 1997 года с одобрения Совета Безопасности России Яцек Палкевич и президент Межрегиональной Ассоциации «Русь» Л.К. Петров занимаются подготовкой элитных антитеррористических подразделений в экстремальных условиях пустыни, джунглей и Приполярья, то есть в самых невероятных ситуациях высокого стресса.</p>

            <p>Петров Леонид Константинович, в прошлом заместитель начальника СОБРа ГУОП МВД РФ, ветеран боевых действий на Северном Кавказе, отметил: «Люди должны отдавать себе отчет, что правительство имеет силы и средства для выполнения особых задач по их защите, где бы они не оказались. Они должны знать, что Россия имеет специалистов для борьбы с террористами и в суровых климатических условиях.»</p>

            <p>Так тренинги проводились в пустыне Сахара (Тунис - 1997, 2000 г., Намибия - 2001г., Марокко - 2004 г.), сельве Амазонии (Венесуэла -1998 г., Перу - 2001 г.), горах (Гималаи - 2002 г., Килиманджаро - 2003г.), тропиках французской Полинезии (Таити - 2002г.), Польше - 2004 г. и бразильской сельве - 2005 г.</p>

            <p>Пресса многих стран мира отмечает высокий уровень подготовки российских «commandos» и заботу об их боевой выучке ветеранских общественных организаций.</p>

            
<div class="container-fluid gallery_section">
            <div class="row first_row">
                <div class="col-12 col-lg-5">
                    <div class="row">
                        <div class="col-12 gallery_cell ">
                            <div class="gall_cell_1"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/train/gallery-1.jpg" class="img-fluid d-none d-lg-block" alt="Gallery image 1"></div>
                        </div>
                        <div class="col-12 gallery_cell ">
                            <div class="gall_cell_2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/train/gallery-2.jpg" class="img-fluid d-none d-lg-block" alt="Gallery image 1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="row">
                        <div class="col-6 col-lg-5 gallery_cell ">
                            <div class="gall_cell_3"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/train/gallery-3.jpg" class="img-fluid d-none d-lg-block" alt="Gallery image 1"></div>
                        </div>
                        <div class="col-6 col-lg-7 gallery_cell ">
                            <div class="gall_cell_4"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/train/gallery-4.jpg" class="img-fluid d-none d-lg-block" alt="Gallery image 1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 gallery_cell ">
                            <div class="gall_cell_5"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/train/gallery-5.jpg" class="img-fluid d-none d-lg-block" alt="Gallery image 1"></div>
                        </div>
                    </div>
                </div>
            </div>
</div>

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
