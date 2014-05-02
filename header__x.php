<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>...::: trikun :::... Software soultion</title>

	<meta name="description" content="ADD A DESCRIPTION!!!" />
	<meta name="keywords" content="ADD KEYWORDS!!!"  />
	<meta name="author" content="http://tisuchi.wordpress.com" />
	<meta name="dcterms.rightsHolder" content="Copyright BIIT 2012. All Rights Reserved." />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url' ); ?>" />



	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap-lightbox.js"></script>

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
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>    
				<a class="brand" href="<?php echo get_option('home'); ?>">trikun</a>
				<div class="nav-collapse">
					
					<div class="navigation">
					


						<?php wp_nav_menu(array('menu' => 'Top Navigation Menu')); ?>


						
					</div>




					<form class="navbar-search pull-right search_bar">
						<i class="icon-search"></i><input type="text" class="search-query" placeholder="Search">
					</form>
				</div> <!-- End nav-collapse -->
			</div> <!-- End container -->
		</div> <!-- End navbar-inner -->
	</div> <!-- End navbar -->
	
	<div class="container-fluid">
		<header>
			<h1 class="site-logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" class="logo" id="title_name">trikun</a></h1>
			<p><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; web apss | desktop apps | iphone apps</strong></p>
		</header> <!-- End Header -->