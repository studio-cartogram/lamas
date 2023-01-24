
<?php
    echo '<p class="delta all-link"><a href="' . $page->parent()->url() . '" class="">All ' . $page->parent()->title() . '</span></p>';

    if($page->hasPrevListed()):

    echo '<a class="anchor-trigger next-prev-link float-left text-left" href="' . $page->prevListed()->url() . '">';
        echo '<figure style="background-color:' . $page->prevListed()->color() . '">';
        if($image = $page->prevListed()->image('cover.jpg')): 
        echo '<img src="' . $image->crop(300,300)->url() . '" alt="View Previous Project" />';
        endif;
        echo '</figure>';
        echo '<span class="next-prev-link__text">';
            echo '<span class="link--primary zeta">Previous in ' . $page->parent()->uid() . '</span>';
            echo '<span class="gamma make-block dotdotdot">' . $page->prevListed()->title() . '</span>';
        echo '</span>';
    echo '</a>';

    endif;

    if($page->hasNextListed()):

    echo '<a class="anchor-trigger next-prev-link float-right text-right" href="' . $page->nextListed()->url() . '">';
        echo '<span class="next-prev-link__text">';
            echo '<span class="link--primary zeta">Next in ' . $page->parent()->uid() . '</span>';
            echo '<span class="gamma make-block dotdotdot">' . $page->nextListed()->title() . '</span>';
        echo '</span>';
        echo '<figure style="background-color:' . $page->nextListed()->color() . '">';
        if($image = $page->nextListed()->image('cover.jpg')): 
        echo '<img src="' . $image->crop(300,300)->url() . '" alt="View Next Project" />';
        endif;
        echo '</figure>';
    echo '</a>';

    endif;
