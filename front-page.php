<section class="full-width front-page-splash">
  <section class="container">
    <article>
      <h1>Excuse us. Things are changing. We'll be back shortly.</h1>
    </article>
  </section>
</section>

<section class="container loop-front-page">

<!-- THE LOOP -->
<?php while ( have_posts() ) : the_post(); ?>
  <?php $article_style = NULL; ?>

  <!-- ONE-HALF // 1,4,9 -->
  <?php if( $wp_query->current_post == 0 || $wp_query->current_post == 3 || $wp_query->current_post == 8 ) { $article_style = 'one-half'; } ?>
  <!-- END ONE-HALF -->
  <!-- ONE-QUARTER // 2,3,5,6,7,8 -->
  <?php if( $wp_query->current_post >= 1 && $wp_query->current_post <= 2 || $wp_query->current_post >= 4 && $wp_query->current_post <= 7 ) { $article_style = 'one-quarter'; } ?>
  <!-- END ONE-QUARTER -->
  <!-- BREAK FOR LATEST ISSUE BANNER -->
  <?php if( $wp_query->current_post == 3 ) : ?>
  </section>
  <?php get_template_part('templates/content-issue-banner', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <section class="container loop-front-page">
  <?php endif; ?>
  <!-- END BREAK FOR LATEST ISSUE BANNER -->

  <!-- LOCATING THE TEMPLATE PART -->
  <?php include( locate_template( 'templates/content.php', false, false ) ); ?>
  <!-- DONE LOCATING THE TEMPLATE PART -->

<?php endwhile; ?>
<!-- END LOOP -->

</section>
