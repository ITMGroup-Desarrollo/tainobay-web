<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-map.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
</head>

<body class="shock-body">
    <?php include("include/gtm-body.php"); ?>
    <?php include("include/header.php"); ?>
    <!-- Main -->
    <main id="main" class="shock-main">
        <!-- banner -->
        <section class="shock-section has-overlay">
            <div class="banner d-flex align-items-center">
                <div class="content-wrapper top-zero ">
                    <!-- Intro -->
                    <div class="basic-intro text-center">
                        <h1 class="title white text-1 banner-title text-uppercase fw-bold">
                            <?= TITULOS_MAP[0]; ?>
                        </h1>
                        <p class="text-white banner-subtitle"><?= TITULOS_MAP[1]; ?></p>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed" style="background-image:url('assets/images/media/header-contacto.jpg')">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-banner"></div>
            </div>
        </section>
        <!-- Content -->
        <section class="shock-section pb-5">
            <div class="container max-w-85">

                <!-- Image -->
                <div class="stretched-section">
                    <figure class="figure">
                        <img src="assets/images/media/Mapa-Taino-Bay.jpg" class="image shadow rounded" alt="<?php echo SITIO; ?>">
                    </figure>
                </div>
    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

</html>