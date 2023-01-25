<?php

return function($site, $pages, $page) {

    $children = $page->children()->listed();
    $buildings = page('building')->children()->listed();
    $thoughts = page('thinking')->children()->listed();
    $writings = page('writing')->children()->listed();
    $tags = page('writing')->tags();
    $types = page('building')->types();

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

