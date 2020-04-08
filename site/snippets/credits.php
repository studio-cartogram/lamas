<?php 


echo '<div class="row align-right">';

    echo '<div class="columns large-6 ">';

        echo '<div class="content">';

            echo '<div class="matrix">';

            if($page->credits() != '') :

                echo '<div class="matrix__section matrix__section--full matrix__section--short ">';

                    echo '<h4>Credits</h4>';

                echo '</div>';

                echo $page->credits()->kirbytext();

            endif;

            echo '</div>';

        echo '</div>';

    echo '</div>';

echo '</div>';

?>
