<p class="byline author vcard"><?= __('', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
<?php if ( is_front_page() ): ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date('M d'); ?></time>
<?php else: ?>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<?php endif; ?>
