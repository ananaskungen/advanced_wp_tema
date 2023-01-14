<?php
/**
* Template Name: Latest 
*/

get_header();
?>



<h1 class="archive_latest_title">Latest</h1>



<?php 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = [
    'category_name' => 'latest',
    'orderby'        => 'date',
    'order'          => 'asc',
    'paged' => $paged,
  ];
  $custom_query = new WP_Query($args);
  if ($custom_query->have_posts()) {
    while ($custom_query->have_posts()) {
      $custom_query->the_post();
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
    }
  }

  ?>

    <div>
        <?php
    echo paginate_links( [
        'total' => $custom_query->max_num_pages,
        'prev_text' => 'Previous',
        'next_text' => 'Next',
        ] );
        wp_reset_postdata();
        ?>

    </div>
</div>

<?php
get_footer();



/* Gammal kod. Funkade inte pga query_posts funktionen. Den påverkar huvud queryn för sidan och laddar istället in samma posts och gör att
min pagination inte funkar... Istället får vi använda oss av WP_Qeury klassen för att skapa en ny query för posterna 
och sedan paginera detta med en echo paginate_links". Vi använder också wp_reset_postdata(9 efter loopen för att den ska gå tillbaka till
sin orginala query.)

*/

/* 

query_posts( [ 
    'category_name' => 'latest',
    'orderby'        => 'date',
    'order'          => 'asc',

]); 

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
    

*/