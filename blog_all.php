<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-blog.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <style>
        .imgRound {
            border: none;
            border-radius: 1.5rem;
        }

        .blog-menu {
            margin-bottom: 5rem;
        }

        .image-blog-container {
            width: 100%;
            height: 70%;
            max-width: 35rem;
            max-height: 35rem;
            overflow: hidden;
            margin-left: 1rem;
        }

        .image-blog-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .single-blog-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2% 2% 2% 5%;
            color: var(--blog-icono);
        }

        .single-blog-icon {
            text-align: center;
            padding-top: 2rem;
        }

        .single-blog-content h3 {
            margin-bottom: 1rem;

        }

        .single-blog-title {
            border-bottom: 2px solid;
            width: 70%;
            align-self: flex-start;
            margin-bottom: 2rem;

        }

        .swiper-navigation {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .single-blog-content .button-transparent {
            align-self: flex-start;
        }

        .justificado {
            text-align: justify;
        }

        :root {
            --blog-icono: #1c355e;
        }

        .azulBlog {
            color: var(--blog-icono);
        }

        .pagination-items {
            display: flex;
            align-items: center;
            justify-content: center;

            margin-top: -6rem;
        }

        .pagination-items .row {
            padding-top: 1.5rem;
            border-top: 2px solid;
        }

        .swiper-navigation {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .swiper-button-prev,
        .swiper-button-next {
            position: relative;
            z-index: 10;
            background-color: transparent !important;
            width: auto !important;
            height: 1rem !important;
        }

        .swiper-container {
            margin-bottom: 6rem !important;
        }

        .navigation-style {
            margin-top: -20px !important;
        }

        .blogDate {
            display: flex;
            flex-direction: row-reverse;
        }

        .blogDate .content {
            text-align: center;
            color: var(--blog-icono);
        }

        .diatitle {
            font-size: 3.5rem;
            font-weight: 800;
            margin-top: -20px;

        }

        .mestitle {
            margin-bottom: 10px;
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
                            <span class="text-1 text-style-3"><?php echo TITULOS_BLOG_ALL[0];  ?></span>
                            <br>
                            <span class="text-2 text-style-8 "><?php echo TITULOS_BLOG_ALL[1];  ?> </span>
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
                    <div class="col-lg-3">
                        <div class="content blog-menu">
                            <h3 class="mestitle" style="color:#1c355e"><?php echo SECTION_BLOG_ALL[0];  ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-7">

                    </div>
                    <div class="col-lg-1" style="display: flex; justify-content: space-around;">
                        <img src="assets/icons/icon-list.png" style="margin-left:30px; margin-right:30px; width:50px; height:50px;" alt="list icon">
                        <img src="assets/icons/icon-grid.png" style="margin-right:10px; width:50px; height:50px;" alt="grid icon">

                    </div>
                    <div class="col-lg-1">

                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="swiper-container swiper slider stretched scheme-3 primary" data-columns="1,1,1,1">
                <div class="swiper-wrapper">
                    <!-- Slide 1 con la imagen -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-two.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/old-town-n-beach-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/old-town-n-beach-three.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href="blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 blogDate">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p>Adipisicing irure irure aliqua aliqua anim officia veniam ipsum minim in culpa ullamco. Et voluptate esse velit in culpa et irure ut cupidatat. Excepteur laborum in occaecat eu incididunt cillum incididunt. Aliquip cupidatat do aliqua sint sit irure.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Botones de navegación y paginación -->

                <div class="container pagination-items">
                    <div class="row">
                        <div class="col-auto">

                            <img class="swiper-button-prev" src="assets/icons/icon_arrows_blue_left.svg" alt="Prev">

                        </div>
                        <div class="col-auto navigation-style">
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="col-auto">

                            <img class="swiper-button-next" src="assets/icons/icon_arrows_blue_right.svg" alt="Next">

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,

                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                },
            });
        });
    </script>
</body>

</html>