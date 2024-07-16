<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-blog.php");
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
        <section class="blog-section">
        <div class="tab-content">
                        <div id="interest" class="tab-pane fade show active" role="tabpanel">
                            <!-- Posts -->
                            <div class="swiper slider stretched has-gap has-side-gaps has-navigation has-pagination scheme-3 primary"
                                data-columns="2,2,1,1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        
                                    </div>
                                    <div class="swiper-slide">
                                      
                                    </div>
                                    <div class="swiper-slide">
                                        
                                    </div>
                                    <div class="swiper-slide">
                                        
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
        </section>

    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

</html>