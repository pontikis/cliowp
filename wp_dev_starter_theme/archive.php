<?php
/**
 * The main template file for displaying Archives (categty topics, author topics, date topics etc)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php get_header(); ?>

<h1><?php the_archive_title(); ?>
</h1>
<p><?php the_archive_description(); ?>
</p>

<?php get_template_part('parts/famous_wordpress_loop'); ?>

<p><?php echo paginate_links(); ?>
</p>

<?php get_footer();
