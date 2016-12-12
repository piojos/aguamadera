<nav id="menu"><?php

	if( get_field('curr_lang') == 'es') {
		$langClass = 'es';
	} else {
		$langClass = 'en';
	}

	if( have_rows('menu_en', 'option') ):

		$langMenu = 'menu_'.$langClass; ?>

		<div class="<?php echo $langClass; ?>"><?php
		while ( have_rows($langMenu, 'option') ) : the_row();
			if(get_sub_field('choose') == 'in') {
				echo '<a href="'. get_sub_field('in_link') .'" class="inner">';
			} else {
				echo '<a href="'. get_sub_field('ext_link') .'" target="_blank">';
			}
			the_sub_field('title'); ?></a>
			<?php
		endwhile; ?>
		</div><?php
	endif; ?>
</nav>
