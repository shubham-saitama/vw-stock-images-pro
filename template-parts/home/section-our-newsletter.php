<?php
$client_section = get_theme_mod( 'vw_stock_images_pro_radio_newsletter_enable' );
if ( 'Disable' == $client_section ) {
  return;
}

if( get_theme_mod('vw_stock_images_pro_our_newsletter_bg_color','') ) {
  $client_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_our_newsletter_bg_color','')).';';
}elseif( get_theme_mod('vw_stock_images_pro_our_newsletter_bg_image','') ){
  $client_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_our_newsletter_bg_image')).'\')';
}else{
  $client_backg = '';
}

$img_bg = get_theme_mod('vw_stock_images_pro_our_newsletter_image_bg_attachement');
set_theme_mod( 'vw_stock_images_pro_our_newsletter_beetle_img',get_template_directory_uri().'/assets/images/newsletter/news-beetle.png' );
?>

<section id="our-newsletter" >
<div class="container-fluid position-relative">
         <div class="row">
            <div class="col-lg-5 col-md-5 news-col-1 news-content-main p-md-0">
              <div class="newsletter-content ">
                    <?php if(get_theme_mod('vw_stock_images_pro_our_newsletter_heading')!=''){ ?>
                        <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_newsletter_heading')); ?></h2>
                    <?php } ?>
                    <?php if(get_theme_mod('vw_stock_images_pro_our_newsletter_para')!=''){ ?>
                        <p class="theme-para mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_newsletter_para')); ?></p>
                    <?php } ?>
                    <?php echo do_shortcode(get_theme_mod('vw_stock_images_pro_our_newsletter_shortcode')); ?>
                </div>
                <?php if(get_theme_mod('vw_stock_images_pro_our_newsletter_beetle_img')!=''){ ?>
                <img class="news-beetle-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_our_newsletter_beetle_img')); ?>">
            <?php } ?>
            </div>

            <div class="col-lg-7 col-md-7 news-col-2 appoinment-content-main p-md-0">
                <div class="d-md-flex d-sm-flex d-block justify-content-center appoinment-content-main-inner">
                <div class="apoinment-content ">
                    <?php if(get_theme_mod('vw_stock_images_pro_appoinment_heading')!=''){ ?>
                        <h2 class="main-head text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_stock_images_pro_appoinment_heading')); ?></h2>
                    <?php } ?>
                    <?php if(get_theme_mod('vw_stock_images_pro_appoinment_para')!=''){ ?>
                        <p class="theme-para mb-md-0  mb-2 text-lg-start text-md-start text-sm-center text-center" ><?php echo esc_html(get_theme_mod('vw_stock_images_pro_appoinment_para')); ?></p>
                    <?php } ?>
                    <a class="theme-btn" href="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_appoinment_url')); ?>">
                    <?php echo esc_html(get_theme_mod('vw_stock_images_pro_appoinment_text')); ?>
                    </a>
                </div>
                <div class="news-img ">
                    <?php if ( get_theme_mod('vw_stock_images_pro_our_newsletter_man_image',true) != "" ) {?>
                        <img class="news-man-img" src="<?php echo esc_url(get_theme_mod('vw_stock_images_pro_our_newsletter_man_image')); ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
