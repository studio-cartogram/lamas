<?php 

snippet('head');
snippet('header');

echo '<div id="barba-wrapper">';
echo '<div class="barba-container" data-namespace="' . ($isHomeMenu || $page->uid() == 'writing' ? 'home' : 'single') . '">';
echo '<div class="scene" id="js-main">';

snippet('brand');
snippet('menu');


if($isHomeMenu) :

    // snippet('fade');

    snippet('homemenu');


elseif($page->uid() == 'writing') :

    // snippet('fade');

    snippet('writings');

else :

    if($page->uid() !== 'us' && $page->uid() !== 'about') :

        snippet('fade');

    endif;

    snippet('mast');

    snippet('single');


    if($page->uid() === 'us' || $page->uid() === 'about') :

        snippet('people');

        snippet('employees');

        snippet('collaborators');

    else :

        snippet('credits');

        snippet('press-small');

        snippet('prev-next');

    endif;

    snippet('footer');

endif;


echo '</div>';
echo '</div>';
echo '</div>';

snippet('loader');

snippet('foot');


?>
