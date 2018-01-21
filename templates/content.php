<article <?php post_class($article_style); ?>>
  <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

  <a class="post__link" href="<?php the_permalink(); ?>">

    <figure class="post__image">
      <img src="<?php echo $thumbnail_url; ?>" />
    </figure>

    <div class="post__title">
      <h1><?php the_title(); ?></h1>
    </div>

    <div class="post__meta">
      <?php get_template_part('templates/entry-meta'); ?>
    </div>

    <div class="post__excerpt">
      <?php the_excerpt(); ?>
    </div>

  </a>

</article>
