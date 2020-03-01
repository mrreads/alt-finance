<?php

function getStyles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
    wp_enqueue_style('font-roboto-condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=cyrillic-ext');

    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
    wp_enqueue_script('swiper-min-js', get_template_directory_uri() .'/assets/js/swiper.min.js'); // , array(), false, true); <--- чтобы в футере был

    wp_enqueue_style('WOW-CSS', get_template_directory_uri() . '/assets/css/animate.css');

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('navigation', get_template_directory_uri() . '/assets/css/navigation.css');
    wp_enqueue_style('content', get_template_directory_uri() . '/assets/css/content.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    
    wp_enqueue_style('all-services', get_template_directory_uri() . '/assets/css/all-services.css');
    wp_enqueue_style('contacts', get_template_directory_uri() . '/assets/css/contacts.css');
    wp_enqueue_style('sitecard', get_template_directory_uri() . '/assets/css/sitecard.css');
    wp_enqueue_style('static-service-page', get_template_directory_uri() . '/assets/css/static-service-page.css');
    wp_enqueue_style('about-page', get_template_directory_uri() . '/assets/css/about-page.css');

    wp_enqueue_style('page-service', get_template_directory_uri() . '/assets/css/page-service.css');
}

function getScripts()
{
    wp_enqueue_script('swiper-main', get_template_directory_uri() . '/assets/js/swiper-main.js');
    wp_enqueue_script('open-menu', get_template_directory_uri() . '/assets/js/open-menu.js');

    if (is_page('all-services'))
    {
        wp_deregister_script('swiper-main');
        wp_enqueue_script('init-swiper', get_template_directory_uri() .'/assets/js/init-swiper.js');// , array(), false, true);
    }

    if (is_page('about'))
    {
        wp_deregister_script('swiper-main');
        wp_enqueue_script('WOW-MIN-JS', get_template_directory_uri() .'/assets/js/wow.min.js');//, array(), false, true);
        wp_enqueue_script('WOW-JS', get_template_directory_uri() .'/assets/js/wow.js');//, array(), false, true);
        wp_enqueue_script('swiper-about', get_template_directory_uri() . '/assets/js/swiper-about.js');//, array(), false, true);
    }

    if (is_page('it') || is_page('science') || is_page('geology') || is_page('consulting') || is_page('building') || is_page('vehicle-production') || is_page('project-house'))
    {
        wp_enqueue_script('switcher', get_template_directory_uri() . '/assets/js/switcher.js');//, array(), false, true);
        // wp_enqueue_script('page-title', get_template_directory_uri() . '/assets/js/page-title.js');//, array(), false, true);
    }

    if (is_page('all-goods'))
    {
        wp_deregister_script('swiper-main');
        wp_enqueue_script('init-swiper1', get_template_directory_uri() . '/assets/js/init-swiper1.js');//, array(), false, true);
    }

    if (is_page('project-house'))
    {
        wp_enqueue_script('page-title', get_template_directory_uri() . '/assets/js/page-title.js');
    }
}

function addNavMenu()
{
    register_nav_menu('header_menu', 'Header menu');
}

function addThemeFeatures()
{
    add_theme_support('post-thumbnails', array('post'));
}

function removeAdminBar() { return false; }
add_filter('show_admin_bar', 'removeAdminBar');

add_action('wp_head', 'getStyles');
add_action('after_setup_theme', 'addNavMenu');
add_action('after_setup_theme', 'addThemeFeatures');
add_action('wp_footer', 'getScripts');

?>