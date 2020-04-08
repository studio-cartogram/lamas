<?php

echo '<div class="content">';

    echo '<h4 class="">' . $p->name()->html() . '</h4>';

    echo '<span class="make-block zeta ">' . $p->position()->html() . '</span>';

    echo '<div class="small content__bio">';

    echo $p->bio()->kirbytext();

    echo '</div>';


    $experiences = $p->children()->visible();


    echo '<div class="matrix matrix--head">';

        echo '<div class="matrix__section matrix__section--sex">';

            echo '<span class="is-lined is-lined--under make-block zeta  meta">Year</span>';

        echo '</div>';

        echo '<div class="matrix__section matrix__section--sex">';

            echo '<span class="is-lined is-lined--under make-block zeta  meta">Location</span>';

        echo '</div>';

        echo '<div class="matrix__section matrix__section--quad">';

            echo '<span class="is-lined is-lined--under make-block zeta  meta">Project – Studio</span>';

        echo '</div>';

        echo '<div class="matrix__section matrix__section--quad">';

            echo '<span class="is-lined is-lined--under make-block zeta  meta">Role</span>';

        echo '</div>';

     echo '</div>';

    echo '<div class="accordion-wrap">';

    foreach($experiences as $e):

    echo '<div class="accordion">';

    echo '<input class="accordion__input" id="' . $e->uid() . '" name="accordion-1" type="radio"  />';

    echo '<label for="' . $e->uid() . '" class="accordion__trigger matrix matrix--body">';

            echo '<div class="matrix__section matrix__section--sex">';

                echo ($e->year() != '' ? '<p data-label="Year" class="has-label x-small">' .  $e->year() . '</p>' : '');

            echo '</div>';

            echo '<div class="matrix__section matrix__section--sex">';

                echo ($e->location() != '' ? '<p data-label="Location" class="has-label x-small">' .  $e->location() . '</p>' : '');

            echo '</div>';

            echo '<div data-label="" class="matrix__section matrix__section--quad">';

                echo ($e->studio() != '' ? '<p data-label="Studio" class="has-label x-small">' .  $e->studio() . '</p>' : '');

            echo '</div>';

            echo '<div data-label="" class="matrix__section matrix__section--quad">';

                echo ($e->roles() != '' ? '<p data-label="Roles" class="has-label x-small">' .  $e->roles() . '</p>' : '');

            echo '</div>';

        echo '</label>';

        echo '<div class="accordion__body matrix__foot ">';

        if($e->images()->first()) :

        echo '<figure class="full ">';

            echo '<img src="' . $e->images()->first()->url() . '" alt="">';

        echo '</figure>';

        endif ;

        echo '</div>';

    echo '</div>';

    endforeach;


echo '</div>';
echo '</div>';

?>
