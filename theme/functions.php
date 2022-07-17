<?php
/**
 * Theme functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function get_front_end_assets()
{
    wp_enqueue_style('load_main_css_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'get_front_end_assets');
