<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-blog.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/blog_all.css">
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
                        <h1 class="title white text-1 banner-title text-uppercase fw-bold">
                        <?php echo TITULOS_BLOG_ALL[0];  ?>
                        </h1>
                        <p class="text-white banner-subtitle"><?php echo TITULOS_BLOG_ALL[1];  ?></p>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed" style="background-image:url('assets/images/blog/header-blog-port-taino-bay.webp')">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-banner"></div>
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
</body>

<script>
    async function loadPosts(page) {
        try {
        // Condicional para elegir el archivo JSON basado en el idioma
        const jsonFile = '<?php echo $idioma; ?>' === 'en' ? 'include/data.json' : 'include/es-data.json';

        // Usamos la variable jsonFile para cargar el archivo adecuado
        const response = await fetch(jsonFile);
        const data = await response.json();

        if (!data.posts || data.posts.length === 0) {
            $('#blog-container .posts-wrapper').html('<p>No se encontraron posts.</p>');
            return;
        }

            const postsPerPage = 5; // Cambia según el número de posts por página
            const startIndex = (page - 1) * postsPerPage;
            const endIndex = startIndex + postsPerPage;

            const posts = data.posts.slice(startIndex, endIndex);
            const totalPages = Math.ceil(data.posts.length / postsPerPage);
            const currentPage = page;

            $('#blog-container .posts-wrapper').empty();

            posts.forEach(post => {
                let title = post.title.replace(/-/g, ' '); // Reemplaza guiones con espacios

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
                                    <a href="<?php echo $idioma; ?>/blog/${post.title}"><img src="${post.image_url}" class="imgRound" alt="${title}"></a>
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
                                        <a target="_blank" class="bg-orange" href="https://www.facebook.com/sharer/sharer.php?u=/blog/${post.title}">
                                            <i class="icon fab fa-facebook-f"></i>
                                        </a>
                                        <a target="_blank" class="bg-orange" href="https://twitter.com/intent/tweet?url=/blog/${post.title}">
                                            <i class="icon fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" class="bg-orange" href="https://api.whatsapp.com/send?text=/blog/${post.title}">
                                            <i class="icon fab fa-whatsapp"></i>
                                        </a>
                                    </div>
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
        } catch (error) {
            $('#blog-container .posts-wrapper').html('<p>Error al cargar los posts.</p>');
        }
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

        if (skipInitialAnimation) {
            skipInitialAnimation = false;
            return;
        }

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

            $(elements).fadeIn(fadeDuration);
        });
    }

    // Ejecutar `updateBlogLayout` inicialmente
    updateBlogLayout();

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