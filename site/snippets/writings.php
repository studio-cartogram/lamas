<?php

$date = null;

echo '<div class="scene__element scene__element--fadein page--writing ">';

    foreach ($writings as $writing):

        echo '<div class="row writing">';

        if($date === null || $date !== $writing->date('Y')) :

            $date = $writing->date()->toDate('Y');

            echo '<div class="writing__date"><span class="zeta">' . $date . '</span></div>';

        endif;

            snippet('writing', array('p' => $writing));

        echo '</div>';

    endforeach;

echo '</div>';
?>

