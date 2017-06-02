<?php
/**
 * Template Name: About page
 */
?>

<div class="page__wrap">

  <article class="page page--about">

    <header class="about__section">
      <h1><em>Fairy Tale Review</em> is a literary journal dedicated to publishing new, inclusive, and innovative fairy-tale prose and poetry.</h1>
    </header>

    <div class="about__content col__8 off__2">
      <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
    </div>

    <section class="about__section">
      <h1>Our people</h1>
    </section>

    <div class="about__masthead col__8 off__2">

      <?php for ($x = 1; $x <= 20; $x++): ?>
        <?php $y = str_pad($x, 2, "0", STR_PAD_LEFT); $title = 'masthead_'.$y.'_title'; $bio = 'masthead_'.$y; ?>
        <?php $attachment_id = get_post_meta($post->ID, 'masthead_'.$y.'_img', true); ?>
        <?php if ( !$attachment_id == '' ): ?>

        <section class="masthead__member">
          <div class="masthead__meta col__3--8">
            <div class="masthead__img" style="background-image: url(<?php echo wp_get_attachment_url( $attachment_id ); ?>);"></div>
            <h1><?php echo get_post_meta($post->ID, $title, true); ?></h1>
          </div>
          <div class="masthead__bio col__5--8">
            <p><?php echo get_post_meta($post->ID, $bio, true); ?></p>
          </div>
        </section>

        <?php endif; ?>
      <?php endfor; ?>

    </div>

    <section class="about__section">
      <h1>Our advisory board</h1>
    </section>

    <div class="about__advisory col__8 off__2">
      <p>Donald Haase, Wayne State University<br />
        Maria Tatar, Harvard University<br />
        Jack Zipes, University of Minnesota<br />
      </p>
      <p>Contributing Editor: Timothy Schaffert, University of Nebraska</p>
    </div>

    <section class="about__section">
      <h1>How to reach us</h1>
    </section>

    <div class="about__contact col__8 off__2">
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

</div>
