<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

return [
  'debug'  => true,
  'home' => 'building',
  'panel' =>[
    'install' => true
  ],
];


/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options


*/
// c::set('routes', array(
//     array(
//         'pattern' => 'api/(:any?)',
//         'action'  => function($type_uid) {
//             header('Content-type: application/json; charset=utf-8');
//             $per_page = 100;
//             $page = site()->children()->find($type_uid);
//             $data = $page->children()->visible()->flip()->paginate($per_page);
//
//             $count = 0;
//             $json = array();
//             $posts = array();
//
//             $json['data']  = array();
//             $json['pages'] = $data->pagination()->countPages();
//             $json['page']  = $data->pagination()->page();
//             $json['items'] = $data->pagination()->items();
//             $json['per_page'] = $per_page;
//
//             // fetch all awards
//             $json['awards'] = $data->visible()->pluck('awards', ',', true);
//             // fetch all tags
//             $json['tags'] = $data->visible()->pluck('tags', ',', true);
//
//
//
//             $posts = $data;
//
//             foreach($posts as $post) {
//
//                 $images = array();
//
//                 foreach($post->images() as $image) {
//                     $images[] = array(
//                         'url'    => $image->url(),
//                         'width'  => $image->width(),
//                         'height' => $image->height()
//                     );
//                 }
//
//
//                 $feature_url = ($post->image('feature.jpg') ? $post->image('feature.jpg')->url() : null ) ;
//
//                 if($post->hasPrevVisible()):
//
//
//
//                     $previous = (object)array(
//                         'url' => $post->prevVisible()->url(),
//                         'uid' => $post->prevVisible()->uid(),
//                         'title' => html($post->prevVisible()->title()),
//                         'subtitle' => html($post->prevVisible()->subtitle()),
//                         'color' => html($post->prevVisible()->color())
//                     );
//
//                 else :
//                     $previous = null;
//                 endif;
//
//                 if($post->hasNextVisible()):
//
//
//                     $next = (object)array(
//                         'url' => $post->nextVisible()->url(),
//                         'uid' => $post->nextVisible()->uid(),
//                         'title' => html($post->nextVisible()->title()),
//                         'subtitle' => html($post->nextVisible()->subtitle()),
//                         'color' => html($post->nextVisible()->color())
//
//                     );
//                 else :
//                     $next = null;
//
//                 endif;
//
//                 // Build Tags Array
//                 $tags = $post->tags();
//                 $tagsAsArray = explode(",", $tags);
//                 $tagsAsArray=array_map('trim',$tagsAsArray);
//
//                 // Build Awards Array
//                 $awards = $post->awards();
//                 $awardsAsArray = explode(",", $awards);
//                 $awardsAsArray =array_map('trim',$awardsAsArray);
//
//                 $summary = truncate($post->summary()->kirbytext(), 26, '<span class="link__read-more">...</span>');
//
//                 $json['data'][] = array(
//                     'index' => (int)$count,
//                     'url'   => (string)$post->url(),
//                     'uid'   => (string)$post->uid(),
//                     'title' => (string)$post->title(),
//                     'year' => (string)$post->year(),
//                     'awardsAsArray' => (array)$awardsAsArray,
//                     'awards' => (string)$awards,
//                     'tagsAsArray' => (array)$tagsAsArray,
//                     'tags' => (string)$tags,
//                     'published'  => (string)$post->published(),
//                     'type'  => (string)$post->type(),
//                     'subtitle'  => (string)$post->subtitle(),
//                     'company'  => (string)$post->company(),
//                     'website'  => (string)$post->website(),
//                     'text'  => (string)$post->text()->kirbytext(),
//                     'summary'  => (string)$summary,
//                     'parent'    => (string)$post->parent()->uid(),
//                     'feature_image' => (string)$feature_url,
//                     'images'=> (array)$images,
//                     'color'=> (string)$post->color(),
//                     'previous' => $previous,
//                     'next' => $next
//                 );
//
//                 $count++;
//
//             }
//
//             return response::json($json);
//
//         }
//
//     )
// ));
