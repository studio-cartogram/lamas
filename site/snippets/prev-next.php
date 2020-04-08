
<?php
    echo '<p class="delta all-link"><a href="' . $page->parent()->url() . '" class="">All ' . $page->parent()->title() . '</span></p>';

    if($page->hasPrevVisible()):

    echo '<a class="anchor-trigger next-prev-link float-left text-left" href="' . $page->prevVisible()->url() . '">';
        echo '<figure style="background-color:' . $page->prevVisible()->color() . '">';
        if($image = $page->prevVisible()->image('cover.jpg')): 
        echo '<img src="' . thumb($image, array('width' => 300, 'crop' => true))->url() . '" alt="View Previous Project" />';
        endif;
        echo '</figure>';
        echo '<span class="next-prev-link__text">';
            echo '<span class="link--primary zeta">Previous in ' . $page->parent()->uid() . '</span>';
            echo '<span class="gamma make-block dotdotdot">' . $page->prevVisible()->title() . '</span>';
        echo '</span>';
    echo '</a>';

    endif;


    if($page->hasNextVisible()):

    echo '<a class="anchor-trigger next-prev-link float-right text-right" href="' . $page->nextVisible()->url() . '">';
        echo '<span class="next-prev-link__text">';
            echo '<span class="link--primary zeta">Next in ' . $page->parent()->uid() . '</span>';
            echo '<span class="gamma make-block dotdotdot">' . $page->nextVisible()->title() . '</span>';
        echo '</span>';
        echo '<figure style="background-color:' . $page->nextVisible()->color() . '">';
        if($image = $page->nextVisible()->image('cover.jpg')): 
        echo '<img src="' . thumb($image, array('width' => 300, 'crop' => true))->url() . '" alt="View Next Project" />';
        endif;
        echo '</figure>';
    echo '</a>';

    endif;
