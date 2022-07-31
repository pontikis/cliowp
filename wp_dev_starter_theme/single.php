<?php
/**
 * The template for displaying a single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
?>
<?php get_header(); ?>

<?php while (have_posts()):
    the_post(); ?>

<h1><?php the_title(); ?>
</h1>

<div>
<?php get_template_part('parts/topic_meta');  ?>
</div>

<?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer();
