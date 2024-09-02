<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vw-stock-images-pro
 */
get_header();
//get_template_part( 'template-parts/banner' );
$background_img = get_theme_mod('vw_stock_images_pro_inner_page_banner_bgimage');
?>
<?php do_action( 'vw_stock_images_pro_after_page_header' ); ?>



<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
  <div class="banner-page-text container">
    <div class="row">
      <div class="col-lg-5 col-sm-7 col-7 banner-left-col">
        <div class="above_title">
            <h1><?php echo the_title(); ?></h1>
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

<div class="outer_dpage">
	<div class="container">
		<div class="middle-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template(); }
			endwhile; // end of the loop. ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php do_action( 'vw_stock_images_pro_before_page_footer' ); ?>

<?php get_footer(); ?>
