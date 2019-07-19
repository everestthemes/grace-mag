<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grace_Mag
 */

?>

<footer class="footer-bg">
    <?php 
    
    if( is_active_sidebar( 'grace-mag-footer-left' ) || is_active_sidebar( 'grace-mag-footer-middle' ) || is_active_sidebar( 'grace-mag-footer-right' ) ) {
        
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <?php
                //footer left area
                if( is_active_sidebar( 'grace-mag-footer-left' ) ) {

                    dynamic_sidebar( 'grace-mag-footer-left' );
                }
                ?>
            </div>
            <!--col-lg-4-->
            <div class="col-12 col-lg-4">
                <?php
                //footer middle area
                if( is_active_sidebar( 'grace-mag-footer-middle' ) ) {

                    dynamic_sidebar( 'grace-mag-footer-middle' );
                }
                ?>
            </div>
            <!--col-lg-4-->
            <div class="col-12 col-lg-4">
                <?php
                //footer right area
                if( is_active_sidebar( 'grace-mag-footer-right' ) ) {

                    dynamic_sidebar( 'grace-mag-footer-right' );
                }
                ?>
            </div>
            <!--col-lg-4-->
        </div>
        <!--row-->
    </div>
    <?php
    }
    ?>
    <div class="copy-right">
        <div class="container">
            <div class="copy-content">
                <p>
                <?php 
                $footer_copyright_text = grace_mag_mod( 'copyright_text', '' );
                if( !empty( $footer_copyright_text ) ) {
                    /* translators: 1: Copyright Text 2: Theme name, 3: Theme author. */
                    printf( esc_html__( '%1$s %2$s by %3$s','grace-mag' ), $footer_copyright_text, 'Grace Mag', '<a href="'. esc_url( 'https://everestthemes.com' ) . '">Everestthemes</a>' );
                } else {
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf( esc_html__( '%1$s by %2$s', 'grace-mag' ), 'Grace Mag', '<a href="'. esc_url( 'https://everestthemes.com' ) . '">Everestthemes</a>' );
                }
                ?> 
                </p>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
