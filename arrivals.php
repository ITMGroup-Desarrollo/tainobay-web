<?php
include_once("include/config.php");
include_once("include/lang/{$idioma}-arrivals.php");
?>
<!DOCTYPE HTML>
<html lang="<?php echo $idioma; ?>">

<head>

    <?php include("include/head.php"); ?>
    <link rel="stylesheet" href="assets/js/fullcalendar/css/main.css" />
</head>

<body class="shock-body bg-arrivals">

    <?php include("include/header.php"); ?>

    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-holder">
            <div class="container max-w-85">
                <!-- Intro -->
                <div class="basic-intro mb-35 text-center">
                    <h1 class="title black">
                        <span class="text-1 text-style-3 text-white">
                            <?php echo TITULOS_ARRIVALS[0]; ?>
                        </span>
                    </h1>
                    <div class="basic-intro mb-0">
                                <h2 class="title white">
                                    <span class="text-1 text-style-7"><?php echo TITULOS_ARRIVALS[1]; ?></span>
                                </h2>
                            </div>



                    <hr class="gray-25">
                </div>
            </div>
        </section>



        <!-- Content -->
        <section class="shock-section pb-5">
            <div class="container max-w-85">
                <!-- Image -->

                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="stretched-section">
                            <div id='calendar' class="calendario"></div>
                        </div>
                    </div>
                </div>
    </main>

    <?php include("include/widget.php"); ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/js.php"); ?>
    <script src='assets/js/fullcalendar/js/main.min.js'></script>
    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next'
            },
            initialView: 'dayGridMonth',
            locale: '<?php echo $idioma; ?>',
            nowIndicator: true,
            events: [{
                    title: 'NCL ENCORE 330',
                    start: '2022-02-01'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2022-02-01'
                },
                {
                    title: 'OC RIVIERA 240',
                    start: '2022-02-05'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-02-05'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-02-06'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-02-07'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-02-08'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-02-08'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2022-02-09'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-02-09'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2022-02-11'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2022-02-12'
                },
                {
                    title: 'NCL JEWEL 295',
                    start: '2022-02-13'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-02-14'
                },
                {
                    title: 'RCCL ANTHEM 346',
                    start: '2022-02-14'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-02-15'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-02-18'
                },
                {
                    title: 'R. SS SPLENDOR 24',
                    start: '2022-02-19'
                },
                {
                    title: 'SCARLET LADY 270',
                    start: '2022-02-20'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-02-21'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-02-22'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-02-22'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-02-23'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-02-25'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-02-28'
                },




                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-01'
                },
                {
                    title: 'OC MARINA 240',
                    start: '2022-03-03'
                },
                {
                    title: 'CELL CONSTELLATION 294',
                    start: '2022-03-04'
                },
                {
                    title: 'OC RIVIERA 240',
                    start: '2022-03-06'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-03-06'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-03-07'
                },
                {
                    title: 'CEL SUMMIT 294',
                    start: '2022-03-08'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-08'
                },
                {
                    title: 'R. SS SPLENDOR 224',
                    start: '2022-03-09'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-03-09'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-03-10'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2022-03-10'
                },
                {
                    title: 'R. SS MARINER 217',
                    start: '2022-03-13'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-03-14'
                },
                {
                    title: 'CEL APEX 306',
                    start: '2022-03-14'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-15'
                },
                {
                    title: 'OC RIVIERA 240',
                    start: '2022-03-16'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-03-17'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-03-20'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-03-21'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-03-21'
                },
                {
                    title: 'CEL SUMMIT 294',
                    start: '2022-03-22'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-22'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-03-23'
                },
                {
                    title: 'R. SS VOYAGER 207',
                    start: '2022-03-24'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2022-03-25'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-03-27'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-03-28'
                },
                {
                    title: 'CEL APEX 306',
                    start: '2022-03-28'
                },
                {
                    title: 'CEL SUMMIT 294',
                    start: '2022-03-30'
                },
                {
                    title: 'NCL EPIC 330',
                    start: '2022-03-30'
                },
                {
                    title: 'CEL APEX 306',
                    start: '2022-03-31'
                },

                //Abril
                {
                    title: 'NCL ENCORE',
                    start: '2022-04-01'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-04-03'
                },
                {
                    title: 'NCL ESCAPE',
                    start: '2022-04-04'
                },
                {
                    title: 'NCL ENCORE',
                    start: '2022-04-05'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-04-06'
                },
                {
                    title: 'CELL MILLENIUM',
                    start: '2022-04-06'
                },
                {
                    title: 'CEL REFLECTION',
                    start: '2022-04-07'
                },
                {
                    title: 'SS MARINER',
                    start: '2022-04-08'
                },
                {
                    title: 'SS NAVIGATOR',
                    start: '2022-04-10'
                },
                {
                    title: 'CEL REFLECTION',
                    start: '2022-04-11'
                },
                {
                    title: 'NCL ENCORE',
                    start: '2022-04-12'
                },
                {
                    title: 'CEL CONSTELLATION',
                    start: '2022-04-15'
                },
                {
                    title: 'SCARLET DAY',
                    start: '2022-04-17'
                },
                {
                    title: 'NCL GEM',
                    start: '2022-04-17'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-04-18'
                },
                {
                    title: 'CEL SUMMIT',
                    start: '2022-04-19'
                },
                {
                    title: 'NCL ESCAPE',
                    start: '2022-04-21'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-04-27'
                },

                //Mayo
                {
                    title: 'SCARLET LADY',
                    start: '2022-05-01'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-05-04'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-05-06'
                },
                // {
                //  title: 'NCL BREAKAWAY',
                //  start: '2022-05-10'
                // },
                {
                    title: 'SS NAVIGATOR',
                    start: '2022-05-11'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-05-15'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-05-18'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-05-19'
                },
                // {
                //  title: 'NCL BREAKAWAY',
                //  start: '2022-05-24'
                // },
                {
                    title: 'NCL SKY',
                    start: '2022-05-27'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-05-29'
                },



                //Junio
                {
                    title: 'MSC SEAHORE',
                    start: '2022-06-01'
                },
                {
                    title: 'NCL BREAKAWAY',
                    start: '2022-06-07'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-06-12'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-06-13'
                },
                {
                    title: 'NCL BREAKAWAY',
                    start: '2022-06-21'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-06-26'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-06-29'
                },
                {
                    title: 'CEL INFINITY',
                    start: '2022-06-30'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-08-07'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-08-10'
                },
                {
                    title: 'CELEBRITY INFINITY',
                    start: '2022-08-11'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-08-21'
                },
                {
                    title: 'NORWEGIAN SKY',
                    start: '2022-08-23'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-08-24'
                },
                {
                    title: 'CELEBRITY INFINITY',
                    start: '2022-08-25'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-09-04'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-09-06'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-09-07'
                },
                {
                    title: 'CEL INFINITY',
                    start: '2022-09-08'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-09-18'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-09-20'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-09-21'
                },
                {
                    title: 'CEL INFINITY',
                    start: '2022-09-22'
                },
                {
                    title: 'USCGC Joseph Doyle',
                    start: '2022-10-01'
                },
                {
                    title: 'Scarlet Lady',
                    start: '2022-10-02'
                },
                {
                    title: 'USCGC Joseph Doyle',
                    start: '2022-10-03'
                },
                {
                    title: 'NCL Sky',
                    start: '2022-10-04'
                },
                {
                    title: 'MSC Seashore',
                    start: '2022-10-05'
                },
                {
                    title: 'Celebrity Infinity',
                    start: '2022-10-06'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-06'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-13'
                },
                {
                    title: 'Scarlet Lady',
                    start: '2022-10-16'
                },
                {
                    title: 'NCL Leonardo',
                    start: '2022-10-18'
                },
                {
                    title: 'NCL Sky',
                    start: '2022-10-18'
                },
                {
                    title: 'MSC Seashore',
                    start: '2022-10-19'
                },
                {
                    title: 'Celebrity Infinity',
                    start: '2022-10-20'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-20'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-27'
                },
                {
                    title: 'Scarlet Lady',
                    start: '2022-10-30'
                },
                {
                    title: 'Allure OTS',
                    start: '2022-10-31'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2022-11-01'
                },
                {
                    title: 'CEL INFINITY 294',
                    start: '2022-11-01'
                },
                {
                    title: 'MSC SEA SHORE 340',
                    start: '2022-11-02'
                },
                {
                    title: 'RCCL MARINER 312',
                    start: '2022-11-02'
                },
                {
                    title: 'RCCL VOYAGER 312',
                    start: '2022-11-04'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-11-06'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2022-11-06'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2022-11-07'
                },
                {
                    title: 'RCCL JEWEL 294',
                    start: '2022-11-08'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-11-08'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-11-07'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-11-13'
                },
                {
                    title: 'CEL CONSTELLATION294',
                    start: '2022-11-14'
                },
                {
                    title: 'CEL INFINITY 294',
                    start: '2022-11-15'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2022-11-15'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2022-11-16'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-11-18'
                },
                {
                    title: 'MSC SEA SHORE 340',
                    start: '2022-11-18'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-11-20'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-11-21'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2022-11-21'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-11-22'
                },
                {
                    title: 'CEL INFINITY 294',
                    start: '2022-11-22'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-11-23'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-11-25'
                },
                {
                    title: 'OC SIRENA 180',
                    start: '2022-11-26'
                },
                {
                    title: 'NCL GETWAYA 326',
                    start: '2022-11-26'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-11-27'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-11-28'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2022-11-30'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2022-12-02'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-12-04'
                },
                {
                    title: 'R. SS SPLENDERO 224',
                    start: '2022-12-05'
                },
                {
                    title: 'OC MARINA 240',
                    start: '2022-12-06'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-12-07'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2022-12-08'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2022-12-09'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2022-12-09'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-12-10'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-12-10'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-12-11'
                },
                {
                    title: 'RCCL MARINER 312',
                    start: '2022-12-13'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2022-12-13'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-12-14'
                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2022-12-16'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-12-19'
                },
                {
                    title: 'NCL ESCAPE 330',
                    start: '2022-12-21'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-12-21'
                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2022-12-23'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-12-23'
                },
                               
                {
                    title: 'RCCL ODYSSEY 348',
                    start: '2022-12-26'
                },
                {
                    title: 'OC INSIGNIA 180',
                    start: '2022-12-26'
                },
                {
                    image_url: 'assets/images/media/arrival.png',
                    title: 'VALIANT LADY 278',
                    start: '2022-12-27',

                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2022-12-29'
                },
                {
                    title: 'CEL CONSTELLATION294',
                    start: '2022-12-30'
                }
                ,
                {
                    title: 'VALIANT LADY 278',
                    start: '2023-01-01'
                }
                ,
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2023-01-01'
                }
                ,
                {
                    title: 'OC RIVERA 240',
                    start: '2023-01-02'
                }
                ,
                {
                    title: 'RCCL WONDER 362',
                    start: '2023-01-02'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2023-01-05'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2023-01-05'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2023-01-08'
                } 
                ,
                {
                    title: 'NCL ESCAPE 326',
                    start: '2023-01-09'
                },
                {
                    title: 'RCCL VISION 279',
                    start: '2023-01-09'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2023-01-10'
                },
                {
                    title: 'OC RIVERA 240',
                    start: '2023-01-12'
                },
                {
                    title: 'RCCL WONDER 362',
                    start: '2023-01-12'
                }
                ,
                {
                    title: 'CEL BEYOND 327',
                    start: '2023-01-13'
                }
                ,
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2023-01-13'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2023-01-14'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2023-01-15'
                }
                ,
                {
                    title: 'NCL ESCAPE 326',
                    start: '2023-01-16'
                }
                ,
                {
                    title: 'VALIANT LADY 278',
                    start: '2023-01-16'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2023-01-20'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2023-01-20'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2023-01-20'
                },
                {
                    title: 'OC RIVERA 240',
                    start: '2023-01-22'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2023-01-22'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2023-01-22'
                },
                {
                    title: 'NCL PEARL 295',
                    start: '2023-01-25'
                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2023-01-26'
                },
                {
                    title: 'RCCL HARMONY 362',
                    start: '2023-01-26'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2023-01-27'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2023-01-27'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2023-01-27'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2023-01-29'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2023-01-29'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2023-01-30'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2023-01-30'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2023-01-31'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2023-01-31'
                }



            ],
            eventColor: '#fff',
            eventTextColor: '#18355e',
            eventContent: function(arg) {
                let arrayOfDomNodes = []


                // image event
                let imgEventWrap = document.createElement('div')
                if (arg.event.extendedProps.image_url) {
                    let imgEvent = '<img src="' + arg.event.extendedProps.image_url + '" >'
                    imgEventWrap.classList = "fc-event-img"
                    imgEventWrap.innerHTML = imgEvent;
                }

                // title event
                let titleEvent = document.createElement('div')
                if (arg.event._def.title) {
                    titleEvent.innerHTML = arg.event._def.title
                    titleEvent.classList = "fc-event-title fc-sticky"
                }



                arrayOfDomNodes = [imgEventWrap, titleEvent]

                return {
                    domNodes: arrayOfDomNodes
                }
            },


        });
        calendar.render();


    });
    </script> -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        let navegador = navigator.userAgent;
        if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent
            .match(
                /iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) ||
            navigator
            .userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
            console.log("movil");
            var viewCalendar = 'listMonth';
            var heightCalendar = 500;
        } else {
            console.log("desktop");
            var viewCalendar = 'dayGridMonth';
            var heightCalendar
        }

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next'
            },
            initialView: viewCalendar,
            height: heightCalendar,
            locale: '<?php echo $idioma; ?>',
            nowIndicator: true,
            //events: [ /* MUY IMPORTANTE COPIAR SUS EVENTOS */ ],

            events: [{
                    title: 'NCL ENCORE 330',
                    start: '2022-02-01'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2022-02-01'
                },
                {
                    title: 'OC RIVIERA 240',
                    start: '2022-02-05'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-02-05'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-02-06'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-02-07'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-02-08'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-02-08'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2022-02-09'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-02-09'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2022-02-11'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2022-02-12'
                },
                {
                    title: 'NCL JEWEL 295',
                    start: '2022-02-13'
                },
                // {
                //     title: 'NCL ESCAPE 326',
                //     start: '2022-02-14'
                // },
                {
                    title: 'RCCL ANTHEM 346',
                    start: '2022-02-14'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-02-15'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-02-18'
                },
                {
                    title: 'R. SS SPLENDOR 24',
                    start: '2022-02-19'
                },
                {
                    title: 'SCARLET LADY 270',
                    start: '2022-02-20'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-02-21'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-02-22'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-02-22'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-02-23'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-02-25'
                },
                // {
                //     title: 'NCL ESCAPE 326',
                //     start: '2022-02-28'
                // },




                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-01'
                },
                {
                    title: 'OC MARINA 240',
                    start: '2022-03-03'
                },
                {
                    title: 'CELL CONSTELLATION 294',
                    start: '2022-03-04'
                },
                {
                    title: 'OC RIVIERA 240',
                    start: '2022-03-06'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-03-06'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-03-07'
                },
                {
                    title: 'CEL SUMMIT 294',
                    start: '2022-03-08'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-08'
                },
                {
                    title: 'R. SS SPLENDOR 224',
                    start: '2022-03-09'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-03-09'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-03-10'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2022-03-10'
                },
                {
                    title: 'R. SS MARINER 217',
                    start: '2022-03-13'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-03-14'
                },
                {
                    title: 'CEL APEX 306',
                    start: '2022-03-14'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-15'
                },
                {
                    title: 'OC RIVIERA 240',
                    start: '2022-03-16'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-03-17'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-03-20'
                },
                {
                    title: 'CEL REFLECTION 319',
                    start: '2022-03-21'
                },
                {
                    title: 'MSC SEASHORE 340',
                    start: '2022-03-21'
                },
                {
                    title: 'CEL SUMMIT 294',
                    start: '2022-03-22'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-03-22'
                },
                {
                    title: 'CEL MILLENNIUM 294',
                    start: '2022-03-23'
                },
                {
                    title: 'R. SS VOYAGER 207',
                    start: '2022-03-24'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2022-03-25'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2022-03-27'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-03-28'
                },
                {
                    title: 'CEL APEX 306',
                    start: '2022-03-28'
                },
                {
                    title: 'CEL SUMMIT 294',
                    start: '2022-03-30'
                },
                {
                    title: 'NCL EPIC 330',
                    start: '2022-03-30'
                },
                {
                    title: 'CEL APEX 306',
                    start: '2022-03-31'
                },

                //Abril
                {
                    title: 'NCL ENCORE',
                    start: '2022-04-01'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-04-03'
                },
                {
                    title: 'NCL ESCAPE',
                    start: '2022-04-04'
                },
                {
                    title: 'NCL ENCORE',
                    start: '2022-04-05'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-04-06'
                },
                {
                    title: 'CELL MILLENIUM',
                    start: '2022-04-06'
                },
                {
                    title: 'CEL REFLECTION',
                    start: '2022-04-07'
                },
                {
                    title: 'SS MARINER',
                    start: '2022-04-08'
                },
                {
                    title: 'SS NAVIGATOR',
                    start: '2022-04-10'
                },
                {
                    title: 'CEL REFLECTION',
                    start: '2022-04-11'
                },
                {
                    title: 'NCL ENCORE',
                    start: '2022-04-12'
                },
                {
                    title: 'CEL CONSTELLATION',
                    start: '2022-04-15'
                },
                {
                    title: 'SCARLET DAY',
                    start: '2022-04-17'
                },
                {
                    title: 'NCL GEM',
                    start: '2022-04-17'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-04-18'
                },
                {
                    title: 'CEL SUMMIT',
                    start: '2022-04-19'
                },
                {
                    title: 'NCL ESCAPE',
                    start: '2022-04-21'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-04-27'
                },

                //Mayo
                {
                    title: 'SCARLET LADY',
                    start: '2022-05-01'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-05-04'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-05-06'
                },
                // {
                //  title: 'NCL BREAKAWAY',
                //  start: '2022-05-10'
                // },
                {
                    title: 'SS NAVIGATOR',
                    start: '2022-05-11'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-05-15'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-05-18'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-05-19'
                },
                // {
                //  title: 'NCL BREAKAWAY',
                //  start: '2022-05-24'
                // },
                {
                    title: 'NCL SKY',
                    start: '2022-05-27'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-05-29'
                },



                //Junio
                {
                    title: 'MSC SEAHORE',
                    start: '2022-06-01'
                },
                {
                    title: 'NCL BREAKAWAY',
                    start: '2022-06-07'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-06-12'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-06-13'
                },
                {
                    title: 'NCL BREAKAWAY',
                    start: '2022-06-21'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-06-26'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-06-29'
                },
                {
                    title: 'CEL INFINITY',
                    start: '2022-06-30'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-08-07'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-08-10'
                },
                {
                    title: 'CELEBRITY INFINITY',
                    start: '2022-08-11'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-08-21'
                },
                {
                    title: 'NORWEGIAN SKY',
                    start: '2022-08-23'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-08-24'
                },
                {
                    title: 'CELEBRITY INFINITY',
                    start: '2022-08-25'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-09-04'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-09-06'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-09-07'
                },
                {
                    title: 'CEL INFINITY',
                    start: '2022-09-08'
                },
                {
                    title: 'SCARLET LADY',
                    start: '2022-09-18'
                },
                {
                    title: 'NCL SKY',
                    start: '2022-09-20'
                },
                {
                    title: 'MSC SEASHORE',
                    start: '2022-09-21'
                },
                {
                    title: 'CEL INFINITY',
                    start: '2022-09-22'
                },
                {
                    title: 'USCGC Joseph Doyle',
                    start: '2022-10-01'
                },
                {
                    title: 'Scarlet Lady',
                    start: '2022-10-02'
                },
                {
                    title: 'USCGC Joseph Doyle',
                    start: '2022-10-03'
                },
                {
                    title: 'NCL Sky',
                    start: '2022-10-04'
                },
                {
                    title: 'MSC Seashore',
                    start: '2022-10-05'
                },
                {
                    title: 'Celebrity Infinity',
                    start: '2022-10-06'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-06'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-13'
                },
                {
                    title: 'Scarlet Lady',
                    start: '2022-10-16'
                },
                {
                    title: 'NCL Leonardo',
                    start: '2022-10-18'
                },
                {
                    title: 'NCL Sky',
                    start: '2022-10-18'
                },
                {
                    title: 'MSC Seashore',
                    start: '2022-10-19'
                },
                {
                    title: 'Celebrity Infinity',
                    start: '2022-10-20'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-20'
                },
                {
                    title: 'NCL Getaway',
                    start: '2022-10-27'
                },
                {
                    title: 'Scarlet Lady',
                    start: '2022-10-30'
                },
                {
                    title: 'Allure OTS',
                    start: '2022-10-31'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2022-11-01'
                },
                {
                    title: 'CEL INFINITY 294',
                    start: '2022-11-01'
                },
                {
                    title: 'MSC SEA SHORE 340',
                    start: '2022-11-02'
                },
                {
                    title: 'RCCL MARINER 312',
                    start: '2022-11-02'
                },
                {
                    title: 'RCCL VOYAGER 312',
                    start: '2022-11-04'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-11-06'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2022-11-06'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2022-11-07'
                },
                {
                    title: 'RCCL JEWEL 294',
                    start: '2022-11-08'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-11-08'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-11-07'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-11-13'
                },
                {
                    title: 'CEL CONSTELLATION294',
                    start: '2022-11-14'
                },
                {
                    title: 'CEL INFINITY 294',
                    start: '2022-11-15'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2022-11-15'
                },
                {
                    title: 'NCL GETAWAY 326',
                    start: '2022-11-16'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-11-18'
                },
                {
                    title: 'MSC SEA SHORE 340',
                    start: '2022-11-18'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-11-20'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-11-21'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2022-11-21'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-11-22'
                },
                {
                    title: 'CEL INFINITY 294',
                    start: '2022-11-22'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-11-23'
                },
                {
                    title: 'NCL ENCORE 330',
                    start: '2022-11-25'
                },
                {
                    title: 'OC SIRENA 180',
                    start: '2022-11-26'
                },
                {
                    title: 'NCL GETWAYA 326',
                    start: '2022-11-26'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-11-27'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-11-28'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2022-11-30'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2022-12-02'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-12-04'
                },
                {
                    title: 'R. SS SPLENDERO 224',
                    start: '2022-12-05'
                },
                {
                    title: 'OC MARINA 240',
                    start: '2022-12-06'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-12-07'
                },
                {
                    title: 'VALIANT LADY 278',
                    start: '2022-12-08'
                },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2022-12-09'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2022-12-09'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-12-10'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-12-10'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2022-12-11'
                },
                {
                    title: 'RCCL MARINER 312',
                    start: '2022-12-13'
                },
                {
                    title: 'CEL BEYOND 327',
                    start: '2022-12-13'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2022-12-14'
                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2022-12-16'
                },
                {
                    title: 'NCL ESCAPE 326',
                    start: '2022-12-19'
                },
                {
                    title: 'NCL ESCAPE 330',
                    start: '2022-12-21'
                },
                {
                    title: 'CEL SILHOUETTE 319',
                    start: '2022-12-21'
                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2022-12-23'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2022-12-23'
                },
                               
                {
                    title: 'RCCL ODYSSEY 348',
                    start: '2022-12-26'
                },
                {
                    title: 'OC INSIGNIA 180',
                    start: '2022-12-26'
                },
                {
                    image_url: 'assets/images/media/arrival.png',
                    title: 'VALIANT LADY 278',
                    start: '2022-12-27',

                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2022-12-29'
                },
                {
                    title: 'CEL CONSTELLATION294',
                    start: '2022-12-30'
                }
                ,
                {
                    title: 'VALIANT LADY 278',
                    start: '2023-01-01'
                }
                ,
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2023-01-01'
                }
                ,
                {
                    title: 'OC RIVERA 240',
                    start: '2023-01-02'
                }
                ,
                {
                    title: 'RCCL WONDER 362',
                    start: '2023-01-02'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2023-01-05'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2023-01-05'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2023-01-08'
                } 
                ,
                // {
                //     title: 'NCL ESCAPE 326',
                //     start: '2023-01-09'
                // },
                {
                    title: 'RCCL VISION 279',
                    start: '2023-01-09'
                },
                // {
                //     title: 'NCL ENCORE 330',
                //     start: '2023-01-10'
                // },
                {
                    title: 'OC RIVERA 240',
                    start: '2023-01-12'
                },
                {
                    title: 'RCCL WONDER 362',
                    start: '2023-01-12'
                }
                ,
                {
                    title: 'CEL BEYOND 327',
                    start: '2023-01-13'
                }
                ,
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2023-01-13'
                },
                {
                    title: 'R. SS NAVIGATOR 173',
                    start: '2023-01-14'
                },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2023-01-15'
                }
                ,
                // {
                //     title: 'NCL ESCAPE 326',
                //     start: '2023-01-16'
                // },
                {
                    title: 'VALIANT LADY 278',
                    start: '2023-01-16'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2023-01-20'
                },
                // {
                //     title: 'NCL ENCORE 330',
                //     start: '2023-01-20'
                // },
                {
                    title: 'CEL CONSTELLATION 294',
                    start: '2023-01-20'
                },
                {
                    title: 'OC RIVERA 240',
                    start: '2023-01-22'
                },
                {
                    title: 'SCARLET LADY 278',
                    start: '2023-01-22'
                },
                // {
                //     title: 'NCL ESCAPE 326',
                //     start: '2023-01-22'
                // },
                {
                    title: 'NCL PEARL 295',
                    start: '2023-01-25'
                },
                {
                    title: 'MSC SEASCAPE 339',
                    start: '2023-01-26'
                },
                {
                    title: 'RCCL HARMONY 362',
                    start: '2023-01-26'
                },
                // {
                //     title: 'NCL ENCORE 330',
                //     start: '2023-01-27'
                // },
                {
                    title: 'CEL BEYOND 327',
                    start: '2023-01-27'
                },
                {
                    title: 'NCL SKY 259',
                    start: '2023-01-27'
                },
                // {
                //     title: 'NCL GETAWAY 326',
                //     start: '2023-01-29'
                // },
                {
                    title: 'RCCL GRANDEUR 280',
                    start: '2023-01-29'
                },
                // {
                //     title: 'NCL ESCAPE 326',
                //     start: '2023-01-30'
                // },
                {
                    title: 'VALIANT LADY 278',
                    start: '2023-01-30'
                },
                {
                    title: 'NCL DAWN 295',
                    start: '2023-01-31'
                },
                {
                    title: 'NCL GEM 295',
                    start: '2023-01-31'
                }



            ],


            eventColor: '#fff',
            eventTextColor: '#18355e',
            eventContent: function(arg) {
                let arrayOfDomNodes = []


                // image event
                let imgEventWrap = document.createElement('div')
                if (arg.event.extendedProps.image_url) {
                    let imgEvent = '<img src="' + arg.event.extendedProps.image_url + '" >'
                    imgEventWrap.classList = "fc-event-img"
                    imgEventWrap.innerHTML = imgEvent;
                }

                // title event
                let titleEvent = document.createElement('div')
                if (arg.event._def.title) {
                    titleEvent.innerHTML = arg.event._def.title
                    titleEvent.classList = "fc-event-title fc-sticky"
                }



                arrayOfDomNodes = [imgEventWrap, titleEvent]

                return {
                    domNodes: arrayOfDomNodes
                }
            },


        });
        calendar.render();


    });
    </script>
</body>

</html>