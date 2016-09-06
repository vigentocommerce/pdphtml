<?php
/**
 * Template Name: Help Page
 *
 * @package WordPress
 * @subpackage MageBay
 * @since MageBay
 */
 
get_header('home');
?>
<!-- Main  -->
<div class="pdp-main">
            <?php
    		// Start the loop.
    		while ( have_posts() ) : the_post();
                     the_content();
    			
    		// End the loop.
    		endwhile;
    		?>
			
		</div>		

<!-- End Main  -->
<?php get_footer(); ?>