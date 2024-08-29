<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-map.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>
<style>
    /* Estilos para el control personalizado */
    .leaflet-control-filter {
        background: white;
        padding: 5px 5px 20px 5px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }

    .leaflet-control-filter table {
        margin: 0;
        border-collapse: collapse;
        width: 100%;
    }

    .leaflet-control-filter td {
        padding: 5px;
    }

    .leaflet-control-filter img {
        width: 24px;
        height: 24px;
    }

    .tabla-icons tr {
        cursor: pointer;
    }

    /* Estilo para el hover de la fila */
    .leaflet-control-filter tr:hover {
        background-color: #f0f0f0;
        cursor: pointer;
    }

    .filter-header {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .minimize-btn {
        margin-bottom: -1rem;
        background-color: transparent;
        border: none;
        font-size: 16px;
        cursor: pointer;
    }

    .filter-content {
        margin-top: 10px;
    }
</style>

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
        <section class="shock-section pb-5">
            <div class="container max-w-85">

                <!-- Image -->
                <div class="stretched-section">
                    <figure class="figure">
                        <div id="map" style="height: 900px; width: 1400px" class="stretched-section">
                        </div>
                    </figure>
                </div>

            </div>
        </section>

    </main>
    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>

</body>

<script src="assets/js/vendor/map.js"></script>

</html>