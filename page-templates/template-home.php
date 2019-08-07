<?php
/**
 *
 * Template Name: Homepage Template
 * Template Post Type: page
 */

get_header();

grace_mag_banner_template();

//fullwidth top news area
if( is_active_sidebar( 'grace-mag-fullwidth-top-news-area' ) ) {

    dynamic_sidebar( 'grace-mag-fullwidth-top-news-area' );
}

//halfwidth and sidebar active
if( is_active_sidebar( 'grace-mag-middle-news-area' ) || is_active_sidebar( 'grace-mag-sidebar' ) ) {

?>  
    <div class="half-widget">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-9 left_post_area">
                    <?php
                    //halfwidget news area
                    if( is_active_sidebar( 'grace-mag-middle-news-area' ) ) {
                        
                        dynamic_sidebar( 'grace-mag-middle-news-area' );
                    }
                    ?>
                </div>
                <!--col-lg-9-->
                <div class="col-12 col-md-4 col-lg-3 right_post_area">
                    <?php
                    //sidebar area
                    if( is_active_sidebar( 'grace-mag-sidebar' ) ) {
                        
                        dynamic_sidebar( 'grace-mag-sidebar' );
                    }
                    ?>
                </div>
                <!--side-bar col-3-->
            </div>
            <!--row-->
        </div>
        <!--contaner-->
    </div>
 <!--half widget-->
 
<?php
    
}

//fullwidth bottom news area
if( is_active_sidebar( 'grace-mag-fullwidth-bottom-news-area' ) ) {

    dynamic_sidebar( 'grace-mag-fullwidth-bottom-news-area' );
}

get_footer();
