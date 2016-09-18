<!-- <section class="container front-page-featured">
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?> -->

  <!-- FEATURED ARTICLE -->
  <!-- <?php
    query_posts( array(
      'post_type' => 'post',
      'showposts' => 2
    ));
    while (have_posts()) : the_post();
    get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
    endwhile;
    wp_reset_query();
  ?> -->
  <!-- END FEATURED ARTICLE -->
<!--
</section> -->

<!-- BIG CHANGES BANNER -->
<section class="full-width front-page-changes">
<section class="container entry-content">
  <article class="changes-quote">
    <h1>'An encounter with the otherworldly is cause for neither surprise nor fear.'</h1>
    <div>&mdash; Max L&uuml;thi, <em>The Fairytale as Art Form and Portrait of Man</em></div>
  </article>
  <article class="changes-subhead">
    <p>We've been publishing <em>Fairy Tale Review</em> in print since 2005.</p>
    <p>Now, in 2016, it's time to take things a step further.</p>
  </article>
  <article class="changes-explain">
    <p>Some explanation here.</p>

    <h2><em>Fairy Tale Review</em> is going online</h2>
    <p>Don't worry—our beloved print journal isn't going anywhere.</p>
    <p>Every year we attend AWP, with brand-new copies of our latest issue in our hands, we see how our readers react: there is, truly, something special about the printed book, particularly when it comes to fairy tales.</p>
    <p>At the same time, we have spent the last few years recognizing that in order to remain relevant in today's literary landscape, we need to expand our reach. If fairy tales can be spoken, and read from a book, why not from a browser?</p>
    <p>We're excited about this change for many reasons, first of which is that it will allow us to share more fairy tales with more people, particularly those who can't afford to subscribe to our print journal. It means we can reiterate our mission with every new piece. We hope it leads to more people falling in love with fairy tales, again, or for the first time.</p>
    <p>The launch date is uncertain right now, but we hope to bring you the best the best fairy-tale fiction, nonfiction, and poetry on this very site in the near future. We plan on publishing new work every week once we're launched.</p>
    <p>In order to accomodate the need to accept more work, and different kinds of work, we'll be moving to a different submission strategy and schedule than we've worked with in the past.</p>

    <h2>Submissions will be open year-round, <strong>for free</strong></h2>
    <p>Fairy tales are meant for everyone; they are meant to be shared openly. Our founder, Kate Bernheimer, believes this is only possible if we strive to remove as many barriers between our pages and those who wish to tell today's fairy tales.</p>
    <p>To accomodate this, and the addition of publishing work online, submissions will be open year-round. Between January 1 and May 31, we will accept submissions for the print issue. Between April 1 and July 15, we will accept submissions for our annual contest. Between July 15 and December 31, we will accepts submissions for our online presence.</p>
    <p>We also believe strongly that, until we can find means to pay our writers for their work, we are not in a place to ask for a submission fee, except for our contests.</p>
    <p><strong>More submission information can be found <a href="<?= esc_url(home_url('/')); ?>submit/">here</a></strong>.</p>

    <h2>A podcast is coming</h2>
    <p></p>

    <h2>The blog, <em>Fairyland</em>, will return shortly</h2>
    <p>We just need a little bit more time to tidy it up.</p>

    <p>Join us among the otherworldly.</p>
    <p>With love,<br />
    The Editors</p>

  </article>
</section>
</section>
<!-- END BIG CHANGES BANNER -->

<!-- LATEST ISSUE BANNER -->
<section class="full-width front-page-latest">
<section class="container">
  <article>
    <h1>'But then to call ochre a color, and not a catalog, is a disservice'</h1>
    <p>The Ochre Issue has arrived.</p>
    <a href="/ochre/">Order now</a>
  </article>
</section>
</section>

<!-- END LATEST ISSUE BANNER -->

<!-- <?php
  query_posts( array(
    'post_type' => 'post',
    'showposts' => 6,
    'offset' => 1,
    'cat' => '-'.$category_id
  ));
  while (have_posts()) : the_post();
  get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format());
  endwhile;
  wp_reset_query();
?> -->
