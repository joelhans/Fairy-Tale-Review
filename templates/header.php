<header class="banner">

  <section>

  <nav class="nav-primary">
    <div class="nav-bunch">
      <i class="fa fa-tree"></i>
      <a class="nav-about">About</a>
      <a href="<?= esc_url(home_url('/')); ?>submit/">Submit</a>
      <a href="<?= esc_url(home_url('/')); ?>fairyland/">Fairyland</a>
      <a href="<?= esc_url(home_url('/')); ?>annual-journal/">Journal</a>
    </div>
  </nav>

  <div class="nav-brand">
    <a href="<?= esc_url(home_url('/')); ?>">
      <div class="ftr-logo"></div>
      <div class="ftr-title">Fairy Tale Review</div>
    </a>
  </div>

  <nav class="nav-social">
    <a href="//twitter.com/fairytalereview"><i class="fa fa-twitter"></i></a>
    <a href="//www.facebook.com/fairytalereview/"><i class="fa fa-facebook"></i></a>
    <a href="//www.facebook.com/fairytalereview/"><i class="fa fa-instagram"></i></a>
  </nav>

  </section>

  <div class="about-pulldown">
    <section>

    <div class="about-pulldown-hero">
      <h1><em>Fairy Tale Review</em> is a literary journal dedicated to publishing new fairy-tale fiction, nonfiction, and poetry.</h1>
    </div>

    <div class="about-pulldown-third about-pulldown-mission">
      <a href="<?= esc_url(home_url('/')); ?>mission/">Our Mission</a>
    </div>

    <div class="about-pulldown-third about-pulldown-masthead">
      <a href="<?= esc_url(home_url('/')); ?>masthead/">Our Masthead</a>
    </div>

    <div class="about-pulldown-third about-pulldown-contact">
      <a href="<?= esc_url(home_url('/')); ?>contact/">Contact Us</a>
    </div>

    </section>
  </div>

</header>

<!-- <header class="banner">
  <section>
  <div class="brand">
    <a href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>
  <nav class="nav-primary">
    <ul class="social-search">
      <li>
        <a href=""><i class="a fa-twitter"></i></a>
      </li>
      <li>
        <a href=""><i class="a fa-facebook"></i></a>
      </li>
      <li>
        <a href=""><i class="a fa-search"></i></a>
        <section class="sub-menu">
          <div>
            <p>Search <em>Fairy Tale Review</em>:</p>
          </div>
          <?php get_search_form(); ?>
        </section>
      </li>
    </ul>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
  </nav>
</section>
</header> -->
