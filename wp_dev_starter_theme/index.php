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

<div>
<?php the_author_posts_link();  ?> | <?php the_time('j-n-Y');  ?> | <?php echo get_the_category_list(', ');  ?>
</div>

<?php the_excerpt(); ?>

<small><a href="<?php the_permalink(); ?>">More &raquo; </a></small>

<hr>

<?php endwhile; ?>

<p><?php echo paginate_links(); ?></p>

<?php get_footer();
