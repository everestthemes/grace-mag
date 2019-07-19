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
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
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
