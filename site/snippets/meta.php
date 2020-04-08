<?php
echo '<div class="matrix">';

    echo ($page->uid() == 'about' && $site->email() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Email</span><p class="small"><a href="mailto:' . $site->email() . '">' . $site->email() . '</a></p></div>' : '');

    echo ($page->uid() == 'about' && $site->phone() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Call</span><p class="small"><a href="tel:' . $site->phone() . '">' . $site->phone() . '</a></p></div>' : '');

    echo ($page->uid() == 'about' && $site->instagram() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Instagram</span><p class="small"><a href="https//instagram.com/' . $site->instagram() . '">Follow</a></p></div>' : '');

    echo ($page->practice() != '' ? '<div class="matrix__section matrix__section--full"><span class="is-lined is-lined--under make-block zeta meta">Practice</span><p class="small">' . $page->practice() . '</p></div>' : '');

    echo ($page->address() != '' ? '<div class="matrix__section matrix__section--full"><span class="is-lined is-lined--under make-block zeta meta">Visit</span><p class="small">' . $page->address() . '<br/><a target="_blank" class="no-barba" href="http://maps.google.com/?q=' . $page->address() . '">Get Directions</a></p></div>' : '');

    echo ($page->status() != '' ? '<div class="matrix__section matrix__section--short matrix__section--full"><h4><span class="is-lined is-lined--after">Status</span><span>' . $page->status() . '</span></h4></div>' : '');


    echo ($page->year() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Year</span><p class="small">' . $page->year() . '</p></div>' : '');

    echo ($page->date() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Date</span><p class="small">' . $page->date('jS F, Y') . '</p></div>' : '');

    echo ($page->author() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Written by</span><p class="small">' . $page->author() . '</p></div>' : '');

    echo ($page->location() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Location</span><p class="small">' . $page->location() . '</p></div>' : '');

    echo ($page->client() != '' ? '<div class="matrix__section"><span class="is-lined is-lined--under make-block zeta meta">Client</span><p class="small">' . $page->client() . '</p></div>' : '');

    echo ($page->team() != '' ? '<div class="matrix__section matrix__section--full"><span class="is-lined is-lined--under make-block zeta meta">Team</span><p class="small">' . $page->team() . '</p></div>' : '');


    if($tags[0]) :
    echo '<div class="matrix__section ">';

    echo '<span class="is-lined is-lined--under make-block zeta meta">Tags</span>';

    echo '<ul class="list list--sep">';

        foreach ($tags as $tag): 

            echo '<li><span class="small text-capitalize  " >';

              echo html($tag);

            echo '</span></li>';

        endforeach;

    echo '</ul>';

    echo '</div>';
    endif;

    if($types[0]) :
    echo '<div class="matrix__section matrix__section--full">';

    echo '<span class="is-lined is-lined--under make-block zeta meta">Types</span>';

    echo '<ul class="list list--sep ">';

        foreach ($types as $type): 

            echo '<li><span class="small text-capitalize " >';

              echo html($type);

            echo '</span></li>';

        endforeach;

    echo '</ul>';

    echo '</div>';
    endif;

