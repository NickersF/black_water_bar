    <!-- Begin events container -->
    <div id="events" class="container-fluid body-container-base text-center">
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
                <!-- Client uploadable image field for events section -->
                <!-- <img class="img-fluid right-side-border" src="./img/home-page-img/shot5.PNG"> -->
                <?php perch_content('events_section_custom_image') ?>
            </div>
        </div>
    </div>
    <!-- End events container -->