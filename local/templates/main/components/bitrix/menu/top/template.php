<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php if (!empty($arResult)): ?>
<ul>
<?php
$items = array_values($arResult);
$n     = count($items);
$i     = 0;
while ($i < $n):
    $arItem = $items[$i];

    if ((int)$arItem["DEPTH_LEVEL"] !== 1) { $i++; continue; }

    if ($arItem["IS_PARENT"]):
?>
  <li class="dropdown text-uppercase<?php if ($arItem["SELECTED"]) echo " active"; ?>">
    <a href="<?= htmlspecialcharsbx($arItem["LINK"]) ?>"><span><?= htmlspecialcharsbx($arItem["TEXT"]) ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <ul>
    <?php $i++; while ($i < $n && (int)$items[$i]["DEPTH_LEVEL"] > 1): $arChild = $items[$i]; ?>
      <li<?php if ($arChild["SELECTED"]) echo ' class="active"'; ?>><a href="<?= htmlspecialcharsbx($arChild["LINK"]) ?>"><?= htmlspecialcharsbx($arChild["TEXT"]) ?></a></li>
    <?php $i++; endwhile; ?>
    </ul>
  </li>
<?php else: ?>
  <li class="text-uppercase<?php if ($arItem["SELECTED"]) echo " active"; ?>"><a href="<?= htmlspecialcharsbx($arItem["LINK"]) ?>"><?= htmlspecialcharsbx($arItem["TEXT"]) ?></a></li>
<?php
        $i++;
    endif;
endwhile;
?>
</ul>
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
<?php endif; ?>
