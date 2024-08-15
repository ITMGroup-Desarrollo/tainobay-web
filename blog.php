<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-blog.php");
?>
<?php
$title = isset($_GET['title']) ? $_GET['title'] : '';
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
                            <span class="text-1 text-style-3 blog-title"></span>
                            <br>

                        </h1>
                        <h2 class="title white"><span class="text-2 text-style-8 "><?php echo TITULOS_BLOG[1];  ?> </span></h2>
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
        <!-- Blog Section -->
        <section class="shock-section blog-section mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <!-- timeline-->
                    <div class="col-lg-2" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <ul class="timeline" id="timeline"></ul>
                    </div>


                    <div class="col-lg-9">
                        <div class="shock-section container" id="blog-container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                            <!-- Posts se cargarán aquí -->
                        </div>
                        <div style="display: flex; ">
                            <a href="<?php echo $idioma; ?>/blog_all" class=" button-transparent button-orange text-center" style=""><strong><?php echo TITULOS_BLOG[3];  ?></strong></a>
                            <!-- Botones de navegación y paginación -->
                            <div class="container mt-3 d-flex justify-content-center pagination-items">

                                <div class="row">
                                    <div class="col-4 col-md-3 col-lg-6">
                                        <svg id="prev-page" class="swiper-button-prev" src="assets/icons/icon_arrows_blue_left.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                        </svg>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-6">

                                        <svg id="next-page" class="swiper-button-next" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                            <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                                            <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-1">

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
</script>
<script>
    // Inserta el valor de la variable PHP en una variable JavaScript
    const idioma = '<?php echo $idioma; ?>';

    function loadPost(title, pushState = true) {
        $.getJSON('include/get_blog_posts.php?title=' + encodeURIComponent(title), function(response) {
            if (!response.posts || response.posts.length === 0) {
                $('#blog-container').html('<p>No se encontró el post.</p>');
                return;
            }

            const data = response.posts[0];
            const hasPrevPost = response.has_prev_post;
            const hasNextPost = response.has_next_post;
            const prevPostTitle = response.prev_post_title;
            const nextPostTitle = response.next_post_title;

            $('#blog-container').empty();

            $('#blog-container').append(`
                <div class="blog-post">
                    <div class="title-image">
                        <img src="${data.image_url}" class="img-fluid imgRound" alt="${data.title}">
                        <!-- share -->
                        <div class="slide-share position-absolute top-0 end-0 p-1 button-share">
                            <div class="container-btn">
                                <div class="redes">
                                    <a target="_blank" class="bg-orange" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $path; ?>es/blog/${data.title}">
                                        <i class="icon fab fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="bg-orange" href="https://twitter.com/intent/tweet?url=<?php echo $path; ?>es/blog/${data.title}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                            <g fill="none">
                                                <g clip-path="url(#IconifyId19113fe36724382401)">
                                                    <path fill="currentColor" d="M11.025.656h2.147L8.482 6.03L14 13.344H9.68L6.294 8.909l-3.87 4.435H.275l5.016-5.75L0 .657h4.43L7.486 4.71zm-.755 11.4h1.19L3.78 1.877H2.504z" />
                                                </g>
                                                <defs>
                                                    <clipPath id="IconifyId19113fe36724382401">
                                                        <path fill="#fff" d="M0 0h14v14H0z" />
                                                    </clipPath>
                                                </defs>
                                            </g>
                                        </svg>
                                    </a>
                                    <a target="_blank" class="bg-orange" href="https://api.whatsapp.com/send?text=<?php echo $path; ?>es/blog/${data.title}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                                            <path fill="currentColor" d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8c-10.1-3.8-17.5-5.6-24.8 5.6c-7.4 11.1-28.4 35.8-35 43.3c-6.4 7.4-12.9 8.3-23.8 2.8c-64.8-32.4-107.3-57.8-150-131.1c-11.3-19.5 11.3-18.1 32.4-60.2c3.6-7.4 1.8-13.7-1-19.3s-24.8-59.8-34-81.9c-8.9-21.5-18.1-18.5-24.8-18.9c-6.4-.4-13.7-.4-21.1-.4s-19.3 2.8-29.4 13.7c-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5c70 30.2 97.4 32.8 132.4 27.6c21.3-3.2 65.2-26.6 74.3-52.5c9.1-25.8 9.1-47.9 6.4-52.5c-2.7-4.9-10.1-7.7-21-13" />
                                            <path fill="currentColor" d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3c-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6.3-119.3 12.3-174.5 35.9c-53.3 22.8-101.1 55.2-142 96.5s-73 89.3-95.2 142.8c-23 55.4-34.6 114.3-34.3 174.9c.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3c53.5-22.3 101.6-54.3 142.8-95.2c41.3-40.9 73.8-88.7 96.5-142c23.6-55.2 35.6-113.9 35.9-174.5c.3-60.9-11.5-120-34.8-175.6m-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-.4-99.7 37.7-193.3 107.6-263.8c69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9c44.6 18.7 84.6 45.6 119 80c34.3 34.3 61.3 74.4 80 119c19.4 46.2 29.1 95.2 28.9 145.8c-.6 99.6-39.7 192.9-110.1 262.7" />
                                        </svg>
                                    </a>
                                </div>
                                <button class="border-0 text-white bg-transparent toggle-share">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                        <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-post blog-texto">
                    ${data.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
                    ${data.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
                    ${data.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
                    ${data.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
                    ${data.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
                </div>
                <div class="title-image">
                    <img src="${data.image_url}" class="img-fluid imgRound" alt="${data.title}">
                </div>
            `);





            $('#prev-page').prop('disabled', !hasPrevPost).attr('onclick', `changePost('${prevPostTitle}')`);
            $('#next-page').prop('disabled', !hasNextPost).attr('onclick', `changePost('${nextPostTitle}')`);

            // Actualizar la clase active del timeline
            updateActiveTimelineItem(title);

            // Reemplaza los guiones por espacios en blanco
            data.title = data.title.replace(/-/g, ' ');

            // Establece el texto del título en el elemento con la clase 'blog-title'
            $('.blog-title').text(data.title);

            if (pushState) {
                const url = new URL(window.location);
                url.pathname = `/tainobay/${idioma}/blog/` + encodeURIComponent(title);
                window.history.pushState({
                    title: title
                }, '', url);
            }
        }).fail(function() {
            $('#blog-container').html('<p>Error al cargar el post.</p>');
        });
    }

    function changePost(title) {
        loadPost(title);
    }

    const itemsPerPage = 4;
    let currentPage = 1;

    function loadTimeline(callback) {
        $.getJSON(`include/get_blog_posts.php?page=${currentPage}`, function(response) {
            if (!response.posts || response.posts.length === 0) {
                return;
            }

            if (currentPage > 1) {
                $('#timeline').find('li:lt(' + (itemsPerPage - 1) + ')').remove();
            } else {
                $('#timeline').empty();
            }

            response.posts.forEach((post, index) => {
                const active = (index === 0 && currentPage === 1) ? ' active' : '';
                $('#timeline').append(`
                    <li class="timeline-item${active}" onclick="changePost('${post.title}')">
                        <div class="content timeline-text-container">
                            <h3 class="mestitle">${post.month}</h3>
                            <h3 class="diatitle">${post.day}</h3>
                            <input type="hidden" value="${post.title}">
                        </div>
                        <div class="circle">
                            <i class="fa-regular fa-circle"></i>
                        </div>
                    </li>
                `);
            });

            if (typeof callback === 'function') {
                callback(response.posts);
            }
        }).fail(function() {
            $('#timeline').html('<p>Error al cargar los posts.</p>');
        });
    }

    function updateActiveTimelineItem(title) {
        const timelineItems = document.querySelectorAll('.timeline-item');
        let activeIndex = -1;

        timelineItems.forEach((item, index) => {
            const itemTitle = item.querySelector('input[type="hidden"]').value;
            if (itemTitle === title) {
                item.classList.add('active');
                activeIndex = index;
            } else {
                item.classList.remove('active');
            }
        });

        if (activeIndex === -1) {
            currentPage++;
            loadTimeline(() => updateActiveTimelineItem(title));
        } else if (activeIndex >= itemsPerPage - 1) {
            currentPage++;
            loadTimeline();
        }
    }

    window.onpopstate = function(event) {
        if (event.state && event.state.title) {
            loadPost(event.state.title, false);
        }
    }

    $(document).ready(function() {
        loadTimeline(function(posts) {
            const pathSegments = window.location.pathname.split('/');
            const title = decodeURIComponent(pathSegments[pathSegments.length - 1]);

            if (title && title !== 'blog') {
                loadPost(title, false);
            } else {
                const firstPostTitle = posts.length > 0 ? posts[0].title : '';
                if (firstPostTitle) {
                    changePost(firstPostTitle);
                }
            }
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