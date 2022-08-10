<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php wp_nav_menu(
    [
        'theme_location' => 'footer_menu_location',
        'menu_class'     => 'wp-dev-menu-bottom',
        'container'      => 'nav',
    ]); ?>


<?php wp_footer(); ?>
</body>

</html>
