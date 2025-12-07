<?php

include_once("include/config.php");
include_once("include/lang/{$idioma}-points-of-interest.php");

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

        <!-- Portfolio -->
        <section class="shock-section pt-5 pb-5">
            <div class="container">
                <div class="horizontal-tab scheme-1 primary" data-aos="fade">
                    <!-- Tab navigation -->
                    <ul id="portfolio-tab" class="nav nav-tabs" role="tablist" aria-orientation="horizontal">
                        <li class="nav-item" role="presentation">
                            <button id="interest-tab" class="nav-link active" aria-selected="true"
                                aria-controls="interest" data-bs-target="#interest" data-bs-toggle="tab" role="tab">
                                <?php echo TITULOS[4]; ?>
                            </button>
                        </li>

                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content">
                        <div id="interest" class="tab-pane fade show active" role="tabpanel">
                            <!-- Posts -->
                            <div class="swiper slider stretched has-gap has-side-gaps has-navigation has-pagination scheme-3 primary"
                                data-columns="2,2,1,1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card has-full-image vh-75 small-shadow rounded parent">
                                            <!-- Image -->
                                            <div class="image-wrapper hover-up-down">
                                                <img src="assets/images/points-of-interest/BlancaAlley.jpg"
                                                    alt="<?php echo BLANCAALLEY[0]; ?>" class="image" />
                                            </div>
                                            <!-- Body -->
                                            <div class="card-body align-v-bottom">
                                                <div class="holder">
                                                    <a href="javascript:void(0);" class="link"
                                                        onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')">
                                                        <span class="badge primary-50 primary-hover">
                                                            <span
                                                                class="badge-text white-75 white-hover"><?php echo  TITULOS[0]; ?></span>
                                                        </span>
                                                    </a>
                                                    <h3 class="title text-style-9 white"><?php echo BLANCAALLEY[0]; ?>
                                                    </h3>
                                                    <hr class="gray-25">
                                                </div>
                                                <!-- Overlay -->

                                                <!-- Link -->
                                                <a href="javascript:void(0);" class="full-link"
                                                    onclick="ventanaModal('BlancaAlley' ,'<?php echo BLANCAALLEY[0]; ?>')"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card has-full-image vh-75 small-shadow rounded parent">
                                            <!-- Image -->
                                            <div class="image-wrapper hover-up-down">
                                                <img src="assets/images/points-of-interest/ParqueCentral.jpg"
                                                    alt="<?php echo PARQUECENTRAL[0]; ?>" class="image" />
                                            </div>
                                            <!-- Body -->
                                            <div class="card-body align-v-bottom">
                                                <div class="holder">
                                                    <a href="javascript:void(0);" class="link"
                                                        onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')">
                                                        <span class="badge primary-50 primary-hover">
                                                            <span
                                                                class="badge-text white-75 white-hover"><?php echo  TITULOS[0]; ?></span>
                                                        </span>
                                                    </a>
                                                    <h3 class="title text-style-9 white"><?php echo PARQUECENTRAL[0]; ?>
                                                    </h3>
                                                    <hr class="gray-25">
                                                </div>
                                                <!-- Overlay -->

                                                <!-- Link -->
                                                <a href="javascript:void(0);" class="full-link"
                                                    onclick="ventanaModal('ParqueCentral' ,'<?php echo PARQUECENTRAL[0]; ?>')"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card has-full-image vh-75 small-shadow rounded parent">
                                            <!-- Image -->
                                            <div class="image-wrapper hover-up-down">
                                                <img src="assets/images/points-of-interest/UmbrellaStreet.jpg"
                                                    alt="<?php echo UMBRELLASTREET[0]; ?>" class="image" />
                                            </div>
                                            <!-- Body -->
                                            <div class="card-body align-v-bottom">
                                                <div class="holder">
                                                    <a href="javascript:void(0);" class="link"
                                                        onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')">
                                                        <span class="badge primary-50 primary-hover">
                                                            <span
                                                                class="badge-text white-75 white-hover"><?php echo  TITULOS[0]; ?></span>
                                                        </span>
                                                    </a>
                                                    <h3 class="title text-style-9 white">
                                                        <?php echo UMBRELLASTREET[0]; ?></h3>
                                                    <hr class="gray-25">
                                                </div>
                                                <!-- Overlay -->

                                                <!-- Link -->
                                                <a href="javascript:void(0);" class="full-link"
                                                    onclick="ventanaModal('UmbrellaStreet' ,'<?php echo UMBRELLASTREET[0]; ?>')"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card has-full-image vh-75 small-shadow rounded parent">
                                            <!-- Image -->
                                            <div class="image-wrapper hover-up-down">
                                                <img src="assets/images/points-of-interest/MuseoAmbar.jpg"
                                                    alt="<?php echo MUSEOAMBAR[0] ?>" class="image" />
                                            </div>
                                            <!-- Body -->
                                            <div class="card-body align-v-bottom">
                                                <div class="holder">
                                                    <a href="javascript:void(0);" class="link"
                                                        onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')">
                                                        <span class="badge primary-50 primary-hover">
                                                            <span
                                                                class="badge-text white-75 white-hover"><?php echo  TITULOS[0]; ?></span>
                                                        </span>
                                                    </a>
                                                    <h3 class="title text-style-9 white"><?php echo MUSEOAMBAR[0] ?>
                                                    </h3>
                                                    <hr class="gray-25">
                                                </div>
                                                <!-- Overlay -->

                                                <!-- Link -->
                                                <a href="javascript:void(0);" class="full-link"
                                                    onclick="ventanaModal('MuseoAmbar' ,'<?php echo MUSEOAMBAR[0] ?>')"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card has-full-image vh-75 small-shadow rounded parent">
                                            <!-- Image -->
                                            <div class="image-wrapper hover-up-down">
                                                <img src="assets/images/points-of-interest/FortalezaSanFelipe.jpg"
                                                    alt="<?php echo FORTALEZASANFELIPE[0] ?>" class="image" />
                                            </div>
                                            <!-- Body -->
                                            <div class="card-body align-v-bottom">
                                                <div class="holder">
                                                    <a href="javascript:void(0);" class="link"
                                                        onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')">
                                                        <span class="badge primary-50 primary-hover">
                                                            <span
                                                                class="badge-text white-75 white-hover"><?php echo  TITULOS[0]; ?></span>
                                                        </span>
                                                    </a>
                                                    <h3 class="title text-style-9 white">
                                                        <?php echo FORTALEZASANFELIPE[0] ?></h3>
                                                    <hr class="gray-25">
                                                </div>
                                                <!-- Overlay -->

                                                <!-- Link -->
                                                <a href="javascript:void(0);" class="full-link"
                                                    onclick="ventanaModal('FortalezaSanFelipe' ,'<?php echo FORTALEZASANFELIPE[0] ?>')"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-side-gaps-prev white"></div>
                                <div class="swiper-side-gaps-next white"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Scrolling text -->
        <section class="shock-section pb-5">
            <div class="scrolling-text">
                <!-- Text -->
                <div class="text-wrapper mix-blend-lighter">
                    <h2 class="text text-style-1 text-outline gray-75" data-lax="h-left"><?php echo FRASE[0]; ?>
                    </h2>
                    <h3 class="text text-style-8 text-italic gray-75" data-lax="h-right"><?php echo FRASE[1]; ?>
                    </h3>
                </div>
            </div>
        </section>


    </main>



    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
</body>

</html>