<?php
/**
 * Theme Options Choices
 *
 * @package Grace_Mag
 */


if( !function_exists( 'grace_mag_categories_array' ) ) :
	/*
	 * Function to get blog categories
	 */
	function grace_mag_categories_array() {

		$post_taxonomy = 'category';
		$post_terms = get_terms( $post_taxonomy );
		$post_categories = array();
		foreach( $post_terms as $post_term ) {
			$post_categories[$post_term->slug] = $post_term->name;
		}

		return $post_categories;

	}
endif;

if( !function_exists( 'grace_mag_pagination_type_array' ) ) :
	/*
	 * Function to get select pagination style
	 */
	function grace_mag_pagination_type_array() {

		$alignment = array(
            'numeric'             => esc_html__( 'Numeric', 'grace-mag' ),
            'button_click_load'   => esc_html__( 'Button Click Load', 'grace-mag' ),
        );
        
        return $alignment;

	}
endif;