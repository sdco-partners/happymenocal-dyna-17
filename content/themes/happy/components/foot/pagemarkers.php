<?php
 /*
 *
 * SECTION => PAGEMARKERS
 *
 */ ?>

<div class="right-middle-mark">
	<?php if($is_single) : ?>
    <?php  echo $wp_query->post->post_title; ?>
  <?php else : ?>
    happy menocal studio
  <?php endif; ?>
</div>
<div class="right-bottom-mark">
	<a href="">
    INSTAGRAM
  </a>
</div>
<div class="left-bottom-mark">
  &copy; HAPPY MENOCAL <?php echo date('Y'); ?>
</div>