<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cliowp
 */

$menu_params_header = array(
	'theme_location' => 'header_menu_location',
	'menu_class'     => 'cliowp-menu-top',
	'container'      => 'nav',
);
$menu_params_mobile = array(
	'theme_location' => 'mobile_menu_location',
	'menu_class'     => 'cliowp-menu-mobile',
	'container'      => 'nav',
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); // required by theme-check plugin. ?>

	<header class="cliowp-header">

		<div class="cliowp-mobile-menu-container">
				<?php wp_nav_menu( $menu_params_mobile ); ?>
		</div>

		<div class="float-left">
			<p><a href="<?php echo esc_html( site_url() ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
			</p>
		</div>

		<div class="float-right">
			<?php wp_nav_menu( $menu_params_header ); ?>

			<i class="cliowp-mobile-menu-trigger bi bi-list" aria-hidden="true"></i>
		</div>

		<div class="clear-both"></div>

		<div class="cliowp-search-container">
			<?php get_search_form(); ?>
		</div>

		<div class="clear-both"></div>

	</header>
