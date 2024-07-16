<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-contact.php");

?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

  <?php include("include/head.php"); ?>

</head>

<body class="shock-body">

  <?php include("include/header.php"); ?>

  <!-- Main -->
  <main id="main" class="shock-main">

    <!-- banner -->
    <section class="shock-section has-overlay">
      <div class="banner d-flex align-items-center">
        <div class="content-wrapper top-zero ">
          <!-- Intro -->
          <div class="basic-intro text-center">
            <h1 class="title white text-1 banner-title text-uppercase fw-bold">
              <?= TITULOS_BANNER_CONTACT[0]; ?>
            </h1>
            <p class="text-white banner-subtitle"><?= TITULOS_BANNER_CONTACT[1]; ?></p>
          </div>
        </div>
        <!-- Image -->
        <div class="image-wrapper">
          <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." />
        </div>
        <!-- Overlay -->
        <div class="overlay-blue"></div>
      </div>
    </section>

    <!-- Title -->
    <section class="shock-section has-holder pt-5 pb-2">
      <div class="container max-w-75">

        <div class="basic-intro text-center">
          <h2 class="text-blue text-style-2 text-uppercase">
            <?= TITULOS_CONTACT[0] ?>
          </h2>
        </div>
        <!-- <hr class="gray-25"> -->
      </div>
    </section>

    <!-- Main -->
    <section class="shock-section pb-5">
      <div class="container max-w-85">
        <a href="mailto:info@porttainobay.com" class="text-blue text-center d-block mb-1"><strong>info@porttainobay.com</strong></a>
        <address class="text-blue text-center">Av. Antigua Via Férrea, Muelle Turístico entre Av. Penetración Portuaria y Prolongación Duarte. <br>
          Puerto Plata 57000 República Dominicana.
        </address>
        <!-- Form -->
        <div class="stretched-section wrapper-canva">
          <?php include("include/contact-form.php"); ?>
        </div>
      </div>
    </section>

  </main>

  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/js.php"); ?>

</body>

</html>