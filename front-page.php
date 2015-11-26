<?php
//*front-page.php

//remove genesis loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

//enqueue Slick
function enqueue_script_slick(){
	//GSAP
	wp_enqueue_script( 'slick');
	wp_enqueue_style( 'slick-css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_script_slick');

//enqueue front-page.css and slick-theme.css
function enqueue_front_page_css()
{
	wp_register_style( 'front-page-css', get_stylesheet_directory_uri() . '/css/front-page.css', array(), null, 'all' );
	wp_register_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), null, 'all' );

	//front-page.css comes later for overwriting purpose
	wp_enqueue_style( 'slick-theme-css' );
    wp_enqueue_style( 'front-page-css' );
    
}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_css' );

//enqueue front-page.js
function enqueue_front_page_script()
{
	wp_register_script( 'front-page-script', get_stylesheet_directory_uri() . '/js/front-page.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
    wp_enqueue_script( 'front-page-script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_front_page_script' );

genesis();
