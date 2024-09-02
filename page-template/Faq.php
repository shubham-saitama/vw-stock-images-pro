<?php /**
   * The Template for displaying Faq
   *
   * @package vw-stock-images-pro
   */
  /**
   * Template Name: FAQ
  */

get_header();
get_template_part('template-parts/banner');

?>
<section id="faq-page">
<div class="container">
    <div class="row">
      <div class="accordion" id="accordionExample">
          <?php
              $fcount = get_theme_mod("vw_stock_images_pro_faq_number");
              for( $j = 1; $j <= $fcount; $j++ ) {
              ?>
              <div class="accordion-item">
              <div class="accordion-header" id="heading<?php echo esc_attr($j); ?>">
              <a class="accordion-button <?php if( $j != 1 ) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr($j); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($j); ?>">
                  <?php echo esc_html(get_theme_mod('vw_stock_images_pro_faq_que'.$j)); ?>
              </a>
              </div>
              <div id="collapse<?php echo esc_attr($j);?>" class="accordion-collapse collapse <?php if( $j == 1 ) { echo "show"; } ?>" aria-labelledby="heading<?php echo esc_attr($j); ?>" data-bs-parent="#accordionExample" id="collapse<?php echo esc_attr($j);?>">
                  <div class="accordion-body pt-0">
                  <?php echo esc_html(get_theme_mod('vw_stock_images_pro_faq_ans'.$j)); ?>
                  </div>
              </div>
              </div>
          <?php } ?>
      </div>
  </div>
</div>
</section>
<?php get_footer(); ?>
