<?php
/**
 * Theme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Load CSS, JS , web fonts etc
 */
function load_front_end_assets()
{
    wp_enqueue_style('load_google_font_ubuntu', '//fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap');
    wp_enqueue_style('load_main_css_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_front_end_assets');

/**
 * Set title tag to web page
 */
function set_theme_properties()
{
    register_nav_menu('header_menu_location', 'Header Menu Location');
    register_nav_menu('footer_menu_location', 'Footer Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    load_theme_textdomain('cliowp', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'set_theme_properties');

