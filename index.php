<?php use Roots\Sage\Titles; ?>

<section class="core core--archive">

  <header class="archive__header col__8">

    <h1><?= Titles\title(); ?></h1>

  </header>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php
    while (have_posts()) : the_post();
    $article_style = 'post--core';

      include( locate_template( 'templates/content.php', false, false ) );

    endwhile;
  ?>

  <?php the_posts_navigation(); ?>

</section>
