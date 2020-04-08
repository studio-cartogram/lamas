<?php

if($page->uid() === 'us' || $page->uid() === 'about') :

if(!$page->press()->isEmpty()) :

    echo '<div class="row">';
        echo '<div class="columns ">';
            echo '<div class="content">';
                echo '<h4>Featured Press</h4>';

foreach($page->press()->toStructure() as $press):

    echo '<div class="row press">';

        if($image = $page->image($press->image())):

            echo '<div class="press__image">';

                echo '<img src="' . thumb($image, array('width' => 400, 'crop' => true))->url() . '" alt="' . $press->source() . '" />';

            echo '</div>';

        endif;

        echo '<div class="press__content">';

            echo '<p class="quoted large press__description">' . $press->description() . '</p>';

            echo '<div class="matrix">';

                echo '<div class="matrix__section matrix__section--full">';

                echo '<span class="is-lined is-lined--under make-block zeta meta">Source</span>';

                echo '<ul class="list list--sep ">';


                    echo '<li><a class="small text-capitalize link--inline " href="' . $press->link() . '">';

                        echo $press->source();

                    echo '</a></li>';


                echo '</ul>';

                echo '</div>';

            echo '</div>';
        echo '</div>';

    echo '</div>';

endforeach;

            echo '</div>';
        echo '</div>';
    echo '</div>';
endif;
endif;
