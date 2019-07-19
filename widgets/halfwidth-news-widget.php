<?php
/**
 * Fullwidth News Widget Class
 *
 * @package Grace_Mag
 */

if( ! class_exists( 'Grace_Mag_Halfwidth_News_Widget' ) ) :

    class Grace_Mag_Halfwidth_News_Widget extends WP_Widget {
 
        function __construct() { 

            parent::__construct(
                'grace-mag-halfwidth-news-widget',  // Widget ID
                esc_html__( 'GM: Halfwidth News Widget', 'grace-mag' ),   // Widget Name
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
                     <div class="half-left half-first half-widget-layout1">
                        <div class="title-sec green">
                            <h2 class="md-title">Fashion</h2>
                        </div>
                        <div class="row">
                          <div class="col-12 col-lg-4">
                            <div class="half-first-content">
                               <figure class="img-hover"> <img src="assets/img/fashion-img.jpg" alt="fashion section"> </figure>
                                <div class="half-first-bdy">
                                  <div class="gm-sub-cate">
                                    <small><a class="orangebg" href="#"> Fashion </a></small>
                                  </div>
                                  <h3 class="sm-title">
                                    <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                  </h3>
                                  <p>Nam condimentum varius justo Eget aenean tellus venenatis. Donec odio tempus. Felis arcu pretium metus nullam quam aenean…</p>
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
                                <!--meta-->
                                </div>
                            </div>
                          </div>
                          <!--col-lg-4-->
                          <div class="col-12 col-lg-4">
                            <div class="half-first-content">
                               <figure class="img-hover"> <img src="assets/img/fashion-img.jpg" alt="fashion section"> </figure>
                                <div class="half-first-bdy">
                                  <div class="gm-sub-cate">
                                    <small><a class="orangebg" href="#"> Fashion</a></small> 
                                  </div>
                                  <h3 class="sm-title">
                                    <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                  </h3>
                                  <p>Nam condimentum varius justo Eget aenean tellus venenatis. Donec odio tempus. Felis arcu pretium metus nullam quam aenean…</p>
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
                                <!--meta-->
                                </div>
                            </div>
                          </div>
                          <!--col-lg-4-->
                          <div class="col-12 col-lg-4">
                            <div class="half-first-content">
                               <figure class="img-hover"> <img src="assets/img/fashion-img.jpg" alt="fashion section"> </figure>
                                <div class="half-first-bdy">
                                  <div class="gm-sub-cate">
                                     <small><a class="orangebg" href="#"> Fashion </a></small>
                                  </div>
                                  <h3 class="sm-title">
                                    <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                  </h3>
                                  <p>Nam condimentum varius justo Eget aenean tellus venenatis. Donec odio tempus. Felis arcu pretium metus nullam quam aenean…</p>
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
                                <!--meta-->
                                </div>
                            </div>
                          </div>
                          <!--col-lg-4-->
                        </div>
                    </div>
                    <!--half-left half-first half-widget-layout1-->
                    <?php
                } else {
                    ?>
                    <div class="half-left-3rd  half-widget-layout2">
                        <div class="title-sec ">
                            <h2 class="md-title">Tech Tips & Guides</h2>
                        </div>
                        <div class="half-left-3rd-list">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="half-left-3rd-img">
                                        <figure class="img-hover"> 
                                          <img src="assets/img/tech-img.jpg" alt="tech"> 
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="half-left-3rd-content">
                                        <div class="gm-sub-cate">
                                            <small><a class="graybg" href="#">Tech</a></small>
                                         </div>
                                        <h3 class="sm-title">
                                          <a href="#">Aenean es lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim.…</a>
                                        </h3>
                                          <p>Nisi Dolor Etiam Eleifend Pretium Libero Quis Amet Nam Vel A Consequat Penatibus Nisi Dolor Etiam Eleifend Pretium Libero Quis Amet Nam Vel A Consequat Penatibus</p>
                                         <div class="meta"> 
                                            <span class="posted-date">
                                                <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> 
                                              <a href="#" rel="">
                                                <time class="entry-date published">4th July , 2019</time>
                                              </a>
                                            </span> 
                                            <span class="comments"> 
                                              <em class="meta-icon"><i class="fa fa-comment"></i></em><a href="#">0</a> 
                                            </span> 
                                        </div>
                                        <!--meta-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--half-left-3rd-list-->
                        <div class="half-left-3rd-list">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="half-left-3rd-img">
                                        <figure class="img-hover"> 
                                          <img src="assets/img/tech-img.jpg" alt="tech"> 
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="half-left-3rd-content">
                                        <div class="gm-sub-cate">
                                           <small> <a class="graybg" href="#">Tech</a></small>
                                         </div>
                                        <h3 class="sm-title">
                                          <a href="#">Aenean es lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim.…</a>
                                        </h3>
                                          <p>Nisi Dolor Etiam Eleifend Pretium Libero Quis Amet Nam Vel A Consequat Penatibus Nisi Dolor Etiam Eleifend Pretium Libero Quis Amet Nam Vel A Consequat Penatibus</p>
                                         <div class="meta"> 
                                            <span class="posted-date">
                                                <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> 
                                              <a href="#" rel="">
                                                <time class="entry-date published">4th July , 2019</time>
                                              </a>
                                            </span> 
                                            <span class="comments"> 
                                              <em class="meta-icon"><i class="fa fa-comment"></i></em><a href="#">0</a> 
                                            </span> 
                                        </div>
                                        <!--meta-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--half-left-3rd-list-->
                       <div class="half-left-3rd-list">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="half-left-3rd-img">
                                        <figure class="img-hover"> 
                                          <img src="assets/img/tech-img.jpg" alt="tech"> 
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="half-left-3rd-content">
                                        <div class="gm-sub-cate">
                                            <small><a class="graybg" href="#">Tech</a></small>
                                         </div>
                                        <h3 class="sm-title">
                                          <a href="#">Aenean es lorem et pede dis dolor pretium donec dictum. Vici consequat justo enim.…</a>
                                        </h3>
                                          <p>Nisi Dolor Etiam Eleifend Pretium Libero Quis Amet Nam Vel A Consequat Penatibus Nisi Dolor Etiam Eleifend Pretium Libero Quis Amet Nam Vel A Consequat Penatibus</p>
                                         <div class="meta"> 
                                            <span class="posted-date">
                                                <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> 
                                              <a href="#" rel="">
                                                <time class="entry-date published">4th July , 2019</time>
                                              </a>
                                            </span> 
                                            <span class="comments"> 
                                              <em class="meta-icon"><i class="fa fa-comment"></i></em><a href="#">0</a> 
                                            </span> 
                                        </div>
                                        <!--meta-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--half-left-3rd-list-->
                    </div>
                    <!--third layout  half-widget-layout3-->
                    
                    
                    
                    <div class="half-left 5th-layout">
                        <div class="title-sec green">
                            <h2 class="md-title">Healthy Food</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="layout-bdy5">
                                    <figure class="img-hover"> 
                                        <img class="gm-video-img" src="assets/img/hfood-img.jpg" alt="video"> </figure>
                                    <div class="caption">
                                        <h4 class="sm-title"><a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a></h4>
                                         <div class="meta">
                                             <span class="posted-date"> 
                                              <em class="meta-icon"><i class="fa fa-clock-o"> </i></em> 
                                              <a href="#" rel="">
                                                  <time class="entry-date published">4th July , 2019</time>
                                              </a> 
                                            </span> 
                                            <span class="comments"> 
                                              <em class="meta-icon"><i class="fa fa-comment"></i></em>
                                              <a href="#">0</a>
                                            </span> 
                                       </div>
                                    </div>
                                </div>
                                <!--layout-bdy5-->
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="layout-bdy5-listing">
                                    <li class="row no-gutters">
                                        <div class="col-12 col-lg-5">
                                            <figure class="img-hover"><img src="assets/img/layout5-listing-img1.jpg" alt="listing"></figure>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="half-layout5-sub-content">
                                                <div class="gm-sub-cate">
                                                 <small><a class="redbg" href="#">Healthy Food</a></small>
                                                  </div>
                                                <h4 class="sub-title">
                                                  <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row no-gutters">
                                        <div class="col-12 col-lg-5">
                                            <figure class="img-hover">
                                              <img src="assets/img/layout5-listing.jpg" alt="listing">
                                            </figure>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="half-layout5-sub-content">
                                                <div class="gm-sub-cate"> 
                                                  <small><a class="redbg" href="3">Healthy Food</a></small> </div>
                                                 <h4 class="sub-title">
                                                    <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                                 </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="row no-gutters">
                                        <div class="col-12 col-lg-5">
                                            <figure class="img-hover">
                                              <img src="assets/img/layout5-listing-img1.jpg" alt="listing"></figure>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="half-layout5-sub-content">
                                                <div class="gm-sub-cate"> 
                                                  <small><a class="redbg" href="3">Healthy Food</a></small> </div>
                                                <h4 class="sub-title">
                                                  <a href="#">A Pretium Enim Dolor Donec Eu Venenatis Curabitur</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--row -->
                    </div>
                    <!--5th layout  half-widget-layout5 -->
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
            <p>
                <label for="<?php echo esc_attr( $this->get_field_name('layout') ); ?>">
                    <strong><?php esc_html_e('Chooose Layout', 'gucherry-blog-pro'); ?></strong>
                </label>
                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>">
                    <?php
                    $layout_choices = array(
                        'layout_one' => esc_html__( 'Layout One', 'gucherry-blog-pro' ),
                        'layout_two' => esc_html__( 'Layout Two', 'gucherry-blog-pro' ),
                    );

                    foreach( $layout_choices as $key => $layout ) {
                        ?>
                        <option value="<?php echo esc_attr( $key ); ?>" <?php if( $instance['layout'] == $key ) { echo esc_attr( 'selected' ); } ?>>
                            <?php
                                echo esc_html( $layout );
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
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