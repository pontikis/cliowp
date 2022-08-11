<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); // required by theme-check plugin ?>

    <?php wp_nav_menu(
    [
        'theme_location' => 'header_menu_location',
        'menu_class'     => 'cliowp-menu-top',
        'container'      => 'nav',
    ]
); ?>

    <div class="cliowp-search-container">
        <?php get_search_form(); ?>
    </div>
