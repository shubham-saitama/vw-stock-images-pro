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

/*-----------------------Professional Services Settings--------------------------*/

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
// -----------------------------Counter Offer Section-------------------------------------
$wp_customize->add_section('vw_stock_images_pro_counter_offer_sec', array(
	'title' => __('Counter Offer Section', 'vw-stock-images-pro'),
	'description' => __('Counter Offer setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_counter_offer_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_counter_offer_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_offer_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_counter_offer_enable', array(
	'selector' => '#counter-offer .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_counter_offer_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_counter_offer_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_counter_offer_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_counter_offer_section_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_offer_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_img', array(
	'default' => get_theme_mod('vw_stock_images_pro_counter_offer_img'),
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_counter_offer_img', array(
	'label' => __('Left Man one', 'vw-stock-images-pro'),
	'description' => __('Add image size maximum 295×280', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_img'
)));

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_sec_btn_text', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_sec_btn_text', array(
	'label' => __('Get Start Button', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_sec_btn_text',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_sec_btn_url', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_sec_btn_url', array(
	'label' => __('Get Start Button Url', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_sec_btn_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_clock_timer_end', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_clock_timer_end', array(
	'label' => __('Timer Count', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_clock_timer_end',
	'type' => 'text'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_counter_offer_section_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_counter_offer_section_color_font_settings',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_offer_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_bg_color_one', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_bg_color_one', array(
	'label' => __('Background Color One', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_bg_color_one',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_bg_color_two', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_bg_color_two', array(
	'label' => __('Background Color Two', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_bg_color_two',
)));

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_heading_font_size', array(
	'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_offer_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_offer_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_paragraph_font_size', array(
	'label' => __(' Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_offer_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_offer_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_btn_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_btn_color', array(
	'label' => __('Button Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_btn_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_btn_font_size', array(
	'label' => __(' Button Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_btn_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_btn_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_offer_btn_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_offer_sec',
		'label' => __('Button Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_btn_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_btn_bg_color', array(
	'label' => __('Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_btn_hover_bg_color', array(
	'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_btn_hover_bg_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_counter_number_color', array(
	'label' => __('Counter Number Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_counter_number_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_counter_number_font_size', array(
	'label' => __(' Counter Number Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_counter_number_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_offer_counter_number_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_offer_sec',
		'label' => __('Counter Number Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_text_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_counter_number_text_color', array(
	'label' => __('Counter Number Day Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_counter_number_text_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_text_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_offer_counter_number_text_font_size', array(
	'label' => __(' Counter Number Day Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'setting' => 'vw_stock_images_pro_counter_offer_counter_number_text_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_text_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_offer_counter_number_text_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_offer_sec',
		'label' => __('Counter Number  Day Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_counter_offer_counter_number_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_offer_counter_number_bg_color', array(
	'label' => __('Counter Number Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_offer_sec',
	'settings' => 'vw_stock_images_pro_counter_offer_counter_number_bg_color',
)));

/*-----------------------Why Choose Section Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_why_choose_us_sec', array(
	'title' => __('Why Choose Us Section', 'vw-stock-images-pro'),
	'description' => __('Add Why Choose Us setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_why_choose_us_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_why_choose_us_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_why_choose_us_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_why_choose_us_enable', array(
	'selector' => '#choose-sec .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_why_choose_us_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_why_choose_us_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_us_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_us_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_us_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_why_choose_us_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_us_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_why_choose_us_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_us_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_why_choose_us_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_why_choose_us_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_why_choose_us_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_why_choose_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_heading', array(
	'label' => __('Why Choose Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_stock_images_pro_why_choose_heading',
	'type' => 'text'
));

$wp_customize->add_setting('vw_stock_images_pro_why_choose_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_paragraph', array(
	'label' => __('Why Choose Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_stock_images_pro_why_choose_paragraph',
	'type' => 'text'
));

$no_cards = get_theme_mod('vw_stock_images_pro_why_choose_number');

$wp_customize->add_setting('vw_stock_images_pro_why_choose_number', array(
	'default' => __('', 'vw-stock-images-pro'),
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_number', array(
	'label' => __('Counter Number', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_stock_images_pro_why_choose_number',
	'type' => 'Number'
));

for ($i = 1; $i <= $no_cards; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_education_register_counter_number_settings' . $i,
		array(
			'default' => '',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
		)
	);
	$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'vw_stock_images_pro_education_register_counter_number_settings' . $i,
		array(
			'label' => __('Points ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_why_choose_us_sec'
		)
	));
	$wp_customize->add_setting('vw_stock_images_pro_why_choose_icon_img' . $i, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_why_choose_icon_img' . $i, array(
		'label' => __('Check Icon Image', 'vw-stock-images-pro'),
		'description' => __('choose image', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_why_choose_us_sec',
		'settings' => 'vw_stock_images_pro_why_choose_icon_img' . $i,
	)));
	$wp_customize->add_setting('vw_stock_images_pro_why_choose_title' . $i, array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_why_choose_title' . $i, array(
		'label' => __('Why Choose Paragraph', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_why_choose_us_sec',
		'setting' => 'vw_stock_images_pro_why_choose_title' . $i,
		'type' => 'text'
	));
}

$wp_customize->add_setting('vw_stock_images_pro_why_choose_img_one', array(
	'default' => get_theme_mod('vw_stock_images_pro_why_choose_img_one'),
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_why_choose_img_one', array(
	'label' => __('Choose Image One', 'vw-stock-images-pro'),
	'description' => __('Add image size maximum 490x360', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_img_one'
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_img_video_bg_img', array(
	'default' => get_theme_mod('vw_stock_images_pro_why_choose_img_video_bg_img'),
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_why_choose_img_video_bg_img', array(
	'label' => __('Choose Video Background Image', 'vw-stock-images-pro'),
	'description' => __('Add image size maximum 356x208', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_img_video_bg_img'
)));


$wp_customize->add_setting(
	'vw_stock_images_pro_why_choose_video_play_icon',
	array(
		'default' => get_theme_mod('vw_stock_images_pro_why_choose_video_play_icon'),
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new vw_stock_images_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'vw_stock_images_pro_why_choose_video_play_icon',
		array(
			'settings' => 'vw_stock_images_pro_why_choose_video_play_icon',
			'section' => 'vw_stock_images_pro_why_choose_us_sec',
			'type' => 'icon',
			'label' => esc_html__('Choose  Icon', 'vw-stock-images-pro'),
		)
	)
);

$wp_customize->add_setting('vw_rental_vacation_pro_video_box_video_url', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_rental_vacation_pro_video_box_video_url', array(
	'label' => __('Video Url', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_rental_vacation_pro_video_box_video_url',
	'type' => 'text'
));
$wp_customize->add_setting(
	'vw_stock_images_pro_why_choose_us_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_why_choose_us_color_font_settings',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_why_choose_us_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_why_choose_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_heading_font_size', array(
	'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_stock_images_pro_why_choose_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_why_choose_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_why_choose_us_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_why_choose_para_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_para_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_para_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_para_font_size', array(
	'label' => __(' Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_stock_images_pro_why_choose_para_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_para_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_why_choose_para_font_family',
	array(
		'section' => 'vw_stock_images_pro_why_choose_us_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_why_choose_points_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_points_color', array(
	'label' => __('Why Choose Points Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_points_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_points_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_why_choose_points_font_size', array(
	'label' => __(' Why Choose Points Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'setting' => 'vw_stock_images_pro_why_choose_points_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_points_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_why_choose_points_font_family',
	array(
		'section' => 'vw_stock_images_pro_why_choose_us_sec',
		'label' => __('Why Choose Points Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_why_choose_img_one_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_img_one_background_color', array(
	'label' => __('Image Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_img_one_background_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_img_video_overlay_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_img_video_overlay_color', array(
	'label' => __('Image overlay Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_img_video_overlay_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_video_play_icon_border_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_video_play_icon_border_color', array(
	'label' => __('Video Icon Border Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_video_play_icon_border_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_video_play_icon_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_video_play_icon_color', array(
	'label' => __('Video Icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_video_play_icon_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_why_choose_video_play_icon_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_why_choose_video_play_icon_background_color', array(
	'label' => __('Video Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_why_choose_us_sec',
	'settings' => 'vw_stock_images_pro_why_choose_video_play_icon_background_color',
)));



/*-----------------------Counter Section Settings--------------------------*/
$wp_customize->add_section('vw_stock_images_pro_counter_sec', array(
	'title' => __('Counter Section', 'vw-stock-images-pro'),
	'description' => __('Counter Section setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting(
	'vw_stock_images_pro_counter_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_counter_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_counter_enable', array(
	'selector' => '#counter-sec .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_counter_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_counter_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'settings' => 'vw_stock_images_pro_counter_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_counter_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'settings' => 'vw_stock_images_pro_counter_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_counter_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_counter_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_counter_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_counter_section_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec'
	)
));
$no_cards = get_theme_mod('vw_stock_images_pro_counter_number');

$wp_customize->add_setting('vw_stock_images_pro_counter_number', array(
	'default' => __('', 'vw-stock-images-pro'),
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_number', array(
	'label' => __('Counter Number', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'setting' => 'vw_stock_images_pro_counter_number',
	'type' => 'Number'
));

for ($i = 1; $i <= $no_cards; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_counter_card_settings' . $i,
		array(
			'default' => '',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
		)
	);
	$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'vw_stock_images_pro_counter_card_settings' . $i,
		array(
			'label' => __('Cards ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_counter_sec'
		)
	));
	$wp_customize->add_setting('vw_stock_images_pro_counter_image' . $i, array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_counter_image' . $i, array(
		'label' => __('Image', 'vw-stock-images-pro'),
		'description' => __('choose image', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec',
		'settings' => 'vw_stock_images_pro_counter_image' . $i,
	)));
	$wp_customize->add_setting('vw_stock_images_pro_counter_no' . $i, array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_counter_no' . $i, array(
		'label' => __('Why Choose Paragraph', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec',
		'setting' => 'vw_stock_images_pro_counter_no' . $i,
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_counter_no_suffix' . $i, array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_counter_no_suffix' . $i, array(
		'label' => __('Suffix', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec',
		'setting' => 'vw_stock_images_pro_counter_no_suffix' . $i,
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_counter_title' . $i, array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_counter_title' . $i, array(
		'label' => __('Counter Title', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec',
		'setting' => 'vw_stock_images_pro_counter_title' . $i,
		'type' => 'text'
	));
}

$wp_customize->add_setting(
	'vw_stock_images_pro_counter_section_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_counter_section_color_font_settings',
	array(
		'label' => __('Section Color & Font setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_counter_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_counter_no_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_no_color', array(
	'label' => __('Counter Number Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'settings' => 'vw_stock_images_pro_counter_no_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_no_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_no_font_size', array(
	'label' => __(' Counter Number Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'setting' => 'vw_stock_images_pro_counter_no_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_no_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_no_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_sec',
		'label' => __('Counter Number Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_counter_title_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_title_color', array(
	'label' => __('Counter Title Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'settings' => 'vw_stock_images_pro_counter_title_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_counter_title_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_counter_title_font_size', array(
	'label' => __(' Counter Title Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'setting' => 'vw_stock_images_pro_counter_title_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_counter_title_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_counter_title_font_family',
	array(
		'section' => 'vw_stock_images_pro_counter_sec',
		'label' => __('Counter Title Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_counter_card_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_card_background_color', array(
	'label' => __('Counter Card Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_counter_sec',
	'settings' => 'vw_stock_images_pro_counter_card_background_color',
)));
// category_slider page settings start
$wp_customize->add_section('vw_stock_images_pro_category_slider_page_settings', array(
	'title' => __('category_slider Page Counter Settings', 'vw-stock-images-pro'),
	'description' => __('category_slider Page Section setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting('vw_stock_images_pro_counter_card_background_color_category_slider', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_counter_card_background_color_category_slider', array(
	'label' => __('Counter Card Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_category_slider_page_settings',
	'settings' => 'vw_stock_images_pro_counter_card_background_color_category_slider',
)));
// ---------------------category_slider page settings end---------------------

/*-----------------------Popular Product Settings--------------------------*/
$wp_customize->add_section('vw_stock_images_pro_popular_product_sec', array(
	'title' => __('Popular Product Section', 'vw-stock-images-pro'),
	'description' => __('Add Popular Product setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_popular_products_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_popular_products_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_popular_products_enable', array(
	'selector' => '#popular-product .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_popular_products_enable',
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_popular_products_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_popular_products_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_popular_products_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_popular_products_section_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_popular_product_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_popular_products_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_text', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_btn_text', array(
	'label' => __('View More Button', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_btn_text',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_url', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_btn_url', array(
	'label' => __('View More Button Url', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_btn_url',
	'type' => 'text'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_popular_products_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_popular_products_color_font_settings',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_popular_product_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_section_popular_products_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_section_popular_products_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_section_popular_products_heading_font_size', array(
	'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_section_popular_products_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_section_popular_products_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_section_popular_products_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_section_popular_products_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_section_popular_products_paragraph_font_size', array(
	'label' => __(' Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_section_popular_products_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_section_popular_products_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);


$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_btn_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_btn_font_size', array(
	'label' => __(' Button Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_btn_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_popular_products_btn_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Button Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_btn_bg_color', array(
	'label' => __('Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_btn_hover_bg_color', array(
	'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_btn_hover_bg_color',
)));


$wp_customize->add_setting(
	'vw_stock_images_pro_popular_products_card_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_popular_products_card_settings',
	array(
		'label' => __('Section Card Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_popular_product_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_cards_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_section_popular_products_cards_heading_color', array(
	'label' => __('Product Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_section_popular_products_cards_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_cards_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_section_popular_products_cards_heading_font_size', array(
	'label' => __(' Product Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_section_popular_products_cards_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_cards_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_section_popular_products_cards_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Product Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_cards_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_section_popular_products_cards_paragraph_color', array(
	'label' => __('Product Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_section_popular_products_cards_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_cards_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_section_popular_products_cards_paragraph_font_size', array(
	'label' => __(' Product Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_section_popular_products_cards_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_section_popular_products_cards_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_section_popular_products_cards_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Product Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_popular_products_regular_price_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_regular_price_color', array(
	'label' => __('Regular Price Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_regular_price_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_regular_price_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_regular_price_font_size', array(
	'label' => __(' Regular Price Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_regular_price_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_regular_price_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_popular_products_regular_price_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Regular Price Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_popular_products_sale_price_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_sale_price_color', array(
	'label' => __('Sale Price Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_sale_price_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_sale_price_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_sale_price_font_size', array(
	'label' => __(' Sale Price Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_sale_price_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_sale_price_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_popular_products_sale_price_font_family',
	array(
		'section' => 'vw_stock_images_pro_popular_product_sec',
		'label' => __('Sale Price Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_popular_products_card_border_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_card_border_color', array(
	'label' => __('Card Border Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_card_border_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_image_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_image_background_color', array(
	'label' => __('Product Image Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_image_background_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_hover_image_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_hover_image_background_color', array(
	'label' => __('Product Hover Image Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_hover_image_background_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_card_hover_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_card_hover_background_color', array(
	'label' => __('Product Card Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_card_hover_background_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_card_hover_text_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_card_hover_text_color', array(
	'label' => __('Product Card Hover Text Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_card_hover_text_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_popular_products_icon_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_icon_color', array(
	'label' => __('Add to cart & wishlist icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_icon_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_icon_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_popular_products_icon_font_size', array(
	'label' => __(' Add to cart & wishlist icon Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'setting' => 'vw_stock_images_pro_popular_products_icon_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_popular_products_icon_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_popular_products_icon_bg_color', array(
	'label' => __('Add to cart & wishlist icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_popular_product_sec',
	'settings' => 'vw_stock_images_pro_popular_products_icon_bg_color',
)));
/*-----------------------Faq Section Settings--------------------------*/
$wp_customize->add_section('vw_stock_images_pro_faq_sec', array(
	'title' => __('Faq Section', 'vw-stock-images-pro'),
	'description' => __('Add Faq setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting(
	'vw_stock_images_pro_faq_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_faq_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_faq_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);


$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_faq_enable', array(
	'selector' => '#faq-sec .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_faq_enable',
));
$wp_customize->add_setting('vw_stock_images_pro_faq_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_faq_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_bgimage'
)));

$wp_customize->add_setting('vw_stock_images_pro_faq_bgimage_setting', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_faq_bgimage_setting', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_faq_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_faq_section_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_faq_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_faq_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_heading', array(
	'label' => __('Faq Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_paragraph', array(
	'label' => __('Faq Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_paragraph',
	'type' => 'text'
));

$no_cards = get_theme_mod('vw_stock_images_pro_faq_number');

$wp_customize->add_setting('vw_stock_images_pro_faq_number', array(
	'default' => __('', 'vw-stock-images-pro'),
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_number', array(
	'label' => __('Counter Number', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_number',
	'type' => 'Number'
));

for ($i = 1; $i <= $no_cards; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_faq_number_settings' . $i,
		array(
			'default' => '',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
		)
	);
	$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'vw_stock_images_pro_faq_number_settings' . $i,
		array(
			'label' => __('FAQ ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_faq_sec'
		)
	));

	$wp_customize->add_setting('vw_stock_images_pro_faq_que' . $i, array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_faq_que' . $i, array(
		'label' => __('question', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_faq_sec',
		'setting' => 'vw_stock_images_pro_faq_que' . $i,
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_faq_ans' . $i, array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_faq_ans' . $i, array(
		'label' => __('Answer', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_faq_sec',
		'setting' => 'vw_stock_images_pro_faq_ans' . $i,
		'type' => 'text'
	));
}
$wp_customize->add_setting('vw_stock_images_pro_faq_question_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_question_heading', array(
	'label' => __('Inner Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_question_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_question_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_question_paragraph', array(
	'label' => __('Inner Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_question_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_contact_shortcode', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_contact_shortcode', array(
	'label' => __('Contact Shortcode', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_contact_shortcode',
	'type' => 'text'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_faq_section_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_faq_section_color_font_settings',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_faq_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_faq_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_heading_font_size', array(
	'label' => __('Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_faq_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_paragraph_font_size', array(
	'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_faq_question_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_question_color', array(
	'label' => __('Question Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_question_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_question_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_question_font_size', array(
	'label' => __('Question Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_question_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_question_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_question_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Question Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_faq_answer_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_answer_color', array(
	'label' => __('Answer Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_answer_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_answer_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_answer_font_size', array(
	'label' => __('Answer Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_answer_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_answer_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_answer_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Answer Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_active_faq_question_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_active_faq_question_color', array(
	'label' => __('Active Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_active_faq_question_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_active_faq_box_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_active_faq_box_background_color', array(
	'label' => __('Box Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_active_faq_box_background_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_active_faq_que_ans_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_active_faq_que_ans_bg_color', array(
	'label' => __('Question Answer Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_active_faq_que_ans_bg_color',
)));


$wp_customize->add_setting('vw_stock_images_pro_faq_inner_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_inner_heading_color', array(
	'label' => __('Inner Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_inner_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_inner_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_inner_heading_font_size', array(
	'label' => __('Inner Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_inner_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_inner_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_inner_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Inner Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_faq_inner_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_inner_paragraph_color', array(
	'label' => __('Inner Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_inner_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_inner_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_inner_paragraph_font_size', array(
	'label' => __('Inner Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_inner_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_inner_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_inner_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Inner Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_faq_form_label_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_form_label_color', array(
	'label' => __('Form Label Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_form_label_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_form_label_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_form_label_font_size', array(
	'label' => __('Form Label Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_form_label_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_form_label_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_form_label_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Form Label Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_faq_btn_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_btn_color', array(
	'label' => __('Faq Button Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_btn_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_faq_btn_font_size', array(
	'label' => __('Faq Button Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'setting' => 'vw_stock_images_pro_faq_btn_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_faq_btn_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_faq_btn_font_family',
	array(
		'section' => 'vw_stock_images_pro_faq_sec',
		'label' => __('Faq Button Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_faq_btn_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_btn_bg_color', array(
	'label' => __('Faq Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_faq_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_faq_btn_hover_bg_color', array(
	'label' => __('Faq Button Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_faq_sec',
	'settings' => 'vw_stock_images_pro_faq_btn_hover_bg_color',
)));
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
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_bg_color_two', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_bg_color_two', array(
	'label' => __('Background Color Two', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_bg_color_two',
)));

$wp_customize->add_setting(
	'vw_stock_images_pro_our_newsletter_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_newsletter_section_settings',
	array(
		'label' => __('Section Typography', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_newsletter_heading', array(
	'label' => __('Newsletter Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_our_newsletter_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_para', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_newsletter_para', array(
	'label' => __('Newsletter Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_our_newsletter_para',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_shortcode', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_newsletter_shortcode', array(
	'label' => __('Newsletter Shortcode', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_our_newsletter_shortcode',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_heading', array(
	'label' => __('Appoinment Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_appoinment_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_para', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_para', array(
	'label' => __('Appoinment Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_appoinment_para',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_text', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_text', array(
	'label' => __('Appoinment Button Text', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_appoinment_text',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_url', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_url', array(
	'label' => __('Appoinment Button Url', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_appoinment_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_man_image', array(
	'default' => get_theme_mod('vw_stock_images_pro_our_newsletter_man_image'),
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_man_image', array(
	'label' => __('Man Image ', 'vw-stock-images-pro'),
	'description' => __('Add image size maximum 264x288', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_man_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_beetle_img', array(
	'default' => get_theme_mod('vw_stock_images_pro_our_newsletter_beetle_img'),
	'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_beetle_img', array(
	'label' => __('Beetle Image ', 'vw-stock-images-pro'),
	'description' => __('Add image size maximum 90×90', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_beetle_img'
)));

$wp_customize->add_setting(
	'vw_stock_images_pro_our_newsletter_section_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_newsletter_section_color_font_settings',
	array(
		'label' => __('Section Newsletter Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_newsletter_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_newsletter_heading_color', array(
	'label' => __('Newsletter Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_newsletter_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_newsletter_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_newsletter_heading_font_size', array(
	'label' => __('Newsletter Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_newsletter_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_newsletter_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Newsletter Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_newsletter_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_newsletter_paragraph_color', array(
	'label' => __('Newsletter Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_newsletter_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_newsletter_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_newsletter_paragraph_font_size', array(
	'label' => __('Newsletter Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_newsletter_paragraph_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_newsletter_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_newsletter_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Newsletter Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);


$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_form_btn_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_form_btn_color', array(
	'label' => __('Newsletter Button Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_form_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_form_btn_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_newsletter_form_btn_font_size', array(
	'label' => __('Newsletter Button Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_our_newsletter_form_btn_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_form_btn_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_newsletter_form_btn_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Newsletter Button Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_form_btn_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_form_btn_bg_color', array(
	'label' => __('Newsletter Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_form_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color', array(
	'label' => __('Newsletter Button Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color',
)));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_appoinment_section_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_appoinment_section_color_font_settings',
	array(
		'label' => __('Section Appoinment Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_newsletter_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_appoinment_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_heading_color', array(
	'label' => __('Appoinment Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_appoinment_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_heading_font_size', array(
	'label' => __('Appoinment Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_appoinment_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_appoinment_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Appoinment Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_appoinment_para_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_para_color', array(
	'label' => __('Appoinment Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_appoinment_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_para_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_para_font_size', array(
	'label' => __('Appoinment Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_appoinment_para_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_para_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_appoinment_para_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Appoinment Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_appoinment_form_btn_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_appoinment_form_btn_color', array(
	'label' => __('Appoinment Button Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_appoinment_form_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_appoinment_form_btn_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_appoinment_form_btn_font_size', array(
	'label' => __('Appoinment Button Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'setting' => 'vw_stock_images_pro_our_appoinment_form_btn_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_our_appoinment_form_btn_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_appoinment_form_btn_font_family',
	array(
		'section' => 'vw_stock_images_pro_newsletter_sec',
		'label' => __('Appoinment Button Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_appoinment_form_btn_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_appoinment_form_btn_bg_color', array(
	'label' => __('Appoinment Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_appoinment_form_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color', array(
	'label' => __('Appoinment Button Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_our_newsletter_man_image_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_newsletter_man_image_bg_color', array(
	'label' => __('Man Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_newsletter_sec',
	'settings' => 'vw_stock_images_pro_our_newsletter_man_image_bg_color',
)));

// -----------------Our Client section------------------

$wp_customize->add_section('vw_stock_images_pro_our_pricing_sec', array(
	'title' => __('Pricing Section', 'vw-stock-images-pro'),
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
	'vw_stock_images_pro_our_pricing_section_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_setting',
	array(
		'label' => __('Section Typography ', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_section_color_font_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_section_color_font_setting',
	array(
		'label' => __('Section Color & font Setting ', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Heading Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_heading_font_size', array(
	'label' => __('Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Paragraph Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_paragraph_font_size', array(
	'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_paragraph_font_size',
	'type' => 'number'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_reviews_color_font_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_reviews_color_font_setting',
	array(
		'label' => __('Client Review Color & font Setting ', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_review_content_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_review_content_color', array(
	'label' => __('Content Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_review_content_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_review_content_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_review_content_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Content Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_review_content_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_review_content_font_size', array(
	'label' => __('Content Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_review_content_font_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_name_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_name_color', array(
	'label' => __('Client name Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_name_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_name_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_name_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Client name Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_name_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_name_font_size', array(
	'label' => __('Client name Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_name_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_desig_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_desig_color', array(
	'label' => __('Client Designation Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_desig_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_desig_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_desig_font_family',
	array(
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'label' => __('Client Designation Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_desig_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_our_pricing_desig_font_size', array(
	'label' => __('Client Designation Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'setting' => 'vw_stock_images_pro_our_pricing_desig_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_quote_img_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_quote_img_color', array(
	'label' => __('Left Quote Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_quote_img_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_quote_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_quote_bg_color', array(
	'label' => __('Quote Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_quote_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_quote_border_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_quote_border_color', array(
	'label' => __('Quote Border Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_quote_border_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_our_pricing_owl_dots_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_owl_dots_color', array(
	'label' => __('Dots Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_owl_dots_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_our_pricing_owl_dots_active_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_our_pricing_owl_dots_active_color', array(
	'label' => __('Dots Active Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_our_pricing_sec',
	'settings' => 'vw_stock_images_pro_our_pricing_owl_dots_active_color',
)));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_featue_heading',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_featue_heading',
	array(
		'label' => __('Pricing Featues Table', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));

for ($i = 1; $i <= 4; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_our_pricing_feature_text_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_our_pricing_feature_text_' . $i,
		array(
			'label' => __('Feature Text ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'setting' => 'vw_stock_images_pro_our_pricing_feature_text_' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'vw_stock_images_pro_our_pricing_free_text_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_our_pricing_free_text_' . $i,
		array(
			'label' => __('Free Text' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'setting' => 'vw_stock_images_pro_our_pricing_free_text_' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'vw_stock_images_pro_our_pricing_premium_text_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_our_pricing_premium_text_' . $i,
		array(
			'label' => __('Premium Text ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'setting' => 'vw_stock_images_pro_our_pricing_premium_text_' . $i,
			'type' => 'text'
		)
	);
}




$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_features_checkbox_heading',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_our_pricing_features_checkbox_heading',
	array(
		'label' => __('Plas Icon Values', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec'
	)
));


$wp_customize->add_setting(
	'vw_stock_images_pro_our_pricing_features_checkboxs_checkbox_count',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_our_pricing_features_checkboxs_checkbox_count',
	array(
		'label' => __('Number of features Checkboxs', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_our_pricing_sec',
		'setting' => 'vw_stock_images_pro_our_pricing_features_checkboxs_checkbox_count',
		'type' => 'text'
	)
);
for ($i = 1; $i <= 4; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_our_pricing_features_checkbox_text_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'vw_stock_images_pro_our_pricing_features_checkbox_text_' . $i,
		array(
			'label' => __('features checkbox Text ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_our_pricing_sec',
			'setting' => 'vw_stock_images_pro_our_pricing_features_checkbox_text_' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'vw_stock_images_pro_our_pricing_free_checkbox_text_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new vw_stock_images_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'vw_stock_images_pro_our_pricing_free_checkbox_text_' . $i,
			array(
				'settings' => 'vw_stock_images_pro_our_pricing_free_checkbox_text_' . $i,
				'section' => 'vw_stock_images_pro_our_pricing_sec',
				'type' => 'icon',
				'label' => esc_html__('Free Column ' . $i . ' Icon', 'vw-stock-images-pro'),
			)
		)
	);
	$wp_customize->add_setting(
		'vw_stock_images_pro_our_pricing_premium_text_checkbox_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new vw_stock_images_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'vw_stock_images_pro_our_pricing_premium_text_checkbox_' . $i,
			array(
				'settings' => 'vw_stock_images_pro_our_pricing_premium_text_checkbox_' . $i,
				'section' => 'vw_stock_images_pro_our_pricing_sec',
				'type' => 'icon',
				'label' => esc_html__('Premium Column ' . $i . ' Icon ', 'vw-stock-images-pro'),
			)
		)
	);
}
/*-----------------------Professional Team Settings--------------------------*/

$wp_customize->add_section('vw_stock_images_pro_professional_team_sec', array(
	'title' => __('Professional Team Section', 'vw-stock-images-pro'),
	'description' => __('Add Professional Team setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_radio_team_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_radio_team_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_professional_team_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);


$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_radio_team_enable', array(
	'selector' => '#professionals-team .container',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_radio_team_enable',
));

$wp_customize->add_setting('vw_stock_images_pro_team_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_color', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_team_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_image'
)));

$wp_customize->add_setting('vw_stock_images_pro_team_image_bg_attachement', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_team_image_bg_attachement', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_team_section_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_team_section_setting',
	array(
		'label' => __('Section Typography ', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_professional_team_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_team_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_team_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'setting' => 'vw_stock_images_pro_team_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_team_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_team_paragraph', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'setting' => 'vw_stock_images_pro_team_paragraph',
	'type' => 'text'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_team_section_color_font_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_team_section_color_font_setting',
	array(
		'label' => __('Section Color & Font Setting ', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_professional_team_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_team_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_team_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_professional_team_sec',
		'label' => __('Heading Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_team_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_team_heading_font_size', array(
	'label' => __('Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'setting' => 'vw_stock_images_pro_team_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_team_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_team_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_professional_team_sec',
		'label' => __('Paragraph Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_team_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_team_paragraph_font_size', array(
	'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'setting' => 'vw_stock_images_pro_team_paragraph_font_size',
	'type' => 'number'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_team_section_card_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);

$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_team_section_card_setting',
	array(
		'label' => __('Section Card Color & Font Setting ', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_professional_team_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_team_card_border_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_card_border_color', array(
	'label' => __('Card Border Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_card_border_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_card_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_card_background_color', array(
	'label' => __('Card Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_card_background_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_team_name_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_name_color', array(
	'label' => __('Team Name Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_name_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_name_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_team_name_font_family',
	array(
		'section' => 'vw_stock_images_pro_professional_team_sec',
		'label' => __('Team Name Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_team_name_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_team_name_font_size', array(
	'label' => __('Team Name Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'setting' => 'vw_stock_images_pro_team_name_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_team_desig_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_desig_color', array(
	'label' => __('Team Designation Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_desig_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_desig_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control(
	'vw_stock_images_pro_team_desig_font_family',
	array(
		'section' => 'vw_stock_images_pro_professional_team_sec',
		'label' => __('Team Designation Font family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting('vw_stock_images_pro_team_desig_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_team_desig_font_size', array(
	'label' => __('Team Designation Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'setting' => 'vw_stock_images_pro_team_desig_font_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_team_social_icon_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_social_icon_color', array(
	'label' => __('Team Social Icon Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_social_icon_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_social_icon_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_social_icon_bg_color', array(
	'label' => __('Team Social Icon Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_social_icon_bg_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_team_social_icon_hover_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_social_icon_hover_color', array(
	'label' => __('Team Social Icon Hover Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_social_icon_hover_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_social_icon_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_social_icon_hover_bg_color', array(
	'label' => __('Team Social Icon Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_social_icon_hover_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_team_card_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_team_card_hover_bg_color', array(
	'label' => __('Card Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_professional_team_sec',
	'settings' => 'vw_stock_images_pro_team_card_hover_bg_color',
)));

/*-----------------------Blog Section Settings--------------------------*/
$wp_customize->add_section('vw_stock_images_pro_latest_news_sec', array(
	'title' => __('Latest News & Blog Section', 'vw-stock-images-pro'),
	'description' => __('Add News & Blog setting here.', 'vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_latest_news_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_latest_news_enable', array(
	'selector' => '#blog-news .container',
	'render_callback' => 'vw_stock_images_pro_blog_and_news_sec',
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_bgcolor', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_bgimage', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_latest_news_bgimage', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_bgimage'
)));


$wp_customize->add_setting('vw_stock_images_pro_latest_news_bg_image_attachment', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_bg_image_attachment', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));

$wp_customize->add_setting(
	'vw_stock_images_pro_latest_news_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_latest_news_settings',
	array(
		'label' => __('Section Typography', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_blog_and_news_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_heading', array(
	'label' => __('Sub Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_paragraph', array(
	'label' => __('Sub Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_text', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_btn_text', array(
	'label' => __('Button Text', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_btn_text',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_url', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_btn_url', array(
	'label' => __('Button Url', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_btn_url',
	'type' => 'text'
));

$wp_customize->add_setting(
	'vw_stock_images_pro_latest_news_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_latest_news_color_font_settings',
	array(
		'label' => __('Section Color & Font Setting', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_latest_news_sec'
	)
));


$wp_customize->add_setting('vw_stock_images_pro_latest_news_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_heading_color', array(
	'label' => __(' Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __(' Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_latest_news_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_heading_font_size', array(
	'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
	'description' => __(' Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_heading_font_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_latest_news_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_latest_news_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_paragraph_font_size', array(
	'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_paragraph_font_size',
	'type' => 'number'
));


$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_btn_color', array(
	'label' => __('Button Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_btn_font_size', array(
	'label' => __(' Button Font Size', 'vw-stock-images-pro'),
	'description' => __('Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_btn_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_btn_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __('Button Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_btn_bg_color', array(
	'label' => __('Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_btn_hover_bg_color', array(
	'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_btn_hover_bg_color',
)));

$wp_customize->add_setting(
	'vw_stock_images_pro_latest_news_card_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_latest_news_card_content_settings',
	array(
		'label' => __('Blog Card Content Settings', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_latest_news_sec'
	)
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_title_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_title_color', array(
	'label' => __('Blog Title Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_title_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_title_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_card_title_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __('Blog Title Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_title_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_card_title_font_size', array(
	'label' => __('Blog Title Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_card_title_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_para_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_para_color', array(
	'label' => __('Blog Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_para_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_card_para_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __('Blog Paragraph  Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_para_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_card_para_font_size', array(
	'label' => __('Blog Paragraph  Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_card_para_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_meta_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_meta_color', array(
	'label' => __('Blog Meta Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_meta_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_meta_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_card_meta_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __('Blog Meta Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_meta_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_card_meta_font_size', array(
	'label' => __('Blog Meta Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_card_meta_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_meta_border_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_meta_border_color', array(
	'label' => __('Blog Meta Border Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_meta_border_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_category_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_category_color', array(
	'label' => __('Blog category Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_category_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_category_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_latest_news_card_category_font_family',
	array(
		'section' => 'vw_stock_images_pro_latest_news_sec',
		'label' => __('Blog category Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_category_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_latest_news_card_category_font_size', array(
	'label' => __('Blog category Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'setting' => 'vw_stock_images_pro_latest_news_card_category_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_category_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_category_bg_color', array(
	'label' => __('Blog Category Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_category_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_background_color', array(
	'label' => __('Blog Card Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_background_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_latest_news_card_hover_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_latest_news_card_hover_background_color', array(
	'label' => __('Blog Card Hover Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_latest_news_sec',
	'settings' => 'vw_stock_images_pro_latest_news_card_hover_background_color',
)));

/*-----------------------Gallery Settings--------------------------*/
$wp_customize->add_section('vw_stock_images_pro_gallery_sec', array(
	'title' => __('Gallery Section', 'vw-stock-images-pro'),
	'description' => __('Gallery Section', 'vw-stock-images-pro'),
	'priority' => null,
	'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
	'vw_stock_images_pro_gallery_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'vw_stock_images_pro_gallery_enabledisable',
	array(
		'type' => 'radio',
		'label' => 'Do you want this section',
		'section' => 'vw_stock_images_pro_gallery_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-stock-images-pro'),
			'Disable' => __('Disable', 'vw-stock-images-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial('vw_stock_images_pro_gallery_enabledisable', array(
	'selector' => '#gallery .container',
	'render_callback' => 'optical_lens_shop_customize_partial_vw_stock_images_pro_gallery_enabledisable',
));

$wp_customize->add_setting('vw_stock_images_pro_gallery_bg_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_gallery_bg_color', array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'settings' => 'vw_stock_images_pro_gallery_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_gallery_bg_image', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_gallery_bg_image', array(
	'label' => __('Background image ', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'settings' => 'vw_stock_images_pro_gallery_bg_image'
)));
$wp_customize->add_setting('vw_stock_images_pro_gallery_bg_image_attachment', array(
	'default' => '',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_gallery_bg_image_attachment', array(
	'type' => 'radio',
	'label' => __('Choose image option', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'choices' => array(
		'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
		'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
	)
));
$wp_customize->add_setting(
	'vw_stock_images_pro_gallery_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_gallery_section_settings',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_gallery_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_gallery_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_gallery_heading', array(
	'label' => __('Heading', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'setting' => 'vw_stock_images_pro_gallery_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_gallery_paragraph', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_gallery_paragraph', array(
	'label' => __('Paragraph', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'setting' => 'vw_stock_images_pro_gallery_paragraph',
	'type' => 'text'
));



$no_cards = get_theme_mod('vw_stock_images_pro_gallery_number');
for ($i = 1; $i <= $no_cards; $i++) {
	$wp_customize->add_setting(
		'vw_stock_images_pro_gallery_number_settings' . $i,
		array(
			'default' => '',
			'transport' => 'postMessage',
			'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
		)
	);
	$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'vw_stock_images_pro_gallery_number_settings' . $i,
		array(
			'label' => __('Gallery Image ' . $i, 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_gallery_sec'
		)
	));
	$wp_customize->add_setting('vw_stock_images_pro_gallery_image' . $i, array(
		'default' => get_theme_mod('vw_stock_images_pro_gallery_image' . $i),
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_gallery_image' . $i, array(
		'label' => __('Gallery Image', 'vw-stock-images-pro'),
		'description' => __('choose image', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_gallery_sec',
		'settings' => 'vw_stock_images_pro_gallery_image' . $i,
	)));
}

$wp_customize->add_setting(
	'vw_stock_images_pro_gallery_section_typoghraphy',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	)
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
	$wp_customize,
	'vw_stock_images_pro_gallery_section_typoghraphy',
	array(
		'label' => __('Section Typoghraphy', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_gallery_sec'
	)
));

$wp_customize->add_setting('vw_stock_images_pro_gallery_heading_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_gallery_heading_color', array(
	'label' => __('Heading Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'settings' => 'vw_stock_images_pro_gallery_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_gallery_heading_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_gallery_heading_font_family',
	array(
		'section' => 'vw_stock_images_pro_gallery_sec',
		'label' => __('Heading Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_gallery_heading_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_gallery_heading_font_size', array(
	'label' => __('Heading Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'setting' => 'vw_stock_images_pro_gallery_heading_font_size',
	'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_gallery_paragraph_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_gallery_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'settings' => 'vw_stock_images_pro_gallery_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_gallery_paragraph_font_family', array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_gallery_paragraph_font_family',
	array(
		'section' => 'vw_stock_images_pro_gallery_sec',
		'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting('vw_stock_images_pro_gallery_paragraph_font_size', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_gallery_paragraph_font_size', array(
	'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
	'description' => __('Sub Add font size in px', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'setting' => 'vw_stock_images_pro_gallery_paragraph_font_size',
	'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_gallery_hover_button_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_gallery_hover_button_color', array(
	'label' => __('Image Hover Button Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'settings' => 'vw_stock_images_pro_gallery_hover_button_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_gallery_hover_button_background_color', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_gallery_hover_button_background_color', array(
	'label' => __('Image Hover Button Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_gallery_sec',
	'settings' => 'vw_stock_images_pro_gallery_hover_button_background_color',
)));
// $wp_customize->add_setting( 'vw_stock_images_pro_gallery_hover_background_color', array(
// 'default' => '',
// 'sanitize_callback'	=> 'sanitize_hex_color'
// ));
// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_gallery_hover_background_color',array(
// 'label' => __('Image Hover Background Color', 'vw-stock-images-pro'),
// 'section' => 'vw_stock_images_pro_gallery_sec',
// 'settings' => 'vw_stock_images_pro_gallery_hover_background_color',
// )));
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

