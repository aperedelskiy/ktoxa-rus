<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Партнеры");
?>

<section class="container-fluid  py-5 bg-light" id="events">
    <div class="container py-5">

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Сила в единстве!</h2>
                <p>Наши партнеры</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- 1. Лига Боп -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/ligabop.jpg"
                        class="card-img-top"
                        alt="Логотип Лига Боп"
                        title="Лига Боп — официальный партнёр"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://www.лигабоп.рф"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Лига ветеранов Службы по борьбе с организованной преступностью
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 2. Росгвардия -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/rosgvardiya.png"
                        class="card-img-top"
                        alt="Логотип Росгвардия"
                        title="Росгвардия"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://rosguard.gov.ru/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Росгвардия
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 2. Общественный совет МВД -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/obredmvd.jpg"
                        class="card-img-top"
                        alt="Логотип Общественный совет МВД"
                        title="Общественный совет МВД России"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://xn--b1aew.xn--p1ai/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Общественный совет МВД
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 3. МВД РФ -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/mvdrf.jpg"
                        class="card-img-top"
                        alt="Логотип МВД России"
                        title="Министерство внутренних дел РФ"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://xn--b1aew.xn--p1ai/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                МВД России
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 4. ГУ МВД -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/gumvd.jpg"
                        class="card-img-top"
                        alt="Логотип ГУ МВД"
                        title="Главное управление МВД России"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://xn--b1aew.xn--p1ai/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                ГУ МВД России
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 5. Культурный центр МВД -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/cultmvdrf.jpg"
                        class="card-img-top"
                        alt="Логотип Культурный центр МВД"
                        title="Культурный центр МВД России"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href=""
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Культурный центр МВД
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 6. Российское оружие -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/ru-weapon.png"
                        class="card-img-top"
                        alt="Логотип Русское оружие"
                        title="Ассоциация «Русское оружие»"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="http://www.rusgun.ru/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Русское оружие
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 7. Российское общество -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/rus-obsch.png"
                        class="card-img-top"
                        alt="Логотип Руссккая община"
                        title="Руссккая община"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://russkaya-obschina.ru/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Руссккая община
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 8. СКЗП -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/szkp.png"
                        class="card-img-top"
                        alt="Логотип СКЗП"
                        title="Совет командующих Западным пограничным округом"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href=""
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                СКЗП
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 9. Нордман -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/nordman.png"
                        class="card-img-top"
                        alt="Логотип Нордман"
                        title="Группа компаний «Нордман»"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://xn--b1aahbabzlgrotj4gsc.xn--p1ai/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Северный человек
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 10. ББ -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/bb.png"
                        class="card-img-top"
                        alt="Логотип ББ"
                        title="Боевое братство"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://bbratstvo.com/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Боевое братство (ББ)
                            </a>
                        </h6>
                    </div>
                </div>
            </div>

            <!-- 11. Витязи Отечества -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm partner-card position-relative">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/vityazi-otechestva.png"
                        class="card-img-top"
                        alt="Логотип Витязи Отечества"
                        title="Всероссийское движение «Витязи Отечества»"
                        loading="lazy">
                    <div class="card-body text-center">
                        <h6 class="mb-0 fw-normal">
                            <a href="https://xn----8sbeboalhb5d9afed6e5f.xn--p1ai/"
                                class="stretched-link-title stretched-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Витязи Отечества
                            </a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5" data-aos="fade-up">
            <div class="section-title">
                <h2>Об Ассоциации</h2>
                <p>Охранные предприятия</p>
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <p>
                Ассоциация РУСЬ объединеняет лицензированные Частные охранные предприятия, которые более 30 лет обеспечивают системную работу по поддержанию безопасности, порядка и правопорядка там, где государственные механизмы требуют профессионального частного дополнения.</p>

        </div>

        <div class="row g-4 py-5 bg-light">
            <!-- 1. Защита жизни и здоровья -->
            <div class="col-md-6 col-lg-4">
                <div class="responsibility-card d-flex">
                    <h3><i class="fas fa-heartbeat fa-fw text-muted"></i></h3>
                    <h5 class="fw-normal text-uppercase mx-3">Защита жизни и здоровья граждан</h5>
                </div>
            </div>
            <!-- 2. Охрана объектов и имущества -->
            <div class="col-md-6 col-lg-4">
                <div class="responsibility-card d-flex">
                    <h3><i class="fas fa-building fa-fw text-muted"></i></h3>
                    <h5 class="fw-normal text-uppercase mx-3">Охрана объектов и имущества, транспортировка</h5>
                </div>
            </div>
            <!-- 3. Консультирование -->
            <div class="col-md-6 col-lg-4">
                <div class="responsibility-card d-flex">
                    <h3><i class="fas fa-gavel fa-fw text-muted"></i></h3>
                    <h5 class="fw-normal text-uppercase mx-3">Консультирование по вопросам правомерной защиты</h5>
                </div>
            </div>
            <!-- 4. Порядок на массовых мероприятиях -->
            <div class="col-md-6 col-lg-4">
                <div class="responsibility-card d-flex">
                    <h3><i class="fas fa-users fa-fw text-muted"></i></h3>
                    <h5 class="fw-normal text-uppercase mx-3">Обеспечение порядка в местах массовых мероприятий</h5>
                </div>
            </div>
            <!-- 5. Содействие правоохранительным органам -->
            <div class="col-md-6 col-lg-4">
                <div class="responsibility-card d-flex">
                    <h3><i class="fas fa-handshake fa-fw text-muted"></i></h3>
                    <h5 class="fw-normal text-uppercase mx-3">Содействие правоохранительным органам и государственным службам</h5>
                </div>
            </div>
            <!-- 6. Внутриобъектовый и пропускной режим -->
            <div class="col-md-6 col-lg-4">
                <div class="responsibility-card d-flex">
                    <h3><i class="fas fa-id-card fa-fw text-muted"></i></h3>
                    <h5 class="fw-normal text-uppercase mx-3">Обеспечение внутриобъектового и пропускного режима</h5>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <!-- 1. ООО ЧОП «Алебард-2000» (Москва) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">Алебард-2000</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП «<span class="fw-bold">Алебард-2000</span>»</div>

                        <div class="license small gray d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 2178</strong> выдана ГУВД г. Москвы 19 июня 2000 года, продлена до 19 июня 2013 года.</div>
                        </div>


                        <div class="director d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Саврюк Петр Николаевич.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 129090 г. Москва, Олимпийский проспект, дом 16, строение 1.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (495) 786-31-67.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. ООО ЧОП «Русь -2000» (Мытищи) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">Алебард-2000</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП «<span class="fw-bold">Русь-2000</span>»</div>

                        <div class="license small gray d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 1833</strong> выдана ГУВД Московской области 15 ноября 2005 года, сроком до 15 ноября 2010 года.</div>
                        </div>



                        <div class="director d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Жариков Борис Васильевич.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 141014 Московская область, г. Мытищи, ул. Семашко, дом 6, кор.3.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (495) 582-90-63.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. ООО ЧОП «Русь – 2002» (Мытищи) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">Русь–2002</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП «<span class="fw-bold">Русь–2002</span>»</div>

                        <div class="license small gray d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 954</strong> выдана ГУВД Московской области 26 февраля 2003 года, сроком до 26 февраля 2013 года.</div>
                        </div>



                        <div class="director d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Герасько Владимир Владимирович.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 141014 Московская область, г. Мытищи, ул. Терешковой, дом 3.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (495) 586-34-94.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. ООО ЧОП «НИАН - Русь» (Мытищи) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">НИАН-Русь</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП «<span class="fw-bold">НИАН-Русь</span>»</div>

                        <div class="license small gray d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 1820</strong> выдана ГУВД Московской области 21 октября 2005 года, сроком до 21 октября 2010 года.</div>
                        </div>


                        <div class="director d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Лазыкин Андрей Борисович.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 141007 Московская область, г. Мытищи, ул. Хлебозаводская, дом 6.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (495) 583-75-61.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. ООО ЧОП «Арсеналъ» (Москва) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">Арсеналъ</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП «<span class="fw-bold">Арсеналъ</span>»</div>

                        <div class="license small gray d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 4596</strong> выдана ГУВД г.Москвы 10 ноября 2004 года, сроком до 10 ноября 2009 года.</div>
                        </div>


                        <div class="director d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Шмаль Владимир Яковлевич.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 125493 г. Москва, Волоколамское шоссе, дом 112, кор.1, ст.3А.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (495) 490-91-49.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. ООО ЧОП «Русь-Калининград» (Калининград) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">Русь-Калининград</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП «<span class="fw-bold">Русь-Калининград</span>»</div>

                        <div class="license small gray d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 000438</strong> выдана УВД по Калининградской обл. 16 мая 2007 года, сроком до 16 мая 2012 года.</div>
                        </div>

                        <div class="director d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Решетников Александр Анатольевич.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 236000 г. Калининград, проспект Мира, дом 136 оф. 528.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (4012) 35-04-24.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7. ООО ЧОП ПФЗ «Русь-В» (Воскресенск) -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card custom-card h-100">
                    <div class="card-top">
                        <h3 class="fw-light pt-2 mb-0">Русь-В</h3>
                    </div>
                    <div class="card-body-custom">
                        <div class="org-title">ООО ЧОП ПФЗ «<span class="fw-bold">Русь-В</span>»</div>

                        <div class="license small d-flex"><i class="fas fa-id-card text-muted mt-1"></i>
                            <div class="mx-2"><strong>Лицензия № 2723</strong> выдана ГУВД по Московской обл. 27 апреля 2009 года, сроком до 16 апреля 2014 года.</div>
                        </div>


                        <div class="directo d-flex"><i class="fas fa-user-tie text-muted mt-1"></i>
                            <div class="mx-2"><strong>Генеральный директор:</strong> Сарычев Игорь Викторович.</div>
                        </div>
                        <div class="address d-flex"><i class="fas fa-map-marker-alt text-muted mt-1"></i>
                            <div class="mx-2"><strong>Адрес:</strong> 140200 Московская обл. г. Воскресенск, ул. Кирпичная, дом 6.</div>
                        </div>
                        <div class="phone d-flex"><i class="fas fa-phone-alt text-muted mt-1"></i>
                            <div class="mx-1"><strong>Тел.:</strong> +7 (496) 449-60-51.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>