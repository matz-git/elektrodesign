<?php

/**
 * Add stylesheet to theme
 */
function theme_styles(){
	wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
	wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');


/**
 * Add all minified scripts
 */
function theme_scripts(){
	if ( is_front_page() ) {
		wp_enqueue_script('google-reCaptcha', 'https://www.google.com/recaptcha/api.js', array(), false, true);
        wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=', array(), false, true);
        // wp_enqueue_script('map', get_template_directory_uri() . '/assets/js/front-page.js');
        wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/build/plugins.min.js');
        // wp_enqueue_script('plugins', 'https://www.google.com/recaptcha/api.js');
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/build/scripts.min.js');
	}
}
add_action('wp_enqueue_scripts', 'theme_scripts');

