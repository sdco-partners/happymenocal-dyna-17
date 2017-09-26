<?php
  /*
  * Section =>  LIST
  */
?>

<div class="list-block">
	<h3><?php echo get_sub_field('header'); ?></h3>
	<?php if(have_rows('items')) :
	  while(have_rows('items')) :
	  	the_row(); ?>
	  	<div class="main">
	  		<?php echo get_sub_field('main'); ?>
	  	</div>
	  	<div class="main">
	  		<?php echo get_sub_field('sub'); ?>
	  	</div>
	  <?php  endwhile;
	endif; ?>
</div>