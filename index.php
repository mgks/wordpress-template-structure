<?php
// Handles: blog feed, fallback for everything

get_header(); 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Loads content from template-parts/content.php
        get_template_part( 'template-parts/content', get_post_type() );
    endwhile; 

    the_posts_navigation();

else : 
    get_template_part( 'template-parts/content', 'none' );
endif; 

get_sidebar();
get_footer();