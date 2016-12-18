<article <?php post_class($article_style); ?>>

  <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
  <div class="entry-image" style="background-image: url('<?php echo $url; ?>');">
    <div class="overlay"></div>

  </div>

  <a class="entry-link" href="<?php the_permalink(); ?>"></a>

  <div class="entry-title">
    <h2><?php the_title(); ?></h2>
  </div>

  <div class="entry-meta">
    <?php get_template_part('templates/entry-meta'); ?>
  </div>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

</article>
