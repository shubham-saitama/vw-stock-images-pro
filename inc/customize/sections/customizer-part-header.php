<?php
/*------------------------ Header Section----------------------- */

// middle header icon settings
$wp_customize->add_section('vw_stock_images_pro_sec_header_section', array(
	'title' => __('Header', 'vw-stock-images-pro'),
	'description' => __('Header Settings', 'vw-stock-images-pro'),
	'priority' => null,
	'panel' => 'vw_stock_images_pro_panel_id',
));



$wp_customize->add_setting(
	'vw_stock_images_pro_header_menu_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_header_menu_settings',
	array(
		'label' => __('Menu Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section'
	)
));
// This is Nav Dropdown Background Color picker setting
$wp_customize->add_setting('vw_stock_images_pro_menubg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_menubg_color', array(
	'label' => __('Primary Menu Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_menubg_color',
)));

// This is Header Menu Color picker setting
$wp_customize->add_setting('vw_stock_images_pro_headermenu_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_headermenu_color', array(
	'label' => __('Menu Item Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_headermenu_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_headermenu_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_headermenu_font_family',
	array(
		'section' => 'vw_stock_images_pro_sec_header_section',
		'label' => __('Menu Item Fonts', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_headermenu_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_headermenu_font_size', array(
	'label' => __('Menu Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_headermenu_font_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_header_menuhovercolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_header_menuhovercolor', array(
	'label' => __('Menu Item Hover Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_menuhovercolor',
)));

$wp_customize->add_setting('vw_stock_images_pro_dropdownbg_itemcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_dropdownbg_itemcolor', array(
	'label' => __('Menu DropDown Item Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_dropdownbg_itemcolor',
)));

$wp_customize->add_setting('vw_stock_images_pro_dropdownbg_item_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_dropdownbg_item_font_family',
	array(
		'section' => 'vw_stock_images_pro_sec_header_section',
		'label' => __('Menu DropDown Item Fonts', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_dropdownbg_item_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_dropdownbg_item_font_size', array(
	'label' => __('Menu DropDown Item Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_dropdownbg_item_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_dropdownbg_item_hovercolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_dropdownbg_item_hovercolor', array(
	'label' => __('Menu DropDown Item Hover Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_dropdownbg_item_hovercolor',
)));

$wp_customize->add_setting('vw_stock_images_pro_header_icon_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_header_icon_font_size', array(
	'label' => __('Icon Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_header_icon_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_header_icon_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_res_open_menu_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new vw_stock_images_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'vw_stock_images_pro_res_open_menu_icon',
		array(
			'settings' => 'vw_stock_images_pro_res_open_menu_icon',
			'section' => 'vw_stock_images_pro_sec_header_section',
			'type' => 'icon',
			'label' => esc_html__('Menu Icon', 'vw-stock-images-pro'),
		)
	)
);
$wp_customize->add_setting('vw_stock_images_pro_res_open_menu_icon_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_res_open_menu_icon_color', array(
	'label' => __('Toggle Icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_res_open_menu_icon_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_res_open_menu_icon_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_res_open_menu_icon_font_size', array(
	'label' => __('Toggle Icon Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_res_open_menu_icon_font_size',
	'type' => 'number'
));
// $wp_customize->add_setting(
// 		'vw_stock_images_pro_res_close_menu_icon',
// 		array(
// 			'default'     => '',
// 			'sanitize_callback' => 'sanitize_text_field'
// 		)
// );
// $wp_customize->add_control(
// 		new vw_stock_images_pro_Fontawesome_Icon_Chooser(
// 			$wp_customize,
// 			'vw_stock_images_pro_res_close_menu_icon',
// 			array(
// 				'settings'    => 'vw_stock_images_pro_res_close_menu_icon',
// 				'section'   => 'vw_stock_images_pro_sec_header_section',
// 				'type'      => 'icon',
// 				'label'     => esc_html__( 'Choose Close Icon', 'vw-stock-images-pro' ),
// 			)
// 		)
// );
$wp_customize->add_setting('vw_stock_images_pro_header_close_iconcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_header_close_iconcolor', array(
	'label' => __('Close Icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_close_iconcolor',
)));

$wp_customize->add_setting('vw_stock_images_pro_header_close_icon_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_header_close_icon_font_size', array(
	'label' => __('Close Icon Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_header_close_icon_font_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_header_pricing_link_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_header_pricing_link_color', array(
	'label' => __('Pricing Link Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_pricing_link_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_header_pricing_link_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_header_pricing_link_size', array(
	'label' => __('Pricing Link Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_header_pricing_link_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_header_pricing_link_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_header_pricing_link_family',
	array(
		'section' => 'vw_stock_images_pro_sec_header_section',
		'label' => __('Pricing Link Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);