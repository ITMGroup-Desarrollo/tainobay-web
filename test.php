<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-points-of-interest.php");
include_once("include/lang/reviews.php");
include_once("include/lang/{$idioma}-home.php");

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

        <!-- Banner -->
        <section class="shock-section has-holder pt-5 pb-2">
            <div class="container max-w-75">
                <!-- Intro -->
                <div class="basic-intro text-center">
                    <h1 class="title black">
                        <span class="text-1 text-style-3"><?php echo TITULOS[1]; ?> </span>
                        <span class="text-2 text-style-4 text-italic"><?php echo TITULOS[2]; ?> <mark
                                class="animated-underline accent"><?php echo TITULOS[3]; ?></mark></span>
                    </h1>
                </div>
            </div>
        </section>

        <section class="shock-section pt-2 pb-4 mb-3" data-aos="fade-right" data-aos-duration="400" data-aos-delay="300">
            <div id="container-reviews" class="container">
                <!-- Arrow Left -->
                <div class="text-blue d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="slide-navigation-item-prev swiper-button-prev text-blue" fill="currentColor" width="200" height="500" viewBox="0 0 231.26 729.5">
                        <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                    </svg>
                </div>
                <div class="container d-flex align-items-center swiper slider has-navigation scheme-1 primary" data-columns="3,3,1,3" data-loop="true" data-space="50" data-autoplay="4000">
                    <!-- review content -->
                    <div class=" justify-content-evenly swiper-wrapper">

                        <?php foreach ($reviews as $review) { ?>
                            <div class="card-review rounded-5 d-flex flex-column position-relative swiper-slide">
                                <!-- Image wrapper -->
                                <div class="card-header mb-1">
                                    <img src="<?= $review['avatar'] ?>" class="rounded-circle user-img" alt="Avatar de <?= $review['name'] ?>">
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
                                    <?php
                                    if (strlen($review['review']) > 150) {
                                        $short_text = substr($review['review'], 0, 140) . '...';
                                    ?>
                                        <p class='text-justify text-xs bold'><?= $short_text ?></p>

                                    <?php  } else { ?>
                                        <p class='text-justify text-xs bold'><?= $review['review'] ?></p>
                                    <?php } ?>
                                    <a href='<?= $review['url'] ?>' target='_blank' rel='noopener noreferrer' class='button-transparent-reviews button-orange text-center d-inline-block text-uppercase' style="font-size: 12px;"><?= BTN_REVIEW ?></a>
                                </div>
                                <!-- Quotes Right -->
                                <div class="text-orange text-end mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.456 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.248-5.621c-.537.278-1.24.375-1.93.311c-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.1.49 2.748 1.179m-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.456 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621c-.537.278-1.24.375-1.929.311C4.591 12.323 3.17 10.842 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.1.49 2.748 1.179" />
                                    </svg>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Arrow Right -->
                <div class="text-blue">
                    <svg xmlns="http://www.w3.org/2000/svg" class="swiper-button-next slide-navigation-item-next text-blue" fill="currentColor" width="200" height="500" viewBox="0 0 231.26 729.5">
                        <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                    </svg>
                </div>
            </div>
        </section>

        <section class="shock-section pt-2 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="zoom-in-up" data-aos-delay="600">
                        <!-- Arrow Left -->
                        <div class="text-blue d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="slide-navigation-item-prev swiper-button-prev text-blue" fill="currentColor" width="200" height="500" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </div>

                        <div id="reviews" class="gallery swiper slider has-navigation scheme-1 primary"
                            data-columns="3,3,1,3" data-autoplay="10000" data-space="50" data-loop="true">
                            <div class="swiper-wrapper">

                                <?php foreach ($reviews as $review) { ?>
                                    <div class="card-review rounded-5 d-flex flex-column position-relative swiper-slide">
                                        <!-- Image wrapper -->
                                        <div class="card-header mb-1">
                                            <img src="<?= $review['avatar'] ?>" class="rounded-circle user-img" alt="Avatar de <?= $review['name'] ?>">
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
                                            <?php
                                            if (strlen($review['review']) > 150) {
                                                $short_text = substr($review['review'], 0, 140) . '...';
                                            ?>
                                                <p class='text-justify text-xs bold'><?= $short_text ?></p>

                                            <?php  } else { ?>
                                                <p class='text-justify text-xs bold'><?= $review['review'] ?></p>
                                            <?php } ?>
                                            <a href='<?= $review['url'] ?>' target='_blank' rel='noopener noreferrer' class='button-transparent-reviews button-orange text-center d-inline-block text-uppercase' style="font-size: 12px;"><?= BTN_REVIEW ?></a>
                                        </div>
                                        <!-- Quotes Right -->
                                        <div class="text-orange text-end mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M19.417 6.679C20.447 7.773 21 9 21 10.989c0 3.5-2.456 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.248-5.621c-.537.278-1.24.375-1.93.311c-1.804-.167-3.226-1.648-3.226-3.489a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.1.49 2.748 1.179m-10 0C10.447 7.773 11 9 11 10.989c0 3.5-2.456 6.637-6.03 8.188l-.893-1.378c3.335-1.804 3.987-4.145 4.247-5.621c-.537.278-1.24.375-1.929.311C4.591 12.323 3.17 10.842 3.17 9a3.5 3.5 0 0 1 3.5-3.5c1.073 0 2.1.49 2.748 1.179" />
                                            </svg>
                                        </div>

                                    </div>
                                <?php } ?>


                            </div>
                        </div>

                        <!-- Arrow Right -->
                        <div class="text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" class="swiper-button-next slide-navigation-item-next text-blue" fill="currentColor" width="200" height="500" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>



    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
</body>

</html>