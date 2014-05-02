<?php get_header(); ?>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="row-fluid">
			<div class="span12 content-holder">

			<h2><?php the_title(); ?></h2>

			
				<?php the_content(); ?>

			</div> <!-- End Content -->
		</div> <!-- End Row -->
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>


<?php get_footer(); ?>