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

if( !function_exists( 'grace_mag_sidebar_position_array' ) ) :
	/*
	 * Function to get select pagination style
	 */
	function grace_mag_sidebar_position_array( $format ) {
        
        if( $format == 'text' ) {

            $position = array(
                'right'            => esc_html__( 'Right', 'grace-mag' ),
                'left'             => esc_html__( 'Left', 'grace-mag' ),
                'none'             => esc_html__( 'None', 'grace-mag' ),
            );
            
        } else {
            
            $position = array(
                'left'  => get_template_directory_uri() . '/inc/customizer/assets/images/sidebar_left.png',
                'right' => get_template_directory_uri() . '/inc/customizer/assets/images/sidebar_right.png',
                'none'  => get_template_directory_uri() . '/inc/customizer/assets/images/sidebar_none.png',
            );
        }

        return $position;

	}
endif;