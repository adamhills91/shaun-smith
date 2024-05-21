<?php

$fields = get_fields();
$hero = $fields['hero'];

?>

<section id="hero" <?php if (is_front_page()) {
                      echo 'class="home-page"';
                    } ?> style="background-image: url(<?= $hero['bg_img']['url']; ?>); background-position: 50% <?= $hero['background_vertical_position'] ?>%">
  <div class="overlay">
  </div>
  <div class="gradient"></div>
  <div class="container">
    <div class="hero__content">
      <?php if (is_front_page()) {


      ?>
        <!-- <h3><?= $hero['subtitle']; ?></h3>
        <h1><?= $hero['title']; ?></h1>
        <h4><?= $hero['tagline']; ?></h4>
        <?= $hero['copy']; ?> -->

        <!-- <img class="hero-logo" src="<?= $hero['logo']['url'] ?>" alt="<?= $hero['logo']['alt'] ?>"> -->

        <?php echo wp_get_attachment_image($hero['logo']['id'], "full"); ?>

        <a href="<?= $hero['button']['link']; ?>" class="btn">
          <span?><?= $hero['button']['text']; ?></span>
        </a>

      <? } else { ?>
        <h1><?= $hero['title']; ?></h1>
      <?php } ?>
    </div>
    <?php if (is_front_page()) { ?>
      <a href="#services"><img class="scroll-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/svg/sub-menu-arrow.svg" alt="down-arrow"></a>
    <?php } ?>
  </div>

</section>