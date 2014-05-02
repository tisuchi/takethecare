<?php
    /*
	
	     Template Name: Team Template
	
	*/
	
?>

<?php get_header(); ?>

<div class="container-fluid">
		<h1 class="page-header">Our Family: </h1> 
		  	  	      
		  	  	<?php query_posts('category_name=team&showposts=20'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  	        <div class="row-fluid border-row team">
		  	          <div class="span3">
		  	        	<div class="member_photo">
	  	            		<?php the_content(); ?>
	  	            	</div>
	  	            	<br>
	  	            	<span class="social"><a href="<?php echo get_post_meta($post->ID, 'member_twitter_url', true); ?>">u</a> <a href="<?php echo get_post_meta($post->ID, 'member_facebook_url', true); ?>">f</a> <a href="<?php echo get_post_meta($post->ID, 'member_google_url', true); ?>">g</a></span> 
		  	          </div>
		  	          <div class="span9">
		  	          	<div class="padding-right">
			  	            <h2><?php the_title(); ?></h2>
			  	            <p><?php echo get_post_meta($post->ID, 'member_details', true); ?></p>  	            
			  	        </div>
		  	          </div>
		  	        </div> <!-- End Row -->

	  	        <?php endwhile; ?>
	  	    	<?php endif; ?>
	  	        
	  	        
	  	        
	</div> <!-- End container-fluid --> 






<?php get_footer(); ?>