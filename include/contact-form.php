<?php
include_once("include/lang/{$idioma}-contact-form.php");
?>

<form id="contact-form" method="POST" class="row mt-4">
  <div class="mb-2 col-md-6">
    <input type="text" id="name" name="name" class="form-control rounded-pill px-4 py-3 text-blue" placeholder="<?= NAME ?>" required>
  </div>
  <div class="mb-2 col-md-6">
    <input type="email" id="email" name="email" class="form-control rounded-pill px-4 py-3" placeholder="<?= EMAIL ?>" required>
  </div>
  <div class="mb-2 col-12">
    <input type="text" id="subject" name="subject" class="form-control rounded-pill px-4 py-3" placeholder="<?= SUBJECT ?>">
  </div>
  <div class="mb-2 col-12">
    <textarea id="message" name="message" class="form-control rounded-4 px-4 py-3" placeholder="<?= MESSAGE ?>" rows="3"></textarea>
  </div>
  <div class="col-12 text-center">
    <button type="submit" id="submit-button" class="text-uppercase button-transparent button-orange text-center rounded-pill"><?= SEND ?></button>
  </div>

</form>

<!-- Message response ajax -->
<div id="response-message" class="text-center mt-2"></div>