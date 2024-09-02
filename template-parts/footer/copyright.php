<?php

if ( get_theme_mod( 'vw_stock_images_pro_footer_copyright_section_bgcolor' ) ) {
	$section_backg = 'background-color:' . esc_attr( get_theme_mod( 'vw_stock_images_pro_footer_copyright_section_bgcolor' ) ) . ';';
} elseif ( get_theme_mod( 'vw_stock_images_pro_footer_copyright_section_bgimage' ) ) {
	$section_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'vw_stock_images_pro_footer_copyright_section_bgimage' ) ) . '\')';
} else {
	$section_backg = '';
}
$img_bg = get_theme_mod('vw_stock_images_pro_footer_copyright_image_bg');
?>

		<div class="<?php echo esc_attr($img_bg); ?> copyright-outer" style="<?php echo esc_attr($section_backg); ?>">
			<div class="copyright">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 col-sm-6">
							<?php //if ( get_theme_mod('vw_stock_images_pro_footer_copyright_para') != ''): ?>

								<p class="copyright-text text-center">© 2024 - <?php if( get_theme_mod( 'vw_furniture_pro_credit_link',true) != '') { ?>
									<span class="credit_link"><?php echo esc_html( vw_stock_images_pro_credit_link() ); ?></span> <?php echo get_theme_mod( 'vw_stock_images_pro_footer_copyright_para'); ?>
								</p>
							<?php } ?>
						</div>
						<?php if ( get_theme_mod('vw_stock_images_pro_genral_section_show_scroll_top',true) == "1" ) { ?>
							<a href="javascript:" id="return-to-top"><i class="<?php echo esc_html(get_theme_mod('vw_stock_images_pro_genral_section_show_scroll_top_icon')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Return To Top Button','vw-stock-images-pro')?></span></a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
