<?php
/**
 * Header
 *
 * Contains header assets.
 *
 * @link Happy Menocal
 *
 * @package Happy
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <script type="text/javascript">
	document.documentElement.setAttribute("data-browser", navigator.userAgent);
  </script>

  <script src="//localhost:35729/livereload.js"></script>


  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
  <title><?php wp_title( '-', true, 'right' ); ?></title>
	
  <?php wp_head(); 
    $post = 'postwp-' . $post->post_name;
    $color = get_field('color'); ?>
    
</head>
<body <?php body_class([$post]); ?>
  style="background-color: <?php echo $color; ?>">

<!-- SECTION: HEADER -->
<header>
<?php if(have_rows('navigation', 'option')) : 
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
  <div class="logo">
    <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-main.gif">
  </div>
  <div class="right-link">
    <?php if(have_rows('right_nav')) : 
      while(have_rows('right_nav')) :
        the_row(); ?>
        <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a>
      <?php endwhile;
    endif; ?>
  </div>
  <?php endwhile;
endif; ?>
</header>
