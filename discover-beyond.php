<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-discover-beyond.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>

    <style>
        .justificado {
            text-align: justify;
        }

        :root {
            --blog-icono: #1c355e;
        }

        .title-carrusel {
            color: var(--blog-icono);
        }

        .text-start {
            padding-left: 3rem;
        }
        .display-button{
            color: white;
        }
        .display-button:hover{
            color: var(--blog-icono);
        }
        .rotate-90 {
    --fa-rotate-angle: 90deg !important;
}
.fa-rotate-by {
    transition: transform 0.5s ease; /* Cambia la duración a tu gusto */
}

.rotate-90 {
    --fa-rotate-angle: 90deg;
    transform: rotate(var(--fa-rotate-angle));
}
    </style>
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
        <!-- Blog Section -->
        <section id="port-experience" class="shock-section pt-2 pb-4">

            <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                <div class="basic-intro mb-35">

                    <h3 class="text-style-2 lh-1 title-carrusel"><span class="d-block text-start"><?php echo DISCOVER_CARRUSEL[0];  ?></span>
                        <span class="d-flex justify-content-end gap-5">
                            <h3 class="text-style-4 lh-1  text-italic">
                                <span><mark class="animated-underline primary"> <?php echo  DISCOVER_CARRUSEL[1]; ?></mark></span>
                        </span>
                        </h2>
                        <div class="description gray">

                        </div>
                </div>
                <div class="d-flex align-items-center gap-3 w-75">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-block text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1 ">
                        <p class="text-style-7" style="line-height: 55px; text-align:center; color:#1c355e;"><span class="d-block"><?php echo  DISCOVER_CARRUSEL[2]; ?></span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-block text-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        </svg>
                    </a>
                </div>
                <div class=" container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%; ">


                    <p class="text-black black text-style-13 justificado"><?php echo DISCOVER_CARRUSEL[3];  ?></p>
                    <div class="d-flex justify-content-end">
                        <a  class="display-button" onclick="rotateIcon(this)">
                        <i class="fa-solid fa-xmark fa-rotate-by" style="--fa-rotate-angle: 45deg; width:20px; height:auto;"></i>
                            <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4];  ?></b>
                        </a>
                    </div>


                </div>

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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quod ab consequatur praesentium, unde quas nostrum tenetur natus adipisci, hic fuga laudantium magni maxime molestiae amet ex a possimus assumenda.</p>
                </div>
                <picture>
                    <source src="assets/images/points-of-interest/ParqueCentral.jpg">
                    <img src="assets/images/points-of-interest/ParqueCentral.jpg" alt="">
                </picture>
            </div>

        </section>
    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
    <script src="assets/js/vendor/blog.js"></script>
    <script>
        function rotateIcon(element) {
    const icon = element.querySelector('.fa-xmark');
    const textElement = element.querySelector('b');
    if (icon) {
        icon.classList.toggle('rotate-90');
    }
    if (textElement) {
        // Alterna entre los dos textos
        if (textElement.textContent.trim() === "<?php echo DISCOVER_CARRUSEL[4]; ?>") {
            textElement.textContent = "<?php echo DISCOVER_CARRUSEL[5]; ?>";
        } else {
            textElement.textContent = "<?php echo DISCOVER_CARRUSEL[4]; ?>";
        }
    }
}

    </script>
</body>

</html>