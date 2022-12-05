<?php
/**
 * Topic meta.
 *
 * @package template
 */

$allow_html = array(
	'a' => array(
		'href' => array(),
		'rel'  => array(),
	),
);

if ( 'post' === get_post_type() ) : ?>
<div class="cliowp-post-meta-container">
	<?php the_author_posts_link(); ?> | <?php the_time( 'j-n-Y' ); ?> | <?php echo wp_kses( get_the_category_list( ', ' ), $allow_html ); ?>
</div>
	<?php
endif;
