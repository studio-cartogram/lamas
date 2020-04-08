<?php

if($image = $p->image('cover.jpg')): 

    echo '<a href="' . $p->url() . '" class="slideshow__image">';

        echo '<div style="background-color:' . $p->color()->html() . '" class="
                slideshow__color--animate
                slideshow__color
                "></div>';

        echo kirbytag(array(
            'picture' => 'cover',
            'extension' => 'jpg',
            'class' => 'slideshow__inner',
            'alt' => $p->title()->html(),
            'context' => $p,
            'split' => '_'
        ));


echo ($p->tagline()->html() != '' ? '<span class="slideshow__location hide-for-small"><span class="float-left slideshow__location__text zeta xx-small">' . $p->tagline()->html() . '</span></span>' : '');
        echo '<span class="slideshow__location"><span class="float-right slideshow__location__text zeta xx-small">' . $p->location()->html() . '</span></span>';

    echo '</a>';

else :

    echo '<div class="slideshow__image">';

        echo '<a href="' . $p->url() . '" style="background-color:' . $p->color()->html() . '" class="
                slideshow__color--animate
                slideshow__color
                "></a>';


            echo '<a class="slideshow__inner slideshow__inner--excerpt anchor-trigger"
                href="' . $p->url() . '" 
                style="background-color:' . $p->color()->html() . '">';

                echo '<p class="slideshow__excerpt">';

                    // echo $p->excerpt()->html()->kirbytextRaw();
                    echo $p->excerpt()->html();

                echo '</p>';

                echo ($p->main() != '' ? '<p><span class="zeta xx-small link--primary">Continue Reading</span></p>' : '');

            echo '</a>';

        echo '<span class="slideshow__location">';

            echo ($p->tagline()->html() != '' ? $p->tagline()->html() : '<div class="float-right slideshow__location__text"><span class="zeta xx-small">' . $p->date('jS F, Y') . '</span></div>');
            echo ($p->external() !='' ? '<a href="' . $p->external() . '" target="_blank" class="no-barba float-right slideshow__location__text "><span class="zeta xx-small link--primary">Read Elsewhere</span></a>' : '');
            echo ($p->file($p->uid() . '.pdf') ? '<a href="' . $p->file($p->uid() . '.pdf')->url() . '" target="_blank" class="no-barba float-right slideshow__location__text "><span class="zeta xx-small link--primary">Download PDF</span></a>' : '');

        echo '</span>';

    echo '</div>';

endif;
?>
