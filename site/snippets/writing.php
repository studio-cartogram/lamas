<?php

// k, if there’s a pdf, there will be a download link which will download a pdf. If there’s an external link to another website there will be a source link which will take you to that website. And then clicking on on the rest of it will take you to the single page view of that writing

$link = ($p->file($p->uid() . '.pdf') ? $p->file($p->uid() . '.pdf')->url() : $p->external());
$pdf = ($p->file($p->uid() . '.pdf') ? true : false);

echo '<div class="writing__title">';

    echo '<span class="writing__title__pub zeta">' . $p->publication()->html()  . '</span>';

    echo '<h2 class=" "><a class="writing__title__link " href="' . $p->url() . '">' . $p->title()->html() . '</a></h2>';

echo '</div>';

$types = $p->tags()->split();

echo '<ul class="writing__control list list--sep ">';

if($types[0]) :

    foreach ($types as $type): 

        echo '<li><span class="zeta text-capitalize" >';

            echo html($type);

        echo '</span></li>';

    endforeach;

endif;

echo '</ul>';

echo '<div class="writing__control writing__control--small">';

    echo ($p->file($p->uid() . '.pdf') ? '<a href="' . $p->file($p->uid() . '.pdf')->url() . '" target="_blank" class="no-barba zeta link--primary">Download</a>' : '');

echo '</div>';

echo '<div class="writing__control writing__control--small">';

    echo ($p->external() != '' ? '<a href="' . $p->external() . '" target="_blank" class="zeta link--with-icon link--primary no-barba ">' . 'Source' . ' <span class="icon--x-small external link__icon"></span></a>' : '');

echo '</div>';

echo '<div class="writing__background" style="background-color:' . $p->color() . '"></div>';

?>
