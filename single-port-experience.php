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
            <?php if ($currentMenu['logo']) { ?>
              <img class="port-logo" src="assets/images/port-experience/<?= $currentMenu['logo'] ?>" width="500" height="200" alt="Logo <?= $currentMenu['name'] ?>" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
            <?php } else { ?>
              <h1 class="title white text-1 banner-title text-uppercase fw-bold port-logo" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500"><?= $currentMenu['name'] ?></h1>
            <?php } ?>
            <div class="mx-auto text-white mt-2 icon-banner" data-aos="fade-up" data-aos-delay="800" data-aos-duration="500"><?= $currentMenu['icon'] ?></div>
          </div>
        </div>
        <!-- Image -->
        <div class="image-wrapper">
          <!-- <div class="banner-fixed" style="background-image:url('assets/images/media/bg-faqs.jpg')">

          </div> -->
          <img src="<?= empty($currentMenu['banner']) ? 'assets/images/media/bg-faqs.jpg' : ("assets/images/port-experience/{$currentMenu['banner']}") ?>" class="image vh-65 fit-cover" alt="This is an example description for this item." />

        </div>
        <!-- Overlay -->
        <div class="overlay-blue"></div>
      </div>
    </section>

    <!-- Welcome Text -->
    <section class="shock-section pt-2 pb-2" data-aos="fade-down" data-aos-delay="500" data-aos-duration="800">
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

        <?php if (isset($currentMenu['pdf'])) { ?>
          <div class="text-center d-block mt-4">
            <a href="<?= empty($currentMenu['pdf']) ? 'javascript:void(0)' : ("assets/pdf/{$currentMenu['pdf']}") ?>" target="_blank" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= TEXT_BUTTON_SINGLE_PORT ?></strong></a>
          </div>
        <?php } ?>
      </div>
    </section>


  </main>

  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/js.php"); ?>
  <script>
    const logo = document.querySelector('.port-logo');
    const documentScroll = () => {
      let {
        scrollY
      } = window;

      logo.style.marginTop = `${scrollY}px`;
    };

    document.addEventListener('scroll', documentScroll);
  </script>
</body>

</html>