<?php

function getStyles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('navigation', get_template_directory_uri() . '/assets/css/navigation.css');
    wp_enqueue_style('content', get_template_directory_uri() . '/assets/css/content.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
}

function addNavMenu()
{
    register_nav_menu('header_menu', 'Header menu');
}

function removeAdminBar() { return false; }
add_filter( 'show_admin_bar' , 'removeAdminBar');

add_action('wp_enqueue_scripts' , 'getStyles');
add_action('after_setup_theme', 'addNavMenu');

?>