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
            <div class="filter-container" data-aos="zoom-out-up" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                <!-- shop -->
                <div class="leaflet-control-filter shop">
                    <div class="filter-header">
                        <span class="header-text"><?php echo TABLAS_MAP[0]; ?></span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close">
                        </button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="20">
                                <td><img src="assets/icons/map/retail.svg" alt="DIAMONDS"></td>
                                <td>DIAMONDS</td>
                            </tr>
                            <tr data-marker-id="21">
                                <td><img src="assets/icons/map/retail.svg" alt="DUFRY"></td>
                                <td>DUFRY</td>
                            </tr>
                            <tr data-marker-id="22">
                                <td><img src="assets/icons/map/retail.svg" alt="BLUE-STONE"></td>
                                <td>BLUE STONE</td>
                            </tr>
                            <tr data-marker-id="38">
                                <td><img src="assets/icons/map/retail.svg" alt="MUSEO-DEL-TABACO"></td>
                                <td>MUSEO DEL TABACO</td>
                            </tr>
                            <tr data-marker-id="23">
                                <td><img src="assets/icons/map/retail.svg" alt="MORENA-MIA"></td>
                                <td>MORENA MIA</td>
                            </tr>
                            <tr data-marker-id="24">
                                <td><img src="assets/icons/map/retail.svg" alt="PAWS-BY-THE-SEA"></td>
                                <td>PAWS BY THE SEA</td>
                            </tr>
                            <tr data-marker-id="25">
                                <td><img src="assets/icons/map/retail.svg" alt="TSUNAMI-XL"></td>
                                <td>TSUNAMI XL</td>
                            </tr>
                            <tr data-marker-id="26">
                                <td><img src="assets/icons/map/retail.svg" alt="PIRAÑA-JOE"></td>
                                <td>PIRAÑA JOE</td>
                            </tr>
                            <tr data-marker-id="27">
                                <td><img src="assets/icons/map/retail.svg" alt="ISLAND-LIFE- SURF-SHOP"></td>
                                <td>ISLAND LIFE - SURF SHOP</td>
                            </tr>
                            <tr data-marker-id="28">
                                <td><img src="assets/icons/map/retail.svg" alt="DOMINICAN-THINGS"></td>
                                <td>DOMINICAN-THINGS</td>
                            </tr>
                            <tr data-marker-id="29">
                                <td><img src="assets/icons/map/retail.svg" alt="CHRISTMAS-BY-THE-SEA"></td>
                                <td>CHRISTMAS BY THE SEA</td>
                            </tr>
                            <tr data-marker-id="30">
                                <td><img src="assets/icons/map/retail.svg" alt="RUTA-DE-LAS-INDAS"></td>
                                <td>RUTA DE LAS INDAS</td>
                            </tr>
                            <tr data-marker-id="31">
                                <td><img src="assets/icons/map/retail.svg" alt="THE-TIE-DYE-HUT"></td>
                                <td>THE TIE DYE HUT</td>
                            </tr>
                            <tr data-marker-id="32">
                                <td><img src="assets/icons/map/retail.svg" alt="PIÑA-COLADA-BOUTIQUE"></td>
                                <td>PIÑA COLADA BOUTIQUE</td>
                            </tr>
                            <tr data-marker-id="33">
                                <td><img src="assets/icons/map/retail.svg" alt="SHARK-ATTACK"></td>
                                <td>SHARK ATTACK</td>
                            </tr>
                            <tr data-marker-id="34">
                                <td><img src="assets/icons/map/retail.svg" alt="BLOSSOM-SOAP"></td>
                                <td>BLOSSOM SOAP</td>
                            </tr>
                            <tr data-marker-id="35">
                                <td><img src="assets/icons/map/retail.svg" alt="SEA-SALT"></td>
                                <td>SEA SALT</td>
                            </tr>
                            <tr data-marker-id="36">
                                <td><img src="assets/icons/map/retail.svg" alt="LOCAL-ITM"></td>
                                <td>LOCAL ITM</td>
                            </tr>
                            <tr data-marker-id="37">
                                <td><img src="assets/icons/map/retail.svg" alt="MEXICAN-EXPERIENCE-GIFTSHOP-TABACO"></td>
                                <td>MEXICAN EXPERIENCE</td>
                            </tr>

                            <tr data-marker-id="39">
                                <td><img src="assets/icons/map/retail.svg" alt="SILVER-BY-THE-SEA"></td>
                                <td>SILVER BY THE SEA</td>
                            </tr>
                            <tr data-marker-id="40">
                                <td><img src="assets/icons/map/drugstore.svg" alt="TAINO BAY DRUGSTORE"></td>
                                <td>TAINO BAY DRUGSTORE</td>
                            </tr>
                            <tr data-marker-id="41">
                                <td><img src="assets/icons/map/retail.svg" alt="TAINO-LOGO-SHOP"></td>
                                <td>TAINO LOGO SHOP</td>
                            </tr>
                            <tr data-marker-id="42">
                                <td><img src="assets/icons/map/retail.svg" alt="DOMINICAN-YUCAYAQUE"></td>
                                <td>DOMINICAN YUCAYAQUE</td>
                            </tr>
                            <tr data-marker-id="43">
                                <td><img src="assets/icons/map/retail.svg" alt="TURQUESA"></td>
                                <td>TURQUESA</td>
                            </tr>
                            <tr data-marker-id="44">
                                <td><img src="assets/icons/map/retail.svg" alt="NATURAL-BEAUTY"></td>
                                <td>NATURAL BEAUTY</td>
                            </tr>

                            <tr data-marker-id="46">
                                <td><img src="assets/icons/map/retail.svg" alt="DEL-SOL"></td>
                                <td>DEL SOL</td>
                            </tr>
                            <tr data-marker-id="47">
                                <td><img src="assets/icons/map/drugstore.svg" alt="DRUGSTORE"></td>
                                <td>DRUGSTORE</td>
                            </tr>
                            <tr data-marker-id="48">
                                <td><img src="assets/icons/map/retail.svg" alt="VEARI-PIEL"></td>
                                <td>VEARI PIEL</td>
                            </tr>
                            <tr data-marker-id="49">
                                <td><img src="assets/icons/map/retail.svg" alt="ABYSSAL"></td>
                                <td>ABYSSAL</td>
                            </tr>
                            <tr data-marker-id="50">
                                <td><img src="assets/icons/map/retail.svg" alt="VELASCO-HABANOS"></td>
                                <td>VELASCO HABANOS</td>
                            </tr>
                            <tr data-marker-id="45">
                                <td><img src="assets/icons/map/retail.svg" alt="HARD-ROCK-CAFÉ"></td>
                                <td>HARD ROCK CAFÉ</td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!-- restaurants -->
                <div class="leaflet-control-filter restaurants">
                    <div class="filter-header">
                        <span class="header-text"><?php echo TABLAS_MAP[1]; ?></span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close"></button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="73">
                                <td><img src="assets/icons/map/bar.svg" alt="RUM-BAR"></td>
                                <td>RUM BAR</td>
                            </tr>
                            <tr data-marker-id="60">
                                <td><img src="assets/icons/map/bar.svg" alt="BAR-KELOKE"></td>
                                <td>BAR KELOKÉ</td>
                            </tr>
                            
                            <tr data-marker-id="61">
                                <td><img src="assets/icons/map/food.svg" alt="CORTAITO"></td>
                                <td>COFFEE FACTORY</td>
                            </tr>
                            <tr data-marker-id="62">
                                <td><img src="assets/icons/map/food.svg" alt="ICEKERY"></td>
                                <td>ICEKERY</td>
                            </tr>
                            <tr data-marker-id="63">
                                <td><img src="assets/icons/map/bar.svg" alt="MOJITO-BAR"></td>
                                <td>MOJITO BAR</td>
                            </tr>
                            <tr data-marker-id="64">
                                <td><img src="assets/icons/map/food.svg" alt="CANTINA-LATINA"></td>
                                <td>CANTINA LATINA</td>
                            </tr>
                            <tr data-marker-id="65">
                                <td><img src="assets/icons/map/food.svg" alt="MEXICAN-GRILL"></td>
                                <td>MEXICAN GRILL</td>
                            </tr>
                            <tr data-marker-id="66">
                                <td><img src="assets/icons/map/food.svg" alt="BLUE-PARROT"></td>
                                <td>BLUE PARROT</td>
                            </tr>
                            <tr data-marker-id="67">
                                <td><img src="assets/icons/map/food.svg" alt="TACO-LOVER"></td>
                                <td>TACO LOVER</td>
                            </tr>
                            <tr data-marker-id="68">
                                <td><img src="assets/icons/map/bar.svg" alt="MARGARITA-BAR"></td>
                                <td>MARGARITA BAR</td>
                            </tr>
                            <tr data-marker-id="69">
                                <td><img src="assets/icons/map/food.svg" alt="DOM-DOM"></td>
                                <td>DOM DOM</td>
                            </tr>
                            <tr data-marker-id="70">
                                <td><img src="assets/icons/map/bar.svg" alt="HURACAN-LOUNGE-BAR"></td>
                                <td>HURACÁN LOUNGE BAR</td>
                            </tr>
                            <tr data-marker-id="71">
                                <td><img src="assets/icons/map/bar.svg" alt="THE-BOAT-BAR"></td>
                                <td>THE BOAT BAR</td>
                            </tr>
                            <tr data-marker-id="72">
                                <td><img src="assets/icons/map/food.svg" alt="TIKI-TIKI"></td>
                                <td>TIKI TIKI</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- fun -->
                <div class="leaflet-control-filter fun">
                    <div class="filter-header">
                        <span class="header-text"><?php echo TABLAS_MAP[3]; ?></span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close"></button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                            <tr data-marker-id="7">
                                <td><img src="assets/icons/map/experience.svg" alt="POOL"></td>
                                <td>POOL</td>
                            </tr>
                            <tr data-marker-id="8">
                                <td><img src="assets/icons/map/experience.svg" alt="BEACH"></td>
                                <td>BEACH</td>
                            </tr>
                            <tr data-marker-id="1">
                                <td><img src="assets/icons/map/experience.svg" alt="FISH-SPA"></td>
                                <td>FISH SPA</td>
                            </tr>
                            <tr data-marker-id="2">
                                <td><img src="assets/icons/map/experience.svg" alt="MR-RUM-QUEST"></td>
                                <td>MR. RUM QUEST</td>
                            </tr>
                            <tr data-marker-id="3">
                                <td><img src="assets/icons/map/experience.svg" alt="THE-RIVER"></td>
                                <td>THE RIVER</td>
                            </tr>
                            <tr data-marker-id="4">
                                <td><img src="assets/icons/map/experience.svg" alt="SPLASH-SUFRING"></td>
                                <td>SPLASH SURFING</td>
                            </tr>
                            <tr data-marker-id="5">
                                <td><img src="assets/icons/map/experience.svg" alt="SPA WELLNESS RETREATS"></td>
                                <td>SPA WELLNESS RETREAT</td>
                            </tr>
                            <tr data-marker-id="6">
                                <td><img src="assets/icons/map/experience.svg" alt="MONKEY-ISLAND"></td>
                                <td>MONKEY ISLAND</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Service -->
                <div class="leaflet-control-filter service">
                    <div class="filter-header">
                        <span class="header-text"><?php echo TABLAS_MAP[2]; ?></span>
                        <button class="minimize-btn show"><img src="assets/icons/map/x.svg" alt="close"></button>
                    </div>
                    <div class="filter-content">
                        <table class="tabla-icons">
                        <tr data-marker-id="9">
                                <td><img src="assets/icons/map/restrooms.svg" alt="RESTROOMS"></td>
                                <td>RESTROOMS</td>
                            </tr>
                        <tr data-marker-id="10">
                                <td><img src="assets/icons/map/show.svg" alt="SHOWS"></td>
                                <td>SHOWS</td>
                            </tr>
                        <tr data-marker-id="11">
                                <td><img src="assets/icons/map/fruits.svg" alt="MARKET-PLACE"></td>
                                <td>MARKET PLACE</td>
                            </tr>
                        <tr data-marker-id="12">
                                <td><img src="assets/icons/map/camara.svg" alt="PHOTO-SPOT"></td>
                                <td>PHOTO SPOT</td>
                            </tr>
                        <tr data-marker-id="13">
                                <td><img src="assets/icons/map/star.svg" alt="LAST-MINUTE"></td>
                                <td>LAST MINUTE</td>
                            </tr>
                        <tr data-marker-id="14">
                                <td><img src="assets/icons/map/taxi.svg" alt="SHUTTLE"></td>
                                <td>SHUTTLE</td>
                            </tr>
                        <tr data-marker-id="15">
                                <td><img src="assets/icons/map/shorex.svg" alt="SHOREX"></td>
                                <td>PRE-BOOKED SHOREX</td>
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