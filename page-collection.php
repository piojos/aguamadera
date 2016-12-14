<?php

	/**
	 * Template Name: Collection
	 */

	get_header();


	while ( have_posts() ) :
		the_post();

		if(have_rows('fragances')) { ?>

	<div class="products"><?php

			while(have_rows('fragances')) {
				the_row();
				$img = get_sub_field('img');
				$name = get_sub_field('name');
				$imgName = get_sub_field('tit_img'); ?>
		<div><?php


// Image
				if($img) { ?>

			<img src="<?php echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>" /><?php
				}


// Name
				if($imgName) { ?>

					<img src="<?php echo $imgName['url']; ?>" alt="<?php echo $imgName['alt']; ?>" class="title" /><?php
				} else { ?>

			<h2><?php echo $name?></h2><?php
				}


// List
				if(have_rows('list')) :  ?>

				<ul><?php
					while (have_rows('list')) {
						the_row(); ?>

						<li><?php the_sub_field('element'); ?></li>
						<?php
					} ?>

				</ul><?php
				endif; ?>
		</div><?php

			} ?>
	</div><?php

		$disclaim = get_field('disclaim');
		if($disclaim) { ?>
		<div class="disclaimer">
			–<br>
			<em>  <?php echo $disclaim; ?></em>
		</div><?php
		}


		}


	endwhile;
	?>

<?php get_footer(); ?>
