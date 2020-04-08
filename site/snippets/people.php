<?php 

$people = $page->children()->visible();

echo '<div class="row ">';

foreach($people as $p):

    echo '<div class="columns large-6 ">';

        snippet('person', array('p' => $p));

    echo '</div>';

endforeach;

echo '</div>';


?>
