<?php
/**
* Template Name: Latest 
*/

get_header();
?>



<h1 class="archive_latest_title">Latest</h1>


<?php 

/* Shows only the 3 latest posts for the "category Latest" */
query_posts( [ 
    'category_name' => 'latest',
   'posts_per_page' => 7,
]); 

/* We check if there are any posts, and if there are.. we display them */

if ( have_posts() ) {
?>
<div class="archive_section"> 
    <?php 
    while ( have_posts() ) : the_post(); 
    ?>  
    <div class="archive_card">
    <a class="archive_read_more_link" href="<?php the_permalink(); ?>">
        <?php 
            if ( has_post_thumbnail() ) { 
            the_post_thumbnail('medium_large', [ 'class' => 'latest_archive_thumbnail' ]); 
            }
        ?>
        <h2 class="read_more_archive"><?php the_title(); ?></h2></a>
    </div>
    <?php
    endwhile; 

    if ( get_next_posts_link() ) {
        next_posts_link();
        }
        
        
    if ( get_previous_posts_link() ) {
    previous_posts_link();
    }

} 
?>
</div>

<?php 

get_footer();