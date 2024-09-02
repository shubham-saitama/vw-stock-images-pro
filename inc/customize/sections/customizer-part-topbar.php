<?php /*
	$wp_customize->add_section('vw_stock_images_pro_topbar_header',array(
		'title'	=> __('Top Bar','vw-stock-images-pro'),
		'description'	=> __('See section settings below and do check documentation too.','vw-stock-images-pro'),
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

	// Contact details
	$wp_customize->add_setting('vw_stock_images_pro_header_link1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_link1',array(
		'label'	=> __('Add My Account Text Here','vw-stock-images-pro'),
		'section'	=> 'vw_stock_images_pro_topbar_header',
		'setting'	=> 'vw_stock_images_pro_header_link1',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_header_link2',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_link2',array(
		'label'	=> __('Add Link 2 Text here','vw-stock-images-pro'),
		'section'	=> 'vw_stock_images_pro_topbar_header',
		'setting'	=> 'vw_stock_images_pro_header_link2',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_header_link3',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_link3',array(
		'label'	=> __('Add Link 3 Text here','vw-stock-images-pro'),
		'section'	=> 'vw_stock_images_pro_topbar_header',
		'setting'	=> 'vw_stock_images_pro_header_link3',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_stock_images_pro_header_link3_url',array(
		'default'	=> __('#','vw-stock-images-pro'),
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control('vw_stock_images_pro_header_link3_url',array(
		'label' => __('Link URL','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'setting'	=> 'vw_stock_images_pro_header_link3_url',
		'type'	=> 'text'
	));
	// Emails
	$wp_customize->add_setting('vw_stock_images_pro_header_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_stock_images_pro_header_email_address',array(
		'label'	=> __('Add Email address Here','vw-stock-images-pro'),
		'section'	=> 'vw_stock_images_pro_topbar_header',
		'setting'	=> 'vw_stock_images_pro_header_email_address',
		'type'	=> 'text'
	));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_contact_details_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_contact_details_color', array(
		'label' => __('Top Bar Contact Details Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'settings' => 'vw_stock_images_pro_header_contact_details_color',
	)));

	$wp_customize->add_setting('vw_stock_images_pro_header_contact_details_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_stock_images_pro_header_contact_details_font_family', array(
	    'section'  => 'vw_stock_images_pro_topbar_header',
	    'label'    => __('Top Bar contact details Font family','vw-stock-images-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_stock_images_pro_header_contact_detailsicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_header_contact_detailsicon_color', array(
		'label' => __('Top Bar contact icon Color', 'vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_topbar_header',
		'settings' => 'vw_stock_images_pro_header_contact_detailsicon_color',
	)));
