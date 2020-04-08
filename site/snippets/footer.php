
<?php
    echo '<footer class="footer ">';

    echo '<div class="row ">';
    
        echo '<div class="columns medium-6 absolute--small">';

                echo $site->credit()->kirbytext();

        echo '</div>';

        echo '<div class="columns medium-6 text-left--medium text-right">';

                echo $site->copyright()->kirbytext();

        echo '</div>';

    echo '</div>';

    echo '</footer>';
?>
