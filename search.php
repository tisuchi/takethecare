<?php  get_header(); ?>

	
	  	        <div class="row-fluid">
	  	          <div class="span8 blog">
	  	          	
	  	        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
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


				<?php endwhile; ?>
				<?php else: ?>
					
					<br/>
					<br/>
					<br/>
					<br/>
					<div class="alert alert-error">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <br/><br/>
						  <h2>Opps !</h2>
						  <h4>Sorry guy. <br/><br/>You enteried the wrong seach text. There is no data found ! </h4>
						  
					<br/>
					<br/>
					<br/>
					</div>
				<?php endif; ?>

	  	         </div> <!-- End Blog -->
	
	  	        

	  	        
	  	        <?php get_sidebar(); ?>
			</div> <!-- End Row -->
	  	  
	</div> <!-- End container-fluid --> 

	

<?php get_footer(); ?>