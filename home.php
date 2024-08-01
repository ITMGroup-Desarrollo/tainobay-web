<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-home.php");
include_once("include/lang/{$idioma}-points-of-interest.php");
include_once("include/lang/{$idioma}-port-experience.php");
include_once("include/lang/reviews.php");

?>
<!DOCTYPE html>
<html lang="<?= $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <style>
        @media only screen and (max-width: 768px) {

            video.vh-100,
            .vh-100 {
                height: 100% !important;
            }
        }

        @media (max-width: 768px) {

            video.vh-100,
            .vh-100 {
                height: 100% !important;
            }
        }
    </style>
</head>

<body class="shock-body">

    <?php include("include/header.php"); ?>

    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section id="home" class="shock-section has-overlay">
            <div class="banner">
                <div class="content-wrapper text-center top-50 start-50 translate-middle">
                    <div class="container">
                        <!-- Intro -->
                        <div class="extended-intro max-w-85">
                            <div class="wrapper">
                                <div class="left-column">
                                    <h1 class="text-white banner-title mb-0"><?= HOME_TEXT_BANNER[0] ?></h1>
                                    <h2 class="text-white mb-0 banner-subtitle"><?= HOME_TEXT_BANNER[1] ?></h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Video -->
                <div class="image-wrapper over-gradient">
                    <video class="video vh-100 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="assets/videos/video-puerto-taino.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- Welcome Text -->
        <section class="shock-section pt-2 pb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="container text-center my-5">
                <div class="container-title mx-auto mb-2">
                    <h2 class="text-style-2 lh-1 text-uppercase gradient-animated-title animation-duration-1"><span class="d-block text-start"><?= HOME_TEXT_WELCOME[0] ?></span>
                        <span class="d-flex justify-content-end gap-3">
                            <span class="text-style-3 lh-1"><?= HOME_TEXT_WELCOME[1] ?></span> <?= HOME_TEXT_WELCOME[2] ?>
                        </span>
                    </h2>
                </div>
                <div class="container-text mx-auto px-5">

                    <p class="text-black black text-style-13"><?= HOME_TEXT_WELCOME[3] ?></p>
                    <p class="text-black black text-style-13"><?= HOME_TEXT_WELCOME[4] ?></p>
                </div>
            </div>
        </section>

        <!-- New Carousel -->
        <section id="port-experience" class="shock-section pt-2 pb-4">

            <div class="carousel-content bg-orange d-flex flex-column justify-content-evenly align-items-center">
                <h2 class="text-uppercase text-center text-style-3"><strong>Port experience</strong></h2>
                <div class="d-flex align-items-center gap-md-3 w-100 w-md-75 max-w-2xl-60 wrapper-arrows">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-block text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1">
                        <p class="text-style-6 text-arrows"><span class="d-block">Discover</span><span class="text-end ml-4 d-block">things to do</span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-block text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        </svg>
                    </a>
                </div>
                <a href="#" class="d-block text-uppercase button-transparent button-blue text-center button-carousel"><strong>Explore more</strong></a>
            </div>
            <div class="carousel-image-wrapper">
                <!-- share -->
                <div class="position-absolute top-0 end-0 p-1 button-share">
                    <button class="border-0 text-white bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                        </svg>
                    </button>
                </div>
                <!-- carousel info -->
                <div class="content-wrapper-carousel">
                    <h2 class="mb-0 text-style-2">01</h2>
                    <h3 class="mb-0 text-style-15">Blue Parrot</h3>
                    <p class="text-style-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.</p>
                </div>
                <picture>
                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" alt="">
                </picture>
            </div>

        </section>

        <!-- New Scrolling text -->
        <section class="shock-section pt-2 pb-4">
            <div class="scrolling-text">
                <!-- Text -->
                <div class="text-wrapper mix-blend-lighter">
                    <h2 class=" text-style-1 text-outline text-blue text-uppercase mb-0 text-center" style="line-height: 75px;" data-lax="h-left">
                        <?php echo SCROLLING_TEXT[0];  ?>
                    </h2>
                    <h3 class="text-style-5 text-blue text-uppercase font-weight-bold text-center" data-lax="h-right">
                        <?php echo SCROLLING_TEXT[1];  ?>
                    </h3>
                </div>
            </div>
        </section>

        <!-- New Second Carousel -->
        <section id="discover-beyond-cruise" class="shock-section pt-2 pb-4 dynamic-carousel">
            <div class="carousel-image-wrapper">
                <!-- share -->
                <div class="position-absolute top-0 end-0 p-1 button-share">
                    <button class="border-0 text-white bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                        </svg>
                    </button>
                </div>
                <!-- carousel info -->
                <div class="content-wrapper-carousel">
                    <h2 class="mb-0 text-style-2">01</h2>
                    <h3 class="mb-0 text-style-15">Blue Parrot</h3>
                    <p class="text-style-12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.</p>
                </div>
                <picture>
                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" alt="">
                </picture>
            </div>

            <div class="carousel-content bg-blue d-flex flex-column justify-content-evenly align-items-center">
                <h2 class="text-uppercase text-center text-style-3"><strong>Discover Beyond The Cruise</strong></h2>
                <div class="d-flex align-items-center gap-md-3 w-100 w-md-75 max-w-2xl-60 wrapper-arrows">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-block text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1">
                        <p class="text-style-6 text-arrows"><span class="d-block">Discover</span><span class="text-end ml-4 d-block">things to do</span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-block text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        </svg>
                    </a>
                </div>
                <a href="#" class="text-uppercase button-transparent button-orange text-center"><strong>Explore more</strong></a>
            </div>


        </section>

        <!-- Reviews Tripadvisor -->
        <section class="shock-section pt-2 pb-4 mb-3">
            <div id="reviews" class="container d-flex align-items-center swiper slider has-navigation" data-columns="3,2,1,3" data-loop="true" data-space="50">
                <!-- Arrow Left -->
                <div class="text-blue d-block">
                    <!-- <a href="javascript:void(0)" class="slide-navigation-item-prev d-block swiper-button-prev text-blue"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="slide-navigation-item-prev swiper-button-prev text-blue" fill="currentColor" width="100" height="200" viewBox="0 0 231.26 729.5">
                        <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                    </svg>
                    <!-- </a> -->
                </div>
                <!-- review content -->
                <div class=" justify-content-evenly swiper-wrapper">

                    <?php foreach ($reviews as $review) { ?>
                        <div class="card-review rounded-5 d-flex flex-column position-relative swiper-slide">
                            <!-- Image wrapper -->
                            <div class="card-header mb-1">
                                <img src="<?= $review['avatar'] ?>" class="rounded-circle user-img" alt="">
                            </div>

                            <!-- Quotes left -->
                            <div class=" text-orange mb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
                                </svg>
                            </div>

                            <!-- Card content -->
                            <div class="card-body text-center">
                                <h4 class="mb-0"><strong><?= $review['name'] ?></strong></h4>
                                <h6 class=""><?= $review['date'] ?></h6>
                                <p class="text-justify text-xs bold"><?= $review['review'] ?></p>
                            </div>

                            <!-- Quotes Right -->
                            <div class="text-orange text-end mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.456 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.248-5.621c-.537.278-1.24.375-1.93.311c-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.1.49 2.748 1.179m-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.456 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621c-.537.278-1.24.375-1.929.311C4.591 12.323 3.17 10.842 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.1.49 2.748 1.179" />
                                </svg>
                            </div>

                        </div>
                    <?php } ?>

                    <!-- card active -->
                    <!-- <div class="card-review rounded-5 d-flex flex-column position-relative active-card-review">
                    </div> -->


                </div>
                <!-- Arrow Right -->
                <div class="text-blue">
                    <!-- <a href="#" class="slide-navigation-item-next d-block text-blue"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="swiper-button-next slide-navigation-item-next" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                        <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                    </svg>

                    <!-- </a> -->
                </div>
            </div>
        </section>

        <!-- FAQ's -->
        <section class="shock-section pt-2 pb-4 mb-5" data-aos="zoom-in-up" data-aos-delay="200">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="mb-0 text-blue text-style-2 gradient-animated-title animation-duration-3" style="line-height: 70px;"><?= FAQS_TEXT[0] ?></h2>
                    <h3 class="mb-0 text-blue text-style-5 gradient-animated-title animation-duration-3"><?= FAQS_TEXT[1] ?></h3>
                    <p class="text-blue text-style-13"><?= FAQS_TEXT[2] ?></p>
                </div>

                <div class="d-md-flex justify-content-evenly gap-5 mb-5">
                    <div class="faq-card">
                        <!-- Collapse -->
                        <div class="collapsible">
                            <div class="collapse-group">
                                <a href="#collapse-1" class="parent text-center" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">

                                    <div class="text-blue content-icon mx-auto mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494.38 497.68">
                                            <defs>
                                                <style>
                                                    .cls-2 {
                                                        font-family: BrandonGrotesque-Black, 'Brandon Grotesque';
                                                        font-size: 342.34px;
                                                        font-weight: 800;
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" d="M488.94,241.75c-18.41,0-34.74-8.92-45-22.63-12.06-88.04-81.98-157.86-170.09-169.74-12.91-10.32-21.22-26.17-21.22-43.94,0-2.99-2.43-5.44-5.44-5.44s-5.44,2.45-5.44,5.44c0,17.77-8.3,33.62-21.21,43.94-88.1,11.87-158.03,81.67-170.09,169.7-10.27,13.73-26.61,22.66-45.03,22.66-2.99,0-5.42,2.42-5.42,5.44s2.43,5.44,5.42,5.44c18.61,0,35.09,9.12,45.34,23.09,12.85,85.8,80.75,153.83,166.5,166.84,14.78,10.15,24.49,27.16,24.49,46.4,0,2.99,2.43,5.42,5.44,5.42s5.44-2.43,5.44-5.42c0-19.24,9.72-36.25,24.5-46.4,85.75-13.02,153.65-81.07,166.49-166.88,10.25-13.95,26.72-23.06,45.32-23.06,2.99,0,5.44-2.42,5.44-5.44s-2.45-5.44-5.44-5.44M419.04,291.61c-16.49,62.31-66.04,111.3-128.66,126.99-13.83,3.47-28.3,5.33-43.19,5.33s-29.34-1.87-43.18-5.33c-62.65-15.7-112.2-64.7-128.68-127.03-3.83-14.49-5.89-29.7-5.89-45.39s1.94-30.14,5.58-44.3c15.88-61.68,64.14-110.47,125.48-127.19,14.89-4.06,30.53-6.27,46.69-6.27s31.8,2.21,46.69,6.27c61.33,16.72,109.57,65.49,125.46,127.14,3.65,14.18,5.6,29.05,5.6,44.35s-2.07,30.92-5.91,45.43" />
                                            <text class="cls-2" fill="currentColor" transform="translate(169.65 364.16)">
                                                <tspan x="0" y="0">?</tspan>
                                            </text>
                                        </svg>
                                    </div>
                                    <h3 class="text-style-11 text-blue text-center mb-1">
                                        <?php echo FAQS_1[0];  ?>
                                    </h3>


                                </a>
                                <div id="collapse-1" class="collapse-content collapse text-blue">
                                    <div class="d-block w-50 mx-auto">
                                        <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                    </div>
                                    <?php echo FAQS_1[1];  ?>

                                </div>
                                <div class="d-block w-50 mx-auto">
                                    <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                </div>
                                <a href="#collapse-1" class="d-block parent w-100 text-center text-orange button-plus collapsed" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">
                                    <svg class="rotate-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="faq-card">
                        <!-- Collapse -->

                        <div class="collapsible">
                            <div class="collapse-group">
                                <a href="#collapse-2" class="parent text-center" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">

                                    <div class="text-blue content-icon mx-auto mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494.38 497.68">
                                            <defs>
                                                <style>
                                                    .cls-2 {
                                                        font-family: BrandonGrotesque-Black, 'Brandon Grotesque';
                                                        font-size: 342.34px;
                                                        font-weight: 800;
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" d="M488.94,241.75c-18.41,0-34.74-8.92-45-22.63-12.06-88.04-81.98-157.86-170.09-169.74-12.91-10.32-21.22-26.17-21.22-43.94,0-2.99-2.43-5.44-5.44-5.44s-5.44,2.45-5.44,5.44c0,17.77-8.3,33.62-21.21,43.94-88.1,11.87-158.03,81.67-170.09,169.7-10.27,13.73-26.61,22.66-45.03,22.66-2.99,0-5.42,2.42-5.42,5.44s2.43,5.44,5.42,5.44c18.61,0,35.09,9.12,45.34,23.09,12.85,85.8,80.75,153.83,166.5,166.84,14.78,10.15,24.49,27.16,24.49,46.4,0,2.99,2.43,5.42,5.44,5.42s5.44-2.43,5.44-5.42c0-19.24,9.72-36.25,24.5-46.4,85.75-13.02,153.65-81.07,166.49-166.88,10.25-13.95,26.72-23.06,45.32-23.06,2.99,0,5.44-2.42,5.44-5.44s-2.45-5.44-5.44-5.44M419.04,291.61c-16.49,62.31-66.04,111.3-128.66,126.99-13.83,3.47-28.3,5.33-43.19,5.33s-29.34-1.87-43.18-5.33c-62.65-15.7-112.2-64.7-128.68-127.03-3.83-14.49-5.89-29.7-5.89-45.39s1.94-30.14,5.58-44.3c15.88-61.68,64.14-110.47,125.48-127.19,14.89-4.06,30.53-6.27,46.69-6.27s31.8,2.21,46.69,6.27c61.33,16.72,109.57,65.49,125.46,127.14,3.65,14.18,5.6,29.05,5.6,44.35s-2.07,30.92-5.91,45.43" />
                                            <text class="cls-2" fill="currentColor" transform="translate(169.65 364.16)">
                                                <tspan x="0" y="0">?</tspan>
                                            </text>
                                        </svg>
                                    </div>
                                    <h3 class="text-style-11 text-blue text-center mb-1">
                                        <?php echo FAQS_2[0];  ?>
                                    </h3>


                                </a>
                                <div id="collapse-2" class="collapse-content collapse text-blue">
                                    <div class="d-block w-50 mx-auto">
                                        <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                    </div>
                                    <?php echo FAQS_2[1];  ?>

                                </div>
                                <div class="d-block w-50 mx-auto">
                                    <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                </div>
                                <a href="#collapse-2" class="d-block parent w-100 text-center text-orange button-plus collapsed" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">
                                    <svg class="rotate-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="faq-card">
                        <!-- Collapse -->
                        <div class="collapsible">
                            <div class="collapse-group">
                                <a href="#collapse-3" class="parent text-center" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">

                                    <div class="text-blue content-icon mx-auto mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494.38 497.68">
                                            <defs>
                                                <style>
                                                    .cls-2 {
                                                        font-family: BrandonGrotesque-Black, 'Brandon Grotesque';
                                                        font-size: 342.34px;
                                                        font-weight: 800;
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" d="M488.94,241.75c-18.41,0-34.74-8.92-45-22.63-12.06-88.04-81.98-157.86-170.09-169.74-12.91-10.32-21.22-26.17-21.22-43.94,0-2.99-2.43-5.44-5.44-5.44s-5.44,2.45-5.44,5.44c0,17.77-8.3,33.62-21.21,43.94-88.1,11.87-158.03,81.67-170.09,169.7-10.27,13.73-26.61,22.66-45.03,22.66-2.99,0-5.42,2.42-5.42,5.44s2.43,5.44,5.42,5.44c18.61,0,35.09,9.12,45.34,23.09,12.85,85.8,80.75,153.83,166.5,166.84,14.78,10.15,24.49,27.16,24.49,46.4,0,2.99,2.43,5.42,5.44,5.42s5.44-2.43,5.44-5.42c0-19.24,9.72-36.25,24.5-46.4,85.75-13.02,153.65-81.07,166.49-166.88,10.25-13.95,26.72-23.06,45.32-23.06,2.99,0,5.44-2.42,5.44-5.44s-2.45-5.44-5.44-5.44M419.04,291.61c-16.49,62.31-66.04,111.3-128.66,126.99-13.83,3.47-28.3,5.33-43.19,5.33s-29.34-1.87-43.18-5.33c-62.65-15.7-112.2-64.7-128.68-127.03-3.83-14.49-5.89-29.7-5.89-45.39s1.94-30.14,5.58-44.3c15.88-61.68,64.14-110.47,125.48-127.19,14.89-4.06,30.53-6.27,46.69-6.27s31.8,2.21,46.69,6.27c61.33,16.72,109.57,65.49,125.46,127.14,3.65,14.18,5.6,29.05,5.6,44.35s-2.07,30.92-5.91,45.43" />
                                            <text class="cls-2" fill="currentColor" transform="translate(169.65 364.16)">
                                                <tspan x="0" y="0">?</tspan>
                                            </text>
                                        </svg>
                                    </div>
                                    <h3 class="text-style-11 text-blue text-center mb-1">
                                        <?php echo FAQS_3[0];  ?>
                                    </h3>


                                </a>
                                <div id="collapse-3" class="collapse-content collapse text-blue">
                                    <div class="d-block w-50 mx-auto">
                                        <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                    </div>
                                    <?php echo FAQS_3[1];  ?>

                                </div>
                                <div class="d-block w-50 mx-auto">
                                    <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                </div>
                                <a href="#collapse-3" class="d-block parent w-100 text-center text-orange button-plus collapsed" aria-expanded="false" aria-controls="collapse-1" data-bs-toggle="collapse">
                                    <svg class="rotate-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="<?= $idioma ?>/faqs" class="text-uppercase button-transparent button-orange text-center"><strong><?= FAQS_TEXT[3]; ?></strong></a>
                </div>
            </div>
        </section>

        <!-- Dynamic slider -->
        <?php include("include/dynamic-slider-home.php"); ?>

        <!-- Progress bar / Carousel -->
        <section class="shock-section pt-2 pb-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-lg-7 align-v-center" data-aos="zoom-in-up" data-aos-delay="300">
                        <div class="holder">
                            <!-- Intro -->
                            <div class="basic-intro mb-35">
                                <h2 class="title black">
                                    <span class="text-1 text-style-7"><?php echo  WELCOME_TEXT[0]; ?> </span>
                                    <span class="text-2 text-style-8 text-italic"><mark class="animated-underline primary"> <?php echo  WELCOME_TEXT[1]; ?>
                                        </mark>.</span>
                                </h2>
                                <div class="description gray">
                                    <?php echo  WELCOME_TEXT[2]; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5" data-aos="zoom-in-up" data-aos-delay="600">

                        <div class="gallery swiper slider has-navigation has-scrollbar scheme-1 primary" data-columns="1,1,1,1" data-autoplay="10000" data-loop="true">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-1.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-1.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-2.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-2.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-3.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-3.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/welcome/Welcome-4.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/welcome/Welcome-4.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video / Collapse -->
        <section class="shock-section pt-2 pb-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <!-- Video -->
                        <div class="gallery">
                            <a href="javascript:void(0);" class="item active   hover-zoom-rotate">

                                <div class="image-wrapper">
                                    <img src="assets/images/media/video.jpg" class="image" alt="<?php echo SITIO; ?>" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>

        <style>
            #btn-mas {
                display: none;
            }

            .container-btn {
                z-index: 10;
                position: fixed;
                bottom: 50px;
                right: 50px;
            }

            .redes a,
            .btn-mas label {
                font-size: 25px;
                display: block;
                text-decoration: none;
                background: var(--blue-color);
                color: #fff;
                width: 55px;
                height: 55px;
                line-height: 55px;
                text-align: center;
                border-radius: 50%;
                box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
                transition: all 500ms ease;
            }

            /*.redes a:hover{*/
            /*    background: #fff;*/
            /*    color: white;*/
            /*}*/
            .redes a.btn-whatsapp:hover {
                background: #006432;
                color: white;
            }

            .redes a.btn-messenger:hover {
                background: #8A00C6;
                color: white;
            }

            .redes a {
                margin-bottom: -15px;
                opacity: 0;
                visibility: hidden;
            }

            #btn-mas:checked~.redes a {
                margin-bottom: 10px;
                opacity: 1;
                visibility: visible;
            }

            .btn-mas label {
                cursor: pointer;
                background: var(--blue-color);
                font-size: 23px;
            }

            #btn-mas:checked~.btn-mas label {
                transform: rotate(135deg);
                font-size: 25px;
            }
        </style>
        <section class="shock-section">
            <div class="container-btn">
                <input type="checkbox" id="btn-mas">
                <div class="redes">
                    <a target="_blank" class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=+529986499679&text=Estoy%20interesado%20en%20un%20servico%20de%20transporte,%20me%20podr%C3%ADa%20dar%20m%C3%A1s%20informaci%C3%B3n"><i class="bi bi-whatsapp"></i></a>
                    <a target="_blank" class="btn-messenger" href="https://m.me/XelborTransfer"><i class="bi bi-messenger"></i></a>
                </div>
                <div class="btn-mas">
                    <label for="btn-mas" class="fa fa-plus"></label>
                    <!-- <label for="btn-mas"><i class="bi bi-chat-right-text-fill"></i></label> -->
                </div>
            </div>
        </section>
    </main>

    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
</body>

</html>