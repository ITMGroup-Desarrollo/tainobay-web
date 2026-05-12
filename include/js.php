<!-- Vendor JavaScript -->
<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/vendor/imagesloaded.pkgd.min.js" defer></script>
<script src="assets/js/vendor/inview.min.js" defer></script>
<script src="assets/js/vendor/menu-engine.min.js" defer></script>
<script src="assets/js/vendor/menu-grid.min.js" defer></script>
<script src="assets/js/vendor/bootstrap.min.js" defer></script>
<script src="assets/js/vendor/swiper.min.js" defer></script>
<script src="assets/js/vendor/anime.min.js" defer></script>
<script src="assets/js/vendor/dynamic-slider.min.js" defer></script>
<script src="assets/js/vendor/shuffle.min.js" defer></script>
<script src="assets/js/vendor/stickybits.min.js" defer></script>
<script src="assets/js/vendor/bricklayer.min.js" defer></script>
<script src="assets/js/vendor/lightbox.min.js" defer></script>
<script src="assets/js/vendor/typed.min.js" defer></script>
<script src="assets/js/vendor/progressbar.min.js" defer></script>
<script src="assets/js/vendor/map-styles.min.js" defer></script>
<script src="assets/js/vendor/magnetic-effect.min.js?v=2.0" defer></script>
<script src='assets/js/vendor/gsap.min.js' defer></script>
<script src="assets/js/vendor/aos.min.js" defer></script>
<script src="assets/js/vendor/lax.min.js" defer></script>
<script src="assets/js/vendor/cursor-effect.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" defer></script>

<!-- Main JavaScript -->
<script src="assets/js/main.js" defer></script>
<script>
    function ventanaModal(id, title) {
        let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById(
            'modal')) // Returns a Bootstrap modal instance

        $("#title-modal").html(title);
        $.ajax({
            cache: false,
            url: "ajax/ajax-descripcion.php",
            data: {
                id: id
            },
            dataType: "html",
            type: "post",
            success: function (retorno) {
                modal.show();
                $("#modal-body").html(retorno);
            }

        })

    }
</script>