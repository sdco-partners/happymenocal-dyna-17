<?php
  /*
  * Section =>  ACCENT
  */

$is_reverse = get_sub_field('reverse');
$icon = get_sub_field('accent_image');
$copy = get_sub_field('copy'); ?>

<div class="accent-copy-block">
  <?php if(!$is_reverse && $icon) : ?>
  <div class="icon">
  	<img src="<?php echo $icon['url']; ?>"
      style="width: <?php echo $icon['width']; ?>px; 
      height: <?php echo $icon['height']; ?>px;">
  </div>
  <div class="copy">
  <?php else : ?> 
  <div class="copy-reverse">
  <?php endif; ?>  
    <?php echo get_sub_field('copy'); ?>
  </div>
  <?php if($is_reverse && $icon) : ?>
  <div class="icon-reverse">
    <img src="<?php echo $icon['url']; ?>">
  </div>
<?php endif; ?>
</div>