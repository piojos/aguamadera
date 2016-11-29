<nav id="menu" class="hide"><?php

	if( have_rows('menu_en', 'option') ): ?>
		<div class="en hide"><?php
		while ( have_rows('menu_en', 'option') ) : the_row();
			if(get_sub_field('choose') == 'in') {
				echo '<a href="'. get_sub_field('in_link') .'" class="inner">';
			} else {
				echo '<a href="'. get_sub_field('ext_link') .'" target="_blank">';
			}
			the_sub_field('title'); ?></a>
			<?php
		endwhile; ?>
		</div><?php
	endif;

	if( have_rows('menu_es', 'option') ): ?>
		<div class="es hide"><?php
		while ( have_rows('menu_es', 'option') ) : the_row();
			if(get_sub_field('choose') == 'in') {
				echo '<a href="'. get_sub_field('in_link') .'" class="inner">';
			} else {
				echo '<a href="'. get_sub_field('ext_link') .'" target="_blank">';
			}
			the_sub_field('title'); ?></a>
			<?php
		endwhile; /* ?>
			<a href="http://www.instagram.com/xinuperfumes" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/ig_logo.svg" alt="instagram"></a>
			<a class="lang" id="en">ENG</a> */ ?>
		</div><?php
	endif; ?>
</nav>
