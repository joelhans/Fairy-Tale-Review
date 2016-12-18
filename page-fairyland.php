<?php
/**
 * Template Name: Fairyland page
 */
?>

<section class="container loop-fairyland">

<?php get_template_part('templates/page', 'header'); ?>

<section class="fairyland-prose">
  <h1><a href="<?php echo home_url() ?>/category/prose/">Prose</a></h1>
  <?php $args = array( 'category_name' => 'prose', 'posts_per_page' => '1' ); ?>
  <?php $prose_query = new WP_Query( $args ); ?>
  <?php while ($prose_query->have_posts()) : $prose_query->the_post(); ?>
    <?php $article_style = 'one-half'; ?>
    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>
  <?php endwhile; wp_reset_postdata(); ?>
</section>

<section class="fairyland-poetry">
  <h1><a href="<?php echo home_url() ?>/category/poetry/">Poetry</a></h1>
  <?php $args = array( 'category_name' => 'poetry', 'posts_per_page' => '1' ); ?>
  <?php $poetry_query = new WP_Query( $args ); ?>
  <?php while ($poetry_query->have_posts()) : $poetry_query->the_post(); ?>
    <?php $article_style = 'one-half'; ?>
    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>
  <?php endwhile; wp_reset_postdata(); ?>
</section>

<section class="fairyland-ftf">
  <h1><a href="<?php echo home_url() ?>/category/fairy-tale-files/">Fairy-Tale Files</a></h1>
  <?php $args = array( 'category_name' => 'fairy-tale-files', 'posts_per_page' => '4' ); ?>
  <?php $ftf_query = new WP_Query( $args ); ?>
  <?php while ($ftf_query->have_posts()) : $ftf_query->the_post(); ?>
    <?php $article_style = 'one-half'; ?>
    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>
  <?php endwhile; wp_reset_postdata(); ?>
</section>

<section class="fairyland-pins-needles">
  <h1><a href="<?php echo home_url() ?>/category/pins-needles/">Pins &amp; Needles</a></h1>
  <?php $args = array( 'category_name' => 'pins-needles', 'posts_per_page' => '4' ); ?>
  <?php $pn_query = new WP_Query( $args ); ?>
  <?php while ($pn_query->have_posts()) : $pn_query->the_post(); ?>
    <?php $article_style = 'one-quarter'; ?>
    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>
  <?php endwhile; wp_reset_postdata(); ?>
</section>

</section>
