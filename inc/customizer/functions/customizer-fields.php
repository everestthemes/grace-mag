<?php
/**
 * Customizer Options Declaration
 *
 * @package Grace_Mag
 */

$categories = grace_mag_categories_array();
$sidebar_position = grace_mag_sidebar_position_array( 'image' );

/*-----------------------------------------------------------------------------
							SITE PRELOADER SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_preloader_section', //id
    'Site Preloader', //title
    '', //desc
    '', //panel
    5 //priority
);

grace_mag_add_field( 
    'display_site_preloader', //id
    "Display Preloader", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'site_preloader_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							SITE HEADER PANEL OPTIONS 
-----------------------------------------------------------------------------*/

grace_mag_add_panel( 
    'site_header', //id
    'Site Header', //title
    '', //desc
    10 //priority
);

/*-----------------------------------------------------------------------------
							SITE LOGO SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_logo_section', //id
    'Site Logo', //title
    '', //desc
    'site_header', //panel
    10 //priority
);

/*-----------------------------------------------------------------------------
							SITE FAVICON SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_favicon_section', //id
    'Site Favicon', //title
    '', //desc
    'site_header', //panel
    10 //priority
);

/*-----------------------------------------------------------------------------
							TOP HEADER SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'top_header_section', //id
    'Top Header', //title
    '', //desc
    'site_header', //panel
    10 //priority
);

grace_mag_add_field( 
    'display_top_header', //id
    'Display Top Header', //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'top_header_display_today_date', //id
    "Display Today's Date", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    'grace_mag_active_top_header', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'top_header_display_news_ticker', //id
    "Display News Ticker", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    'grace_mag_active_top_header', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'top_header_news_ticker_category', //id
    'Post Category', //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'top_header_section', //section
    $categories, //choices
    'grace_mag_active_news_ticker', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'top_header_news_ticker_post_number', //id
    'No. of Posts Items', //label
    'Maximum 5 items and minimum 2 items can be set for news ticker.', //desc
    'number', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    'grace_mag_active_news_ticker', //active_callback
    '2', //min
    '5', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '4' //default
);

grace_mag_add_field( 
    'top_header_display_social_links', //id
    "Display Social Links", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    'grace_mag_active_top_header', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							MAIN HEADER SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'main_header_section', //id
    'Main Header', //title
    '', //desc
    'site_header', //panel
    10 //priority
);

grace_mag_add_field( 
    'main_header_display_canvas', //id
    "Display Canvas Sidebar", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'main_header_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'main_header_display_search', //id
    "Display Search Icon", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'main_header_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							BANNER SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'banner_section', //id
    'Site Banner', //title
    '', //desc
    '', //panel
    10 //priority
);

grace_mag_add_field( 
    'display_banner', //id
    "Display Banner", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'banner_category', //id
    'Post Category', //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'banner_section', //section
    $categories, //choices
    'grace_mag_active_banner', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'banner_post_number', //id
    'No. of Posts Items', //label
    'Maximum 5 items and minimum 3 items can be set for banner.', //desc
    'number', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    'grace_mag_active_banner', //active_callback
    '3', //min
    '5', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '4' //default
);

/*-----------------------------------------------------------------------------
							SITE PAGES PANEL OPTIONS 
-----------------------------------------------------------------------------*/

grace_mag_add_panel( 
    'site_pages', //id
    'Site Pages', //title
    '', //desc
    20 //priority
);

