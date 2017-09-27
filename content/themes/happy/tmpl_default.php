<?php
/** 
 *
 * Template Name: Default
 *
 */
  get_header();  ?>

<!-- SECTION: CONTENT BLOCKS -->
<section class="content-blocks">

<?php if(have_rows('default')) :
  while(have_rows('default')) :
  	the_row();

  	if(get_row_layout() === 'bold') : 

      include(locate_template('components/content-blocks/bold.php'));

    elseif(get_row_layout() === 'slider') :

      include(locate_template('components/content-blocks/slider.php'));

    elseif(get_row_layout() === 'paragraph') :

      include(locate_template('components/content-blocks/paragraph.php'));

    elseif(get_row_layout() === 'list') :

      include(locate_template('components/content-blocks/list.php'));

    elseif(get_row_layout() === 'accent') :

      include(locate_template('components/content-blocks/accent.php'));

    endif;

  endwhile;
endif; ?>


</section>

  <?php get_footer(); ?>