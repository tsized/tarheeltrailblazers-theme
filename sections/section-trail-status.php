<?php

// get all the trails
$trails = om_get_all_trails();

// print "<pre>";
// print_r($trails);
// print "</pre>";


// only proceed if trails are found
if (count($trails)){

    // start section
    print '<div class="container-fluid trail-status-wrapper py-4">';
    print '<div class="trail-status-mobile-btn"><a href="/trail-status-mobile/"><i class="fa fa-mobile" aria-hidden="true"></i></a></div>';
    print '<div class="container">';
    print '<div class="row align-items-center">';

    // loop through all the trails
    foreach ($trails as $trail) {
        //print $trail->post_title . "<br>";

        // print "<pre>";
        // print_r($trails);
        // print "</pre>";

        // print div and returned html
        print '<div class="col-12 col-md-6 col-xl-4">';
        print om_return_trail_status_html_tiny($trail);
        print "</div>";


     } // end foreach

    // end section
    print '</div>';

?>

<div class="col-12 pt-4">

    <div class="mx-auto w-75 text-center">
        <h4 style="display: inline-block;" class="text-center">Don't ride muddy trails!</h4>
        <span data-toggle="tooltip" data-placement="top" title="All trails are open!" class="ml-3">
            <i class="fas fa-check-circle tinyTrailStatusIcon success"></i>
        </span> open
        <span data-toggle="tooltip" data-placement="top" title="Some trails are open" class="ml-3">
            <i class="fas fa-exclamation-triangle tinyTrailStatusIcon warning"></i>
        </span> caution
        <span data-toggle="tooltip" data-placement="top" title="All trails are closed" class="ml-3">
            <i class="fas fa-times-circle tinyTrailStatusIcon danger"></i>
        </span> closed
    </div>


</div>


<?php


    print '</div>';
    print '</div>';

} // end if

?>
