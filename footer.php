<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cliowp
 */

?>

<?php
wp_nav_menu(
	array(
		'theme_location' => 'footer_menu_location',
		'menu_class'     => 'cliowp-menu-bottom',
		'container'      => 'nav',
	)
);
?>

<?php wp_footer(); ?>
</body>

</html>
