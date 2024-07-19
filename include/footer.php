    <style>
        .shock-footer{
            background-color: #1c355e;
        }
    </style>
    <!-- Footer -->
    <footer id="footer" class="shock-footer scheme-1 primary" >
        <div class="footer-content focus-trigger">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <!-- Brand -->
                            <a href="index.php" class="footer-brand">
                                <!-- <div class="site-title">Site Title</div> -->
                                <img src="assets/images/logo-white.svg" alt="<?php echo SITIO ?>" class="logo" />

                            </a>
                            <!-- Text -->
                            <div class="footer-text">
                                <p>Av. Antigua Via Férrea, Muelle Turístico
                                    entre Av. Penetración Portuaria y
                                    Prolongación Duarte.
                                    Puerto Plata 57000
                                    República Dominicana.</p>
                            </div>
                        </div>
                        <div class="footer-item">
                            <!-- Button -->
                            <div class="hover-up-down">
                                <a href="mailto:info@porttainobay.com" class="button outline rounded gray primary-hover">
                                    <i class="fa-solid fas fa-envelope icon button-icon left-icon gray white-hover"></i>
                                    <span class="button-text gray white-hover">info@porttainobay.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h6 class="title"><?php echo FOOTER_OURS[0]; ?></h6>
                            <!-- Links list -->
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/" class="nav-link">
                                        <span class="text"><?php echo FOOTER_OURS[1]; ?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/map" class="nav-link">
                                        <span class="text"><?php echo FOOTER_OURS[2]; ?></span>

                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/arrivals" class="nav-link">
                                        <span class="text"><?php echo  FOOTER_OURS[3]; ?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/discover-beyond" class="nav-link">
                                        <span class="text"><?php echo  FOOTER_OURS[4]; ?></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h6 class="title"><?php echo FOOTER_ACTIVITIES[0]; ?></h6>
                            <!-- Tag Cloud -->
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/what-to-do" class="nav-link">
                                        <span class="text"><?php echo FOOTER_ACTIVITIES[1]; ?></span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/points-of-interest" class="nav-link">
                                        <span class="text"><?php echo  FOOTER_ACTIVITIES[2]; ?></span>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h6 class="title"><?php echo FOOTER_PRIVACY[0] ?></h6>
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a href="<?php echo $path; ?><?php echo $idioma; ?>/privacy-policy" class="nav-link">
                                        <span class="text"><?php echo FOOTER_PRIVACY[1] ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="text">© <?php echo date("Y"); ?> - <?php echo SITIO ?>
                All right reserved.
            </div>
        </div>
    </footer>