<?php
/**
 * Specific template file for displaying the Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>

<?php while (have_posts()): ?>

<?php the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<hr>

<?php endwhile; ?>

<?php get_footer();
