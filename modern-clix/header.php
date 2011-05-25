<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<!--	<title><?php if ( is_single() || is_page() ) { ?> <?php } ?> <?php wp_title(); ?><?php bloginfo('name'); ?></title> -->
	<title><?php wp_title('&mdash;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body>
	<div id="wrapper">
		<div id="header" class="col last span-12">
			<div id="header-title" class="col last span-12">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2>geek blogger bassist</h2>
			</div>
			<div id="main-nav" class="col span-12">
				<ul id="menu">
				<!--	<?php wp_list_pages('&title_li=&depth=1'); ?> -->
				<li><a href="http://dombarnes.com/"><br>home</a></li>
				<li><a href="/colophon/"><br>about</a></li>			
				<li><a href="/contact/"><br>contact</a></li>
				<li><a href="/software/"><br>software</a></li>
				<li><a href="/photography/"><br>portfolio</a></li>
				<li><a href="http://feeds.feedburner.com/domster83"><br>rss</a></li>
				</ul>			
				</div>

		</div>

		<hr />