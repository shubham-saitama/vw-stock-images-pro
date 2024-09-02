<?php

require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function vw_stock_images_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'VW Stock Images Posttype', 'vw-stock-images-pro' ),
			'slug'             => 'vw-stock-images-pro-posttype',
			'source'           => get_template_directory() .'/inc/plugins/vw-stock-images-pro-posttype.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Social Media', 'vw-stock-images-pro' ),
			'slug'             => 'vw-social-media',
			'source'           => get_template_directory() .'/inc/plugins/vw-social-media.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
				'name'             => __( 'Font Awesome', 'vw-stock-images-pro' ),
				'slug'             => 'font-awesome',
				'source'           => '',
				'required'         => true,
				'force_activation' => false,
			),
		array(
			'name'             => __( 'Contact Form 7', 'vw-stock-images-pro' ),
			'slug'             => 'contact-form-7',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'vw-stock-images-pro' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - Ecommerce Product Addons', 'vw-stock-images-pro' ),
			'slug'             => 'ibtana-ecommerce-product-addons',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
		  'name'             => __( 'WooCommerce', 'vw-stock-images-pro' ),
		  'slug'             => 'woocommerce',
		  'source'           => '',
		  'required'         => true,
		  'force_activation' => false,
		),

		array(
			'name'             => __( 'VW Title Banner Image', 'vw-stock-images-pro' ),
			'slug'             => 'vw-title-banner-image',
			'source'           => get_template_directory() .'/inc/plugins/vw-title-banner-image.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
				'name'             => __( 'YITH WooCommerce Wishlist', 'vw-stock-images-pro' ),
				'slug'             => 'yith-woocommerce-wishlist',
				'source'           => '',
				'required'         => true,
				'force_activation' => false,
			),
	// array(
	// 	'name'             => __( 'Quantity Plus Minus Button for WooCommerce by CodeAstrology', 'vw-stock-images-pro' ),
	// 	'slug'             => 'wc-quantity-plus-minus-button',
	// 	'source'           => '',
	// 	'required'         => true,
	// 	'force_activation' => false,
	// ),
	array(
		'name'             => __( 'Instagram Feed Pro', 'vw-stock-images-pro' ),
		'slug'             => 'instagram-feed',
		'source'           => '',
		'required'         => true,
	),
	);
	$vw_stock_images_pro_config = array();
	tgmpa( $plugins, $vw_stock_images_pro_config );
}
add_action( 'tgmpa_register', 'vw_stock_images_pro_register_recommended_plugins' );
