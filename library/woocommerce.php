<?php 
/**
 * WooCommerce Support
 * 
 * This will provide support for WooCommerce.  It needs to be handled differently than I currently am.
 * 
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.0
 * 
 * @Copyright 2016
 * 
 */
 
/**
 * my_theme_wrapper_start - Goes before main content
 * 
 * This content goes before the main content.  
 * 
 * @todo Figure out what this really should be
 * @since 0.0.0
 * 
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.0
 * 
 * @Copyright 2016
 * 
 */
function my_theme_wrapper_start() {
//	echo '<section id="main">';
}

/**
 * my_theme_wrapper_end - Goes after main content
 * 
 * This closes the "main content".
 * 
 * @todo Figure out what this really should be
 * @since 0.0.0
 * 
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.0
 *
 * @Copyright 2016
 *
 */
function my_theme_wrapper_end() {
//	echo '</section>';
}

/**
 * clean_woocommerce_issues
 * 
 * This cleans up some issues which I was having with WooCommerce.
 * 
 * @todo Is this still needed?
 * @since 0.0.0
 * 
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.0
 *
 * @Copyright 2016
 *
 */
function clean_woocommerce_issues() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
}

/**
 * woocommerce_support
 * 
 * Enables WooCommerce Support.
 * 
 * This calls all that is needed to get everything up and working as we would like to have it working.
 * 
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.0
 *
 * @Copyright 2016
 *
 */

function woocommerce_support() {
	clean_woocommece_issues();

	add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
	add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
	
    	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'woocommerce_support' );

