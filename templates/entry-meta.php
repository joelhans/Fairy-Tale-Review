<p class="byline author vcard"><?= __('', 'sage'); ?><?php echo get_post_meta($post->ID, 'post_author', true); ?></p>
<?php if ( is_front_page() ): ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M d'); ?></time>
<?php else: ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<?php if (trim(get_post_meta($post->ID, 'post_is_archive', true)) == true) : ?>
<p class="meta__issue">From <a href="<?php echo esc_url(home_url('/')); echo lcfirst( get_post_meta($post->ID, 'post_archive_issue', true) ); ?>">The <?php echo get_post_meta($post->ID, 'post_archive_issue', true); ?> Issue</a></p>
<?php endif; ?>
<?php endif; ?>
