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
 * Add Customizer Page: Add the customizer page
 * 
 * @param string $pageName The name of the page
 */
function customizerPageAdd ($pageName){
	echo "Trying to add page";
}
