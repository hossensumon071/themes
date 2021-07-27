<?php 


function theme_support(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_support');


function cs_js(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() .'/plugins/bootstrap/bootstrap.min.css', null, '1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() .'/plugins/animate-css/animate.css', null, '1.0', 'all');
    wp_enqueue_style('ionicons', get_template_directory_uri() .'/plugins/ionicons/ionicons.min.css', null, '1.0', 'all');
    wp_enqueue_style('slider', get_template_directory_uri() .'/plugins/slider/slider.css', null, '1.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/plugins/owl-carousel/owl.carousel.css', null, '1.0', 'all');
    wp_enqueue_style('owl-theme', get_template_directory_uri() .'/plugins/owl-carousel/owl.theme.css', null, '1.0', 'all');
    wp_enqueue_style('fancybox', get_template_directory_uri() .'/plugins/facncybox/jquery.fancybox.css', null, '1.0', 'all');
    wp_enqueue_style('css', get_template_directory_uri() .'/css/style.css', null, '1.0', 'all');
    wp_enqueue_style('timermaster-css', get_stylesheet_uri() );


    wp_enqueue_script('form-validation', get_template_directory_uri() .'/plugins/form-validation/jquery.form.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('validat', get_template_directory_uri() .'/plugins/form-validation/jquery.validate.min.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/plugins/owl-carousel/owl.carousel.min.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('bootstrap', get_template_directory_uri() .'/plugins/bootstrap/bootstrap.min.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('wow', get_template_directory_uri() .'/plugins/wow-js/wow.min.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('slider', get_template_directory_uri() .'/plugins/slider/slider.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('fancybox', get_template_directory_uri() .'/plugins/facncybox/jquery.fancybox.js', array('jequery'), '1.0', 'true');
    wp_enqueue_script('main-js', get_template_directory_uri() .'js/main.js', array('jequery'), '1.0', 'true');



}
add_action('wp_enqueue_scripts','cs_js');

