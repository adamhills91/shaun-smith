<?php

$fields = get_fields();
$top_text = $fields['top_text'];
?>

<section id="service-top-text">
  <div class="container">
    <div class="fade-in"><?= $top_text['copy']; ?></div>
    <a href="<?= $top_text['button']['link']; ?>" class="btn fade-in">
      <span?><?= $top_text['button']['text']; ?></span>
    </a>
  </div>
</section>