   <?php
    if ($page == 'points-of-interest.php' or $page == 'what-to-do.php' or $page == 'map.php' or $page == 'thecoffeefactorymenu.php') {
        $logo = "logo-dark.svg";
        $menu = "scheme-2";
    } else {
        $logo = "logo.svg";
        $menu = "scheme-1";
    }

    ?>
   <!-- Preloader -->
   <div id="preloader" class="preloader black" data-bg-image="assets/images/media/precarga.png"></div>

   <!-- Header -->
   <header id="header" class="shock-header">
       <!-- Navbar -->
       <nav id="navbar" class="navbar navbar-expand-lg absolute">
           <div class="container-fluid">
               <!-- Brand -->
               <a class="navbar-brand" href="<?php echo $path; ?><?php echo $idioma; ?>/home">
                   <!-- <div class="site-title">Site Title</div> -->
                   <img src="assets/images/<?php echo $logo ?>" data-logo-alt="assets/images/<?php echo $logo ?>" data-logo-mobile="assets/images/<?php echo $logo ?>" alt="Shock Theme" class="logo" width="150px" />
               </a>
               <!-- Menu toggle -->
               <div id="menu-toggle" class="menu-toggle is-inactive magnetic-effect <?php echo $menu; ?> accent">
                   <div class="menu-toggle-icon">
                       <div class="menu-toggle-container">
                           <span class="menu-toggle-line-top"></span>
                           <span class="menu-toggle-line-middle"></span>
                           <span class="menu-toggle-line-bottom"></span>
                       </div>
                   </div>
                   <div class="menu-toggle-circle">
                       <svg class="menu-toggle-menu-toggle-svg-circle">
                           <path class="menu-toggle-path-circle" fill="none" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                       </svg>
                   </div>
                   <svg width="0" height="0">
                       <mask id="menu-toggle-mask">
                           <path class="path-mask" fill="none" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                       </mask>
                   </svg>
                   <div class="menu-toggle-path">
                       <div class="path-animation">
                           <div class="path-rotation"></div>
                       </div>
                   </div>
               </div>
               <!-- Menu grid -->
               <nav id="menu-grid" class="menu-grid scheme-1 accent">
                   <div class="menu-grid-item item-1" data-direction="bt">
                       <div class="menu-grid-item-inner">

                           <!-- Main menu -->
                           <div class="menu-grid-main">
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/home" class="menu-grid-main-item menu-item"><?php echo MENU[0]; ?></a>
                               <!-- <a href="<?php echo $path; ?><?php echo $idioma; ?>/what-to-do" class="menu-grid-main-item menu-item"><?php echo MENU[1]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/points-of-interest" class="menu-grid-main-item menu-item"><?php echo MENU[2]; ?></a> -->
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/port-experience" class="menu-grid-main-item menu-item"><?php echo MENU[8]; ?></a>
                               <a href="javascript:void(0)" class="menu-grid-main-item menu-item"><?php echo MENU[9]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/map" class="menu-grid-main-item menu-item"><?php echo MENU[3]; ?></a>
                               <!--<a href="<?php //echo $path; 
                                            ?><?php //echo $idioma; 
                                                ?>/arrivals"
                                   class="menu-grid-main-item menu-item"><?php //echo MENU[4]; 
                                                                            ?></a>-->
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/blog_all" class="menu-grid-main-item menu-item"><?php echo MENU[5]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/faqs" class="menu-grid-main-item menu-item"><?php echo MENU[6]; ?></a>
                               <a href="<?php echo $path; ?><?php echo $idioma; ?>/contact" class="menu-grid-main-item menu-item"><?php echo MENU[7]; ?></a>
                               <div class="language">
                                   <?php $_lang = explode('.', $page) ?>
                                   <a href="<?php echo $path; ?>es/<?php echo $_lang[0] ?>" class="">Español</a> |
                                   <a href="<?php echo $path; ?>en/<?php echo $_lang[0] ?>" class="">English</a>
                               </div>
                           </div>

                       </div>
                   </div>
                   <div class="menu-grid-item item-2" data-direction="lr">
                       <div class="menu-grid-item-inner">
                           <!-- Image -->
                           <a href="javascript:void(0)" class="menu-grid-item-image">
                               <img src="assets/images/media/img-menu-1.jpg" alt="Image name" class="image" />
                           </a>
                       </div>
                   </div>
                   <div class="menu-grid-item item-3" data-direction="bt">
                       <div class="menu-grid-item-inner">

                           <!-- Links -->
                           <div class="menu-grid-minor">

                               <h5 class="text-white">
                                   <?php echo TEXT_MENU[0];  ?>
                               </h5>
                               <div class="list-wrapper">
                                   <ul class="icon-h-list">
                                       <li class="ms-0 item">
                                           <a href="https://www.facebook.com/TainobayPuertoPlata/?mibextid=ZbWKwL" class="link white primary-hover hover-rotate" target="_blank"><i class="icon fab fa-facebook-f"></i></a>
                                       </li>
                                       <li class="item">
                                           <a href="https://instagram.com/porttainobay?igshid=OGQ2MjdiOTE=" class="link white primary-hover hover-rotate" target="_blank"><i class="icon fab fa-instagram"></i></a>
                                       </li>
                                       <li class="item">
                                           <a href="https://www.tripadvisor.com.mx/Attraction_Review-g147290-d23803203-Reviews-Taino_Bay_Puerto_Plata-Puerto_Plata_Puerto_Plata_Province_Dominican_Republic.html" class="link white primary-hover hover-rotate" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 2304 1408">
                                                   <path d="M651 805q0 39-27.5 66.5T558 899q-39 0-66.5-27.5T464 805q0-38 27.5-65.5T558 712q38 0 65.5 27.5T651 805m1154-1q0 39-27.5 66.5T1711 898t-66.5-27.5T1617 804t27.5-66t66.5-27t66.5 27t27.5 66m-1040 1q0-79-56.5-136T572 612t-136.5 56.5T379 805t56.5 136.5T572 998t136.5-56.5T765 805m1153-1q0-80-56.5-136.5T1725 611q-79 0-136 56.5T1532 804t56.5 136.5T1725 997t136.5-56.5T1918 804m-1068 1q0 116-81.5 197.5T572 1084q-116 0-197.5-82T293 805t82-196.5T572 527t196.5 81.5T850 805m1154-1q0 115-81.5 196.5T1725 1082q-115 0-196.5-81.5T1447 804t81.5-196.5T1725 526q116 0 197.5 81.5T2004 804m-964 3q0-191-135.5-326.5T578 345q-125 0-231 62T179 575.5T117 807t62 231.5T347 1207t231 62q191 0 326.5-135.5T1040 807m668-573q-254-111-556-111q-319 0-573 110q117 0 223 45.5T984.5 401t122 183t45.5 223q0-115 43.5-219.5t118-180.5T1491 284t217-50m479 573q0-191-135-326.5T1726 345t-326.5 135.5T1264 807t135.5 326.5T1726 1269t326-135.5T2187 807m-266-566h383q-44 51-75 114.5T2189 470q110 151 110 337q0 156-77 288t-209 208.5t-287 76.5q-133 0-249-56t-196-155q-47 56-129 179q-11-22-53.5-82.5T1024 1168q-80 99-196.5 155.5T578 1380q-155 0-287-76.5T82 1095T5 807q0-186 110-337q-9-51-40-114.5T0 241h365Q514 141 720 84.5T1152 28q224 0 421 56t348 157" />
                                               </svg></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="menu-grid-item item-4" data-direction="rl">
                       <div class="menu-grid-item-inner">
                           <!-- Image -->
                           <a href="javascript:void(0)" class="menu-grid-item-image">
                               <img src="assets/images/media/img-menu-2.jpg" alt="Image name" class="image" />
                           </a>
                       </div>
                   </div>
                   <div class="menu-grid-item item-5 " data-direction="tb">
                       <div class="menu-grid-item-inner ">
                           <!-- Contacts -->
                           <div class="menu-grid-minor text-white ">
                               <div class="m-4">

                                   <h5 class="font-extrabold">
                                       <strong><?php echo TEXT_MENU[1];  ?></strong>
                                   </h5>
                                   <a href="mailto:info@porttainobay.com" class="text-white cursor-pointer link text-sm">info@porttainobay.com</a>
                                   <address class="text-xs">
                                       Av. Antigua Via Férrea, Muelle
                                       Turístico entre Av.
                                       Penetración
                                       Portuaria y Prolongación Duarte. Puerto Plata 57000 República Dominicana.
                                   </address>
                               </div>

                           </div>
                       </div>
                   </div>
           </div>
       </nav>
       </div>
       </nav>
   </header>