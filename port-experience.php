<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-port-experience.php");
include_once("include/lang/{$idioma}-single-port-experience.php");

?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

  <?php include("include/head.php"); ?>

</head>

<body class="shock-body">

  <?php include("include/header.php"); ?>

  <!-- Main -->
  <main id="port-page" class="shock-main">

    <!-- banner -->
    <section class="shock-section has-overlay">
      <div class="banner d-flex align-items-center">
        <div class="content-wrapper top-zero ">
          <!-- Intro -->
          <div class="basic-intro text-center">
            <h1 class="title white text-1 banner-title text-uppercase fw-bold">
              <?= TITULOS_BANNER_PORT_EXPERIENCE[0] ?>
            </h1>
            <p class="text-white banner-subtitle"><?= TITULOS_BANNER_PORT_EXPERIENCE[1] ?></p>
          </div>
        </div>
        <!-- Image -->
        <div class="image-wrapper">
          <div class="banner-fixed" style="background-image:url('assets/images/media/bg-port-experience.webp')">

          </div>
          <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
        </div>
        <!-- Overlay -->
        <div class="overlay-blue"></div>
      </div>
    </section>

    <!-- Welcome Text -->
    <section class="shock-section pt-2 pb-4">
      <div class="container text-center my-5">
        <div class="mx-auto mb-2">
          <h2 class="text-style-2 lh-1 text-uppercase gradient-animated-title animation-duration-2"><?= TITULOS_PORT_EXPERIENCE[0] ?><br>
            <?= TITULOS_PORT_EXPERIENCE[1] ?>
          </h2>
        </div>
        <div class="container-text mx-auto px-5">

          <p class="text-black black text-style-13"><?= TEXT_PORT_EXPERIENCE[0] ?></p>
          <p class="text-black black text-style-13"><?= TEXT_PORT_EXPERIENCE[1] ?></p>
        </div>
      </div>
    </section>

    <!-- Cards -->
    <section class="shock-section pb-5">
      <div class="container max-w-85">
        <div class="container text-center">
          <div class="row row-cols-3 g-2">
            <?php foreach ($points as $point) { ?>
              <div class="col-12 col-md-4">
                <div class="card-port text-bg-dark">

                  <div class="card-img-wrapper">
                    <img src="assets/images/port-experience/<?= $point['cover'] ?>" class="card-img brightness-9" alt="Cover <?= $point['name'] ?>">
                  </div>

                  <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                    <!-- Icon -->
                    <div class="wrapper-icon mx-auto">
                      <?= $point["icon"]; ?>
                    </div>
                    <h2 class="card-title"><?= $point["name"]; ?></h2>
                    <div class="w-100 wrapper-link-more">
                      <a href="<?= $idioma ?>/port-experience/<?= $point["path"]; ?>" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                      <!-- Icon aino Bay -->
                      <div class="mt-5px">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 286.26" width="130" fill="white">
                          <path d="M3.29,146.28c11.29,0,21.29,5.28,27.51,13.37,7.79,49.68,49,89.07,101.04,96.6,8.97,5.88,14.86,15.72,14.86,26.87,0,1.73,1.47,3.14,3.3,3.14s3.3-1.41,3.3-3.14c0-11.14,5.9-20.99,14.87-26.87,52.04-7.54,93.24-46.94,101.03-96.62,6.22-8.08,16.21-13.35,27.5-13.35,1.81,0,3.3-1.4,3.3-3.15s-1.49-3.15-3.3-3.15c-11.17,0-21.08-5.17-27.31-13.1-7.32-50.98-49.75-91.4-103.21-98.28-7.84-5.97-12.88-15.15-12.88-25.44,0-1.73-1.47-3.15-3.3-3.15s-3.3,1.42-3.3,3.15c0,10.29-5.04,19.47-12.87,25.44-53.46,6.87-95.9,47.29-103.21,98.26-6.23,7.95-16.15,13.12-27.33,13.12-1.81,0-3.29,1.4-3.29,3.15s1.47,3.15,3.29,3.15ZM45.52,116.89c9.64-35.71,38.92-63.96,76.14-73.64,9.03-2.35,18.53-3.63,28.33-3.63s19.3,1.28,28.34,3.63c37.21,9.68,66.49,37.92,76.13,73.62,2.22,8.21,3.4,16.82,3.4,25.68s-1.26,17.9-3.59,26.31c-10.01,36.08-40.07,64.45-78.08,73.53-8.39,2.01-17.17,3.09-26.21,3.09s-17.81-1.08-26.2-3.09c-38.01-9.09-68.09-37.46-78.09-73.56-2.32-8.39-3.58-17.2-3.58-26.28s1.18-17.45,3.39-25.65Z" />
                          <path d="M64.91,169.26c.62,1.74,1.25,3.47,1.99,5.16l1.18,2.69,53.96-29.73c.85-.47,1.65-1,2.44-1.54l.6-.4c1.36-.9,2.68-1.89,3.94-2.95,1.45-1.22,2.81-2.53,4.05-3.89l.26-.28c1.07-1.19,2.08-2.46,3.02-3.78l.4-.58c.84-1.22,1.6-2.47,2.26-3.7l.19-.37c.82-1.56,1.55-3.17,2.18-4.86.19-.5.37-1,.54-1.51.68-2.09,1.17-4.05,1.48-5.99.38-2.32.56-4.4.56-6.37v-55.68l-2.95.27c-.2.02-.4.05-.59.08-3.11.31-6.27.79-9.64,1.49l-2.12.44v53.4c0,1.51-.18,3.12-.56,5.04l-.12.62c-.09.47-.17.93-.29,1.37-.42,1.47-1.05,3.04-1.98,4.86-.35.68-.69,1.36-1.09,2-.69,1.1-1.5,2.2-2.5,3.35-.5.59-1,1.17-1.56,1.71-1.79,1.76-3.8,3.27-6.16,4.6l-51.48,28.36.58,1.93c.41,1.34.86,2.67,1.42,4.23Z" />
                          <path d="M140.75,152.89l-.33.07c-2.28.44-4.48,1.03-6.53,1.76-2.58.92-4.68,1.84-6.6,2.9l-53.51,29.48,1.62,2.29c1.76,2.48,3.83,5.03,6.33,7.79l1.45,1.61,51.75-28.51c1.19-.65,2.54-1.25,4.14-1.83,1.04-.37,2.09-.71,3.16-.97,1.21-.29,2.3-.49,3.32-.62,1.05-.13,2.15-.19,3.36-.21.71-.02,1.45.05,2.39.12,1.1.08,2.22.22,3.34.43,1.29.24,2.59.57,3.86.98,1.01.34,2.01.73,2.98,1.17l.6.27c.47.21.93.41,1.38.66l50.76,27.96,2,.98,1.46-1.6c2.43-2.66,4.49-5.17,6.3-7.66l1.66-2.29-54.52-30.04c-1.17-.64-2.37-1.17-3.78-1.78-2.55-1.11-4.94-1.92-7.3-2.49-.28-.07-.55-.11-.83-.16l-.34-.06c-1.14-.24-2.28-.49-3.45-.64-.66-.09-1.33-.14-2-.19l-.62-.05c-.42-.03-.84-.06-1.24-.08l-.59-.03c-.69-.04-1.38-.08-2.06-.08-.35,0-.67.02-1.02.05l-.33.02c-.91.03-1.81.08-2.71.17-.92.08-1.84.21-2.74.34-.45.07-.9.16-1.36.25Z" />
                          <path d="M157.74,122.24c.2.65.44,1.28.78,2.19.64,1.7,1.4,3.36,2.3,5.05.73,1.36,1.58,2.73,2.51,4.06l.26.37c.94,1.31,1.99,2.61,3.3,4.06,1.3,1.41,2.71,2.74,4.2,3.97,1.32,1.09,2.75,2.14,4.24,3.09l.7.47c.57.38,1.14.76,1.75,1.1l54.23,29.87,1.17-2.72c.99-2.32,1.81-4.46,2.51-6.54.21-.63.39-1.28.56-1.93l.83-2.88-51.72-28.5c-2.19-1.21-4.22-2.73-6.03-4.5-.51-.5-.97-1.04-1.49-1.64-1.06-1.22-1.92-2.36-2.63-3.49-.37-.6-.68-1.22-1.08-1.99-.92-1.79-1.59-3.5-2.04-5.2-.12-.47-.21-.94-.3-1.42l-.07-.36c-.36-1.88-.54-3.44-.54-4.9v-52.61l-2.48-.51c-.49-.1-.98-.2-1.46-.29-2.71-.51-5.22-.86-7.65-1.11-.25-.02-.51-.07-.76-.09l-2.95-.27v54.88c0,1.91.16,3.9.5,6.08.29,1.89.74,3.78,1.37,5.79Z" />
                          <path d="M97.11,123.96c1.77,0,3.54-.32,5.26-.96,4.1-1.53,7.21-4.72,8.53-8.77.48-1.47.71-2.81.71-4.1,0-.24-.03-.46-.06-.72-.4-7.26-6.43-12.88-13.88-13.08l-.57-.04c-4.12,0-8.08,1.72-10.85,4.72-2.36,2.55-3.66,5.79-3.66,9.12,0,.93.13,1.77.25,2.39,1.22,6.63,7.21,11.45,14.26,11.45Z" />
                          <path d="M196.41,121.78h0c2.35,1.43,5.03,2.18,7.76,2.18,8,0,14.51-6.21,14.51-13.84,0-.27-.03-.52-.08-.87-.27-4.08-2.39-7.81-5.82-10.23-4.27-3.02-9.88-3.61-14.81-1.38-3.15,1.43-5.66,3.88-7.05,6.89-.83,1.78-1.25,3.66-1.25,5.59,0,.53.07,1.05.18,1.85.57,4.05,2.96,7.63,6.56,9.81Z" />
                          <path d="M159.78,187.71c-1.07-.85-2.15-1.51-3.29-2h0c-3.91-1.69-8.26-1.65-12.2.15-1.14.52-2.23,1.2-3.24,2.04-3.2,2.65-5.03,6.44-5.03,10.41,0,1.58.32,3.2.94,4.82,1.35,3.44,4.12,6.28,7.61,7.79.69.3,1.41.48,2.13.67,1.25.34,2.52.57,3.82.57.93,0,1.86-.11,2.78-.28,1.18-.23,2.34-.59,3.47-1.1,3.46-1.59,6.16-4.49,7.42-7.97.56-1.56.83-3.03.83-4.49,0-4.08-1.92-7.94-5.26-10.6Z" />
                        </svg>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="text-center d-block mt-4">
          <a href="<?= $idioma ?>/map" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= TEXT_BUTTON_PORT_EXPERIENCE ?></strong></a>
        </div>
      </div>
    </section>

  </main>


  <?php include("include/widget.php"); ?>
  <?php include("include/footer.php"); ?>
  <?php include("include/js.php"); ?>

</body>

</html>