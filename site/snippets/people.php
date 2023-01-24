<?php 

$people = $page->children()->listed();

echo '<div class="row ">';

if (is_iterable($people)):

foreach($people as $p):

    echo '<div class="columns large-6 ">';

        snippet('person', array('p' => $p));

    echo '</div>';

endforeach;

endif;

echo '</div>';


?>
