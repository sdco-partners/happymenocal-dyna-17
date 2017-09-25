<?php
/** 
 *
 * Template Name: Showcase
 *
 */ 
  get_header(); ?>

<!-- SECTION: CONTENT BLOCKS -->
<section class="content-blocks">
<?php if(have_rows('showcase')) :
  while(have_rows('showcase')) :
  	the_row();

  	if(get_row_layout() === 'image_block') : 
  		$image = get_sub_field('image');
  		$overlay = get_sub_field('overlay');
  		?>
  	  <div class="image-block">
  	  	<img class="image" 
  	  	  alt="<?php echo $image['alt']; ?>" 
  	  	  src="<?php echo $image['url']; ?>">
  	  	<img class="overlay" 
  	  	  src="<?php echo $overlay['url']; ?>">
  	  </div>
    <?php elseif(get_row_layout() === 'bold') : ?>
    	<div class="bold-copy-block">
    		<?php echo get_sub_field('copy'); ?>
    	</div>
    <?php elseif(get_row_layout() === 'accent') : ?>
    	<div class="accent-copy-block">
    		<?php if (get_sub_field('accent_image')) : 
    		  $icon = get_sub_field('accent_image'); ?>
	        <div class="icon">
	        	<img src="<?php echo $icon['url']; ?>">
	        </div>
	      <?php endif; ?>
    		<div class="copy">
	    		<?php echo get_sub_field('copy'); ?>
	    	</div>
    	</div>
    <?php endif;

  endwhile;
endif; ?>
</section>

<?php get_footer(); ?>