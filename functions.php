<?php

function nukata_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'nukata-style', get_stylesheet_uri(), $dependencies );
}

function nukata_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'nukata_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'nukata_enqueue_scripts' );

function nukata_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'nukata_wp_setup' );
?>
