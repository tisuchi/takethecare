<?php get_header(); ?>


		<div class="row-fluid">
			<div id="myCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
					
						<div class="active item">
							<img src="<?php bloginfo('template_url');?>/images/ocean-hero.jpg" alt="" />
							<div class="slider-hero-text hidden-phone">
								<h2>A Responsive Retina Ready Theme</h2>
								<p>36 Page Templates Included!</p>
							</div>
							<div class="carousel-caption">
								<h4>Ocean is filled with great features &amp; 36 responsive templates!</h4>
								<p>Remember to check out all of the different homepage templates.</p>
							</div>
						</div>

						<?php query_posts('category_name=slider&showposts=6'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="item">
							<?php echo the_content(); ?>
							<div class="slider-hero-text hidden-phone">
								<h2><?php echo the_title();?></h2>
							</div>
												
							<div class="carousel-caption">
								<h4><?php echo get_post_meta($post->ID, 'title', true); ?></h4>
								<p><?php echo get_post_meta($post->ID, 'details', true); ?></p>
							</div>
						</div>
						<?php endwhile;?>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> <!-- End Carousel -->
		</div> <!-- End Row -->
					
		<div class="row-fluid extra-margin">
			<div class="span12">

				<?php query_posts('category_name=welcome'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
					<p><?php echo the_content('<p><a class="btn" href="#"> read more &raquo;</a></p>'); ?></p>
				<?php endwhile; ?>
				
			</div>
			
		</div> <!-- End Row -->

		<div class="row-fluid">
			<ul class="thumbnails">
				<li class="span3">
					<a class="lightbox-link" data-toggle="lightbox" href="#box1">	
						<div class="thumbnail">  	         
							<img src="<?php bloginfo('template_url');?>/images/port10.jpg" alt="" />
						</div>
					</a>
				</li>
				<li class="span3">
					<a class="lightbox-link" data-toggle="lightbox" href="#box2">	
						<div class="thumbnail">  	         
							<img src="<?php bloginfo('template_url');?>/images/port1.jpg" alt="" />
						</div>
					</a>
				</li>
				<li class="span3">
					<a class="lightbox-link" data-toggle="lightbox" href="#box3">	
						<div class="thumbnail">  	         
							<img src="<?php bloginfo('template_url');?>/images/port5.jpg" alt="" />
						</div>
					</a>
				</li>
				<li class="span3">
					<a class="lightbox-link" data-toggle="lightbox" href="#box4">	
						<div class="thumbnail">  	         
							<img src="<?php bloginfo('template_url');?>/images/port7.jpg" alt="" />
						</div>
					</a>
				</li>
			</ul><!-- End Thumbnails -->
		</div> <!-- End Row -->
		
		<!-- Start Lightboxes -->
		<div class="lightbox fade" id="box1" style="display: none;">
			<div class='lightbox-content'>
				<img src="<?php bloginfo('template_url');?>/images/port10.jpg" alt="">
			</div>
		</div>
		<div class="lightbox fade" id="box2" style="display: none;">
			<div class='lightbox-content'>
				<img src="<?php bloginfo('template_url');?>/images/port1.jpg" alt="">
			</div>
		</div>
		<div class="lightbox fade" id="box3" style="display: none;">
			<div class='lightbox-content'>
				<img src="<?php bloginfo('template_url');?>/images/port5.jpg" alt="">
			</div>
		</div>
		<div class="lightbox fade" id="box4" style="display: none;">
			<div class='lightbox-content'>
				<img src="<?php bloginfo('template_url');?>/images/port7.jpg" alt="">
			</div>
		</div>
		<!-- End Lightboxes -->

		<div class="row-fluid">
			<div class="span12 standout">
				<p>we are developing web apss, desktop apps &amp; iphone apps</p>
			</div>
		</div> <!-- End Row -->

		<h2>Clients Testimonial</h2>
		<div class="row-fluid testimonials">
			<div id="TestimonialSlide" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner">
				

					<!--<div class="active item">-->
					<div class="active item">

					<?php query_posts('category_name=testimonials'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="span6">
							<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
							<p><?php echo the_content(); ?></p>
						</div>
					<?php endwhile; ?>

					</div>
				
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#TestimonialSlide" data-slide="prev"><i class="icon-chevron-left"></i></a>
				<a class="carousel-control right" href="#TestimonialSlide" data-slide="next"><i class="icon-chevron-right"></i></a>
			</div>
		</div> <!-- End Row -->
		   
		<div class="row-fluid dark-row">
			<div class="row-fluid icon-boxes">
				<?php query_posts('category_name=program'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="span4">
					<h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
					<p><?php the_content('<br/><br/><a class="btn" href="#">view details &raquo;</a>'); ?>	</p>
				</div>
				<?php endwhile; ?>
			</div> <!-- End Row -->
		</div> <!-- End Row -->
		   
		<h2 class="outside-header">Our Latest Projects</h2>
		<?php query_posts('category_name=projects'); ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="row-fluid border-row">
			<div class="span4">
				<div class="padding-left">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="span8">
				

				<div class="padding-right">
					<h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
					
					<p><?php echo get_post_meta($post->ID, 'latest_project_details', true); ?> </p>
				</div>


			</div>
		</div> <!-- End Row -->
		<?php endwhile; ?>



		

		
		
						  
	</div> <!-- End container-fluid --> 





<?php get_footer(); ?>