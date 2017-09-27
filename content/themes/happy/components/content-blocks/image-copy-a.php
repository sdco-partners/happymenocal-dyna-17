<?php
  /*
  * Section =>  IMAGE-COPY-A
  */

  $image_1 = get_sub_field('image');
  $copy = get_sub_field('copy');
  $icon = get_sub_field('icon');
  $note = get_sub_field('note');

?>

<div class="image-copy-a">
	<div class="image_1">
		<img src="<?php echo $image_1['url']; ?>"
		  style="width: <?php echo $image_1['width']; ?>px;
		  height: <?php echo $image_1['height']; ?>px">
	</div>
	<div class="copy">
		<?php echo $copy; ?>
	</div>
	<div class="icon">
		<img src="<?php echo $icon['url']; ?>"
		  style="width: <?php echo $icon['width']; ?>px;
		  height: <?php echo $icon['height']; ?>px">
	</div>
	<div class="note">
		<?php echo $note; ?>
	</div>
</div>