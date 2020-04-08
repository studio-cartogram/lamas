<?php

return function($site, $pages, $page) {

    $children = $page->children()->visible();
    $buildings = page('building')->children()->visible();
    $thoughts = page('thinking')->children()->visible();
    $writings = page('writing')->children()->visible();

    // Not homepage;

    $isHomeMenu = $page->uid() == 'building' || $page->uid() == 'thinking' || $page->isHomePage();

    if(!$isHomeMenu) :
        $tags = $page->tags();
        $tagsAsArray = explode(",", $tags);
        $tags = array_map('trim',$tagsAsArray);
        $types = $page->types();
        $typesAsArray = explode(",", $types);
        $types = array_map('trim',$typesAsArray);
    endif;

    // pass $projects 
    return compact('children', 'thoughts', 'writings', 'tags', 'types', 'isHomeMenu');

};

