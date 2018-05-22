<?php
function ronson_scripts_init(){


    wp_enqueue_style('ronson_style_css', get_template_directory_uri() . '/css/main.min.css');
//
//
//    wp_enqueue_script('ronson_html5shiv_js', get_template_directory_uri() . '/js/html5shiv.js', array(), false, false);
//
    wp_deregister_script( 'jquery' );
//    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js', array(), false, true);
//    wp_enqueue_script( 'jquery' );
//
//    wp_enqueue_script('ronson_main_js', get_template_directory_uri() . '/js/main.js', array(), false, true);
//
//    wp_register_script('ronson_maps_parameters_js', get_template_directory_uri() . '/js/maps_parameters.js', array(), false, true);
//    wp_enqueue_script('ronson_maps_parameters_js');
//
    wp_register_script('ronson_theme_scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), false, true);
    wp_enqueue_script('ronson_theme_scripts');


}
add_action('wp_enqueue_scripts', 'ronson_scripts_init');
