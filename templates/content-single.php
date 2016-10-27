<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <!-- <div class="entry-image">
    <?php if ( has_post_thumbnail() ) {
       the_post_thumbnail('front-page-thumb');
      } ?>
    </div> -->

    <header>
      <h1 class="entry-title"><?= the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <div class="entry-content">
      <?php if ( in_category('fairy-tale-files') ) : ?>
        <p class="fairy-tale-file-intro">Fairy-Tale Files, published once weekly, feature three variations of a fairy tale chosen by one of <em>Fairy Tale Review</em>’s editors, readers, editorial assistants, or contributors.</p>
      <?php endif; ?>
      <?php the_content(); ?>
    </div>

    <footer>
      <?php if (trim(get_post_meta($post->ID, 'post_author_bio', true)) == true) : ?>
      <p class="byline author vcard"><?= __('', 'sage'); ?><?php echo get_post_meta($post->ID, 'post_author_bio', true); ?></p>
      <div class="author-avatar" style="background-image: url(<?php echo get_site_url(); echo get_post_meta($post->ID, 'post_author_pic', true); ?>);"></div>
      <?php endif; ?>
    </footer>

  </article>

  <!-- <?php if ( in_category('fairy-tale-files') ) : ?>

  <nav class="nav-ftf">
    <h1>More Fairy-Tale Files</h1>
    <div class="nav-next">
      <?php $n = get_adjacent_post(true, '', false);
            if ( !empty ($n) ) : ?>
      <a href="<?php echo get_permalink($n->ID); ?>"><?php echo $n->post_title; ?></a>
      <?php endif; ?>
    </div>
    <div class="nav-prev">
      <?php $p = get_adjacent_post(true, '', true);
            if ( !empty ($p) ) : ?>
        <a href="<?php echo get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a>
      <?php endif; ?>
    </div>
  </nav>

<?php elseif ( in_category('pins-needles') ) : ?>

  <nav class="nav-pins-needles">
    <h1>More Pins &amp; Needles</h1>
    <div class="nav-next">
      <?php $n = get_adjacent_post(true, '', false);
            if ( !empty ($n) ) : ?>
      <a href="<?php echo get_permalink($n->ID); ?>"><?php echo $n->post_title; ?></a>
      <?php endif; ?>
    </div>
    <div class="nav-prev">
      <?php $p = get_adjacent_post(true, '', true);
            if ( !empty ($p) ) : ?>
        <a href="<?php echo get_permalink($p->ID); ?>"><?php echo $p->post_title; ?></a>
      <?php endif; ?>
    </div>
  </nav>

  <?php endif; ?> -->

<?php endwhile; ?>
