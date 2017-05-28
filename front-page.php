<header class="marquee">

  <?php $query_marquee = new WP_Query('&posts_per_page=3');
    while ($query_marquee->have_posts()) : $query_marquee->the_post();
    $do_not_duplicate[] = $post->ID;
    $article_style = 'col__4'; ?>

    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>

  <?php endwhile; ?>

</header>

<div class="core">

  <?php while ( have_posts() ) : the_post();
    if( in_array( $post->ID, $do_not_duplicate ) ) continue;
    $article_style = 'col__4'; ?>
    <?php include( locate_template( 'templates/content.php', false, false ) ); ?>
  <?php endwhile; ?>

</div>
