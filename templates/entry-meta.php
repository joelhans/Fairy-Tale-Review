<p class="post__author"><?= __('', 'sage'); ?><?php echo get_post_meta($post->ID, 'post_author', true); ?></p>
<p class="post__type"><?php $categories = get_the_category(); echo $categories[0]->name; ?></p>
<?php if ( is_front_page() || is_archive() ): ?>
<time class="post__time updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M d'); ?></time>
<?php else: ?>
<time class="post__time updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<?php if (trim(get_post_meta($post->ID, 'post_is_archive', true)) == true) : ?>
<p class="post__issue">From <a href="<?php echo esc_url(home_url('/')); echo lcfirst( get_post_meta($post->ID, 'post_archive_issue', true) ); ?>">The <?php echo get_post_meta($post->ID, 'post_archive_issue', true); ?> Issue</a></p>
<?php endif; ?>
<?php endif; ?>
