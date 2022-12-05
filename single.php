<?php
/**
 * The template for displaying a single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cliowp
 */

?>
<?php get_header(); ?>

<?php
while ( have_posts() ) :
	the_post();
	?>

<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail(); ?>

	<?php get_template_part( 'template-parts/topic-meta' ); ?>

	<?php the_content(); ?>

	<?php wp_link_pages(); // required by theme-check plugin. ?>

<?php endwhile; ?>

<?php get_footer(); ?>
