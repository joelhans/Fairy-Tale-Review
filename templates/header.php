<header class="banner">
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
</header>
