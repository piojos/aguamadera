<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>XINÚ - botanicaromática de las américas.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header>
			<div class="menu_btn"></div>
			<?php get_template_part('menu'); ?>

			<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/logo_black.svg" alt="XINÚ - botanicaromática de las Américas" /></a>

			<div class="lang">
				<a href="http://www.instagram.com/xinuperfumes" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/ig_logo.svg" alt="instagram"></a>
				<a class="lang" id="es">ESP</a>
			</div>
		</header>
