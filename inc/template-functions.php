<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Grace_Mag
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function grace_mag_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'grace-mag-sidebar' ) ) {
		$classes[] = 'no-sidebar';
	}
    
    // Adds a class of no-sidebar when there is no sidebar present.
    $sidebar_position = grace_mag_sidebar_position();
	if ( ! is_active_sidebar( 'grace-mag-sidebar' ) || $sidebar_position == 'none' ) {
		$classes[] = 'no-sidebar';
	}
    
    if( get_background_image() || get_background_color() != 'ffffff'  ) {
        $classes[] = 'boxed';
    }

	return $classes;
}
add_filter( 'body_class', 'grace_mag_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function grace_mag_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'grace_mag_pingback_header' );

/**
 * News Ticker Template
 */
if( ! function_exists( 'grace_mag_news_ticker_template' ) ) {
    
    function grace_mag_news_ticker_template() {
        
        $news_ticker_query = grace_mag_news_ticker_posts_query();
        
        if( $news_ticker_query -> have_posts() ) {

        ?>
        <div class="nt_wrapper">
            <div class="nt_title pull-left"><?php esc_html_e( 'Breaking News', 'grace-mag' ); ?> <i class="fa fa-angle-right"></i></div>
            <ul id="webticker">
                <?php
                while( $news_ticker_query -> have_posts() ) {

                    $news_ticker_query -> the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <?php
        }
    }
}

/**
 * Social links template
 */
if( ! function_exists( 'grace_mag_social_links_template' ) ) {
    
    function grace_mag_social_links_template( $position ) {
        
        if( $position == 'header' ) {
                
            $facebook_link = grace_mag_mod( 'facebook_link', '' );
            $twitter_link = grace_mag_mod( 'twitter_link', '' );
            $instagram_link = grace_mag_mod( 'instagram_link', '' );
            $youtube_link = grace_mag_mod( 'youtube_link', '' );
            $display_rss_feed = grace_mag_mod( 'display_rss_feed', true );

            if( !empty( $facebook_link ) ) { 
            ?>
            <li>
                <a href="<?php echo esc_url( $facebook_link ); ?>" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <?php
            }
            if( !empty( $twitter_link ) ) {
            ?>
            <li>
                <a href="<?php echo esc_url( $twitter_link ); ?>" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <?php
            }
            if( !empty( $instagram_link ) ) {
            ?>
            <li>
                <a href="<?php echo esc_url( $instagram_link ); ?>" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <?php
            }
            if( !empty( $youtube_link ) ) {
            ?>
            <li>
                <a href="<?php echo esc_url( $youtube_link ); ?>" target="_blank">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
            <?php
            }
            if( $display_rss_feed == true ) {
            ?>
            <li>
                <a href="<?php echo esc_url( home_url( '/feed/' ) ); ?>" target="_blank">
                    <i class="fa fa-rss"></i>
                </a>
            </li>
            <?php
            }
        }  
    }
}

/**
 * Selects banner template
 */
if( ! function_exists( 'grace_mag_banner_template' ) ) {
    
    function grace_mag_banner_template() {
        
        $display_banner = grace_mag_mod( 'display_banner', true );
        
        if( $display_banner == true ) {

            get_template_part( 'template-parts/banner/banner', 'one' );
            
        }
    
    }
}

/**
 * Selects post listiong layout template
 */
if( ! function_exists( 'grace_mag_post_listing_layout_template' ) ) {
    
    function grace_mag_post_listing_layout_template() {
        
        get_template_part( 'template-parts/layout/layout', 'grid' );
    }
}

/**
 * Function to get post and page sidebar position.
 */
if( ! function_exists( 'grace_mag_single_sidebar_position' ) ) {

	function grace_mag_single_sidebar_position() {

		global $theme_prefix;

		$sidebar_position_key = $theme_prefix . '_sidebar_position';

		$single_sidebar_position = get_post_meta( get_the_ID(), $sidebar_position_key, true );

		return $single_sidebar_position;
	}
}

/**
 * Function to check position of sidebar.
 */
if( !function_exists( 'grace_mag_sidebar_position' ) ) {

    function grace_mag_sidebar_position() {

    	$sidebar_position = '';

        if( is_active_sidebar( 'grace-mag-sidebar' ) ) {

            if( !is_singular() ) {

                if( is_archive() ) {

                    $sidebar_position = grace_mag_mod( 'archive_page_sidebar_position', 'right' );
                } 

                if( is_search() ) {

                    $sidebar_position = grace_mag_mod( 'search_page_sidebar_position', 'right' );
                } 

                if( is_home() ) {

                    $sidebar_position = grace_mag_mod( 'blog_page_sidebar_position', 'right' );
                }
            } else {

                $sidebar_position = grace_mag_single_sidebar_position();
            }

            if( empty( $sidebar_position ) ) {

                $sidebar_position = 'right';
            }
        } else {

            $sidebar_position = 'none';
        }

    	return $sidebar_position;
    }
}

/**
 * Add custom class for main container containing posts.
 */
if( ! function_exists( 'grace_mag_main_container_class' ) ) {

	function grace_mag_main_container_class() {

		$container_class = '';
        
        $sidebar_position = grace_mag_sidebar_position();
        
		$sticky_enabled = grace_mag_mod( 'enable_sticky_sidebar', true );

		if( $sidebar_position == 'none' || !is_active_sidebar( 'grace-mag-sidebar' ) ) {
            
            $container_class = 'col-md-12 col-lg-12';
	
		} else {

			$container_class = 'col-md-12 col-lg-9';
		}

		if( $sticky_enabled == true && $sidebar_position != 'none' ) {

			$container_class .= ' sticky-portion';
		}

		echo esc_attr( $container_class );
	}
}

/**
 * Add custom class for grid layout container containing posts.
 */
if( ! function_exists( 'grace_mag_layout_container_class' ) ) {

	function grace_mag_layout_container_class() {

		$container_class = '';
        
        $sidebar_position = grace_mag_sidebar_position();

		if( $sidebar_position == 'none' || !is_active_sidebar( 'grace-mag-sidebar' ) ) {
            
            $container_class = 'col-12 col-lg-4';
	
		} else {

			$container_class = 'col-12 col-lg-6';
		}

		echo esc_attr( $container_class );
	}
}

/**
 * Add custom class for sidebar.
 */
if( ! function_exists( 'grace_mag_sidebar_class' ) ) {

	function grace_mag_sidebar_class() {

		$sidebar_class = 'col-12 col-md-4 col-lg-3';
		$sticky_enabled = grace_mag_mod( 'enable_sticky_sidebar', true );

		if( $sticky_enabled == true ) {
			$sidebar_class .= ' sticky-portion';
		}
        
		echo esc_attr( $sidebar_class );
	}
}


if ( ! function_exists( 'grace_mag_display_sidebar' ) ) :
	/*
	 * Displays the sidebar as per input.
	 */
	function grace_mag_display_sidebar( $position ) {
        
        if( empty( $position ) ) {
            return;
        }
        
        $sidebar_position = grace_mag_sidebar_position();
        
        if( !empty( $position ) && !empty( $sidebar_position ) ) {
            
            if( $position == $sidebar_position && is_active_sidebar( 'grace-mag-sidebar' ) ) {
                
                get_sidebar();
            }
        }
	}
endif;

/**
 * Function that defines posts pagination.
 */
if( ! function_exists( 'grace_mag_pagination' ) ) {

	function grace_mag_pagination() {
        
        ?>
        <div class="gm-pagination">
        <?php
        
            the_posts_pagination( array(
                'mid_size' => 2,
            ) );
        ?>
        </div>
        <?php
	}
}

/**
 * Function that defines pages links.
 */
if( ! function_exists('grace_mag_pages_links') ) {

function grace_mag_pages_links() {

        $pages_links_args = array(
            'before'    => '<div class="page-links">' . esc_html__( 'Pages:', 'grace-mag' ),
            'after'     => '</div>',
        );

        wp_link_pages( $pages_links_args );
    }
}

/**
 * Function that defines post navigation.
 */
if( ! function_exists( 'grace_mag_post_navigation' ) ) {

	function grace_mag_post_navigation() {
		
		$next_post = get_next_post();

	    $previous_post = get_previous_post();
        
        ?>
        <div class="post-navigation">
            <div class="nav-links">
              <?php
               if (!empty( $previous_post )):
                ?>
                <div class="nav-previous">
                    <span><?php echo esc_html__( 'Prev post', 'grace-mag' ); ?></span>
                    <a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>"><?php echo esc_attr( $previous_post->post_title ); ?></a>
                </div>
                <?php
                endif;
        
               if (!empty( $next_post )):
                ?>
                <div class="nav-next">
                    <span><?php echo esc_html__( 'Next post', 'grace-mag' ); ?></span>
                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?></a>
                </div>
                <?php
                endif;
                ?>
            </div><!-- // nav-links -->
        </div><!-- // post-navigation -->
        <?php
	}
}

/**
 * Breadcrumb declaration of the theme.
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_breadcrumb' ) ) :

 	function grace_mag_breadcrumb() {
        
        $display_breadcrumb = grace_mag_mod( 'display_breadcrumb', true );

 		if( $display_breadcrumb == true ) {
 			?>
 			<div class="container">
                <div class="breadcrumbs-sec breadcrumbs-layout1">
                    <?php
                    $breadcrumb_args = array(
                        'show_browse' => false,
                    );
                    grace_mag_breadcrumb_trail( $breadcrumb_args );
                    ?>
                </div>
                <!--breadcdrum-->
            </div>
 			<?php
 		}  		
 	}
endif;

/**
 * Function to return customizer option for posted time
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_posted_time_option' ) ) :

 	function grace_mag_posted_time_option() {
        
        $display_posted_time = false;
        
        if( is_single() ) {
            
            $display_posted_time = grace_mag_mod( 'post_single_display_posted_date', true );
        }
        
        if( is_home() ) {
            
            $display_posted_time = grace_mag_mod( 'blog_page_display_posted_time', true );
        }
        
        if( is_archive() ) {
            
            $display_posted_time = grace_mag_mod( 'archive_page_display_posted_time', true );
        }
        
        if( is_search() ) {
            
            $display_posted_time = grace_mag_mod( 'search_page_display_posted_time', true );
        }
        
        return $display_posted_time;
 	}
endif;

/**
 * Function to return customizer option for comment number
 *
 * @since 1.0.0
 */
if( ! function_exists( 'grace_mag_comment_no_option' ) ) :

 	function grace_mag_comment_no_option() {
        
        $display_comment_no = false;
        
        if( is_single() ) {
            
            $display_comment_no = grace_mag_mod( 'post_single_display_comment_number', true );
        }
        
        if( is_home() ) {
            
            $display_comment_no = grace_mag_mod( 'blog_page_display_comment_number', true );
        }
        
        if( is_archive() ) {
            
            $display_comment_no = grace_mag_mod( 'archive_page_display_comment_number', true );
        }
        
        if( is_search() ) {
            
            $display_comment_no = grace_mag_mod( 'search_page_display_comment_number', true );
        }
        
        return $display_comment_no;
 	}
endif;

