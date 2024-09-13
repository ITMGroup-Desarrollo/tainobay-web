<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-map.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/css/vendor/map.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>

<body class="shock-body">
    <?php include("include/header.php"); ?>
    <!-- Main -->
    <main id="main" class="shock-main">
        <!-- Banner -->
        <section class="shock-section has-holder">
            <div class="container max-w-85">
                <!-- Intro -->
                <div class="basic-intro mb-35 text-center">
                    <h1 class="title black">
                        <span class="text-1 text-style-3"><?php echo TITULOS_MAP[0]; ?>
                        </span>
                        <span class="text-2 text-style-4 text-italic"><?php echo TITULOS_MAP[1]; ?> <mark class="animated-underline primary">
                                <?php echo TITULOS_MAP[2]; ?> </mark></span>
                    </h1>
                    <hr class="gray-25">
                </div>
            </div>
        </section>
        <!-- Content -->
        <section class="shock-section map-section">
            <div class="filter-container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" >
                <div class="leaflet-control-filter service" >
                    <div class="filter-header">
                        <span class="header-text">PORT EXPERIENCE</span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close"></button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="1">
                                <td><img src="assets/icons/map/retail.svg" alt="retail"></td>
                                <td>RETAIL</td>
                            </tr>
                            <tr data-marker-id="2">
                                <td><img src="assets/icons/map/restrooms.svg" alt="restrooms"></td>
                                <td>RESTROOMS</td>
                            </tr>
                            <tr data-marker-id="1">
                                <td><img src="assets/icons/map/retail.svg" alt="retail"></td>
                                <td>RETAIL</td>
                            </tr>
                            <tr data-marker-id="2">
                                <td><img src="assets/icons/map/restrooms.svg" alt="restrooms"></td>
                                <td>RESTROOMS</td>
                            </tr>
                            <tr data-marker-id="1">
                                <td><img src="assets/icons/map/retail.svg" alt="retail"></td>
                                <td>RETAIL</td>
                            </tr>
                            <tr data-marker-id="2">
                                <td><img src="assets/icons/map/restrooms.svg" alt="restrooms"></td>
                                <td>RESTROOMS</td>
                            </tr>
                            <tr data-marker-id="1">
                                <td><img src="assets/icons/map/retail.svg" alt="retail"></td>
                                <td>RETAIL</td>
                            </tr>
                            <tr data-marker-id="2">
                                <td><img src="assets/icons/map/restrooms.svg" alt="restrooms"></td>
                                <td>RESTROOMS</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="leaflet-control-filter restaurants" >
                    <div class="filter-header">
                        <span class="header-text">RESTAURANTS</span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close"></button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="leaflet-control-filter fun" >
                    <div class="filter-header">
                        <span class="header-text">ENTERTAINMENT</span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close"></button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="leaflet-control-filter shop" >
                    <div class="filter-header">
                        <span class="header-text">SHOPPING EXPERIENCE</span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close">
                        </button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/bar.svg" alt="bar"></td>
                                <td>BAR</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/food.svg" alt="food"></td>
                                <td>FOOD</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="map">
            </div>
            
        </section>



    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

<script src="assets/js/vendor/map.js"></script>

</html>