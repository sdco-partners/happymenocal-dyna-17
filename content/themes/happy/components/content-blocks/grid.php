<?php
  /*
  * Section =>  GRID
  */
  ?>

<div class="grid-block">

	<?php if ( have_rows( 'grid_repeater' ) ) :
		while( have_rows( 'grid_repeater' ) ) :
			the_row(); 
			$image = get_sub_field('image'); ?>

			<div class="image-grid"
				style="width: <?php echo $image['width']; ?>px;">
				<img class="image" 
				  alt="<?php echo $image['alt']; ?>" 
				  src="<?php echo $image['url']; ?>">

				<p class="caption">
					<?php echo $image[ 'caption' ]; ?>
				</p>

			</div>

	<?php endwhile;
	endif; ?>

</div>
