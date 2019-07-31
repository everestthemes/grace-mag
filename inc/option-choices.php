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
                'left'  => get_template_directory_uri() . '/everestthemes/admin/images/sidebar_left.png',
                'right' => get_template_directory_uri() . '/everestthemes/admin/images/sidebar_right.png',
                'none'  => get_template_directory_uri() . '/everestthemes/admin/images/sidebar_none.png',
            );
        }

        return $position;

	}
endif;

if( !function_exists( 'grace_mag_fullwidth_layouts_array' ) ) :
	/*
	 * Function to get fullwidth style
	 */
	function grace_mag_fullwidth_layouts_array() {

        $fullwidth = array(
            'full_one'            => esc_url( 'https://via.placeholder.com/100' ),
            'full_two'            => esc_url( 'https://via.placeholder.com/100' ),
        );

        return $fullwidth;

	}
endif;

if( !function_exists( 'grace_mag_halfwidth_layouts_array' ) ) :
	/*
	 * Function to get halfwidth style
	 */
	function grace_mag_halfwidth_layouts_array() {

        $halfwidth = array(
            'half_one'            => esc_url( 'https://via.placeholder.com/100' ),
            'half_two'            => esc_url( 'https://via.placeholder.com/100' ),
            'half_three'          => esc_url( 'https://via.placeholder.com/100' ),
        );

        return $halfwidth;

	}
endif;

if( !function_exists( 'grace_mag_post_layouts_array' ) ) :
	/*
	 * Function to get fullwidth style
	 */
	function grace_mag_post_layouts_array() {

        $post = array(
            'post_one'            => esc_url( 'https://via.placeholder.com/100' ),
            'post_two'            => esc_url( 'https://via.placeholder.com/100' ),
        );

        return $post;

	}
endif;