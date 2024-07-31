<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-blog.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>

    <link rel="stylesheet" href="assets/css/vendor/blog_all.css">
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
                <div class="overlay-blue"></div>
            </div>
        </section>
        <!-- Blog titles -->
        <section class="shock-section blog-section mt-4 mb-4">
            <div class="titles">
                <div class="container">
                    <div class="row">
                        <!-- timeline-->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="content blog-menu">
                                <h3 class="mestitle" style="color:#1c355e"><?php echo SECTION_BLOG_ALL[0]; ?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 blog-icons">
                            <!-- Aquí puedes añadir el contenido para esta columna -->
                        </div>
                        <div class="col-12 col-md-2 col-lg-3 blog-icons">
                            <div class="icons" style="display: flex;">
                                <svg class="list-icon link" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512 512">
                                    <path fill="" d="M40 48c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24zm152 16c-17.7 0-32 14.3-32 32s14.3 32 32 32h288c17.7 0 32-14.3 32-32s-14.3-32-32-32zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32h288c17.7 0 32-14.3 32-32s-14.3-32-32-32zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32h288c17.7 0 32-14.3 32-32s-14.3-32-32-32zM16 232v48c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24m24 136c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24z" />
                                </svg>
                                <svg class="grid-icon link" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 512 512">
                                    <path fill="" d="M204 240H68a36 36 0 0 1-36-36V68a36 36 0 0 1 36-36h136a36 36 0 0 1 36 36v136a36 36 0 0 1-36 36m240 0H308a36 36 0 0 1-36-36V68a36 36 0 0 1 36-36h136a36 36 0 0 1 36 36v136a36 36 0 0 1-36 36M204 480H68a36 36 0 0 1-36-36V308a36 36 0 0 1 36-36h136a36 36 0 0 1 36 36v136a36 36 0 0 1-36 36m240 0H308a36 36 0 0 1-36-36V308a36 36 0 0 1 36-36h136a36 36 0 0 1 36 36v136a36 36 0 0 1-36 36" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog Section -->
        <section class="blog-list-section">
            <div class="swiper-container swiper slider stretched scheme-3 primary" data-columns="1,1,1,1">
                <div class="swiper-wrapper ">
                    <!-- Slide 1 con la imagen -->
                    <div class="swiper-slide single-list-blog-container">
                        <div class="container list-container">
                            <div class="row">
                                <div class="col-11 col-md-4 col-lg-2 single-blog-date">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-11 col-md-8 col-lg-4 single-list-blog-image">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/mojito-bar-two.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-11 col-md-10 col-lg-5 single-blog-content">
                                    <div class="single-blog-title ">
                                        <h3 class="text-style-7"><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p class="justificado text-style-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sint dolores quaerat, atque eligendi, doloremque et labore aperiam autem ad iusto reprehenderit reiciendis corrupti praesentium nihil delectus magnam modi. Repellat.</p>
                                    <a href=" blog/Playa-dorada" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-11 col-md-2 col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container list-container">
                            <div class="row">
                                <div class="col-11 col-md-4 col-lg-2 single-blog-date">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-11 col-md-8 col-lg-4 single-list-blog-image">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/old-town-n-beach-one.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-11 col-md-10 col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3 class="text-style-7"><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p class="justificado text-style-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias magnam assumenda, dolorum ea sapiente, quisquam enim, perferendis aliquid ipsum aut qui eius omnis. Inventore quasi, expedita doloremque veniam doloribus architecto.</p>
                                    <a href=" blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-11 col-md-2 col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container list-container">
                            <div class="row">
                                <div class="col-11 col-md-4 col-lg-2 single-blog-date">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-11 col-md-8 col-lg-4 single-list-blog-image">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/old-town-n-beach-three.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-11 col-md-10 col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3 class="text-style-7"><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p class="justificado text-style-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae atque pariatur eligendi odit ad, dolorum quod, labore quidem natus, vitae repellat repellendus excepturi omnis? Odio voluptate similique illum at dolorum!</p>
                                    <a href="blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-11 col-md-2 col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container list-container">
                            <div class="row">
                                <div class="col-11 col-md-4 col-lg-2 single-blog-date">
                                    <div class="content">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2];  ?></h3>
                                        <h3 class="diatitle">25</h3>
                                    </div>
                                </div>
                                <div class="col-11 col-md-8 col-lg-4 single-list-blog-image">
                                    <div class="image-blog-container">
                                        <img src="assets/images/blog/old-town-n-beach-three.jpg" class="imgRound" alt="preview image">
                                    </div>
                                </div>
                                <div class="col-11 col-md-10 col-lg-5 single-blog-content">
                                    <div class="single-blog-title">
                                        <h3 class="text-style-7"><?php echo TITULOS_BLOG_ALL[2];  ?></h3>
                                    </div>
                                    <p class="justificado text-style-13">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque eaque corporis numquam et rem temporibus odio minus esse, nihil expedita ad illum fugit eveniet ipsam inventore voluptatem beatae officiis accusamus?</p>
                                    <a href="blog.php" class=" button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong><?php echo SECTION_BLOG_ALL[1];  ?></strong></a>

                                </div>
                                <div class="col-11 col-md-2 col-lg-1 single-blog-icon">
                                    <i class="fa fa-share-alt fa-2x azulBlog"></i>
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
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener los iconos de grid-icon y list-icon
        var gridIcon = document.querySelector('.grid-icon');
        var listIcon = document.querySelector('.list-icon');

        // Obtener todas las secciones del blog
        var blogSections = document.querySelectorAll('.blog-list-section, .blog-grid-section');

        // Obtener todos los divs relacionados con la lista y la grilla
        var singleListDivs = document.querySelectorAll('.single-list-blog-container, .single-grid-blog-container');
        var listContainerDivs = document.querySelectorAll('.list-container, .grid-container');
        var blogDateDivs = document.querySelectorAll('.single-blog-date, .single-grid-blog-date');
        var blogImageDivs = document.querySelectorAll('.single-list-blog-image, .single-grid-blog-image');
        var blogContentDivs = document.querySelectorAll('.single-blog-content, .single-grid-blog-content');
        var blogIconDivs = document.querySelectorAll('.single-blog-icon, .single-grid-blog-icon');

        // Añadir un evento de clic al icono de grid-icon
        gridIcon.addEventListener('click', function() {
            // Cambiar la clase de las secciones del blog a modo grid
            blogSections.forEach(function(blogSection) {
                blogSection.classList.remove('blog-list-section');
                blogSection.classList.add('blog-grid-section');
            });
            singleListDivs.forEach(function(singleListDiv) {
                singleListDiv.classList.remove('single-list-blog-container');
                singleListDiv.classList.add('single-grid-blog-container');
            });
            listContainerDivs.forEach(function(listContainerDiv) {
                listContainerDiv.classList.remove('list-container');
                listContainerDiv.classList.add('grid-container');
            });
            blogDateDivs.forEach(function(blogDateDiv) {
                blogDateDiv.classList.remove('single-blog-date', 'col-11', 'col-md-4', 'col-lg-2');
                blogDateDiv.classList.add('single-grid-blog-date');
            });
            blogImageDivs.forEach(function(blogImageDiv) {
                blogImageDiv.classList.remove('single-list-blog-image', 'col-11', 'col-md-8', 'col-lg-4');
                blogImageDiv.classList.add('single-grid-blog-image');
            });
            blogContentDivs.forEach(function(blogContentDiv) {
                blogContentDiv.classList.remove('single-blog-content', 'col-11', 'col-md-10', 'col-lg-5');
                blogContentDiv.classList.add('single-grid-blog-content');
            });
            blogIconDivs.forEach(function(blogIconDiv) {
                blogIconDiv.classList.remove('single-blog-icon', 'col-11', 'col-md-2', 'col-lg-1');
                blogIconDiv.classList.add('single-grid-blog-icon');
            });
        });

        // Añadir un evento de clic al icono de list-icon
        listIcon.addEventListener('click', function() {
            // Cambiar la clase de las secciones del blog a modo lista
            blogSections.forEach(function(blogSection) {
                blogSection.classList.remove('blog-grid-section');
                blogSection.classList.add('blog-list-section');
            });
            singleListDivs.forEach(function(singleListDiv) {
                singleListDiv.classList.remove('single-grid-blog-container');
                singleListDiv.classList.add('single-list-blog-container');
            });
            listContainerDivs.forEach(function(listContainerDiv) {
                listContainerDiv.classList.remove('grid-container');
                listContainerDiv.classList.add('list-container');
            });
            blogDateDivs.forEach(function(blogDateDiv) {
                blogDateDiv.classList.remove('single-grid-blog-date');
                blogDateDiv.classList.add('single-blog-date', 'col-11', 'col-md-4', 'col-lg-2');
            });
            blogImageDivs.forEach(function(blogImageDiv) {
                blogImageDiv.classList.remove('single-grid-blog-image');
                blogImageDiv.classList.add('single-list-blog-image', 'col-11', 'col-md-8', 'col-lg-4');
            });
            blogContentDivs.forEach(function(blogContentDiv) {
                blogContentDiv.classList.remove('single-grid-blog-content');
                blogContentDiv.classList.add('single-blog-content', 'col-11', 'col-md-10', 'col-lg-5');
            });
            blogIconDivs.forEach(function(blogIconDiv) {
                blogIconDiv.classList.remove('single-grid-blog-icon');
                blogIconDiv.classList.add('single-blog-icon', 'col-11', 'col-md-2', 'col-lg-1');
            });
        });
    });
</script>


</html>