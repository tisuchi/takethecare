<div class="span4">
    <div class="sidebar">

        <div class="sidebar-section recent-posts">
      
            <h3><i class="icon-pencil"></i> Recent Posts</h3>
            <ul>
            <?php query_posts('showposts=5'); ?>
                <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to');?> <?php the_title(); ?>">
                        <img src="<?php bloginfo('template_url');?>/images/code.png" class="img-circle pull-left" alt="" />
                        <h2><?php the_title(); ?> </a> :: by :: <?php the_author() /*the_author_posts_link()*/ ?></h2>
                    
                    <span><?php the_time('F j, Y'); ?><i class="icon-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></span>
                </li>
            <?php endwhile; ?>

		<li>
                    <a href="#">
                        <!-- <img src="<?php bloginfo('template_url');?>/images/ocean-hero.jpg" class="img-circle pull-left" alt="" />
                        <h2>Left Sidebar, Right Sidebar, Two Sidebar and Full Width Layouts Included.</h2>
                        <span>July 29th, 2012<i class="icon-comment"></i> 4 Comments</span> -->
                    </a>
                </li>
                                        
                
            </ul>
        </div>

        <div class="fifty-pixel-gap"></div>


 <div class="sidebar-section">
		
		<script type="text/javascript">
ch_fluidH = 1;
ch_nump = "7";
ch_client = "takethecare";
ch_width = 270;
ch_height = "auto";
ch_type = "mpu";
ch_sid = "Chitika Default";
ch_color_site_link = "0000CC";
ch_color_title = "0000CC";
ch_color_border = "CCCCCC";
ch_color_text = "000000";
ch_color_bg = "E4E4E4";
</script>
<script src="http://scripts.chitika.net/eminimalls/amm.js" type="text/javascript">
</script>

</div><!-- <div class="sidebar-section recent-posts">-->


        <div class="sidebar-section">
            <ul class="nav nav-tabs" id="myTab">
              <!-- <li><a href="#tags" data-toggle="tab">Tags</a></li> -->
              <li><a href="#archive" data-toggle="tab">Upcoming</a></li>
              <li class="active"><a href="#categories" data-toggle="tab">Topics</a></li>
            </ul>
             
            <div class="tab-content">
              <!-- <div class="tab-pane" id="tags">
                  <i class="icon-tag"></i>
                  <span class="label">Design</span>
                  <span class="label">Development</span>
                  <span class="label">Themes</span>
                  <span class="label">HTML5</span>
                  <span class="label">Responsive</span>
                  <span class="label">CSS3</span>
                  <span class="label">Retina</span>
                  <span class="label">Themeforest</span>
              </div> -->
              <div class="tab-pane active" id="categories">
             
                  <!--<p><a href="#">Design</a></p>-->
                <?php
                wp_list_categories('hide_empty=0&show_count=1&title_li' ); 
            ?>
              </div>
              <div class="tab-pane" id="archive">
 		<?php query_posts('category_name=upcoming&orderby=date&order=ASC'); ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="cat-item cat-item-4">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
                  
              </div>
            </div>
        </div>
	<div class="sidebar-section">
            <div class="twitter">
            <h3><i class="icon-retweet"></i> Find us in...</h3>
                <div id="twitter_update_list">
                </div>
                <!-- <script type="text/javascript" src="js/blogger.js"></script> -->
                
		<?php DISPLAY_ACURAX_ICONS(); ?>

            </div><!-- end twitter -->
        </div>

        <div class="sidebar-section">
            <div class="twitter">
            <h3><i class="icon-retweet"></i>Find us @ Facebook</h3>
                <div id="twitter_update_list">
                </div>
              
                <!-- some code for facebook will goes here -->
                        <div class="fb-like" data-href="https://www.facebook.com/taketcare" data-send="false" data-width="300" data-show-faces="true" data-font="verdana"></div>


            </div><!-- end twitter -->
        </div>
        <div class="sidebar-section">
            <h3>About Us</h3>
            <p>
                takethecare, a newly raised website which is providing free video courses, ebooks and articles in various sector to enrich your skills and professionalism. A active group are working behind the takethecare.com for running this successfully. If you have any query, just send a email to us <a href="#">takethecare [at] gmail.com</a>. 
            </p>
            <p><!-- <a class="btn" href="#">View details &raquo;</a> --></p>
        </div>
    </div>
</div> <!-- End Sidebar -->