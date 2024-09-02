<?php
if ( ! is_singular() ) {
	return;
}
global $post;
$img = get_post_meta($post->ID, 'vw_title_banner_image_wp_custom_attachment', true);
$display = '';
$display_title_bbanner = '';
$vw_title_banner_image_title_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_on_off', true);
if($vw_title_banner_image_title_on_off == 'on') $display = 'style=display:none;';
$vw_title_banner_image_title_below_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_below_on_off', true);
if($vw_title_banner_image_title_below_on_off != 'on') $display_title_bbanner = 'style=display:none;';
if( $img != '' ){ ?>


	<?php if(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')!=''){ ?>
	<img class="slider-spider-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')); ?>">
	<?php } ?>
	<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $img); ?>)">
	  <div class="banner-page-text container">
	    <div class="row">
	      <div class="col-lg-5 col-sm-7 col-7 banner-left-col">
	        <div class="above_title">
	        		<h1><?php the_title();?></h1>
	            <?php if ( get_theme_mod('vw_stock_images_pro_site_breadcrumb_enable', true) != '' ) { ?>
	                  <div class=" bradcrumbs">
	                    <?php vw_stock_images_pro_the_breadcrumb(); ?>
	                  </div>
	              <?php }
	              ?>
	      </div>
	      </div>
	      <div class="col-lg-7 col-sm-5 col-5" >

	      </div>
	    </div>
	  </div>
</div>

	<div class="container main_title" <?php echo esc_attr($display_title_bbanner); ?>>
		<h1><?php the_title();?></h1>
		<?php if ( get_theme_mod('vw_stock_images_pro_site_breadcrumb_enable', true) != '' ) { ?>
			    <div class="container bradcrumbs py-3 b2">
			        <?php vw_stock_images_pro_the_breadcrumb(); ?>
			    </div>
			<?php } ?>

	</div>
<?php }else{ ?>
	<div class="container main_title">
		<h1><?php the_title();?></h1>
	<?php if ( get_theme_mod('vw_stock_images_pro_site_breadcrumb_enable', true) != '' ) { ?>
			    <div class="container bradcrumbs py-3 b2">
			        <?php vw_stock_images_pro_the_breadcrumb(); ?>
			    </div>
			<?php } ?>

	</div>
<?php } ?>
