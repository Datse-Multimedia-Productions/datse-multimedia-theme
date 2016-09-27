<?php
/**
 * Shortecodes support
 *
 * This defines shortcodes which are supported by the theme.  
 * 
 * Shortcodes from Datse Multimedia Base will be imported (I think).
 * 
 * 
 *
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.4
 * 
 * @Copyright 2016
 * 
 */ 

/**
 * Patreon Shortcode
 * 
 * This displays a link to Patreon.
 * 
 * Shortcode has attributes:
 *
 * Name: Name of Patreon Account
 * Supported: Whether content is supported by Patreon
 * Other: Is this some other account
 * 
 * @todo provide default values pulled from customizer
 * @todo provide css for display (shouldn't be nescessary)
 * 
 * @since 0.0.4
 * 
 * @param array? $atts Attributes...
 * @param string $content Content to use.
 * @returns string Formated string for Patreon Link.
 *
 * @Author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @License GPL
 * @Version 0.0.4
 *
 * @Copyright 2016
 *  
 */
function patreon_shortcode($atts, $content='') {
	extract(shortcode_atts(array(
		"Name" => "",
		"Supported" => "",
		"Other" => "",
		), $atts));

	if ($Name=="") { // Name Not Set
		// Do Default Name Stuff
	} else {
		// Do Stuff with set Name
	} if ($Supported=="") { // Supported Not Set
		// Do Default Supported Stuff
	} else {
		// Do stuff with set Supported
	} if ($Other=="") {
		// Do Default Other Stuff
	} else {
		// Do Stuff with set Other
	} if ($content="") { // Content not set
		// Do Default Content stuff
	} else {
		// Do stuff with set content
	}

	// Build Output

	// Return Output

} 
add_shortcode("patreon", "patreon_shortcode);

?>
