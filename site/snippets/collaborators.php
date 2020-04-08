<?php

    $collaborators = $page->people();
    $collaboratorsAsArray = explode(",", $collaborators);
    $collaborators = array_map('trim',$collaboratorsAsArray);

echo '<div class="row ">';

    echo '<div class="columns ">';

    echo '<div class="content">';

    echo '<h4>LAMAS Past and Present</h4>';

    echo '<ul class="list list--content-columns">';

    foreach ($collaborators as $c): 

            echo '<li class="small">';

                    echo html($c);

            echo '</li>';

    endforeach;

    echo '</ul>';

    echo '</div>';

    echo '</div>';

echo '</div>';
?>
