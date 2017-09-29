<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link Happy Menocal
 *
 * @package Happy
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

 $is_single = is_single(); ?>

	<!-- SECTION: PAGE MARKERS -->
	<section class="pagemarkers">
	  <div class="right-middle-mark">
	  	<?php if($is_single) : ?>
	      <?php echo $wp_query->post->post_title; ?>
	    <?php else : ?>
	      happy menocal studio
	    <?php endif; ?>
	  </div>
	  <div class="right-bottom-mark">
	    INSTAGRAM
	  </div>
	  <div class="left-bottom-mark">
	    &copy; HAPPY MENOCAL <?php echo date('Y'); ?>
	  </div>
	</section>

  <!-- SECTION: WATERMARKS -->
	<section class="watermarks">
		<?php if(get_field('watermark')) : 
		  $watermark = get_field('watermark'); ?>
		  <img src="<?php echo $watermark['url']; ?>" 
		    style="width: <?php echo $watermark['width']; ?>px;
		    height: <?php echo $watermark['height']; ?>px;">
	<?php endif; ?>

	</section>

	<!-- SCRIPTS -->
	<?php wp_footer(); ?>

</body><!-- end -->
</html>


