<?php
/**
 * Functions which enhance the theme
 *
 * @package Grace_Mag
 */

/**
 * Function to get customizer options
 */
if ( !function_exists( 'grace_mag_mod' ) ) {
    
    function grace_mag_mod( $id, $default ) {

        global $theme_prefix;

        if( empty( $id || $default ) ) {
            return;
        }

        $field_id = $theme_prefix . '_' . $id;

        $theme_mod = '';

        if( !empty( $default ) ) {

            $theme_mod = get_theme_mod( $field_id, $default );
        } else {

            $theme_mod = get_theme_mod( $field_id );
        }

        return $theme_mod;
    }
}

/**
 * Fallback For Main Menu
 */
if ( !function_exists( 'grace_mag_navigation_fallback' ) ) {
	/**
     * Return unordered list.
     *
     * @since 1.0.0
     * @return unordered list.
     */
    function grace_mag_navigation_fallback() {
        ?>
        <ul class="primary-menu">
            <?php
            if( current_user_can( 'edit_theme_options' ) ) {
                ?>
                <li><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Add Menu', 'grace-mag' ); ?></a></li>
                <?php
            } else {
                wp_list_pages( array( 'title_li' => '', 'depth' => 3 ) ); 
            }
            ?>
        </ul>
        <?php
    }
}

/**
 * News Ticker Posts Query
 */
if( !function_exists( 'grace_mag_news_ticker_posts_query' ) ) {
    
    function grace_mag_news_ticker_posts_query() {
        
        $news_ticker_category = grace_mag_mod( 'top_header_news_ticker_category', '' );
        
        $news_ticker_posts_no = grace_mag_mod( 'top_header_news_ticker_post_number', 4 );
        
        $news_ticker_args = array(
          'post_type'      => 'post',  
        );
        
        if( !empty( $news_ticker_category ) ) {
            $news_ticker_args['category_name'] = $news_ticker_category;
        }
        
        if( !empty( $news_ticker_posts_no ) ) {
            $news_ticker_args['posts_per_page'] = absint( $news_ticker_posts_no );
        }
        
        $news_ticker_query = new WP_Query( $news_ticker_args );
        
        return $news_ticker_query;
    }         
}

/**
 * Banner Posts Query
 */
if( !function_exists( 'grace_mag_banner_posts_query' ) ) {
    
    function grace_mag_banner_posts_query() {
        
        $banner_category = grace_mag_mod( 'banner_category', '' );
        
        $banner_posts_no = grace_mag_mod( 'banner_post_number', 4 );
        
        $banner_args = array(
          'post_type'      => 'post',  
        );
        
        if( !empty( $banner_category ) ) {
            $banner_args['category_name'] = $banner_category;
        }
        
        if( !empty( $banner_posts_no ) ) {
            $banner_args['posts_per_page'] = absint( $banner_posts_no );
        }
        
        $banner_query = new WP_Query( $banner_args );
        
        return $banner_query;
    }         
}