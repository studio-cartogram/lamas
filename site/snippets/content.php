<?php
echo '<div class="scene__element scene__element--fadein mast scene__element--stickonfilter row ' . ($page->isHomePage() ? ' is-pushed ' : '') . '">';

        echo '<div class="columns medium-6 ">';

            if($page->client() != '') :

            echo '<ul class="list ">';

                echo '<li><span class="beta">' . 'Client' . '</span></li>';

                echo '<li>' . $page->client()->kirbytext() . '</li>';

            echo '</ul>';

            endif;

            if($page->year() != '') :

            echo '<ul class="list ">';

                echo '<li><span class="beta">' . 'Year' . '</span></li>';

                echo '<li>' . $page->year()->kirbytext() . '</li>';

            echo '</ul>';

            endif;

            if($types) :

            echo '<ul class="list ">';

                if($page->isHomePage()) :

                    echo '<li><a class="js-filter__link beta ' . (!isset($currentTag) ? 'is-active ' : '' ) . '" href="' . $site->url() . '">All Projects</a></li>';

                else: 

                if($types[0] != '') :

                    echo '<li><span class="beta">' . 'Project Type' . '</span></li>';

                endif;

                endif;

                foreach ($types as $tag): 

                    $filter = '.' . str_replace(' ', '-', $tag);

                    echo '<li><a class="text-capitalize ' . ($page->isHomePage() ? ' js-filter__link ' : '' ) . (isset($currentTag) && $currentTag == $tag ? 'is-active' : '') . '" href="' . url('/' . url::paramsToString(['type' => $tag])) . '">';
                      echo html($tag);

                    echo '</a></li>';

                endforeach;

            echo '</ul>';

            endif;

            if($tags) :

            echo '<ul class="list ">';

                if($page->isHomePage()) :

                    echo '<li><a class="js-filter__link beta ' . (!isset($currentTag) ? 'is-active ' : '' ) . '" href="' . $site->url() . '">All Projects</a></li>';

                else: 

                if($tags[0] != '') :

                    echo '<li><span class="beta">' . 'Project Type' . '</span></li>';

                endif;

                endif;

                foreach ($tags as $tag): 

                    $filter = '.' . str_replace(' ', '-', $tag);

                    echo '<li><a class="text-capitalize ' . ($page->isHomePage() ? ' js-filter__link ' : '' ) . (isset($currentTag) && $currentTag == $tag ? 'is-active' : '') . '" href="' . url('/' . url::paramsToString(['tag' => $tag])) . '">';
                      echo html($tag);

                    echo '</a></li>';

                endforeach;

            echo '</ul>';

            endif;

        echo '</div>';

        echo '<div class="columns medium-6">';

            echo '<div class="content">';

                echo $page->text()->kirbytext();

                if($site->instagram() != '') :

                    echo '<div class="row" id="instafeed"></div>';

                endif;

            echo '</div>';

        echo '</div>';

    echo '</div>';
?>
