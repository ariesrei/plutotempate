<?php 

get_header(); 

if( have_posts() ) 
{
    // Load posts loop.
    while( have_posts() ) 
    {
        the_post();

        // the_content();
        get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );

    }
}

get_footer();  