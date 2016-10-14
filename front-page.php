<!-- FRONT PAGE ANNOUNCEMENT -->
<section class="container front-page-announcement">
  <?php
    $do_not_duplicate = array();
    query_posts( array(
      'post_type' => 'post',
      'showposts' => 1
    ));
    while (have_posts()) : the_post();
    get_template_part('templates/content-announcement', get_post_type() != 'post' ? get_post_type() : get_post_format());
    endwhile;
    wp_reset_query();
    $do_not_duplicate[] = $post->ID;
  ?>
</section>
<!-- END FRONT PAGE ANNOUNCEMENT -->

<!-- FEATURED ARTICLE -->
<section class="container front-page-featured">
  <?php
    $sticky = get_option( 'sticky_posts' );
    query_posts( array(
      'post_type' => 'post',
      'showposts' => 3,
      'ignore_sticky_posts' => 1,
      'post__not_in' => $do_not_duplicate
    ));
    while (have_posts()) : the_post();
    get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
    endwhile;
    $do_not_duplicate[] = $post->ID;
  ?>
</section>
<!-- END FEATURED ARTICLE -->

<!-- LATEST ISSUE BANNER -->
<section class="full-width front-page-latest">
  <section class="container">
    <article>
      <h1>'But then to call ochre a color, and not a catalog, is a disservice'</h1>
      <p>The Ochre Issue has arrived.</p>
      <a href="/ochre/">Order now</a>
    </article>
  </section>
</section>
<!-- END LATEST ISSUE BANNER -->

<!-- FRONT PAGE QUEUE -->
<section class="container-wide front-page-queue">
<?php
  query_posts( array(
    'post_type' => 'post',
    'showposts' => 12,
    'offset' => 2,
    'ignore_sticky_posts' => 1,
    'post__not_in' => $do_not_duplicate
  ));
  while (have_posts()) : the_post();
  get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
  endwhile;
  $do_not_duplicate[] = $post->ID;
  wp_reset_query();
?>
</section>
<!-- END FRONT PAGE QUEUE -->
