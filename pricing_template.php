<?php
    /*
	
	     Template Name: Pricing Template
	
	*/
	
?>

<?php get_header(); ?>

<div class="container-fluid">
				  
		  <!-- 3 Column Pricing -->
		  <div class="row-fluid pricing">

		  	<h4>Price for all apps</h4>


		  	
		  	<div class="pricing-panel pricing-panel3">
		  			
		  			<?php query_posts('category_name=pricing&showposts=20'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  			
		  			<div class="span4">
		  				<ul>
			  				<li>
			  					<h4><?php the_title(); ?></h4>
			  					<div class="price-amount"><strong>BDT. </strong><span><?php echo get_post_meta($post->ID, 'price_for_product', true); ?></span></div>
			  					
			  					<?php the_content(); ?>
			  					
			  					<p><a class="btn" href="#">Sign Up</a></p>
			  				</li>
		  				</ul>
		  			</div>

		  			<?php endwhile; ?>
	  	    		<?php endif; ?>
		  			
		  	</div>


		  </div> <!-- End 3 Column Pricing -->

		  
		 
		  
	</div> <!-- End container-fluid --> 






<?php get_footer(); ?>