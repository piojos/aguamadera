<?php

	get_header();

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			$imgDT = get_field('img_dt');
			$adjDT = get_field('adjust_dt');
			$imgMB = get_field('img_mobile');

			?>
		<div class="content"><?php

		if($imgDT OR $imgMB) : ?>

			<div class="img"><?php

			if($imgDT) { ?>
				<img src="<?php echo $imgDT['sizes']['large']; ?>" alt="<?php echo $imgDT['alt']; ?>"<?php if($adjDT) echo ' style="position: relative; top: '.$adjDT.'em;"'; ?> class="desktop"><?php
			}
			if($imgMB) { ?>
				<img src="<?php echo $imgMB['sizes']['large']; ?>" alt="<?php echo $imgDT['alt']; ?>" class="mobile"><?php
			} ?>

			</div><?php
		endif;


		?>
			<div class="txt">
				<?php the_content(); ?>
			</div>
		</div><?php
		}
	}

	get_footer(); ?>
