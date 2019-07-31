<?php
/**
 * Grace Mag Theme Customizer
 *
 * @package Grace_Mag
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function grace_mag_customize_register( $wp_customize ) {
    
    global $theme_prefix;
    
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    /**
	 * Load custom customizer control for radio image control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-radio-image-control.php';

	/**
	 * Load custom customizer control for toggle control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-toggle-control.php';
    
    /**
	 * Load custom customizer control for slider control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-slider-control.php';
    
    /**
	 * Load custom customizer control for multiple select control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-multiple-select-control.php';
    
    /**
	 * Load customizer functions for sanitization of input values of contol fields
	 */
	require get_template_directory() . '/inc/customizer/functions/sanitize-callback.php';
    
    /**
	 * Load customizer functions
	 */
	require get_template_directory() . '/inc/customizer/functions/customizer-functions.php';
    
    /**
	 * Load customizer functions for loading control field's choices, declaration of panel, section 
	 * and control fields
	 */
	require get_template_directory() . '/inc/customizer/functions/customizer-fields.php';
    
    /**
	 * Load customizer functions for typography option
	 */
	require get_template_directory() . '/inc/customizer/functions/option-typo.php';
    
    /**
	 * Load customizer functions for color option
	 */
	require get_template_directory() . '/inc/customizer/functions/option-color.php';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'grace_mag_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'grace_mag_customize_partial_blogdescription',
		) );
	}
    
    /**
	 * Control Rearrange
	 */
    
    $wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site Title Color', 'grace-mag' );
    $wp_customize->get_control( 'background_color' )->section = 'background_image';
    $wp_customize->get_section( 'background_image' )->title = esc_html__( 'Site Background', 'grace-mag' );
    $wp_customize->get_control( 'header_image' )->priority = 30;
   
    $wp_customize->get_control( 'custom_logo' )->section = 'grace_mag_site_logo_section';
    $wp_customize->get_control( 'blogname' )->section = 'grace_mag_site_logo_section';
    $wp_customize->get_control( 'blogdescription' )->section = 'grace_mag_site_logo_section';
    $wp_customize->get_control( 'header_textcolor' )->section = 'grace_mag_site_logo_section';
    $wp_customize->get_control( 'display_header_text' )->section = 'grace_mag_site_logo_section';
    $wp_customize->get_control( 'site_icon' )->section = 'grace_mag_site_favicon_section';
    $wp_customize->get_control( 'header_image' )->section = 'grace_mag_main_header_section';
}
add_action( 'customize_register', 'grace_mag_customize_register' );

/**
 * Load active callback functions.
 */
require get_template_directory() . '/inc/customizer/functions/active-callback.php';

/**
 * Load dynamic style
 */
require get_template_directory() . '/inc/customizer/functions/dynamic-style.php';

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function grace_mag_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function grace_mag_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function grace_mag_customize_preview_js() {
	wp_enqueue_script( 'grace-mag-customizer', get_template_directory_uri() . '/inc/customizer/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'grace_mag_customize_preview_js' );

/**
 * Enqueue Customizer Scripts and Styles
 */
function grace_mag_enqueues() {

	wp_enqueue_style( 'grace-mag-customizer-style', get_template_directory_uri() . '/inc/customizer/assets/css/customizer-style.css' );

	// Register the script
    wp_register_script( 'grace-mag-customizer-script', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-script.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ) , true );

    // Localize the script with new data
    $title_array = array(
        'custom_logo' => esc_html__( 'Logo Setup', 'grace-mag' ),
        'top_header_display_today_date' => esc_html__( 'Top Header : Options', 'grace-mag' ),
        'top_header_news_ticker_category' => esc_html__( 'News Ticker Content', 'grace-mag' ),
        'header_image' => esc_html__( 'Header Image', 'grace-mag' ),
        'banner_category' => esc_html__( 'Banner Content', 'grace-mag' ),
        'post_single_display_featured_image' => esc_html__( 'Post Content', 'grace-mag' ),
        'post_single_display_author_section' => esc_html__( 'Author Section', 'grace-mag' ),
        'post_single_display_related_posts_section' => esc_html__( 'Related Posts Section', 'grace-mag' ),
        'page_single_display_featured_image' => esc_html__( 'Page Content', 'grace-mag' ),
        'blog_page_display_featured_image' => esc_html__( 'Post Content', 'grace-mag' ),
        'blog_page_sidebar_position' => esc_html__( 'Sidebar Position', 'grace-mag' ),
        'archive_page_display_featured_image' => esc_html__( 'Post Content', 'grace-mag' ),
        'archive_page_sidebar_position' => esc_html__( 'Sidebar Position', 'grace-mag' ),
        'search_page_display_featured_image' => esc_html__( 'Post Content', 'grace-mag' ),
        'search_page_sidebar_position' => esc_html__( 'Sidebar Position', 'grace-mag' ),
        'common_page_background_image' => esc_html__( 'Background Image', 'grace-mag' ),
    );
    wp_localize_script( 'grace-mag-customizer-script', 'grace_mag', $title_array );

    // Enqueued script with localized data.
    wp_enqueue_script( 'grace-mag-customizer-script' );
}
add_action( 'customize_controls_enqueue_scripts', 'grace_mag_enqueues' );
