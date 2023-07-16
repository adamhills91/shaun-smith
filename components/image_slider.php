<?php

$fields = get_fields();
$image_slider = $fields['image_slider'];

?>

<section class="slider">
  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

      <?php foreach ($image_slider as $slider) { ?>
        <div class="swiper-slide">
          <img src="<?= $slider['url'] ?>" alt="<?= $slider['alt'] ?>">
        </div>
      <?php } ?>
      <!-- <div class="swiper-slide">
        1
      </div>
      <div class="swiper-slide">
        2
      </div>
      <div class="swiper-slide">
        3
      </div>
      <div class="swiper-slide">
        4
      </div>
      <div class="swiper-slide">
        5
      </div>
      <div class="swiper-slide">
        6
      </div>
      <div class="swiper-slide">
        7
      </div>
      <div class="swiper-slide">
        8
      </div> -->
    </div>
  </div>
</section>