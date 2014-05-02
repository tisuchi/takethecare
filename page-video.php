<!-- 
	
Template Name: Video Tutorial
 -->

<?php  get_header(); ?>

	
	  	        <div class="row-fluid">
	  	          <div class="span8 blog">
	  	          	<h2>Video Courese</h2>
				<?php $ad_num = 1; ?>
	  	          	<?php query_posts('category_name=video'); ?>
	  	          	<?php while (have_posts()) : the_post(); ?>

	  	          	<div class="blog-box">
		  	            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  	            <span class="blog-date"><i class="icon-calendar"></i> Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></span> <span class="blog-author"><i class="icon-user"></i> by: <?php the_author_posts_link() ?></span> <span class="blog-comments pull-right"><i class="icon-comment"></i>  <a href="<?php comments_link(); ?>"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></a></span>
		  	            <!--<img src="<?php bloginfo('template_url');?>/images/slide-2.jpg" class="thumbnail" alt="" />-->
		  	            <p><?php the_content('<div class="btn">Read more &raquo;</div>'); ?></p>

		  	            
		  	            <div class="blog-tags">
		  	            	<i class="icon-tag"></i>
		  	           
		  	            	<?php 
		  	            		
		  	            		//$before_tag = '<span class="label">';
		  	            		//$after_tag = '</span>';
		  	            		//$separate = ',';

		  	            		//the_tags( $before_tag, $separate, $after_tag );
		  	            		the_tags();
		  	            	?>
			  	         
		  	            </div>			  	        
	  	            </div>
				
				<?php
				// this is for ad
				if($ad_num % 2 == 0){
					// even ad will goes
					//echo "Even";
					echo '<a href="http://www.chitika.com/publishers/apply?refid=takethecare"><img src="http://images.chitika.net/ref_banners/728x90_money.png" /></a>';
			
				}else{
					// odd ad will goes
					//echo "Odd";
					echo '<a href="http://www.chitika.com/publishers/apply?refid=takethecare"><img src="http://images.chitika.net/ref_banners/728x90_hidden_ad.png" /></a>';
				}

		
				$ad_num ++;
				?>

	  	        	<?php endwhile; ?>
	  	            

	  	         </div> <!-- End Blog -->
	
	  	        

	  	        
	  	        <?php get_sidebar(); ?>
			</div> <!-- End Row -->
	  	  
	</div> <!-- End container-fluid --> 

	

<?php get_footer(); ?>