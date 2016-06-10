<?php
  /* Some variables */
  $category_id = get_cat_ID('News');
?>

<section class="full-width">
<section class="primary" role="document">
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
      'showposts' => 1,
      'cat' => '-'.$category_id
    ));
    while (have_posts()) : the_post();
    get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
    endwhile;
    wp_reset_query();
  ?>
</section>
</section>

<!-- Submissions banner -->
<article class="index-submissions">
  <p>Submissions are <a class="index-submissions-open" href="">open</a> for <span class="index-submissions-issue">The Slate Issue.</p>
</article>

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

<article class="index-news">
  <header>
    <h1>News</h1>
  </header>
  <?php query_posts('category_name=news'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <time><?php the_date('M j Y'); ?> </time>
      <?php the_excerpt(); ?>
    </article>
  <?php endwhile; endif;  ?>
</article>

<?php the_posts_navigation(); ?>
