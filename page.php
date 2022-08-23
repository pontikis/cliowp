<?php
/**
 * The template for displaying a page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

	<?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
