<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Remove "Category: " from category listing
 */
function filter_category_title($title) {
   return str_replace('Category: ', '', $title);
}
add_filter('get_the_archive_title', __NAMESPACE__ . '\\filter_category_title');

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

function pre_get_posts_front_page( $query ) {
    // Test for front page index
    // and ensure that the query is the main query
    // and not a secondary query (such as a nav menu
    // or recent posts widget output, etc.
    if ( is_front_page() && $query->is_main_query() ) {
        // Modify posts per page
        $query->set( 'posts_per_page', 9 );
    }
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\\pre_get_posts_front_page' );

?>
