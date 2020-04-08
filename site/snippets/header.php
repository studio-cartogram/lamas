<?php
    echo '<header class="js-header header">';

        echo '<div class=" header__nav">';

        echo '<nav class="scene__element scene__element--drop nav text-left--medium">';

                echo '<div class="nav__loader">';

                    echo '<span class="zeta loading__text">Loading...</span>';

                echo '</div>';

                echo '<div class="nav__links">';

                    echo '<a class="link--primary zeta" href="mailto:' . $site->email() . '">' . 'Email' . '</a>';

                    echo '<a class="link--primary zeta" target="_blank" href="http://instagram.com/' . $site->instagram() . '">' . 'Insta' . '</a>';

                echo '</div>';

            echo '</nav>';

        echo '</div>';


    echo '</header>';
?>
