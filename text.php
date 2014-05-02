<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>    
				<a class="brand" href="index.html"> </a>
				<div class="nav-collapse">
					<form name="" class="navbar-search pull-right">
						<i class="icon-search"></i><input type="text" class="search-query" placeholder="Search">
					</form>

					<?php

							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Top Nav',
								'container'       => 'ul',
								'container_class' => 'nav pull-right',
								'container_id'    => '',
								'menu_class'      => 'nav pull-right',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );

					?>
					<!-- <form class="navbar-search pull-right">
						<i class="icon-search"></i><input type="text" class="search-query" placeholder="Search">
					</form> -->
				</div> <!-- End nav-collapse -->
			</div> <!-- End container -->
		</div> <!-- End navbar-inner -->
	</div> <!-- End navbar -->








	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
		    <div class="container">
		    	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>    
				

				<div class="collapse nav-collapse">			
					<form name="" class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="search " />
					</form>
				
					<!--<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact</a></li>-->
					<ul class="nav">
					      <li class="active"><a href="#">Home</a></li>
					      <li><a href="#">Link</a></li>
					      <li><a href="#">Link</a></li>
				    </ul>

				    <?php

							$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Top Nav',
								'container'       => 'ul',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'nav pull-right',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );

					?>	
				</div>
		    </div>
		</div>
	</div>