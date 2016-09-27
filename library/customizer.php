<?php
/**
 * Customizer hooks: Stuff we use to get customization happening
 *
 * We are setting things up so that we can handle customization 
 * in a way that works quite well.  I do not know how this will be handled,
 * but I hope that it will be an easy shift from "theme options" to
 * "theme customizer" options.  
 * 
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * @author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @copyright 2016 Datse Multimedia Productions
 * 
 * Introduced in version 0.0.3
 * 
 */


/**
 * Shortcodes: Shortcodes Customizer Settings
 * 
 * These are the customizer hooks for shortcodes.
 * 
 * @author Datse Multimedia Productions <info@datsemultimedia.com>
 * @author Jigme Datse Yli-Rasku <jigme.datse@datsemultimedia.com>
 * @copyright 2016 Datse Multimedia Productions
 *
 * @since 0.0.4
 *
 */
function shortcodes_customize_register($wp_customize) {
	
	// Shortcodes Secction
	$wp_customize->add_section('datsemultimedia_shortcodes', array(
		'title'    => __('Shortcodes', 'datsemultimedia'),
		'description' => 'Datse Multimedia Theme Shortcodes',
		'priority' => 120
	));

	// Patreon Shortcode Settings
	$wp_customize->add_setting("patreon_name", array(
		"default" => "JigmeDatse",
		"type" => "theme_mod"
	));

	$wp_customize->add_setting("patreon_supported", array(
                "default" => "Supported By Jigme Datse Yli-Rasku's Patreons",
                "type" => "theme_mod"
        ));

	$wp_customize->add_setting("patreon_other", array(
                "default" => "jackconte",
                "type" => "theme_mod"
        ));

	$wp_customize->add_setting("patreon_content", array(
                "default" => "Jigme Datse Yli-Rasku's Supporters on Patreon",
                "type" => "theme_mod"
        ));

	// Patreon Shorcode Controls
	$wp_customize->add_control("patreon_name_control", array(
		"label" => __("Patreon Name", "datsemultimedia"),
		"section" => "datsemultimedia_shortcodes",
		"setting" => "patreon_name",
		"type" => "text"
	)


	$wp_customize->add_control("patreon_supported_control", array(
                "label" => __("Patreon Name", "datsemultimedia"),
                "section" => "datsemultimedia_shortcodes",
                "setting" => "patreon_name",
                "type" => "text"
        )

	$wp_customize->add_control("patreon_other_control", array(
                "label" => __("Patreon Name", "datsemultimedia"),
                "section" => "datsemultimedia_shortcodes",
                "setting" => "patreon_name",
                "type" => "text"
        )

	$wp_customize->add_control("patreon_content_control", array(
                "label" => __("Patreon Name", "datsemultimedia"),
                "section" => "datsemultimedia_shortcodes",
                "setting" => "patreon_name",
                "type" => "text"
        )		

}
add_action( 'customize_register', 'shortcodes_customize_register');

