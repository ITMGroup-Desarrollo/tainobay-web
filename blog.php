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
                            <span class="text-2 text-style-8 "><?php echo TITULOS_BLOG[1];  ?> </span>
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
        <!-- Blog Section -->
        <section class="shock-section blog-section mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <!-- timeline-->
                    <div class="col-lg-2">
                        <ul class="timeline" id="timeline"></ul>
                    </div>


                    <div class="col-lg-9">
                        <div class="shock-section container" id="blog-container">
                            <!-- Posts se cargarán aquí -->
                        </div>
                        <div style="display: flex; ">
                            <a href="blog_all.php" class=" button-transparent button-orange text-center" style=""><strong><?php echo TITULOS_BLOG[3];  ?></strong></a>
                            <!-- Botones de navegación y paginación -->
                            <div class="container mt-3 d-flex justify-content-end pagination-items">

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
        <div>

        </div>
    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
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
    </script>
    <script>
        function loadPost(title, pushState = true) {
            console.log('Cargando post:', title);
            $.getJSON('include/get_blog_posts.php?title=' + encodeURIComponent(title), function(response) {
                console.log('Respuesta de loadPost:', response);
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
                    </div>
                    <div class="blog-post blog-texto">
                        ${data.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
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
                    url.pathname = '/tainobay/blog/' + encodeURIComponent(title);
                    window.history.pushState({
                        title: title
                    }, '', url);
                }
            }).fail(function() {
                console.log('Error al cargar el post.');
                $('#blog-container').html('<p>Error al cargar el post.</p>');
            });
        }

        function changePost(title) {
            console.log('Cambiando a post:', title);
            loadPost(title);
        }

        function loadTimeline(callback) {
            console.log('Cargando timeline...');
            $.getJSON('include/get_blog_posts.php?page=1', function(response) {
                console.log('Respuesta de loadTimeline:', response);
                if (!response.posts || response.posts.length === 0) {
                    $('#timeline').html('<p>No se encontraron posts.</p>');
                    return;
                }

                $('#timeline').empty();

                response.posts.forEach((post, index) => {
                    const active = index === 0 ? ' active' : '';
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
                    callback();
                }
            }).fail(function() {
                console.log('Error al cargar el timeline.');
                $('#timeline').html('<p>Error al cargar los posts.</p>');
            });
        }

        function updateActiveTimelineItem(title) {
            console.log('Actualizando elemento activo del timeline:', title);
            const timelineItems = document.querySelectorAll('.timeline-item');
            timelineItems.forEach((item) => {
                const itemTitle = item.querySelector('input[type="hidden"]').value;
                if (itemTitle === title) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }

        window.onpopstate = function(event) {
            if (event.state && event.state.title) {
                console.log('onpopstate:', event.state.title);
                loadPost(event.state.title, false);
            }
        }

        $(document).ready(function() {
            console.log('Cargando timeline al iniciar...');
            loadTimeline(function() {
                const pathSegments = window.location.pathname.split('/');
                const title = decodeURIComponent(pathSegments[pathSegments.length - 1]);
                if (title) {
                    console.log('Cargando post al iniciar:', title);
                    loadPost(title, false);
                } else {
                    console.log('No se especificó un título en la URL, cargando primer post por defecto...');
                    changePost(response.posts[0].title);
                }
            });
        });
    </script>
</body>

</html>