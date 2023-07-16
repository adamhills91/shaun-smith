<?php

$fields = get_fields();
$services = $fields['services'];

?>

<section id="services">
  <div class="container">

    <div class="title">
      <h2 class=" fade-in"><?= $services['title'] ?></h2>
      <div class="fade-in"><?= $services['copy']; ?></div>
      <h3 class="fade-in">Explore our range of services</h3>
      <div class="services__grid">
        <?php
        foreach ($services['service_details'] as $service) { ?>

          <div class="service__card">
            <div class="service__card__img">
              <a href="<?= $service['link']; ?>"><img src="<?= $service['image']['url'] ?>" alt="<?= $service['image']['alt'] ?>"></a>
            </div>
            <h4> <a href="<?= $service['link']; ?>"><?= $service['title'] ?></a></h4>
            <?= $service['copy']; ?>
          </div>

        <?php } ?>
      </div>
    </div>

</section>