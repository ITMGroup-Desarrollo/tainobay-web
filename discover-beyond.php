<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-discover-beyond.php");
?>

<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/beyond-discover.css">
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
                            <?= TITULOS_DISCOVER[0] ?>
                            <br><?= TITULOS_DISCOVER[1] ?>
                        </h1>
                        <p class="text-white banner-subtitle"><?php echo TITULOS_DISCOVER[2];  ?></p>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed" style="background-image:url('assets/images/discover-beyond/banner-header-discovery-beyond-the-cruise.jpg')">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-banner"></div>
            </div>
        </section>

        <!--Welcome-->
        <section class="shock-section pt-2 pb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="container text-center my-5">
                <div class="container-title mx-auto mb-2">
                    <h2 class="text-style-2 lh-1 text-uppercase gradient-animated-title animation-duration-1">
                        <span id="welcome-span" class="d-block text-start"><?php echo DISCOVER_WELCOME[0];  ?></span>
                        <span id="welcome-span2" class="d-flex justify-content-end gap-3">
                            <?php echo DISCOVER_WELCOME[1];  ?>
                        </span>
                    </h2>
                </div>
                <div class="container-text mx-auto">
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[2];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[3];  ?></p>
                    <p class="text-black black text-style-13"><?php echo DISCOVER_WELCOME[4];  ?></p>
                </div>
            </div>
        </section>

        <!--Cargas de Carrusel-->
        <section id="carousel-sections-container" class=""></section>
    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
</body>

