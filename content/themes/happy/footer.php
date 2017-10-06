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

 $is_single = is_single(); 
 ?>

		<!-- SECTION: PAGE MARKERS -->
		<section class="pagemarkers">
	    <?php  include(locate_template('components/foot/pagemarkers.php')); ?>
		</section>

	  <!-- SECTION: WATERMARKS -->
		<section class="watermarks">
	    <?php include(locate_template('components/foot/watermarks.php')); ?>

		</section>

	</div>
</div>

	<!-- SCRIPTS -->
	<?php wp_footer(); ?>
	
</body><!-- end -->
</html>


