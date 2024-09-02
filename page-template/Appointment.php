<?php /**
   * The Template for displaying Appoinment Page
   *
   * @package vw-stock-images-pro
   */
  /**
   * Template Name: FAQ
  */

get_header();
get_template_part('template-parts/banner');

	set_theme_mod( 'vw_stock_images_pro_appoinment_form_heading', 'Pest Control Quote Form' );
?>
<section id="appoinment">

  <div class="container">
    <div class="row justify-content-center ms-2 m-2">
      <div class="col-lg-7 appoinment-form-inner">
          <?php if(get_theme_mod('vw_stock_images_pro_appoinment_form_heading')!=''){ ?>
            <h5 class=" appoinment-heading text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_appoinment_form_heading')); ?></h5>
          <?php } ?>
          <div class="appoinment-shortcode"><?php echo do_shortcode(get_theme_mod('vw_stock_images_pro_appoinment_form_shortcode')); ?></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
