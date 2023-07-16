<?php

$fields = get_fields();
$reviews = $fields['reviews'];
?>

<section id="reviews">

  <div class="container">
    <h2 class="fade-in"><?= $reviews['title'] ?></h2>
    <div class="fade-in"><?= $reviews['copy'] ?></div>

    <div class="google-reviews fade-in">
      <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
    </div>

    <a class="fade-in" href="<?= $reviews['link']['url'] ?>" target="_blank"> <?= $reviews['link']['text'] ?></a>

  </div>
</section>