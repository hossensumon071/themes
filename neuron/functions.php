<?php 


function neuron_theme_files(){
    wp_enqueue_style('animate',get_template_directory_uri() .'/assets/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome',get_template_directory_uri() .'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-carousel',get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootsnav',get_template_directory_uri() .'/assets/css/bootsnav.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap',get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('neuron-style', get_stylesheet_uri());


    
    wp_enqueue_script('bootstrap', get_template_directory_uri() .'assets/bootstrap/js/bootstrap.min.js', array('jequery'), '1.0', true);
    wp_enqueue_script('bootsnav', get_template_directory_uri() .'assets/js/bootsnav.js', array('jequery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() .'assets/js/owl.carousel.min.js', array('jequery'), '1.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() .'assets/js/wow.min.js', array('jequery'), '1.0', true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() .'assets/js/ajaxchimp.js', array('jequery'), '1.0', true);
    wp_enqueue_script('ajaxchimp-config', get_template_directory_uri() .'assets/js/ajaxchimp-config.js', array('jequery'), '1.0', true);
    wp_enqueue_script('neuron-script', get_template_directory_uri() .'assets/js/script.js', array('jequery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'neuron_theme_files');

function neuron_theme_supports(){

    // loading theme textdomain
    load_theme_textdomain('neuron-rrfonline',get_template_directory(), '/languages');

    // Generate automated feed links on head
    add_theme_support('automatic-feed-links');

    //adding support for automatic title tag
    add_theme_support('title-tag');

    // Enabling post thumbnails support
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location
    register_nav_menus( array(
        'menu-1'=> esc_html__('primary','neuron-rrfonline'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // custom logo support 
    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ));

}
add_action('after_setup_theme', 'neuron_theme_supports');

// Registering custom post
add_action('init', 'neuron_theme_custom_posts');
function neuron_theme_custom_post(){
    register_post_type('Slide',
        array(
            'labels' => array(
                'name' => _('Slides'),
                'singular_name' => _('Slide')
            ),
            'supports' => array('title', 'editor','custom-feilds', 'thumbnail', 'page-attributes'),
            'public'=> false,
            'show_ul'=> true
        ),
    );
}