<?php
include_once("include/lang/{$idioma}-contact-form.php");
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form id="contact-form" method="POST" class="row mt-4">
  <div class="mb-2 col-md-6">
    <input type="text" id="name" name="name" class="form-control rounded-pill px-4 py-3 text-blue" placeholder="<?= NAME ?>" required>
  </div>
  <div class="mb-2 col-md-6">
    <input type="email" id="email" name="email" class="form-control rounded-pill px-4 py-3" placeholder="<?= EMAIL ?>" required>
  </div>
  <div class="mb-2 col-md-6">
    <select name="naviera" id="naviera" class="form-select rounded-pill px-4 py-3" required>
      <option selected disabled value=""><?= SHIP ?></option>
      <option value="CELEBRITY">CELEBRITY</option>
      <option value="MSC">MSC</option>
      <option value="NORWEGIAN">NORWEGIAN</option>
      <option value="OCEANIA">OCEANIA</option>
      <option value="REGENT">REGENT</option>
      <option value="ROYAL CARIBBEAN">ROYAL CARIBBEAN</option>
      <option value="VIRGIN VOYAGES">VIRGIN VOYAGES</option>
    </select>
  </div>
  <div class="mb-2 col-md-6 position-relative">
    <input type="date" id="arrival" name="arrival" class="form-control rounded-pill px-4 py-3" required>
    <label for="arrival" class="placeholder" style="font-weight: bold; font-style: italic;"><?= ARRIVAL_DATE ?></label>
  </div>
  <div class="mb-2 col-12">
    <textarea id="message" name="message" class="form-control rounded-4 px-4 py-3" placeholder="<?= MESSAGE ?>" rows="3"></textarea>
  </div>
  <div
    class="g-recaptcha"
    data-sitekey="6LdxBKoqAAAAACIc3BrqzWZNwDnp248cJ9HUn5lr">
  </div>
  <div class="col-12 text-center">
    <button type="submit" id="submit-button" class="text-uppercase button-transparent button-orange text-center rounded-pill"><?= SEND ?></button>
  </div>

</form>

<!-- Message response ajax -->
<div id="response-message" class="text-center mt-2"></div>