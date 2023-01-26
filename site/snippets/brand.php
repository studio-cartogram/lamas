<?php

echo' <div class=" brand">';

    echo '<div class="row ">';

        echo '<div class="columns medium-6 scene__element scene__element--fadein">';

                echo '<a href="' . $site->url() . '" class=" rand-color-on-hover link--menu">';

                    echo '<span class="wordmark rand-color">' . $site->title()->html() . '</span>';

                echo '</a>';

        echo '</div>';

    echo '</div>';

echo '</div>';
