<section class="container">
  <article class="error">

    <?php get_template_part('templates/page', 'header'); ?>

    <div class="alert alert-warning">
      <?php _e('Sorry, but the page you were trying to find doesn&rsquo;t exist.', 'sage'); ?>
    </div>

    <?php get_search_form(); ?>

  </article>
</section>
