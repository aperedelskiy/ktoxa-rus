<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О Спецназе");
?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list", "countries", [
    "IBLOCK_TYPE"          => "news",
    "IBLOCK_ID"            => IBLOCK_ID_COUNTRIES,
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "NEWS_COUNT"           => "100",
    "SORT_BY1"             => "SORT",
    "SORT_ORDER1"          => "ASC",
    "SORT_BY2"             => "NAME",
    "SORT_ORDER2"          => "ASC",
    "CHECK_DATES"          => "N",
    "DISPLAY_DATE"         => "N",
    "DISPLAY_PICTURE"      => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "SET_TITLE"            => "N",
    "CACHE_TYPE"           => "A",
    "CACHE_TIME"           => "36000000",
    "CACHE_GROUPS"         => "Y",
    "DISPLAY_TOP_PAGER"    => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "FIELD_CODE"           => ["", ""],
    "PROPERTY_CODE"        => ["", ""],
], false); ?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list", "sf-list", [
    "IBLOCK_TYPE"          => "news",
    "IBLOCK_ID"            => IBLOCK_ID_SF,
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "NEWS_COUNT"           => "200",
    "SORT_BY1"             => "NAME",
    "SORT_ORDER1"          => "ASC",
    "SORT_BY2"             => "SORT",
    "SORT_ORDER2"          => "ASC",
    "CHECK_DATES"          => "N",
    "DISPLAY_DATE"         => "N",
    "DISPLAY_PICTURE"      => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "PREVIEW_TRUNCATE_LEN" => "",
    "SET_TITLE"            => "N",
    "CACHE_TYPE"           => "A",
    "CACHE_TIME"           => "36000000",
    "CACHE_GROUPS"         => "Y",
    "DISPLAY_TOP_PAGER"    => "N",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "FIELD_CODE"           => ["CODE", ""],
    "PROPERTY_CODE"        => ["COUNTRY", "HISTORY", "ARMS"],
], false); ?>

<section class="py-5">
  <div class="container">
    <div class="row gy-5">

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

      <div class="col-lg-4 order-1 order-lg-2 aos-init aos-animate mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="filter-widget">
          <h4 class="fw-normal"><i class="bi bi-sliders2 me-2"></i> СТРАНЫ</h4>
          <div class="filter-group" id="filterGroup"></div>
          <button id="resetFiltersBtn" class="reset-filters btn w-100 mt-3">
            <i class="bi bi-arrow-repeat me-1"></i> Сбросить фильтры
          </button>
        </div>
        <div class="mt-4 p-3 bg-light rounded-4 small text-muted">
          <i class="bi bi-info-circle-fill me-2 text-warning"></i> Нажмите на карточку для подробной информации.
        </div>
      </div>

    </div>
  </div>
</section>

