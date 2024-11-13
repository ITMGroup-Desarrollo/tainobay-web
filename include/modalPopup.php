    <!-- Vendor JavaScript -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/inview.min.js"></script>
    <script src="assets/js/vendor/menu-engine.min.js"></script>
    <script src="assets/js/vendor/menu-grid.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/swiper.min.js"></script>
    <script src="assets/js/vendor/anime.min.js"></script>
    <script src="assets/js/vendor/dynamic-slider.min.js"></script>
    <script src="assets/js/vendor/shuffle.min.js"></script>
    <script src="assets/js/vendor/stickybits.min.js"></script>
    <script src="assets/js/vendor/bricklayer.min.js"></script>
    <script src="assets/js/vendor/lightbox.min.js"></script>
    <script src="assets/js/vendor/typed.min.js"></script>
    <script src="assets/js/vendor/progressbar.min.js"></script>
    <script src="assets/js/vendor/map-styles.min.js"></script>
    <script src="assets/js/vendor/magnetic-effect.min.js"></script>
    <script src='assets/js/vendor/gsap.min.js'></script>
    <script src="assets/js/vendor/aos.min.js"></script>
    <script src="assets/js/vendor/lax.min.js"></script>
    <script src="assets/js/vendor/cursor-effect.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <!-- Main JavaScript -->
    <script src="assets/js/main.js"></script>
    <script>
        $("#flip").flipBook({
            pages: [{
                src: "assets/pdf/port-experience/boat-bar.pdf"
            }],
            lightBox: true,
            lightBoxFullscreen: true,
            layout: 2,
            icons: 'material',
            btnSelect: {
                enabled: false
            },
            btnPrint: {
                enabled: false
            },
            btnDownloadPages: {
                enabled: false
            },
            btnDownloadPdf: {
                enabled: false
            },
            btnBookmark: {
                enabled: false
            },
            btnToc: {
                enabled: false
            }

        });

        // function ventanaModal(url, title) {
        //     let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById(
        //         'modal')) // Returns a Bootstrap modal instance

        //     // $("#title-modal").html(title);
        //     // $("#modal-body").html(`<div style="width:100%;"><objet data="${url}" type="application/pdf"><embed src="${url}" type="application/pdf" /></object></div>`);
        //     $("#modal-body").html(`<embed src="${url}" width="100%" height="650px" type="application/pdf">`);
        //     modal.show();

        // }
    </script>