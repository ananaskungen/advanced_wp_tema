<div class="cta-text-section">
    <h1>Latest</h1>
    <a class="cta_archive_link" href="/latest">See All</a>
</div>


<?php 

/* Shows only the 3 latest posts for the "category Latest" */
query_posts( [ 
    'category_name' => 'latest',
   'posts_per_page' => 3,
]); 

/* We check if there are any posts, and if there are.. we display them */

if ( have_posts() ) {
?>
<div class="post_section"> 
    <?php 
    while ( have_posts() ) : the_post(); 
    ?>  
    <div class="card">
        <?php 
            if ( has_post_thumbnail() ) { 
            the_post_thumbnail('large', [ 'class' => 'latest_post_thumbnail' ]); 
            }
            ?>
            <p class="the_excerpt"> <?php the_excerpt(); ?> </p>
        
        <a class="read_more_link" href="<?php the_permalink(); ?>"><h2 class="read_more_card">Read More</h2></a>
    </div>
    <?php
    endwhile; 
} 
?>
</div>