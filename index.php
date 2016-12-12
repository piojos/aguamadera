<?php

	/**
	 * Template Name: Original Index
	 */

	get_header();

	$mp4 = get_field('vid_mp4');
	$webm = get_field('vid_webm');
	$fback = get_field('vid_fallback');

	if($mp4 OR $webm) { ?>

	<video id='bgvid' poster="<?php echo $fback['url']; ?>" playsinline autoplay muted loop ><?php
		if($mp4) { ?>

		<source src='<?php echo $mp4['url']; ?>' type='video/mp4'><?php
		}
		if($webm) { ?>

		<source src='<?php echo $webm['url']; ?>' type='video/webm'><?php
		} ?>
	</video><?php
	}

	// <img src="<?php bloginfo('template_url'); ? >/assets/home_image.jpg" alt="">




	get_footer(); ?>
