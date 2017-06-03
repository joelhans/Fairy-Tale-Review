<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Create new thumbnail size for the front page.
 */
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

  // additional image sizes
  // delete the next line if you do not need additional image sizes
  add_image_size( 'front-page-thumb', 400, 300, true ); //300 pixels wide (and unlimited height)
}

/**
 * Remove "Category: " from category listing
 */
function filter_category_title($title) {
   return str_replace('Category: ', '', $title);
}
add_filter('get_the_archive_title', __NAMESPACE__ . '\\filter_category_title');

/**
 * Set the number of posts for the main loop, and restrict the category.
 */
function pre_get_posts_front_page( $query ) {
  $cat = get_category_by_slug('pins-needles');
  $cat_id = '-'.$cat->term_id;
  if ( is_front_page() && $query->is_main_query() ) {
    $query->set( 'posts_per_page', 8 );
    $query->set( 'cat', $cat_id );
  }
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\\pre_get_posts_front_page' );

add_post_type_support( 'page', 'excerpt' );

?>
