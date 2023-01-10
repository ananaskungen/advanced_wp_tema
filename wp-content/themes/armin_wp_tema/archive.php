<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_post_thumbnail();
        the_title( '<h2>', '</h2>' );
    endwhile;

    if ( get_next_posts_link() ) {
        next_posts_link();
        }
        
        
    if ( get_previous_posts_link() ) {
    previous_posts_link();
    }

endif;
?>

<h1>Test Archive</h1>