<script>
    $(document).ready(function() {
        // console.log("Document is ready");
        // Función para manejar el clic en los botones de visualización
        function handleDisplayButtonClick(button) {
            console.log("Button clicked", button);
            const section = button.closest('.carousel-section');
            const displayedBlog = section.find('.displayed-blog');
            const textElement = button.find('b');
            const icon = find('.fa-xmark');

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

        // Inserta el valor de la variable PHP en una variable JavaScript
        const idioma = '<?php echo $idioma; ?>';
        console.log(idioma);
        // Seleccionar el archivo JSON según el idioma
        const dataFile = idioma === 'es' ? 'es-data-discover.json' : 'data-discover.json';
        // Cargar contenido dinámico desde el archivo JSON
        $.getJSON('include/'+ dataFile , function(data) {
            console.log(data);
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
                    displayT += `<h2 class="text-style-3 lh-1 text-blue mb-0"><span class="d-block text-start centrado">${displayTitles}</span></h2>`;
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
                                    <!-- share -->
                                    <div class="slide-share position-absolute top-0 end-0 p-1 button-share">
                                        <div class="container-btn">
                                            <div class="redes">
                                                <a target="_blank" class="bg-orange" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $path; ?>es/discover-beyond?post_id=${section.id}">
                                                    <i class="icon fab fa-facebook-f"></i>
                                                </a>
                                                <a target="_blank" class="bg-orange" href="https://twitter.com/intent/tweet?url=<?php echo $path; ?>es/discover-beyond?post_id=${section.id}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="1em" height="1em" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>

                                                </a>
                                                <a target="_blank" class="bg-orange" href="https://api.whatsapp.com/send?text=<?php echo $path; ?>es/discover-beyond?post_id=${section.id}">
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
                        <section data-id=${section.id} class="carousel-section  data-aos="fade-up"">
                            <div class="carousel-content bg-white d-flex flex-column justify-content-evenly align-items-center w-md-100">
                                <div id="port-experience" class="shock-section ${section.side} pt-2 w-md-100">
                                    <div class="carousel-content order bg-white d-flex flex-column justify-content-evenly align-items-center">
                                        <div class="basic-intro mb-35">
                                            <h2 class="lh-1 title-carrusel left">
                                                <span class="d-block text-style-3 gradient-animated-title animation-duration-1" style="text-align: center;">${section.title}</span>
                                                <span class="d-flex justify-content-center">
                                                    <span class="text-style-4 lh-1 text-italic" style="padding: 0 !important;">${section.subtitle}</span>
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
                                                <h2 class="text-style-6" style=" text-align:center; color:#1c355e;">
                                                    <span class="d-block subtitle-slider">${section.button}</span>
                                                </h2>
                                            </div>
                                            <a href="#" class="slide-navigation-item-next slide-navigation-item-next${sectionIndex + 1} d-block text-blue boton-next" data-carousel="#${sectionId}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                                                    <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z"/>
                                                    <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        
                                        <div class="container-text mx-auto px-5 bg-orange pb-3 pt-3" style="width: 100%; height: auto;">
                                            <div class="orange-items-container">
                                                <div class="d-flex ${justifyClass} shortIcons">
                                                    <img src="${section.shortIconSchedule}" width="65" height="65" alt="Icono">
                                                    <img src="${section.shortIconIntensity}" width="32" height="32" alt="Icono">
                                                    <img src="${section.shortIconCategory}" width="48" height="48" alt="Icono">
                                                </div>
                                                <div class="text-black black text-style-13 justificado text-content-container d-flex ${justifyClass}"><p>${section.content}</p></div>
                                                <div class="d-flex ${justifyClass}">
                                                    <a class="display-button" >
                                                        <div class="icon-container">
                                                         
                                                            <svg class="rotate-icon fa-xmark fa-rotate-by" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 448 512">
                                                                <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32" />
                                                            </svg>
                                                        </div>
                                                        <b class="text-style-13"><?php echo DISCOVER_CARRUSEL[4]; ?></b>
                                                    </a>
                                                </div>
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
                                <div class="shock-section displayed-blog col-sm-12 col-md-12">
                                    <div class="container text-center my-5 pt-2 pb-4">
                                        <div class="container-title container-title-display mx-auto mb-2 gradient-animated-title animation-duration-1">
                                            ${displayT}
                                        </div>
                                        <div class="container-text container-text-displayH mx-auto px-5">
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
                                            <div class="col-12 col-md-12 col-lg-6 what-to-bring-container">
                                                <div class="what-to-bring">
                                                    <div class="duration-container">
                                                        <div class="what-to-bring-duration ">
                                                            
                                                            <div class="duration-text">
                                                                <div class="duration-img">
                                                                    <img class:"wtbIcon" src="assets/images/discover-beyond/icon-clock-blue.svg" width="32" height="32" alt="Icono">
                                                                    <h2 class="text-style-6 text-italic"><?php echo DISCOVER_CARRUSEL[27]; ?></h2>
                                                                </div>
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
                                        <div class="note-container px-5">
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
                scrollToPostIfNeeded();

                var newSection = container.find('.carousel-section');

                if (section.side === 'right-side') {
                    newSection
                        .attr('data-aos', 'fade-left');
                } else if (section.side === 'left-side') {
                    newSection
                        .attr('data-aos', 'fade-right');
                }

                AOS.init();
                $('.shock-section .gallery').lightGallery({
                    selector: '.shock-section .gallery .lightbox-link:not(.prevent)',
                    thumbnail: false,
                    share: false,
                    download: false,
                });
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

        function scrollToPostIfNeeded() {
            const urlParams = new URLSearchParams(window.location.search);
            const postId = urlParams.get('post_id');

            if (postId) {
                // Esperar a que todos los posts estén listos en el DOM
                const postElement = $(`.carousel-section[data-id="${postId}"]`);
                // console.log('carrusel', postElement);
                if (postElement.length) {
                    // Scroll hacia el elemento correspondiente
                    $('html, body').animate({
                        scrollTop: postElement.offset().top
                    }, 1000);

                    // Opcional: Resaltar el post o agregar alguna animación
                    postElement.addClass('highlight');
                } else {
                    console.error(`Post con id ${postId} no encontrado.`);
                }
            }
        }
    });

    // Función para rotar el icono
    function rotateIcon(element) {
        $(element).find('.fa-xmark').toggleClass('rotate-90');
    }
    // Función para crear la sección dinámicamente y agregarla al DOM
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
    $(document).ready(function() {
        // Detectar si el dispositivo es móvil
        if ($(window).width() <= 768) { // 768px es el ancho máximo para dispositivos móviles (md y menores en Bootstrap)
            $('#welcome-span').removeClass('text-start');
            $('#welcome-span2').removeClass('justify-content-end');
            $('#welcome-span').addClass('justify-content-center');
            $('#welcome-span2').addClass('justify-content-center');
        }
    });
</script>

</html>