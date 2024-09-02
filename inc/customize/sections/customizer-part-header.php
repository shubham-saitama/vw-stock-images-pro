<?php
	$wp_customize->add_section('vw_stock_images_pro_topbar_header',array(
		'title'	=> __('Top Bar','vw-stock-images-pro'),
		'description'	=> __('Top Bar Settings','vw-stock-images-pro'),
		'priority'	=> null,
		'panel' => 'vw_stock_images_pro_panel_id',
	));

	$wp_customize->add_setting('vw_stock_images_pro_topbar_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_stock_images_pro_topbar_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_stock_images_pro_topbar_header',
        'choices' => array(
            'Enable' => __('Enable', 'vw-stock-images-pro'),
            'Disable' => __('Disable', 'vw-stock-images-pro')
        ),
    ));

    $wp_customize->selective_refresh->add_partial( 'vw_stock_images_pro_topbar_enable', array(
	    'selector' => '#site_top .container',
	    'render_callback' => 'optical_lens_shop_customize_partial_vw_stock_images_pro_topbar_enable',
    ));

	$wp_customize->add_setting( 'vw_stock_images_pro_topbar_bg_section_ct_pallete',
	array(
	  'default' => '',
	  'transport' => 'postMessage',
	  'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));

	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_topbar_bg_section_ct_pallete',
	array(
		'label' => __('Section Background ','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header'
	)));

	$wp_customize->add_setting( 'vw_stock_images_pro_topbar_bgcolor', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_topbar_bgcolor', array(
'label' => __('Top Bar Background Color', 'vw-stock-images-pro'),
'section' => 'vw_stock_images_pro_topbar_header',
'settings' => 'vw_stock_images_pro_topbar_bgcolor',
)));

    $wp_customize->add_setting('vw_stock_images_pro_topbar_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_stock_images_pro_topbar_bgimage',
            array(
                'label' => __('Background image','vw-stock-images-pro'),
                'description' => __('Dimension 1520px x 50px','vw-stock-images-pro'),
                'section' => 'vw_stock_images_pro_topbar_header',
                'settings' => 'vw_stock_images_pro_topbar_bgimage'
            )
        )
    );

		$wp_customize->add_setting( 'vw_stock_images_pro_topbar_bgimage_setting', array(
				'default'         => '',
				'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
		));
		$wp_customize->add_control('vw_stock_images_pro_topbar_bgimage_setting', array(
				'type'      => 'radio',
				'label'     => __('Choose image option', 'vw-stock-images-pro'),
				'section'   => 'vw_stock_images_pro_topbar_header',
				'choices'   => array(
		    'vw-fixed'  => __( 'Fixed','vw-stock-images-pro' ),
				'vw-scroll' => __( 'Scroll','vw-stock-images-pro' ),
		)));


	$wp_customize->add_setting( 'vw_stock_images_pro_header_section_ct_pallete',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_header_section_ct_pallete',
	array(
		'label' => __('Section Typography ','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header'
	)));


	$wp_customize->add_setting( 'vw_stock_images_pro_head_title_section_ct_pallete',
	  array(
	  'default' => '',
	  'transport' => 'postMessage',
	  'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_head_title_section_ct_pallete',
	  array(
	  'label' => __('Header Title Typography ','vw-stock-images-pro'),
	  'section' => 'vw_stock_images_pro_topbar_header'
	)));

	$wp_customize->add_setting( 'vw_stock_images_pro_header_title_color', array(
	  'default' => '',
	  'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_title_color', array(
	  'label' => __('Header Main title Color', 'vw-stock-images-pro'),
	  'section' => 'vw_stock_images_pro_topbar_header',
	  'settings' => 'vw_stock_images_pro_header_title_color',
	)));
	$wp_customize->add_setting('vw_stock_images_pro_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_stock_images_pro_header_title_font_family', array(
	    'section'  => 'vw_stock_images_pro_topbar_header',
	    'label'    => __('Header Main title Font family','vw-stock-images-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_stock_images_pro_header_title_font_size',array(
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_title_font_size',array(
	  'label' => __('Header Title Font Size','vw-stock-images-pro'),
	  'description' => __('Add font size in px','vw-stock-images-pro'),
	  'section' => 'vw_stock_images_pro_topbar_header',
	  'setting' => 'vw_stock_images_pro_header_title_font_size',
	  'type'    => 'number'
	));


	$wp_customize->add_setting( 'vw_stock_images_pro_header_subtitle_color', array(
	  'default' => '',
	  'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_subtitle_color', array(
	  'label' => __('Tagline Color', 'vw-stock-images-pro'),
	  'section' => 'vw_stock_images_pro_topbar_header',
	  'settings' => 'vw_stock_images_pro_header_subtitle_color',
	)));
	$wp_customize->add_setting('vw_stock_images_pro_header_subtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_stock_images_pro_header_subtitle_font_family', array(
	    'section'  => 'vw_stock_images_pro_topbar_header',
	    'label'    => __('Tagline Font family','vw-stock-images-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_stock_images_pro_header_subtitle_font_size',array(
	  'default' => '',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_subtitle_font_size',array(
	  'label' => __('Tagline Font Size','vw-stock-images-pro'),
	  'description' => __('Add font size in px','vw-stock-images-pro'),
	  'section' => 'vw_stock_images_pro_topbar_header',
	  'setting' => 'vw_stock_images_pro_header_subtitle_font_size',
	  'type'    => 'number'
	));


	$wp_customize->add_setting( 'vw_stock_images_pro_header_text_ct_pallete',
		array(
		  'default' => '',
		  'transport' => 'postMessage',
		  'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_header_text_ct_pallete',
	array(
		'label' => __('Text Typography ','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header'
	)));
	$wp_customize->add_setting('vw_stock_images_pro_topbar_location_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_topbar_location_text',array(
		'label' => __('Location Text','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_topbar_location_text',
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_topbar_location_text_url',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_topbar_location_text_url',array(
		'label' => __('Location Url','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_topbar_location_text_url',
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_topbar_text_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_topbar_text_number',array(
		'label' => __('Number Text','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_topbar_text_number',
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_topbar_text_number_url',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_topbar_text_number_url',array(
		'label' => __('Number Url','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_topbar_text_number_url',
		'type' => 'text'
	));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_text_color', array(
		'label' => __('Top Bar Text Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'settings' => 'vw_stock_images_pro_header_text_color',
	)));
	$wp_customize->add_setting('vw_stock_images_pro_header_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_stock_images_pro_header_text_font_family', array(
	    'section'  => 'vw_stock_images_pro_topbar_header',
	    'label'    => __('Top Bar Text Font family','vw-stock-images-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_stock_images_pro_header_text_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_text_font_size',array(
		'label' => __('Text Font Size','vw-stock-images-pro'),
		'description' => __('Add font size in px','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_header_text_font_size',
		'type'    => 'number'
	));


	$wp_customize->add_setting('vw_stock_images_pro_topbar_location_icon',array(
		'default'   =>get_theme_mod('vw_stock_images_pro_topbar_location_icon'),
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_topbar_location_icon',array(
			'label' => __('Location Image ','vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header',
			'settings' => 'vw_stock_images_pro_topbar_location_icon'
	)));
	$wp_customize->add_setting('vw_stock_images_pro_topbar_number_icon',array(
				'default'   =>get_theme_mod('vw_stock_images_pro_topbar_number_icon'),
		'sanitize_callback'	=> 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_topbar_number_icon',array(
			'label' => __('Phone Image ','vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header',
			'settings' => 'vw_stock_images_pro_topbar_number_icon'
	)));

	$wp_customize->add_setting('vw_stock_images_pro_topbar_appoinment_btn_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_topbar_appoinment_btn_text',array(
		'label' => __('Appoinment Button Text','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_topbar_appoinment_btn_text',
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_topbar_appoinment_btn_url',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_topbar_appoinment_btn_url',array(
		'label' => __('Appoinment Button Url','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting' => 'vw_stock_images_pro_topbar_appoinment_btn_url',
		'type' => 'text'
	));


		$wp_customize->add_setting( 'vw_stock_images_pro_header_button_pallete',
			array(
				'default' => '',
				'transport' => 'postMessage',
				'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
		));
		$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_header_button_pallete',
		array(
			'label' => __('Button Typography ','vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header'
		)));

		$wp_customize->add_setting( 'vw_stock_images_pro_header_button_color', array(
			'default' => '',
			'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_button_color', array(
			'label' => __('Appoinment  Button Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header',
			'settings' => 'vw_stock_images_pro_header_button_color',
		)));
		$wp_customize->add_setting( 'vw_stock_images_pro_header_button_bg_color', array(
			'default' => '',
			'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_button_bg_color', array(
			'label' => __('Appoinment  Button Background Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header',
			'settings' => 'vw_stock_images_pro_header_button_bg_color',
		)));
		$wp_customize->add_setting('vw_stock_images_pro_header_button_font_family',array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control(
				'vw_stock_images_pro_header_button_font_family', array(
				'section'  => 'vw_stock_images_pro_topbar_header',
				'label'    => __('Appoinment  Button Font family','vw-stock-images-pro'),
				'type'     => 'select',
				'choices'  => $font_array,
		));

		$wp_customize->add_setting('vw_stock_images_pro_header_button_font_size',array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_stock_images_pro_header_button_font_size',array(
			'label' => __('Top Bar Button Font Size','vw-stock-images-pro'),
			'description' => __('Add font size in px','vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header',
			'setting' => 'vw_stock_images_pro_header_button_font_size',
			'type'    => 'number'
		));
		$wp_customize->add_setting( 'vw_stock_images_pro_header_button_hover_bg_color', array(
			'default' => '',
			'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_button_hover_bg_color', array(
			'label' => __('Appoinment  Button Hover Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_topbar_header',
			'settings' => 'vw_stock_images_pro_header_button_hover_bg_color',
		)));
	/*------------------------ Header Section----------------------- */

	// middle header icon settings
	$wp_customize->add_section('vw_stock_images_pro_sec_header_section',array(
		'title'	=> __('Header','vw-stock-images-pro'),
		'description'	=> __('Header Settings','vw-stock-images-pro'),
		'priority'	=> null,
		'panel' => 'vw_stock_images_pro_panel_id',
	));



	$wp_customize->add_setting( 'vw_stock_images_pro_header_menu_settings',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_header_menu_settings',
		array(
		'label' => __('Menu Settings','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section'
	)));
	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'vw_stock_images_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_headermenu_color',
	)));
	$wp_customize->add_setting('vw_stock_images_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_stock_images_pro_headermenu_font_family', array(
	    'section'  => 'vw_stock_images_pro_sec_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-stock-images-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_stock_images_pro_headermenu_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_headermenu_font_size',array(
		'label' => __('Menu Font Size','vw-stock-images-pro'),
		'description' => __('Add font size in px','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'setting' => 'vw_stock_images_pro_headermenu_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting( 'vw_stock_images_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_header_menuhovercolor',
	)));
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'vw_stock_images_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'vw_stock_images_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_dropdownbg_itemcolor',
	)));

		$wp_customize->add_setting('vw_stock_images_pro_dropdownbg_item_font_family',array(
		  'default' => '',
		  'capability' => 'edit_theme_options',
		  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
		 ));
		$wp_customize->add_control(
		    'vw_stock_images_pro_dropdownbg_item_font_family', array(
		    'section'  => 'vw_stock_images_pro_sec_header_section',
		    'label'    => __( 'Menu DropDown Item Fonts','vw-stock-images-pro'),
		    'type'     => 'select',
		    'choices'  => $font_array,
		));

		$wp_customize->add_setting('vw_stock_images_pro_dropdownbg_item_font_size',array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_stock_images_pro_dropdownbg_item_font_size',array(
			'label' => __('Menu DropDown Item Font Size','vw-stock-images-pro'),
			'description' => __('Add font size in px','vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_sec_header_section',
			'setting' => 'vw_stock_images_pro_dropdownbg_item_font_size',
			'type'    => 'number'
		));
	$wp_customize->add_setting( 'vw_stock_images_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_dropdownbg_item_hovercolor',
	)));

	$wp_customize->add_setting('vw_stock_images_pro_header_icon_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_icon_font_size',array(
	'label' => __('Icon Font Size','vw-stock-images-pro'),
	'description' => __('Add font size in px','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_header_icon_font_size',
	'type'    => 'number'
	));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_icon_color', array(
	'label' => __('Icon Hover Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_icon_color',
	)));
	$wp_customize->add_setting('vw_stock_images_pro_header_icon_count_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_icon_count_font_size',array(
	'label' => __('Icon Count Font Size','vw-stock-images-pro'),
	'description' => __('Add font size in px','vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'setting' => 'vw_stock_images_pro_header_icon_count_font_size',
	'type'    => 'number'
	));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_icon_count_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_icon_count_color', array(
	'label' => __('Icon Count Hover Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_icon_count_color',
	)));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_search_background_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_search_background_color', array(
	'label' => __('Search Background Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_search_background_color',
	)));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_search_line_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_search_line_color', array(
	'label' => __('Search Border Color', 'vw-stock-images-pro'),
	'section' => 'vw_stock_images_pro_sec_header_section',
	'settings' => 'vw_stock_images_pro_header_search_line_color',
	)));











	//responavie
	$wp_customize->add_setting( 'vw_stock_images_pro_header_res_menu_settings',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_header_res_menu_settings',
		array(
		'label' => __('Responsive Menu Settings','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section'
	)));


	$wp_customize->add_setting( 'vw_stock_images_pro_header_res_background_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_res_background_bgcolor', array(
		'label' => __('Responsive Background Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_header_res_background_bgcolor',
	)));

	$wp_customize->add_setting( 'vw_stock_images_pro_header_res_menu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_res_menu_color', array(
		'label' => __('Responsive Menu Item Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'settings' => 'vw_stock_images_pro_header_res_menu_color',
	)));
	$wp_customize->add_setting('vw_stock_images_pro_header_res_menu_font_family',array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
			'vw_stock_images_pro_header_res_menu_font_family', array(
			'section'  => 'vw_stock_images_pro_sec_header_section',
			'label'    => __( 'Responsive Menu Item Fonts','vw-stock-images-pro'),
			'type'     => 'select',
			'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_stock_images_pro_header_res_menu_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_res_menu_font_size',array(
		'label' => __('Responsive Menu Font Size','vw-stock-images-pro'),
		'description' => __('Add font size in px','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_sec_header_section',
		'setting' => 'vw_stock_images_pro_header_res_menu_font_size',
		'type'    => 'number'
	));

		$wp_customize->add_setting( 'vw_stock_images_pro_header_res_itemcolor', array(
			'default' => '',
			'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_res_itemcolor', array(
			'label' => __('Responsive Menu DropDown Item Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_sec_header_section',
			'settings' => 'vw_stock_images_pro_header_res_itemcolor',
		)));

			$wp_customize->add_setting('vw_stock_images_pro_header_res_item_font_family',array(
			  'default' => '',
			  'capability' => 'edit_theme_options',
			  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
			 ));
			$wp_customize->add_control(
			    'vw_stock_images_pro_header_res_item_font_family', array(
			    'section'  => 'vw_stock_images_pro_sec_header_section',
			    'label'    => __( 'Responsive Menu DropDown Item Fonts','vw-stock-images-pro'),
			    'type'     => 'select',
			    'choices'  => $font_array,
			));

			$wp_customize->add_setting('vw_stock_images_pro_header_res_item_font_size',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control('vw_stock_images_pro_header_res_item_font_size',array(
				'label' => __('Responsive Menu DropDown Item Font Size','vw-stock-images-pro'),
				'description' => __('Add font size in px','vw-stock-images-pro'),
				'section' => 'vw_stock_images_pro_sec_header_section',
				'setting' => 'vw_stock_images_pro_header_res_item_font_size',
				'type'    => 'number'
			));
		// $wp_customize->add_setting( 'vw_stock_images_pro_header_res_item_hovercolor', array(
		// 	'default' => '',
		// 	'sanitize_callback'	=> 'sanitize_hex_color'
		// ));
		// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_res_item_hovercolor', array(
		// 	'label' => __('Responsive Menu DropDown Item Hover Color', 'vw-stock-images-pro'),
		// 	'section' => 'vw_stock_images_pro_sec_header_section',
		// 	'settings' => 'vw_stock_images_pro_header_res_item_hovercolor',
		// )));
		$wp_customize->add_setting(
		    'vw_stock_images_pro_res_open_menu_icon',
		    array(
		      'default'     => '',
		      'sanitize_callback' => 'sanitize_text_field'
		    )
		);
		$wp_customize->add_control(
		    new vw_stock_images_pro_Fontawesome_Icon_Chooser(
		      $wp_customize,
		      'vw_stock_images_pro_res_open_menu_icon',
		      array(
		        'settings'    => 'vw_stock_images_pro_res_open_menu_icon',
		        'section'   => 'vw_stock_images_pro_sec_header_section',
		        'type'      => 'icon',
		        'label'     => esc_html__( 'Choose  Icon', 'vw-stock-images-pro' ),
		      )
		    )
		);
		$wp_customize->add_setting( 'vw_stock_images_pro_res_open_menu_icon_color', array(
			'default' => '',
			'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_res_open_menu_icon_color', array(
			'label' => __('Toggle Icon Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_sec_header_section',
			'settings' => 'vw_stock_images_pro_res_open_menu_icon_color',
		)));

			$wp_customize->add_setting('vw_stock_images_pro_res_open_menu_icon_font_size',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control('vw_stock_images_pro_res_open_menu_icon_font_size',array(
				'label' => __('Toggle Icon Font Size','vw-stock-images-pro'),
				'description' => __('Add font size in px','vw-stock-images-pro'),
				'section' => 'vw_stock_images_pro_sec_header_section',
				'setting' => 'vw_stock_images_pro_res_open_menu_icon_font_size',
				'type'    => 'number'
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
		$wp_customize->add_setting( 'vw_stock_images_pro_header_close_iconcolor', array(
			'default' => '',
			'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_close_iconcolor', array(
			'label' => __('Close Icon Color', 'vw-stock-images-pro'),
			'section' => 'vw_stock_images_pro_sec_header_section',
			'settings' => 'vw_stock_images_pro_header_close_iconcolor',
		)));

			$wp_customize->add_setting('vw_stock_images_pro_header_close_icon_font_size',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field'
			));
			$wp_customize->add_control('vw_stock_images_pro_header_close_icon_font_size',array(
				'label' => __('Close Icon Font Size','vw-stock-images-pro'),
				'description' => __('Add font size in px','vw-stock-images-pro'),
				'section' => 'vw_stock_images_pro_sec_header_section',
				'setting' => 'vw_stock_images_pro_header_close_icon_font_size',
				'type'    => 'number'
			));
