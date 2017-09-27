<?php
/** 
 *
 * Template Name: Showcase
 *
 */ 
  get_header(); 

  $color = get_field('color'); ?>

<!-- SECTION: CONTENT BLOCKS -->
<section class="content-blocks"
  style="background-color: <?php echo $color; ?>">
  
<?php if(have_rows('showcase')) :
  while(have_rows('showcase')) :
  	the_row();

  	if(get_row_layout() === 'image_block') : 

      include(locate_template('components/content-blocks/image_block.php'));

    elseif(get_row_layout() === 'bold') :

      include(locate_template('components/content-blocks/bold.php'));

    elseif(get_row_layout() === 'accent') :

      include(locate_template('components/content-blocks/accent.php'));

    elseif(get_row_layout() === 'image_copy') :

      include(locate_template('components/content-blocks/image_copy.php'));
      
    endif;

  endwhile;
endif; ?>
</section>

<?php get_footer(); ?>