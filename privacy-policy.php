<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-privacy-policy.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php include("include/head.php"); ?>
</head>

<body class="shock-body">

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