/*-----------------------------------------------------------------------------
							POST SINGLE SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'post_single_section', //id
    'Post Single', //title
    '', //desc
    'site_pages', //panel
    10 //priority
);

grace_mag_add_field( 
    'post_single_display_featured_image', //id
    "Display Featured Image", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_display_posted_date', //id
    "Display Posted Date", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_display_comment_number', //id
    "Display Comment No", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_display_tags', //id
    "Display Post Tags", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_display_author_section', //id
    "Display Section", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_display_related_posts_section', //id
    "Display Section", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_related_posts_section_title', //id
    "Section Title", //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    'grace_mag_active_related_posts', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'RELATED POSTS' //default
);

grace_mag_add_field( 
    'post_single_display_related_posted_date', //id
    "Display Posted Date", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    'grace_mag_active_related_posts', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_display_related_posts_comment_number', //id
    "Display Comment No", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    'grace_mag_active_related_posts', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'post_single_related_posts_post_number', //id
    "No of Post Items", //label
    'Maximum 3 items and minimum 1 items can be set on related posts.', //desc
    'number', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    'grace_mag_active_related_posts', //active_callback
    '1', //min
    '3', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '3' //default
);

/*-----------------------------------------------------------------------------
							PAGE SINGLE SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'page_single_section', //id
    'Page Single', //title
    '', //desc
    'site_pages', //panel
    10 //priority
);

grace_mag_add_field( 
    'page_single_display_featured_image', //id
    "Display Featured Image", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'page_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							BLOG PAGE SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'blog_page_section', //id
    'Blog Page', //title
    '', //desc
    'site_pages', //panel
    10 //priority
);

grace_mag_add_field( 
    'blog_page_display_featured_image', //id
    "Display Featured Image", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'blog_page_display_posted_time', //id
    "Display Posted Time", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'blog_page_display_comment_number', //id
    "Display Comment No", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'blog_page_sidebar_position', //id
    "", //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_section', //section
    $sidebar_position, //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'image', //control ( image, toggle, slider, multiple, color, upload )
    'right' //default
);

/*-----------------------------------------------------------------------------
							ARCHIVE PAGE SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'archive_page_section', //id
    'Archive Page', //title
    '', //desc
    'site_pages', //panel
    10 //priority
);

grace_mag_add_field( 
    'archive_page_display_featured_image', //id
    "Display Featured Image", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'archive_page_display_posted_time', //id
    "Display Posted Time", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'archive_page_display_comment_number', //id
    "Display Comment No", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'archive_page_sidebar_position', //id
    "", //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    $sidebar_position, //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'image', //control ( image, toggle, slider, multiple, color, upload )
    'right' //default
);

/*-----------------------------------------------------------------------------
							SEARCH PAGE SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'search_page_section', //id
    'Search Page', //title
    '', //desc
    'site_pages', //panel
    10 //priority
);

grace_mag_add_field( 
    'search_page_display_featured_image', //id
    "Display Featured Image", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'search_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'search_page_display_posted_time', //id
    "Display Posted Time", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'search_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'search_page_display_comment_number', //id
    "Display Comment No", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'search_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

grace_mag_add_field( 
    'search_page_sidebar_position', //id
    "", //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'search_page_section', //section
    $sidebar_position, //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'image', //control ( image, toggle, slider, multiple, color, upload )
    'right' //default
);

/*-----------------------------------------------------------------------------
							COMMON OPTION SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'common_page_section', //id
    'Common Options', //title
    '', //desc
    'site_pages', //panel
    10 //priority
);

grace_mag_add_field( 
    'common_page_background_image', //id
    "", //label
    'Uploaded image will be shown in Archive Page, Search Page, Post Single and Page Single.', //desc
    '', //type ( text, number, url, select, ios )
    'common_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'upload', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

/*-----------------------------------------------------------------------------
							BREADCRUMB SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'breadcrumb_section', //id
    'Breadcrumb', //title
    '', //desc
    '', //panel
    20 //priority
);

grace_mag_add_field( 
    'display_breadcrumb', //id
    "Display Breadcrumb", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'breadcrumb_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							SITE SIDEBAR SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_sidebar_section', //id
    'Site Sidebar', //title
    '', //desc
    '', //panel
    20 //priority
);

grace_mag_add_field( 
    'enable_sticky_sidebar', //id
    "Enable Sticky Sidebar", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'site_sidebar_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							SITE FOOTER SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_footer_section', //id
    'Site Footer', //title
    '', //desc
    '', //panel
    20 //priority
);

grace_mag_add_field( 
    'display_scroll_top', //id
    "Display Scroll Top", //label
    'This option lets you to display or hide scroll to top link floating at right corner.', //desc
    'ios', //type ( text, number, url, select, ios )
    'site_footer_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//Option : Footer Copyright Text
$wp_customize->add_setting( 'grace_mag_copyright_text', array(
    'sanitize_callback'        => 'grace_mag_sanitize_copyright_credit',
    'default'                  => '',
) );

$wp_customize->add_control( 'grace_mag_copyright_text', array(
    'label'                    => esc_html__( 'Copyright Text', 'grace-mag' ),
    'description'		       => esc_html__( 'You can use <a> & <span> tags with the copyright and credit text.', 'grace-mag' ),
    'section'                  => 'grace_mag_site_footer_section',
    'type'                     => 'text',
) );

/*-----------------------------------------------------------------------------
							SOCIAL LINKS SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'social_links_section', //id
    'Social Links', //title
    '', //desc
    '', //panel
    20 //priority
);

grace_mag_add_field( 
    'facebook_link', //id
    "Facebook Link", //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'social_links_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

grace_mag_add_field( 
    'instagram_link', //id
    "Instagram Link", //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'social_links_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

grace_mag_add_field( 
    'twitter_link', //id
    "Twitter Link", //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'social_links_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

grace_mag_add_field( 
    'youtube_link', //id
    "Youtube Link", //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'social_links_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

grace_mag_add_field( 
    'display_rss_feed', //id
    "Display RSS Feed", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'social_links_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

/*-----------------------------------------------------------------------------
							EXCERPT LINKS SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'excerpt_length_section', //id
    'Excerpt Length', //title
    '', //desc
    '', //panel
    20 //priority
);

grace_mag_add_field( 
    'excerpt_length', //id
    "Excerpt Length", //label
    'Maximum excerpt length 40 and minimum excerpt length 20 can be set.', //desc
    'number', //type ( text, number, url, select, ios )
    'excerpt_length_section', //section
    '', //choices
    '', //active_callback
    '20', //min
    '40', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '25' //default
);