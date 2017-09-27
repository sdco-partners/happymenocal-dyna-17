<?php
/** 
 *
 * Template Name: Projects
 * Template Type: post
 *
 */
  get_header();  ?>

<!-- SECTION: CONTENT BLOCKS -->

<section class="content-blocks">

<?php if(have_rows('project')) :
  while(have_rows('project')) :
  	the_row();

  	if(get_row_layout() === 'image_block') : 

      include(locate_template('components/content-blocks/image_block.php'));

    elseif(get_row_layout() === 'slider') :

      include(locate_template('components/content-blocks/slider.php'));

    elseif(get_row_layout() === 'image_copy_a') : 

      include(locate_template('components/content-blocks/image-copy-a.php'));

    elseif(get_row_layout() === 'image_copy_b') :
      
      include(locate_template('components/content-blocks/image-copy-b.php'));

    // elseif(get_row_layout() === 'accent') :

    //   include(locate_template('components/content-blocks/accent.php'));

    endif;

  endwhile;
endif; ?>


</section>

  <?php get_footer(); ?>