<?php

// this is the slideshow

echo '<div id="homemenu" class="scene__element scene__element--fadein homemenu ">';

    echo '<div id="js-swiper-homemenu-images" class="swiper-container slideshow slideshow--images">';

        echo '<div class="swiper-wrapper">';

        foreach($children as $p):

                echo '<div class="swiper-slide slideshow--image__slide" data-hash="' . $p->uid() . '">';

                snippet('swiper-image', array('p' => $p));

                echo '</div>';

            endforeach;


        echo '</div>';

    echo '</div>';

    echo '<div id="js-swiper-homemenu-text" class="hide-for-medium swiper-container slideshow slideshow--text">';

        echo '<div class="swiper-wrapper">';


        foreach($children as $p):

                echo '<div class="swiper-slide slideshow--text__slide" data-hash="' . $p->uid() . '">';

                snippet('swiper-text', array('p' => $p));

                echo '</div>';

            endforeach;

        echo '</div>';

    echo '</div>';

    echo '<div class="hide-for-small slideshow-nav">';

    echo '<div id="js-swiper-homemenu-nav" class="swiper-container slideshow-nav__inner">';

        echo '<div class="swiper-wrapper">';

        $count = 0;


        foreach($children as $p):

                if($count == 0) :

                    echo '<div class="swiper-slide">';

                endif;

                $count++;

                if($count % 14 == 0) :

                    echo '<div class="link--primary zeta swiper-nav-next link link--with-icon"><span class="link__icon arrow icon--small arrow--down"></span>More</div>';
                
                    echo '</div>';

                    echo '<div class="swiper-slide">';

                    echo '<div class="link--primary zeta swiper-nav-prev link link--with-icon"><span class="link__icon arrow icon--small arrow--up"></span>Back</div>';

                endif;

                snippet('swiper-nav-item', array('p' => $p));

                endforeach;


            echo '</div>';

        echo '</div>';

        echo '<div class="swiper-nav-pagination"></div>';

        echo '</div>';

    echo '</div>';

    echo '<div class="slideshow__pagination swiper-pagination"></div>';

    echo '<div class="zeta slideshow__pagination slideshow__pagination--fraction swiper-pagination-fraction"></div>';

    echo '<nav class="slideshow__buttons">';

        echo '<div class="zeta swiper-button-prev"><span class="arrow arrow--left"><span class="hide-text">prev</span></span></div>';

        echo '<div class="zeta swiper-button-next"><span class="arrow arrow--right"><span class="hide-text">next</span></span></div>';

    echo '</nav>';

