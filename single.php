<?php 

get_header(); 
 
    // Load posts loop.
    while( have_posts() ) 
    {
        the_post();

        // the_content();
        get_template_part( 'template-parts/content/content-single' );

    }

get_footer();