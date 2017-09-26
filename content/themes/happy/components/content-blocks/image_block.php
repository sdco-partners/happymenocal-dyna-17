<?php
  /*
  * Section =>  IMAGE_BLOCK
  */

	$image = get_sub_field('image');
	$overlay = get_sub_field('overlay'); ?>

<div class="image-block">
	<img class="image" 
	  alt="<?php echo $image['alt']; ?>" 
	  src="<?php echo $image['url']; ?>">
    
  <?php if($overlay) : ?>
	<img class="overlay" 
	  src="<?php echo $overlay['url']; ?>">
  <?php endif; ?>

</div>