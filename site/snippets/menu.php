<?php
echo '<nav id="js-list" class="js-list menu ">';

    echo '<ul class="list list--inline ">';

    if (is_iterable($pages)):

        foreach($pages->listed() as $p):

            echo '<li class="' . ($p->isOpen() ? 'is-active' : '') . '">';

            if($p->isOpen() && $page->isDescendantOf($p) && $children ) :

                snippet('list-block', array('p' => $p));

            else :

                echo '<a class=" link--secondary delta ' . ($p->isOpen() ? 'is-active' : '') . '" href="' . $p->url() . '">' . $p->title()->html() . '</a>';

            endif;

            echo '</li>';

        endforeach;

    endif;

    echo '</ul>';

echo '</nav>';

?>
