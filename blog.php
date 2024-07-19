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
                            <li class="timeline-item">
                                <div class="content">
                                    <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                    <h3 class="diatitle">25</h3>
                                </div>
                                <div class="circle">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="content">
                                    <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                    <h3 class="diatitle">24</h3>
                                </div>
                                <div class="circle">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="content">
                                    <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                    <h3 class="diatitle">23</h3>
                                </div>
                                <div class="circle">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div class="content">
                                    <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                    <h3 class="diatitle">22</h3>
                                </div>
                                <div class="circle">
                                    <i class="fa-regular fa-circle"></i>
                                </div>
                            </li>
                            <!-- Añadir más eventos según sea necesario -->
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="swiper-container swiper slider stretched scheme-3 primary" data-columns="1,1,1,1">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 con la imagen -->
                                <div class="swiper-slide blog-content">
                                    <div class="title-image">
                                        <img src="assets/images/blog/playa-dorada-two.jpg" class="img-fluid imgRound" alt="title image" style="width: 100%; height: auto;  ">
                                        <i class="fa fa-share-alt fa-2x azulBlog"></i>
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
                                        <div class="col-auto ">
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <div class="col-auto">

                                            <img class="swiper-button-next" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev">

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-1 title-icons" style="display: flex; justify-content: space-around;">
                        <img src="assets/icons/icon-list.png" style="margin-left:30px; margin-right:30px; width:50px; height:50px;" alt="list icon">
                        <img src="assets/icons/icon-grid.png" style="margin-right:10px; width:50px; height:50px;" alt="grid icon">

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
</body>

</html>