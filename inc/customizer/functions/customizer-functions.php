<?php
/**
 * Customizer Options Declaration For Typography
 *
 * @package Grace_Mag
 */

/**
 *	Function to register new customizer panel
 */
if( ! function_exists( 'grace_mag_add_panel' ) ) {
	
	function grace_mag_add_panel( $id, $title, $desc, $priority ) {

		global $wp_customize;

		global $theme_prefix;

		$panel_id = $theme_prefix . '_' . $id;

		if( $priority == ''  ) {

			$priority = 10;
		}

		$wp_customize->add_panel( $panel_id,
			array(
				'title' => $title,
				'description' => $desc,
				'priority' => $priority,
			)
		);
	}	
}

/**
 *	Function to register new customizer section
 */
if( ! function_exists( 'grace_mag_add_section' ) ) {

	function grace_mag_add_section( $id, $title, $desc, $panel, $priority ) {

		global $wp_customize;

		global $theme_prefix;

		$section_id = $theme_prefix . '_' . $id;

		$panel_id = $theme_prefix . '_' . $panel;

		$section_args = array(
			'title'	=> $title,
			'description' => $desc,
		);

		if( !empty( $panel ) ) {
			$section_args['panel'] = $panel_id;
		}

		if( !empty( $priority ) ) {
			$section_args['priority'] = $priority;
		}

		$wp_customize->add_section( $section_id, $section_args );
	}
}

/**
 *	Function to register new customizer text field
 */
if( ! function_exists( 'grace_mag_add_field' ) ) {

	function grace_mag_add_field( $id, $label, $desc, $type, $section, $choices, $active_callback, $min, $max, $step, $control, $default ) {

		global $wp_customize;

		global $theme_prefix;

		$field_id = $theme_prefix . '_' . $id;

		$section_id = $theme_prefix . '_' . $section;

		$control_args = array(
			'label' => $label,
			'description' => $desc,
			'section' => $section_id,
		);

		if( !empty( $type ) ) {

			$control_args['type'] = $type;
		}

		if( !empty( $active_callback ) ) {

			$control_args['active_callback'] = $active_callback;
		}

		//Setting of Customizer
        
        $setting_args = array(
            'default'			=> $default,
            'capability'        => 'edit_theme_options',
		);

		switch ( $type ) {

			case 'text':

				$setting_args['sanitize_callback'] = 'sanitize_text_field';
				
				break;

			case 'number':

				if( !empty( $max ) && !empty( $min ) && !empty( $step ) ) {

					$setting_args['sanitize_callback'] = $theme_prefix . '_sanitize_range';

				} else {

					$setting_args['sanitize_callback'] = $theme_prefix . '_sanitize_number';	
				}
				
				break;

			case 'url':

				$setting_args['sanitize_callback'] = 'esc_url_raw';
				
				break;

			case 'select':

				$setting_args['sanitize_callback'] = $theme_prefix . '_sanitize_select';
				
				break;

			case 'ios':

				$setting_args['sanitize_callback'] = 'wp_validate_boolean';
				
				break;

			case '':
                
                if( $control == 'upload' ) {

					$setting_args['sanitize_callback'] = 'esc_url_raw';

				}
				
				break;

			default :
				# code...
				break;
		}

		$wp_customize->add_setting( $field_id, $setting_args );
				
		//Control of Customizer

		switch ( $type ) {

			case 'number':

				if( !empty( $max ) && !empty( $min ) && !empty( $step ) ) {

					$control_args['input_attrs'] = array(
						'min' => $min,
						'max' => $max,
						'step' => $step
					);	
				}

				break;

			case 'select':

				$control_args['choices'] = $choices;
			
			case '':

				if( $control == 'slider' ) {

					$control_args['input_attrs'] = array(
						'min' => $min,
						'max' => $max,
						'step' => $step
					);

				}

				break;

			default:
				# code...
				break;
		}

		switch ( $control ) {

			case 'image':

				$wp_customize->add_control( new Grace_Mag_Radio_Image_Control( $wp_customize, $field_id, $control_args ) );

				break;

			case 'toggle':

				$wp_customize->add_control( new Grace_Mag_Customizer_Toggle_Control( $wp_customize, $field_id, $control_args ) );

				break;
                
            case 'upload':

				$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, $field_id, $control_args ) );

				break;
			
			default:
				
				$wp_customize->add_control( $field_id, $control_args );

				break;
		}
	}
}
