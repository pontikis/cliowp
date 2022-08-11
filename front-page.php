<?php
/**
 * Specific template file for displaying the Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

$recent_posts = new WP_Query([
    'posts_per_page' => 3
]);
?>
<?php get_header(); ?>

<h1><?php _e('Home', 'cliowp'); ?></h1>

<?php while ($recent_posts->have_posts()): ?>
<?php $recent_posts->the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php echo wp_trim_words(get_the_content(), 15); ?> <a
        href="<?php the_permalink(); ?>"><?php _e('Read more', 'cliowp'); ?></a></p>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php get_footer();
