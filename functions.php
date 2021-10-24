<?php
include_once "header-title.php";


add_action('after_setup_theme', function() {
    add_theme_support('title-tag');

});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/dist/main.prod.js', [], '1.0.0', true );
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/dist/main.min.css', [], '1.0.0', 'all' );
});

add_action('get_header', function() {
    remove_action('wp_head', '_admin_bar_bump_cb');
});

add_action('init', function() {

    $locations = [
        'primary' => "Header Menu",
        'footer' => "Footer Menu"
    ];

    register_nav_menus($locations);
});


//add default "nav-item" class inside menu list
add_filter('nav_menu_css_class', function($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
},1,3);

//add default "nav-link" class inside menu anchors
add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}, 10, 3);


// Prevent WP from adding <p> tags on all post types
add_filter( 'the_content', function( $content) {

    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
    return $content;
}, 0 );

 
