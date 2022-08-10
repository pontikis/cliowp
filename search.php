<?php
/**
 * The main template file for displaying the Search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

$results       = new WP_Query("s=$s&showposts=-1");
$count_results = $results->post_count;
wp_reset_query();
?>
<?php get_header(); ?>

<h1><?php _e('Search results'); ?></h1>

<h2><?php _e('Search query'); ?>: &ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</h2>

<?php if ($count_results): ?>
<h3><?php _e('Results'); ?>: <?php echo $count_results ?></h3>
<?php else: ?>
<h3><?php _e('No results for this query'); ?>...</h3>
<?php endif; ?>

<?php get_template_part('parts/famous_wordpress_loop'); ?>

<p><?php echo paginate_links(); ?>
</p>

<?php get_footer();
