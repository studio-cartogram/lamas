<?php

    echo '<a 
        class="js-slideshow-nav-item slideshow-nav__item gamma"
        href="' . $p->url() . '"
        >';


            echo '<span class="
                    dotdotdot
                    ">' . $p->title()->html() . '</span>';



    echo '</a>';
?>
