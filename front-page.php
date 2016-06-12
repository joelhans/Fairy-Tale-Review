<section class="container front-page-featured">
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <!-- Featured article -->
  <?php
    query_posts( array(
      'post_type' => 'post',
      'showposts' => 2
    ));
    while (have_posts()) : the_post();
    get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
    endwhile;
    wp_reset_query();
  ?>
</section>

<!-- Submissions banner -->

<section class="full-width front-page-latest">
<section class="container">
  <article>
    <h1>'But then to call ochre a color, and not a catalog, is a disservice'</h1>
    <p>The Ochre Issue has arrived.</p>
    <a href="/ochre/">Order now</a>
  <article>
</section>
</section>

<?php
  query_posts( array(
    'post_type' => 'post',
    'showposts' => 6,
    'offset' => 1,
    'cat' => '-'.$category_id
  ));
  while (have_posts()) : the_post();
  get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
  endwhile;
  wp_reset_query();
?>
