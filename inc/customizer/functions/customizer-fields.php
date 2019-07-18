<?php
/**
 * Customizer Options Declaration
 *
 * @package Grace_Mag
 */

$categories = grace_mag_categories_array();
$sidebar_position = grace_mag_sidebar_position_array( 'image' );

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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'multiple', //control ( image, toggle, slider, multiple, color )
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
    '', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'multiple', //control ( image, toggle, slider, multiple, color )
    true //default
);

grace_mag_add_field( 
    'banner_post_number', //id
    'No. of Posts Items', //label
    'Maximum 5 items and minimum 2 items can be set for banner.', //desc
    'number', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    'grace_mag_active_banner', //active_callback
    '2', //min
    '5', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);

grace_mag_add_field( 
    'post_single_display_category', //id
    "Display Category", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    '', //control ( image, toggle, slider, multiple, color )
    'RELATED POSTS' //default
);

grace_mag_add_field( 
    'post_single_display_related_posts_category', //id
    "Display Category", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'post_single_section', //section
    '', //choices
    'grace_mag_active_related_posts', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    '', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);

grace_mag_add_field( 
    'blog_page_display_post_category', //id
    "Display Post Category", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'image', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);

grace_mag_add_field( 
    'archive_page_display_post_category', //id
    "Display Post Category", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'image', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);

grace_mag_add_field( 
    'search_page_display_post_category', //id
    "Display Post Category", //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'search_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'toggle', //control ( image, toggle, slider, multiple, color )
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
    'image', //control ( image, toggle, slider, multiple, color )
    'right' //default
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
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);

/*-----------------------------------------------------------------------------
							SITE SIDEBAR SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_sidebar', //id
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
    'site_sidebar', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);

/*-----------------------------------------------------------------------------
							SITE FOOTER SECTION OPTIONS
-----------------------------------------------------------------------------*/

grace_mag_add_section( 
    'site_footer', //id
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
    'site_footer', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color )
    true //default
);