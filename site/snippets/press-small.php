<?php

if(!$page->press()->empty()) :

echo '<div class="row align-right">';

    echo '<div class="columns large-6 ">';

        echo '<div class="content">';

            echo '<div class="matrix">';

                echo '<div class="matrix__section matrix__section--full matrix__section--short ">';

                    echo '<h4>Press</strong></h4>';

                echo '</div>';

                echo '<div class="matrix__section matrix__section--full">';

                echo '<span class="is-lined is-lined--under make-block zeta meta">Featured in</span>';

                echo '<ul class="list list--sep ">';

                foreach($page->press()->toStructure() as $press):


                    echo '<li><a class="small text-capitalize link--inline " href="' . $press->link() . '">';

                        echo $press->source();

                    echo '</a></li>';

                endforeach;

                echo '</ul>';

                echo '</div>';

            echo '</div>';

        echo '</div>';

    echo '</div>';

echo '</div>';

endif;

