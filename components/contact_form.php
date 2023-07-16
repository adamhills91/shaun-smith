<?php

$fields = get_fields();
$contact_form = $fields['contact_form'];
$contact_details = $contact_form['contact_details'];

?>

<section id="contact-form">
  <div class="container">
    <div class="title">
      <h2 class="fade-in"><?= $contact_form['title']; ?></h2>
      <div class="fade-in"><?= $contact_form['copy']; ?></div>
    </div>
    <div class="contact-form">
      <div class="left fade-in">
        <?php echo do_shortcode('[wpforms id="234" title="false"]'); ?>
      </div>
      <div class="right">
        <ul class="contact-details">
          <li class="phone fade-in"><a href="tel:<?= $contact_details['phone'] ?>"> <?= $contact_details['phone'] ?></a></li>
          <li class="email fade-in"><a href="mailto:<?= $contact_details['email'] ?>"> <?= $contact_details['email'] ?></a></li>
          <li class="address fade-in"> <?= $contact_details['address'] ?></li>
        </ul>
        <div class="opening-times">
          <h4 class="fade-in">Opening Times</h4>
          <div class="fade-in"><?= $contact_details['opening_times'] ?></div>
        </div>
      </div>
    </div>
  </div>

  <div class="google-map fade-in">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10065.066367327177!2d-3.343518!3d50.9002831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486d975a8f670bdf%3A0x2c829ba30b70e4b8!2sShaun%20Smith%20Carpet%20%26%20Vinyl%20Specialist!5e0!3m2!1sen!2suk!4v1688469512260!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>