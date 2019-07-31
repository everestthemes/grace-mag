add_image_size( 'grace-mag-thumbnail-one', 600, 400, true ); //Fullwidth widget : Featured grid
//add_image_size( 'grace-mag-thumbnail-two', 255, 170, true ); //Fullwidth widget : Featured right block : List
//add_image_size( 'grace-mag-thumbnail-two', 540, 360, true ); //Fullwidth widget : Featured right block : feature
//add_image_size( 'grace-mag-thumbnail-four', 255, 170, true ); //Halfwidth widget : Grid Layout
//add_image_size( 'grace-mag-thumbnail-five', 326, 215, true ); //Halfwidth widget : List Layout
//add_image_size( 'grace-mag-thumbnail-six', 398, 331, true ); //Halfwidth widget : Featured Blog 1st Image
//add_image_size( 'grace-mag-thumbnail-seven', 135, 90, true ); //Halfwidth widget : Featured Blog others Image
//add_image_size( 'grace-mag-thumbnail-eight', 122, 81, true ); //Sidebar widget : Square List Layout
//add_image_size( 'grace-mag-thumbnail-nine', 105, 69, true ); //Sidebar widget : Round Square List Layout




<section id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'grace-mag' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'template-parts/content', 'search' );

        endwhile;

        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- #main -->
</section><!-- #primary -->