<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vw-stock-images-pro
 */
get_header();
$background_img = get_theme_mod('vw_stock_images_pro_inner_page_banner_bgimage');
// get_template_part('template-parts/banner');
?>

<div class="banner-top ">
  <div class="container">
    <div class="row">
      <div class="breadcrumb-holder">
        <?php echo vw_stock_images_pro_the_breadcrumb(); ?>
      </div>
    </div>
  </div>
</div>
<div class="container">
	<div class="middle-align">
		<div class="">
			<div class="">
				<div class="">
					<?php if (have_posts()): ?>
						<?php /* Start the Loop */ ?>
						<div class="grid row">
							<?php while (have_posts()):
								the_post();
								?>
								<div class="grid-item col-lg-4 col-md-6 col-12 <?php echo esc_attr($category_classes); ?>">
									<?php get_template_part('template-parts/product-image'); ?>
								</div>
								<?php
							endwhile;
							?>
						</div>
						<?php
						// Previous/next page navigation.
						the_posts_pagination(array(
							'prev_text' => __('Previous page', 'vw-stock-images-pro'),
							'next_text' => __('Next page', 'vw-stock-images-pro'),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'vw-stock-images-pro') . ' </span>',
						));
					else:
						get_template_part('no-results', 'archive'); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php /*<div class="col-md-4">
						<?php get_sidebar( 'page' ); ?>
					</div> */ ?>

			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>