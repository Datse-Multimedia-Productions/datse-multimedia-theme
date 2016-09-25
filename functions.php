<?php
/*
 * Created on Aug 3, 2015
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

function theme_enqueue_styles() {

	$parent_style = 'datse-multimedia-base';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style )
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**
 * datse_multimedia_theme_setup
 * 
 * @todo review documentation
 * @since Datse Multimedia Theme 0.0
 * 
 */
function datsemultimedia_theme_setup() {

    	// Path to library
    	define ("DATSEMULTIMEDIA_LIB", get_theme_root() . "/library");
    
	// Customizer
    	require_once (DATSEMULTIMEDIA_LIB . "/customizer.php");

    	// Shortcodes
    	require_once (DATSEMULTIMEDIA_LIB . "/shortcodes.php");

    	// WooCommerce
    	require_once (DATSEMULTIMEDIA_LIB . "/woocommerce.php");
}

add_action("after_setup_theme", "datsemultimedia_theme_setup", 10);




?>
