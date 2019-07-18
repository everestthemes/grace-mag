<?php
/**
 * Customizer Options Declaration
 *
 * @package Grace_Mag
 */

//$header_layouts = grace_mag_header_layouts_array();

/*-----------------------------------------------------------------------------
							SITE HEADER PANEL OPTIONS 
-----------------------------------------------------------------------------*/

grace_mag_add_panel( 
    'site_header', //id
    'Site Header', //title
    '', //desc
    10 //priority
);

/*-----------------------------------------------------------------------------
							SITE LOGO SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_logo_section', //id
    'Site Logo', //title
    '', //desc
    'site_header', //panel
    10 //priority
);

/*-----------------------------------------------------------------------------
							SITE FAVICON SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_favicon_section', //id
    'Site Favicon', //title
    '', //desc
    'site_header', //panel
    10 //priority
);

grace_mag_add_field( 
    'header_social_links', //id
    'Display Social Links', //label
    'Toggle to display or hide.', //desc
    'ios', //type ( text, number, url, select, ios )
    'main_header', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
    false //default
);