<?php 
/**
* Template Name: Contact
*/

get_header();
?>

<h1 class="contact">Contact</h1>

<div class="contact_container">

    <div class="left_container">

        <div class="contact_details">
            <h2>Email</h2>
            
            <div class="icon_text">
                <img width="16" src="https://wordpress.test/wp-content/themes/armin_wp_tema/assets/images/msg.png" alt="">
                <a href="#">@email.com</a>
            </div>
        </div>
        
        
        <div class="contact_details">
            <h2>Address</h2>
            
            <div class="icon_text">
                <img width="16" src="https://wordpress.test/wp-content/themes/armin_wp_tema/assets/images/location.png" alt="">
                <p>New York</p>
            </div>
        </div>
        
        
        <div class="contact_details">
            <h2>Phone</h2>
            
            <div class="icon_text">
                <img width="16" src="https://wordpress.test/wp-content/themes/armin_wp_tema/assets/images/call.png" alt="">
                <p>+1 467 551 000</p>
            </div>
        </div>
        
    </div>
    
    
    <div class="google_container">
        <!-- GOOGLE MAPS -->
        <?php
        echo do_shortcode("[put_wpgm id=2]");
        ?>
    </div>
</div>
<?php 
get_footer();
?>