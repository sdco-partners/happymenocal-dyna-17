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
    $initialize = 'initialize';
    if(get_field('color')) :
      $color = get_field('color');
    else :
      $color = '#fff';
    endif; ?>
    
</head>
<body <?php body_class([$post, $initialize]); ?> style="background-color: <?php echo $color; ?>">

<!-- SECTION: HEADER -->
<header>
  <?php include(locate_template('components/head/head.php')); ?>
</header>

<!-- SECTION: AJAX Containers -->
<div class="popcorn"> 
  <div class="root" id="prime" style="background-color: <?php echo $color; ?>">
