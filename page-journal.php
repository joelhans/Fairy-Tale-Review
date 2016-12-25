<?php
/**
 * Template Name: Journal page
 */
?>

<?php use Roots\Sage\Titles; ?>

<section class="container">
<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>

    <header class="page-header">
      <h1><?= Titles\title(); ?></h1>
    </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>

<?php endwhile; ?>

    <?php
      query_posts( array(
        'post_type'  => 'page',
        'posts_per_page' => -1,
        'meta_query' => array(
          array(
            'key'   => '_wp_page_template',
            'value' => 'page-issue.php'
          )
        )
      ));
      while (have_posts()) : the_post(); ?>

      <section class="issue-listing">
        <section class="issue-listing-meta">
          <a href="<?php the_permalink(); ?>"><img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $post->post_name; ?>.png" /></a>
        </section>
        <section class="issue-listing-title">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <p>The
            <!-- name --> <?php echo ucwords($post->post_name); ?>
            Issue, our
            <!-- number --> <?php echo get_post_meta($post->ID, 'issue_number', true); ?>,
             was published in
            <!-- year --> <?php echo get_post_meta($post->ID, 'issue_year', true); ?>.
          </p>
          <p><a href="<?php the_permalink(); ?>">See more.</a></p>
        </section>
      </section>

      <?php endwhile;
      wp_reset_query();?>

  </article>


</section>
