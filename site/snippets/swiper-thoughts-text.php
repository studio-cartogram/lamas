<?php
    echo '<a 
        class="slideshow--text__slide__link anchor-trigger"
        href="' . $p->url() . '"
        >';

            echo '<span class="slideshow--text__slide__title beta ">';

                echo '<span class="
                        link--tertiary
                        ">' . $p->title()->html() . '</span>';

            echo '</span>';

            echo '<span class="sliding-text slideshow--text__slide__tagline ">';


                        echo '<span class="
                        zeta
                        link--primary
                        ">'. $p->types()->html() . '</span>';

            echo '</span>';

            echo '<p>' . $p->excerpt()->html() . '</p>';
    echo '</a>';
?>
