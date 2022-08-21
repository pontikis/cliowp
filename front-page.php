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

<h1><?php esc_html_e('Home', 'cliowp'); ?>
</h1>

<h2><?php esc_html_e('Custom content', 'cliowp'); ?>
</h2>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, tempora numquam ab sapiente omnis ea aspernatur
    placeat aperiam hic exercitationem, facilis iusto cum unde voluptatum, debitis expedita delectus! Doloribus,
    voluptatum?</p>

<hr>

<h2><?php esc_html_e('Custom query', 'cliowp'); ?>
</h2>

<?php while ($recent_posts->have_posts()): ?>
<?php $recent_posts->the_post(); ?>

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p><?php echo wp_trim_words(get_the_content(), 15); ?> <a
        href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'cliowp'); ?></a>
</p>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php get_footer();
