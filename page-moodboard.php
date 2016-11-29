<?php get_header(); ?>

	<?php get_template_part('menu');


	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
		<div class="content" id="moodboard">
			<h2><?php if(get_field('show_title')) the_title(); ?></h2><?php

		$images = get_field('gallery');
		foreach( $images as $image ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php
		endforeach;
		?>
		</div><?php
		}
	} ?>

<?php get_footer(); ?>
