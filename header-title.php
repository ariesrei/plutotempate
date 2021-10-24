<?php
/**
 * Custom Header Titles
 */

function wp_custom_header_title() { 

    global $post,
        $wp_query;
 
    $page_for_posts_id = get_option( 'page_for_posts' );
    $frontpage_id = get_option('page_on_front');

    if (is_home()) echo get_the_title($page_for_posts_id);
    
    if (is_page() || is_single()) echo the_title();

    if (is_search()) echo "Search"; 

    if (is_archive()) echo "Archive";

    //override
    if ( is_404() ) echo "Error page not found";

}