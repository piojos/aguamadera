<?php get_header(); ?>

	<?php get_template_part('menu');


	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
		<div class="content">
			<?php the_content(); ?>
		</div><?php
		}
	} ?>

<?php get_footer(); ?>
