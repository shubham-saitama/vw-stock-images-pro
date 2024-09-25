<?php
$address_section = get_theme_mod('vw_stock_images_pro_radiolast_enable');
if ('Disable' == $address_section) {
	return;
}
// $img_bg = get_theme_mod('vw_stock_images_pro_footer_bgimage');

if (get_theme_mod('vw_stock_images_pro_section_footer_bgcolor', '')) {
	$footer_backg = 'background-color:' . esc_attr(get_theme_mod('vw_stock_images_pro_section_footer_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_stock_images_pro_section_footer_bgimage', '')) {
	$footer_backg = 'background-image:url(\'' . esc_url(get_theme_mod('vw_stock_images_pro_section_footer_bgimage')) . '\')';
} else {
	$footer_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_section_footer_bg_attachment');


set_theme_mod('vw_stock_images_pro_footer_image', get_template_directory_uri() . '/assets/images/spider.png');

?>
<?php if (get_theme_mod('vw_stock_images_pro_custom_footer_widget_section', 'true') != '') { ?>
	<section id="footer" style="<?php echo esc_attr($footer_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
		<div id="footer_box" class="darkbox">
			<div class="container footer-cols">
				<?php
				$count = 0;
				if (is_active_sidebar('footer-1') != '') {
					$count++;
				}
				if (is_active_sidebar('footer-2') != '') {
					$count++;
				}
				if (is_active_sidebar('footer-3') != '') {
					$count++;
				}
				if (is_active_sidebar('footer-4') != '') {
					$count++;
				}

				if ($count == 1) {
					$colmd = 'col-lg-12 col-sm-6';
					$collg = 'col-lg-12 col-sm-6';
					$colsm = 'col-lg-12 col-sm-6';
				} elseif ($count == 2) {
					$colmd = 'col-lg-6 col-sm-6';
					$collg = 'col-lg-6 col-sm-6';
					$colsm = 'col-lg-6 col-sm-6';
				} elseif ($count == 3) {
					$colmd = 'col-lg-4 col-sm-6';
					$collg = 'col-lg-4 col-sm-6';
					$colsm = 'col-lg-2 col-sm-6';
				} else {
					$colmd = 'col-lg-4 col-sm-6';
					$colsm = 'col-lg-2 col-sm-6';
					$collg = 'col-lg-2 col-sm-6 ';
					$colLast = 'col-lg-3 col-sm-6 footer-payment';
				}
				?>
				<div class="row justify-content-between">
					<div
						class="<?php if (is_active_sidebar('footer-1') == '') {
							echo 'footer_hide';
						} else {
							echo esc_html($colmd);
						} ?> footer-col-one">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<div
						class="<?php if (is_active_sidebar('footer-2') == '') {
							echo 'footer_hide';
						} else {
							echo esc_html($collg);
						} ?>">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<div
						class="<?php if (is_active_sidebar('footer-3') == '') {
							echo 'footer_hide';
						} else {
							echo esc_html($colsm);
						} ?>">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
					<div
						class="<?php if (is_active_sidebar('footer-4') == '') {
							echo 'footer_hide';
						} else {
							echo esc_html($colLast);
						} ?>">
						<?php dynamic_sidebar('footer-4'); ?>
					</div>
				</div>
			</div><!-- .container -->
		</div><!-- #footer_box -->
	</section>
<?php } ?>