<?php
kirbytext::$tags['credit'] = array (

	'attr' => array (
		'credit',
		'name',
	),

    'html' => function($tag) {

        $html = '<div class="matrix__section matrix__section--full">';

        $html .= '<span class="meta is-lined is-lined--under make-block zeta">' . $tag->attr('credit') . '</span><p class="small">' . $tag->attr('name') . '</p>';

        $html .= '</div>';

        return $html;
    }
);
?>
