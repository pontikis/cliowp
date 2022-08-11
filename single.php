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

<?php the_post_thumbnail(); ?>

<?php get_template_part('template-parts/topic_meta'); ?>

<?php the_content(); ?>

<?php wp_link_pages(); ?>

<?php endwhile; ?>

<?php get_footer();
