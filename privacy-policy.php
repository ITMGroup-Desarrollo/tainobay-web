<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-privacy-policy.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
    <style>
        .shock-header .navbar {
            background-color: var(--blue-color);
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .shock-header .navbar.absolute {
            position: relative;
        }

        .shock-header .navbar.fixed-on-scroll.fixed-top {
            position: fixed !important;
        }

        section.map-section {
            margin-top: 3rem;
        }

        @media (min-width: 1024px) {
            .shock-header .navbar {
                padding-top: 0;
                padding-bottom: 0;
            }

            .shock-header #menu-toggle.show {
                display: none;
            }

            .shock-header #menu-fixed,
            .shock-header #menu-fixed.show {
                display: flex;
                visibility: visible;
                opacity: 1;
                align-items: center;
            }
        }
    </style>
</head>

<body class="shock-body">
    <?php include("include/gtm-body.php"); ?>
    <?php include("include/header.php"); ?>

    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-holder">
            <div class="container max-w-85">
                <!-- Intro -->
                <div class="basic-intro"><!-- text-center mb-35 -->
                    <h1 class="title black text-center">
                        <span class="text-1 text-style-3">
                            <?php echo PRIVACY_POLICY_TXT[0]; ?>
                        </span>
                    </h1>
                    <hr class="gray-25">

                    <div class="side-intro">
                        <div class="description gray txt">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[1]; ?>
                            </p>
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[2]; ?>
                            </p>
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[3]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-7"><?php echo PRIVACY_POLICY_TXT[4]; ?></span>
                            </h2>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[5]; ?>
                            </p>
                        </div>


                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-7"><?php echo PRIVACY_POLICY_TXT[6]; ?></span>
                            </h2>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[7]; ?>
                            </p>
                            <ul style="list-style: none;">
                                <li><?php echo PRIVACY_POLICY_TXT[8]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[9]; ?></li>
                            </ul>
                        </div>

                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-7"><?php echo PRIVACY_POLICY_TXT[10]; ?></span>
                            </h2>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[11]; ?>
                            </p>
                            <ul>
                                <li><?php echo PRIVACY_POLICY_TXT[12]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[13]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[14]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[15]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[16]; ?></li>
                            </ul>
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[17]; ?>
                            </p>
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[18]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-7"><?php echo PRIVACY_POLICY_TXT[19]; ?></span>
                            </h2>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[20]; ?>
                            </p>
                            <ul style="list-style: none;">
                                <li><?php echo PRIVACY_POLICY_TXT[21]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[22]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[23]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[24]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[25]; ?></li>
                            </ul>
                        </div>


                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-7"><?php echo PRIVACY_POLICY_TXT[26]; ?></span>
                            </h2>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[27]; ?>
                            </p>
                            <ul style="list-style: none;">
                                <li><?php echo PRIVACY_POLICY_TXT[28]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[29]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[30]; ?></li>
                                <li><?php echo PRIVACY_POLICY_TXT[31]; ?></li>
                            </ul>
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[32]; ?>
                            </p>
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[33]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-7"><?php echo PRIVACY_POLICY_TXT[34]; ?></span>
                            </h2>
                        </div>
                        <div class="description gray txt mb-25">
                            <p>
                                <?php echo PRIVACY_POLICY_TXT[35]; ?>
                            </p>
                        </div>

                        <hr class="gray-25 mt-40 mb-40">

                        <div class="basic-intro mt-25">
                            <h2 class="title black">
                                <span class="text-1 text-style-3"><?php echo WIFI_PRIVACY_POLICY_TXT[0]; ?></span>
                            </h2>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[1]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[2]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[3]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[4]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <ul>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[5]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[6]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[7]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[8]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[9]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[10]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[11]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[12]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[13]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[14]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[15]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[16]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[17]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[18]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[19]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[20]; ?></li>
                                <li><strong><?php echo WIFI_PRIVACY_POLICY_TXT[21]; ?></strong> <?php echo WIFI_PRIVACY_POLICY_TXT[22]; ?></li>
                            </ul>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[23]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[24]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[25]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[26]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[27]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[28]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[29]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[30]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[31]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[32]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <strong><?php echo WIFI_PRIVACY_POLICY_TXT[33]; ?></strong>
                            </p>
                            <ul>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[34]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[35]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[36]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[37]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[38]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[39]; ?></li>
                            </ul>
                            <p class="mt-15">
                                <strong><?php echo WIFI_PRIVACY_POLICY_TXT[40]; ?></strong>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[41]; ?>
                            </p>
                            <p class="mt-15">
                                <strong><?php echo WIFI_PRIVACY_POLICY_TXT[42]; ?></strong>
                            </p>
                            <ul>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[43]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[44]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[45]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[46]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[47]; ?></li>
                            </ul>
                            <p class="mt-15">
                                <strong><?php echo WIFI_PRIVACY_POLICY_TXT[48]; ?></strong>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[49]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[50]; ?>
                            </p>
                            <ul>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[51]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[52]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[53]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[54]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[55]; ?></li>
                            </ul>
                            <p class="mt-15">
                                <?php echo WIFI_PRIVACY_POLICY_TXT[56]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[57]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[58]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <ul>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[59]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[60]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[61]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[62]; ?></li>
                            </ul>
                            <p class="mt-15">
                                <?php echo WIFI_PRIVACY_POLICY_TXT[63]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[64]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[65]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[66]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[67]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[68]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[69]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[70]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[71]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[72]; ?>
                            </p>
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[73]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[74]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[75]; ?>
                            </p>
                            <ul>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[76]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[77]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[78]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[79]; ?></li>
                            </ul>
                            <p class="mt-15">
                                <?php echo WIFI_PRIVACY_POLICY_TXT[80]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[81]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[82]; ?>
                            </p>
                        </div>

                        <div class="basic-intro mt-25">
                            <h3 class="title black">
                                <span class="text-1 text-style-7"><?php echo WIFI_PRIVACY_POLICY_TXT[83]; ?></span>
                            </h3>
                        </div>
                        <div class="description gray txt mb-25">
                            <p>
                                <?php echo WIFI_PRIVACY_POLICY_TXT[84]; ?>
                            </p>
                            <ul>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[85]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[86]; ?></li>
                                <li><?php echo WIFI_PRIVACY_POLICY_TXT[87]; ?></li>
                            </ul>
                            <p class="mt-15">
                                <?php echo WIFI_PRIVACY_POLICY_TXT[88]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
</body>

</html>