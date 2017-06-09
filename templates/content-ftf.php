<article <?php post_class($article_style); ?>>
  <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>

  <a class="post__link" href="<?php the_permalink(); ?>">

    <figure class="post__image">
      <img src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-01-img', true) ); ?>" />
      <img src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-02-img', true) ); ?>" />
      <img src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-03-img', true) ); ?>" />
    </figure>

    <div class="post__title">
      <h2><?php the_title(); ?></h2>
    </div>

    <div class="post__meta">
      <?php get_template_part('templates/entry-meta'); ?>
    </div>

    <div class="post__excerpt">
      <?php the_excerpt(); ?>
    </div>

  </a>

</article>
