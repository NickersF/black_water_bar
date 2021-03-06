<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags for Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        jQuery(function($) {
            $('#eventlistsingle').gCalReader({
                calendarId: 'blackwatervenue@gmail.com',
                apiKey: 'AIzaSyCRUB2gZJZ9wSeiMZiwfVtFF09CJI19avE',
                sortDescending: false,
                futureEventsOnly: true,
                dateFormat: 'LongDate',
                maxEvents: 1,
                errorMsg: 'No events in calendar',
            });
        });
    </script>

    <script type="text/javascript">
        jQuery(function($) {
            $('#eventlist').gCalReader({
                calendarId: 'blackwatervenue@gmail.com',
                apiKey: 'AIzaSyCRUB2gZJZ9wSeiMZiwfVtFF09CJI19avE',
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

    <!-- Begin header container -->
    <div id="header" class="container-fluid header-container-base">
        <div class="row header-row-pad-reset d-flex justify-content-start">

            <!-- Begin logo column -->
            <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                <img class="img-fluid right-logo-scale" src="./img/logo_type_bwater.svg">
            </div>
            <!-- End logo column -->

            <!--  Begin menu column -->
            <div class="col-lg-6 col-pad-six">
                <!-- Nav row -->
                <div class="row header-menu-zero">
                    <div class="col col-pad-zero">

                        <!-- Start nav -->
                        <ul class="nav mono45-bold nav-link-size bw-nav">
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
                        <h5>835 ne broadway, portland, or 97232 <br>
                            +1 503 281 0439
                        </h5>
                        <h4 class="address-bottom-marg-zero">hours:</h4>
                        <h5>
                            <?php perch_content('bar_hours') ?>
                        </h5>
                    </div>
                </div>
            </div>
            <!-- End menu column -->

            <!-- Begin event column -->
            <div class="col event-base-padder">
                <div class="row header-menu-zero event-color-inversion event-padder h-100">
                    <div class="col header-menu-zero align-items-center justify-content-center d-flex">
                        <h3 class="mono45-bold d-flex">No Events Currently - Take Out Only.</h3>
                        <!-- <h5 id="eventlistsingle" class=" mono45-reg"></h5> -->
                    </div>
                </div>
            </div>
            <!-- End event column -->

        </div>
    </div>
    <!-- End header container -->

    <!-- Begin deliveries container -->
    <div id="deliveries" class="container-fluid body-container-base">
        <div class="row body-row-pad-reset">
            <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                <img class="drink-svg-sizer img-fluid" src="./img/deliveries.svg">
            </div>
            <!-- Add button styles -->
            <div class="col-lg twelve-padder">
                <div class="row body-row-pad-reset mono45-bold text-center">
                    <div class="col-lg-4 twelve-padder">
                        <h4>Black Water Bar Direct Food Delivery</h4>
                        <a href="https://blackwater.hrpos.heartland.us/ " target="_blank" class="bw-link-button">order now!</a>
                    </div>
                    <div class="col-lg-4 twelve-padder">
                        <h4>Black Water Bar Food Delivery at PDXCCC</h4>
                        <a href="https://www.pdxccc.com/restaurants.html" target="_blank" class="bw-link-button">order now!</a>
                    </div>
                    <div class="col-lg-4 twelve-padder">
                        <h4>Black Water Bar Food Delivery at Doordash</h4>
                        <a href="https://www.doordash.com/store/black-water-portland-887213/en-US" target="_blank" class="bw-link-button">order now!</a>
                    </div>
                </div>
                <div class="row text-center mono45-bold">
                    <div class="col-lg twelve-padder">
                        <h4>Delivery Hours:</h4>
                        <h5 class="mb-0">Monday through friday: <span class="bw-red-text">4:00pm to 9:00pm</span></h5>
                        <h5 class="mb-0">Saturday through sunday: <span class="bw-red-text">12:00pm to 9:00pm</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End deliveries container -->

    <!-- Begin food container -->
    <div id="food" class="container-fluid body-container-base">
        <div class="row body-row-pad-reset">
            <div class="col-lg-auto col-pad-six d-flex justify-content-center">
                <img class="drink-svg-sizer img-fluid" src="./img/food.svg">
            </div>

            <div class="col-lg-6 twelve-padder">

                <!-- Inject appetizer menu -->
                <?php perch_content('appetizers') ?>

                <!-- Inject salads menu -->
                <?php perch_content('salads_sides') ?>

                <!-- Inject burgers menu -->
                <?php perch_content('burgers') ?>

                <!-- Inject sandwiches menu -->
                <?php perch_content('sandwiches') ?>

                <!-- Inject desserts -->
                <?php perch_content('desserts') ?>

            </div>

            <div class="col twelve-padder text-center">
                <div class="row">
                    <div class="col">
                        <!-- Client uploadable image field for food section (All screens) -->
                        <?php perch_content('food_section_custom_image') ?>
                    </div>
                </div>

                <div class="row d-none d-lg-block">
                    <div class="col">
                        <?php perch_content('food_section_multi_image') ?>
                    </div>
                </div>
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

                <!-- Inject cocktail items via perch -->
                <?php perch_content('cocktail_menu'); ?>

                <!-- Inject draft items via perch -->
                <?php perch_content('drafts'); ?>

                <!-- Inject bottle and cans items via perch -->
                <?php perch_content('bottles_n_cans'); ?>

                <!-- Inject draft items via perch -->
                <?php perch_content('straight_edge'); ?>

            </div>

            <div class="col twelve-padder text-center">
                <!-- Client uploadable image field for drinks section -->
                <?php perch_content('drinks_section_custom_image') ?>
            </div>
        </div>
    </div>
    <!-- End drinks container -->



    <!-- Optional Javascript -->
    <!-- JQuery, Popper.js, the Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>