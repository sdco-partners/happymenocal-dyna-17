<?php
  /*
  * Section =>  IMAGE_COPY
  */
$image = get_sub_field('image');
$copy = get_sub_field('copy');

?>

<div class="image-copy-block">
	<img src="<?php echo $image['url']; ?>">
	<div class="copy">
    <?php echo $copy; ?>
	</div>
</div>
