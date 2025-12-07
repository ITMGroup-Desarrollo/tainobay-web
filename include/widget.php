    <!-- Side Widget -->
    <div class="side-widget to-left d-only-desktop">
        <div class="item">
            <span class="widget label-icons">
                <a href="https://www.facebook.com/TainobayPuertoPlata/" class="link black black-hover" target="_self"><i class="icon fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/tainobay_puertoplata/" class="link black black-hover" target="_self"><i class="icon fab fa-instagram"></i></a>
                <a href="https://www.tripadvisor.com.mx/Attraction_Review-g147290-d23803203-Reviews-Taino_Bay_Puerto_Plata-Puerto_Plata_Puerto_Plata_Province_Dominican_Republic.html" class="link black black-hover" target="_self"><img src="assets/images/icons/tripadvisor-black.png" width="18" height="18" alt="Icono Tripadvisor"></a>
                <span class="label-line black"></span>
            </span>
        </div>
    </div>

    <!-- Scroll to Top -->
    <!-- <div class="side-widget to-right invert-color mix-blend-difference">
        <div class="item align-v-bottom">
            <a href="#" class="link hover-up">
                <span class="widget float-icon">
                    <i class="fa-solid fa-arrow-up-long icon"></i>
                </span>
            </a>
        </div>
    </div>
-->

    <!-- Modal -->
    <div id="modal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog max-w-50 modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-header pb-0">
                    <!-- Intro -->
                    <div class="basic-intro">
                        <h2 class="title black" id="title-modal">
                        </h2>
                    </div>
                    <i class="fa-solid fa-xmark close-button black primary-hover" data-bs-dismiss="modal" aria-label="Close"></i>
                </div>
                <div class="modal-body pt-0" id="modal-body">


                </div>
            </div>
        </div>
    </div>



    <!-- Cursor -->
    <svg class="cursor-effect primary" width="220" height="220" viewBox="0 0 220 220">
        <defs>
            <filter id="cursor-effect-filter" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
                <feTurbulence type="fractalNoise" baseFrequency="0" numOctaves="1" result="warp"></feTurbulence>
                <feOffset dx="-30" result="warpOffset"></feOffset>
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="20" in="SourceGraphic" in2="warpOffset"></feDisplacementMap>
            </filter>
        </defs>
        <circle class="cursor-effect-inner" cx="110" cy="110" r="20"></circle>
    </svg>
