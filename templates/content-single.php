<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <h1 class="entry-title"><?= the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <!-- Get illustration variable. -->
    <?php $illustration = get_post_meta($post->ID, 'post_illustration_display', true); $meta = $meta[0]; ?>
    <?php if ( has_post_thumbnail() && $illustration == true ): ?>
    <div class="entry-image">
       <?php the_post_thumbnail('full'); ?>
       <cite>Artwork by <a href="<?php echo get_post_meta($post->ID, 'post_illustrator_url', true); ?>"><?php echo get_post_meta($post->ID, 'post_illustrator', true); ?></a>.</cite>
    </div>
    <?php endif; ?>

    <!-- Check to see if post is a Fairy-Tale File. -->
    <!-- If it is, we look for vintage vs. modern format. -->
    <?php $ftf_01_text = get_post_meta($post->ID, 'ftf-01-text', true);
          if ( in_category('fairy-tale-files') && $ftf_01_text == true ):
    ?>
    <div class="entry-content">
      <p class="ftf-intro">Fairy-Tale Files, published once weekly, feature three variations of a fairy tale chosen by one of <em>Fairy Tale Review</em>’s editors, readers, editorial assistants, or contributors.</p>
      <div class="ftf-container">
        <div class="ftf-text">
          <?php echo wpautop( get_post_meta( $post->ID, 'ftf-01-text', true ) ); ?>
        </div>
        <img class="ftf-image" src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-01-img', true) ); ?>" />
      </div>
      <div class="ftf-container">
        <div class="ftf-text">
          <?php echo wpautop( get_post_meta( $post->ID, 'ftf-02-text', true ) ); ?>
        </div>
        <img class="ftf-image" src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-02-img', true) ); ?>" />
      </div>
      <div class="ftf-container">
        <div class="ftf-text">
          <?php echo wpautop( get_post_meta( $post->ID, 'ftf-03-text', true ) ); ?>
        </div>
        <img class="ftf-image" src="<?php echo wp_get_attachment_url( get_post_meta($post->ID, 'ftf-03-img', true) ); ?>" />
      </div>
    </div>

    <?php elseif ( in_category('fairy-tale-files') && $ftf_01_text == false ): ?>
    <div class="entry-content">
      <p class="ftf-intro">Fairy-Tale Files, published once weekly, feature three variations of a fairy tale chosen by one of <em>Fairy Tale Review</em>’s editors, readers, editorial assistants, or contributors.</p>
      <?php the_content(); ?>
    </div>

    <!-- If not, continue as normal. -->
    <?php else: ?>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <?php endif; ?>

    <footer>
      <?php if (trim(get_post_meta($post->ID, 'post_author_bio', true)) == true) : ?>
      <div class="post__author">
        <?= __('', 'sage'); ?><?php echo wpautop( get_post_meta($post->ID, 'post_author_bio', true) ); ?>
      </div>
      <?php $attachment_id = get_post_meta($post->ID, 'post_author_pic', true); ?>
      <div class="author-avatar" style="background-image: url(<?php echo wp_get_attachment_url( $attachment_id ); ?>);"></div>
      <?php endif; ?>
    </footer>

  </article>
<?php endwhile; ?>
