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

<h1>Blog</h1>

<?php get_template_part('parts/famous_wordpress_loop'); ?>

<p><?php echo paginate_links(); ?>
</p>

<?php get_footer();
