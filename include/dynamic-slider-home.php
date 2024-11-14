        <section id="home" class="shock-section dynamic-slider scheme-1" data-autoplay="6000" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="400">
            <!-- Index -->
            <div id="slide-index" class="slide-index">
                <span class="slide-index-current">
                    <span class="slide-index-inner"></span>
                </span>
                <span class="slide-index-total"></span>
            </div>
            <!-- content static -->
            <!-- <div class="static-content bg-orange d-flex flex-column justify-content-evenly align-items-center"> -->
            <div class="static-content bg-orange">
                <h2 class="text-uppercase text-center text-style-3 text-white static-title"><strong><?= CAROUSEL_PORT_EXPERIENCE[0]; ?></strong></h2>
                <!-- Controls carousel -->
                <!-- <nav class="slide-navigation d-flex align-items-center gap-md-3 w-100 w-md-75 max-w-2xl-60 wrapper-arrows static-arrows"> -->
                <nav class="slide-navigation d-flex align-items-md-center gap-md-3 w-100 w-md-75 max-w-2xl-60 wrapper-arrows static-arrows">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-flex align-items-center text-blue" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1 d-none d-md-block">
                        <p class="text-style-6 text-white"><span class="d-block text-center text-md-start"><?= CAROUSEL_PORT_EXPERIENCE[1]; ?></span>
                            <span class="text-md-end text-center ml-4 d-block"><?= CAROUSEL_PORT_EXPERIENCE[2]; ?></span>
                        </p>
                    </div>
                    <div class="flex-grow-1 d-md-none">
                        <p class="text-style-6 text-white"><span class="d-block text-center text-md-start"><?= CAROUSEL_PORT_EXPERIENCE[3]; ?></span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-flex align-items-center text-blue" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        </svg>
                    </a>
                </nav>
            </div>

            <?php
            foreach ($points as $point) { ?>
                <div class="slide-item side-intro <?= $point['id'] == '1' ? 'current-slide' : '' ?>">
                    <!-- share -->
                    <div class="slide-share position-absolute share p-1 button-share">
                        <div class="container-btn">
                            <div class="redes">
                                <a target="_blank" class="bg-orange" href="https://www.facebook.com/sharer/sharer.php?u=https://www.porttainobay.com/"><i class="icon fab fa-facebook-f"></i></a>
                                <a target="_blank" class="bg-orange" href="https://twitter.com/intent/tweet?url=https://example.com&text=Echa%20un%20vistazo%20a%20<?= $point['name'] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14">
                                        <g fill="none">
                                            <g clipPath="url(#IconifyId19113fe36724382401)">
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
                                <a target="_blank" class="bg-orange" href="https://api.whatsapp.com/send?text=https://www.porttainobay.com/">
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
                    <!-- button explore more -->
                    <div class="slide-button static-button d-none d-lg-block" style="z-index: 9;">
                        <div class="container-button text-center">
                            <a href="<?= $idioma . '/port-experience/' . $point['path'] ?>" class="text-uppercase button-transparent button-blue text-center button-carousel"><strong><?= CAROUSEL_PORT_EXPERIENCE[4] ?></strong></a>
                        </div>
                    </div>
                    <!-- Intro -->
                    <div class="slide-content" style="<?= $point['id'] == '1' ? 'background: linear-gradient(to bottom, rgba(255, 0, 0, 0), var(--blue-color));' : '' ?>">
                        <span class="slide-title text-1 text-style-1 text-white"><?= $point['id'] > 9 ? $point['id'] : '0' . $point['id']; ?></span>
                        <div class="slide-description">
                            <span class="text-style-4 text-white"><?= $point['name'] ?></span>
                            <div class="description text-white">
                                <p class="text-style-12">
                                    <?= $point['text_home'] ?>
                                </p>
                            </div>
                        </div>
                        <div class="slide-button button-mobile static-button d-lg-none" style="z-index: 9;">
                            <div class="container-button text-center">
                                <a href="<?= $idioma ?>/discover-beyond" class="text-uppercase button-transparent button-orange text-center button-carousel">
                                    <strong><?= CAROUSEL_PORT_EXPERIENCE[4] ?></strong>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="slide-image-wrapper">
                        <div class="slide-image-inner">
                            <img src=<?= $point['gallery'][0] ?> class="image slide-image" alt="<?= $point['name'] ?>" />
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>