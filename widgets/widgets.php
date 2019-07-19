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
require get_template_directory() . '/widgets/fullwidth-news-widget.php';
require get_template_directory() . '/widgets/halfwidth-news-widget.php';
require get_template_directory() . '/widgets/post-widget.php';

function grace_mag_custom_widgets_init() {
    
    register_sidebar( array(
		'name'          => esc_html__( 'Fullwidth Top News Area', 'grace-mag' ),
		'id'            => 'grace-mag-fullwidth-top-news-area',
		'description'   => esc_html__( 'Add fullwidth widget here.', 'grace-mag' ),
		'before_widget' => '<div id="%1$s"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Middle News Area', 'grace-mag' ),
		'id'            => 'grace-mag-middle-news-area',
		'description'   => esc_html__( 'Add halfwidget widget here.', 'grace-mag' ),
		'before_widget' => '<div id="%1$s"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Fullwidth Bottom News Area', 'grace-mag' ),
		'id'            => 'grace-mag-fullwidth-bottom-news-area',
		'description'   => esc_html__( 'Add fullwidth widget here.', 'grace-mag' ),
		'before_widget' => '<div id="%1$s"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
    register_widget( 'Grace_Mag_Fullwidth_News_Widget' );
    
    register_widget( 'Grace_Mag_Halfwidth_News_Widget' );
    
    register_widget( 'Grace_Mag_Post_Widget' );
}
add_action( 'widgets_init', 'grace_mag_custom_widgets_init' );