<?php


add_action('wp_enqueue_scripts', 'add_styles');

function add_styles(){

    wp_dequeue_style('wp-block-library');

    
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendor/animate/animate.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/vendor/magnific-popup/magnific-popup.min.css', array(), "0.0.0.0" );
	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), "0.0.0.0" );
	wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/assets/vendor/bootstrap-select/css/bootstrap-select.min.css', array(), "0.0.0.0" );
	wp_enqueue_style( 'tempus-dominus', get_template_directory_uri() . '/assets/vendor/tempus-dominus/css/tempus-dominus.min.css', array(), "0.0.0.0" );
	wp_enqueue_style( 'lightgallery', get_template_directory_uri() . '/assets/vendor/lightgallery/dist/css/lightgallery.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'lg-thumbnail', get_template_directory_uri() . '/assets/vendor/lightgallery/dist/css/lg-thumbnail.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'lg-zoom', get_template_directory_uri() . '/assets/vendor/lightgallery/dist/css/lg-zoom.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css', array(), "0.0.0.0" );
	
}