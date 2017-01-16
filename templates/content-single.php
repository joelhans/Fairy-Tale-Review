<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <header>
      <h1 class="entry-title"><?= the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-image">
    <?php if ( has_post_thumbnail() ) {
       the_post_thumbnail('full');
      } ?>
      <cite>Artwork by <a href="<?php echo get_post_meta($post->ID, 'post_illustrator_url', true); ?>"><?php echo get_post_meta($post->ID, 'post_illustrator', true); ?></a>.</cite>
    </div>

    <div class="entry-content">
      <?php if ( in_category('fairy-tale-files') ) : ?>
        <p class="fairy-tale-file-intro">Fairy-Tale Files, published once weekly, feature three variations of a fairy tale chosen by one of <em>Fairy Tale Review</em>’s editors, readers, editorial assistants, or contributors.</p>
      <?php endif; ?>
      <?php the_content(); ?>
    </div>

    <footer>
      <?php if (trim(get_post_meta($post->ID, 'post_author_bio', true)) == true) : ?>
      <p class="byline author vcard"><?= __('', 'sage'); ?><?php echo get_post_meta($post->ID, 'post_author_bio', true); ?></p>
      <?php $attachment_id = get_post_meta($post->ID, 'post_author_pic', true); ?>
      <div class="author-avatar" style="background-image: url(<?php echo wp_get_attachment_url( $attachment_id ); ?>);"></div>
      <?php endif; ?>
    </footer>

  </article>
<?php endwhile; ?>
