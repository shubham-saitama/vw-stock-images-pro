<?php
$wp_customize->add_section('vw_stock_images_pro_slider_sec', array(
	'title' => __('Slider Section', 'vw-stock-images-pro'),
	'description' => __('Add Slider setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting(
	'vw_stock_images_pro_slider_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_slider_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);


$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_slider_enabledisable', array(
	'selector' => '#slider .slider-left-content  ',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_slider_enabledisable',
));


$wp_customize->add_setting('vw_stock_images_pro_slider_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_slider_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_slider_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_bgimage'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_bgcolor_2', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_slider_bgcolor_2', array(
	'label' => __('Inner Section Bg Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_bgcolor_2',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_bgimage_2', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_slider_bgimage_2', array(
	'label' => __('Inner Section Background image', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_bgimage_2'
)));

$wp_customize->add_setting(
	'vw_stock_images_pro_slider_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_slider_heading_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_slider_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_heading', array(
	'label' => __('Banner Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_heading',
	'type' => 'text'
));

$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting(
	'vw_stock_images_pro_slider_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_slider_color_font_settings',
	array(
		'label' => __('Section Color & font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_slider_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_slider_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_heading_font_size', array(
	'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_slider_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_slider_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_paragraph_font_size', array(
	'label' => __(' Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_slider_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_slider_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
