<?php
/**
 * Collection of active callback functions for customizer fields.
 *
 * @package Grace_Mag
 */

/**
 * Active callback function for when copyright text is active.
 */
if( ! function_exists( 'grace_mag_active_social_links' ) ) {

	function grace_mag_active_social_links( $control ) {

		if ( $control->manager->get_setting( 'my_theme_header_social_links' )->value() == true ) {

			return true;
		} else {
			
			return false;
		}		
	}
}