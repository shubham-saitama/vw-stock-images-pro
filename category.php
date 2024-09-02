<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vw-stock-images-pro
 */
 $background_img = get_theme_mod('vw_stock_images_pro_inner_page_banner_bgimage');
get_header();
?>
<?php if(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')!=''){ ?>
<img class="slider-spider-img" src="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_slider_additonal_img_one')); ?>">
<?php } ?>
<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
  <div class="banner-page-text container">
    <div class="row">
      <div class="col-lg-5 col-sm-7 col-7 banner-left-col">
        <div class="above_title">
            <h1><?php echo single_term_title(); ?> Service</h1>
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
<section  style="background: #F1F1F1;">


<div class="container">
    <div class="row">
		<div class="col-md-12">
			<div class="row">
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
	            <?php else : ?>
	                <?php get_template_part( 'no-results', 'archive' ); ?>
	            <?php endif; ?>
	            <div class="navigation">
					<?php // Previous/next page navigation.
			            the_posts_pagination( array(
			                'prev_text'  => __( 'Previous page', 'vw-stock-images-pro' ),
			                'next_text'  => __( 'Next page', 'vw-stock-images-pro' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-stock-images-pro' ) . ' </span>',
			            ));
					?>
				</div>
			</div>
        </div>

			<?php /*	<div id="sidebar" class="col-md-3">
					<?php get_sidebar( 'page' ); ?>
				</div> */ ?>

        <div class="clearfix"></div>
    </div>
</div>
</section>
<?php get_footer(); ?>
