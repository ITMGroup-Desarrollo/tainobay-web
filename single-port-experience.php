<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-single-port-experience.php");
include_once("include/lang/{$idioma}-port-experience.php");

$currentUri = explode('.', $_GET['point'] ?? '')[0] ?? '';

if (!$currentUri) {
  header("Location: port-experience");
  exit();
}

$currentMenu = current(array_filter($points, function ($point) use ($currentUri) {
  return strtolower($point['path']) === $currentUri;
}));
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

  <?php include("include/head.php"); ?>
  <style>
    .swiper-button-next,
    .swiper-button-prev {
      height: 4rem;
      top: 50%;
    }

    #gallery {
      width: 85%;
    }

    @media (min-width: 768px) {
      #gallery {
        width: 90%;
      }
    }
  </style>

</head>

<body class="shock-body">
  <?php include("include/gtm-body.php"); ?>
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
              <img class="port-logo object-fit-contain" src="assets/images/port-experience/<?= $currentMenu['logo'] ?>" alt="Logo <?= $currentMenu['name'] ?>" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
            <?php } else { ?>
              <h1 class="title w-100 mx-auto white text-1 banner-title text-uppercase fw-bold port-logo" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500"><?= $currentMenu['name'] ?></h1>
            <?php } ?>
            <div class="mx-auto text-white mt-2 icon-banner" data-aos="fade-up" data-aos-delay="800" data-aos-duration="500"><?= $currentMenu['icon'] ?></div>
          </div>
        </div>
        <!-- Image -->
        <div class="image-wrapper">
          <!-- <div class="banner-fixed" style="background-image:url('assets/images/media/bg-faqs.jpg')">

          </div> -->
          <img src="<?= empty($currentMenu['banner']) ? 'assets/images/media/bg-faqs.jpg' : ("assets/images/port-experience/{$currentMenu['banner']}") ?>" class="image vh-65 fit-cover brightness-8" alt="This is an example description for this item." />

        </div>
        <!-- Overlay -->
        <div class="overlay-banner"></div>
      </div>
    </section>

    <!-- Welcome Text -->
    <section class="shock-section pt-2 pb-2" data-aos="fade-down" data-aos-delay="500" data-aos-duration="800">
      <div class="container text-center my-3">
        <div class="mx-auto row align-items-center gap-3">
          <div class="col-12 col-md-3">
            <a href="<?= $idioma ?>/port-experience" class="d-inline-block text-uppercase button-transparent button-orange text-center" style="padding: 8px 25px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 16 30">
                <path fill="currentColor" d="m3.55 12l7.35 7.35q.375.375.363.875t-.388.875t-.875.375t-.875-.375l-7.7-7.675q-.3-.3-.45-.675T.825 12t.15-.75t.45-.675l7.7-7.7q.375-.375.888-.363t.887.388t.375.875t-.375.875z" />
              </svg>
              <span><strong><?= BUTTON_BACK ?></strong></span>
            </a>
          </div>
          <div class="col-12 col-md-6">
            <h2 class="text-style-3 lh-1 text-uppercase text-blue text-uppercase mb-0"><?= $currentMenu['logo'] ? $currentMenu['name'] : TITULOS_SINGLE_EXPERIENCE ?>
            </h2>
          </div>
          <div class="col">
          </div>
        </div>
      </div>
    </section>

    <!-- Menu -->
    <section class="shock-section pb-5">
      <!-- <div class="container max-w-85"> -->
      <div class="w-100">
        <!-- galleria -->
        <div class="container" data-aos="zoom-in-up" data-aos-delay="400">
          <!-- Arrow Left -->
          <div class="text-blue d-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="slide-navigation-item-prev swiper-button-prev text-blue" fill="currentColor" width="200" height="500" viewBox="0 0 231.26 729.5">
              <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
              <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
            </svg>
          </div>
          <div id="gallery" class="gallery swiper slider has-navigation primary"
            data-columns="3,1,1,1" data-autoplay="5000" data-space="20" data-loop="true">
            <div class="swiper-wrapper">
              <?php foreach ($currentMenu['single_gallery'] as $img) { ?>
                <div class="swiper-slide">
                  <a href="<?= $img ?>"
                    class="item lightbox-link hover-zoom-rotate">
                    <div class="image-wrapper">
                      <img src="<?= $img ?>" class="image" />
                    </div>
                  </a>
                </div>
              <?php } ?>

            </div>
          </div>

          <!-- Arrow Right -->
          <div class="text-blue">
            <svg xmlns="http://www.w3.org/2000/svg" class="swiper-button-next slide-navigation-item-next text-blue" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
              <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
              <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
            </svg>
          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/modalPopup.php"); ?>
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