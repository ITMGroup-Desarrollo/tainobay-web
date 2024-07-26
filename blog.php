<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-blog.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/blog.css">
    <style>
        
        
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
                            <span class="text-1 text-style-3"><?php echo TITULOS_BLOG[0];  ?></span>
                            <br>
                            <span class="text-2 text-style-8 "><?php echo TITULOS_BLOG[1];  ?> </span>
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
        <!-- Blog Section -->
        <section class="blog-section mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <!-- timeline-->
                    <div class="col-lg-2">
                        <ul class="timeline">
                            <?php
                            $dias = array(25, 24, 23, 22, 21);
                            $first = true;
                            foreach ($dias as $dia) {
                                $active = $first ? ' active' : '';
                                $first = false;
                            ?>
                                <li class="timeline-item<?php echo $active; ?>">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2]; ?></h3>
                                        <h3 class="diatitle"><?php echo $dia; ?></h3>
                                    </div>
                                    <div class="circle">
                                        <i class="fa-regular fa-circle"></i>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    
                    <div class="col-lg-9">
                        <div class="swiper-container swiper slider stretched scheme-3 primary" data-columns="1,1,1,1">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 con la imagen -->
                                <div class="swiper-slide blog-content">
                                    <div class="title-image">
                                        <img src="assets/images/blog/playa-dorada-two.jpg" class="img-fluid imgRound" alt="title image" style="width: 100%; height: auto;  ">
                                        <div class="dropdown azulBlog">
                                            <button class="border-0 text-white bg-transparent azulBlog" onclick="toggleDropdown()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                                    <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                                </svg>
                                            </button>
                                            <div class="dropdown-content" id="dropdownContent">
                                                <a href="https://www.facebook.com" target="_blank">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                                <a href="https://www.whatsapp.com" target="_blank">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="blog-post">
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="assets/images/blog/mojito-bar-one.jpg" class=" mb-1 imgRound" alt="" style="max-width: 100%; height: auto;   ">
                                                </div>
                                                <div class="col-lg-8 mb-1">

                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                    </div>

                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide blog-content">
                                    <div>
                                        <img src="assets/images/blog/monkey-island-four.jpg" class="img-fluid imgRound" alt="title image">
                                        <i class="fa fa-th-list"></i>
                                    </div>

                                    <div class="blog-post">
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>

                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <div class="container mb-1">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="assets/images/blog/mojito-bar-two.jpg" class="imgRound" alt="" style="max-width: 100%; height: auto;  ">
                                                </div>
                                                <div class="col-lg-8">

                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                    </div>

                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide blog-content">
                                    <img src="assets/images/blog/playa-dorada-two.jpg" class="img-fluid imgRound" alt="Descripción de la imagen">
                                    <div class="blog-post">
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="assets/images/blog/mojito-bar-one.jpg" alt="" class="mb-1 imgRound" style="max-width: 100%; height: auto;  ">
                                                </div>
                                                <div class="col-lg-8">

                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                    <p class="justificado">
                                                        Aliqua reprehenderit tempor est enim laborum ea voluptate ea. Fugiat labore mollit veniam voluptate deserunt dolor et sit nostrud. Excepteur sit nulla ex amet ea aliqua voluptate magna. Ullamco exercitation dolore mollit pariatur deserunt eiusmod mollit cupidatat eiusmod exercitation est magna ullamco.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                        <p class="justificado">
                                            Quis adipisicing officia do nisi consequat consequat velit. Nostrud esse dolore cupidatat voluptate eiusmod reprehenderit culpa tempor. Do nostrud consectetur tempor laboris sit consectetur. Pariatur in commodo enim fugiat. Fugiat nisi consequat dolore mollit deserunt irure voluptate in reprehenderit ex laboris.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div style="display: flex; ">
                                <a href="blog_all.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo TITULOS_BLOG[3];  ?></strong></a>
                                <!-- Botones de navegación y paginación -->

                                <div class="container mt-3 d-flex justify-content-end pagination-items" style="margin-top:-40%;">
                                    <div class="row">
                                        <div class="col-auto">

                                            <img class="swiper-button-prev" src="assets/icons/icon_arrows_blue_left.svg" alt="Prev">

                                        </div>
                                        <div class="col-auto">

                                            <img class="swiper-button-next" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev">

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div>

        </div>
    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
    <script src="assets/js/vendor/blog.js"></script>
    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("dropdownContent");
            dropdown.classList.toggle("show");
        }

        // Cerrar el dropdown si se hace clic fuera de él
        window.onclick = function(event) {
            if (!event.target.matches('.border-0') && !event.target.closest('.dropdown')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains("show")) {
                        openDropdown.classList.remove("show");
                    }
                }
            }
        }
        // Selecciona todos los elementos.timeline-item
        const timelineItems = document.querySelectorAll('.timeline-item');

        // Agrega un evento de clic a cada elemento.timeline-item
        timelineItems.forEach((item) => {
            item.addEventListener('click', () => {
                // Remueve la clase.active de todos los elementos.timeline-item
                timelineItems.forEach((otherItem) => {
                    otherItem.classList.remove('active');
                });

                // Agrega la clase.active al elemento clickeado
                item.classList.add('active');
            });
        });
    </script>
</body>

</html>