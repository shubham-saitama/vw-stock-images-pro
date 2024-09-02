<?php
   /**
      * The Template for displaying Services.
      *
      * @package vw-stock-images-pro
      */
     /**
      * Template Name: FAQ
     */

   get_header();
   get_template_part('template-parts/banner');
   $img_bg = get_theme_mod('vw_stock_images_pro_services_page_image_bg');
   if( get_theme_mod('vw_stock_images_pro_services_page_bg_color','') ) {
     $service_backg = 'background-color:'.esc_attr(get_theme_mod('vw_stock_images_pro_services_page_bg_color','')).';';
   }elseif( get_theme_mod('vw_stock_images_pro_services_page_bg_image','') ){
     $service_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_stock_images_pro_services_page_bg_image')).'\')';
   }else{
     $service_backg = '';
   }
   $img_bg = get_theme_mod('vw_stock_images_pro_services_page_image_bg_setting');
?>

<?php  get_template_part('template-parts/home/section-professional-services'); ?>

<?php get_footer(); ?>
