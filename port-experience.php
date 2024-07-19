<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-port-experience.php");

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
          <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." />
        </div>
        <!-- Overlay -->
        <div class="overlay-blue"></div>
      </div>
    </section>

    <!-- Welcome Text -->
    <section class="shock-section pt-2 pb-4">
      <div class="container text-center my-5">
        <div class="mx-auto mb-2">
          <h2 class="text-style-3 lh-1 text-uppercase text-blue gradient-title"><?= TITULOS_PORT_EXPERIENCE[0] ?><br>
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

            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title">Blue Parrot</h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="<?= $idioma ?>/single-port-experience" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="card-port text-bg-dark">

                <div class="card-img-wrapper">
                  <img src="assets/images/port-experience/blue-parrot/blue-parrot-two.webp" class="card-img" alt="Blue Parrot">
                </div>

                <div class="card-content-overlay d-flex flex-column align-items-center justify-content-end">
                  <!-- Icon -->
                  <div class="wrapper-icon mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26">
                      <g fill="none">
                        <defs>
                          <mask id="IconifyId190c6e0265530b8bd2">
                            <path fill="#fff" d="M0 0h26v26H0z" />
                            <g fill="#000">
                              <path fill-rule="evenodd" d="M17.28 4.051C15.12 5.115 14 6.611 14 8.506c0 1.82 1.037 3.051 3 3.631V14a.5.5 0 0 0 1 0V4.5a.5.5 0 0 0-.72-.449M15 8.506c0-1.268.65-2.314 2-3.158v5.74c-1.364-.477-2-1.321-2-2.582" clip-rule="evenodd" />
                              <path fill-rule="evenodd" d="M16 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0m1.5 5.5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                              <path d="M7.532 5.475a.5.5 0 1 1 1 .05c-.084 1.672.003 2.81.237 3.374c.183.442.544.634 1.202.597a.5.5 0 0 1 .058.998c-1.058.06-1.826-.349-2.184-1.211c-.307-.74-.403-1.996-.313-3.808" />
                              <path d="M12.467 5.475a.5.5 0 1 0-.998.05c.083 1.672-.004 2.81-.238 3.374c-.183.442-.544.634-1.202.597a.5.5 0 0 0-.058.998c1.058.06 1.826-.349 2.184-1.211c.307-.74.403-1.996.312-3.808" />
                              <path d="M9.5 5.5a.5.5 0 0 1 1 0v9a.5.5 0 0 1-1 0z" />
                              <path fill-rule="evenodd" d="M8.5 15.5v5a1.5 1.5 0 0 0 3 0v-5a1.5 1.5 0 0 0-3 0M10 21a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5" clip-rule="evenodd" />
                            </g>
                          </mask>
                        </defs>
                        <circle cx="13" cy="13" r="13" fill="currentColor" mask="url(#IconifyId190c6e0265530b8bd2)" />
                      </g>
                    </svg>
                  </div>
                  <h2 class="card-title"><strong>Blue Parrot</strong></h2>
                  <div class="w-100 wrapper-link-more">
                    <a href="#" class="d-inline-block text-uppercase button-transparent button-orange text-center"><strong><?= BUTTON_EXPLORE ?></strong></a>
                    <!-- Icon aino Bay -->
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m2 11l2.05.1a7.96 7.96 0 0 1 3.2-5.54L6.13 3.84c-.27-.48-.13-1.09.37-1.37c.5-.27 1.09-.11 1.37.37l.93 1.82a8.1 8.1 0 0 1 6.4 0l.93-1.82c.28-.48.87-.64 1.37-.37c.5.28.64.89.37 1.37l-1.12 1.72a7.96 7.96 0 0 1 3.2 5.54L22 11a1 1 0 0 1 1 1a1 1 0 0 1-1 1l-2.05-.1a7.96 7.96 0 0 1-3.2 5.54l1.12 1.72c.27.48.13 1.09-.37 1.37c-.5.27-1.09.11-1.37-.37l-.93-1.82a8.1 8.1 0 0 1-6.4 0l-.93 1.82c-.28.48-.87.64-1.37.37c-.5-.28-.64-.89-.37-1.37l1.12-1.72a7.96 7.96 0 0 1-3.2-5.54L2 13a1 1 0 0 1-1-1a1 1 0 0 1 1-1m7.07.35c.13-.61.46-1.15.93-1.56L8.34 7.25a6 6 0 0 0-2.29 3.95zM12 9c.32 0 .62.05.9.14l1.38-2.69C13.58 6.16 12.81 6 12 6s-1.58.16-2.28.45l1.38 2.69c.28-.09.58-.14.9-.14m2.93 2.35l3.02-.15a6 6 0 0 0-2.29-3.95L14 9.79c.47.41.8.95.93 1.56m0 1.3c-.13.61-.46 1.15-.93 1.56l1.66 2.54a6 6 0 0 0 2.29-3.95zM12 15c-.32 0-.62-.05-.91-.14l-1.37 2.69c.7.29 1.47.45 2.28.45s1.58-.16 2.28-.45l-1.37-2.69c-.29.09-.59.14-.91.14m-2.93-2.35l-3.02.15c.22 1.6 1.06 3.01 2.29 3.95L10 14.21c-.47-.41-.8-.95-.93-1.56" />
                      </svg>
                    </div>
                  </div>
                </div>

              </div>
            </div>
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