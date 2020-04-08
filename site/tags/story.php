<?php

kirbytext::$tags['story'] = array(
  'attr' => array(
    'story'
  ),
  'html' => function($tag) {

    $text = $tag->attr('story');

    $html = '<div class="row align-right">';

        $html .= '<div class="columns large-6 ">';

            $html .= '<div markdown="1" class="content">';

                $html .= $text;

            $html .= '</div>';

        $html .= '</div>';

    $html .= '</div>';

    return $html;

  }
);
