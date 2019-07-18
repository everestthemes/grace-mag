<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package Grace_Mag
 */

/**
 * Load Author Widget.
 */
require get_template_directory() . '/widgets/author-widget.php';

function grace_mag_custom_widgets_init() {
	
    register_widget( 'Grace_Mag_Author_Widget' );
}
add_action( 'widgets_init', 'grace_mag_custom_widgets_init' );