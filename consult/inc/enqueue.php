<?php

function  consult_cs_js(){

    wp_enqueue_style('consult-flaticon',get_template_directory_uri().'assets/css/flaticon.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-fontAwesome',get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-animate',get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-googleFont',get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-animation',get_template_directory_uri().'/assets/css/text-animation.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-fancybox',get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-popup',get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-layers',get_template_directory_uri().'/rs-plugin/css/layers.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-settings',get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-plugins',get_template_directory_uri().'/assets/css/plugins.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-icons',get_template_directory_uri().'/assets/css/icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-menu',get_template_directory_uri().'/assets/css/menu-css.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-main',get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('consult-responsive',get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-css',get_stylesheet_uri());



    wp_enqueue_script('consult-modernizer',get_template_directory_uri().'/assets/js/modernizr.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-waypoints',get_template_directory_uri().'/assets/js/waypoints.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-plugin',get_template_directory_uri().'/assets/js/plugins.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-scrollup',get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('google-api','https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY');
    wp_enqueue_script('consult-gmaps',get_template_directory_uri().'/assets/js/gmaps.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-fancyboxjs',get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-popupjs',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-pkgdjs',get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-counterupjs',get_template_directory_uri().'/assets/js/counterup.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-carouseljs',get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-wowjs',get_template_directory_uri().'/assets/js/wow.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-letteringjs',get_template_directory_uri().'/assets/js/jquery.lettering.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-textillatejs',get_template_directory_uri().'/assets/js/jquery.textillate.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-mixitupjs',get_template_directory_uri().'/assets/js/mixitup.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-chartjs',get_template_directory_uri().'/assets/js/chart.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-activejs',get_template_directory_uri().'/assets/js/chart-active.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-tools',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-revulationjs',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-actionjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-kenburnjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-layeranimationjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-migrationjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-navigationjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-parallaxjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-slideanimsjs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jequery'), '1.0.0', 'true');
    wp_enqueue_script('consult-videojs',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jeq'), '1.0.0', 'true');
    wp_enqueue_script('consult-customjs',get_template_directory_uri().'/assets/js/custom.js', array('jequery'), '1.0.0', 'true');
     

}
add_action('wp_enqueue_scripts','consult_cs_js');