<?php

$date = null;

echo '<div class="scene__element scene__element--fadein page--writing ">';


    foreach(($pages->children())->sortBy('date', 'desc') as $p):

        echo '<div class="row writing">';

        if($date === null || $date !== $p->date('Y')) :

            $date = $p->date()->toDate('Y');

            echo '<div class="writing__date"><span class="zeta">' . $date . '</span></div>';

        endif;

        snippet('writing', array('p' => $p));

        echo '</div>';

    endforeach;


echo '</div>';
?>

