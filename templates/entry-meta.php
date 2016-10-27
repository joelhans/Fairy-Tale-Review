<p class="byline author vcard"><?= __('', 'sage'); ?><?php echo get_post_meta($post->ID, 'post_author', true); ?></p>
<?php if ( is_front_page() ): ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M d'); ?></time>
<?php else: ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<?php endif; ?>
