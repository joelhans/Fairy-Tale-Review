<?php
/**
 * Template Name: About page
 */
?>

<section class="container page-about">

  <section class="about-tagline">
    <h1><em>Fairy Tale Review</em> is a literary journal dedicated to publishing new, inclusive, and innovative fairy-tale prose and poetry.</h1>
  </section>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>

</section>
