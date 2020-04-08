<?php

    echo '<a 
        class="slideshow--text__slide__link anchor-trigger"
        href="' . $p->url() . '"
        >';

            echo '<span class="sliding-text slideshow--text__slide__title beta ">';

                echo '<span class="
                        dotdotdot
                        link--tertiary
                        sliding-text__inner--animate
                        sliding-text__inner
                        ">' . $p->title()->html() . '</span>';

                echo '</span>';

                echo '<span class="sliding-text slideshow--text__slide__tagline ">';

                echo '<span class="
                        sliding-text__inner--animate
                        sliding-text__inner
                        ">';

                            echo ($p->tagline()->html() != '' ? $p->tagline()->html() : '<span class="zeta">' . $p->date('jS F, Y') . '</span>');

                echo '</span>';

            echo '</span>';

    echo '</a>';
?>
