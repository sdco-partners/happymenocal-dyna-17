<?php
/** 
 *
 * Template Name: Instructions
 *
 */ 
  get_header(); ?>

<!-- SECTION: INSTRUCTION BLOCKS -->
<section class="instruction-block">
  
<?php if(have_rows('instructions')) :
  while(have_rows('instructions')) :
    the_row(); 

    $image = get_sub_field('image');
    $copy = get_sub_field('text'); ?>

    <div class="instruction">
      <?php if($image) : ?>
      <div class="image">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </div>
      <?php endif; ?>
      <div class="copy">
        <?php echo $copy; ?>
      </div>
    </div>

<?php endwhile;endif;?>

</section>

<?php get_footer(); ?>