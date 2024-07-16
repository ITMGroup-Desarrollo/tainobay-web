<?php
include_once("include/lang/{$idioma}-contact-form.php");
?>

<form action="">
  <div class="mb-2">
    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="<?= NAME ?>">
  </div>
  <div class="mb-2">
    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="<?= EMAIL ?>">
  </div>
  <div class="form-floating mb-2">
    <input type="text" class="form-control" id="subject" placeholder="<?= SUBJECT ?>">
    <label for="floatingInput"><?= SUBJECT ?></label>
  </div>
  <div class="mb-2">
    <textarea id="message" name="message" class="form-control form-control-lg" placeholder="<?= MESSAGE ?>" rows="3"></textarea>
  </div>

</form>