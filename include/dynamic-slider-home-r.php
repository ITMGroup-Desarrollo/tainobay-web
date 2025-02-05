        <style>
            :root .dynamic-slider-r.scheme-1 {
                --color-1: var(--blue-color);
                --color-2: var(--blue-color);
            }

            :root .dynamic-slider-r.scheme-2 {
                --color-1: var(--white-color);
                --color-2: #1e1e24;
            }

            .dynamic-slider-r-open header {
                pointer-events: none;
            }

            .dynamic-slider-r {
                overflow: hidden;
                height: 85vh;
                display: grid;
                grid-template-columns: 50% 50%;
                grid-template-rows: 25% 25% 25% 25%;
                grid-template-areas: "slide-content static-content" "slide-content static-content" "slide-content static-content" "slide-content static-content";
            }

            .dynamic-slider-r .static-content {
                padding: 5rem 1rem;
                display: grid;
                justify-items: center;
                grid-template-rows: repeat(3, 1fr);
                grid-template-areas: "static-title" "static-arrows" "static-button";
            }

            .dynamic-slider-r .static-title {
                grid-area: static-title;
            }

            .dynamic-slider-r .static-arrows {
                grid-area: static-arrows;
            }

            .dynamic-slider-r .static-button {
                grid-area: static-button;
            }

            .dynamic-slider-r .slide-info-menu {
                position: relative;
                z-index: 4;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                grid-area: expander;
                pointer-events: none;
            }

            .dynamic-slider-r .slide-info-menu-close {
                width: 100%;
                height: 100%;
                opacity: 0;
                pointer-events: none;
            }

            .dynamic-slider-r .slide-info-open .slide-info-menu-close {
                pointer-events: auto;
            }

            .dynamic-slider-r .slide-info-toggle {
                position: absolute;
                bottom: 4.5vw;
                left: 5vw;
                width: auto;
                height: auto;
                display: flex;
                align-items: flex-end;
                cursor: pointer;
                pointer-events: auto;
            }

            .dynamic-slider-r .slide-info-toggle:before {
                content: "";
                position: absolute;
                left: -1.5vw;
                bottom: -4.5vw;
                width: 20vw;
                height: 8vw;
                background-color: var(--color-2);
                background: -webkit-linear-gradient(180deg,
                        transparent 20%,
                        var(--color-2) 50%);
                background: -o-linear-gradient(180deg, transparent 20%, var(--color-2) 50%);
                background: linear-gradient(180deg, transparent 20%, var(--color-2) 50%);
                -webkit-transition: all 0.8s ease;
                -o-transition: all 0.8s ease;
                -moz-transition: all 0.8s ease;
                transition: all 0.8s ease;
                pointer-events: none;
            }

            .dynamic-slider-r .slide-info-toggle.disabled {
                cursor: pointer;
            }

            .dynamic-slider-r .slide-info-toggle.disabled:active {
                pointer-events: none;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-toggle:before {
                height: 16vw;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-toggle {
                height: initial;
            }

            .dynamic-slider-r .slide-info-open .slide-info-toggle {
                pointer-events: none;
            }

            .dynamic-slider-r .slide-info-toggle .arrow-button {
                padding: 0;
            }

            .dynamic-slider-r .slide-info-toggle .arrow-button .arrow {
                -webkit-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-toggle .arrow-button .arrow {
                opacity: 0;
            }

            .dynamic-slider-r .slide-index {
                position: relative;
                /* z-index: 5; */
                top: -100px;
                right: 20px;
                width: auto;
                min-width: 120px;
                height: 22px;
                display: flex;
                align-self: center;
                justify-self: center;
                grid-area: 1 / 1 / span 2 / span 2;
                transform: rotate(-90deg);
                font-family: var(--secondary-font);
                font-size: 0.85rem;
                font-weight: 500;
                letter-spacing: 1px;
            }

            .dynamic-slider-r .slide-index-current {
                color: white;
                position: relative;
                width: 50%;
                text-align: left;
            }

            .dynamic-slider-r .slide-index-current::before {
                content: "";
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
                position: absolute;
                right: 0;
                bottom: 11px;
                width: 60%;
                height: 2px;
                background-color: var(--color-1);
            }

            .dynamic-slider-r .slide-index-inner {
                display: block;
            }

            .dynamic-slider-r .slide-index-total {
                position: relative;
                width: 50%;
                text-align: right;
                color: white;
            }

            .dynamic-slider-r .slide-index-total:before {
                content: "";
                position: absolute;
                border-top-right-radius: 8px;
                border-bottom-right-radius: 8px;
                z-index: 1;
                left: 0;
                bottom: 11px;
                width: 60%;
                height: 2px;
                background-color: var(--color-1);
            }

            .dynamic-slider-r .slide-navigation {
                z-index: 2;
                /* padding: 0 5vw; */
                /* grid-area: slide-navigation; */
                /* text-align: right; */
            }

            .dynamic-slider-r .static-content {
                grid-area: static-content;
                z-index: 2;
            }

            .dynamic-slider-r .slide-navigation .slide-navigation-item-prev {
                margin-right: 5px;
            }

            .start-48 {
                left: 48%;
            }

            .dynamic-slider-r .slide-item {
                background-color: var(--blue-color);
                position: relative;
                display: grid;
                grid-area: 1 / 1 / 5 / 4;
                grid-template-columns: 50% 22% 28%;
                grid-template-rows: 26% 54% 20%;
                grid-template-areas: "slide-image-wrapper slide-content slide-content" "slide-image-wrapper slide-content slide-content" "slide-image-wrapper static-button static-button";
                pointer-events: none;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) {
                pointer-events: none;
            }

            .dynamic-slider-r .current-slide {
                pointer-events: auto;
            }

            .dynamic-slider-r .slide-content {
                width: 100%;
                max-width: 100%;
                padding: 5vw;
                grid-area: slide-content;
                position: absolute;
                left: 0;
                bottom: 0;
                z-index: 9;
            }

            .dynamic-slider-r .slide-title {
                overflow: hidden;
                position: relative;
            }

            .dynamic-slider-r .slide-title span {
                display: inline-block;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-title span {
                opacity: 0;
            }

            .dynamic-slider-r .slide-description {
                overflow: hidden;
                position: relative;
                margin-right: 5vw;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-description {
                opacity: 0;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-share {
                opacity: 0;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-button {
                opacity: 0;
            }

            .dynamic-slider-r mark.active:before {
                animation: none;
            }

            .dynamic-slider-r .current-slide mark.active:before {
                animation: width-animation 0.5s forwards;
            }

            .dynamic-slider-r .slide-image-wrapper {
                overflow: hidden;
                z-index: 2;
                height: auto;
                grid-area: slide-image-wrapper;
                /* pointer-events: none; */
            }

            .dynamic-slider-r .slide-image-inner {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: 50% 50%;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-image-inner {
                opacity: 0;
            }

            .dynamic-slider-r .slide-image-inner .slide-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .dynamic-slider-r .slide-info {
                position: relative;
                z-index: 3;
                left: -5vw;
                width: calc(100% + 5vw);
                margin: 0;
                padding: 4.5vw 5vw;
                list-style: none;
                grid-area: 1 / 2 / 4 / 3;
                background-color: transparent;
            }

            .dynamic-slider-r-open .dynamic-slider-r .current-slide .slide-info {
                overflow-y: auto;
                overflow-x: hidden;
                pointer-events: auto;
                padding-bottom: 9vw;
            }

            .dynamic-slider-r-open .dynamic-slider-r .current-slide .slide-info::-webkit-scrollbar {
                display: none;
            }

            .dynamic-slider-r .slide-info-item {
                display: block;
                margin: 0 0 2.2rem 0 !important;
                cursor: pointer;
                transition: initial;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-info-item {
                opacity: 0;
            }

            .dynamic-slider-r .slide-info-item.fix {
                max-height: 59px;
            }

            .dynamic-slider-r .current-slide .slide-info-item {
                pointer-events: auto;
            }

            body:not(.dynamic-slider-r-open) .dynamic-slider-r .slide-info-item.disabled {
                pointer-events: none;
            }

            .dynamic-slider-r .slide-info-button {
                position: relative;
                width: 100%;
                max-width: 200px;
                margin: 4rem 0 2rem 0;
                display: block;
                cursor: pointer;
                color: var(--white-color);
            }

            .dynamic-slider-r .slide-info-title {
                margin: 0 0 0.5rem;
                font-size: 1rem;
                font-weight: 400;
                color: var(--white-color);
            }

            .dynamic-slider-r .slide-info-title .icon {
                position: relative;
                top: 0;
                left: 5px;
                font-size: 12px;
                -webkit-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .dynamic-slider-r .slide-info-item:hover .slide-info-title .icon {
                left: 10px;
            }

            .dynamic-slider-r .slide-info-detail {
                overflow: hidden;
                width: 100%;
                max-width: 35vw;
                height: 50px;
                display: block;
                font-size: 1rem;
                color: var(--gray-color);
                -webkit-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
                transition-delay: 0.2s;
            }

            .dynamic-slider-r .slide-info-detail.show {
                height: 120px;
            }

            .dynamic-slider-r .slide-info-detail .hide {
                height: 0;
                transform: translateY(100%);
                opacity: 0;
                -webkit-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                transition-delay: 0.5s;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-detail .hide {
                height: auto;
                transform: translateY(0);
                opacity: 1;
            }

            .dynamic-slider-r .slide-info-detail span {
                opacity: 1;
                -webkit-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                transition: all 0.4s ease-in-out;
                transition-delay: 0.2s;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-detail {
                height: 100px;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-detail.fix {
                height: 100%;
            }

            .dynamic-slider-r-open .dynamic-slider-r .slide-info-detail .ellipse {
                font-size: 0;
            }

            .dynamic-slider-r .slide-action {
                grid-area: more;
                overflow: hidden;
                display: flex;
                align-items: stretch;
            }

            .dynamic-slider-r .slide-action-inner {
                width: 100%;
                padding: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-action-inner {
                opacity: 0;
            }

            .dynamic-slider-r .slide-action-title {
                margin: 0 0 0.5rem 0;
                display: block;
                color: var(--gray-color);
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-action-title {
                opacity: 0;
            }

            .dynamic-slider-r .slide-item:not(.current-slide) .slide-action-link {
                opacity: 0;
            }

            .dynamic-slider-r .slide-item .slide-action-link {
                display: flex;
                align-items: center;
            }

            .dynamic-slider-r .slide-action .icon {
                margin-left: 5px;
                font-size: 14px;
                -webkit-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .dynamic-slider-r .slide-expander {
                position: relative;
                right: 5vw;
                z-index: 2;
                width: 100%;
                grid-area: 1 / 2 / 4 / 4;
                transform-origin: 0 0;
                background-color: var(--color-2);
            }

            .dynamic-slider-r .slide-item {
                position: initial;
            }

            @media (max-width: 1199px) {
                .dynamic-slider-r .slide-content {
                    padding: 8vw;
                }
            }

            @media (max-width: 991px) {
                .dynamic-slider-r .static-content {
                    justify-items: center;
                    margin-bottom: 18rem;
                    grid-template-columns: 100%;
                    grid-template-rows: repeat(3, 1fr);
                    grid-template-areas: "static-title" "static-arrows" "...";
                }

                .side-intro .description {
                    margin: 0 0 0;
                    line-height: 1.5;
                }

                .dynamic-slider-r {
                    overflow: initial;
                    height: auto;
                    display: grid;
                    grid-template-columns: 100%;
                    grid-template-rows: 50% 50%;
                    grid-template-areas:
                        "static-content"
                        "slide-content";
                }

                .dynamic-slider-r .slide-index {
                    display: none;
                }

                .dynamic-slider-r .slide-navigation {
                    /* position: absolute; */
                    bottom: 0;
                    width: 100%;
                    padding: 1rem;
                }

                .dynamic-slider-r.is-banner .slide-navigation {
                    display: none;
                }

                .dynamic-slider-r .slide-info-menu {
                    display: none;
                }

                .dynamic-slider-r .slide-expander {
                    display: none;
                }

                .dynamic-slider-r .slide-item {
                    grid-template-columns: 100%;
                    grid-template-rows: 50% 50%;

                    grid-template-areas:
                        "slide-content"
                        "slide-image-wrapper";
                }

                .dynamic-slider-r.is-banner .slide-item {
                    padding-bottom: 0;
                }

                .dynamic-slider-r .slide-content {
                    width: 100%;
                    order: 2;
                }

                .dynamic-slider-r.is-banner .slide-content {
                    margin-bottom: 0;
                }

                .dynamic-slider-r .slide-description {
                    margin-right: 0;
                }

                .dynamic-slider-r .slide-image-wrapper {
                    width: 100%;
                    /* height: 50vh; */
                    height: 100%;
                    flex: 0 0 auto;
                    order: 1;
                }

                .dynamic-slider-r .slide-action {
                    width: 100%;
                    padding: 2rem 2rem 0;
                    display: block;
                    flex: 0 0 auto;
                    order: 1;
                    font-size: 0.95rem;
                }

                .dynamic-slider-r .slide-action-inner {
                    padding: 0;
                    display: flex;
                    flex-direction: row;
                    justify-content: flex-start;
                    align-items: center;
                }

                .dynamic-slider-r .slide-action-title {
                    margin: 0 1rem 0 0;
                    display: block;
                }

                .dynamic-slider-r .slide-info {
                    display: none;
                }

                .dynamic-slider-r .slide-info-item {
                    transform: none !important;
                    opacity: 1 !important;
                }

                .dynamic-slider-r .slide-gallery {
                    display: none;
                }
            }

            @media (max-width: 991px) and (min-height: 800px) {
                .dynamic-slider-r .static-content {
                    grid-template-rows: repeat(2, 1fr);
                    grid-template-areas: "static-title" "static-arrows";
                }
            }

            @media (max-width: 424px) {
                .dynamic-slider-r .slide-action-inner {
                    display: block;
                }
            }

            @media (min-width: 991px) {
                .dynamic-slider-r .slide-item {
                    position: initial;
                }
            }

            @media (min-width: 991px) and (min-height: 500px) and (max-height: 600px) {
                .dynamic-slider-r .static-content {
                    padding: 2rem 1rem;
                }

                .text-style-3 {
                    font-size: 3rem;
                }

                .text-style-6 {
                    font-size: 2rem;
                }
            }

            @media (min-width: 768px) and (min-height: 800px) and (max-height: 1000px) {
                .dynamic-slider-r .static-content {
                    padding: 2rem 1rem;
                }

                .text-style-3 {
                    font-size: 4rem;
                }
            }

            .button-mobile {
                margin: 2rem 1rem;
            }
        </style>
        <section id="home-r" class="shock-section dynamic-slider-r scheme-1" data-autoplay="6000" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
            <!-- Index -->
            <div id="slide-index" class="slide-index">
                <span class="slide-index-current">
                    <span class="slide-index-inner"></span>
                </span>
                <span class="slide-index-total"></span>
            </div>
            <!-- content static -->
            <div class="static-content bg-blue">
                <h2 class="text-uppercase text-center text-style-3 text-white"><strong><?= CAROUSEL_DISCOVER_BEYOND[0]; ?></strong></h2>
                <!-- Controls carousel -->
                <nav class="slide-navigation d-flex align-items-md-center gap-md-3 w-100 w-md-75 max-w-2xl-60 wrapper-arrows static-arrows">
                    <!-- Arrow Left -->
                    <a href="#" class="slide-navigation-item-prev d-flex align-items-center text-orange" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M126.93,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08L15.05,377.88,133.73,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.76-1.22-7.78.85-8.98,4.61L0,378.05l120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                            <path class="cls-1" d="M224.12,729.5c.78,0,1.57-.13,2.34-.4,3.73-1.29,5.7-5.36,4.41-9.08l-118.63-342.14L230.91,9.33c1.21-3.75-.86-7.78-4.61-8.98-3.77-1.22-7.78.85-8.98,4.61l-120.14,373.1,120.19,346.65c1.02,2.95,3.79,4.8,6.74,4.8Z" />
                        </svg>
                    </a>
                    <!-- Text Carousel -->
                    <div class="flex-grow-1 d-none d-md-block">
                        <p class="text-style-6 text-white"><span class="d-block text-center text-md-start"><?= CAROUSEL_DISCOVER_BEYOND[1];; ?></span>
                            <span class="text-md-end text-center ml-4 d-block"><?= CAROUSEL_DISCOVER_BEYOND[2]; ?></span>
                        </p>
                    </div>
                    <div class="flex-grow-1 d-md-none">
                        <p class="text-style-6 text-white"><span class="d-block text-center text-md-start"><?= CAROUSEL_DISCOVER_BEYOND[3];; ?></span></p>
                    </div>
                    <!-- Arrow Right -->
                    <a href="#" class="slide-navigation-item-next d-flex align-items-center text-orange" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="100" height="100" viewBox="0 0 231.26 729.5">
                            <path class="cls-1" d="M104.33,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L97.53,9.33c-1.21-3.75.86-7.78,4.61-8.98,3.76-1.22,7.78.85,8.98,4.61l120.14,373.1-120.19,346.65c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                            <path class="cls-1" d="M7.14,729.5c-.78,0-1.57-.13-2.34-.4-3.73-1.29-5.7-5.36-4.41-9.08l118.63-342.14L.35,9.33C-.86,5.58,1.2,1.56,4.95.35c3.77-1.22,7.78.85,8.98,4.61l120.14,373.1L13.88,724.7c-1.02,2.95-3.79,4.8-6.74,4.8Z" />
                        </svg>
                    </a>
                </nav>
            </div>

            <?php
            foreach ($tours as $tour) { ?>
                <div class="slide-item side-intro <?= $tour['id'] == '1' ? 'current-slide' : '' ?>">
                    <!-- share -->
                    <div class="slide-share position-absolute p-1 share-r button-share" style="z-index: 99;">
                        <div class="container-btn">
                            <div class="redes">
                                <a target="_blank" class="bg-blue" href="https://www.facebook.com/sharer/sharer.php?u=https://www.porttainobay.com/<?= $idioma; ?>/discover-beyond"><i class="icon fab fa-facebook-f"></i></a>
                                <a target="_blank" class="bg-blue" href="https://twitter.com/intent/tweet?url=https://www.porttainobay.com/<?= $idioma; ?>/discover-beyond">
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
                                <a target="_blank" class="bg-blue" href="https://api.whatsapp.com/send?text=https://www.porttainobay.com/<?= $idioma; ?>/discover-beyond">
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
                    <div class="slide-button static-button" style="z-index: 9;">
                        <div class="container-button text-center">
                            <a href="<?= $idioma ?>/discover-beyond" class="text-uppercase button-transparent button-orange text-center button-carousel"><strong><?= CAROUSEL_DISCOVER_BEYOND[4] ?></strong></a>
                        </div>
                    </div>
                    <!-- Intro -->
                    <div class="slide-content" style="<?= $tour['id'] == '1' ? 'background: linear-gradient(to bottom, rgba(255, 0, 0, 0), var(--blue-color));' : '' ?>">
                        <span class="slide-title text-1 text-style-1 text-white"><?= $tour['id'] > 9 ? $tour['id'] : '0' . $tour['id']; ?></span>
                        <div class="slide-description">
                            <span class="text-style-4 text-white"><?= $tour['tourName'] ?></span>
                            <div class="description text-white">
                                <p class="text-style-12">

                                    <?= $tour['content'] ?>
                                </p>
                            </div>

                        </div>
                        <div class="slide-button button-mobile static-button d-md-none" style="z-index: 9;">
                            <div class="container-button text-center">
                                <a id="button-carrusel" href="<?= $idioma ?>/discover-beyond" class="text-uppercase button-transparent button-orange text-center button-carousel">
                                    <strong><?= CAROUSEL_DISCOVER_BEYOND[4] ?></strong>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- Image -->

                </div>
            <?php } ?>
        </section>
        <script>

        </script>