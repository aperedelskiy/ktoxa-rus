<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<section id="service-details" class="service-details section">

  <div class="container">

    <div id="contact" class="section contact">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Ассоциация РУСЬ</h2>
          <p>Контактная информация</p>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt" style="color: #F24F00"></i>
                <h4>Местонахождение:</h4>
                <p>123056, г. Москва,<br> ул. Большая Грузинская,<br> д. 36, стр. 3</p>
              </div>

              <div class="phone">
                <i class="bi bi-calendar3" style="color: #F24F00"></i>
                <h4>Время работы::</h4>
                <p>10:00 – 18:00 (пн.–пт.)</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone" style="color: #F24F00"></i>
                <h4>Телефоны:</h4>
                <p>
                  +7 499 254-82-12<br>
                  +7 499 254-22-48</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope" style="color: #F24F00"></i>
                <h4>Электронная почта:</h4>
                <p><a href="mail-to:info@veterany.ru">info@veterany.ru</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A71be581b26b101889536c2496f97cdf4adde2322115234e776df444974f8ba7b&amp;source=constructor" style="border:0; width: 100%; min-height: 600px" allowfullscreen="" loading="lazy" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>