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
                        <h2 class="title white"><span class="text-2 text-style-8 blog-subtitle banner-subtitle"></span></h2>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-banner"></div>
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
                        <div class="items-container" style="display: flex; ">
                            <a href="<?php echo $idioma; ?>/blog_all" class=" button-transparent button-orange text-center" style=""><strong><?php echo TITULOS_BLOG[3];  ?></strong></a>
                            <!-- Botones de navegación y paginación -->
                            <div class="container mt-3 d-flex justify-content-center pagination-items">

                                <div class="row">
                                    <div id="prev-page" class="col-4 col-md-3 col-lg-6">
                                        <svg class="swiper-button-prev" src="assets/icons/icon_arrows_blue_left.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 231.26 729.5">
                                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                        </svg>
                                        <span>
                                            <?php echo PAGINATION[0];  ?>
                                        </span>
                                    </div>
                                    <div id="next-page" class="col-4 col-md-3 col-lg-6">
                                        <span>
                                            <?php echo PAGINATION[1];  ?>
                                        </span>
                                        <svg class="swiper-button-next" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1rem" height="1rem" viewBox="0 0 231.26 729.5">
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
        // Determina el archivo JSON a cargar basado en el idioma
        const jsonFile = idioma === "en" ? 'include/data.json' : 'include/es-data.json';

        $.getJSON(jsonFile, function(response) {
            const post = response.posts.find(post => post.title === title);
            if (!post) {
                $('#blog-container').html('<p>No se encontró el post.</p>');
                return;
            }

            $('#blog-container').empty();

            $('#blog-container').append(`
                <div class="blog-post">
                    <div class="title-image">
                        <img src="${post.image_url}" class="img-fluid imgRound" alt="${post.title}">
                        <!-- share -->
                        <div class="slide-share position-absolute top-0 end-0 p-1 button-share">
                            <div class="container-btn">
                                <!-- Social Media Buttons -->
                                <div class="redes">
                                    <a target="_blank" class="bg-orange" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $path; ?>${idioma}/blog/${post.title}">
                                        <i class="icon fab fa-facebook-f"></i>
                                    </a>
                                    <a target="_blank" class="bg-orange" href="https://twitter.com/intent/tweet?url=<?php echo $path; ?>${idioma}/blog/${post.title}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a target="_blank" class="bg-orange" href="https://api.whatsapp.com/send?text=<?php echo $path; ?>${idioma}/blog/${post.title}">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                            <button class="border-0 text-white bg-transparent toggle-share">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="blog-post blog-texto">
                    ${post.content.split('\n').map(paragraph => `<p class="justificado">${paragraph}</p>`).join('')}
                </div>
                <div class="title-image mb-3">
                    <img src="${post.image_url2}" class="img-fluid imgRound" alt="${post.title}">
                </div>
                <div class="gallery-section">
                    <div class="gallery-title2 mb-2">
                        <h2 class="title"><span class="text-2 text-style-6">Gallery</span></h2>
                    </div>
                    <div class="gallery-container2 mb-3">
                        ${post.images.map(imageUrl => `<img src="${imageUrl}" class="img-fluid gallery-img" alt="Gallery image">`).join('')}
                    </div>
                </div>
            `);
            $('.banner-fixed').css('background-image', `url(${post.image_url})`);
            // Establece el título y subtítulo del post
            $('.blog-title').text(post.title.replace(/-/g, ' '));
            $('.blog-subtitle').text(post.subtitle);

            if (pushState) {
                const url = new URL(window.location);
                const isLocalhost = url.hostname === "localhost";
                const carpetaRaiz = isLocalhost ? "/tainobay" : "";
                url.pathname = `${carpetaRaiz}/${idioma}/blog/` + encodeURIComponent(title);
                window.history.pushState({
                    title: title
                }, '', url);
            }
        }).fail(function() {
            $('#blog-container').html('<p>Error al cargar el post.</p>');
        });
    }


    const itemsPerPage = 4;
    let currentPage = 1;

    function loadTimeline(callback) {
        const jsonFile = idioma === "en" ? 'include/data.json' : 'include/es-data.json';

        $.getJSON(jsonFile, function(response) {
            posts = response.posts || [];

            if (currentPage > 1) {
                $('#timeline').find('li:lt(' + (itemsPerPage - 1) + ')').remove();
            } else {
                $('#timeline').empty();
            }

            posts.slice((currentPage - 1) * itemsPerPage, currentPage * itemsPerPage).forEach((post, index) => {
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
                callback(posts);
            }

            updatePaginationControls(posts.length);
        }).fail(function() {
            $('#timeline').html('<p>Error al cargar los posts.</p>');
        });
    }

    function changePost(title) {
        // Cargar el post correspondiente
        loadPost(title);

        // Remover la clase 'active' de todos los elementos del timeline
        $('.timeline-item').removeClass('active');

        // Buscar el elemento que tiene el título del post clickeado y agregarle la clase 'active'
        $('.timeline-item').each(function() {
            const postTitle = $(this).find('input[type="hidden"]').val();
            if (postTitle === title) {
                $(this).addClass('active');
            }
        });
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