<?php
 /*
 *
 * SECTIOn => WATERMARKS
 *
 */

  if(get_field('watermark')) : 
		$watermark = get_field('watermark'); ?>
		<img src="<?php echo $watermark['url']; ?>" 
	    style="width: <?php echo $watermark['width']; ?>px;
	    height: <?php echo $watermark['height']; ?>px;">
  <?php endif; ?>