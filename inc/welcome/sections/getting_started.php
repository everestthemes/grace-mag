<div class="operation-theme-steps-list">
    <div class="left-box-wrapper-outer">
        <div class="et-box-wrapper operation-welcome-box-white">
            <div class="et-box-header"><?php esc_html_e( 'Welcome', 'grace-mag' ); ?></div>
            <div class="box-content">
                <p><?php esc_html_e( 'Welcome and thank you for choosing Grace Mag. Please install and activate all recommended plugins.', 'grace-mag' ); ?></p>
            </div>
        </div>
        <div class="et-box-wrapper et-demo-import operation-welcome-box-white">
            <div class="et-box-header"><?php esc_html_e( 'Import Demo', 'grace-mag' ); ?></div>
            <div class="box-content">
                <ul class="et-list clearfix">
                    <li>
                        <span class="et-welcome-dashicons dashicons dashicons-info"></span>
                        <?php esc_html_e( 'Fresh Starter', 'grace-mag' ); ?>
                        <p><?php esc_html_e( 'If you have fresh installed theme then, we recommend you to import the demo content which will looks like live demos. This will help you to customize your theme and edit options easily.', 'grace-mag' ); ?></p>
                        <p><?php esc_html_e( 'Want to import demo now ?', 'grace-mag' ); ?></p>
                        <?php

                        if( is_plugin_active( 'everest-toolkit/everest-toolkit.php' ) ) {

                            $page_link = $this->import_demo_page;
                            $page_text = esc_html__( 'Import Demo', 'grace-mag' );

                        } else {

                            $page_link = $this->plugin_install_page;
                            $page_text = esc_html__( 'Install and Activate Plugin first', 'grace-mag' );
                        }

                        ?>
                        <a href="<?php echo esc_url( admin_url( 'themes.php?page='. $page_link )); ?>" class="button button-primary"><?php echo  esc_html( $page_text ); ?></a>
                    </li>
                    <li>
                        <span class="et-welcome-dashicons dashicons dashicons-info"></span>
                        <?php esc_html_e( 'Old User', 'grace-mag' ); ?>
                        <p><?php esc_html_e( 'If you are old WordPress user and does exist your post or page contents, then we recommend you to follow customizer links setp by step to customize theme.', 'grace-mag' ); ?></p>
                        <p><?php esc_html_e( 'If you still want to import demo content and settings, then you can follow the link above.', 'grace-mag' ); ?></p>
                    </li>
                </ul>

            </div>
        </div>
        <div class="et-box-wrapper et-customizer-links operation-welcome-box-white">
            <div class="et-box-header"><?php esc_html_e( 'Links to Customizer Settings', 'grace-mag' ); ?></div>
            <div class="et-box-content">
                <p><?php esc_html_e( 'Follow the links below step by setp for proper customization of theme.', 'grace-mag' ); ?></p>
                <ul class="et-list clearfix">
                    <?php
                     $url = admin_url( 'customize.php' );

                    $links = array(
                        array(
                            'label' => __( 'Home Page Setup', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'static_front_page' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-admin-home',
                        ),
                        array(
                            'label' => __( 'Logo & Site Identity', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_site_logo_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-format-image',
                        ),
                        array(
                            'label' => __( 'Theme Colors', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_theme_color_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-admin-customizer',
                        ),
                        array(
                            'label' => __( 'Preloader Options', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_site_preloader_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-update',
                        ),
                        array(
                            'label' => __( 'Header Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'panel' => 'grace_mag_site_header' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-align-center',
                        ),
                        array(
                            'label' => __( 'Banner Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_banner_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-image-flip-horizontal',
                        ),
                        array(
                            'label' => __( 'Site Pages Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'panel' => 'grace_mag_site_pages' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-images-alt',
                        ),
                        array(
                            'label' => __( 'Breadcrumb Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_breadcrumb_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-migrate',
                        ),
                        array(
                            'label' => __( 'Sidebar Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_site_sidebar_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-align-left',
                        ),
                        array(
                            'label' => __( 'Footer Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_site_footer_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-feedback',
                        ),
                        array(
                            'label' => __( 'Social Links', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_social_links_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-share',
                        ),
                        array(
                            'label' => __( 'Content Length Settings', 'grace-mag' ),
                            'url' 	=> add_query_arg( array( 'autofocus' => array( 'section' => 'grace_mag_excerpt_length_section' ) ), $url ),
                            'icon' 	=> 'dashicons dashicons-media-text',
                        ),

                    );

                    $links = apply_filters( 'arrival/dashboard/links', $links );
                    ?>

                    <?php foreach( $links as $l ) { ?>
                        <li>
                            <span class="<?php echo esc_attr($l['icon'])?>"></span>
                            <a class="op-quick-setting-link" href="<?php echo esc_url( $l['url'] ); ?>" target="_blank"><?php echo esc_html( $l['label'] ); ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php $this->admin_sidebar_contents(); ?>
</div>
