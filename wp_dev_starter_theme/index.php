<?php
/**
 * The main template file for displaying the Home page
 * (or any other page if a specific template does not exist for it).
 *
 * This is the Famous WordPress Loop
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
