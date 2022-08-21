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

<h1><?php esc_html_e('Search results', 'cliowp'); ?>
</h1>

<?php if (trim(get_search_query())): ?>

<h2><?php esc_html_e('Search query', 'cliowp') . ':'; ?>
    &ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</h2>

<?php if ($count_results): ?>
<h3><?php esc_html_e('Results', 'cliowp'); echo ':'; ?>
    <?php echo $count_results ?>
</h3>
<?php else: ?>
<h3><?php esc_html_e('No results for this query', 'cliowp'); echo '...'; ?>
</h3>
<?php endif; ?>

<?php get_template_part('template-parts/famous_wordpress_loop'); ?>

<p><?php echo paginate_links(); ?>
</p>

<?php else: ?>

<h3><?php esc_html_e('Please enter a search term', 'cliowp'); echo '...'; ?>
</h3>

<?php endif; ?>

<?php get_footer();
