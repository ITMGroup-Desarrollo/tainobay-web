<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-discover-beyond.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/beyond-discover.css">
</head>

<body class="shock-body">

    <?php include("include/header.php"); ?>

    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-overlay">
            <div class="banner d-flex align-items-center">
                <div class="content-wrapper top-zero ">
                    <!-- Intro -->
                    <div class="basic-intro text-center">
                        <h1 class="title white">
                            <span class="text-1 text-style-3"><?php echo TITULOS_DISCOVER[0];  ?></span>
                            <br>
                            <span class="text-1 text-style-3"><?php echo TITULOS_DISCOVER[1];  ?></span>
                            <br>
                            <span class="text-2 text-style-8 "><?php echo TITULOS_DISCOVER[2];  ?> </span>
                        </h1>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <img src="assets/images/blog/playa-dorada-two.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." />
                </div>
                <!-- Overlay -->
                <div class="overlay black-65"></div>
            </div>
        </section>
        <!--Welcome-->
        <section class="shock-section pt-2 pb-4">
            <div class="container text-center my-5">
                <div class="container-title mx-auto mb-2">
                    <h2 class="text-style-2 lh-1 text-blue"><span class="d-block text-start"><?php echo DISCOVER_WELCOME[0];  ?></span>
                        <span class="d-flex justify-content-end gap-2">
                            <h2 class="text-style-2 lh-1  text-blue"><span class="d-block text-start"><?php echo DISCOVER_WELCOME[1];  ?></span>
                        </span>
                    </h2>
                </div>
                <div class="container-text mx-auto px-5">

                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[2];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[3];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[4];  ?></p>
                </div>
            </div>
        </section>
        <!--First Carrusel-->
        <section>
            <div id="port-experience" class="shock-section pt-2 pb-4">
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h3 class="text-style-2 lh-1 title-carrusel">
                            <span class="d-block text-start"><?php echo DISCOVER_CARRUSEL[0]; ?></span>
                            <span class="d-flex justify-content-end gap-5">
                                <span class="text-style-4 lh-1 text-italic">
                                    <mark class="animated-underline primary"><?php echo DISCOVER_CARRUSEL[1]; ?></mark>
                                </span>
                            </span>
                        </h3>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center gap-3 w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev1 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <p class="text-style-7" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL[2]; ?></span>
                            </p>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next1 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%;">
                        <p class="text-black black text-style-13 justificado"><?php echo DISCOVER_CARRUSEL[3]; ?></p>
                        <div class="d-flex justify-content-end">
                            <a class="display-button" onclick="rotateIcon(this)">
                                <i class="fa-solid fa-xmark fa-rotate-by" style="--fa-rotate-angle: 45deg; width:20px; height:auto;"></i>
                                <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4]; ?></b>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3">

                        </button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" class="d-block w-100" alt="Parque Central">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/MuseoAmbar.jpg">
                                    <img src="assets/images/points-of-interest/MuseoAmbar.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/UmbrellaStreet.jpg">
                                    <img src="assets/images/points-of-interest/UmbrellaStreet.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>

            </div>
            <div class="container text-center my-5 shock-section pt-2 pb-4 ">
                <div class="container-title container-title-display mx-auto mb-2">
                    <h2 class="text-style-3 lh-1 text-blue "><span class="d-block text-start centrado"><?php echo DISCOVER_CARRUSEL[6];  ?></span>

                    <h2 class="text-style-3 lh-1  text-blue "><span class="d-block text-start centrado"><?php echo DISCOVER_CARRUSEL[7];  ?></span>

                    </h2>
                </div>
                <div class="container-text mx-auto px-5 ">

                    <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[8];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[9];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[10];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[11];  ?></p>
                </div>
            </div>
            <div>
                
            </div>
        </section>
        <!--Second Carrusel-->
        <section>
            <div id="port-experience" class="shock-section pt-2 pb-4">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3">

                        </button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" class="d-block w-100" alt="Parque Central">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/MuseoAmbar.jpg">
                                    <img src="assets/images/points-of-interest/MuseoAmbar.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/UmbrellaStreet.jpg">
                                    <img src="assets/images/points-of-interest/UmbrellaStreet.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h3 class="text-style-2 lh-1 title-carrusel">
                            <span class="d-block text-start"><?php echo DISCOVER_CARRUSEL2[0]; ?></span>
                            <span class="d-flex justify-content-end gap-5">
                                <span class="text-style-4 lh-1 text-italic">
                                    <mark class="animated-underline primary"><?php echo DISCOVER_CARRUSEL2[1]; ?></mark>
                                </span>
                            </span>
                        </h3>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center gap-3 w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev2 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <p class="text-style-7" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL2[2]; ?></span>
                            </p>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next2 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%;">
                        <p class="text-black black text-style-13 justificado"><?php echo DISCOVER_CARRUSEL2[3]; ?></p>
                        <div class="d-flex justify-content-end">
                            <a class="display-button" onclick="rotateIcon(this)">
                                <i class="fa-solid fa-xmark fa-rotate-by" style="--fa-rotate-angle: 45deg; width:20px; height:auto;"></i>
                                <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4]; ?></b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="displayed-blog">
                    <p style="color: black;">Hola mundo</p>
                </div>
            </div>
        </section>
        <!--Third Carrusel-->
        <section>
            <div id="port-experience" class="shock-section pt-2 pb-4">
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h3 class="text-style-2 lh-1 title-carrusel">
                            <span class="d-block text-start"><?php echo DISCOVER_CARRUSEL3[0]; ?></span>
                            <span class="d-flex justify-content-end gap-5">
                                <span class="text-style-4 lh-1 text-italic">
                                    <mark class="animated-underline primary"><?php echo DISCOVER_CARRUSEL3[1]; ?></mark>
                                </span>
                            </span>
                        </h3>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center gap-3 w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev3 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <p class="text-style-7" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL3[2]; ?></span>
                            </p>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next3 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%;">
                        <p class="text-black black text-style-13 justificado"><?php echo DISCOVER_CARRUSEL3[3]; ?></p>
                        <div class="d-flex justify-content-end">
                            <a class="display-button" onclick="rotateIcon(this)">
                                <i class="fa-solid fa-xmark fa-rotate-by" style="--fa-rotate-angle: 45deg; width:20px; height:auto;"></i>
                                <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4]; ?></b>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3">

                        </button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" class="d-block w-100" alt="Parque Central">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/MuseoAmbar.jpg">
                                    <img src="assets/images/points-of-interest/MuseoAmbar.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/UmbrellaStreet.jpg">
                                    <img src="assets/images/points-of-interest/UmbrellaStreet.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>

                <div class="displayed-blog">
                    <p style="color: black;">Hola mundo</p>
                </div>
            </div>
        </section>
        <!--Fourth Carrusel-->
        <section>
            <div id="port-experience" class="shock-section pt-2 pb-4">
                <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2">

                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3">

                        </button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" class="d-block w-100" alt="Parque Central">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/MuseoAmbar.jpg">
                                    <img src="assets/images/points-of-interest/MuseoAmbar.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-image-wrapper position-relative">
                                <!-- share -->
                                <div class="position-absolute top-0 end-0 p-1 button-share">
                                    <button class="border-0 text-white bg-transparent">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                        </svg>
                                    </button>
                                </div>
                                <picture>
                                    <source src="assets/images/points-of-interest/UmbrellaStreet.jpg">
                                    <img src="assets/images/points-of-interest/UmbrellaStreet.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h3 class="text-style-2 lh-1 title-carrusel">
                            <span class="d-block text-start"><?php echo DISCOVER_CARRUSEL4[0]; ?></span>
                            <span class="d-flex justify-content-end gap-5">
                                <span class="text-style-4 lh-1 text-italic">
                                    <mark class="animated-underline primary"><?php echo DISCOVER_CARRUSEL4[1]; ?></mark>
                                </span>
                            </span>
                        </h3>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center gap-3 w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev4 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <p class="text-style-7" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL4[2]; ?></span>
                            </p>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next4 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            </svg>
                        </a>
                    </div>
                    <div class="container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%;">
                        <p class="text-black black text-style-13 justificado"><?php echo DISCOVER_CARRUSEL4[3]; ?></p>
                        <div class="d-flex justify-content-end">
                            <a class="display-button" onclick="rotateIcon(this)">
                                <i class="fa-solid fa-xmark fa-rotate-by" style="--fa-rotate-angle: 45deg; width:20px; height:auto;"></i>
                                <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4]; ?></b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="displayed-blog">
                    <p style="color: black;">Hola mundo</p>
                </div>
            </div>
        </section>


    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Añade un manejador de eventos para cada botón de despliegue
            const buttons = document.querySelectorAll('.display-button');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const section = this.closest('section'); // Encuentra el ancestro <section> del botón
                    const displayedBlog = section.querySelector('.displayed-blog'); // Encuentra el div correspondiente dentro de esa sección

                    // Oculta todos los otros displayed-blog en otras secciones
                    document.querySelectorAll('.displayed-blog').forEach(blog => {
                        if (blog !== displayedBlog) {
                            blog.style.display = 'none';
                        }
                    });

                    // Alterna la visibilidad del displayed-blog en la sección actual
                    if (displayedBlog.style.display === 'none' || displayedBlog.style.display === '') {
                        displayedBlog.style.display = 'block';
                    } else {
                        displayedBlog.style.display = 'none';
                    }

                    // Rotea el icono y cambia el texto del botón
                    const icon = this.querySelector('.fa-xmark');
                    const textElement = this.querySelector('b');
                    if (icon) {
                        icon.classList.toggle('rotate-90');
                    }
                    if (textElement) {
                        const isExpanded = textElement.textContent.trim() === "<?php echo DISCOVER_CARRUSEL[4]; ?>";
                        textElement.textContent = isExpanded ? "<?php echo DISCOVER_CARRUSEL[5]; ?>" : "<?php echo DISCOVER_CARRUSEL[4]; ?>";
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa el primer carrusel
            const carousel1 = new bootstrap.Carousel('#carouselExampleIndicators1');

            // Agrega el evento de clic para la flecha previa del primer carrusel
            document.querySelector('.slide-navigation-item-prev1').addEventListener('click', function(event) {
                event.preventDefault();
                carousel1.prev(); // Usa la API de Bootstrap para ir al slide anterior
            });

            // Agrega el evento de clic para la flecha siguiente del primer carrusel
            document.querySelector('.slide-navigation-item-next1').addEventListener('click', function(event) {
                event.preventDefault();
                carousel1.next(); // Usa la API de Bootstrap para ir al siguiente slide
            });

            // Inicializa el segundo carrusel
            const carousel2 = new bootstrap.Carousel('#carouselExampleIndicators2');

            // Agrega el evento de clic para la flecha previa del segundo carrusel
            document.querySelector('.slide-navigation-item-prev2').addEventListener('click', function(event) {
                event.preventDefault();
                carousel2.prev(); // Usa la API de Bootstrap para ir al slide anterior
            });

            // Agrega el evento de clic para la flecha siguiente del segundo carrusel
            document.querySelector('.slide-navigation-item-next2').addEventListener('click', function(event) {
                event.preventDefault();
                carousel2.next(); // Usa la API de Bootstrap para ir al siguiente slide
            });
            // Inicializa el segundo carrusel
            const carousel3 = new bootstrap.Carousel('#carouselExampleIndicators3');

            // Agrega el evento de clic para la flecha previa del segundo carrusel
            document.querySelector('.slide-navigation-item-prev3').addEventListener('click', function(event) {
                event.preventDefault();
                carousel3.prev(); // Usa la API de Bootstrap para ir al slide anterior
            });

            // Agrega el evento de clic para la flecha siguiente del segundo carrusel
            document.querySelector('.slide-navigation-item-next3').addEventListener('click', function(event) {
                event.preventDefault();
                carousel3.next(); // Usa la API de Bootstrap para ir al siguiente slide
            });
            // Inicializa el segundo carrusel
            const carousel4 = new bootstrap.Carousel('#carouselExampleIndicators4');

            // Agrega el evento de clic para la flecha previa del segundo carrusel
            document.querySelector('.slide-navigation-item-prev4').addEventListener('click', function(event) {
                event.preventDefault();
                carousel4.prev(); // Usa la API de Bootstrap para ir al slide anterior
            });

            // Agrega el evento de clic para la flecha siguiente del segundo carrusel
            document.querySelector('.slide-navigation-item-next4').addEventListener('click', function(event) {
                event.preventDefault();
                carousel4.next(); // Usa la API de Bootstrap para ir al siguiente slide
            });
        });
    </script>

</body>

</html>