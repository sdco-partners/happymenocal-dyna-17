<?php
/** 
 *
 * Template Name: Projects
 * Template Type: post
 *
 */
  get_header();  

  $query = new WP_Query(
    array (
      'post_type' => 'post',
      'posts_per_page' => -1
    )
  );
  
  $posts_array = $query->posts;
  $total = count($posts_array);
  $current = $wp_query->post->ID;
  $current_key = 3;

  for($i=0; $i<$total; $i++) {
    $search = $posts_array[$i];

    if($search->ID === $current ) {

      if($i === 0) {
        $current_key = $total;
      } else {
        $current_key = $i;
      }
    }
  }
  // echo '<pre>';
  // print_r($current_key);
  // echo '</pre>';


  ?>

<!-- SECTION: PROJECT LINKS --> 
<section class="project-links">
  <?php for($y=$total-1; $y>=0; $y--) :
    $data = $posts_array[$y]; ?>
    <h3 class="link" 
      id="id-<?php echo $data->ID; ?>">
      <a href="<?php echo $data->guid; ?>">
      <?php echo $data->post_title; ?>
      </a>
    </h3>
   <?php endfor; ?>
</section>

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

<!-- SECTION: NEXT PROJECT --> 
<div class="next-project">
  <div class="link">
    <span class="label">Next Project </span>
    <span class="title">
      <a href="<?php echo $posts_array[$current_key - 1]->guid; ?>">
        <?php echo $posts_array[$current_key - 1]->post_title; ?>
      </a>
      </span>
  </div>

</div>

  <?php get_footer(); ?>