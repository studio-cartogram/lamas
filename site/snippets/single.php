<?php
    echo '<div class="row align-right">';

        echo '<div class="columns large-6 ">';

            echo '<div class="content">';

                echo '<h1 class="is-lined is-lined--strike alpha"><span>' . ($page->heading() != '' ? $page->heading()->html() : $page->title()->html()) . '</span></h1>';

                echo '<div class="content__text">';

                echo $page->text()->kirbytext();
                echo $page->excerpt()->kirbytext();

                echo ($page->file($page->uid() . '.pdf') ? '<p><a href="' . $page->file($page->uid() . '.pdf')->url() . '" target="_blank" class="no-barba ">' . 'Download PDF' . '</a></p>' : '');
                echo ($page->external() != '' ? '<p><a href="' . $page->external() . '" target="_blank" class="no-barba ">' . 'Source' . '</a></p>' : '');

                echo '</div>';

                snippet('meta');

                echo '</div>';

            echo '</div>';

        echo '</div>';

    echo '</div>';

    snippet('press');

    echo '<div class="scene__element scene__element--fadein ' . ($page->uid() === 'about' || $page->uid() === 'us' ? 'page' : 'single') . '">';

            echo $page->main()->kirbytext();

    echo '</div>';

?>
