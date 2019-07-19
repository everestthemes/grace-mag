<?php
/**
 * Fullwidth News Widget Class
 *
 * @package Grace_Mag
 */

if( ! class_exists( 'Grace_Mag_Fullwidth_News_Widget' ) ) :

    class Grace_Mag_Fullwidth_News_Widget extends WP_Widget {
 
        function __construct() { 

            parent::__construct(
                'grace-mag-fullwidth-news-widget',  // Widget ID
                esc_html__( 'GM: Fullwidth News Widget', 'grace-mag' ),   // Widget Name
                array(
                    'description' => esc_html__( '', 'grace-mag' ), 
                )
            ); 
     
        }
        
        

     
        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

            $posts_no = !empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'layout_one';
            
            $select_cat    = !empty( $instance['select_cat'] ) ? $instance['select_cat'] : 0;
            
            $post_order    = !empty( $instance['post_order'] ) ? $instance['post_order'] : 'date';
            
            $orderby       = !empty( $instance['orderby'] ) ? $instance['orderby'] : 'desc';
            
            $post_content  = !empty( $instance[ 'post_content' ] ) ? $instance[ 'post_content' ] : 'display_time';
            
            $post_format_icon  = !empty( $instance['post_format_icon'] ) ? $instance['post_format_icon'] : false;

            $post_args = array(
                'post_type' => 'post'
            );
            
            if( absint( $select_cat ) > 0) {
                $post_args['cat'] = absint( $select_cat );
            }
            
            if( !empty( $post_order ) ) {
                $post_args['order'] = $post_order;
            }
            
            if( !empty( $orderby ) ) {
                $post_args['orderby'] = $orderby;
            }

            if( absint( $posts_no ) > 0 ) {
                $post_args['posts_per_page'] = absint( $posts_no );
            }

            $post_query = new WP_Query( $post_args );

            if( $post_query->have_posts() ) {

                if( $layout == 'layout_one' ) {
                    ?>
                    <div class="primary-widget gm-primary-sec">
        <div class="container">
            <div class="title-sec">
                <h2 class="md-title">Food and Nutritions</h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="primary-content-area">
                        <div class="primary-main-bdy has-background-img" style="background-image: url(assets/img/primary-sec-img.jpg);">
                            <div class="caption">
                                <div class="gm-sub-cate"> 
                                  <small><a href="#">Fitness</a></small> 
                                </div>
                                <h4 class="sm-title">
                                  <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                </h4>
                                <div class="meta"> 
                                  <span class="posted-date"> <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> 
                                    <a href="#" rel="">
                                        <time class="entry-date published">4th July , 2019</time>
                                     </a> 
                                  </span> 
                                  <span class="comments"> 
                                    <em class="meta-icon"><i class="fa fa-comment"></i></em><a href="#">0</a> </span> </div>
                            </div>
                        </div>
                        <ul class="primary-list1 ">
                            <li class="clearfix">
                                <figure><img src="assets/img/listing-img.jpg" alt="listing"></figure>
                                <div class="list-content">
                                    <div class="gm-sub-cate"> 
                                      <small><a class="orangec" href="#">Fitness</a></small> 
                                    </div>
                                    <h4 class="sm-title">
                                      <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                </div>
                            </li>
                            <li class="clearfix">
                                <figure><img src="assets/img/listing-img.jpg" alt="listing"></figure>
                                <div class="list-content">
                                    <div class="gm-sub-cate"> 
                                      <small><a class="orangec" href="#">Fitness</a></small>
                                    </div>
                                    <h4 class="sm-title">
                                      <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- col-lg-4 -->
                <div class="col-12  col-lg-4">
                    <div class="primary-content-area">
                        <div class="primary-main-bdy has-background-img" style="background-image: url(assets/img/primary-sec-img1.jpg);">
                            <div class="caption">
                                <div class="gm-sub-cate"> <small><a href="#">Fitness</a></small> </div>
                                <h4><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                </h4>
                              <div class="meta">
                                 <span class="posted-date"> 
                                  <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> 
                                  <a href="#" >
                                    <time class="entry-date published">4th July , 2019</time>
                                  </a> 
                                </span> 
                                <span class="comments"> <em class="meta-icon">
                                  <i class="fa fa-comment"></i></em>
                                  <a href="#">0</a> 
                                </span> 
                              </div>
                            </div>
                        </div>
                        <ul class="primary-list1 ">
                            <li class="clearfix">
                                <figure><img src="assets/img/listing-img.jpg" alt="listing"></figure>
                                <div class="list-content">
                                    <div class="gm-sub-cate"> <small><a class="orangec" href="#">Fitness</a></small> </div>
                                    <h4 class="sm-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                </div>
                            </li>
                            <li class="clearfix">
                                <figure><img src="assets/img/listing-img.jpg" alt="listing"></figure>
                                <div class="list-content">
                                    <div class="gm-sub-cate"> 
                                      <small><a class="orangec" href="#">Fitness</a></small> 
                                    </div>
                                    <h4 class="sm-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- col-lg-4 -->
                <div class="col-12  col-lg-4">
                    <div class="primary-content-area">
                        <div class="primary-main-bdy has-background-img" style="background-image: url(assets/img/primary-sec-img.jpg);">
                            <div class="caption">
                                <div class="gm-sub-cate"> <small><a href="#">Fitness</a></small> </div>
                                <h4 class="sm-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                <div class="meta"> <span class="posted-date"> <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> <a href="#" rel="">
                                            <time class="entry-date published">4th July , 2019</time>
                                        </a> </span> <span class="comments"> <em class="meta-icon"><i class="fa fa-comment"></i></em><a href="#">0</a> </span>
                                </div>
                            </div>
                        </div>
                        <ul class="primary-list1 ">
                            <li class="clearfix">
                                <figure><img src="assets/img/listing-img.jpg" alt="listing"></figure>
                                <div class="list-content">
                                    <div class="gm-sub-cate"> <small><a class="orangec" href="#">Fitness</a></small> </div>
                                    <h4 class="sm-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                </div>
                            </li>
                            <li class="clearfix">
                                <figure><img src="assets/img/listing-img.jpg" alt="listing"></figure>
                                <div class="list-content">
                                    <div class="gm-sub-cate"> <small><a class="orangec" href="#">Fitness</a></small> </div>
                                    <h4 class="sm-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- col-lg-4 -->
            </div>
        </div>
    </div>
    <!-- primary-widget -->
                    <?php
                } else {
                    ?>
                    <div class="full-layout5">
        <div class="container">
            <div class="title-sec orange">
                <h2 class="md-title">Lifestyle</h2>
            </div>
            <div class="row ">
                <div class="col-12 col-lg-6">
                    <div class="full-layout5-aside">
                        <ul class="row">
                            <li class="col-12 col-lg-6">
                                <figure class="img-hover"> <img src="assets/img/fashion-sub-img2.jpg" alt="fashion section"> </figure>
                                <h4 class="sub-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                            </li>
                            <li class="col-12 col-lg-6">
                                <figure class="img-hover"> <img src="assets/img/fashion-img.jpg" alt="fashion section"> </figure>
                                <h4 class="sub-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                            </li>
                            <li class="col-12 col-lg-6">
                                <figure class="img-hover"> <img src="assets/img/fashion-sub-img1.jpg" alt="fashion section"> </figure>
                                <h4 class="sub-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                            </li>
                            <li class="col-12 col-lg-6">
                                <figure class="img-hover"> <img src="assets/img/fashion-sub-img2.jpg" alt="fashion section"> </figure>
                                <h4 class="sub-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                            </li>
                        </ul>
                        <!--3rd inner-row-->
                    </div>
                </div>
                <!--inner-col-lg-6-->
                <div class="col-12 col-lg-6">
                    <div class="full-layout5-content">
                        <figure class="img-hover"> <img src="assets/img/fashion-img.jpg" alt="fashion section"> </figure>
                        <div class="full-layout-bdy">
                            <div class="gm-sub-cate">
                             <small><a href="#" class="bluebg">liftestyle</a></small>
                              </div>
                            <h3 class="sm-title">
                              <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                            </h3>
                            <div class="meta"> 
                              <span class="posted-date"> 
                                <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> <a href="#" rel="">
                                 <time class="entry-date published">4th July , 2019</time>
                                    </a> </span>
                                <span class="comments"> <em class="meta-icon"><i class="fa fa-comment"></i></em><a href="#">0</a> </span> 
                            </div>
                            <!--meta-->
                        </div>
                    </div>
                </div>
                <!--col-lg-6-->
            </div>
        </div>
    </div>
    <!-- full layout5 -->
                    <?php
                }           
            }
        }
     
        public function form( $instance ) {
            $defaults = array(
                'title'        => '',
                'post_no'      => 4,
                'layout'       => 'layout_one',
                'select_cat'   => 0,
                'post_order'   => 'desc',
                'orderby'      => 'date',
                'post_content' => 'display_time',
                'post_format_icon' => true,
            );

            $instance = wp_parse_args( (array) $instance, $defaults );

            ?>
            <label>
              <strong><?php esc_html_e('Chooose Layout', 'gucherry-blog-pro'); ?></strong>
            </label>

            <label>
              <input type="radio" name="test" value="big">
              <img src="http://placehold.it/40x60/b0f/fff&text=B">
            </label>
            <p>
                <label for="<?php echo esc_attr( $this->get_field_name('layout') ); ?>">
                    
                
                    <input type="radio" name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>" value="<?php echo esc_attr( 'one' ); ?>" <?php if( $instance['layout'] == 'one' ) { echo esc_attr( 'checked' ); } ?>>
                        <img src="<?php echo esc_url( 'http://placehold.it/40x60/b0f/fff&text=B' ); ?>">
                </label>
                
                <label for="<?php echo esc_attr( $this->get_field_name('layout') ); ?>">
                    
                
                    <input type="radio" name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>" value="<?php echo esc_attr( 'two' ); ?>" <?php if( $instance['layout'] == 'two' ) { echo esc_attr( 'checked' ); } ?>>
                        <img src="<?php echo esc_url( 'http://placehold.it/40x60/b0f/fff&text=A' ); ?>">
                </label>
                
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_name('title') ); ?>">
                    <strong><?php esc_html_e('Title', 'gucherry-blog-pro'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />   
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'select_cat' ) ); ?>">
                    <strong><?php echo esc_html_e( 'Select Category' , 'gucherry-blog-pro' ); ?></strong>
                </label>
                <?php
                    wp_dropdown_categories( array(
                        'id'               => esc_attr( $this->get_field_id( 'select_cat' ) ),
                        'class'            => 'widefat',
                        'name'             => esc_attr( $this->get_field_name( 'select_cat' ) ),
                        'orderby'          => 'name',
                        'selected'         => esc_attr( $instance [ 'select_cat' ] ),
                        'show_option_all'  => esc_html__( 'Select To Show Category Posts' , 'gucherry-blog-pro' ),
                        )
                    );
                ?>
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ); ?>">
                    <strong><?php esc_html_e( 'Order By' , 'gucherry-blog-pro' ); ?></strong>
                    <br>
                    <small><b><?php esc_html_e( 'Select how to sort retrieved posts.' , 'gucherry-blog-pro' ); ?></b></small>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ); ?>">
                <?php
                    $orderby_choices = array(
                        'id'               => esc_html__( 'Id', 'gucherry-blog-pro' ),
                        'title'            => esc_html__( 'Title', 'gucherry-blog-pro' ),
                        'date'             => esc_html__( 'Date', 'gucherry-blog-pro' ),
                        'author'           => esc_html__( 'Author', 'gucherry-blog-pro' ),
                        'comment_count'    => esc_html__( 'Comments', 'gucherry-blog-pro' ),
                        'rand'             => esc_html__( 'Random', 'gucherry-blog-pro' ),
                        'none'             => esc_html__( 'None', 'gucherry-blog-pro' ),
                    );
                    
                    foreach( $orderby_choices as $key => $orderby ){
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php if( $instance['orderby'] == $key ) { echo esc_attr( 'selected' ); } ?>>
                            <?php 
                                echo esc_html( $orderby );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_name( 'post_order' ) ); ?>">
                    <strong><?php esc_html_e( 'Sort Order' , 'gucherry-blog-pro' ); ?></strong>
                    <br>
                    <small><b><?php esc_html_e( 'Designates the ascending or descending order.' , 'gucherry-blog-pro' ); ?></b></small>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'post_order' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_order' ) ); ?>">
                <?php
                    $order_choices = array(
                        'asc'      => esc_html__( 'Ascending Order', 'gucherry-blog-pro' ),
                        'desc'     => esc_html__( 'Descending Order', 'gucherry-blog-pro' ),
                    );
                    
                    foreach( $order_choices as $key => $order ){
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php if( $instance['post_order'] == $key ) { echo esc_attr( 'selected' ); } ?>>
                            <?php 
                                echo esc_html( $order );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_name('post_no') ); ?>">
                    <strong><?php esc_html_e('No of Posts', 'gucherry-blog-pro'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>" name="<?php echo esc_attr( $this->get_field_name('post_no') ); ?>" type="number" value="<?php echo esc_attr( $instance['post_no'] ); ?>" />   
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_name( 'post_content' ) ); ?>">
                    <strong><?php esc_html_e( 'Post Content' , 'gucherry-blog-pro' ); ?></strong>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'post_content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_content' ) ); ?>">
                <?php
                    $post_content_choices = array(
                        'display_time'     => esc_html__( 'Display Posted Time', 'gucherry-blog-pro' ),
                        'display_read_time'  => esc_html__( 'Display Post Read Time', 'gucherry-blog-pro' ),
                        'display_author'  => esc_html__( 'Display Post Author', 'gucherry-blog-pro' ),
                        'display_cmt_no'  => esc_html__( 'Display Comment No.', 'gucherry-blog-pro' ),
                    );
                    
                    foreach( $post_content_choices as $key => $post_content ){
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php if( $instance['post_content'] == $key ) { echo esc_attr( 'selected' ); } ?>>
                            <?php 
                                echo esc_html( $post_content );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </p>
            
            <p>
                <input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'post_format_icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_format_icon' ) ); ?>" <?php if( $instance['post_format_icon'] == true ) { esc_attr_e( 'checked', 'gucherry-blog-pro' ); } ?>>
                <label for="<?php echo esc_attr( $this->get_field_name( 'post_format_icon' ) ); ?>">
                    <strong><?php esc_html_e( 'Display Post Format Icon', 'gucherry-blog-pro' ); ?></strong>
                </label>
            </p>     
            <?php
        }
     
        public function update( $new_instance, $old_instance ) {
     
            $instance = $old_instance;

            $instance['title']        = sanitize_text_field( $new_instance['title'] );
            
            $instance['select_cat']   = absint( $new_instance['select_cat'] );
            
            $instance['post_order']   = sanitize_text_field( $new_instance['post_order'] );
            
            $instance['orderby']      = sanitize_text_field( $new_instance['orderby'] );

            $instance['post_no']      = absint( $new_instance['post_no'] );

            $instance['layout']       = sanitize_text_field( $new_instance['layout'] );
            
            $instance['post_content'] = sanitize_text_field( $new_instance['post_content'] );
            
            $instance['post_format_icon'] = wp_validate_boolean( $new_instance['post_format_icon'] );

            return $instance;
        }
    }
endif;