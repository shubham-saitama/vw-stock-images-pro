<?php
$wp_customize->add_section('vw_stock_images_pro_pest_problem_sec', array(
	'title' => __('Trending Images and vids', 'vw-stock-images-pro'),
	'description' => __('Add Pest Problem setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_pests_problem_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_pests_problem_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_pest_problem_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_pests_problem_enable', array(
	'selector' => '#pests-problem .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_pests_problem_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_pests_problem_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_pests_problem_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'settings' => 'vw_stock_images_pro_pests_problem_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_pests_problem_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'settings' => 'vw_stock_images_pro_pests_problem_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_pests_problem_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_pests_problem_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_pests_problem_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_pests_problem_section_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_pest_problem_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_pests_problem_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'setting' => 'vw_stock_images_pro_pests_problem_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_pests_problem_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'setting' => 'vw_stock_images_pro_pests_problem_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting(
	'vw_stock_images_pro_pests_problem_section_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_pests_problem_section_color_font_settings',
	array(
		'label' => __('Section Color & font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_pest_problem_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_pests_problem_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'settings' => 'vw_stock_images_pro_pests_problem_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_pests_problem_heading_font_size', array(
	'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'setting' => 'vw_stock_images_pro_pests_problem_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_pests_problem_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_pest_problem_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_pests_problem_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'settings' => 'vw_stock_images_pro_pests_problem_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_pests_problem_paragraph_font_size', array(
	'label' => __(' Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_pest_problem_sec',
	'setting' => 'vw_stock_images_pro_pests_problem_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_pests_problem_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_pests_problem_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_pest_problem_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);


/*-----------------------category_slider Section Settings--------------------------*/
$wp_customize->add_section('vw_stock_images_pro_category_slider', array(
	'title' => __('Category Slider Section', 'vw-stock-images-pro'),
	'description' => __('Add category_slider setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_category_slider_enable', array(
	'selector' => '#category_slider-us .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_category_slider_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_our_category_slider_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_category_slider_bg_color', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_category_slider',
	'settings' => 'vw_stock_images_pro_our_category_slider_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_category_slider_bg_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_category_slider_bg_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_category_slider',
	'settings' => 'vw_stock_images_pro_our_category_slider_bg_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_our_category_slider_image_bg_attachement', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_our_category_slider_image_bg_attachement', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_category_slider',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_category_slider_heading_settings',
	array(
		'label' => __('Section Heading', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_heading',
	array(
		'label' => __('heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'setting' => 'vw_stock_images_pro_category_slider_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_category_slider',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'setting' => 'vw_stock_images_pro_category_slider_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_category_slider_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_category_slider',
			'settings' => 'vw_stock_images_pro_category_slider_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_category_slider_heading_text_settings',
	array(
		'label' => __('Section Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_heading_text',
	array(
		'label' => __('heading_text Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'setting' => 'vw_stock_images_pro_category_slider_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_category_slider',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'setting' => 'vw_stock_images_pro_category_slider_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_category_slider_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_category_slider',
			'settings' => 'vw_stock_images_pro_category_slider_heading_text_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_name_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_category_slider_category_name_text_settings',
	array(
		'label' => __('Category Name Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_name_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_category_name_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_category_slider',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_name_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_category_name_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'setting' => 'vw_stock_images_pro_category_slider_category_name_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_name_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_category_slider_category_name_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_category_slider',
			'settings' => 'vw_stock_images_pro_category_slider_category_name_text_color',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_desc_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_category_slider_category_desc_settings',
	array(
		'label' => __('Category Descreption Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_desc_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_category_desc_font_family',
	array(
		'section' => 'vw_stock_images_pro_category_slider',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_desc_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_category_slider_category_desc_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_category_slider',
		'setting' => 'vw_stock_images_pro_category_slider_category_desc_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_category_slider_category_desc_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_category_slider_category_desc_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_category_slider',
			'settings' => 'vw_stock_images_pro_category_slider_category_desc_color',
		)
	)
);

/*-----------------------Our FeturServices Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_our_features_sec', array(
	'title' => __('Our Features Section', 'vw-stock-images-pro'),
	'description' => __('Add Professional Services setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_radio_our_features_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_radio_our_features_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_features_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_radio_our_features_enable', array(
	'selector' => '#professional-services .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_radio_our_features_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_our_features_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_features_bg_color', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_features_sec',
	'settings' => 'vw_stock_images_pro_our_features_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_features_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_features_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_features_sec',
	'settings' => 'vw_stock_images_pro_our_features_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_our_features_image_bg_attachement', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_our_features_image_bg_attachement', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_features_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));


for ($i = 1; $i <= 4; $i++ ) {

	$wp_customize->add_setting('vw_stock_images_pro_our_features_sec_image' . $i, array(
		'default' => get_theme_mod('vw_stock_images_pro_our_features_sec_image' . $i),
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_features_sec_image' . $i, array(
		'label' => __('Feature ' . $i . ' Image', 'vw-stock-images-pro'),
		'description' => __('choose image', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_features_sec',
		'settings' => 'vw_stock_images_pro_our_features_sec_image' . $i,
	)));

	$wp_customize->add_setting(
		'vw_stock_images_pro_our_features_sec_feature_title_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_our_features_sec_feature_title_' . $i,
		array(
			'label' => __('Feature ' . $i . ' Title', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_features_sec',
			'setting' => 'vw_stock_images_pro_our_features_sec_feature_title_' . $i,
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'vw_stock_images_pro_our_features_sec_feature_desc_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_our_features_sec_feature_desc_' . $i,
		array(
			'label' => __('Feature ' . $i . ' Descreption', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_features_sec',
			'setting' => 'vw_stock_images_pro_our_features_sec_feature_desc_' . $i,
			'type' => 'text'
		)
	);


}


$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_features_sec_feature_heading_settings',
	array(
		'label' => __('Feature Heading settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_features_sec'
	)
));





$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_features_sec_feature_title_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_features_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_features_sec_feature_title_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_features_sec',
		'setting' => 'vw_stock_images_pro_our_features_sec_feature_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_features_sec_feature_title_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_features_sec',
			'settings' => 'vw_stock_images_pro_our_features_sec_feature_title_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_features_sec_feature_settings',
	array(
		'label' => __('Feature Descreption', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_features_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_desc_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_features_sec_feature_desc_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_features_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_desc_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_features_sec_feature_desc_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_features_sec',
		'setting' => 'vw_stock_images_pro_our_features_sec_feature_desc_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_features_sec_feature_desc_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_features_sec_feature_desc_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_features_sec',
			'settings' => 'vw_stock_images_pro_our_features_sec_feature_desc_color',
		)
	)
);
// -----------------------------Designers Fav Section-------------------------------------

$wp_customize->add_section('vw_stock_images_pro_designers_fav_sec', array(
	'title' => __('Designers Favourate Section', 'vw-stock-images-pro'),
	'description' => __('Counter Offer setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_designers_fav_enable', array(
	'selector' => '#counter-offer .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_designers_fav_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_designers_fav_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_designers_fav_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_designers_fav_sec',
	'settings' => 'vw_stock_images_pro_designers_fav_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_designers_fav_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_designers_fav_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_designers_fav_sec',
	'settings' => 'vw_stock_images_pro_designers_fav_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_designers_fav_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_designers_fav_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_designers_fav_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'label' => __('Section Heading', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_heading',
	array(
		'label' => __('Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_designers_fav_sec_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_designers_fav_sec',
			'settings' => 'vw_stock_images_pro_designers_fav_sec_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'label' => __('Section Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_heading_text',
	array(
		'label' => __('heading_text Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_designers_fav_sec_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_designers_fav_sec',
			'settings' => 'vw_stock_images_pro_designers_fav_sec_heading_text_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'label' => __('Section Button', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_button',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_button',
	array(
		'label' => __('button Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_button',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_button_font_family',
	array(
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_button_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_designers_fav_sec_button_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_designers_fav_sec',
			'settings' => 'vw_stock_images_pro_designers_fav_sec_button_color',
		)
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_button_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_designers_fav_sec_button_bgcolor',
		array(
			'label' => __('Background Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_designers_fav_sec',
			'settings' => 'vw_stock_images_pro_designers_fav_sec_button_bgcolor',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_designers_fav_sec_feature_settings',
	array(
		'label' => __('Section Cateogry Title', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_cateogry_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_cateogry_title_font_family',
	array(
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_cateogry_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_designers_fav_sec_cateogry_title_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_designers_fav_sec',
		'setting' => 'vw_stock_images_pro_designers_fav_sec_cateogry_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_designers_fav_sec_cateogry_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_designers_fav_sec_cateogry_title_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_designers_fav_sec',
			'settings' => 'vw_stock_images_pro_designers_fav_sec_cateogry_title_color',
		)
	)
);

/*-----------------------Premium Features Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_premium_features_sec', array(
	'title' => __('Premium Pack Features Section', 'vw-stock-images-pro'),
	'description' => __('Add Professional Services setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_radio_premium_features_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_radio_premium_features_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_radio_premium_features_enable', array(
	'selector' => '#professional-services .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_radio_premium_features_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_premium_features_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_premium_features_bg_color', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_premium_features_sec',
	'settings' => 'vw_stock_images_pro_premium_features_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_premium_features_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_premium_features_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_premium_features_sec',
	'settings' => 'vw_stock_images_pro_premium_features_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_premium_features_image_bg_attachement', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_premium_features_image_bg_attachement', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_premium_features_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));



$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_premium_features_sec_feature_settings',
	array(
		'label' => __('Section heading', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_heading',
	array(
		'label' => __('heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'setting' => 'vw_stock_images_pro_premium_features_sec_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'setting' => 'vw_stock_images_pro_premium_features_sec_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_premium_features_sec_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_premium_features_sec',
			'settings' => 'vw_stock_images_pro_premium_features_sec_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_premium_features_sec_feature_settings',
	array(
		'label' => __('Section heading Text Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_heading_text',
	array(
		'label' => __('Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'setting' => 'vw_stock_images_pro_premium_features_sec_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'setting' => 'vw_stock_images_pro_premium_features_sec_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_premium_features_sec_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_premium_features_sec',
			'settings' => 'vw_stock_images_pro_premium_features_sec_heading_text_color',
		)
	)
);
for ($i = 1; $i <= 4; $i++ ) {

	$wp_customize->add_setting('vw_stock_images_pro_premium_features_sec_image' . $i, array(
		'default' => get_theme_mod('vw_stock_images_pro_premium_features_sec_image' . $i),
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_premium_features_sec_image' . $i, array(
		'label' => __('Feature ' . $i . ' Image', 'vw-stock-images-pro'),
		'description' => __('choose image', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'settings' => 'vw_stock_images_pro_premium_features_sec_image' . $i,
	)));

	$wp_customize->add_setting(
		'vw_stock_images_pro_premium_features_sec_feature_title_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_premium_features_sec_feature_title_' . $i,
		array(
			'label' => __('Feature ' . $i . ' Title', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_premium_features_sec',
			'setting' => 'vw_stock_images_pro_premium_features_sec_feature_title_' . $i,
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'vw_stock_images_pro_premium_features_sec_feature_desc_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_premium_features_sec_feature_desc_' . $i,
		array(
			'label' => __('Feature ' . $i . ' Descreption', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_premium_features_sec',
			'setting' => 'vw_stock_images_pro_premium_features_sec_feature_desc_' . $i,
			'type' => 'text'
		)
	);


}


$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_premium_features_sec_feature_heading_settings',
	array(
		'label' => __('Feature Heading settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec'
	)
));





$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_feature_title_font_family',
	array(
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_feature_title_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'setting' => 'vw_stock_images_pro_premium_features_sec_feature_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_premium_features_sec_feature_title_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_premium_features_sec',
			'settings' => 'vw_stock_images_pro_premium_features_sec_feature_title_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_premium_features_sec_feature_settings',
	array(
		'label' => __('Feature Descreption', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_desc_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_feature_desc_font_family',
	array(
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_desc_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_premium_features_sec_feature_desc_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_premium_features_sec',
		'setting' => 'vw_stock_images_pro_premium_features_sec_feature_desc_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_premium_features_sec_feature_desc_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_premium_features_sec_feature_desc_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_premium_features_sec',
			'settings' => 'vw_stock_images_pro_premium_features_sec_feature_desc_color',
		)
	)
);

/*-----------------------Design And Earn Section Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_design_and_earn_sec', array(
	'title' => __('Design And Earn Section', 'vw-stock-images-pro'),
	'description' => __('Add Why Choose Us setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_design_and_earn_enable', array(
	'selector' => '#choose-sec .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_design_and_earn_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_design_and_earn_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_design_and_earn_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_design_and_earn_sec',
	'settings' => 'vw_stock_images_pro_design_and_earn_bgcolor',
)));

$wp_customize->add_setting('vw_stock_images_pro_design_and_earn_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_design_and_earn_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_premium_features_sec',
	'settings' => 'vw_stock_images_pro_design_and_earn_bgimage'
)));

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_design_and_earn_sec_heading_settings',
	array(
		'label' => __('Section Heading', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_heading',
	array(
		'label' => __('heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'setting' => 'vw_stock_images_pro_design_and_earn_sec_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'setting' => 'vw_stock_images_pro_design_and_earn_sec_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_design_and_earn_sec_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_design_and_earn_sec',
			'settings' => 'vw_stock_images_pro_design_and_earn_sec_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_design_and_earn_sec_heading_text_settings',
	array(
		'label' => __('Section Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_heading_text',
	array(
		'label' => __('heading_text Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'setting' => 'vw_stock_images_pro_design_and_earn_sec_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'setting' => 'vw_stock_images_pro_design_and_earn_sec_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_design_and_earn_sec_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_design_and_earn_sec',
			'settings' => 'vw_stock_images_pro_design_and_earn_sec_heading_text_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_design_and_earn_sec_button_settings',
	array(
		'label' => __('Section BUtton Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_button',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_button',
	array(
		'label' => __('Button Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'setting' => 'vw_stock_images_pro_design_and_earn_sec_button',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_button_font_family',
	array(
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_design_and_earn_sec_button_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_design_and_earn_sec',
		'setting' => 'vw_stock_images_pro_design_and_earn_sec_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_design_and_earn_sec_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_design_and_earn_sec_button_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_design_and_earn_sec',
			'settings' => 'vw_stock_images_pro_design_and_earn_sec_button_color',
		)
	)
);
$wp_customize->add_setting('vw_stock_images_pro_design_and_earn_sec_image', array(
	'default' => get_theme_mod('vw_stock_images_pro_design_and_earn_sec_image'),
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_design_and_earn_sec_image', array(
	'label' => __('Section Image', 'vw-stock-images-pro'),
	'description' => __('choose image', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_design_and_earn_sec',
	'settings' => 'vw_stock_images_pro_design_and_earn_sec_image',
)));


/*-----------------------Top Contributers Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_contributer_sec', array(
	'title' => __('Top Contributers', 'vw-stock-images-pro'),
	'description' => __('Top Contributers setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_contributer_enable', array(
	'selector' => '#counter-sec .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_contributer_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_contributer_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_contributer_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_contributer_sec',
	'settings' => 'vw_stock_images_pro_contributer_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_contributer_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_contributer_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_contributer_sec',
	'settings' => 'vw_stock_images_pro_contributer_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_contributer_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_contributer_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_contributer_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_contributer_sec_contri_heading_settings',
	array(
		'label' => __('Section Heading Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_heading',
	array(
		'label' => __('Contributer Heading', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_contributer_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_contributer_sec_contri_heading_text_settings',
	array(
		'label' => __('Section Heading Text Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_heading_text',
	array(
		'label' => __('contri_heading_text Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_contributer_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_heading_text_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_contributer_sec_contri_button_settings',
	array(
		'label' => __('Button Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_button',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_button',
	array(
		'label' => __('Section Button Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_button',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_button_font_family',
	array(
		'section' => 'vw_stock_images_pro_contributer_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_button_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_button_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_button_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_button_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_button_bgcolor',
		array(
			'label' => __('Backgroun Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_button_bgcolor',
		)
	)
);



$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_name_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_contributer_sec_contri_name_settings',
	array(
		'label' => __('Contributer Name Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_name_font_family',
	array(
		'section' => 'vw_stock_images_pro_contributer_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_name_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_name_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_name_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_name_color',
		)
	)
);




$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_location_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_contributer_sec_contri_location_settings',
	array(
		'label' => __('Section Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_location_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_location_font_family',
	array(
		'section' => 'vw_stock_images_pro_contributer_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_location_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_contributer_sec_contri_location_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contributer_sec',
		'setting' => 'vw_stock_images_pro_contributer_sec_contri_location_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_location_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_location_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_location_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_contributer_sec_contri_vontributer_card_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_contributer_sec_contri_vontributer_card_bgcolor',
		array(
			'label' => __('Contributer Card Background', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_contributer_sec',
			'settings' => 'vw_stock_images_pro_contributer_sec_contri_vontributer_card_bgcolor',
		)
	)
);
/*-----------------------Newsletter Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_newsletter_sec', array(
	'title' => __('Newsletter Section', 'vw-stock-images-pro'),
	'description' => __('Add Newsletter setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_radio_newsletter_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_radio_newsletter_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_radio_newsletter_enable', array(
	'selector' => '#our-newsletter .container-fluid',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_radio_newsletter_enable',
));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_bg_color_one', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_bg_color_one', array(
	'label' => __('Background Color One', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_bg_color_one',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_bgimage'
)));

$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_newsletter_section_heading_settings',
	array(
		'label' => __('Section Heading Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_heading',
	array(
		'label' => __('contri_location Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'setting' => 'vw_stock_images_pro_newsletter_section_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'setting' => 'vw_stock_images_pro_newsletter_section_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_newsletter_section_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_newsletter_sec',
			'settings' => 'vw_stock_images_pro_newsletter_section_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_newsletter_section_heading_text_settings',
	array(
		'label' => __('Section Heading Text Setings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_heading_text',
	array(
		'label' => __('contri_location Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'setting' => 'vw_stock_images_pro_newsletter_section_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'setting' => 'vw_stock_images_pro_newsletter_section_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_newsletter_section_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_newsletter_sec',
			'settings' => 'vw_stock_images_pro_newsletter_section_heading_text_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_form_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_newsletter_section_form_button_settings',
	array(
		'label' => __('Form Button Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_form_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_form_button_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_form_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_section_form_button_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'setting' => 'vw_stock_images_pro_newsletter_section_form_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_newsletter_section_form_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_newsletter_section_form_button_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_newsletter_sec',
			'settings' => 'vw_stock_images_pro_newsletter_section_form_button_color',
		)
	)
);

// -----------------Our Client section------------------

$wp_customize->add_section('vw_stock_images_pro_our_pricing_sec', array(
	'title' => __('Pricing PLans Section', 'vw-stock-images-pro'),
	'description' => __('Add Our Client setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_radio_our_pricing_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_radio_our_pricing_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_radio_our_pricing_enable', array(
	'selector' => '#our-client .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_radio_our_pricing_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_color', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_pricing_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_image_bg_attachement', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_image_bg_attachement', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_heading_settings',
	array(
		'label' => __('Section Heading Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_heading',
	array(
		'label' => __('contri_location Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_heading_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_heading_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_heading_text_settings',
	array(
		'label' => __('Section heading_text Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_heading_text',
	array(
		'label' => __('contri_location Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_heading_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_heading_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_heading_text_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_heading_text_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_heading_text_color',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_headings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_table_headings_settings',
	array(
		'label' => __('Section Table Headings Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_headings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_table_headings_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_headings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_table_headings_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_table_headings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_headings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_table_headings_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_table_headings_color',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_items_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_table_items_settings',
	array(
		'label' => __('Section Table Items Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_items_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_table_items_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_items_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_table_items_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_table_items_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_items_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_table_items_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_table_items_color',
		)
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_table_items_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_table_items_bgcolor',
		array(
			'label' => __('Table Background Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_table_items_bgcolor',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_plan_title_settings',
	array(
		'label' => __('Plan Title Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_title_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_title_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_plan_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_plan_title_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_plan_title_color',
		)
	)
);



$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_price_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_plan_price_settings',
	array(
		'label' => __('Plan Price', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_price_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_price_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_price_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_price_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_plan_price_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_price_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_plan_price_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_plan_price_color',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_per_month_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_plan_per_month_settings',
	array(
		'label' => __('Per Mnth Text Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_per_month_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_per_month_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_per_month_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_per_month_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_plan_per_month_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_per_month_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_plan_per_month_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_plan_per_month_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_deatils_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_plan_deatils_settings',
	array(
		'label' => __('Section plan_deatils Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_deatils_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_deatils_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_deatils_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plan_deatils_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_plan_deatils_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plan_deatils_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_plan_deatils_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_plan_deatils_color',
		)
	)
);


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plans_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_plans_button_settings',
	array(
		'label' => __('Section Plan Button Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plans_button',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plans_button',
	array(
		'label' => __('contri_location Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_plans_button',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plans_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plans_button_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plans_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_plans_button_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_plans_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_plans_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_plans_button_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_plans_button_color',
		)
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_best_planTag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_best_planTag_settings',
	array(
		'label' => __('Best Plan Tag Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_best_planTag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_best_planTag',
	array(
		'label' => __('contri_location Text', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_best_planTag',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_best_planTag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_best_planTag_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_best_planTag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_section_best_planTag_font_size',
	array(
		'label' => __('Font Size', 'vw-stock-images-pro'),
		'description' => __('Add font size in px', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_section_best_planTag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_best_planTag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_stock_images_pro_our_pricing_section_best_planTag_color',
		array(
			'label' => __('Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'settings' => 'vw_stock_images_pro_our_pricing_section_best_planTag_color',
		)
	)
);

/*-----------------------Partners Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_partners_sec', array(
	'title' => __('Partners Section', 'vw-stock-images-pro'),
	'description' => __('Partners Section', 'vw-stock-images-pro'),
	'priority' => null,
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_partners_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_partners_enable',
	array(
		'type' => 'radio',
		'label' => 'Do you want this section',
		'section' => 'vw_stock_images_pro_partners_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_partners_enable', array(
	'selector' => '#partner .container',
	'render_callback' => 'optical_lens_shop_customize_partial_vw_stock_images_pro_partners_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_partners_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_partners_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'settings' => 'vw_stock_images_pro_partners_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_partners_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_partners_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'settings' => 'vw_stock_images_pro_partners_bgimage'
)));
$wp_customize->add_setting('vw_stock_images_pro_partners_bg_image_attachment', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_partners_bg_image_attachment', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));

$wp_customize->add_setting('vw_stock_images_pro_partners_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_partners_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'setting' => 'vw_stock_images_pro_partners_heading',
	'type' => 'text'
));

$wp_customize->add_setting('vw_stock_images_pro_partners_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_partners_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'setting' => 'vw_stock_images_pro_partners_paragraph',
	'type' => 'text'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_partners_section_typoghraphy',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_partners_section_typoghraphy',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_partners_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_partners_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_partners_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'settings' => 'vw_stock_images_pro_partners_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_partners_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_partners_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_partners_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_partners_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_partners_heading_font_size', array(
	'label' => __('Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'setting' => 'vw_stock_images_pro_partners_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_partners_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_partners_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'settings' => 'vw_stock_images_pro_partners_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_partners_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_partners_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_partners_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_partners_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_partners_paragraph_font_size', array(
	'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'setting' => 'vw_stock_images_pro_partners_paragraph_font_size',
	'type' => 'number'
));


$wp_customize->add_setting('vw_stock_images_pro_partners_number', array(
	'default' => __('', 'vw-stock-images-pro'),
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_partners_number', array(
	'label' => __('Partner Number', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_partners_sec',
	'setting' => 'vw_stock_images_pro_partners_number',
	'type' => 'Number'
));
for ($i = 1; $i <= $no_cards; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_partners_number_settings' . $i,
		array(
			'default' => '',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
		)
	);
	$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'vw_stock_images_pro_partners_number_settings' . $i,
		array(
			'label' => __('Partner Image ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_partners_sec'
		)
	));
	$wp_customize->add_setting('vw_stock_images_pro_partners_images' . $i, array(
		'default' => get_theme_mod('vw_stock_images_pro_partners_images' . $i),
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_partners_images' . $i, array(
		'label' => __('Partner Image', 'vw-stock-images-pro'),
		'description' => __('choose image', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_partners_sec',
		'settings' => 'vw_stock_images_pro_partners_images' . $i,
	)));
}

// --------------- Post General Settings ---------------
$wp_customize->add_section('vw_stock_images_pro_post_general_settings', array(
	'title' => __('Blog Page Settings', 'vw-stock-images-pro'),
	'description' => __('See section settings below and do check documentation too.', 'vw-stock-images-pro'),
	'priority' => null,
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_date',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_date',
	array(
		'label' => esc_html__('Show or Hide Post Date', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_comments',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_comments',
	array(
		'label' => esc_html__('Show or Hide Comments', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_category_setting',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_category_setting',
	array(
		'label' => esc_html__('Show or Hide Category', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_author',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_author',
	array(
		'label' => esc_html__('Show or Hide Author', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_share',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_share',
	array(
		'label' => esc_html__('Show or Hide Share Icons', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_share_facebook',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_share_facebook',
	array(
		'label' => esc_html__('Post Share Facebook', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_share_linkedin',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_share_linkedin',
	array(
		'label' => esc_html__('Post Share Linkedin', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_post_general_settings_post_share_twitter',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_post_general_settings_post_share_twitter',
	array(
		'label' => esc_html__('Post Share Twitter', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_blog_page_color_typoghraphy',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_blog_page_color_typoghraphy',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_general_settings'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_blog_page_meta_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_blog_page_meta_color', array(
	'label' => __('Meta Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_general_settings',
	'settings' => 'vw_stock_images_pro_blog_page_meta_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_blog_page_meta_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_blog_page_meta_font_family',
	array(
		'section' => 'vw_stock_images_pro_post_general_settings',
		'label' => __('Meta Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_blog_page_meta_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_blog_page_meta_font_size', array(
	'label' => __('Meta Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_general_settings',
	'setting' => 'vw_stock_images_pro_blog_page_meta_font_size',
	'type' => 'number'
));


$wp_customize->add_setting('vw_stock_images_pro_blog_page_content_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_blog_page_content_color', array(
	'label' => __('Content Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_general_settings',
	'settings' => 'vw_stock_images_pro_blog_page_content_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_blog_page_content_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_blog_page_content_font_family',
	array(
		'section' => 'vw_stock_images_pro_post_general_settings',
		'label' => __('Content Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_blog_page_content_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_blog_page_content_font_size', array(
	'label' => __('Content Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_general_settings',
	'setting' => 'vw_stock_images_pro_blog_page_content_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_blog_page_inner_header_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_blog_page_inner_header_color', array(
	'label' => __('Question Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_general_settings',
	'settings' => 'vw_stock_images_pro_blog_page_inner_header_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_blog_page_inner_header_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_blog_page_inner_header_font_family',
	array(
		'section' => 'vw_stock_images_pro_post_general_settings',
		'label' => __('Question Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_blog_page_inner_header_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_blog_page_inner_header_font_size', array(
	'label' => __('Question Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_general_settings',
	'setting' => 'vw_stock_images_pro_blog_page_inner_header_font_size',
	'type' => 'number'
));


// Page Title layout

$wp_customize->add_section('vw_stock_images_pro_post_product_general_settings', array(
	'title' => __('General Settings', 'vw-stock-images-pro'),
	'description' => __('See section settings below and do check documentation too.', 'vw-stock-images-pro'),
	'priority' => null,
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_products_spinner_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_products_spinner_settings',
	array(
		'label' => __('Spinner Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_product_general_settings'
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_products_spinner_enable',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_products_spinner_enable',
	array(
		'label' => esc_html__('Spinner Enable/Disable', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_product_general_settings'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_products_spinner_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_products_spinner_bgcolor', array(
	'label' => __('Spinner Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'settings' => 'vw_stock_images_pro_products_spinner_bgcolor',
)));

/* --------- Spinner Opacity  ----------- */

$wp_customize->add_setting('vw_stock_images_pro_spinner_opacity_color', array(
	'default' => '1',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));

$wp_customize->add_control('vw_stock_images_pro_spinner_opacity_color', array(
	'label' => esc_html__('Spinner Loader Opacity', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'type' => 'select',
	'settings' => 'vw_stock_images_pro_spinner_opacity_color',
	'choices' => array(
		'0' => esc_attr('0', 'vw-stock-images-pro'),
		'0.1' => esc_attr('0.1', 'vw-stock-images-pro'),
		'0.2' => esc_attr('0.2', 'vw-stock-images-pro'),
		'0.3' => esc_attr('0.3', 'vw-stock-images-pro'),
		'0.4' => esc_attr('0.4', 'vw-stock-images-pro'),
		'0.5' => esc_attr('0.5', 'vw-stock-images-pro'),
		'0.6' => esc_attr('0.6', 'vw-stock-images-pro'),
		'0.7' => esc_attr('0.7', 'vw-stock-images-pro'),
		'0.8' => esc_attr('0.8', 'vw-stock-images-pro'),
		'0.9' => esc_attr('0.9', 'vw-stock-images-pro'),
		'1' => esc_attr('1', 'vw-stock-images-pro')
	),
));

$wp_customize->add_setting(
	'vw_stock_images_pro_general_settings_scroll_top',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_general_settings_scroll_top',
	array(
		'label' => __('Scroll Top Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_product_general_settings'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_genral_section_show_scroll_top',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_stock_images_pro_switch_sanitization'
	)
);
$wp_customize->add_control(new vw_stock_images_pro_Toggle_Switch_Custom_control(
	$wp_customize,
	'vw_stock_images_pro_genral_section_show_scroll_top',
	array(
		'label' => esc_html__('Show or Hide Scroll Top', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_post_product_general_settings'
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_genral_section_show_scroll_top_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new vw_stock_images_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'vw_stock_images_pro_genral_section_show_scroll_top_icon',
		array(
			'settings' => 'vw_stock_images_pro_genral_section_show_scroll_top_icon',
			'section' => 'vw_stock_images_pro_post_product_general_settings',
			'type' => 'icon',
			'label' => esc_html__('Choose Scroll Top Icon', 'vw-stock-images-pro'),
		)
	)
);

$wp_customize->add_setting('vw_stock_images_pro_general_scroll_top_icon_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_general_scroll_top_icon_color', array(
	'label' => __('Scroll Top Icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'settings' => 'vw_stock_images_pro_general_scroll_top_icon_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_general_scroll_top_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_general_scroll_top_bgcolor', array(
	'label' => __('Scroll Top Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'settings' => 'vw_stock_images_pro_general_scroll_top_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_general_scroll_top_hover_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_general_scroll_top_hover_bgcolor', array(
	'label' => __('Scroll Top Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'settings' => 'vw_stock_images_pro_general_scroll_top_hover_bgcolor',
)));

$wp_customize->add_setting('vw_stock_images_pro_scroll_top_layout', array(
	'default' => __('Right', 'vw-stock-images-pro'),
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(new vw_stock_images_pro_Image_Radio_Control($wp_customize, 'vw_stock_images_pro_scroll_top_layout', array(
	'type' => 'select',
	'label' => __('Scroll Top Layouts', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'choices' => array(
		'Left' => get_template_directory_uri() . '/assets/images/layout1.png',
		'Center' => get_template_directory_uri() . '/assets/images/layout2.png',
		'Right' => get_template_directory_uri() . '/assets/images/layout3.png',
	)
)));

$wp_customize->add_setting('vw_stock_images_pro_scroll_border_radius', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('vw_stock_images_pro_scroll_border_radius', array(
	'label' => __('Scroll To Top Border Radius', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_scroll_width', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('vw_stock_images_pro_scroll_width', array(
	'label' => __('Scroll To Top Width', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_scroll_height', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('vw_stock_images_pro_scroll_height', array(
	'label' => __('Scroll To Top Height', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_post_product_general_settings',
	'type' => 'number'
));
$wp_customize->add_setting(
	'vw_stock_images_pro_site_frame_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

