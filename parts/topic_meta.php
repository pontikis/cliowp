<?php if ('post' === get_post_type()): ?>
<div class="cliowp-post-meta-container">
    <?php the_author_posts_link(); ?> | <?php the_time('j-n-Y'); ?> | <?php echo get_the_category_list(', '); ?>
</div>
<?php endif;
