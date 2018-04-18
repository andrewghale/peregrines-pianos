<?php

function pp_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'pp_enqueue_styles' );


