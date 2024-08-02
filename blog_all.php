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
                <div class="container">
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
                                <div class="image-blog-container">
                                    <img src="${post.image_url}" class="imgRound" alt="${post.title}">
                                </div>
                            </div>
                            <div class="col-11 col-md-10 col-lg-5 single-blog-content">
                                <div class="single-blog-title">
                                    <h3 class="text-style-7">${post.title}</h3>
                                </div>
                                <p class="justificado">${post.description}</p>
                                <a href="blog/${post.title}" class="button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;"><strong>Leer más</strong></a>
                            </div>
                            <div class="col-11 col-md-2 col-lg-1 single-blog-icon">
                                <i class="fa fa-share-alt fa-2x azulBlog"></i>
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

    function updateBlogLayout() {
        var blogSections = document.querySelectorAll('.blog-list-section, .blog-grid-section');

        if (blogSections.length === 0) {
            return;
        }

        var isList = blogSections[0].classList.contains('blog-list-section');

        var elementsToUpdate = {
            singleList: document.querySelectorAll('.single-list-blog-container'),
            singleGrid: document.querySelectorAll('.single-grid-blog-container'),
            listContainer: document.querySelectorAll('.list-container'),
            gridContainer: document.querySelectorAll('.grid-container'),
            listBlogDate: document.querySelectorAll('.single-blog-date'),
            gridBlogDate: document.querySelectorAll('.single-grid-blog-date'),
            listBlogImage: document.querySelectorAll('.single-list-blog-image'),
            gridBlogImage: document.querySelectorAll('.single-grid-blog-image'),
            listBlogContent: document.querySelectorAll('.single-blog-content'),
            gridBlogContent: document.querySelectorAll('.single-grid-blog-content'),
            listBlogIcon: document.querySelectorAll('.single-blog-icon'),
            gridBlogIcon: document.querySelectorAll('.single-grid-blog-icon')
        };

        if (isList) {
            elementsToUpdate.singleGrid.forEach(el => {
                el.classList.add('single-list-blog-container');
                el.classList.remove('single-grid-blog-container');
            });
            elementsToUpdate.gridContainer.forEach(el => {
                el.classList.add('list-container');
                el.classList.remove('grid-container');
            });
            elementsToUpdate.gridBlogDate.forEach(el => {
                el.classList.add('col-11', 'col-md-4', 'col-lg-2', 'single-blog-date');
                el.classList.remove('single-grid-blog-date');
            });
            elementsToUpdate.gridBlogImage.forEach(el => {
                el.classList.add('col-11', 'col-md-8', 'col-lg-4', 'single-list-blog-image');
                el.classList.remove('single-grid-blog-image');
            });
            elementsToUpdate.gridBlogContent.forEach(el => {
                el.classList.add('col-11', 'col-md-10', 'col-lg-5', 'single-blog-content');
                el.classList.remove('single-grid-blog-content');
            });
            elementsToUpdate.gridBlogIcon.forEach(el => {
                el.classList.add('col-11', 'col-md-2', 'col-lg-1', 'single-blog-icon');
                el.classList.remove('single-grid-blog-icon');
            });
        } else {
            elementsToUpdate.singleList.forEach(el => {
                el.classList.add('single-grid-blog-container');
                el.classList.remove('single-list-blog-container');
            });
            elementsToUpdate.listContainer.forEach(el => {
                el.classList.add('grid-container');
                el.classList.remove('list-container');
            });
            elementsToUpdate.listBlogDate.forEach(el => {
                el.classList.add('single-grid-blog-date');
                el.classList.remove('col-11', 'col-md-4', 'col-lg-2', 'single-blog-date');
            });
            elementsToUpdate.listBlogImage.forEach(el => {
                el.classList.add('single-grid-blog-image');
                el.classList.remove('col-11', 'col-md-8', 'col-lg-4', 'single-list-blog-image');
            });
            elementsToUpdate.listBlogContent.forEach(el => {
                el.classList.add('single-grid-blog-content');
                el.classList.remove('col-11', 'col-md-10', 'col-lg-5', 'single-blog-content');
            });
            elementsToUpdate.listBlogIcon.forEach(el => {
                el.classList.add('single-grid-blog-icon');
                el.classList.remove('col-11', 'col-md-2', 'col-lg-1', 'single-blog-icon');
            });
        }
    }

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










</html>