<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title ( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
		<!--Call Daybook Theme CSS-->
		<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css"/>
		<!--Detect device screen size to utlize responsive CSS-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Call Google Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Dancing+Script' rel='stylesheet' type='text/css'>
		<!--Threaded Comments-->
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head><!--End head-->
	<body>
	<ul class="navigation">
		<li class="nav-item">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
		</li>
	</ul>
	<input type="checkbox" id="nav-trigger" class="nav-trigger"/>
	<label for="nav-trigger"></label>
	<div class="site-wrap">
	<header>
		<h1 class="header-text"><a href="<?php echo get_option('home'); ?>" class="header-resize"><?php bloginfo('name'); ?></a></h1>
	</header><!--End Header-->
	<div id="wrapper">