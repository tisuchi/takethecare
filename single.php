<?php  get_header(); ?>

	
	  	    <div class="row-fluid">
	  	        <div class="span8 blog">
	  	          	
	  	          	<div id="single-text-body">
	  	          		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				            <h2><?php the_title(); ?></h2>

						            
				            <p><?php the_content(); ?> </p>


				            <?php wpb_set_post_views(get_the_ID()); ?>

				        	
				        	<hr/>

				        	<div class="alert alert-info">
				        		<i class="icon-info-sign"></i>
				        		This page has viewed <strong><?php echo wpb_get_post_views(get_the_ID()); ?> </strong>times before you.
							</div>

						<?php endwhile; endif; ?>
				
				<?php // this code for ad from chitika.com ?>
				<script type="text/javascript">
ch_fluidH = 1;
ch_nump = "8";
ch_client = "takethecare";
ch_width = 600;
ch_height = "auto";
ch_type = "mpu";
ch_sid = "Chitika Default";
ch_color_site_link = "0000CC";
ch_color_title = "0000CC";
ch_color_border = "CCCCCC";
ch_color_text = "000000";
ch_color_bg = "F2F2F2";
</script>
<script src="http://scripts.chitika.net/eminimalls/amm.js" type="text/javascript">
</script>
				
				
	  	          	</div>
				

	  	        </div> <!-- End Blog -->
			
	  	        

	  	        <?php get_sidebar(); ?>
	
			</div> <!-- End Row -->
	  	  
	</div> <!-- End container-fluid --> 

	

<?php get_footer(); ?>