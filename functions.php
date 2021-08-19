<?php 

function bcwp_enqueue_scripts() {
	
	// CSS
	wp_enqueue_style( 'bcwp_styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bcwp_bootstrap_css', get_stylesheet_directory_uri() . '/assets/bootstrap_5/css/bootstrap.min.css',);

	wp_enqueue_script('bcwp_scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bcwp_bootstrap_js', get_stylesheet_directory_uri() . '/assets/bootstrap_5/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'bcwp_enqueue_scripts' );