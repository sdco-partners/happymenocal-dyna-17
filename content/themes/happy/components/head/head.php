<?php 
  /*
  * Section =>  HEAD
  */

if(have_rows('navigation', 'option')) : 
  while(have_rows('navigation', 'options')) : 
    the_row(); ?>
    <div class="left-nav">
      <h2 id="toggle">Menu</h2>
    </div>
    <div class="drop-down">
    <?php if(have_rows('left_nav')) : 
      while(have_rows('left_nav')) : 
        the_row();
        $title = get_sub_field('title');
        $link = get_sub_field('link');
        $class = strtolower(str_replace(' ', '-', $title));
         ?>
        <a id="<?php echo $class; ?>" href="<?php echo $link; ?>">
          <span><?php echo $title; ?></span>
        </a>
      <?php endwhile;
      endif; ?>
  </div>
  <div id="transparency"></div>
  <div class="logo">
    <a href="<?php echo get_template_directory_uri(); ?>">
      <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-main.png" alt="Happy Menocal Logo">
    </a>
  </div>
  <div class="right-link">
    <?php if(have_rows('right_nav')) : 
      while(have_rows('right_nav')) :
        the_row(); ?>
        <a id="ajx-<?php echo get_sub_field('title'); ?>" href="<?php echo get_sub_field('link'); ?>">
          <?php echo get_sub_field('title'); ?>
        </a>
      <?php endwhile;
    endif; ?>
  </div>
  <?php endwhile;
endif; ?>