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

        <?php $APPLICATION->IncludeComponent("bitrix:news.list", "partners", [
            "IBLOCK_TYPE"          => "news",
            "IBLOCK_ID"            => IBLOCK_ID_PARTNERS,
            "NEWS_COUNT"           => "50",
            "SORT_BY1"             => "SORT",
            "SORT_ORDER1"          => "ASC",
            "SORT_BY2"             => "ID",
            "SORT_ORDER2"          => "ASC",
            "CHECK_DATES"          => "Y",
            "DISPLAY_DATE"         => "N",
            "DISPLAY_PICTURE"      => "Y",
            "DISPLAY_PREVIEW_TEXT" => "N",
            "SET_TITLE"            => "N",
            "CACHE_TYPE"           => "A",
            "CACHE_TIME"           => "36000000",
            "CACHE_GROUPS"         => "Y",
            "DISPLAY_TOP_PAGER"    => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "FIELD_CODE"           => ["", ""],
            "PROPERTY_CODE"        => ["LINK", ""],
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        ], false); ?>

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

        <?php $APPLICATION->IncludeComponent("bitrix:news.list", "security", [
            "IBLOCK_TYPE"               => "news",
            "IBLOCK_ID"                 => IBLOCK_ID_SECURITY,
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "NEWS_COUNT"                => "100",
            "SORT_BY1"                  => "SORT",
            "SORT_ORDER1"               => "ASC",
            "SORT_BY2"                  => "NAME",
            "SORT_ORDER2"               => "ASC",
            "CHECK_DATES"               => "Y",
            "DISPLAY_DATE"              => "N",
            "DISPLAY_PICTURE"           => "N",
            "DISPLAY_PREVIEW_TEXT"      => "Y",
            "PREVIEW_TRUNCATE_LEN"      => "",
            "SET_TITLE"                 => "N",
            "CACHE_TYPE"                => "A",
            "CACHE_TIME"                => "36000000",
            "CACHE_GROUPS"              => "Y",
            "DISPLAY_TOP_PAGER"         => "N",
            "DISPLAY_BOTTOM_PAGER"      => "N",
            "FIELD_CODE"                => ["", ""],
            "PROPERTY_CODE"             => ["LICENSE", "DIRECTOR", "ADDRESS", "PHONE"],
        ], false); ?>

    </div>
</section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>