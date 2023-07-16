<?php

$fields = get_fields();
$about_us = $fields['about_us'];

?>

<section id="about-us">
  <div class="left">
    <div class="image fade-in">
      <img src="<?= $about_us['image']['url'] ?>" alt="<?= $about_us['image']['alt'] ?>">
    </div>
  </div>
  <div class="right">
    <div class="right__content fade-in">
      <h2><?= $about_us['title'] ?></h2>
      <?= $about_us['copy']; ?>
      <a href="<?= $about_us['button']['link'] ?>" class="btn"><?= $about_us['button']['text'] ?></a>
    </div>
  </div>
</section>