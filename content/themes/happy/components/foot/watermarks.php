<?php
 /*
 *
 * SECTIOn => WATERMARKS
 *
 */

  if(get_field('watermark')) : 
		$watermark = get_field('watermark'); ?>
		<img src="<?php echo $watermark['url']; ?>" 
	    style="width: <?php echo $watermark['width']; ?>px;">
  <?php endif; ?>