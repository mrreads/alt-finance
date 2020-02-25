<?php

function getStyles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
    wp_enqueue_style('WOW CSS', get_template_directory_uri() . '/assets/css/animate.css'); 

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('navigation', get_template_directory_uri() . '/assets/css/navigation.css');
    wp_enqueue_style('content', get_template_directory_uri() . '/assets/css/content.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    
    wp_enqueue_style('all-services', get_template_directory_uri() . '/assets/css/all-services.css');
    wp_enqueue_style('contacts', get_template_directory_uri() . '/assets/css/contacts.css');
    wp_enqueue_style('sitecard', get_template_directory_uri() . '/assets/css/sitecard.css');
    wp_enqueue_style('static-service-page', get_template_directory_uri() . '/assets/css/static-service-page.css');

    wp_enqueue_style('about', get_template_directory_uri() . '/assets/css/about.css');
}

function getScripts()
{
    wp_enqueue_script('swiper', get_template_directory_uri() .'/assets/js/swiper.min.js'); // , array(), false, true); <--- чтобы в футере был
    // wp_enqueue_script('swiper-main', get_template_directory_uri() . '/assets/js/swiper-main.js');

    if(is_page())
    {
        global $wp_query;
        $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );

        if($template_name == 'page-about.php')
        {
            wp_enqueue_script('WOW-MIN-JS', get_template_directory_uri() .'/assets/js/wow.min.js', array(), false, true);
            wp_enqueue_script('WOW-JS', get_template_directory_uri() .'/assets/js/wow.js', array(), false, true);
            wp_enqueue_script('swiper-about', get_template_directory_uri() . '/assets/js/swiper-about.js', array(), false, true);
        }

        if($template_name == 'page-all-services.php')
        {
            wp_enqueue_script('WOW-MIN-JS', get_template_directory_uri() .'/assets/js/init-swiper.js', array(), false, true);
        }
    }
}

function addNavMenu()
{
    register_nav_menu('header_menu', 'Header menu');
}

function removeAdminBar() { return false; }
add_filter('show_admin_bar', 'removeAdminBar');

add_action('wp_head', 'getStyles');
add_action('after_setup_theme', 'addNavMenu');
add_action('wp_footer', 'getScripts');

?>