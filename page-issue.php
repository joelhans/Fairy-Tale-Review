<?php
/**
 * Template Name: Issue page
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

      <!-- Get pre-order variable -->
      <?php $meta = get_post_meta($post->ID, 'issue_preorder', true); $meta = $meta[0]; ?>

      <!-- If not a preorder -->
      <?php if ( $meta != 'preorder' ): ?>
      <section class="issue-meta">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $post->post_name; ?>.png" />
        <a href="<?php echo get_post_meta($post->ID, 'issue_wsup_physical', true); ?>">Buy a copy</a>
        <a href="<?php echo get_post_meta($post->ID, 'issue_wsup_pdf', true); ?>">Buy a PDF</a>
        <a class="detail" href="<?php echo get_post_meta($post->ID, 'issue_jstor', true); ?>">Read on JSTOR <span>Free, requires library access</span></a>
        <a class="detail" href="<?php echo get_post_meta($post->ID, 'issue_wsup_institution', true); ?>">Buy a copy <span>For institutions</span></a>
      </section>
      <!-- For preorders -->
      <?php elseif ( $meta == 'preorder' ): ?>
      <section class="issue-meta">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/covers/FTR_cover_<?php echo $post->post_name; ?>.png" />
        <a href="<?php echo get_post_meta($post->ID, 'issue_wsup_physical', true); ?>">Pre-order a copy</a>
      </section>
      <?php endif; ?>

      <section class="issue-description">
        <p>The
          <!-- name --> <?php echo ucwords($post->post_name); ?>
          Issue, our
          <!-- number --> <?php echo get_post_meta($post->ID, 'issue_number', true); ?>,
          <!-- tense --> <?php if ( $meta = 'preorder' ): ?>will be <?php else: ?>was <?php endif; ?>
          published in
          <!-- year --> <?php echo get_post_meta($post->ID, 'issue_year', true); ?>.
        </p>
        <hr />
        <?php the_content(); ?>
      </section>

    </div>

  </article>

<?php endwhile; ?>
</section>
