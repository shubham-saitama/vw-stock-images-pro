<?php
/**
 * The Header for our theme.
 *
 * @package vw-stock-images-pro
 */
 $sticky_header="";
if ( get_theme_mod('vw_stock_images_pro_header_section_sticky',true) == "1" ) {

	$sticky_header="yes";
}else{

	$sticky_header="no";
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header id="masthead" class="site-header" >

    <!-- before header hook -->
    <?php do_action( 'vw_stock_images_pro_before_topbar' ); ?>
    <?php get_template_part('template-parts/header/top-bar'); ?>

    <?php
      $img_bg = get_theme_mod('vw_stock_images_pro_headerhomebg_attachment');
      if( get_theme_mod('vw_stock_images_pro_headerhomebg_color','') ) {
      $background_setting = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_headerhomebg_color','')).';';
      }elseif( get_theme_mod('vw_stock_images_pro_headerhomebg_image','') ){
      $background_setting = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_headerhomebg_image')).'\')';
      }else{
      $background_setting = '';
      }
    ?>
    <?php if ( get_theme_mod('vw_stock_images_pro_products_spinner_enable',true) == "1" ) { ?>
      <div class="eco-box">
        <div class="loader-main">
            <span class="loader"> </span>
        </div>
      </div>
    <?php } ?>
    <a class="screen-reader-text skip-link" href="#maincontent" ><?php echo esc_html(get_theme_mod('vw_stock_images_pro_header_skip_link')); ?></a>

    <div id="header" class="<?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($background_setting);  ?>">
      <?php
        do_action( 'vw_stock_images_pro_before_header' );
				 //get_template_part('template-parts/header/middle-header');
        get_template_part('template-parts/header/content-header');
      ?>
    </div>
	<span id="sticky-onoff" class="d-none" style="font-size: 0;"><?php echo esc_html($sticky_header); ?></span>


    <div class="clearfix"></div>

  </header>
