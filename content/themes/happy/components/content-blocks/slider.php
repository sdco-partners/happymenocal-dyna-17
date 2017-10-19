<?php
  /*
  * Section =>  SLIDER
  */

  $gallery = get_sub_field('gallery');
?>

<div class="slider-block">
	<?php if ($gallery) : 
	  foreach($gallery as &$image) : ?>
		<div class="slide" style="background-image: url(<?php echo $image['url']; ?>)">
		  <h3 class="caption"><?php echo $image['caption']; ?></h3>
		</div>
  <?php endforeach; endif; ?>
</div>
