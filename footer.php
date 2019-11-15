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
        
        /**
        * Hook - grace_mag_footer_container.
        *
        * @hooked grace_mag_footer_container_action - 10
        */
        do_action( 'grace_mag_footer_container' );
    
    }
    
    /**
    * Hook - grace_mag_footer_copyright.
    *
    * @hooked grace_mag_footer_copyright_action - 10
    */
    do_action( 'grace_mag_footer_copyright' );
    ?>
    
</footer>
<?php
/**
* Hook - grace_mag_footer_scroll_top.
*
* @hooked grace_mag_footer_scroll_top_action - 10
*/
do_action( 'grace_mag_footer_scroll_top' );
?>
</div><!-- #page -->

<!-- start read also section -->
        <div class="read-also">
        <div class="gm-also-wrap">
            <h3 class="gm-also-tt">
                Read Also
                <a class="penci-close-rltpopup">x<span></span><span></span></a>
            </h3>
        </div><!--gm-also-wrap-->
        <div class="read-also-wrap">
        <div class="read-also-content">
            <div class="read-img-holder">
                <figure>
                    <img src="http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-600x400.jpg" class="attachment-grace-mag-thumbnail-one size-grace-mag-thumbnail-one wp-post-image" alt="Get best glasses for using laptops and pc" srcset="http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-600x400.jpg 600w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-300x200.jpg 300w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-768x512.jpg 768w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-1024x682.jpg 1024w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-1200x800.jpg 1200w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1.jpg 1280w" >
                </figure>
            </div><!--read-img-holder-->
            <div class="read-also-bdy">
                <div class="gm-sub-cate"> 
                    <small>
                        <ul class="post-categories">
                            <li><a href="#" rel="category">Technology</a></li>
                        </ul>
                    </small> 
                </div>
                <h3 class="sub-title">
                    <a href="#">Gadgets you must have before leaving</a>
                </h3>
            </div>
        </div><!--read-also-content-->
          <div class="read-also-content">
            <div class="read-img-holder">
                <figure>
                    <img src="http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-600x400.jpg" class="attachment-grace-mag-thumbnail-one size-grace-mag-thumbnail-one wp-post-image" alt="Get best glasses for using laptops and pc" srcset="http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-600x400.jpg 600w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-300x200.jpg 300w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-768x512.jpg 768w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-1024x682.jpg 1024w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-1200x800.jpg 1200w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1.jpg 1280w" >
                </figure>
            </div><!--read-img-holder-->
            <div class="read-also-bdy">
                <div class="gm-sub-cate"> 
                    <small>
                        <ul class="post-categories">
                            <li><a href="#" rel="category">Technology</a></li>
                        </ul>
                    </small> 
                </div>
                <h3 class="sub-title">
                    <a href="#">Gadgets you must have before leaving</a>
                </h3>
            </div>
        </div><!--read-also-content-->
          <div class="read-also-content">
            <div class="read-img-holder">
                <figure>
                    <img src="http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-600x400.jpg" class="attachment-grace-mag-thumbnail-one size-grace-mag-thumbnail-one wp-post-image" alt="Get best glasses for using laptops and pc" srcset="http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-600x400.jpg 600w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-300x200.jpg 300w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-768x512.jpg 768w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-1024x682.jpg 1024w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1-1200x800.jpg 1200w, http://localhost/dev/wp-content/uploads/2019/08/brunette-clothes-fashion-58592-1.jpg 1280w" >
                </figure>
            </div><!--read-img-holder-->
            <div class="read-also-bdy">
                <div class="gm-sub-cate"> 
                    <small>
                        <ul class="post-categories">
                            <li><a href="#" rel="category">Technology</a></li>
                        </ul>
                    </small> 
                </div>
                <h3 class="sub-title">
                    <a href="#">Gadgets you must have before leaving</a>
                </h3>
            </div>
        </div><!--read-also-content-->
    </div>
    </div><!--read-also-->
<!-- end read also section -->

<?php wp_footer(); ?>

</body>
</html>
