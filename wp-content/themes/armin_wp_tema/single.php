<?php
get_header();
?>
<div class="post_container"> 
<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post_thumbnail([1000, 800], [ 'class' => 'single_post_thumbnail' ]); 
        the_title( '<h2 class="post_title">', '</h2>' );
        the_content();
        return the_post();
    }
}
?>
</div>
<?php
get_footer();
?>