<?php
/**
 * The Template for displaying all single Portfolio.
 *
 * @package vw-stock-images-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<section id="single-pest-problem">
  <div class="container">
          <div class="single-pests-inner-top d-md-flex d-sm-block d-block gap-3 align-items-center mb-3">
            <div class="">
              <div class="pests-img">
                  <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
              </div>
            </div>

            <div class="pests-content">
              <h4><?php the_title();?></h4>
              <div><?php the_content();?></div>
            </div>

      </div>
      <div class="pests-content-inner">
        <p class="mb-3">  <?php echo esc_html(get_post_meta($post->ID,'pests-para-one',true)); ?></p>
        <h5 class=""><?php echo esc_html(get_post_meta($post->ID,'pests-list-heading',true)); ?></h5>
        <div class="pests-list-outer mb-4 text-left">
          <div class="position-relative pests-list mb-2 ps-3"><?php echo esc_html(get_post_meta($post->ID,'pests-list-one',true)); ?></div>
          <div class="position-relative pests-list mb-2 ps-3"><?php echo esc_html(get_post_meta($post->ID,'pests-list-two',true)); ?></div>
          <div class="position-relative pests-list mb-2 ps-3"><?php echo esc_html(get_post_meta($post->ID,'pests-list-three',true)); ?></div>
          <div class="position-relative pests-list mb-2 ps-3"><?php echo esc_html(get_post_meta($post->ID,'pests-list-four',true)); ?></div>
          <div class="position-relative pests-list mb-2 ps-3"><?php echo esc_html(get_post_meta($post->ID,'pests-list-five',true)); ?></div>
        </div>
          <p class="mt-3"><?php echo esc_html(get_post_meta($post->ID,'pests-para-two',true)); ?></p>
      </div>

  </div>
</section>
<?php get_footer(); ?>
