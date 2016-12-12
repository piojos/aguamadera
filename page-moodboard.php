<?php

	/**
	 * Template Name: Moodboard
	 */

	get_header();


	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			$sideC = get_field('side');

			if($sideC) { ?>
				<div class="side">
					<?php echo $sideC; ?>
				</div>
				<?php
			} ?>


		<div class="moodboard<?php if(is_page('Boutique')) echo ' boutique'; ?>">
			<?php if(get_field('show_title')) echo '<h2>'. get_title() .'</h2>'; ?>

			<div class="wrap"><?php

			while(have_rows('images')) :
				the_row();
				$ops = get_sub_field('options');
				$img = get_sub_field('img');
				$txt = get_sub_field('text');


				if($ops && in_array('clear', $ops)) {
					echo '<div class="row clear"> </div>';
				} else {

				?>

				<div class="<?php
					echo poop($ops);
					if($txt) echo ' hastxt';
					if($ops && in_array('med', $ops)) echo ' med';
					if(!$img) echo ' noimg'; ?>"><?php

				// print_r($ops);
				if( $ops && in_array('txt', $ops)) :

					?>

					<div class="img"><img src="<?php echo $img['sizes']['large']; ?>"></div>
					<div class="txt"><i><?php echo $txt; ?></i></div><?php
				else : ?>

					<img src="<?php echo $img['sizes']['large']; ?>"><?php
				endif;

				?>

				</div><?php

				}
			endwhile;




			if(have_rows('layer_2')) : ?>

			<div class="vector"><?php
						while(have_rows('layer_2')) :
				the_row();
				$ops = get_sub_field('options');
				$img = get_sub_field('img');
				$txt = get_sub_field('text');


				if($ops && in_array('clear', $ops)) {
					echo '<div class="row clear"> </div>';
				} else {

				?>

				<div class="<?php
					echo poop($ops);
					if($txt) echo ' hastxt';
					if($ops && in_array('med', $ops)) echo ' med';
					?>"><?php

				// print_r($ops);
				if( $ops && in_array('txt', $ops)) : ?>

					<div class="img" <?php echo 'style="'.$txt.'"'; ?>><img src="<?php echo $img['sizes']['large']; ?>"></div>
					<div class="txt"></div><?php
				else : ?>

					<img src="<?php echo $img['sizes']['large']; ?>"><?php
				endif;

				?>

				</div><?php

				}
			endwhile; ?>

			</div><?php
			endif;





/*
			$images = get_field('vectors');
			if($images) : ?>

			<div class="vector"><?php
				foreach( $images as $image ): ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"<?php

				if($image['caption']) {
					echo ' '.$image['caption'];
				} ?>><?php
				endforeach; ?>

			</div><?php
			endif;
*/


			?>
			</div><?php

			/*

			<div class="row full">
				<div class="txt"><p>Un jardín Secreto y una mágica mesa del naturalista anónimo que narra las inspiraciones olfativas y visuales de la marca.</p></div>
				<img src="http://placehold.it/760x450?text=Imagen+y+texto+no+centrada">
			</div>

			<div class="vector">
				<div><img src="<?php bloginfo('template_url'); ?>/assets/v2.svg"></div>
				<div><img src="<?php bloginfo('template_url'); ?>/assets/v1.svg"></div>
			</div>

			*/ ?>
		</div><?php
		}
	} ?>

<?php get_footer(); ?>
