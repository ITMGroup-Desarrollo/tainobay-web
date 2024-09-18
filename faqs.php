<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-faqs.php");
include_once("include/lang/{$idioma}-contact.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>

</head>

<body class="shock-body">

    <?php include("include/header.php"); ?>

    <!-- Main -->
    <main id="faq-page" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-overlay">
            <div class="banner d-flex align-items-center">
                <div class="content-wrapper top-zero ">
                    <!-- Intro -->
                    <div class="basic-intro text-center">
                        <h1 class="title white text-1 banner-title text-uppercase fw-bold">
                            <?= TITULOS_BANNER_FAQS[0];  ?>
                        </h1>
                        <p class="text-white banner-subtitle"><?php echo TITULOS_BANNER_FAQS[1];  ?></p>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <div class="banner-fixed" style="background-image:url('assets/images/media/header-faqs-port-raino-bay.webp')">

                    </div>
                    <!-- <img src="assets/images/media/bg-faqs.jpg" class="image vh-65 fit-cover" alt="This is an example description for this item." /> -->
                </div>
                <!-- Overlay -->
                <div class="overlay-banner"></div>
            </div>
        </section>

        <!-- Title -->
        <section class="shock-section has-holder pb-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
            <div class="container max-w-85">

                <div class="basic-intro">
                    <h2 class="text-blue text-style-7 text-uppercase mb-1">
                        <?= TITULOS_FAQS[0] ?>
                    </h2>
                    <p class="text-style-12 text-blue"><?= TITULOS_FAQS[1] ?></p>
                </div>
            </div>
        </section>

        <!-- FAQ's -->
        <section class="shock-section pt-5 pb-5" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
            <div class="container max-w-65">
                <!-- Collapse -->
                <div class="collapsible">

                    <?php foreach ($faqs as $index => $faq) : ?>
                        <div class="collapse-group mb-0 d-flex">
                            <!-- Icon Taino Bay -->
                            <div class="text-blue wrapper-icon me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 494.38 497.68">
                                    <defs>
                                        <style>
                                            .cls-2 {
                                                font-family: BrandonGrotesque-Black, 'Brandon Grotesque';
                                                font-size: 342.34px;
                                                font-weight: 800;
                                            }
                                        </style>
                                    </defs>
                                    <path fill="currentColor" d="M488.94,241.75c-18.41,0-34.74-8.92-45-22.63-12.06-88.04-81.98-157.86-170.09-169.74-12.91-10.32-21.22-26.17-21.22-43.94,0-2.99-2.43-5.44-5.44-5.44s-5.44,2.45-5.44,5.44c0,17.77-8.3,33.62-21.21,43.94-88.1,11.87-158.03,81.67-170.09,169.7-10.27,13.73-26.61,22.66-45.03,22.66-2.99,0-5.42,2.42-5.42,5.44s2.43,5.44,5.42,5.44c18.61,0,35.09,9.12,45.34,23.09,12.85,85.8,80.75,153.83,166.5,166.84,14.78,10.15,24.49,27.16,24.49,46.4,0,2.99,2.43,5.42,5.44,5.42s5.44-2.43,5.44-5.42c0-19.24,9.72-36.25,24.5-46.4,85.75-13.02,153.65-81.07,166.49-166.88,10.25-13.95,26.72-23.06,45.32-23.06,2.99,0,5.44-2.42,5.44-5.44s-2.45-5.44-5.44-5.44M419.04,291.61c-16.49,62.31-66.04,111.3-128.66,126.99-13.83,3.47-28.3,5.33-43.19,5.33s-29.34-1.87-43.18-5.33c-62.65-15.7-112.2-64.7-128.68-127.03-3.83-14.49-5.89-29.7-5.89-45.39s1.94-30.14,5.58-44.3c15.88-61.68,64.14-110.47,125.48-127.19,14.89-4.06,30.53-6.27,46.69-6.27s31.8,2.21,46.69,6.27c61.33,16.72,109.57,65.49,125.46,127.14,3.65,14.18,5.6,29.05,5.6,44.35s-2.07,30.92-5.91,45.43" />
                                    <text class="cls-2" fill="currentColor" transform="translate(169.65 364.16)">
                                        <tspan x="0" y="0">?</tspan>
                                    </text>
                                </svg>
                            </div>

                            <!-- Content -->
                            <div class="w-100 content-faq">
                                <a href="#collapse-<?= $index ?>" class="collapse-toggle parent collapsed justify-content-between button-plus collapsed m-0 py-3" aria-expanded="false" aria-controls="collapse-<?= $index ?>" data-bs-toggle="collapse">
                                    <!-- Title -->
                                    <div class="d-flex align-items-center ">
                                        <h3 class="text-style-11 text-blue mb-0">
                                            <?= $faq['title']; ?>
                                        </h3>
                                    </div>
                                    <!-- Icon plus -->
                                    <div class="text-orange">
                                        <svg class="rotate-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                                            <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32" />
                                        </svg>
                                    </div>
                                </a>
                                <div id="collapse-<?= $index ?>" class="collapse-content collapse text-blue">
                                    <p class="faq-answer"><?= $faq['answer']; ?></p>
                                </div>
                                <!-- separador -->
                                <div class="d-block w-100 mx-auto separator">
                                    <span class="d-block w-100 border-2 border-bottom border-blue"></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <section class="shock-section has-overlay">
            <div class="banner d-flex align-items-center">
                <div class="content-wrapper top-zero ">
                    <!-- Intro -->
                    <div class="basic-intro text-center">
                        <div class="container">
                            <h3 class="white text-1 form-title fw-bold">
                                <?= TITLE_FORM; ?>
                            </h3>
                            <?php include("include/contact-form.php"); ?>
                        </div>

                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <img src="assets/images/media/port-taino-bay-faqs.webp" class="image fit-cover brightness-6" alt="This is an example description for this item." />
                </div>
                <!-- Overlay -->
                <div class="overlay-blue"></div>
            </div>

        </section>

    </main>



    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

</html>