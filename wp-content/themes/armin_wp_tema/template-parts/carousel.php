
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h3><?php the_title(); ?></h3>

<?php
 the_content();
 wp_link_pages(); 
 edit_post_link(); 

 endwhile; 


if ( get_next_posts_link() ) {
next_posts_link();
}


if ( get_previous_posts_link() ) {
previous_posts_link();
}

 else  
    _e('Sorry, no pages matched your critieria', 'textdomain');

?>
<p>No posts found. :(</p>

<?php endif; ?>