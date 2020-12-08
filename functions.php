<?php

function authentic_theme_support(){
    
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

}

add_action('after_theme_setup','authentic_theme_support');

function authentic_menus(){

    $locations = array(
        'primary' => "Desktop Primary Navbar"
    );

    register_nav_menus($locations);

}

add_action('init', 'authentic_menus');


function authentic_register_styles(){

    wp_enqueue_style('authentic-style', get_template_directory_uri() . "/style.css", array('authentic-bootstrap'), '1.0', 'all');
    wp_enqueue_style('authentic-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
}

add_action( 'wp_enqueue_scripts', 'authentic_register_styles');

function authentic_register_scripts(){

    wp_enqueue_script('authentic-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('authentic-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('authentic-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('authentic-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'authentic_register_scripts');

?>