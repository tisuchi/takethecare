<?php
    /*
	
	     Template Name: Product Gallery Template
	
	*/
	
?>

<?php get_header(); ?>

<div class="container-fluid">
		
	
		  
		   
		  <h1>Our Ready Products <small>Full of Quality Products</small></h1>
		  
	  	  <section>
			  <div class="row-fluid item-row store-thumbs">
			    
			   	<?php query_posts('category_name=product&showposts=20'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    <div class="span4">
			    	<div class="item-shot">
			    		<div class="image-holder">			    		
			    			<?php the_content(); ?>
			    		</div>
			    		<h3><?php the_title(); ?></h3>
			    		<div class="item-links">
			    			<a href="<?php echo get_post_meta($post->ID, 'product_preview_url', true); ?>" class="preview-link"><i class="icon-eye-open"></i>Preview</a>
			    			<a href="#" class="price-link">BDT. <?php echo get_post_meta($post->ID, 'product_price', true); ?></a>
			    		</div>
			    	</div>
			    </div>
			  
			     <?php endwhile; ?>
	  	    	<?php endif; ?>

			  </div>
			 
		  </section>
		  
		  <div class="pagination">
	          <ul>
	            <li class="disabled"><a href="#">&laquo;</a></li>
	            <li class="active"><a href="#">1</a></li>
	            <li><a href="#">2</a></li>
	            <li><a href="#">3</a></li>
	            <li><a href="#">4</a></li>
	            <li><a href="#">5</a></li>
	            <li><a href="#">&raquo;</a></li>
	          </ul>
		  </div>
		  
	</div> <!-- End container-fluid --> 






<?php get_footer(); ?>