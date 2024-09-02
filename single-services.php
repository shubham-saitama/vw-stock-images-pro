<?php
/**
 * The Template for displaying all single Services.
 *
 * @package vw-stock-images-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<section id="single-services-problem">
  <div class="container">
    <div class="d-flex flex-column gap-2">
      <div class="services-img ">
        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
      </div>
      <div class="pests-content">
        <h4><?php the_title();?></h4>
      </div>
      <div><?php the_content();?></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
