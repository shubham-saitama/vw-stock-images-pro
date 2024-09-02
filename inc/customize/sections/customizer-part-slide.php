<?php
$wp_customize->add_section('vw_stock_images_pro_slider_sec',array(
	'title'	=> __('Slider Section','vw-stock-images-pro'),
	'description'	=> __('Add Slider setting here.','vw-stock-images-pro'),
	'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting('vw_stock_images_pro_slider_enabledisable',
		array(
				'default' => 'Enable',
				'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_slider_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-stock-images-pro'),
				'section' => 'vw_stock_images_pro_slider_sec',
				'choices' => array(
				'Enable' => __('Enable', 'vw-stock-images-pro'),
				'Disable' => __('Disable', 'vw-stock-images-pro')
		),
));


$wp_customize->selective_refresh->add_partial( 'vw_stock_images_pro_slider_enabledisable', array(
	'selector' => '#slider .slider-left-content  ',
	'render_callback' => 'vw_kids_pro_customize_partial_vw_stock_images_pro_slider_enabledisable',
));


$wp_customize->add_setting( 'vw_stock_images_pro_slider_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_bgcolor',array(
	'label' => __('Background Color', 'vw-stock-images-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'settings' => 'vw_stock_images_pro_slider_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_bgimage',array(
	'default'	=> '',
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_bgimage',array(
			'label' => __('Background image ','vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_slider_sec',
			'settings' => 'vw_stock_images_pro_slider_bgimage'
)));

$wp_customize->add_setting( 'vw_stock_images_pro_slider_bgimage_setting', array(
		'default'         => '',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_slider_bgimage_setting', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-stock-images-pro'),
		'section'   => 'vw_stock_images_pro_slider_sec',
		'choices'   => array(
		'vw-fixed'      => __( 'Fixed', 'vw-stock-images-pro' ),
		'vw-scroll'      => __( 'Scroll', 'vw-stock-images-pro' ),
)));

