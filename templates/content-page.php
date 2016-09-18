<?php use Roots\Sage\Titles; ?>

<article <?php post_class(); ?>>

  <!-- <div class="entry-image">
  <?php if ( has_post_thumbnail() ) {
     the_post_thumbnail('front-page-thumb');
    } ?>
  </div> -->

  <header class="page-header">
    <h1><?= Titles\title(); ?></h1>
  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

</article>
