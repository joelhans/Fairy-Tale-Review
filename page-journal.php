<?php
/**
 * Template Name: Journal page
 */
?>

<?php use Roots\Sage\Titles; ?>

<div class="page__wrap">

  <article class="page page--journal">

    <header class="page__header col__12">
      <h1><?= Titles\title(); ?></h1>
    </header>

    <div class="journal__content content__area col__4">
      <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
    </div>

    <div class="journal__recent col__8">

      <?php
        $query_catalog = new WP_Query( array( 'post_type' => 'page', 'posts_per_page' => 1, 'meta_query' => array( array( 'key' => '_wp_page_template', 'value' => 'page-issue.php' ) ) ) );
        while ($query_catalog->have_posts()) : $query_catalog->the_post();
      ?>

      <a href="<?php the_permalink(); ?>">

        <figure class="issue__cover col__4--8">
          <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $post->post_name; ?>.png" />
        </figure>

        <article class="issue__teaser col__4--8">

          <?php the_excerpt(); ?>

        </article>

      </a>

      <?php endwhile; ?>

    </div>

    <section class="journal__catalog">

      <?php
        $query_catalog = new WP_Query( array( 'post_type' => 'page', 'offset' => 1, 'posts_per_page' => 100, 'meta_query' => array( array( 'key' => '_wp_page_template', 'value' => 'page-issue.php' ) ) ) );
        while ($query_catalog->have_posts()) : $query_catalog->the_post();
      ?>

      <article class="catalog__issue col__4">

        <a href="<?php the_permalink(); ?>">

          <figure class="issue__cover">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $post->post_name; ?>.png" />
          </figure>

          <figcaption>
            <p>The
              <?php echo ucwords($post->post_name); ?>
              Issue,
              <?php echo get_post_meta($post->ID, 'issue_year', true); ?>
            </p>
          </figcaption>

        </a>

      </article>

      <?php endwhile; ?>

    </section>

  </article>

</div>
