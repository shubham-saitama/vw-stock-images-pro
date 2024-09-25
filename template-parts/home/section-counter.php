<?php

$section_hide = get_theme_mod( 'vw_stock_images_pro_counter_enable' );
if ( 'Disable' == $section_hide ) {
 return;
}
if( get_theme_mod('vw_stock_images_pro_counter_bgcolor','') ) {
  $counter_sec_back = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_counter_bgcolor','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_counter_bgimage','') ){
  $counter_sec_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_counter_bgimage')).'\')';
}else{
  $counter_sec_back='';
}
$img_bg = get_theme_mod('vw_stock_images_pro_counter_bgimage_setting');
?>

<section id="counter-sec"  style="<?php echo esc_attr( $counter_sec_back ); ?>"  class="<?php echo esc_attr($img_bg); ?>">
  <div class="container">
    <div class="row">
        <?php
          $record_no=get_theme_mod('vw_stock_images_pro_counter_number');
          for($i=1;$i<=$record_no;$i++)
        {
        ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="row counter-inner align-items-center text-md-start text-sm-center text-center">
              <div class="col-md-4 align-self-center">
                  <?php if ( get_theme_mod('vw_stock_images_pro_counter_image',true) != "" ) {?>
                    <img src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_counter_image'.$i)); ?>">
                  <?php } ?>
              </div>
               <div class="col-md-8 align-self-center">
                 <div class="counter-box<?php echo($i) ?>">
                    <div class="our-records-info">
                        <div class="counter recrd_inner">
                          <?php if(get_theme_mod('vw_stock_images_pro_counter_no'.$i)!=''){ ?>
                            <span class="counter1-up"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_no'.$i)); ?>
                            </span>
                          <?php } if(get_theme_mod('vw_stock_images_pro_counter_no_suffix'.$i)!=''){ ?><span class="counter_suffix p-0">
                                <?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_no_suffix'.$i)); ?>
                              </span>
                          <?php } ?>
                        </div>
                        <?php if(get_theme_mod('vw_stock_images_pro_counter_title'.$i)!=''){ ?>
                          <p class="mb-0 record_title<?php echo($i) ?>"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_counter_title'.$i)); ?>
                          </p>
                        <?php } ?>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
