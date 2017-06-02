<header class="marquee">

  <?php
    $pn = get_category_by_slug('pins-needles'); $pn_id = '-'.$pn->term_id;
    $query_marquee = new WP_Query( array( 'cat' => $pn_id, 'posts_per_page' => 1 ) );
    while ($query_marquee->have_posts()) : $query_marquee->the_post();
    $do_not_duplicate[] = $post->ID;
    $article_style = 'post--marquee'; ?>

    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>

  <?php endwhile; ?>

</header>

<div class="core">

  <main class="core__stack col__8">

    <?php
      while ( have_posts() ) : the_post(); $postCount++;
        if ( in_array( $post->ID, $do_not_duplicate ) ) continue;
        $do_not_duplicate[] = $post->ID;

        if ( $postCount == 4 ) $article_style = 'post__core post__core--quote';
        else $article_style = 'post--core';

        include( locate_template( 'templates/content.php', false, false ) );

      endwhile;
    ?>

  </main>

  <aside class="core__rail col__4 core__rail--right">

    <?php include( locate_template( 'templates/content-issue-banner.php', false, false ) ); ?>

    <?php
      $query_rail = new WP_Query( array( 'category_name' => 'pins-needles', 'posts_per_page' => 1 ) );

      while ($query_rail->have_posts()) : $query_rail->the_post();
        if ( in_array( $post->ID, $do_not_duplicate ) ) continue;
        $do_not_duplicate[] = $post->ID;

        $article_style = 'post__rail';

        include( locate_template( 'templates/content.php', false, false ) );

      endwhile;
    ?>

  </aside>

  <aside class="core__bridge col__12 core__bridge--ftf">

    <?php
      $query_ftf = new WP_Query( array( 'category_name' => 'fairy-tale-files', 'posts_per_page' => 10 ) );

      while ($query_ftf->have_posts()) : $query_ftf->the_post();
        if ( in_array( $post->ID, $do_not_duplicate ) ) continue;
        $do_not_duplicate[] = $post->ID;

        $article_style = 'post--bridge--ftf';
        include( locate_template( 'templates/content-ftf.php', false, false ) );

        break;

      endwhile;
    ?>

  </aside>

</div>