<script>
(function() {
  const defaultEmblem = "<?= SITE_TEMPLATE_PATH ?>/assets/img/special-forces/x.png";
  let currentFilter = "all";
  let detailMode = false;

  function getImageUrl(unit) {
    return (unit.emblem && unit.emblem !== "") ? unit.emblem : defaultEmblem;
  }

  function escapeHtml(str) {
    return str.replace(/[&<>]/g, function(m) {
      if (m === '&') return '&amp;';
      if (m === '<') return '&lt;';
      if (m === '>') return '&gt;';
      return m;
    });
  }

  function getFlagEmoji(country) {
    const map = {
      "Россия": "🇷🇺", "Австрия": "🇦🇹", "Великобритания": "🇬🇧",
      "Родезия": "🇿🇼", "США": "🇺🇸"
    };
    return map[country] || "🏳️";
  }

  function renderUnits() {
    let filtered = [...unitsData];
    if (currentFilter !== "all") {
      filtered = filtered.filter(unit => unit.country === currentFilter);
    }
    filtered.sort((a, b) => a.name.localeCompare(b.name, 'ru'));
    const container = document.getElementById("unitsContainer");
    if (!container) return;
    if (filtered.length === 0) {
      container.innerHTML = `<div class="col-12 text-center py-5"><i class="bi bi-emoji-frown fs-1"></i><p class="mt-3">Нет отрядов для выбранной страны</p></div>`;
      return;
    }
    let cardsHtml = "";
    filtered.forEach(unit => {
      cardsHtml += `
        <div class="col-md-6 col-xl-4">
          <div class="unit-card" data-unit-slug="${unit.slug}">
            <div class="unit-emblema">
              <img src="${getImageUrl(unit)}" alt="Эмблема ${escapeHtml(unit.name)}" loading="lazy"
                   onerror="this.onerror=null;this.src='${defaultEmblem}';">
            </div>
            <h3 class="unit-name">${escapeHtml(unit.name)}</h3>
            <span class="unit-country">${escapeHtml(unit.country)}</span>
          </div>
        </div>
      `;
    });
    container.innerHTML = cardsHtml;
    document.querySelectorAll('.unit-card').forEach(card => {
      card.addEventListener('click', () => openDetail(card.getAttribute('data-unit-slug')));
    });
  }

  function openDetail(slug) {
    const unit = unitsData.find(u => u.slug === slug);
    if (!unit) return;
    detailMode = true;
    document.getElementById("listView").style.display = "none";
    const detailDiv = document.getElementById("detailView");
    detailDiv.style.display = "block";
    detailDiv.innerHTML = `
      <button class="back-button btn" id="backToListBtn"><i class="bi bi-arrow-left me-2"></i>Назад к списку</button>
      <div class="detail-view">
        <div class="detail-header">
          <div class="detail-emblema">
            <img src="${getImageUrl(unit)}" alt="${escapeHtml(unit.name)}" onerror="this.src='${defaultEmblem}';">
          </div>
          <div class="detail-title">
            <h1>${escapeHtml(unit.name)}</h1>
            <span class="unit-country"><i class="fas fa-globe-americas me-1"></i> ${escapeHtml(unit.country)}</span>
          </div>
        </div>
        <div class="detail-content">
          ${unit.description ? `<h4><i class="bi bi-info-circle me-2"></i>Общая информация</h4><p>${escapeHtml(unit.description)}</p>` : ''}
          ${unit.history ? `<h4 class="mt-4"><i class="bi bi-clock-history me-2"></i>История</h4><p>${escapeHtml(unit.history)}</p>` : ''}
          ${unit.weapon ? `<h4 class="mt-4"><i class="bi bi-shield-shaded me-2"></i>Вооружение и экипировка</h4><p>${escapeHtml(unit.weapon)}</p>` : ''}
        </div>
      </div>
    `;
    document.getElementById("backToListBtn").addEventListener("click", () => {
      detailMode = false;
      document.getElementById("detailView").style.display = "none";
      document.getElementById("listView").style.display = "block";
      window.history.pushState({}, '', window.location.pathname);
      renderUnits();
    });
    window.history.pushState({}, '', `?unit=${unit.slug}`);
  }

  function checkUrlForUnit() {
    const params = new URLSearchParams(window.location.search);
    const unitSlug = params.get('unit');
    if (unitSlug) {
      const unit = unitsData.find(u => u.slug === unitSlug);
      if (unit) { openDetail(unitSlug); return true; }
    }
    return false;
  }

  function buildFilters() {
    const filterGroup = document.getElementById("filterGroup");
    if (!filterGroup) return;
    let filtersHtml = `<label class="filter-check"><input type="checkbox" value="all" id="filterAll" checked> <span>Все</span></label>`;
    countriesData.forEach(country => {
      filtersHtml += `
        <label class="filter-check">
          <input type="checkbox" value="${country}" class="country-checkbox">
          <span>${getFlagEmoji(country)} ${country}</span>
        </label>
      `;
    });
    filterGroup.innerHTML = filtersHtml;
    attachFilterEvents();
  }

  function attachFilterEvents() {
    const allCheck = document.getElementById("filterAll");
    const countryChecks = document.querySelectorAll(".country-checkbox");

    function applyFilterAndCloseDetail() {
      if (detailMode) {
        detailMode = false;
        document.getElementById("detailView").style.display = "none";
        document.getElementById("listView").style.display = "block";
        window.history.pushState({}, '', window.location.pathname);
      }
      renderUnits();
    }

    allCheck.addEventListener("change", function() {
      if (this.checked) {
        countryChecks.forEach(cb => cb.checked = false);
        currentFilter = "all";
      } else {
        if (countryChecks.length) {
          countryChecks[0].checked = true;
          currentFilter = countryChecks[0].value;
        } else {
          currentFilter = "all";
          this.checked = true;
        }
      }
      applyFilterAndCloseDetail();
    });

    countryChecks.forEach(cb => {
      cb.addEventListener("change", function() {
        if (this.checked) {
          allCheck.checked = false;
          countryChecks.forEach(other => { if (other !== this) other.checked = false; });
          currentFilter = this.value;
        } else {
          const stillChecked = Array.from(countryChecks).some(c => c.checked);
          if (!stillChecked) {
            allCheck.checked = true;
            currentFilter = "all";
          } else {
            currentFilter = Array.from(countryChecks).find(c => c.checked).value;
          }
        }
        applyFilterAndCloseDetail();
      });
    });

    const resetBtn = document.getElementById("resetFiltersBtn");
    if (resetBtn) {
      resetBtn.addEventListener("click", () => {
        allCheck.checked = true;
        countryChecks.forEach(cb => cb.checked = false);
        currentFilter = "all";
        applyFilterAndCloseDetail();
      });
    }
  }

  buildFilters();
  if (!checkUrlForUnit()) renderUnits();
})();
</script>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
