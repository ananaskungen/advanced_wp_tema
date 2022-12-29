<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_post_thumbnail();
        the_title( '<h2>', '</h2>' );
    endwhile;
else:
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>