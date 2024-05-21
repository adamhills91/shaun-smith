<?php

$fields = get_fields();
$info_grid = $fields['info_grid'];
?>

<section id="service-grid">
  <div class="row fade-in">
    <div class="left">
      <img src=" <?= $info_grid['image_1']['url'] ?>" alt="<?= $info_grid['image_1']['alt'] ?>">
    </div>
    <div class="right">
      <h3><?= $info_grid['text_1']['title'] ?></h3>
      <div><?= $info_grid['text_1']['copy'] ?></div>
    </div>
  </div>
  <div class="row fade-in">
    <div class="left">
      <h3><?= $info_grid['text_2']['title'] ?></h3>
      <div><?= $info_grid['text_2']['copy'] ?></div>
    </div>
    <div class="right">
      <img src="<?= $info_grid['image_2']['url'] ?>" alt="<?= $info_grid['image_2']['alt'] ?>">
    </div>
  </div>
  <div class="row contact-bar">
    <div class="container">
      <?php
      $contact_fields = get_field('contact_form', 21);

      ?>
      <?php if (get_the_title() == "Flooring Contractor") { ?>
        <h2 class="fade-in">Need a <?php single_post_title(); ?>? <br /><br /><a href="tel:<?= $contact_fields['contact_details']['phone']; ?>">Call today</a> or <a href="/contact">send us a message</a> to discuss!</h2>
      <?php } else { ?>
        <h2 class="fade-in">Questions about <?php single_post_title(); ?>? <br /><br /><a href="tel:<?= $contact_fields['contact_details']['phone']; ?>">Call today</a> or <a href="/contact">send us a message</a> to discuss!</h2>
      <?php } ?>
    </div>
  </div>
</section>