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
                    'description' => esc_html__( 'Halfwidth News Widget', 'grace-mag' ), 
                )
            ); 
     
        }
     
        public function widget( $args, $instance ) {

            $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

            $posts_no = !empty( $instance[ 'post_no' ] ) ? $instance[ 'post_no' ] : 4;

            $layout = !empty( $instance[ 'layout' ] ) ? $instance[ 'layout' ] : 'half_one';
            
            $select_cat    = !empty( $instance['select_cat'] ) ? $instance['select_cat'] : 0;

            $post_args = array(
                'post_type' => 'post'
            );
            
            if( absint( $select_cat ) > 0) {
                $post_args['cat'] = absint( $select_cat );
            }

            if( absint( $posts_no ) > 0 ) {
                $post_args['posts_per_page'] = absint( $posts_no );
            }

            $post_query = new WP_Query( $post_args );

            if( $post_query->have_posts() ) {

                if( $layout == 'half_one' ) {
                    ?>
                    <div class="half-left half-first half-widget-layout1">
                        <?php
                        if( !empty( $title ) ) {
                        ?>
                        <div class="title-sec green">
                            <h2 class="md-title"><?php echo esc_html( $title ); ?></h2>
                        </div>
                        <?php
                        }
                        ?>
                    <div class="row">
                    <?php
                    while( $post_query->have_posts() ) :

                        $post_query->the_post();
                        
                        ?>
                        <div class="col-12 col-lg-4">
                            <div class="half-first-content">
                                <?php
                                if( has_post_thumbnail() ) {
                                ?>
                                <figure class="img-hover">
                                    <?php the_post_thumbnail( 'grace-mag-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                </figure>
                                <?php
                                }
                                ?>
                                <div class="half-first-bdy">
                                    <?php grace_mag_categories_meta( true ); ?>
                                    <h3 class="sm-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <?php the_excerpt(); ?>
                                    <div class="meta">
                                        <?php grace_mag_posted_on( true ); ?>
                                        <?php grace_mag_comments_no( true ); ?>
                                    </div>
                                    <!--meta-->
                                </div>
                            </div>
                        </div>
                      <!--col-lg-4-->
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
                <!--half-left half-first half-widget-layout1-->
                    <?php
                } elseif( $layout == 'half_two' ) {
                    ?>
                    <div class="half-left-3rd  half-widget-layout2">
                        <?php
                        if( !empty( $title ) ) {
                        ?>
                        <div class="title-sec ">
                            <h2 class="md-title"><?php echo esc_html( $title ); ?></h2>
                        </div>
                        <?php
                        }
                        
                        while( $post_query->have_posts() ) :

                            $post_query->the_post();

                            ?>
                            <div class="half-left-3rd-list">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="half-left-3rd-img">
                                            <?php
                                            if( has_post_thumbnail() ) {
                                            ?>
                                            <figure class="img-hover"> 
                                                <?php the_post_thumbnail( 'grace-mag-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                            </figure>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="half-left-3rd-content">
                                            <?php grace_mag_categories_meta( true ); ?>
                                            <h3 class="sm-title">
                                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <?php the_excerpt(); ?>
                                            <div class="meta"> 
                                                <?php grace_mag_posted_on( true ); ?>
                                                <?php grace_mag_comments_no( true ); ?>
                                            </div>
                                            <!--meta-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--half-left-3rd-list-->
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                    <!--third layout  half-widget-layout3-->
                    <?php
                } else {
                    ?>
                    <div class="half-left 5th-layout">
                        <?php
                        if( !empty( $title ) ) {
                        ?>
                        <div class="title-sec green">
                            <h2 class="md-title"><?php echo esc_html( $title ); ?></h2>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <?php
                                
                                $count = 1;

                                while( $post_query->have_posts() ) :

                                    $post_query->the_post();
                    
                                    if( $count == 1 ) {
                                    ?>
                                    <div class="layout-bdy5 has-background-img"  style="background-image: url(http://localhost/wp-test/wp-content/uploads/2019/05/uk-uiyu-ty.jpg);">
                                       
                                        <div class="caption">
                                            <h4 class="sm-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <div class="meta">
                                                <?php grace_mag_posted_on( true ); ?>
                                                <?php grace_mag_comments_no( true ); ?>
                                           </div>
                                        </div>
                                    </div>
                                    <!--layout-bdy5-->
                                    <?php
                                    }
                                    $count++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="layout-bdy5-listing">
                                <?php
                                
                                $count = 1;

                                while( $post_query->have_posts() ) :

                                    $post_query->the_post();
                    
                                    if( $count >=2 && $count <= 4 ) {
                                    ?>
                                    <li class="row no-gutters">
                                        <?php
                                        if( has_post_thumbnail() ) {
                                        ?>
                                        <div class="col-12 col-lg-5">
                                            <figure class="img-hover">
                                                <?php the_post_thumbnail( 'grace-mag-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                            </figure>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="col-12 col-lg-7">
                                            <div class="half-layout5-sub-content">
                                                <?php grace_mag_categories_meta( true ); ?>
                                                <h4 class="sub-title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    $count++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
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
                'layout'       => 'half_one',
                'select_cat'   => 0,
            );

            $instance = wp_parse_args( (array) $instance, $defaults );
            
            $halfwidth_layouts = grace_mag_halfwidth_layouts_array();

            ?>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>">
                    <strong><?php esc_html_e('Chooose Layout', 'grace-mag'); ?></strong>
                </label>
                
                <br>
                <br>
                <?php 
            
                foreach( $halfwidth_layouts as $key => $halfwidth_layout ) {
                    
                ?>
                <label for="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" class="rad">
                    <input 
                      type="radio" name="<?php echo esc_attr( $this->get_field_name('layout') ); ?>"
                      id="<?php echo esc_attr( $this->get_field_id('layout') ); ?>" class="input-hidden" <?php checked($instance['layout'],$key); ?> value="<?php echo esc_attr( $key ); ?>">
                    <img src="<?php echo esc_url( $halfwidth_layout ); ?>" />
                </label>
                
                <?php
                }
                ?>
                
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>">
                    <strong><?php esc_html_e('Title', 'grace-mag'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />   
            </p>
            
            <p>
                <label for="<?php echo esc_attr( $this->get_field_id( 'select_cat' ) ); ?>">
                    <strong><?php echo esc_html_e( 'Select Category' , 'grace-mag' ); ?></strong>
                </label>
                <?php
                    wp_dropdown_categories( array(
                        'id'               => esc_attr( $this->get_field_id( 'select_cat' ) ),
                        'class'            => 'widefat',
                        'name'             => esc_attr( $this->get_field_name( 'select_cat' ) ),
                        'orderby'          => 'name',
                        'selected'         => esc_attr( $instance [ 'select_cat' ] ),
                        'show_option_all'  => esc_html__( 'Select To Show Category Posts' , 'grace-mag' ),
                        )
                    );
                ?>
            </p>

            <p>
                <label for="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>">
                    <strong><?php esc_html_e('No of Posts', 'grace-mag'); ?></strong>
                </label>
                <input class="widefat" id="<?php echo esc_attr( $this->get_field_id('post_no') ); ?>" name="<?php echo esc_attr( $this->get_field_name('post_no') ); ?>" type="number" value="<?php echo esc_attr( $instance['post_no'] ); ?>" />   
            </p>

            <?php
        }
     
        public function update( $new_instance, $old_instance ) {
     
            $instance = $old_instance;

            $instance['title']        = sanitize_text_field( $new_instance['title'] );
            
            $instance['select_cat']   = absint( $new_instance['select_cat'] );

            $instance['post_no']      = absint( $new_instance['post_no'] );

            $instance['layout']       = sanitize_text_field( $new_instance['layout'] );

            return $instance;
        }
    }
endif;