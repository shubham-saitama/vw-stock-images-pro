<?php

$section_hide = get_theme_mod( 'vw_stock_images_pro_faq_enable' );
if ( 'Disable' == $section_hide ) {
 return;
}
if( get_theme_mod('vw_stock_images_pro_faq_bgcolor','') ) {
 $faq_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_faq_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_faq_bgimage','') ){
 $faq_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_faq_bgimage')).'\')';
}else{
 $faq_back='';
}
$img_bg = get_theme_mod('vw_stock_images_pro_faq_bgimage_setting');

 ?>
<section id="faq-sec"  style="<?php echo esc_attr( $faq_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <?php if(get_theme_mod('vw_stock_images_pro_faq_heading')!=''){ ?>
          <h2 class="main-head text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_faq_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_faq_paragraph')!=''){ ?>
          <p class="theme-para   mb-md-0  mb-2 text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_faq_paragraph')); ?></p>
        <?php } ?>
      </div>
    </div>
    <div class="row mt-4 pt-md-3 pt-1">
      <div class="col-lg-6 col-md-6">

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
      <div class="col-lg-6 col-md-6 position-relative">
        <?php if(get_theme_mod('vw_stock_images_pro_faq_question_heading')!=''){ ?>
          <h3 class="main-head-inner text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_faq_question_heading')); ?></h3>
        <?php } ?>
        <?php if(get_theme_mod('vw_stock_images_pro_faq_question_paragraph')!=''){ ?>
          <p class="theme-para-inner  mb-0 mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_faq_question_paragraph')); ?></p>
        <?php } ?>
            <?php echo do_shortcode(get_theme_mod('vw_stock_images_pro_faq_contact_shortcode')); ?>
            <?php if ( get_theme_mod('vw_stock_images_pro_faq_question_image',true) != "" ) {?>
                <img class="que-img" src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_faq_question_image')); ?>">
            <?php } ?>
      </div>
    </div>
  </div>
</section>
