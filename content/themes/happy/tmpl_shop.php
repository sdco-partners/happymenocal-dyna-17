<?php
/** 
 *
 * Template Name: Shop
 *
 */ 
  get_header(); ?>


<!-- SECTION: CONTENT BLOCKS -->
<section class="content-blocks">

  <?php if(have_rows('default')) :
  while(have_rows('default')) :
  	the_row();

  	if(get_row_layout() === 'bold') : 

      include(locate_template('components/content-blocks/bold.php'));

    elseif(get_row_layout() === 'paragraph') :

      include(locate_template('components/content-blocks/paragraph.php'));


    elseif(get_row_layout() === 'grid') :

       include(locate_template('components/content-blocks/grid.php'));

    elseif(get_row_layout() === 'row') :

       include(locate_template('components/content-blocks/row.php'));

    endif;

  endwhile;
endif; ?>


</section>

  <?php get_footer(); ?>