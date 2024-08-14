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

                        </h1>
                        <h2 class="text-2 text-style-8 title white"><?php echo TITULOS_BLOG_ALL[1];  ?> </h2>
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
        <!-- Blog titles -->
        <section class="shock-section blog-section mt-4 mb-4">
            <div class="titles blog-scroll-view">
                <div class="container" data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
                    <div class="row">
                        <!-- timeline-->
                        <div class="col-12 col-md-6 col-lg-3 ">
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
        <section class="shock-section blog-list-section ">
            <div id="blog-container" style="margin-bottom: 6rem;">

                <div class="">
                    <div class="single-list-blog-container posts-wrapper">
                        <!-- Aquí se cargarán los posts dinámicamente -->
                    </div>

                </div>
                <div class="pagination">
                    <div class="pagination-container">
                        <div id="prev-page" style="width:1rem; height: 1rem;">
                            <svg id="prev-page" src="assets/icons/icon_arrows_blue_left.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                            </svg>
                        </div>
                        <div id="page-numbers"></div>
                        <div id="next-page" style="width:1rem; height: 1rem;">
                            <svg id="next-page" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 231.26 729.5">
                                <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                                <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
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
    <script src="assets/js/vendor/blog.js"></script>
</body>

<script>
    function loadPosts(page) {
        $.getJSON('include/get_blog_posts.php?page=' + page, function(response) {

            if (!response.posts || response.posts.length === 0) {
                $('#blog-container .posts-wrapper').html('<p>No se encontraron posts.</p>');
                return;
            }

            const posts = response.posts;
            const totalPages = response.total_pages;
            const currentPage = response.current_page;

            $('#blog-container .posts-wrapper').empty();

            posts.forEach(post => {
                // Asumiendo que 'data.title' es el título que obtienes de tu fuente de datos
                let title = post.title;

                // Reemplaza los guiones por espacios en blanco
                title = title.replace(/-/g, ' ');

                // Establece el texto del título en el elemento con la clase 'blog-title'
                $('.blog-title').text(title);
                $('#blog-container .posts-wrapper').append(`
                    <div class="container list-container">
                        <div class="row">
                            <div class="col-11 col-md-4 col-lg-2 single-blog-date">
                                <div class="content">
                                    <h3 class="mestitle">${post.month}</h3>
                                    <h3 class="diatitle">${post.day}</h3>
                                </div>
                            </div>
                            <div class="col-11 col-md-8 col-lg-4 single-list-blog-image">                                  
                                <div class="image-blog-container imgRound">
                                    <a href="<?php echo $idioma; ?>/blog/${post.title}"><img src="${post.image_url}" class="imgRound " alt="${title}"></a>
                                </div>
                            </div>
                            <div class="col-11 col-md-10 col-lg-5 single-blog-content">
                                <div class="single-blog-title">
                                    <h2 class="text-style-7">${title}</h2>
                                </div>
                                <p class="justificado">${post.description}</p>
                                <a href="<?php echo $idioma; ?>/blog/${post.title}" class="button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong>Leer más</strong></a>
                            </div>

                            <!-- Share -->
                            <div class="col-11 col-md-2 col-lg-1 single-blog-icon">
                                <div class="container-btn azulBlog">
                                    <div class="redes">
                                        <a target="_blank" class="bg-orange" href="https://www.facebook.com/sharer/sharer.php?u=http://10.11.190.36/es/blog/${post.title}">
                                            <i class="icon fab fa-facebook-f"></i>
                                        </a>
                                        <a target="_blank" class="bg-orange" href="https://twitter.com/intent/tweet?url=http://10.11.190.36/es/blog/${post.title}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1em" height="1em" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                        </a>
                                        <a target="_blank" class="bg-orange" href="https://api.whatsapp.com/send?text=http://10.11.190.36/es/blog/${post.title}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                                <path fill="currentColor" d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8c-10.1-3.8-17.5-5.6-24.8 5.6c-7.4 11.1-28.4 35.8-35 43.3c-6.4 7.4-12.9 8.3-23.8 2.8c-64.8-32.4-107.3-57.8-150-131.1c-11.3-19.5 11.3-18.1 32.4-60.2c3.6-7.4 1.8-13.7-1-19.3s-24.8-59.8-34-81.9c-8.9-21.5-18.1-18.5-24.8-18.9c-6.4-.4-13.7-.4-21.1-.4s-19.3 2.8-29.4 13.7c-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5c70 30.2 97.4 32.8 132.4 27.6c21.3-3.2 65.2-26.6 74.3-52.5c9.1-25.8 9.1-47.9 6.4-52.5c-2.7-4.9-10.1-7.7-21-13" />
                                                <path fill="currentColor" d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3c-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9c-53.3 22.8-101.1 55.2-142 96.5s-73 89.3-95.2 142.8c-23 55.4-34.6 114.3-34.3 174.9c.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3c53.5-22.3 101.6-54.3 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142c23.6-55.2 35.6-113.9 35.9-174.5c.3-60.9-11.5-120-34.8-175.6m-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8c69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9c44.6 18.7 84.6 45.6 119 80c34.3 34.3 61.3 74.4 80 119c19.4 46.2 29.1 95.2 28.9 145.8c-.6 99.6-39.7 192.9-110.1 262.7" />
                                            </svg>
                                        </a>
                                    </div>
                                    <button class="border-0 text-blue bg-transparent toggle-share">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-197.632L666.752 316.8A128 128 0 1 1 679.872 348.8z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                `);

            });

            $('#page-info').text(`Página ${currentPage} de ${totalPages}`);
            updatePaginationButtons(totalPages, currentPage);
            renderPageNumbers(totalPages, currentPage);

            setTimeout(updateBlogLayout, 100);
        }).fail(function() {
            $('#blog-container .posts-wrapper').html('<p>Error al cargar los posts.</p>');
        });
    }

    function updatePaginationButtons(totalPages, currentPage) {
        const prevButton = $('#prev-page');
        const nextButton = $('#next-page');

        prevButton.prop('disabled', currentPage <= 1)
            .off('click')
            .on('click', function() {
                if (currentPage > 1) {
                    loadPosts(currentPage - 1);
                    scrollToBlogMenu();
                }
            });

        nextButton.prop('disabled', currentPage >= totalPages)
            .off('click')
            .on('click', function() {
                if (currentPage < totalPages) {
                    loadPosts(currentPage + 1);
                    scrollToBlogMenu();
                }
            });
    }

    function renderPageNumbers(totalPages, currentPage) {
        const pageNumbersDiv = $('#page-numbers');
        pageNumbersDiv.empty();

        for (let i = 1; i <= totalPages; i++) {
            const pageNumber = $('<span>')
                .text(i)
                .addClass('page-number')
                .toggleClass('active', i === currentPage)
                .on('click', function() {
                    loadPosts(i);
                    scrollToBlogMenu();
                });
            pageNumbersDiv.append(pageNumber);
        }
    }

    function scrollToBlogMenu() {
        const blogMenu = document.querySelector('.blog-scroll-view');
        blogMenu.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }

    var skipInitialAnimation = true; // Bandera para saltar la animación al cargar el HTML

    function updateBlogLayout() {
        var blogSections = $('.blog-list-section, .blog-grid-section');

        if (blogSections.length === 0) {
            return;
        }

        var isList = blogSections.first().hasClass('blog-list-section');

        var elementsToUpdate = {
            singleList: $('.single-list-blog-container'),
            singleGrid: $('.single-grid-blog-container'),
            listContainer: $('.list-container'),
            gridContainer: $('.grid-container'),
            listBlogDate: $('.single-blog-date'),
            gridBlogDate: $('.single-grid-blog-date'),
            listBlogImage: $('.single-list-blog-image'),
            gridBlogImage: $('.single-grid-blog-image'),
            listBlogContent: $('.single-blog-content'),
            gridBlogContent: $('.single-grid-blog-content'),
            listBlogIcon: $('.single-blog-icon'),
            gridBlogIcon: $('.single-grid-blog-icon')
        };

        var fadeDuration = 150;
        var elements = $.map(elementsToUpdate, function(el) {
            return el.get();
        });

        // Verificar si debemos saltar la animación inicial
        if (skipInitialAnimation) {
            skipInitialAnimation = false; // Desactivar la bandera después de la carga inicial
            return;
        }

        // Aplicar fade-out a todos los elementos antes de cambiar las clases
        $(elements).fadeOut(fadeDuration, function() {
            if (isList) {
                elementsToUpdate.singleGrid.addClass('single-list-blog-container').removeClass('single-grid-blog-container');
                elementsToUpdate.gridContainer.addClass('list-container').removeClass('grid-container');
                elementsToUpdate.gridBlogDate.addClass('col-11 col-md-4 col-lg-2 single-blog-date').removeClass('single-grid-blog-date');
                elementsToUpdate.gridBlogImage.addClass('col-11 col-md-8 col-lg-4 single-list-blog-image').removeClass('single-grid-blog-image');
                elementsToUpdate.gridBlogContent.addClass('col-11 col-md-10 col-lg-5 single-blog-content').removeClass('single-grid-blog-content');
                elementsToUpdate.gridBlogIcon.addClass('col-11 col-md-2 col-lg-1 single-blog-icon').removeClass('single-grid-blog-icon');
            } else {
                elementsToUpdate.singleList.addClass('single-grid-blog-container').removeClass('single-list-blog-container');
                elementsToUpdate.listContainer.addClass('grid-container').removeClass('list-container');
                elementsToUpdate.listBlogDate.addClass('single-grid-blog-date').removeClass('col-11 col-md-4 col-lg-2 single-blog-date');
                elementsToUpdate.listBlogImage.addClass('single-grid-blog-image').removeClass('col-11 col-md-8 col-lg-4 single-list-blog-image');
                elementsToUpdate.listBlogContent.addClass('single-grid-blog-content').removeClass('col-11 col-md-10 col-lg-5 single-blog-content');
                elementsToUpdate.listBlogIcon.addClass('single-grid-blog-icon').removeClass('col-11 col-md-2 col-lg-1 single-blog-icon');
            }

            // Aplicar fade-in a todos los elementos después de cambiar las clases
            $(elements).fadeIn(fadeDuration);
        });
    }

    // Ejecutar `updateBlogLayout` inicialmente para configurar las clases iniciales, sin animación
    updateBlogLayout();

    // Luego, llama a `updateBlogLayout` cada vez que sea necesario (cuando el usuario cambia entre grid y list)







    $(document).ready(function() {
        loadPosts(1);
    });

    document.addEventListener('DOMContentLoaded', function() {
        var gridIcon = document.querySelector('.grid-icon');
        var listIcon = document.querySelector('.list-icon');
        var blogSections = document.querySelectorAll('.blog-list-section, .blog-grid-section');

        gridIcon.addEventListener('click', function() {
            blogSections.forEach(blogSection => {
                blogSection.classList.remove('blog-list-section');
                blogSection.classList.add('blog-grid-section');
            });
            updateBlogLayout();
        });

        listIcon.addEventListener('click', function() {
            blogSections.forEach(blogSection => {
                blogSection.classList.remove('blog-grid-section');
                blogSection.classList.add('blog-list-section');
            });
            updateBlogLayout();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.toggle-share', function() {
            const $shareContainer = $(this).closest('.container-btn').find('.redes');

            // Alternamos la visibilidad del contenedor de redes sociales
            const isVisible = $shareContainer.hasClass('show-container');
            $('.redes').removeClass('show-container'); // Ocultamos todos los contenedores

            // Mostramos u ocultamos el contenedor correspondiente
            if (!isVisible) {
                $shareContainer.addClass('show-container');
            }
        });
    });
</script>









</html>