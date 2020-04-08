<?php

if($page->lat() != ''  && $page->lng() != '') :


    echo '<div class=" map-container ">';

        echo '<div class="map" id="js-map">';

            echo '<div class="marker" data-lat="' . $page->lat() . '" data-lng="' . $page->lng() .'"></div>';

        echo '</div>';

    echo '</div>';


endif;
