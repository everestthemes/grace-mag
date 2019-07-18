<?php
/**
 * Custom hooks for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Grace_Mag
 */ 


/**
 * Header current date hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_current_date_action' ) ) :

 	function grace_mag_header_current_date_action() {

 		?>
 		<div class="current-date">
            <span><?php esc_html__( 'Today', 'grace-mag' ); ?></span>
            <i>Sunday, 29th June 2019</i>
        </div>
        <!--topbar current time-->
        <?php
 	}
endif;
add_action( 'grace_mag_header_current_date', 'grace_mag_header_current_date_action', 10 );


/**
 * Header breaking news hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_breaking_news_action' ) ) :

 	function grace_mag_header_breaking_news_action() {

 		?>
 		<div class="breaking-news-wrap">
            <div class="nt_wrapper">
                <div class="nt_title pull-left">Breaking News <i class="fa fa-angle-right"></i></div>
                <ul id="webticker">
                    <li>
                        <a href="#" title="">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                    </li>
                    <li>
                        <a href="#" title="">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                    </li>
                    <li>
                        <a href="#" title="">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                    </li>
                </ul>
            </div>
        </div> <!--topbar Breaking News-->
        <?php
 	}
endif;
add_action( 'grace_mag_header_breaking_news', 'grace_mag_header_breaking_news_action', 10 );


/**
 * Header social links hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_social_links_action' ) ) :

 	function grace_mag_header_social_links_action() {

 		?>
 		<ul class="top-social-icon">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
        <!--top social-->
        <?php
 	}
endif;
add_action( 'grace_mag_header_social_links', 'grace_mag_header_social_links_action', 10 );


/**
 * Header custom logo hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_custom_logo_action' ) ) :

 	function grace_mag_header_custom_logo_action() {

 		the_custom_logo();
                            
        ?>
        <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
        <?php

        $grace_mag_description = get_bloginfo( 'description', 'display' );

        if ( $grace_mag_description || is_customize_preview() ) :

        ?>
        <p class="site-description"><?php echo esc_html( $grace_mag_description ); /* WPCS: xss ok. */ ?></p>
        <?php

        endif;
 	}
endif;
add_action( 'grace_mag_header_custom_logo', 'grace_mag_header_custom_logo_action', 10 );


/**
 * Header advertisement hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_advertisement_action' ) ) :

 	function grace_mag_header_advertisement_action() {
        
        //header advertisement
        if( is_active_sidebar( 'grace-mag-header-advertisement' ) ) {

            dynamic_sidebar( 'grace-mag-header-advertisement' );
        }
 	}
endif;
add_action( 'grace_mag_header_advertisement', 'grace_mag_header_advertisement_action', 10 );


/**
 * Header canvas menu button hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_canvas_menu_button_action' ) ) :

 	function grace_mag_header_canvas_menu_button_action() {
        
        ?>
 		<button class="hamburger hamburger_nb" type="button"> <span class="hamburger_box"> <span class="hamburger_inner"></span> </span> </button>
        <?php
 	}
endif;
add_action( 'grace_mag_header_canvas_menu_button', 'grace_mag_header_canvas_menu_button_action', 10 );


/**
 * Header main menu hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_main_menu_action' ) ) :

 	function grace_mag_header_main_menu_action() {
        
        ?>
 		<nav id="main_navigation" class="main_navigation">
            <?php
            $menu_args = array(
                'theme_location' => 'menu-1',
                'container' => '',
                'menu_class' => 'clearfix',
                'menu_id' => '',
                'fallback_cb' => 'grace_mag_navigation_fallback',
            );
            wp_nav_menu( $menu_args );
            ?>
        </nav>
        <?php
 	}
endif;
add_action( 'grace_mag_header_main_menu', 'grace_mag_header_main_menu_action', 10 );


/**
 * Header mobile menu hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_mobile_menu_action' ) ) :

 	function grace_mag_header_mobile_menu_action() {
        
        ?>
 		<div class="mobile-menu-icon">
            <div class="mobile-menu"><i class="fa fa-align-right"></i>Menu</div>
        </div>
        <!--mobile-menu-->
        <?php
 	}
endif;
add_action( 'grace_mag_header_mobile_menu', 'grace_mag_header_mobile_menu_action', 10 );

/**
 * Header mobile menu hook declaration
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_header_canvas_menu_action' ) ) :

 	function grace_mag_header_canvas_menu_action() {
        
        ?>
 		<div class="side-canvas">
            <div class="close">
                <span class="fa fa-close"></span>
            </div>
            <?php
            //canvas sidebar
            if( is_active_sidebar( 'grace-mag-canvas-sidebar' ) ) {
                
                dynamic_sidebar( 'grace-mag-canvas-sidebar' );
            }
            ?>
        </div>
        <?php
 	}
endif;
add_action( 'grace_mag_header_canvas_menu', 'grace_mag_header_canvas_menu_action', 10 );




























