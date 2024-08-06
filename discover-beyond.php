<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-discover-beyond.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <?php include("include/header.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/beyond-discover.css">
    <style>

    </style>
</head>

<body class="shock-body">



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

                        </h1>
                        <h2 class="title white"><span class="text-2 text-style-8 "><?php echo TITULOS_DISCOVER[2];  ?> </span></h2>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed" style="background-image:url('assets/images/blog/playa-dorada-two.jpg')">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-blue"></div>
            </div>
        </section>
        <!--Welcome-->
        <section class="shock-section pt-2 pb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="container text-center my-5">
                <div class="container-title mx-auto mb-2">
                    <h2 class="text-style-2 lh-1 text-uppercase gradient-animated-title animation-duration-1"><span class="d-block text-start"><?php echo DISCOVER_WELCOME[0];  ?></span>
                        <span class="d-flex justify-content-end gap-3">
                            <?php echo DISCOVER_WELCOME[1];  ?>
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

        <section class="carousel-section">
            <div id="port-experience" class="shock-section left pt-2 pb-4">
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h2 class=" lh-1 title-carrusel left">
                            <span class="d-block  text-style-3 gradient-animated-title animation-duration-1" style="text-align: center;"><?php echo DISCOVER_CARRUSEL[0]; ?></span>
                            <span class="d-flex justify-content-center ">
                                <span class="text-style-4 lh-1 text-italic" style="padding: 0;"><?php echo DISCOVER_CARRUSEL[1]; ?></span>
                            </span>
                        </h2>
                    </div>
                    <div class="d-flex align-items-center w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev slide-navigation-item-prev1 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <h2 class="text-style-6" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL[2]; ?></span>
                            </h2>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next slide-navigation-item-next1 d-block text-blue">
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
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4" aria-label="Slide 5">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="5" aria-label="Slide 6">
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
                                    <source src="assets/images/blog/atv-expedition-one.jpg">
                                    <img src="assets/images/blog/atv-expedition-one.jpg" class="d-block w-100" alt="Parque Central">
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
                                    <source src="assets/images/blog/damajagua-two.jpg">
                                    <img src="assets/images/blog/atv-expedition-two.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/atv-expedition-three.jpg">
                                    <img src="assets/images/blog/atv-expedition-three.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/atv-expedition-four.jpg">
                                    <img src="assets/images/blog/atv-expedition-four.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/atv-expedition-five.jpg">
                                    <img src="assets/images/blog/atv-expedition-five.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/atv-expedition-six.jpg">
                                    <img src="assets/images/blog/atv-expedition-six.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>

            </div>
            <div class="shock-section displayed-blog">
                <div class="container text-center my-5  pt-2 pb-4 ">
                    <div class="container-title container-title-display mx-auto mb-2 centrado gradient-animated-title animation-duration-1">
                        <h2 class="text-style-3 lh-1 text-blue "><span class="d-block text-start "><?php echo DISCOVER_CARRUSEL[6];  ?></span></h2>
                        <h2 class="text-style-3 lh-1  text-blue "><span class="d-block text-start centrado"><?php echo DISCOVER_CARRUSEL[7];  ?></span></h2>
                    </div>
                    <div class="container-text mx-auto px-5 ">

                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[8];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[9];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[10];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[11];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[12];  ?></p>
                    </div>
                </div>
                <div class="container ">
                    <div class="row listado-row">
                        <div class="col-12 col-md-12 col-lg-6 ">
                            <div class="listado">
                                <div class="listado-highlights">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[13];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[14];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[15];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[16];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[17];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[18];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="listado-included">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[19];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[20];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[21];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[22];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[23];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[24];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[25];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[26];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="what-to-bring">
                                <div class="duration-container">
                                    <div class="what-to-bring-duration rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 512 512">
                                            <path fill="#1c355e" d="M256 0Q150 0 75 75T0 256t75 181t181 75t181-75t75-181t-75-181T256 0m192 277h19q-8 76-61.5 130T277 467v-19q0-21-21-21t-21 21v19q-76-8-130-61.5T45 277h19q21 0 21-21t-21-21H45q6-76 60-130t130-60v19q0 21 21 21t21-21V45q76 8 130 61.5T467 235h-19q-21 0-21 21t21 21m-169-23l39-96q3-9-.5-17T305 130q-20-7-28 13l-47 117l92 137q5 8 17 8q5 0 13-4q19-10 6-30z" />
                                        </svg>
                                        <div class="duration-text">
                                            <h2 class="text-style-6 text-italic"><?php echo DISCOVER_CARRUSEL[27];  ?></h2>
                                            <h2 class="text-style-5"><?php echo DISCOVER_CARRUSEL[28];  ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="what-to-bring-list-container">
                                    <div class="what-to-bring-list">
                                        <h2 class="text-style-8 text-italic"><?php echo DISCOVER_CARRUSEL[29];  ?></h2>
                                        <div class="list-container">
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 2048 1536">
                                                    <path fill="#ffffff" d="M896 1084q0 55-31.5 93.5T789 1216H363q-44 0-75.5-38.5T256 1084q0-54 7.5-100.5t24.5-90t51-68.5t81-25q64 64 156 64t156-64q47 0 81 25t51 68.5t24.5 90T896 1084M768 640q0 80-56 136t-136 56t-136-56t-56-136t56-136t136-56t136 56t56 136m1024 416v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m-384-256v64q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h320q14 0 23 9t9 23m384 0v64q0 14-9 23t-23 9h-192q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h192q14 0 23 9t9 23m0-256v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m128 832V256H128v1120q0 13 9.5 22.5t22.5 9.5h1728q13 0 22.5-9.5t9.5-22.5m128-1216v1216q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V160Q0 94 47 47T160 0h1728q66 0 113 47t47 113" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[30];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 64 64">
                                                    <path fill="#ffffff" d="M48.29 15.672V2H15.709v13.672c-6.099 29.382-2.873 44.629-2.732 45.264L13.212 62l17.208-5.339l-.203-.907c-3.734-16.68 1.191-28.667 2.402-31.256h.288c.98 2.765 4.587 14.673.874 31.256l-.202.907l17.208 5.337l.235-1.063c.141-.634 3.368-15.881-2.732-45.263m1.432 39.505a20.265 20.265 0 0 0-.679-1.626c-.931-1.981-1.976-3.464-2.335-3.312c-.357.151.104 1.881 1.034 3.863c.35.743.715 1.416 1.054 1.959a19.976 19.976 0 0 0-2.043-1.257c-1.984-1.073-3.752-1.68-3.945-1.356c-.191.318 1.209 1.42 3.14 2.476l-9.508-3.336c.784-4.572 1.046-8.729.995-12.389c.587.462 1.453 1.02 2.459 1.564c1.983 1.074 3.75 1.681 3.944 1.355c.194-.323-1.256-1.457-3.24-2.531a22.29 22.29 0 0 0-1.702-.829c.49.034 1.039.054 1.629.052c1.971-.008 3.564-.237 3.563-.51c-.001-.276-1.598-.495-3.566-.486c-.478.002-.933.017-1.349.042c.336-.101.688-.214 1.058-.343c1.847-.65 3.261-1.387 3.161-1.645c-.102-.257-1.681.059-3.525.71c-1.021.359-1.896.742-2.471 1.058c-.218-5.627-1.143-9.938-1.889-12.577c.633 1.118 1.254 1.925 1.432 1.839c.193-.095-.208-1.201-.896-2.471c-.054-.1-.107-.193-.161-.289c.24.143.491.285.754.428c1.983 1.073 3.75 1.68 3.944 1.355c.193-.325-1.256-1.458-3.24-2.53a20.606 20.606 0 0 0-2.032-.972c1.054.204 2.42.399 3.922.547c3.379.336 6.151.306 6.192-.065c.04-.371-2.666-.944-6.046-1.278c-2.341-.232-4.39-.29-5.442-.179V8.329h6.329c-.009 1.144.192 3.756 2.038 5.576c1.062 1.047 2.279 1.653 3.992 1.818v.052l.018.165c-.404.282-.934.722-1.486 1.248c-1.06 1.012-1.796 1.95-1.643 2.096c.154.146 1.138-.557 2.198-1.568a15.28 15.28 0 0 0 1.061-1.11l.01.046c-.345.419-.755.981-1.175 1.625c-.917 1.41-1.512 2.64-1.328 2.749c.185.107 1.078-.946 1.996-2.356a21.4 21.4 0 0 0 .687-1.128c3.663 18.327 3.589 31.023 3.091 37.635M30.854 21.381V8.329h2.667v14.158h-1.862c-.474-.184-.805-.611-.805-1.106M23.363 7.777V4.01h.669v3.768h-.2l-.001-.019l-.202.019zm.089.552c.001 1.094-.197 3.625-1.93 5.335c-.99.975-2.201 1.541-3.834 1.7l.012-7.035zm.98-4.319h6.957v3.777h-6.957zm16.254 0v3.768h-.197l-.201-.019l-.002.019h-.269V4.01zm5.605 11.35c-1.589-.163-2.712-.729-3.695-1.696c-1.732-1.71-1.932-4.241-1.929-5.335h5.624zM31.79 4.01h7.827v3.777H31.79zm14.501 3.777h-5.202V4.01h5.202zM22.962 4.01v3.777h-5.261l.007-3.777zm4.002 35.384c-.62-.209-1.668-.428-2.873-.581c-1.95-.247-3.564-.226-3.602.046c-.039.273 1.512.695 3.465.942a22.4 22.4 0 0 0 1.62.147c-.55.161-1.158.365-1.798.614c-2.113.822-3.706 1.77-3.557 2.115s1.983-.041 4.095-.862c1.032-.403 1.935-.833 2.576-1.21c-.18 3.56-.025 7.578.687 11.977l-10.076 3.535c.089-.047.174-.089.264-.137c1.984-1.073 3.435-2.208 3.241-2.532c-.195-.323-1.96.283-3.945 1.356c-.65.352-1.233.707-1.729 1.042c.303-.504.62-1.093.926-1.744c.93-1.982 1.392-3.712 1.033-3.863c-.359-.152-1.405 1.33-2.335 3.312c-.272.58-.499 1.132-.682 1.636c-.503-6.643-.576-19.449 3.17-38.003c.203.361.441.757.713 1.174c.919 1.41 1.813 2.465 1.997 2.356c.184-.109-.41-1.339-1.329-2.748l-.108-.162c1.023.963 1.955 1.622 2.103 1.48c.154-.146-.581-1.084-1.641-2.096a13.49 13.49 0 0 0-1.492-1.251v-.21c1.756-.161 3.065-.77 4.133-1.822c1.844-1.82 2.046-4.433 2.036-5.576h6.597v13.052c0 .541.303 1.019.766 1.3c-.701.121-1.998.643-3.416 1.411c-1.983 1.072-3.435 2.206-3.24 2.531c.194.323 1.961-.283 3.945-1.356c.476-.258.919-.519 1.318-.771c-.177.28-.362.594-.546.932c-.688 1.27-1.089 2.376-.897 2.471c.17.082.74-.643 1.343-1.68c-1.035 2.797-2.334 7.313-2.762 13.175" />
                                                    <ellipse cx="33.598" cy="5.389" fill="#ffffff" rx="1.276" ry="1.138" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[31];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                        <path fill="#ffffff" d="M18.026 3.902c-.152-.263-.448-.492-.716-.492c-.48 0-1.097.48-1.47.771c-.559.435-1.211.848-1.911.992c-.518.105-1.136.026-1.682-.117c-.09-.023-.864-.294-.864-.294c-1.072-.495-1.548.912-1.971 1.605c-.29.473-.655 1.037-1.07 1.606a1 1 0 0 0-1.04 1.314q-.462.565-.877 1.086A1 1 0 0 0 5.29 11.84c-1.072 1.433-1.81 2.598-2.236 3.635c-.36.88-.514 1.703-.447 2.542c.067.827.342 1.598.727 2.376c.522 1.055 1.802 1.344 2.739.803l14.722-8.5a2 2 0 0 0 .732-2.732zm.268 4.464l-1.419-2.457c-.764.546-1.617 1.033-2.545 1.223c-.954.195-1.919.034-2.587-.14c-.411-.107-.404.057-.625.418c-.252.413-.564.899-.92 1.406l.111.055a1 1 0 1 1-.886 1.793l-.473-.234q-.357.436-.68.84a1 1 0 0 1-.945 1.76l-.312-.154c-1.086 1.437-1.752 2.487-2.11 3.358c-.265.647-.34 1.154-.303 1.623c.037.466.192.964.498 1.592l14.696-8.485l-.5-.866l-4.33 2.5a1 1 0 0 1-1-1.732z" />
                                                    </g>
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[32];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 26 26">
                                                    <path fill="#ffffff" d="M19.531 1.531L14.25 4.406L5.5 9.188L.219 12.094L2.5 16.219V13A1.5 1.5 0 0 1 4 11.5h.813l.03-.125l11.595-6.344l.875.25c.024.08.05.173.093.25c.344.63 1.12.876 1.75.532c.076-.042.125-.133.188-.188l.906.281l2 3.657l-.25.906c-.079.024-.173.02-.25.062c-.293.16-.49.428-.594.719H25l-2.594-4.719zm-1.093 6.563a1.305 1.305 0 0 0-1.032 1.281c0 .716.565 1.313 1.282 1.313c.716 0 1.312-.597 1.312-1.313s-.596-1.281-1.313-1.281c-.089 0-.165-.018-.25 0zm-4.875.875a4.256 4.256 0 0 0-2.188.531c-.871.476-1.523 1.204-1.875 2h7.25a2.94 2.94 0 0 0-.313-.875c-.566-1.034-1.664-1.62-2.875-1.656zM4 13v13h22V13zm4.406 1.594h13.188l.656.656c-.017.083-.063.162-.063.25c0 .717.596 1.313 1.313 1.313c.088 0 .167-.047.25-.063l.656.656v4.188l-.656.656c-.083-.017-.162-.063-.25-.063c-.717 0-1.313.596-1.313 1.313c0 .088.046.167.063.25l-.656.656H8.406l-.656-.656c.017-.083.063-.162.063-.25c0-.717-.596-1.313-1.313-1.313c-.088 0-.167.047-.25.063l-.656-.656v-4.188l.656-.656c.083.017.162.063.25.063c.717 0 1.313-.596 1.313-1.313c0-.088-.046-.167-.063-.25zm6.594 1.5c-2.168 0-3.938 1.52-3.938 3.406c0 1.886 1.77 3.406 3.938 3.406s3.938-1.52 3.938-3.406c0-1.886-1.77-3.406-3.938-3.406m-6.5 2.093c-.716 0-1.313.597-1.313 1.313s.597 1.313 1.313 1.313s1.313-.597 1.313-1.313s-.597-1.313-1.313-1.313m13 0c-.717 0-1.313.596-1.313 1.313s.596 1.313 1.313 1.313s1.313-.596 1.313-1.313s-.596-1.313-1.313-1.313" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[33];  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note-container">
                        <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[34];  ?></h2>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[35];  ?></p>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[36];  ?></p>

                    </div>
                    <div class="col-12 col-md-12 col-lg-12" data-aos="zoom-in-up" data-aos-delay="600" style="text-align: center;">
                        <h2 class="text-style-4 text-italic text-blue"><?php echo DISCOVER_CARRUSEL[37]; ?></h2>
                        <div class="gallery swiper slider has-navigation  scheme-1 primary" data-columns="5,3,1,5" data-autoplay="10000" data-loop="true" data-space="20">
                            <div class="swiper-wrapper">


                                <div class="swiper-slide">
                                    <a href="assets/images/blog/atv-expedition-one.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/atv-expedition-one.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/atv-expedition-two.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/atv-expedition-two.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/atv-expedition-three.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/atv-expedition-three.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/atv-expedition-four.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/atv-expedition-four.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/atv-expedition-five.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/atv-expedition-five.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/atv-expedition-six.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/atv-expedition-six.jpg">
                                        </div>
                                    </a>
                                </div>



                            </div>
                            <div class="button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <a class="display-hide-button button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;">
                            <strong><?php echo DISCOVER_CARRUSEL[38]; ?></strong>
                        </a>
                    </div>
                </div>



            </div>

        </section>
        <!--Second Carrusel-->

        <section class="carousel-section">
            <div id="port-experience" class="shock-section right pt-2 pb-4">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="Slide 5">
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
                                    <source src="assets/images/blog/countryside-one.jpg">
                                    <img src="assets/images/blog/countryside-one.jpg" class="d-block w-100" alt="Parque Central">
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
                                    <source src="assets/images/blog/countryside-two.jpg">
                                    <img src="assets/images/blog/countryside-two.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/countryside-three.jpg">
                                    <img src="assets/images/blog/countryside-three.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/countryside-five.jpg">
                                    <img src="assets/images/blog/countryside-five.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/countryside-six.jpg">
                                    <img src="assets/images/blog/countryside-six.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h2 class="text-style-3 lh-1 title-carrusel right ">
                            <span class="d-block gradient-animated-title animation-duration-1" style="text-align: center;"><?php echo DISCOVER_CARRUSEL2[0]; ?></span>
                            <span class="d-flex" style="justify-content: center;">
                                <span class="text-style-4 lh-1 text-italic" style="text-align: center; padding:0;"><?php echo DISCOVER_CARRUSEL2[1]; ?></span>
                            </span>
                        </h2>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev slide-navigation-item-prev2 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <h2 class="text-style-6" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL2[2]; ?></span>
                            </h2>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next slide-navigation-item-next2 d-block text-blue">
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
            </div>
            <div class="shock-section displayed-blog">
                <div class="container text-center my-5  pt-2 pb-4 ">
                    <div class="container-title container-title-display mx-auto mb-2 gradient-animated-title animation-duration-1">
                        <h2 class="text-style-3 lh-1 text-blue "><span class="d-block text-start centrado "><?php echo DISCOVER_CARRUSEL[6];  ?></span></h2>
                        <h2 class="text-style-3 lh-1  text-blue "><span class="d-block text-start centrado"><?php echo DISCOVER_CARRUSEL[7];  ?></span></h2>
                    </div>
                    <div class="container-text mx-auto px-5 ">

                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[8];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[9];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[10];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[11];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[12];  ?></p>
                    </div>
                </div>
                <div class="container ">
                    <div class="row listado-row">
                        <div class="col-12 col-md-12 col-lg-6 ">
                            <div class="listado">
                                <div class="listado-highlights">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[13];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[14];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[15];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[16];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[17];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[18];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="listado-included">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[19];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[20];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[21];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[22];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[23];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[24];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[25];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[26];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="what-to-bring">
                                <div class="duration-container">
                                    <div class="what-to-bring-duration rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 512 512">
                                            <path fill="#1c355e" d="M256 0Q150 0 75 75T0 256t75 181t181 75t181-75t75-181t-75-181T256 0m192 277h19q-8 76-61.5 130T277 467v-19q0-21-21-21t-21 21v19q-76-8-130-61.5T45 277h19q21 0 21-21t-21-21H45q6-76 60-130t130-60v19q0 21 21 21t21-21V45q76 8 130 61.5T467 235h-19q-21 0-21 21t21 21m-169-23l39-96q3-9-.5-17T305 130q-20-7-28 13l-47 117l92 137q5 8 17 8q5 0 13-4q19-10 6-30z" />
                                        </svg>
                                        <div class="duration-text">
                                            <h2 class="text-style-6 text-italic"><?php echo DISCOVER_CARRUSEL[27];  ?></h2>
                                            <h2 class="text-style-5"><?php echo DISCOVER_CARRUSEL[28];  ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="what-to-bring-list-container">
                                    <div class="what-to-bring-list">
                                        <h2 class="text-style-8 text-italic"><?php echo DISCOVER_CARRUSEL[29];  ?></h2>
                                        <div class="list-container">
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 2048 1536">
                                                    <path fill="#ffffff" d="M896 1084q0 55-31.5 93.5T789 1216H363q-44 0-75.5-38.5T256 1084q0-54 7.5-100.5t24.5-90t51-68.5t81-25q64 64 156 64t156-64q47 0 81 25t51 68.5t24.5 90T896 1084M768 640q0 80-56 136t-136 56t-136-56t-56-136t56-136t136-56t136 56t56 136m1024 416v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m-384-256v64q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h320q14 0 23 9t9 23m384 0v64q0 14-9 23t-23 9h-192q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h192q14 0 23 9t9 23m0-256v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m128 832V256H128v1120q0 13 9.5 22.5t22.5 9.5h1728q13 0 22.5-9.5t9.5-22.5m128-1216v1216q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V160Q0 94 47 47T160 0h1728q66 0 113 47t47 113" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[30];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 64 64">
                                                    <path fill="#ffffff" d="M48.29 15.672V2H15.709v13.672c-6.099 29.382-2.873 44.629-2.732 45.264L13.212 62l17.208-5.339l-.203-.907c-3.734-16.68 1.191-28.667 2.402-31.256h.288c.98 2.765 4.587 14.673.874 31.256l-.202.907l17.208 5.337l.235-1.063c.141-.634 3.368-15.881-2.732-45.263m1.432 39.505a20.265 20.265 0 0 0-.679-1.626c-.931-1.981-1.976-3.464-2.335-3.312c-.357.151.104 1.881 1.034 3.863c.35.743.715 1.416 1.054 1.959a19.976 19.976 0 0 0-2.043-1.257c-1.984-1.073-3.752-1.68-3.945-1.356c-.191.318 1.209 1.42 3.14 2.476l-9.508-3.336c.784-4.572 1.046-8.729.995-12.389c.587.462 1.453 1.02 2.459 1.564c1.983 1.074 3.75 1.681 3.944 1.355c.194-.323-1.256-1.457-3.24-2.531a22.29 22.29 0 0 0-1.702-.829c.49.034 1.039.054 1.629.052c1.971-.008 3.564-.237 3.563-.51c-.001-.276-1.598-.495-3.566-.486c-.478.002-.933.017-1.349.042c.336-.101.688-.214 1.058-.343c1.847-.65 3.261-1.387 3.161-1.645c-.102-.257-1.681.059-3.525.71c-1.021.359-1.896.742-2.471 1.058c-.218-5.627-1.143-9.938-1.889-12.577c.633 1.118 1.254 1.925 1.432 1.839c.193-.095-.208-1.201-.896-2.471c-.054-.1-.107-.193-.161-.289c.24.143.491.285.754.428c1.983 1.073 3.75 1.68 3.944 1.355c.193-.325-1.256-1.458-3.24-2.53a20.606 20.606 0 0 0-2.032-.972c1.054.204 2.42.399 3.922.547c3.379.336 6.151.306 6.192-.065c.04-.371-2.666-.944-6.046-1.278c-2.341-.232-4.39-.29-5.442-.179V8.329h6.329c-.009 1.144.192 3.756 2.038 5.576c1.062 1.047 2.279 1.653 3.992 1.818v.052l.018.165c-.404.282-.934.722-1.486 1.248c-1.06 1.012-1.796 1.95-1.643 2.096c.154.146 1.138-.557 2.198-1.568a15.28 15.28 0 0 0 1.061-1.11l.01.046c-.345.419-.755.981-1.175 1.625c-.917 1.41-1.512 2.64-1.328 2.749c.185.107 1.078-.946 1.996-2.356a21.4 21.4 0 0 0 .687-1.128c3.663 18.327 3.589 31.023 3.091 37.635M30.854 21.381V8.329h2.667v14.158h-1.862c-.474-.184-.805-.611-.805-1.106M23.363 7.777V4.01h.669v3.768h-.2l-.001-.019l-.202.019zm.089.552c.001 1.094-.197 3.625-1.93 5.335c-.99.975-2.201 1.541-3.834 1.7l.012-7.035zm.98-4.319h6.957v3.777h-6.957zm16.254 0v3.768h-.197l-.201-.019l-.002.019h-.269V4.01zm5.605 11.35c-1.589-.163-2.712-.729-3.695-1.696c-1.732-1.71-1.932-4.241-1.929-5.335h5.624zM31.79 4.01h7.827v3.777H31.79zm14.501 3.777h-5.202V4.01h5.202zM22.962 4.01v3.777h-5.261l.007-3.777zm4.002 35.384c-.62-.209-1.668-.428-2.873-.581c-1.95-.247-3.564-.226-3.602.046c-.039.273 1.512.695 3.465.942a22.4 22.4 0 0 0 1.62.147c-.55.161-1.158.365-1.798.614c-2.113.822-3.706 1.77-3.557 2.115s1.983-.041 4.095-.862c1.032-.403 1.935-.833 2.576-1.21c-.18 3.56-.025 7.578.687 11.977l-10.076 3.535c.089-.047.174-.089.264-.137c1.984-1.073 3.435-2.208 3.241-2.532c-.195-.323-1.96.283-3.945 1.356c-.65.352-1.233.707-1.729 1.042c.303-.504.62-1.093.926-1.744c.93-1.982 1.392-3.712 1.033-3.863c-.359-.152-1.405 1.33-2.335 3.312c-.272.58-.499 1.132-.682 1.636c-.503-6.643-.576-19.449 3.17-38.003c.203.361.441.757.713 1.174c.919 1.41 1.813 2.465 1.997 2.356c.184-.109-.41-1.339-1.329-2.748l-.108-.162c1.023.963 1.955 1.622 2.103 1.48c.154-.146-.581-1.084-1.641-2.096a13.49 13.49 0 0 0-1.492-1.251v-.21c1.756-.161 3.065-.77 4.133-1.822c1.844-1.82 2.046-4.433 2.036-5.576h6.597v13.052c0 .541.303 1.019.766 1.3c-.701.121-1.998.643-3.416 1.411c-1.983 1.072-3.435 2.206-3.24 2.531c.194.323 1.961-.283 3.945-1.356c.476-.258.919-.519 1.318-.771c-.177.28-.362.594-.546.932c-.688 1.27-1.089 2.376-.897 2.471c.17.082.74-.643 1.343-1.68c-1.035 2.797-2.334 7.313-2.762 13.175" />
                                                    <ellipse cx="33.598" cy="5.389" fill="#ffffff" rx="1.276" ry="1.138" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[31];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                        <path fill="#ffffff" d="M18.026 3.902c-.152-.263-.448-.492-.716-.492c-.48 0-1.097.48-1.47.771c-.559.435-1.211.848-1.911.992c-.518.105-1.136.026-1.682-.117c-.09-.023-.864-.294-.864-.294c-1.072-.495-1.548.912-1.971 1.605c-.29.473-.655 1.037-1.07 1.606a1 1 0 0 0-1.04 1.314q-.462.565-.877 1.086A1 1 0 0 0 5.29 11.84c-1.072 1.433-1.81 2.598-2.236 3.635c-.36.88-.514 1.703-.447 2.542c.067.827.342 1.598.727 2.376c.522 1.055 1.802 1.344 2.739.803l14.722-8.5a2 2 0 0 0 .732-2.732zm.268 4.464l-1.419-2.457c-.764.546-1.617 1.033-2.545 1.223c-.954.195-1.919.034-2.587-.14c-.411-.107-.404.057-.625.418c-.252.413-.564.899-.92 1.406l.111.055a1 1 0 1 1-.886 1.793l-.473-.234q-.357.436-.68.84a1 1 0 0 1-.945 1.76l-.312-.154c-1.086 1.437-1.752 2.487-2.11 3.358c-.265.647-.34 1.154-.303 1.623c.037.466.192.964.498 1.592l14.696-8.485l-.5-.866l-4.33 2.5a1 1 0 0 1-1-1.732z" />
                                                    </g>
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[32];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 26 26">
                                                    <path fill="#ffffff" d="M19.531 1.531L14.25 4.406L5.5 9.188L.219 12.094L2.5 16.219V13A1.5 1.5 0 0 1 4 11.5h.813l.03-.125l11.595-6.344l.875.25c.024.08.05.173.093.25c.344.63 1.12.876 1.75.532c.076-.042.125-.133.188-.188l.906.281l2 3.657l-.25.906c-.079.024-.173.02-.25.062c-.293.16-.49.428-.594.719H25l-2.594-4.719zm-1.093 6.563a1.305 1.305 0 0 0-1.032 1.281c0 .716.565 1.313 1.282 1.313c.716 0 1.312-.597 1.312-1.313s-.596-1.281-1.313-1.281c-.089 0-.165-.018-.25 0zm-4.875.875a4.256 4.256 0 0 0-2.188.531c-.871.476-1.523 1.204-1.875 2h7.25a2.94 2.94 0 0 0-.313-.875c-.566-1.034-1.664-1.62-2.875-1.656zM4 13v13h22V13zm4.406 1.594h13.188l.656.656c-.017.083-.063.162-.063.25c0 .717.596 1.313 1.313 1.313c.088 0 .167-.047.25-.063l.656.656v4.188l-.656.656c-.083-.017-.162-.063-.25-.063c-.717 0-1.313.596-1.313 1.313c0 .088.046.167.063.25l-.656.656H8.406l-.656-.656c.017-.083.063-.162.063-.25c0-.717-.596-1.313-1.313-1.313c-.088 0-.167.047-.25.063l-.656-.656v-4.188l.656-.656c.083.017.162.063.25.063c.717 0 1.313-.596 1.313-1.313c0-.088-.046-.167-.063-.25zm6.594 1.5c-2.168 0-3.938 1.52-3.938 3.406c0 1.886 1.77 3.406 3.938 3.406s3.938-1.52 3.938-3.406c0-1.886-1.77-3.406-3.938-3.406m-6.5 2.093c-.716 0-1.313.597-1.313 1.313s.597 1.313 1.313 1.313s1.313-.597 1.313-1.313s-.597-1.313-1.313-1.313m13 0c-.717 0-1.313.596-1.313 1.313s.596 1.313 1.313 1.313s1.313-.596 1.313-1.313s-.596-1.313-1.313-1.313" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[33];  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note-container">
                        <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[34];  ?></h2>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[35];  ?></p>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[36];  ?></p>

                    </div>
                    <div class="col-12 col-md-12 col-lg-12" data-aos="zoom-in-up" data-aos-delay="600" style="text-align: center;">
                        <h2 class="text-style-4 text-italic text-blue"><?php echo DISCOVER_CARRUSEL[37]; ?></h2>
                        <div class="gallery swiper slider has-navigation  scheme-1 primary" data-columns="5,3,1,5" data-autoplay="10000" data-loop="true" data-space="20">
                            <div class="swiper-wrapper">



                                <div class="swiper-slide">
                                    <a href="assets/images/blog/countryside-one.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/countryside-one.jpg">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/countryside-two.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/countryside-two.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/countryside-three.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/countryside-three.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/countryside-five.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/countryside-five.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/countryside-six.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/countryside-six.jpg">


                                        </div>
                                    </a>
                                </div>




                            </div>
                            <div class="button-prev">

                            </div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <a class="display-hide-button button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;">
                            <strong><?php echo DISCOVER_CARRUSEL[38]; ?></strong>
                        </a>
                    </div>

                </div>
        </section>
        <!--Third Carrusel-->

        <section class="carousel-section">
            <div id="port-experience" class="shock-section left pt-2 pb-4">
                <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h2 class="text-style-3 lh-1 title-carrusel left " style="text-align: center; ">
                            <span class="d-block gradient-animated-title animation-duration-1"><?php echo DISCOVER_CARRUSEL3[0]; ?></span>
                            <span class="d-flex" style="justify-content: center; ">
                                <span class="text-style-4 lh-1 text-italic" style="padding:0 3rem;"><?php echo DISCOVER_CARRUSEL3[1]; ?></span>
                            </span>

                        </h2>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev slide-navigation-item-prev3 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <h2 class="text-style-6" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL3[2]; ?></span>
                            </h2>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next slide-navigation-item-next3 d-block text-blue">
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
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="3" aria-label="Slide 4">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="4" aria-label="Slide 5">
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
                                    <source src="assets/images/blog/a-walk-through-puerto-plata-one.jpg">
                                    <img src="assets/images/blog/a-walk-through-puerto-plata-one.jpg" class="d-block w-100" alt="Parque Central">
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
                                    <source src="assets/images/blog/a-walk-through-puerto-plata-six.jpg">
                                    <img src="assets/images/blog/a-walk-through-puerto-plata-six.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/a-walk-through-puerto-plata-seven.jpg">
                                    <img src="assets/images/blog/a-walk-through-puerto-plata-seven.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/a-walk-through-puerto-plata-eight.jpg">
                                    <img src="assets/images/blog/a-walk-through-puerto-plata-eight.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/a-walk-through-puerto-plata-nine.jpg">
                                    <img src="assets/images/blog/a-walk-through-puerto-plata-nine.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>
            </div>
            <div class="shock-section displayed-blog">
                <div class="container text-center my-5  pt-2 pb-4 ">
                    <div class="container-title container-title-display mx-auto mb-2 gradient-animated-title animation-duration-1">
                        <h2 class="text-style-3 lh-1 text-blue "><span class="d-block text-start centrado "><?php echo DISCOVER_CARRUSEL[6];  ?></span></h2>
                        <h2 class="text-style-3 lh-1  text-blue "><span class="d-block text-start centrado"><?php echo DISCOVER_CARRUSEL[7];  ?></span></h2>
                    </div>
                    <div class="container-text mx-auto px-5 ">

                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[8];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[9];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[10];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[11];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[12];  ?></p>
                    </div>
                </div>
                <div class="container ">
                    <div class="row listado-row">
                        <div class="col-12 col-md-12 col-lg-6 ">
                            <div class="listado">
                                <div class="listado-highlights">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[13];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[14];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[15];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[16];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[17];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[18];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="listado-included">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[19];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[20];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[21];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[22];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[23];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[24];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[25];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[26];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="what-to-bring">
                                <div class="duration-container">
                                    <div class="what-to-bring-duration rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 512 512">
                                            <path fill="#1c355e" d="M256 0Q150 0 75 75T0 256t75 181t181 75t181-75t75-181t-75-181T256 0m192 277h19q-8 76-61.5 130T277 467v-19q0-21-21-21t-21 21v19q-76-8-130-61.5T45 277h19q21 0 21-21t-21-21H45q6-76 60-130t130-60v19q0 21 21 21t21-21V45q76 8 130 61.5T467 235h-19q-21 0-21 21t21 21m-169-23l39-96q3-9-.5-17T305 130q-20-7-28 13l-47 117l92 137q5 8 17 8q5 0 13-4q19-10 6-30z" />
                                        </svg>
                                        <div class="duration-text">
                                            <h2 class="text-style-6 text-italic"><?php echo DISCOVER_CARRUSEL[27];  ?></h2>
                                            <h2 class="text-style-5"><?php echo DISCOVER_CARRUSEL[28];  ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="what-to-bring-list-container">
                                    <div class="what-to-bring-list">
                                        <h2 class="text-style-8 text-italic"><?php echo DISCOVER_CARRUSEL[29];  ?></h2>
                                        <div class="list-container">
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 2048 1536">
                                                    <path fill="#ffffff" d="M896 1084q0 55-31.5 93.5T789 1216H363q-44 0-75.5-38.5T256 1084q0-54 7.5-100.5t24.5-90t51-68.5t81-25q64 64 156 64t156-64q47 0 81 25t51 68.5t24.5 90T896 1084M768 640q0 80-56 136t-136 56t-136-56t-56-136t56-136t136-56t136 56t56 136m1024 416v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m-384-256v64q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h320q14 0 23 9t9 23m384 0v64q0 14-9 23t-23 9h-192q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h192q14 0 23 9t9 23m0-256v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m128 832V256H128v1120q0 13 9.5 22.5t22.5 9.5h1728q13 0 22.5-9.5t9.5-22.5m128-1216v1216q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V160Q0 94 47 47T160 0h1728q66 0 113 47t47 113" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[30];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 64 64">
                                                    <path fill="#ffffff" d="M48.29 15.672V2H15.709v13.672c-6.099 29.382-2.873 44.629-2.732 45.264L13.212 62l17.208-5.339l-.203-.907c-3.734-16.68 1.191-28.667 2.402-31.256h.288c.98 2.765 4.587 14.673.874 31.256l-.202.907l17.208 5.337l.235-1.063c.141-.634 3.368-15.881-2.732-45.263m1.432 39.505a20.265 20.265 0 0 0-.679-1.626c-.931-1.981-1.976-3.464-2.335-3.312c-.357.151.104 1.881 1.034 3.863c.35.743.715 1.416 1.054 1.959a19.976 19.976 0 0 0-2.043-1.257c-1.984-1.073-3.752-1.68-3.945-1.356c-.191.318 1.209 1.42 3.14 2.476l-9.508-3.336c.784-4.572 1.046-8.729.995-12.389c.587.462 1.453 1.02 2.459 1.564c1.983 1.074 3.75 1.681 3.944 1.355c.194-.323-1.256-1.457-3.24-2.531a22.29 22.29 0 0 0-1.702-.829c.49.034 1.039.054 1.629.052c1.971-.008 3.564-.237 3.563-.51c-.001-.276-1.598-.495-3.566-.486c-.478.002-.933.017-1.349.042c.336-.101.688-.214 1.058-.343c1.847-.65 3.261-1.387 3.161-1.645c-.102-.257-1.681.059-3.525.71c-1.021.359-1.896.742-2.471 1.058c-.218-5.627-1.143-9.938-1.889-12.577c.633 1.118 1.254 1.925 1.432 1.839c.193-.095-.208-1.201-.896-2.471c-.054-.1-.107-.193-.161-.289c.24.143.491.285.754.428c1.983 1.073 3.75 1.68 3.944 1.355c.193-.325-1.256-1.458-3.24-2.53a20.606 20.606 0 0 0-2.032-.972c1.054.204 2.42.399 3.922.547c3.379.336 6.151.306 6.192-.065c.04-.371-2.666-.944-6.046-1.278c-2.341-.232-4.39-.29-5.442-.179V8.329h6.329c-.009 1.144.192 3.756 2.038 5.576c1.062 1.047 2.279 1.653 3.992 1.818v.052l.018.165c-.404.282-.934.722-1.486 1.248c-1.06 1.012-1.796 1.95-1.643 2.096c.154.146 1.138-.557 2.198-1.568a15.28 15.28 0 0 0 1.061-1.11l.01.046c-.345.419-.755.981-1.175 1.625c-.917 1.41-1.512 2.64-1.328 2.749c.185.107 1.078-.946 1.996-2.356a21.4 21.4 0 0 0 .687-1.128c3.663 18.327 3.589 31.023 3.091 37.635M30.854 21.381V8.329h2.667v14.158h-1.862c-.474-.184-.805-.611-.805-1.106M23.363 7.777V4.01h.669v3.768h-.2l-.001-.019l-.202.019zm.089.552c.001 1.094-.197 3.625-1.93 5.335c-.99.975-2.201 1.541-3.834 1.7l.012-7.035zm.98-4.319h6.957v3.777h-6.957zm16.254 0v3.768h-.197l-.201-.019l-.002.019h-.269V4.01zm5.605 11.35c-1.589-.163-2.712-.729-3.695-1.696c-1.732-1.71-1.932-4.241-1.929-5.335h5.624zM31.79 4.01h7.827v3.777H31.79zm14.501 3.777h-5.202V4.01h5.202zM22.962 4.01v3.777h-5.261l.007-3.777zm4.002 35.384c-.62-.209-1.668-.428-2.873-.581c-1.95-.247-3.564-.226-3.602.046c-.039.273 1.512.695 3.465.942a22.4 22.4 0 0 0 1.62.147c-.55.161-1.158.365-1.798.614c-2.113.822-3.706 1.77-3.557 2.115s1.983-.041 4.095-.862c1.032-.403 1.935-.833 2.576-1.21c-.18 3.56-.025 7.578.687 11.977l-10.076 3.535c.089-.047.174-.089.264-.137c1.984-1.073 3.435-2.208 3.241-2.532c-.195-.323-1.96.283-3.945 1.356c-.65.352-1.233.707-1.729 1.042c.303-.504.62-1.093.926-1.744c.93-1.982 1.392-3.712 1.033-3.863c-.359-.152-1.405 1.33-2.335 3.312c-.272.58-.499 1.132-.682 1.636c-.503-6.643-.576-19.449 3.17-38.003c.203.361.441.757.713 1.174c.919 1.41 1.813 2.465 1.997 2.356c.184-.109-.41-1.339-1.329-2.748l-.108-.162c1.023.963 1.955 1.622 2.103 1.48c.154-.146-.581-1.084-1.641-2.096a13.49 13.49 0 0 0-1.492-1.251v-.21c1.756-.161 3.065-.77 4.133-1.822c1.844-1.82 2.046-4.433 2.036-5.576h6.597v13.052c0 .541.303 1.019.766 1.3c-.701.121-1.998.643-3.416 1.411c-1.983 1.072-3.435 2.206-3.24 2.531c.194.323 1.961-.283 3.945-1.356c.476-.258.919-.519 1.318-.771c-.177.28-.362.594-.546.932c-.688 1.27-1.089 2.376-.897 2.471c.17.082.74-.643 1.343-1.68c-1.035 2.797-2.334 7.313-2.762 13.175" />
                                                    <ellipse cx="33.598" cy="5.389" fill="#ffffff" rx="1.276" ry="1.138" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[31];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                        <path fill="#ffffff" d="M18.026 3.902c-.152-.263-.448-.492-.716-.492c-.48 0-1.097.48-1.47.771c-.559.435-1.211.848-1.911.992c-.518.105-1.136.026-1.682-.117c-.09-.023-.864-.294-.864-.294c-1.072-.495-1.548.912-1.971 1.605c-.29.473-.655 1.037-1.07 1.606a1 1 0 0 0-1.04 1.314q-.462.565-.877 1.086A1 1 0 0 0 5.29 11.84c-1.072 1.433-1.81 2.598-2.236 3.635c-.36.88-.514 1.703-.447 2.542c.067.827.342 1.598.727 2.376c.522 1.055 1.802 1.344 2.739.803l14.722-8.5a2 2 0 0 0 .732-2.732zm.268 4.464l-1.419-2.457c-.764.546-1.617 1.033-2.545 1.223c-.954.195-1.919.034-2.587-.14c-.411-.107-.404.057-.625.418c-.252.413-.564.899-.92 1.406l.111.055a1 1 0 1 1-.886 1.793l-.473-.234q-.357.436-.68.84a1 1 0 0 1-.945 1.76l-.312-.154c-1.086 1.437-1.752 2.487-2.11 3.358c-.265.647-.34 1.154-.303 1.623c.037.466.192.964.498 1.592l14.696-8.485l-.5-.866l-4.33 2.5a1 1 0 0 1-1-1.732z" />
                                                    </g>
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[32];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 26 26">
                                                    <path fill="#ffffff" d="M19.531 1.531L14.25 4.406L5.5 9.188L.219 12.094L2.5 16.219V13A1.5 1.5 0 0 1 4 11.5h.813l.03-.125l11.595-6.344l.875.25c.024.08.05.173.093.25c.344.63 1.12.876 1.75.532c.076-.042.125-.133.188-.188l.906.281l2 3.657l-.25.906c-.079.024-.173.02-.25.062c-.293.16-.49.428-.594.719H25l-2.594-4.719zm-1.093 6.563a1.305 1.305 0 0 0-1.032 1.281c0 .716.565 1.313 1.282 1.313c.716 0 1.312-.597 1.312-1.313s-.596-1.281-1.313-1.281c-.089 0-.165-.018-.25 0zm-4.875.875a4.256 4.256 0 0 0-2.188.531c-.871.476-1.523 1.204-1.875 2h7.25a2.94 2.94 0 0 0-.313-.875c-.566-1.034-1.664-1.62-2.875-1.656zM4 13v13h22V13zm4.406 1.594h13.188l.656.656c-.017.083-.063.162-.063.25c0 .717.596 1.313 1.313 1.313c.088 0 .167-.047.25-.063l.656.656v4.188l-.656.656c-.083-.017-.162-.063-.25-.063c-.717 0-1.313.596-1.313 1.313c0 .088.046.167.063.25l-.656.656H8.406l-.656-.656c.017-.083.063-.162.063-.25c0-.717-.596-1.313-1.313-1.313c-.088 0-.167.047-.25.063l-.656-.656v-4.188l.656-.656c.083.017.162.063.25.063c.717 0 1.313-.596 1.313-1.313c0-.088-.046-.167-.063-.25zm6.594 1.5c-2.168 0-3.938 1.52-3.938 3.406c0 1.886 1.77 3.406 3.938 3.406s3.938-1.52 3.938-3.406c0-1.886-1.77-3.406-3.938-3.406m-6.5 2.093c-.716 0-1.313.597-1.313 1.313s.597 1.313 1.313 1.313s1.313-.597 1.313-1.313s-.597-1.313-1.313-1.313m13 0c-.717 0-1.313.596-1.313 1.313s.596 1.313 1.313 1.313s1.313-.596 1.313-1.313s-.596-1.313-1.313-1.313" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[33];  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note-container">
                        <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[34];  ?></h2>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[35];  ?></p>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[36];  ?></p>

                    </div>
                    <div class="col-12 col-md-12 col-lg-12" data-aos="zoom-in-up" data-aos-delay="600" style="text-align: center;">
                        <h2 class="text-style-4 text-italic text-blue"><?php echo DISCOVER_CARRUSEL[37]; ?></h2>
                        <div class="gallery swiper slider has-navigation  scheme-1 primary" data-columns="5,3,1,5" data-autoplay="10000" data-loop="true" data-space="20">
                            <div class="swiper-wrapper">


                                <div class="swiper-slide">
                                    <a href="assets/images/blog/a-walk-through-puerto-plata-one.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/a-walk-through-puerto-plata-one.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/a-walk-through-puerto-plata-six.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/a-walk-through-puerto-plata-six.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/a-walk-through-puerto-plata-seven.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/a-walk-through-puerto-plata-seven.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/a-walk-through-puerto-plata-eight.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/a-walk-through-puerto-plata-eight.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/a-walk-through-puerto-plata-nine.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/a-walk-through-puerto-plata-nine.jpg">
                                        </div>
                                    </a>
                                </div>



                            </div>
                            <div class="button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <a class="display-hide-button button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;">
                            <strong><?php echo DISCOVER_CARRUSEL[38]; ?></strong>
                        </a>
                    </div>
                </div>
        </section>
        <!--Fourth Carrusel-->

        <section class="carousel-section">
            <div id="port-experience" class="shock-section right pt-2 pb-4">
                <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="3" aria-label="Slide 4">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="4" aria-label="Slide 5">
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
                                    <source src="assets/images/blog/damajagua-one.jpg">
                                    <img src="assets/images/blog/damajagua-one.jpg" class="d-block w-100" alt="Parque Central">
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
                                    <source src="assets/images/blog/damajagua-two.jpg">
                                    <img src="assets/images/blog/damajagua-two.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets\images\blog\damajagua-three.jpg">
                                    <img src="assets\images\blog\damajagua-three.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/damajagua-four.jpg">
                                    <img src="assets/images/blog/damajagua-four.jpg" class="d-block w-100" alt="Otra Imagen">
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
                                    <source src="assets/images/blog/damajagua-five.jpg">
                                    <img src="assets/images/blog/damajagua-five.jpg" class="d-block w-100" alt="Otra Imagen">
                                </picture>
                            </div>
                        </div>
                        <!-- Añadir más elementos del carrusel aquí -->
                    </div>

                </div>
                <div class="carousel-content order bg-white d-flex flex-column justify-content-evenly align-items-center">
                    <div class="basic-intro mb-35">
                        <h2 class="text-style-3 lh-1 title-carrusel left " style="text-align: center;">
                            <span class="d-block gradient-animated-title animation-duration-1"><?php echo DISCOVER_CARRUSEL4[0]; ?></span>

                            <span class="d-flex" style="justify-content: center; ">
                                <span class="text-style-4 lh-1 text-italic" style="padding:0 2rem;"><?php echo DISCOVER_CARRUSEL4[1]; ?></span>
                            </span>

                        </h2>
                        <div class="description gray"></div>
                    </div>
                    <div class="d-flex align-items-center w-75">
                        <!-- Arrow Left -->
                        <a href="#" class="slide-navigation-item-prev slide-navigation-item-prev4 d-block text-blue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            </svg>
                        </a>
                        <!-- Text Carousel -->
                        <div class="flex-grow-1">
                            <h2 class="text-style-6" style="line-height: 55px; text-align:center; color:#1c355e;">
                                <span class="d-block"><?php echo DISCOVER_CARRUSEL4[2]; ?></span>
                            </h2>
                        </div>
                        <!-- Arrow Right -->
                        <a href="#" class="slide-navigation-item-next slide-navigation-item-next4 d-block text-blue">
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
            </div>
            <div class="shock-section displayed-blog">
                <div class="container text-center my-5  pt-2 pb-4 ">
                    <div class="container-title container-title-display mx-auto mb-2 gradient-animated-title animation-duration-1">
                        <h2 class="text-style-3 lh-1 text-blue "><span class="d-block text-start centrado "><?php echo DISCOVER_CARRUSEL[6];  ?></span></h2>
                        <h2 class="text-style-3 lh-1 text-blue "><span class="d-block text-start centrado"><?php echo DISCOVER_CARRUSEL[7];  ?></span></h2>
                    </div>
                    <div class="container-text mx-auto px-5 ">

                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[8];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[9];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[10];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[11];  ?></p>
                        <p class="text-black black text-style-13"><?php echo DISCOVER_CARRUSEL[12];  ?></p>
                    </div>
                </div>
                <div class="container ">
                    <div class="row listado-row">
                        <div class="col-12 col-md-12 col-lg-6 ">
                            <div class="listado">
                                <div class="listado-highlights">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[13];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[14];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[15];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[16];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[17];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[18];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="listado-included">
                                    <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[19];  ?></h2>
                                    <div class="lista">
                                        <ul>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[20];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[21];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[22];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[23];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[24];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[25];  ?></p>
                                            </li>
                                            <li>
                                                <p class="text-style-13"><?php echo DISCOVER_CARRUSEL[26];  ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="what-to-bring">
                                <div class="duration-container">
                                    <div class="what-to-bring-duration rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 512 512">
                                            <path fill="#1c355e" d="M256 0Q150 0 75 75T0 256t75 181t181 75t181-75t75-181t-75-181T256 0m192 277h19q-8 76-61.5 130T277 467v-19q0-21-21-21t-21 21v19q-76-8-130-61.5T45 277h19q21 0 21-21t-21-21H45q6-76 60-130t130-60v19q0 21 21 21t21-21V45q76 8 130 61.5T467 235h-19q-21 0-21 21t21 21m-169-23l39-96q3-9-.5-17T305 130q-20-7-28 13l-47 117l92 137q5 8 17 8q5 0 13-4q19-10 6-30z" />
                                        </svg>
                                        <div class="duration-text">
                                            <h2 class="text-style-6 text-italic"><?php echo DISCOVER_CARRUSEL[27];  ?></h2>
                                            <h2 class="text-style-5"><?php echo DISCOVER_CARRUSEL[28];  ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="what-to-bring-list-container">
                                    <div class="what-to-bring-list">
                                        <h2 class="text-style-8 text-italic"><?php echo DISCOVER_CARRUSEL[29];  ?></h2>
                                        <div class="list-container">
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 2048 1536">
                                                    <path fill="#ffffff" d="M896 1084q0 55-31.5 93.5T789 1216H363q-44 0-75.5-38.5T256 1084q0-54 7.5-100.5t24.5-90t51-68.5t81-25q64 64 156 64t156-64q47 0 81 25t51 68.5t24.5 90T896 1084M768 640q0 80-56 136t-136 56t-136-56t-56-136t56-136t136-56t136 56t56 136m1024 416v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m-384-256v64q0 14-9 23t-23 9h-320q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h320q14 0 23 9t9 23m384 0v64q0 14-9 23t-23 9h-192q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h192q14 0 23 9t9 23m0-256v64q0 14-9 23t-23 9h-704q-14 0-23-9t-9-23v-64q0-14 9-23t23-9h704q14 0 23 9t9 23m128 832V256H128v1120q0 13 9.5 22.5t22.5 9.5h1728q13 0 22.5-9.5t9.5-22.5m128-1216v1216q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V160Q0 94 47 47T160 0h1728q66 0 113 47t47 113" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[30];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 64 64">
                                                    <path fill="#ffffff" d="M48.29 15.672V2H15.709v13.672c-6.099 29.382-2.873 44.629-2.732 45.264L13.212 62l17.208-5.339l-.203-.907c-3.734-16.68 1.191-28.667 2.402-31.256h.288c.98 2.765 4.587 14.673.874 31.256l-.202.907l17.208 5.337l.235-1.063c.141-.634 3.368-15.881-2.732-45.263m1.432 39.505a20.265 20.265 0 0 0-.679-1.626c-.931-1.981-1.976-3.464-2.335-3.312c-.357.151.104 1.881 1.034 3.863c.35.743.715 1.416 1.054 1.959a19.976 19.976 0 0 0-2.043-1.257c-1.984-1.073-3.752-1.68-3.945-1.356c-.191.318 1.209 1.42 3.14 2.476l-9.508-3.336c.784-4.572 1.046-8.729.995-12.389c.587.462 1.453 1.02 2.459 1.564c1.983 1.074 3.75 1.681 3.944 1.355c.194-.323-1.256-1.457-3.24-2.531a22.29 22.29 0 0 0-1.702-.829c.49.034 1.039.054 1.629.052c1.971-.008 3.564-.237 3.563-.51c-.001-.276-1.598-.495-3.566-.486c-.478.002-.933.017-1.349.042c.336-.101.688-.214 1.058-.343c1.847-.65 3.261-1.387 3.161-1.645c-.102-.257-1.681.059-3.525.71c-1.021.359-1.896.742-2.471 1.058c-.218-5.627-1.143-9.938-1.889-12.577c.633 1.118 1.254 1.925 1.432 1.839c.193-.095-.208-1.201-.896-2.471c-.054-.1-.107-.193-.161-.289c.24.143.491.285.754.428c1.983 1.073 3.75 1.68 3.944 1.355c.193-.325-1.256-1.458-3.24-2.53a20.606 20.606 0 0 0-2.032-.972c1.054.204 2.42.399 3.922.547c3.379.336 6.151.306 6.192-.065c.04-.371-2.666-.944-6.046-1.278c-2.341-.232-4.39-.29-5.442-.179V8.329h6.329c-.009 1.144.192 3.756 2.038 5.576c1.062 1.047 2.279 1.653 3.992 1.818v.052l.018.165c-.404.282-.934.722-1.486 1.248c-1.06 1.012-1.796 1.95-1.643 2.096c.154.146 1.138-.557 2.198-1.568a15.28 15.28 0 0 0 1.061-1.11l.01.046c-.345.419-.755.981-1.175 1.625c-.917 1.41-1.512 2.64-1.328 2.749c.185.107 1.078-.946 1.996-2.356a21.4 21.4 0 0 0 .687-1.128c3.663 18.327 3.589 31.023 3.091 37.635M30.854 21.381V8.329h2.667v14.158h-1.862c-.474-.184-.805-.611-.805-1.106M23.363 7.777V4.01h.669v3.768h-.2l-.001-.019l-.202.019zm.089.552c.001 1.094-.197 3.625-1.93 5.335c-.99.975-2.201 1.541-3.834 1.7l.012-7.035zm.98-4.319h6.957v3.777h-6.957zm16.254 0v3.768h-.197l-.201-.019l-.002.019h-.269V4.01zm5.605 11.35c-1.589-.163-2.712-.729-3.695-1.696c-1.732-1.71-1.932-4.241-1.929-5.335h5.624zM31.79 4.01h7.827v3.777H31.79zm14.501 3.777h-5.202V4.01h5.202zM22.962 4.01v3.777h-5.261l.007-3.777zm4.002 35.384c-.62-.209-1.668-.428-2.873-.581c-1.95-.247-3.564-.226-3.602.046c-.039.273 1.512.695 3.465.942a22.4 22.4 0 0 0 1.62.147c-.55.161-1.158.365-1.798.614c-2.113.822-3.706 1.77-3.557 2.115s1.983-.041 4.095-.862c1.032-.403 1.935-.833 2.576-1.21c-.18 3.56-.025 7.578.687 11.977l-10.076 3.535c.089-.047.174-.089.264-.137c1.984-1.073 3.435-2.208 3.241-2.532c-.195-.323-1.96.283-3.945 1.356c-.65.352-1.233.707-1.729 1.042c.303-.504.62-1.093.926-1.744c.93-1.982 1.392-3.712 1.033-3.863c-.359-.152-1.405 1.33-2.335 3.312c-.272.58-.499 1.132-.682 1.636c-.503-6.643-.576-19.449 3.17-38.003c.203.361.441.757.713 1.174c.919 1.41 1.813 2.465 1.997 2.356c.184-.109-.41-1.339-1.329-2.748l-.108-.162c1.023.963 1.955 1.622 2.103 1.48c.154-.146-.581-1.084-1.641-2.096a13.49 13.49 0 0 0-1.492-1.251v-.21c1.756-.161 3.065-.77 4.133-1.822c1.844-1.82 2.046-4.433 2.036-5.576h6.597v13.052c0 .541.303 1.019.766 1.3c-.701.121-1.998.643-3.416 1.411c-1.983 1.072-3.435 2.206-3.24 2.531c.194.323 1.961-.283 3.945-1.356c.476-.258.919-.519 1.318-.771c-.177.28-.362.594-.546.932c-.688 1.27-1.089 2.376-.897 2.471c.17.082.74-.643 1.343-1.68c-1.035 2.797-2.334 7.313-2.762 13.175" />
                                                    <ellipse cx="33.598" cy="5.389" fill="#ffffff" rx="1.276" ry="1.138" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[31];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 24 24">
                                                    <g fill="none" fill-rule="evenodd">
                                                        <path d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                        <path fill="#ffffff" d="M18.026 3.902c-.152-.263-.448-.492-.716-.492c-.48 0-1.097.48-1.47.771c-.559.435-1.211.848-1.911.992c-.518.105-1.136.026-1.682-.117c-.09-.023-.864-.294-.864-.294c-1.072-.495-1.548.912-1.971 1.605c-.29.473-.655 1.037-1.07 1.606a1 1 0 0 0-1.04 1.314q-.462.565-.877 1.086A1 1 0 0 0 5.29 11.84c-1.072 1.433-1.81 2.598-2.236 3.635c-.36.88-.514 1.703-.447 2.542c.067.827.342 1.598.727 2.376c.522 1.055 1.802 1.344 2.739.803l14.722-8.5a2 2 0 0 0 .732-2.732zm.268 4.464l-1.419-2.457c-.764.546-1.617 1.033-2.545 1.223c-.954.195-1.919.034-2.587-.14c-.411-.107-.404.057-.625.418c-.252.413-.564.899-.92 1.406l.111.055a1 1 0 1 1-.886 1.793l-.473-.234q-.357.436-.68.84a1 1 0 0 1-.945 1.76l-.312-.154c-1.086 1.437-1.752 2.487-2.11 3.358c-.265.647-.34 1.154-.303 1.623c.037.466.192.964.498 1.592l14.696-8.485l-.5-.866l-4.33 2.5a1 1 0 0 1-1-1.732z" />
                                                    </g>
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[32];  ?></p>
                                            </div>
                                            <div class="list-item-container">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" viewBox="0 0 26 26">
                                                    <path fill="#ffffff" d="M19.531 1.531L14.25 4.406L5.5 9.188L.219 12.094L2.5 16.219V13A1.5 1.5 0 0 1 4 11.5h.813l.03-.125l11.595-6.344l.875.25c.024.08.05.173.093.25c.344.63 1.12.876 1.75.532c.076-.042.125-.133.188-.188l.906.281l2 3.657l-.25.906c-.079.024-.173.02-.25.062c-.293.16-.49.428-.594.719H25l-2.594-4.719zm-1.093 6.563a1.305 1.305 0 0 0-1.032 1.281c0 .716.565 1.313 1.282 1.313c.716 0 1.312-.597 1.312-1.313s-.596-1.281-1.313-1.281c-.089 0-.165-.018-.25 0zm-4.875.875a4.256 4.256 0 0 0-2.188.531c-.871.476-1.523 1.204-1.875 2h7.25a2.94 2.94 0 0 0-.313-.875c-.566-1.034-1.664-1.62-2.875-1.656zM4 13v13h22V13zm4.406 1.594h13.188l.656.656c-.017.083-.063.162-.063.25c0 .717.596 1.313 1.313 1.313c.088 0 .167-.047.25-.063l.656.656v4.188l-.656.656c-.083-.017-.162-.063-.25-.063c-.717 0-1.313.596-1.313 1.313c0 .088.046.167.063.25l-.656.656H8.406l-.656-.656c.017-.083.063-.162.063-.25c0-.717-.596-1.313-1.313-1.313c-.088 0-.167.047-.25.063l-.656-.656v-4.188l.656-.656c.083.017.162.063.25.063c.717 0 1.313-.596 1.313-1.313c0-.088-.046-.167-.063-.25zm6.594 1.5c-2.168 0-3.938 1.52-3.938 3.406c0 1.886 1.77 3.406 3.938 3.406s3.938-1.52 3.938-3.406c0-1.886-1.77-3.406-3.938-3.406m-6.5 2.093c-.716 0-1.313.597-1.313 1.313s.597 1.313 1.313 1.313s1.313-.597 1.313-1.313s-.597-1.313-1.313-1.313m13 0c-.717 0-1.313.596-1.313 1.313s.596 1.313 1.313 1.313s1.313-.596 1.313-1.313s-.596-1.313-1.313-1.313" />
                                                </svg>
                                                <p><?php echo DISCOVER_CARRUSEL[33];  ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="note-container">
                        <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[34];  ?></h2>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[35];  ?></p>
                        <p class="text-black text-style-16 text-italic justificado"><?php echo DISCOVER_CARRUSEL[36];  ?></p>

                    </div>
                    <div class="col-12 col-md-12 col-lg-12" data-aos="zoom-in-up" data-aos-delay="600" style="text-align: center;">
                        <h2 class="text-style-4 text-italic text-blue"><?php echo DISCOVER_CARRUSEL[37]; ?></h2>
                        <div class="gallery swiper slider has-navigation  scheme-1 primary" data-columns="5,3,1,5" data-autoplay="10000" data-loop="true" data-space="1">
                            <div class="swiper-wrapper">



                                <div class="swiper-slide">
                                    <a href="assets/images/blog/damajagua-one.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/damajagua-one.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/damajagua-two.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/damajagua-two.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/damajagua-three.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/damajagua-three.jpg" alt="">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/damajagua-four.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/damajagua-four.jpg">


                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="assets/images/blog/damajagua-five.jpg" class="item lightbox-link hover-zoom-rotate">
                                        <div class="image-wrapper">
                                            <img src="assets/images/blog/damajagua-five.jpg">
                                        </div>
                                    </a>
                                </div>




                            </div>
                            <div class="-swipper-button-prev button-prev">
                                <svg src="assets/icons/icon_arrows_blue_left.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 231.26 729.5">
                                    <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                    <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next button-next">
                                <svg id="next-page" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                            </svg>
                            </div>
                        </div>
                        <a class="display-hide-button button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;">
                            <strong><?php echo DISCOVER_CARRUSEL[38]; ?></strong>
                        </a>
                    </div>
                </div>
        </section>


    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const displayButtons = document.querySelectorAll('.display-button');
            const hideButtons = document.querySelectorAll('.display-hide-button');
            const carouselSections = document.querySelectorAll('.carousel-section');

            // Función para manejar el clic en los botones de visualización
            function handleDisplayButtonClick(button) {
                const section = button.closest('.carousel-section');
                const displayedBlog = section.querySelector('.displayed-blog');
                const textElement = button.querySelector('b');
                const icon = button.querySelector('.fa-xmark');

                // Verifica si todas las secciones están visibles o alguna está oculta
                const areAllSectionsVisible = Array.from(carouselSections).every(sec => sec.style.display !== 'none');

                // Alterna la visibilidad del displayed-blog en la sección actual
                if (displayedBlog.style.display === 'none' || displayedBlog.style.display === '') {
                    displayedBlog.style.display = 'block';
                    textElement.textContent = "<?php echo DISCOVER_CARRUSEL[5]; ?>";
                } else {
                    displayedBlog.style.display = 'none';
                    textElement.textContent = "<?php echo DISCOVER_CARRUSEL[4]; ?>";
                }

                // Rotea el icono
                if (icon) {
                    icon.classList.toggle('rotate-90');
                }

                // Alterna la visibilidad de las secciones del carrusel
                carouselSections.forEach(sec => {
                    if (areAllSectionsVisible) {
                        if (sec !== section) {
                            sec.style.display = 'none';
                        }
                    } else {
                        sec.style.display = 'block';
                    }
                });

                // Desplaza la vista al h2 dentro del displayed-blog
                const blogHeading = displayedBlog.querySelector('p');
                if (blogHeading) {
                    blogHeading.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }

            // Función para manejar el clic en los botones de ocultación
            function handleHideButtonClick(button) {
                const section = button.closest('.carousel-section');
                const displayedBlog = section.querySelector('.displayed-blog');
                const displayButtonTextElement = section.querySelector('.display-button b');
                const icon = section.querySelector('.display-button .fa-xmark');

                // Muestra todas las secciones
                carouselSections.forEach(sec => {
                    sec.style.display = 'block';
                });

                // Alterna la visibilidad del displayed-blog en la sección actual
                if (displayedBlog.style.display === 'none' || displayedBlog.style.display === '') {
                    displayedBlog.style.display = 'block';
                } else {
                    displayedBlog.style.display = 'none';
                }

                // Cambia el texto del botón display-button
                if (displayButtonTextElement) {
                    displayButtonTextElement.textContent = "<?php echo DISCOVER_CARRUSEL[4]; ?>";
                }

                // Rotea el icono del button-hide-display
                if (icon) {
                    icon.classList.remove('rotate-90');
                }

                // Desplaza la vista al botón de display
                displayButtonTextElement.closest('.display-button').scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }

            // Agrega los event listeners a los botones de visualización
            displayButtons.forEach(button => {
                button.addEventListener('click', function() {
                    handleDisplayButtonClick(this);
                });
            });

            // Agrega los event listeners a los botones de ocultación
            hideButtons.forEach(button => {
                button.addEventListener('click', function() {
                    handleHideButtonClick(this);
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener todas las galerías
            var galleries = document.querySelectorAll('.gallery-general-container');

            galleries.forEach((gallery, galleryIndex) => {
                // Obtener el modal correspondiente a esta galería
                var modal = document.getElementById(`modal${galleryIndex}`);
                var modalImg = modal.querySelector('.modal-content');
                var captionText = modal.querySelector(`#caption${galleryIndex}`);
                var images = gallery.querySelectorAll('.gallery-container img');
                var currentIndex = 0;

                images.forEach((img, imgIndex) => {
                    img.onclick = function() {
                        currentIndex = imgIndex;
                        showModal();
                    }
                });

                // Obtener los botones de cierre y navegación
                var span = modal.querySelector('.close');
                var prev = modal.querySelector('.prev');
                var next = modal.querySelector('.next');

                span.onclick = function() {
                    closeModal();
                }

                prev.onclick = function() {
                    currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
                    showModal();
                }

                next.onclick = function() {
                    currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
                    showModal();
                }

                function showModal() {
                    modalImg.src = images[currentIndex].src;
                    captionText.innerHTML = images[currentIndex].alt;
                    modal.classList.remove('hide');
                    modal.classList.add('show');
                    modalImg.classList.remove('hide');
                    modalImg.classList.add('show');
                }

                function closeModal() {
                    modal.classList.remove('show');
                    modal.classList.add('hide');
                    modalImg.classList.remove('show');
                    modalImg.classList.add('hide');
                }
            });
        });
    </script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4, // Mostrar 4 imágenes al inicio
            spaceBetween: 10, // Espacio entre las imágenes
            slidesPerGroup: 4, // Desplazar 4 imágenes por vez
            loop: true, // Habilitar bucle continuo
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swipper-button-prev',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: false,
            },
            autoplay: {
                delay: 10000,
                disableOnInteraction: false, // No desactivar autoplay al interactuar
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1, // Ajuste para pantallas pequeñas
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 2, // Ajuste para pantallas medianas
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    slidesPerGroup: 4, // Ajuste para pantallas grandes
                }
            }
        });
    </script>
</body>

</html>