$wp_customize->add_setting( 'vw_stock_images_pro_slider_heading_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_slider_heading_settings',
array(
	'label' => __('Section Typoghraphy','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_heading',array(
	'label' => __('Heading One','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_hightlight_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_hightlight_heading',array(
	'label' => __('Hightlight Heading','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_hightlight_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading_two',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_heading_two',array(
	'label' => __('Heading Two','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_heading_two',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_paragraph',array(
	'label' => __('Paragraph','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_btn_text',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_btn_text',array(
	'label' => __('Button Text','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_btn_text',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_btn_url',array(
	'default'	=> '',
	'sanitize_callback'	=> 'esc_url_raw'
));

$wp_customize->add_control('vw_stock_images_pro_slider_btn_url',array(
	'label'	=> __('Add Button URL','vw-stock-images-pro'),
	'section'	=> 'vw_stock_images_pro_slider_sec',
	'setting'	=> 'vw_stock_images_pro_slider_btn_url',
	'type'	=> 'url'
));

$wp_customize->add_setting('vw_stock_images_pro_slider_additonal_img_one',array(
	'default'   =>get_theme_mod('vw_stock_images_pro_slider_additonal_img_one'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_additonal_img_one',array(
		'label' => __('Top Spider Image ','vw-stock-images-pro'),
			'description' => __('Add image size maximum 205x297', 'vw-ecommerce-landing-page-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'settings' => 'vw_stock_images_pro_slider_additonal_img_one'
)));

$wp_customize->add_setting('vw_stock_images_pro_slider_additonal_img_two',array(
	'default'   =>get_theme_mod('vw_stock_images_pro_slider_additonal_img_two'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_additonal_img_two',array(
		'label' => __('Bottom Cockroach Image ','vw-stock-images-pro'),
			'description' => __('Add image size maximum 200x120', 'vw-ecommerce-landing-page-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'settings' => 'vw_stock_images_pro_slider_additonal_img_two'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_right_mosquito_img',array(
	'default'   =>get_theme_mod('vw_stock_images_pro_slider_right_mosquito_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_right_mosquito_img',array(
		'label' => __('Right Mosquito Image ','vw-stock-images-pro'),
			'description' => __('Add image size maximum 98x76', 'vw-ecommerce-landing-page-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'settings' => 'vw_stock_images_pro_slider_right_mosquito_img'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_right_man_img',array(
	'default'   =>get_theme_mod('vw_stock_images_pro_slider_right_man_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_right_man_img',array(
		'label' => __('Right Man Image ','vw-stock-images-pro'),
			'description' => __('Add image size maximum 541x735', 'vw-ecommerce-landing-page-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'settings' => 'vw_stock_images_pro_slider_right_man_img'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_right_beetle_img',array(
	'default'   =>get_theme_mod('vw_stock_images_pro_slider_right_beetle_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_right_beetle_img',array(
		'label' => __('Right Beetle Image ','vw-stock-images-pro'),
			'description' => __('Add image size maximum 110x110', 'vw-ecommerce-landing-page-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'settings' => 'vw_stock_images_pro_slider_right_beetle_img'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_right_reviews_img',array(
	'default'   =>get_theme_mod('vw_stock_images_pro_slider_right_reviews_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_slider_right_reviews_img',array(
		'label' => __('Review Image ','vw-stock-images-pro'),
			'description' => __('Add image size maximum 125x41', 'vw-ecommerce-landing-page-pro'),
		'section' => 'vw_stock_images_pro_slider_sec',
		'settings' => 'vw_stock_images_pro_slider_right_reviews_img'
)));

$wp_customize->add_setting('vw_stock_images_pro_right_review_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_right_review_heading',array(
	'label' => __('Review Heading','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_right_review_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_right_review_para',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_right_review_para',array(
	'label' => __('Review Text','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_right_review_para',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_social_icon_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_social_icon_heading',array(
	'label' => __('Social Icon Heading','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_social_icon_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_facebook_icon',
	array(
			'default'     => get_theme_mod('vw_stock_images_pro_slider_facebook_icon'),
			'sanitize_callback' => 'sanitize_text_field'
		)
);
$wp_customize->add_control(new vw_stock_images_pro_Fontawesome_Icon_Chooser(	$wp_customize,	'vw_stock_images_pro_slider_facebook_icon',	array(
				'settings'    => 'vw_stock_images_pro_slider_facebook_icon',
				'section'   => 'vw_stock_images_pro_slider_sec',
				'type'      => 'icon',
				'label'     => esc_html__( 'Choose  Icon', 'vw-stock-images-pro' ),
			)
		)
);
$wp_customize->add_setting('vw_stock_images_pro_slider_facebook_icon_url',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_facebook_icon_url',array(
	'label' => __('Facebook Url','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_facebook_icon_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_twitter_icon',
	array(
			'default'     => get_theme_mod('vw_stock_images_pro_slider_twitter_icon'),
			'sanitize_callback' => 'sanitize_text_field'
		)
);
$wp_customize->add_control(new vw_stock_images_pro_Fontawesome_Icon_Chooser(	$wp_customize,	'vw_stock_images_pro_slider_twitter_icon',	array(
				'settings'    => 'vw_stock_images_pro_slider_twitter_icon',
				'section'   => 'vw_stock_images_pro_slider_sec',
				'type'      => 'icon',
				'label'     => esc_html__( 'Choose  Icon', 'vw-stock-images-pro' ),
			)
		)
);
$wp_customize->add_setting('vw_stock_images_pro_slider_twitter_icon_url',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_twitter_icon_url',array(
	'label' => __('Twitter Url','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_twitter_icon_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_instagram_icon',
	array(
			'default'     => get_theme_mod('vw_stock_images_pro_slider_instagram_icon'),
			'sanitize_callback' => 'sanitize_text_field'
		)
);
$wp_customize->add_control(new vw_stock_images_pro_Fontawesome_Icon_Chooser(	$wp_customize,	'vw_stock_images_pro_slider_instagram_icon',	array(
				'settings'    => 'vw_stock_images_pro_slider_instagram_icon',
				'section'   => 'vw_stock_images_pro_slider_sec',
				'type'      => 'icon',
				'label'     => esc_html__( 'Choose  Icon', 'vw-stock-images-pro' ),
			)
		)
);
$wp_customize->add_setting('vw_stock_images_pro_slider_instagram_icon_url',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_instagram_icon_url',array(
	'label' => __('Instagram Url','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_instagram_icon_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_youtube_icon',
	array(
			'default'     => get_theme_mod('vw_stock_images_pro_slider_youtube_icon'),
			'sanitize_callback' => 'sanitize_text_field'
		)
);
$wp_customize->add_control(new vw_stock_images_pro_Fontawesome_Icon_Chooser(	$wp_customize,	'vw_stock_images_pro_slider_youtube_icon',	array(
				'settings'    => 'vw_stock_images_pro_slider_youtube_icon',
				'section'   => 'vw_stock_images_pro_slider_sec',
				'type'      => 'icon',
				'label'     => esc_html__( 'Choose  Icon', 'vw-stock-images-pro' ),
			)
		)
);
$wp_customize->add_setting('vw_stock_images_pro_slider_youtube_icon_url',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_youtube_icon_url',array(
	'label' => __('Youtube Url','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_youtube_icon_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_dribble_icon',
	array(
			'default'     => get_theme_mod('vw_stock_images_pro_slider_dribble_icon'),
			'sanitize_callback' => 'sanitize_text_field'
		)
);
$wp_customize->add_control(new vw_stock_images_pro_Fontawesome_Icon_Chooser(	$wp_customize,	'vw_stock_images_pro_slider_dribble_icon',	array(
				'settings'    => 'vw_stock_images_pro_slider_dribble_icon',
				'section'   => 'vw_stock_images_pro_slider_sec',
				'type'      => 'icon',
				'label'     => esc_html__( 'Choose  Icon', 'vw-stock-images-pro' ),
			)
		)
);
$wp_customize->add_setting('vw_stock_images_pro_slider_dribble_icon_url',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_dribble_icon_url',array(
	'label' => __('Dribble Url','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec',
	'setting' => 'vw_stock_images_pro_slider_dribble_icon_url',
	'type' => 'text'
));


$wp_customize->add_setting( 'vw_stock_images_pro_slider_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_slider_color_font_settings',
array(
	'label' => __('Section Color & font Setting','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_slider_sec'
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_heading_font_size',array(
'label' => __(' Heading Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_slider_heading_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_heading_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_heading_color',array(
'label' => __('Heading Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_heading_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Heading Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting('vw_stock_images_pro_slider_hightlight_heading_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_hightlight_heading_font_size',array(
'label' => __(' Hightlight Heading Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_slider_hightlight_heading_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_hightlight_heading_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_hightlight_heading_color',array(
'label' => __('Hightlight Heading Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_hightlight_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_hightlight_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_hightlight_heading_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Hightlight Heading Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_paragraph_font_size',array(
'label' => __(' Paragraph Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_slider_paragraph_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_paragraph_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_paragraph_color',array(
'label' => __('Paragraph Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_paragraph_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_paragraph_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_paragraph_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Paragraph Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_stock_images_pro_slider_button_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_button_color',array(
'label' => __('Button Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_button_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_button_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_button_font_size',array(
'label' => __(' Button Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_slider_button_font_size',
'type'    => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_button_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_button_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Button Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_button_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_button_bg_color',array(
'label' => __('Button Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_button_bg_color',
)));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_button_hover_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_button_hover_bg_color',array(
'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_button_hover_bg_color',
)));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_right_man_img_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_right_man_img_bg_color',array(
'label' => __('Man Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_right_man_img_bg_color',
)));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_right_beetle_img_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_right_beetle_img_bg_color',array(
'label' => __('Beetle Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_right_beetle_img_bg_color',
)));

$wp_customize->add_setting( 'vw_stock_images_pro_right_review_heading_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_right_review_heading_color',array(
'label' => __('Review Heading Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_right_review_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_right_review_heading_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_right_review_heading_font_size',array(
'label' => __(' Review Heading Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_right_review_heading_font_size',
'type'    => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_right_review_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_right_review_heading_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Review Heading Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_stock_images_pro_right_review_para_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_right_review_para_color',array(
'label' => __('Review Paragraph Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_right_review_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_right_review_para_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_right_review_para_font_size',array(
'label' => __(' Review Paragraph Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_right_review_para_font_size',
'type'    => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_right_review_para_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_right_review_para_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Review Paragraph Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_social_icon_heading_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_social_icon_heading_color',array(
'label' => __('Social Icon Heading Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_social_icon_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_social_icon_heading_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_social_icon_heading_font_size',array(
'label' => __(' Social Icon Heading Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_slider_social_icon_heading_font_size',
'type'    => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_slider_social_icon_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_stock_images_pro_slider_social_icon_heading_font_family', array(
	'section'  => 'vw_stock_images_pro_slider_sec',
	'label'    => __( 'Social Icon Heading Font Family','vw-stock-images-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_social_icon_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_social_icon_color',array(
'label' => __('Icon Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_social_icon_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_slider_social_icon_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_slider_social_icon_font_size',array(
'label' => __(' Icon Font Size','vw-stock-images-pro'),
'description' => __('Add font size in px','vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'setting' => 'vw_stock_images_pro_slider_social_icon_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_social_icon_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_social_icon_bg_color',array(
'label' => __('Icon Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_social_icon_bg_color',
)));
$wp_customize->add_setting( 'vw_stock_images_pro_slider_social_icon_hover_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_slider_social_icon_hover_bg_color',array(
'label' => __('Icon Hover Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_slider_sec',
'settings' => 'vw_stock_images_pro_slider_social_icon_hover_bg_color',
)));
 ?>
