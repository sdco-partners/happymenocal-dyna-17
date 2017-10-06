<?php
  /*
  * Section =>  PARAGRAPH
  */
  
  $icon = get_sub_field('icon');
?>

<div class="paragraph-block">
	<div class="copy">
		<?php echo get_sub_field('copy'); ?>
	</div>
	<img src="<?php echo $icon['url']; ?>"
	  style="width: <?php echo $icon['width']; ?>px;" alt="happy menocal icon">
</div>