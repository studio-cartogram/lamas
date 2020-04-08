<?php

echo '<div ';
        echo 'class="scene__element scene__element--fadein mast ">';

if($image = $page->image('cover.jpg')): 

    echo kirbytag(array(
        'picture' => 'cover',
        'extension' => 'jpg',
        'class' => 'mast__image',
        'alt' => $page->title()->html(),
        'context' => $page,
        'split' => '_'
    ));

elseif($page->uid() == 'about') :

    echo '<div id="instafeed" data-hashtag="' . $page->hashtag() . '" class="instagrams zeta"></div>';

endif;

echo '</div>';
