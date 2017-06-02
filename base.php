<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body>

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <main class="wrap" role="document">
      <?php include Wrapper\template_path(); ?>
    </main>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>

  </body>
</html>
