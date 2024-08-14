<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-single-port-experience.php");

// $currentUri = $_SERVER['REQUEST_URI'];
$currentMenu = null;
// echo ($currentUri);
$point = isset($_GET['point']) ? $_GET['point'] : '';
$single_point = explode('.', $point);
// echo ($single_point[0]);


$currentUri = $single_point[0];
if ($currentUri == null) {
  header("Location: port-experience");
  die();
}
foreach ($points as $point) {
  if ($currentUri == strtolower($point['path'])) {
    $currentMenu = $point;
    break;
  }
}
// print_r($currentMenu);
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

  <?php include("include/head.php"); ?>

</head>

<body class="shock-body">

  <?php include("include/header.php"); ?>

  <!-- Main -->
  <main id="single-port-page" class="shock-main">

    <!-- banner -->
    <section class="shock-section has-overlay">
      <div class="banner d-flex align-items-center">
        <div class="content-wrapper top-zero ">
          <!-- Intro -->
          <div class="basic-intro text-center">
            <h1 class="title white text-1 banner-title text-uppercase fw-bold">
              <?= $currentMenu['name'] ?>
            </h1>
            <div class="mx-auto text-white mt-2 icon-banner"><?= $currentMenu['icon'] ?></div>
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

    <!-- Welcome Text -->
    <section class="shock-section pt-2 pb-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
      <div class="container text-center my-3">
        <div class="mx-auto">
          <h2 class="text-style-3 lh-1 text-uppercase text-blue text-uppercase mb-0"><?= TITULOS_SINGLE_EXPERIENCE ?>
          </h2>
        </div>
      </div>
    </section>

    <!-- Menu -->
    <section class="shock-section pb-5">
      <!-- <div class="container max-w-85"> -->
      <div class="w-100">
        <?php foreach ($currentMenu['menu'] as $menuItem) { ?>
          <div class="seccion-menu-img w-100" style="background-image: url(<?= "assets/images/port-experience/{$currentMenu['path']}/{$menuItem['image']}" ?>); background-position: <?= $menuItem['image-position'] ?>;">
            <!-- <img src="<?= "assets/images/port-experience/{$currentMenu['path']}/{$menuItem['img']}" ?>" class="w-100" alt="imagen del menu"> -->
          </div>
          <div class="row row-cols-2 p-md-5 g-0 max-w-100">
            <?php foreach ($menuItem['items'] as $item) { ?>
              <div class="col-12 col-md-6 dashed-border">
                <div class="card w-100">
                  <div class="card-body">
                    <h5 class="card-title text-blue"><strong><?= $item['name'] ?></strong></h5>
                    <ul class="row row-cols-2 text-blue text-uppercase">
                      <?php foreach ($item['ingredients'] as $ingredient) { ?>
                        <li class="list-group-item mb-2"><?= $ingredient ?></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>
        <?php } ?>

        <div class="text-center d-block mt-4">
          <a href="javascript:void(0)" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= TEXT_BUTTON_SINGLE_PORT ?></strong></a>
        </div>
      </div>
    </section>


  </main>


  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/js.php"); ?>

</body>

</html>