<?php
    echo '<span class="link--has-dropdown anchor-trigger delta link--secondary make-inline-block list-toggle-overlay-close js-list-toggle link">';

        echo '<span class="list__toggle link--secondary "><span class="arrow arrow--down"></span></span>';

        echo $p->title()->html();

    echo '</span>';

    echo '<ul class="list list--block list--block--' . $p->uid() . '">';

    foreach ($p->children()->listed() as $p): 

            echo '<li class="">';

                echo '<a class="dotdotdot link--secondary text-capitalize ' . ($p->isOpen() ? 'is-active' : '') . '" href="' . $p->url() . '">';

                    echo $p->title();

                echo '</a>';

            echo '</li>';


    endforeach;
                echo '<li><a href="' . $p->parent()->url() . '" class="link--primary zeta swiper-nav-prev link ">All ' . $p->parent()->title()->html() . '</a></li>';

echo '</ul>';

?>
