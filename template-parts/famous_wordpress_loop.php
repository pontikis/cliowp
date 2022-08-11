<?php while (have_posts()): ?>

<?php the_post(); ?>

<div <?php post_class(); ?>>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<?php get_template_part('template-parts/topic_meta'); ?>

<?php the_excerpt(); ?>

<small><a href="<?php the_permalink(); ?>">More &raquo; </a></small>

</div>

<hr>

<?php endwhile; ?>
