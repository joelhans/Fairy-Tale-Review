<?php use Roots\Sage\Titles; ?>

<?php while (have_posts()) : the_post(); ?>
  <article class="post post--single">

    <header class="post__header col__8 off__2">
      <h1><?= Titles\title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <?php
      $illustration = get_post_meta($post->ID, 'post_illustration_display', true); $meta = $meta[0];
      if ( has_post_thumbnail() && $illustration == true ):
    ?>
    <figure class="post__image col__8 off__2">
       <?php the_post_thumbnail('full'); ?>
       <figcaption><?php echo get_post_meta($post->ID, 'post_illustrator', true); ?></figcaption>
    </figure>
    <?php endif; ?>

    <div class="post__content content__area col__8 off__2">

    <?php $ftf_01_text = get_post_meta($post->ID, 'ftf-01-text', true);
          if ( in_category('fairy-tale-files') && $ftf_01_text == true ): ?>

      <p class="ftf__intro">Fairy-Tale Files, published once weekly, feature three variations of a fairy tale chosen by one of <em>Fairy Tale Review</em>’s editors, readers, editorial assistants, or contributors.</p>

      <hr />

      <div class="ftf__container">
        <div class="ftf__text col__4--8">
          <?php echo wpautop( get_post_meta( $post->ID, 'ftf-01-text', true ) ); ?>
        </div>
        <div class="ftf__image col__4--8">
          <img src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-01-img', true) ); ?>" />
        </div>
      </div>

      <hr />

      <div class="ftf__container">
        <div class="ftf__text col__4--8">
          <?php echo wpautop( get_post_meta( $post->ID, 'ftf-02-text', true ) ); ?>
        </div>
        <div class="ftf__image col__4--8">
          <img src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-02-img', true) ); ?>" />
        </div>
      </div>

      <hr />

      <div class="ftf__container">
        <div class="ftf__text col__4--8">
          <?php echo wpautop( get_post_meta( $post->ID, 'ftf-03-text', true ) ); ?>
        </div>
        <div class="ftf__image col__4--8">
          <img src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-03-img', true) ); ?>" />
        </div>
      </div>

    <?php elseif ( in_category('fairy-tale-files') && $ftf_01_text == false ): ?>
    <p class="ftf__intro">Fairy-Tale Files, published once weekly, feature three variations of a fairy tale chosen by one of <em>Fairy Tale Review</em>’s editors, readers, editorial assistants, or contributors.</p>

    <hr />

    <?php endif; ?>

    <?php the_content(); ?>
    </div>

    <footer class="col__8 off__2">
      <?php
        $attachment_id = get_post_meta($post->ID, 'post_author_pic', true);
        if (trim(get_post_meta($post->ID, 'post_author_bio', true)) == true) :
      ?>
      <div class="post__bio col__5--8">
        <?= __('', 'sage'); ?><?php echo wpautop( get_post_meta($post->ID, 'post_author_bio', true) ); ?>
      </div>
      <div class="post__avatar col__3--8">
        <div style="background-image: url(<?php echo wp_get_attachment_url( $attachment_id ); ?>);"></div>
      </div>
      <?php endif; ?>
    </footer>

  </article>

<?php endwhile; ?>
