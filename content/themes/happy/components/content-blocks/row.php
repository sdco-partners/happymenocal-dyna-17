<?php
  /*
  * Section =>  ROW
  */
  $image = get_sub_field('image') ;?>

<div class="row-block">
	<img class="image" 
	  alt="<?php echo $image['alt']; ?>" 
	  src="<?php echo $image['url']; ?>"
	  style="width: <?php echo $image['width']; ?>px;">

	<div class="copy">
		<?php echo get_sub_field('copy'); ?>
	</div>

</div>