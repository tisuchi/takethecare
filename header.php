<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        takethecare.com
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 @ takethecare.com
 * @since          available since Release 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> 
		<?php wp_title('|',true,'right'); ?>
 		<?php bloginfo('name'); ?>
	</title>

	<?php if (  (is_home()) || (is_front_page())  ) { ?>
<meta name="description" content="takethecare.com :.: free education for all" />
<?php } elseif (is_single()) { ?>
<meta name="description" content="<?php the_excerpt_rss(); ?> "/>
<?php } ?>
        
       <!-- uy4DFN3h6wLk2IO9CmsbSv7pgJs -->

        <meta name="google-site-verification" content="hizkKX9CQJDKuBqmXRoh6siPiVrpMvEOT1lGlzM8W4Y" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url' ); ?>" />

         <link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>


	<script type="text/javascript">
		// Bootstrap Tooltips
		$(document).ready(function () {
			$('#twitterb').tooltip({
				placement : 'bottom',
				title : 'Twitter'
			});
			$('#facebookb').tooltip({
				placement : 'bottom',
				title : 'Facebook'
			});
			$('#googleb').tooltip({
				placement : 'bottom',
				title : 'Google+'
			});
			$('#pinterestb').tooltip({
				placement : 'bottom',
				title : 'Pinterest'
			});
			$('#flickrb').tooltip({
				placement : 'bottom',
				title : 'Flickr'
			});
			$('#rssb').tooltip({
				placement : 'bottom',
				title : 'RSS'
			});
			$('#wordb').tooltip({
				placement : 'bottom',
				title : 'Wordpress'
			});
			$('#stumbleb').tooltip({
				placement : 'bottom',
				title : 'Stumbleupon'
			});
		});
	</script> 
</head>
<body>

<!-- this code for facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	
	<!-- <div class="navbar navbar-inverse navbar-fixed-top">
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
				
					<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact</a></li>
					
	
					
				</div>
			</div>
		</div>
	</div> -->


	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
		    <div class="container">
		    	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>    
				

				<div class="collapse nav-collapse">			
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="search " name="s" id="s" />
					</form>
				
					<!--<li><a href="" data-toggle="modal" data-target="#modal-contact-form">Contact</a></li>-->
					<ul class="nav">
					      <li class="active"><a href="http://takethecare.com/">Home</a></li>
					      
						
						<li><a href="http://takethecare.com/video/">video tutorials</a></li>
					      <li><a href="http://takethecare.com/ebook/">ebooks</a></li>
					      <li><a href="http://takethecare.com/article/">articles</a></li>
						
						
				    </ul>
				</div>
		    </div>
		</div>
	</div>

	
	<div class="container-fluid">
		<header>
			<div class="row">
				<div class="span2">
					<img class="logo" src="<?php bloginfo('template_url'); ?>/images/ttc_logo.png" alt="Logo of TakeTheCare.com" width="200" height="200">
				</div>
				<div class="span8">
					<h1 class="site-logo"><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
				</div>
			</div>
		</header> <!-- End Header -->