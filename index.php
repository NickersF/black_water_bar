<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags for Bootstrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Type Kit Integration (deprecated) -->
        <!-- <script src="https://use.typekit.net/gnv4nco.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script> -->

        <!-- Calendar feed external -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <!-- Adobe Font integration -->
        <link rel="stylesheet" href="https://use.typekit.net/gnv4nco.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="css/bwater-custom.css">
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="./js/index.js" type="text/javascript"></script>
        <!-- CALENDAR FEED CODE -->

        <!-- Top 1 liner -->
        <script type="text/javascript">
            jQuery(function ($) {
                 $('#eventlistsingle').gCalReader({
                 calendarId:'blackwatervenue@gmail.com',
                 apiKey:'AIzaSyCRUB2gZJZ9wSeiMZiwfVtFF09CJI19avE',
                 sortDescending: false,
                 futureEventsOnly: true,
                 dateFormat: 'LongDate',
                 maxEvents: 1,
                 errorMsg: 'No events in calendar',
                });
           });
        </script>

        <script type="text/javascript">
            jQuery(function ($) {
                 $('#eventlist').gCalReader({
                 calendarId:'blackwatervenue@gmail.com',
                 apiKey:'AIzaSyCRUB2gZJZ9wSeiMZiwfVtFF09CJI19avE',
                 sortDescending: false,
                 futureEventsOnly: true,
                 dateFormat: 'LongDate',
                 maxEvents: 20,
                 errorMsg: 'No events in calendar',
                });
           });
        </script>
        <!-- Top grid container - contains | logo | menu | events |
                                                MOBILE VIEW:
                                           ------------------------     
                                           | logo |     menu      | 
                                           |        events        |
        -->
        <div id="header" class="container-fluid header-container-base">
            <div class="row header-row-pad-reset d-flex justify-content-start">

                <!-- Begin logo column -->
                <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                    <img class="img-fluid right-logo-scale" src="./img/black-water-txt-logo.svg" >
                </div>
                <!-- End logo column -->

                <!--  Begin menu column -->
                <div class="col-lg-6 col-pad-six">
                    <!-- Nav row -->
                    <div class="row header-menu-zero">
                        <div class="col col-pad-zero">

                            <!-- Start nav -->
                            <ul class="nav mono45-bold nav-link-size bw-nav">
                                <!-- <li class="nav-item">
                                    <a class="nav-link-padding" href="#header">HOME</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link-padding" href="#drinks">DRINKS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-padding" href="#food">FOOD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link-padding" href="#events">EVENTS</a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-100"></div>
                        
                        <!-- Start address -->
                        <div class="col col-pad-zero mono45-bold">
                                <h4 class="address-bottom-marg-zero">black water bar pdx</h4>
                                <h5> 835 ne broadway, portland, or 97232 <br>
                                hours: 11:00am - 1:00am
                                </h5>
                        </div>
                    </div>

                    <!-- Address row  (TODO: Move to bottom) -->
                    <div class="row header-menu-zero">
                            <!-- Hold -->
                    </div>
                </div>
                <!-- End menu column -->

                <!-- Begin event column -->
                <div class="col event-base-padder">
                    <div class="row header-menu-zero event-color-inversion event-padder h-100">
                        <div class="col header-menu-zero">
                            <h4 class="mono45-bold">Next Event:</h4>
                            <h5 id="eventlistsingle" class=" mono45-reg"></h5>
                        </div>
                    </div>
                </div>
                <!-- End event column -->
                
            </div>
        </div>

        <!-- Begin food container -->
        <div id="food" class="container-fluid body-container-base">
            <div class="row body-row-pad-reset">
                <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                    <img class="drink-svg-sizer img-fluid" src="./img/food.svg">
                </div>
                <div class="col-lg-6 col-pad-six">

                    <!-- Begin sub section title -->
                    <div class="amador text-center">
                        <h1 class="content-sub-heading">Sub Item</h1>
                    </div>
                    <!-- End sub section title -->

                    <!-- Begin individual item -->
                    <div class="content-individual-item mono45-reg">
                        <span class="item-name">Item name</span> <span>Item Price</span>
                    </div>
                    <!-- End individual item -->
                </div>
                <div class="col twelve-padder text-center">
                    <img class="img-fluid right-side-border" src="./img/home-page-img/shot3.PNG">
                </div>
            </div>
        </div>
        <!-- End food container -->

        <!-- Begin drinks container -->
        <div id="drinks" class="container-fluid body-container-base">
            <div class="row body-row-pad-reset">
                <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                    <img class="drink-svg-sizer img-fluid" src="./img/drinks.svg">
                </div>
                <div class="col-lg-6 twelve-padder">

                    <!-- inject cocktail items via perch -->
                    <?php perch_content('cocktail_menu'); ?>

                    <!-- Inject draft items via perch -->
                    <?php perch_content('drafts'); ?>

                </div>
                <div class="col twelve-padder text-center">
                    <img class="img-fluid right-side-border" src="./img/home-page-img/shot11.PNG">
                </div>
            </div>
        </div>
        <!-- End drinks container -->

        <!-- Begin events container -->
        <div id="events" class="container-fluid body-container-base">
                <div class="row body-row-pad-reset">
                    <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                        <img class="drink-svg-sizer img-fluid" src="./img/events.svg">
                    </div>
                    <div class="col-lg-6 col-pad-six">
                        <!-- Begin section title -->
                        <div class="amador text-center">
                            <h1 class="content-sub-heading">Upcoming Shows and Events</h1>
                        </div>
                        <!-- End section title -->

                        <!-- Begin event listing -->
                        <div class="d-flex justify-content-center">
                            <div id="eventlist" class="mono45-reg"></div>
                        </div>
                        <!-- End event listing -->
                    </div>
                    <div class="col twelve-padder text-center">
                        <img class="img-fluid right-side-border" src="./img/home-page-img/shot5.PNG">
                    </div>
                </div>
            </div>
            <!-- End events container -->

        <!-- Optional Javascript -->
        <!-- JQuery, Popper.js, the Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>