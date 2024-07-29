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
                <div class="overlay-blue"></div>
            </div>
        </section>
        <!-- Blog Section -->
        <section class="shock-section blog-section mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <!-- timeline-->
                    <div class="col-lg-2">
                        <ul class="timeline">
                            <?php
                            $dias = array(25, 24, 23, 22, 21);
                            $first = true;
                            foreach ($dias as $dia) {
                                $active = $first ? ' active' : '';
                                $first = false;
                            ?>
                                <li class="timeline-item<?php echo $active; ?>">
                                    <div class="content timeline-text-container">
                                        <h3 class="mestitle"><?php echo TITULOS_BLOG[2]; ?></h3>
                                        <h3 class="diatitle"><?php echo $dia; ?></h3>
                                    </div>
                                    <div class="circle">
                                        <i class="fa-regular fa-circle"></i>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>


                    <div class="col-lg-10">
                        <div class="shock-section container" id="blog-container">
                            <!-- Posts se cargarán aquí -->
                        </div>
                        <div class="pagination">
                            <button id="prev-page">Anterior</button>
                            <button id="next-page">Siguiente</button>
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

        // Agrega un evento de clic a cada elemento.timeline-item
        timelineItems.forEach((item) => {
            item.addEventListener('click', () => {
                // Remueve la clase.active de todos los elementos.timeline-item
                timelineItems.forEach((otherItem) => {
                    otherItem.classList.remove('active');
                });

                // Agrega la clase.active al elemento clickeado
                item.classList.add('active');
            });
        });
    </script>
    <script>
        function loadPost(title, pushState = true) {
            $.getJSON('include/get_blog_posts.php?title=' + encodeURIComponent(title), function(response) {
                const data = response.posts[0]; // Asumimos que solo hay un post con el título dado
                const hasPrevPost = response.has_prev_post;
                const hasNextPost = response.has_next_post;
                const prevPostTitle = response.prev_post_title;
                const nextPostTitle = response.next_post_title;

                $('#blog-container').empty(); // Limpiar el contenedor antes de agregar nuevos posts

                $('#blog-container').append(`
            <div class="blog-post">
                <div class="title-image">
                    <img src="${data.image_url}" class="img-fluid imgRound" alt="${data.title}" style="width: 100%; height: auto;  ">
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
            <div class="blog-post">
                <h2>${data.title}</h2>
                <p class="justificado">${data.content}</p>
                <p class="justificado">${data.day} ${data.month}</p>
            </div>
            
        `);

                // Controlar la habilitación de los botones de navegación
                $('#prev-page').prop('disabled', !hasPrevPost).attr('onclick', `changePost('${prevPostTitle}')`);
                $('#next-page').prop('disabled', !hasNextPost).attr('onclick', `changePost('${nextPostTitle}')`);

                // Actualizar la URL
                if (pushState) {
                    const url = new URL(window.location);
                    url.pathname = '/tainobay/blog/' + title;
                    window.history.pushState({
                        title: title
                    }, '', url);
                }
            });
        }

        function changePost(title) {
            loadPost(title);
        }

        // Manejar la navegación del historial
        window.onpopstate = function(event) {
            if (event.state && event.state.title) {
                loadPost(event.state.title, false);
            }
        }

        // Cargar los posts al iniciar
        $(document).ready(function() {
            const pathSegments = window.location.pathname.split('/');
            const title = pathSegments[pathSegments.length - 1];
            if (title) {
                loadPost(title, false);
            } else {
                loadPost('Playa-dorada', false); // Cargar una publicación predeterminada si no hay título en la URL
            }
        });
    </script>
</body>

</html>