<?php
/**
 * Template Name: About page
 */
?>

<section class="container page-about">

  <section class="about-tagline">
    <h1><em>Fairy Tale Review</em> is a literary journal dedicated to publishing new, inclusive, and innovative fairy-tale prose and poetry.</h1>
  </section>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>

  <section class="about-masthead">
    <h1>Our people</h1>
  </section>

  <article class="post-6 page type-page status-publish hentry">
    <div class="entry-content">

      <?php for ($x = 1; $x <= 11; $x++): ?>
        <?php $y = str_pad($x, 2, "0", STR_PAD_LEFT); $title = 'masthead_'.$y.'_title'; $bio = 'masthead_'.$y; ?>
        <?php $attachment_id = get_post_meta($post->ID, 'masthead_'.$y.'_img', true); ?>
        <?php if ( $attachment_id == '' ) { return; }; ?>
        <section class="masthead-member clearfix">
          <div class="masthead-meta">
            <div class="masthead-img" style="background-image: url(<?php echo wp_get_attachment_url( $attachment_id ); ?>);"></div>
            <h1><?php echo get_post_meta($post->ID, $title, true); ?></h1>
          </div>
          <div class="masthead-bio">
            <p><?php echo get_post_meta($post->ID, $bio, true); ?></p>
          </div>
        </section>
      <?php endfor; ?>

    </div>
  </article>

  <section class="about-contact">
    <h1>How to reach us</h1>
  </section>

  <article class="post-6 page type-page status-publish hentry">
    <div class="entry-content">
      <p>For editorial queries, please contact us at <a href="mailto:ftreditorial@gmail.com">ftreditorial@gmail.com</a>.</p>
      <p>We can accept mail at our mailing address, but as of 2017, we do not accept postal submissions.</p>
      <p>Kate Bernheimer<br />
        Department of English<br />
        Modern Languages Building<br />
        University of Arizona<br />
        Tucson, AZ 85721<br />
      </p>
    </div>
  </article>





</section>
