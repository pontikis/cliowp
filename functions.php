<?php
/**
 * Theme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cliowp
 */

/**
 * Load CSS, JS , web fonts etc
 */
function load_front_end_assets() {
	wp_enqueue_style( 'load_google_font_ubuntu', '//fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap', array(), '1.0.0' );
	wp_enqueue_script( 'load_main_js', get_theme_file_uri( '/build/index.js' ), array( 'jquery' ), '1.0.0', true );
	wp_enqueue_style( 'load_main_css', get_theme_file_uri( '/build/style-index.css' ), array(), '1.0.0' );
	wp_enqueue_style( 'load_extra_css', get_theme_file_uri( '/build/index.css' ), array(), '1.0.0' );

	// optional (required in case you use API calls that need authentication).
	wp_localize_script(
		'load_main_js',
		'wpApiSettings',
		array(
			'nonce' => wp_create_nonce( 'wp_rest' ),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'load_front_end_assets' );

/**
 * Set various theme properties
 */
function set_theme_properties() {
	register_nav_menu( 'header_menu_location', __( 'Header Menu Location', 'cliowp' ) );
	register_nav_menu( 'mobile_menu_location', __( 'Mobile Menu Location', 'cliowp' ) );
	register_nav_menu( 'footer_menu_location', __( 'Footer Menu Location', 'cliowp' ) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' ); // required by theme-check plugin.
	load_theme_textdomain( 'cliowp', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'set_theme_properties' );
