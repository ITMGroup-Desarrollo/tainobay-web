<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-discover-beyond.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <?php include("include/header.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/beyond-discover.css">
    <style>

    </style>
</head>

<body class="shock-body">



    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-overlay">
            <div class="banner d-flex align-items-center">
                <div class="content-wrapper top-zero ">
                    <!-- Intro -->
                    <div class="basic-intro text-center">
                        <h1 class="title white">
                            <span class="text-1 text-style-3"><?php echo TITULOS_DISCOVER[0];  ?></span>
                            <br>
                            <span class="text-1 text-style-3"><?php echo TITULOS_DISCOVER[1];  ?></span>
                            <br>

                        </h1>
                        <h2 class="title white"><span class="text-2 text-style-8 "><?php echo TITULOS_DISCOVER[2];  ?> </span></h2>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed" style="background-image:url('assets/images/discover-beyond/banner-header-discovery-beyond-the-cruise.jpg')">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-blue"></div>
            </div>
        </section>
        <!--Welcome-->
        <section class="shock-section pt-2 pb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="container text-center my-5">
                <div class="container-title mx-auto mb-2">
                    <h2 class="text-style-2 lh-1 text-uppercase gradient-animated-title animation-duration-1"><span class="d-block text-start"><?php echo DISCOVER_WELCOME[0];  ?></span>
                        <span class="d-flex justify-content-end gap-3">
                            <?php echo DISCOVER_WELCOME[1];  ?>
                        </span>
                    </h2>
                </div>
                <div class="container-text mx-auto px-5">

                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[2];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[3];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[4];  ?></p>
                </div>
            </div>
        </section>
        <!--First Carrusel-->

        <section id="carousel-sections-container" class=""></section>


    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
    <script>
        $(document).ready(function() {
            console.log("Document is ready");
            // Función para manejar el clic en los botones de visualización
            function handleDisplayButtonClick(button) {
                console.log("Button clicked", button);
                const section = button.closest('.carousel-section');
                const displayedBlog = section.find('.displayed-blog');
                const textElement = button.find('b');
                const icon = find('.fa-xmark');
                console.log("Section:", section);
                console.log("Displayed Blog:", displayedBlog);
                console.log("Text Element:", textElement);
                console.log("Icon:", icon);

                // Verifica si todas las secciones están visibles o alguna está oculta
                const areAllSectionsVisible = $('.carousel-section').toArray().every(sec => $(sec).is(':visible'));

                // Alterna la visibilidad del displayed-blog en la sección actual
                if (displayedBlog.is(':hidden')) {
                    displayedBlog.show();
                    textElement.text("<?php echo DISCOVER_CARRUSEL[5]; ?>");
                } else {
                    displayedBlog.hide();
                    textElement.text("<?php echo DISCOVER_CARRUSEL[4]; ?>");
                }

                // Rotea el icono
                if (icon.length) {
                    icon.toggleClass('rotate-90');
                }

                // Alterna la visibilidad de las secciones del carrusel, excepto la actual
                $('.carousel-section').each(function() {
                    if (areAllSectionsVisible) {
                        if (this !== section[0]) {
                            $(this).hide();
                        }
                    } else {
                        $(this).show();
                    }
                });

                // Desplaza la vista al h2 dentro del displayed-blog
                const blogHeading = displayedBlog.find('p').first();
                if (blogHeading.length) {
                    $('html, body').animate({
                        scrollTop: blogHeading.offset().top - ($(window).height() / 2) + (blogHeading.height() / 2)
                    }, 'smooth');
                }
            }


            // Función para manejar el clic en los botones de ocultación
            function handleHideButtonClick(button) {
                const section = button.closest('.carousel-section');
                const displayedBlog = section.find('.displayed-blog');
                const displayButtonTextElement = section.find('.display-button b');
                const icon = section.find('.display-button .fa-xmark');

                // Muestra todas las secciones
                $('.carousel-section').show();

                // Alterna la visibilidad del displayed-blog en la sección actual
                displayedBlog.hide();

                // Cambia el texto del botón display-button
                if (displayButtonTextElement.length) {
                    displayButtonTextElement.text("<?php echo DISCOVER_CARRUSEL[4]; ?>");
                }

                // Rotea el icono del button-hide-display
                if (icon.length) {
                    icon.removeClass('rotate-90');
                }

                // Desplaza la vista al botón de display
                displayButtonTextElement.closest('.display-button').get(0).scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }


            // Cargar contenido dinámico desde el archivo JSON
            $.getJSON('include/data-discover.json', function(data) {
                const container = $('#carousel-sections-container');
                container.empty(); // Limpiar el contenedor antes de agregar nuevas secciones

                data.carouselSections.forEach((section, sectionIndex) => {
                    const sectionId = `carouselExampleIndicators${sectionIndex + 1}`;
                    let indicators = '';
                    let items = '';
                    let displayT = '';
                    let displayC = '';
                    let displayH = '';
                    let displayI = '';
                    let displayW = '';
                    let displayN = '';
                    let gallery = '';

                    section.displayTitle.forEach((displayTitles) => {
                        displayT += `<h2 class="text-style-3 lh-1 text-blue"><span class="d-block text-start centrado">${displayTitles}</span></h2>`;
                    });
                    section.displayContent.forEach((displayContents) => {
                        displayC += `<p class="text-black black text-style-13">${displayContents}</p>`;
                    });
                    section.displayHighlights.forEach((displayHighlight) => {
                        displayH += `<li><p class="text-style-13">${displayHighlight}</p></li>`;
                    });
                    section.displayIncluded.forEach((displayIncludes) => {
                        displayI += `<li><p class="text-style-13">${displayIncludes}</p></li>`;
                    });
                    section.displayWhatToBring.forEach((displayWhatToBrings) => {
                        displayW += `<div class="list-item-container">
                        <img class:"wtbIcon" src=${displayWhatToBrings.iconPath} width="48" height="48" alt="Icono">
                        <p>${displayWhatToBrings.text}</p>
                        </div>`;
                    });
                    section.displayNote.forEach((displayNotes) => {
                        displayN += `<p class="text-black text-style-16 text-italic justificado">${displayNotes}</p>`;
                    });
                    section.galleryImages.forEach((galleryImage) => {
                        gallery += `
                            <div class="swiper-slide">
                                <a href="${galleryImage}" class="item lightbox-link hover-zoom-rotate">
                                    <div class="image-wrapper">
                                        <img src="${galleryImage}">
                                    </div>
                                </a>
                            </div>
                        `;
                    });

                    section.images.forEach((image, index) => {
                        const isActive = index === 0 ? 'active' : '';
                        indicators += `<button type="button" data-bs-target="#${sectionId}" data-bs-slide-to="${index}" class="${isActive}" aria-current="true" aria-label="Slide ${index + 1}"></button>`;
                        items += `
                            <div class="carousel-item ${isActive}">
                                <div class="carousel-image-wrapper position-relative">
                                    <div class="position-absolute top-0 end-0 p-1 button-share">
                                        <button class="border-0 text-white bg-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 1024 1024">
                                                <path fill="currentColor" d="m679.872 348.8l-301.76 188.608a127.8 127.8 0 0 1 5.12 52.16l279.936 104.96a128 128 0 1 1-22.464 59.904l-279.872-104.96a128 128 0 1 1-16.64-166.272l301.696-188.608a128 128 0 1 1 33.92 54.272z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <picture>
                                        <source src="${image}">
                                        <img src="${image}" class="d-block w-100" alt="Image">
                                    </picture>
                                </div>
                            </div>
                        `;

                    });
                    const justifyClass = section.side === 'left-side' ? 'justify-content-end' : 'justify-content-start';
                    const sectionHTML = `
                        <section class="carousel-section ">
                            <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center">
                                <div id="port-experience" class="shock-section ${section.side} pt-2 pb-4">
                                    <div class="carousel-content order bg-white d-flex flex-column justify-content-evenly align-items-center">
                                        <div class="basic-intro mb-35">
                                            <h2 class="lh-1 title-carrusel left">
                                                <span class="d-block text-style-3 gradient-animated-title animation-duration-1" style="text-align: center;">${section.title}</span>
                                                <span class="d-flex justify-content-center">
                                                    <span class="text-style-4 lh-1 text-italic" style="padding: 0;">${section.subtitle}</span>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class="d-flex align-items-center w-75">
                                            <a href="#" class="slide-navigation-item-prev slide-navigation-item-prev${sectionIndex + 1} d-block text-blue boton-prev" data-carousel="#${sectionId}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                                    <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"/>
                                                    <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"/>
                                                </svg>
                                            </a>
                                            <div class="flex-grow-1">
                                                <h2 class="text-style-6" style="line-height: 55px; text-align:center; color:#1c355e;">
                                                    <span class="d-block">${section.button}</span>
                                                </h2>
                                            </div>
                                            <a href="#" class="slide-navigation-item-next slide-navigation-item-next${sectionIndex + 1} d-block text-blue boton-next" data-carousel="#${sectionId}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                                    <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z"/>
                                                    <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        
                                        <div class="container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%;">
                                        
                                            <div class="d-flex ${justifyClass} shortIcons">
                                                <img src="${section.shortIconSchedule}" width="65" height="65" alt="Icono">
                                                <img src="${section.shortIconIntensity}" width="32" height="32" alt="Icono">
                                                <img src="${section.shortIconCategory}" width="48" height="48" alt="Icono">
                                            </div>
                                            <p class="text-black black text-style-13 justificado">${section.content}</p>
                                            <div class="d-flex ${justifyClass}">
                                                <a class="display-button" >
                                                    <i class="fa-solid fa-xmark fa-rotate-by" style="--fa-rotate-angle: 45deg; width:20px; height:auto;"></i>
                                                    <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4]; ?></b>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="${sectionId}" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                                        <div class="carousel-indicators">
                                            ${indicators}
                                        </div>
                                        <div class="carousel-inner">
                                            ${items}
                                        </div>
                                    </div>
                                </div>
                                <div class="shock-section displayed-blog">
                                    <div class="container text-center my-5 pt-2 pb-4">
                                        <div class="container-title container-title-display mx-auto mb-2 gradient-animated-title animation-duration-1">
                                            ${displayT}
                                        </div>
                                        <div class="container-text mx-auto px-5">
                                            ${displayC}
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row listado-row">
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <div class="listado">
                                                    <div class="listado-highlights">
                                                        <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[13]; ?></h2>
                                                        <div class="lista">
                                                            <ul>
                                                                ${displayH}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="listado-included">
                                                        <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[19]; ?></h2>
                                                        <div class="lista">
                                                            <ul>
                                                                ${displayI}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <div class="what-to-bring">
                                                    <div class="duration-container">
                                                        <div class="what-to-bring-duration rounded">
                                                            <img class:"wtbIcon" src="assets/images/discover-beyond/icon-clock-blue.svg" width="48" height="48" alt="Icono">
                                                            <div class="duration-text">
                                                                <h2 class="text-style-6 text-italic"><?php echo DISCOVER_CARRUSEL[27]; ?></h2>
                                                                <h2 class="text-style-5">${section.displayDuration}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="what-to-bring-list-container">
                                                        <div class="what-to-bring-list">
                                                            <h2 class="text-style-8 text-italic"><?php echo DISCOVER_CARRUSEL[29]; ?></h2>
                                                            <div class="list-container">
                                                                ${displayW}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-container">
                                            <h2 class="text-style-4 text-italic"><?php echo DISCOVER_CARRUSEL[34]; ?></h2>
                                            ${displayN}
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-12" data-aos="zoom-in-up" data-aos-delay="600" style="text-align: center;">
                                            <h2 class="text-style-4 text-italic text-blue"><?php echo DISCOVER_CARRUSEL[37]; ?></h2>
                                            <div class="gallery swiper swiper-container slider has-navigation scheme-1 primary"  >
                                                <div class="swiper-wrapper">
                                                    ${gallery}
                                                </div>
                                                <div class="swiper-button-prev button-prev">
                                                    <svg id="prev-page" src="assets/icons/icon_arrows_blue_left.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="4rem" height="4rem" viewBox="0 0 231.26 729.5">
                                                        <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                                        <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z"></path>
                                                    </svg>
                                                </div>
                                                <div class="swiper-button-next button-next">
                                                    <svg id="next-page" src="assets/icons/icon_arrows_blue_right.svg" alt="Prev" xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="4rem" height="4rem" viewBox="0 0 231.26 729.5">
                                                        <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                                                        <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <a class="display-hide-button button-transparent button-orange text-center" style="height: 3rem; margin-top:5%;">
                                                <strong><?php echo DISCOVER_CARRUSEL[38]; ?></strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        
                    `;

                    container.append(sectionHTML);

                    console.log("Section side:", section.side);

                    var newSection = container.find('.carousel-section');

                    if (section.side === 'right-side') {
                        newSection
                            .addClass('right-side')
                            .attr('data-aos', 'fade-left');
                    } else if (section.side === 'left-side') {
                        newSection
                            .addClass('left-side')
                            .attr('data-aos', 'fade-right');
                    }

                    AOS.init();

                    $(".gradient-animated-title").each(function() {
                        var $this = $(this);

                        $this.one("inview", function(event, isInView) {
                            if (isInView) {
                                setTimeout(function() {
                                    $this.addClass("active-animation");
                                }, 200);
                            }
                        });
                    });
                });
                // Inicializar eventos de clic después de cargar las secciones
                $(document).on('click', '.slide-navigation-item-prev', function(event) {
                    event.preventDefault();
                    const carouselId = $(this).data('carousel');
                    $(carouselId).carousel('prev');
                });

                $(document).on('click', '.slide-navigation-item-next', function(event) {
                    event.preventDefault();
                    const carouselId = $(this).data('carousel');
                    $(carouselId).carousel('next');
                });

                // Inicializar Swiper después de cargar las secciones
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 4, // Mostrar 4 imágenes al inicio
                    spaceBetween: 10, // Espacio entre las imágenes
                    slidesPerGroup: 1, // Desplazar 4 imágenes por vez
                    loop: true, // Habilitar bucle continuo
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    scrollbar: {
                        el: '.swiper-scrollbar',
                        hide: false,
                    },
                    autoplay: {
                        delay: 10000,
                        disableOnInteraction: false, // No desactivar autoplay al interactuar
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 10,
                            slidesPerGroup: 1, // Ajuste para pantallas pequeñas
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 10,
                            slidesPerGroup: 2, // Ajuste para pantallas medianas
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 10,
                            slidesPerGroup: 1, // Ajuste para pantallas grandes
                        }
                    }
                });



                // Adjunta eventos a los botones de visualización
                $(document).on('click', '.display-button', function() {
                    handleDisplayButtonClick($(this));
                    rotateIcon($(this));
                });
                // Adjunta eventos a los botones de ocultación
                $(document).on('click', '.display-hide-button', function() {
                    handleHideButtonClick($(this));
                });

            }).fail(function() {
                console.log('Error al cargar el archivo JSON.');
                $('#carousel-sections-container').html('<p>Error al cargar las secciones del carrusel.</p>');
            });
        });

        // Función para rotar el icono
        function rotateIcon(element) {
            $(element).find('.fa-xmark').toggleClass('rotate-90');
        }
        // Función para crear la sección dinámicamente y agregarla al DOM
    </script>
</body>

</html>