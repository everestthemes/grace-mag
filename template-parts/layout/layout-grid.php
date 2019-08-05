<?php

/**
 * The template for Grid Layouot
 *
 * @package Grace_Mag
 */

?>
<div class="category-page">
    <?php
    
    if( is_archive() || is_search() ) {
    $background_image_url = grace_mag_mod( 'common_page_background_image', '' );
    ?>
    <div class="inner-banner<?php grace_mag_has_image_class( $background_image_url ); ?>"<?php grace_mag_has_image_url( $background_image_url ); ?>>
        <div class="container">
            <div class="gm-inner-caption">
                <?php
                if( is_archive() ) {
                    
                    the_archive_title( '<h1 class="primary-tt">', '</h1>' );
                }
        
                if( is_search() ) {
                    
                    ?>
                    <h1 class="primary-tt">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'grace-mag' ), get_search_query() );
                        ?>
                    </h1>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!--inner-banner-->
    <?php
    
    grace_mag_breadcrumb();
        
    }
    ?>
    <div class="cate-page-content-layout1">
        <div class="container">
            <div class="row">
                <?php grace_mag_display_sidebar( 'left' ); ?>
                <div class="<?php grace_mag_main_container_class(); ?>">
                    <div class="title-sec green">
                        <?php
                        if( is_archive() ) {

                            the_archive_title( '<h2 class="md-title">', '</h2>' );
                        }
                        
                        if( is_home() ) {
                            ?>
                            <h2 class="md-title"><?php echo esc_html__( 'Blog Page', 'grace-mag' ); ?></h2>
                            <?php
                        }
                        
                        if( is_search() ) {
                            ?>
                            <h2 class="md-title"><?php echo esc_html__( 'Search Results', 'grace-mag' ); ?></h2>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="row">
                    <?php

                    if( have_posts() ) :

                    /* Start the Loop */
                        while ( have_posts() ) :

                            the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */

                            get_template_part( 'template-parts/content', 'grid' );
                            

                        endwhile;

                        grace_mag_pagination();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;

                    ?>
                    </div>
                    <!--inner-row-->
                </div><!--col-lg-8-->
                <?php grace_mag_display_sidebar( 'right' ); ?>
            </div><!--container-->
        </div>
    </div>
</div> <!-- category-page-->
