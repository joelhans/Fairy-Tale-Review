<article <?php post_class($article_style); ?>>

  <div class="entry-image">
    <div class="overlay"></div>
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
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
