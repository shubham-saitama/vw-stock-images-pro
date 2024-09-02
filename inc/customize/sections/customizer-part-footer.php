<?php
    // Footer Menu

    $wp_customize->add_section('vw_stock_images_pro_footer_menu_section',array(
        'title' => __('Footer Menu','vw-stock-images-pro'),
        'panel' => 'vw_stock_images_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_section_footer_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_section_footer_bgcolor', array(
        'label' => __('Background Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
        'settings' => 'vw_stock_images_pro_section_footer_bgcolor',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_section_footer_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_stock_images_pro_section_footer_bgimage',
            array(
                'label' => __('Background image','vw-stock-images-pro'),
                'section' => 'vw_stock_images_pro_footer_menu_section',
                'settings' => 'vw_stock_images_pro_section_footer_bgimage'
    )));
  $wp_customize->add_setting( 'vw_stock_images_pro_section_footer_bg_attachment', array(
      'default'         => '',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_stock_images_pro_section_footer_bg_attachment', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-stock-images-pro'),
      'section'   => 'vw_stock_images_pro_footer_menu_section',
      'choices'   => array(
      'vw-fixed'      => __( 'Fixed', 'vw-stock-images-pro' ),
      'vw-scroll'      => __( 'Scroll', 'vw-stock-images-pro' ),
  )));


    $wp_customize->selective_refresh->add_partial( 'vw_stock_images_pro_radiolast_enable', array(
      'selector' => '#footer_box',
      'render_callback' => 'optical_lens_shop_customize_partial_vw_stock_images_pro_radiolast_enable',
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_footer_menu_title_ct_pallete',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_footer_menu_title_ct_pallete',
    array(
        'label' => __('Section Menu Typography ','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section'
    )));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_menu_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_menu_heading_color', array(
        'label' => __('Heading Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_menu_heading_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_menu_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_menu_heading_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_menu_section',
        'label'    => __( 'Heading Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_menu_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_menu_heading_font_size',array(
        'label' => __('Heading Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_menu_heading_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_menu_para_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_menu_para_color', array(
        'label' => __('Paragraph Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_menu_para_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_menu_para_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_menu_para_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_menu_section',
        'label'    => __( 'Paragraph Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_menu_para_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_menu_para_font_size',array(
        'label' => __('Paragraph Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_menu_para_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_footer_menu_item_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_menu_item_color', array(
        'label' => __('Menu Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_menu_item_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_menu_item_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_menu_item_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_menu_section',
        'label'    => __( 'Menu Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_menu_item_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_menu_item_font_size',array(
        'label' => __('Menu Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_menu_item_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_contact_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_contact_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_contact_heading_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_contact_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_contact_heading_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_menu_section',
        'label'    => __( 'Contact Heading Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_contact_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_contact_heading_font_size',array(
        'label' => __('Contact Heading Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_contact_heading_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_contact_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_contact_content_color', array(
        'label' => __('Contact Content Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_contact_content_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_contact_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_contact_content_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_menu_section',
        'label'    => __( 'Contact Content Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_contact_content_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_contact_content_font_size',array(
        'label' => __('Contact Content Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_contact_content_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_icon_color', array(
        'label' => __('Icon Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_icon_color',
    )));

    $wp_customize->add_setting('vw_stock_images_pro_footer_icon_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_icon_font_size',array(
        'label' => __('Icon Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_icon_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_footer_icon__bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_icon__bg_color', array(
        'label' => __('Icon Background', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_icon__bg_color',
    )));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_icon_hover_bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_icon_hover_bg_color', array(
        'label' => __('Icon Hover Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_icon_hover_bg_color',
    )));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_icon_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_icon_hover_color', array(
        'label' => __('Icon Hover Background Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_icon_hover_color',
    )));



    $wp_customize->add_setting('vw_stock_images_pro_footer_instagram_img',array(
  		'default'   =>get_theme_mod('vw_stock_images_pro_footer_instagram_img'),
  		'sanitize_callback'	=> 'esc_url_raw',
  	));
  	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_footer_instagram_img',array(
  			'label' => __('Instagram Image Image ','vw-stock-images-pro'),
  			'description' => __('Add image size 75x75 ','vw-stock-images-pro'),
  			'section' => 'vw_stock_images_pro_footer_menu_section',
  			'settings' => 'vw_stock_images_pro_footer_instagram_img'
  	)));


    $wp_customize->add_setting('vw_stock_images_pro_footer_instagram_title',array(
    	'default' => '',
    	'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_instagram_title',array(
    	'label' => __('Instagram Text','vw-stock-images-pro'),
    	'section' => 'vw_stock_images_pro_footer_menu_section',
    	'setting' => 'vw_stock_images_pro_footer_instagram_title',
    	'type' => 'text'
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_instagram_shortcode',array(
    	'default' => '',
    	'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_instagram_shortcode',array(
    	'label' => __('Instagram Shortcode','vw-stock-images-pro'),
    	'section' => 'vw_stock_images_pro_footer_menu_section',
    	'setting' => 'vw_stock_images_pro_footer_instagram_shortcode',
    	'type' => 'text'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_instagram_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_instagram_color', array(
        'label' => __('Instagram Box Background color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_instagram_color',
    )));


    $wp_customize->add_setting( 'vw_stock_images_pro_footer_instagram_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_instagram_title_color', array(
        'label' => __('Instagram Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'settings' => 'vw_stock_images_pro_footer_instagram_title_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_instagram_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_instagram_title_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_menu_section',
        'label'    => __( 'Instagram Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_instagram_title_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_instagram_title_font_size',array(
        'label' => __('Instagram Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_menu_section',
        'setting' => 'vw_stock_images_pro_footer_instagram_title_font_size',
        'type'    => 'number'
    ));

    // /*----------------------- Footer Sections --------------------------------------*/

    $wp_customize->add_section('vw_stock_images_pro_footer_copyright_section',array(
        'title' => __('Footer Text','vw-stock-images-pro'),
        'description'   => __('Add some footer text here.','vw-stock-images-pro'),
        'priority'  => null,
        'panel' => 'vw_stock_images_pro_panel_id',
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_footer_copyright_section_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_copyright_section_bgcolor', array(
        'label' => __('Background Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_copyright_section',
          'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
        'settings' => 'vw_stock_images_pro_footer_copyright_section_bgcolor',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_copyright_section_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_stock_images_pro_footer_copyright_section_bgimage',
            array(
                'label' => __('Background image','vw-stock-images-pro'),
                'section' => 'vw_stock_images_pro_footer_copyright_section',
                'settings' => 'vw_stock_images_pro_footer_copyright_section_bgimage'
    )));

    $wp_customize->add_setting( 'vw_stock_images_pro_footer_copyright_image_bg', array(
        'default'         => '',
        'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_copyright_image_bg', array(
        'type'      => 'radio',
        'label'     => __('Choose image option', 'vw-stock-images-pro'),
        'section'   => 'vw_stock_images_pro_footer_copyright_section',
        'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-stock-images-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-stock-images-pro' ),
    )));
    $wp_customize->add_setting( 'vw_stock_images_pro_footer_text_content_pallate',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_footer_text_content_pallate',
    array(
        'label' => __('Footer Text Typography ','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_copyright_section'
    )));

    $wp_customize->add_setting('vw_stock_images_pro_footer_copyright_para',array(
    	'default' => '',
    	'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_copyright_para',array(
    	'label' => __('Footer Copyright Text','vw-stock-images-pro'),
    	'section' => 'vw_stock_images_pro_footer_copyright_section',
    	'setting' => 'vw_stock_images_pro_footer_copyright_para',
    	'type' => 'text'
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_footer_privacy_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_footer_privacy_text_color', array(
        'label' => __('Text Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_copyright_section',
        'settings' => 'vw_stock_images_pro_footer_privacy_text_color',
    )));
    $wp_customize->add_setting('vw_stock_images_pro_footer_privacy_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_footer_privacy_text_font_family', array(
        'section'  => 'vw_stock_images_pro_footer_copyright_section',
        'label'    => __( 'Text Font Family','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_stock_images_pro_footer_privacy_text_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_footer_privacy_text_font_size',array(
        'label' => __('Text Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_footer_copyright_section',
        'setting' => 'vw_stock_images_pro_footer_privacy_text_font_size',
        'type'    => 'number'
    ));


    //----------------Contact Page section------------------------
    $wp_customize->add_section('vw_stock_images_pro_contact_page_section',array(
        'title' => __('Contact Page','vw-stock-images-pro'),
        'description'   => __('Add contact page settings here','vw-stock-images-pro'),
        'priority'  => null,
        'panel' => 'vw_stock_images_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_bg_color', array(
        'default' => __('','vw-stock-images-pro'),
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contact_page_bg_color', array(
        'label' => 'Background Color',
        'section' => 'vw_stock_images_pro_contact_page_section',
        'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
        'settings' => 'vw_stock_images_pro_contact_page_bg_color',
    )));
  $wp_customize->add_setting('vw_stock_images_pro_contact_page_bg_image',array(
      'default'   => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_contact_page_bg_image',array(
          'label' => __('Background image','vw-stock-images-pro'),
          'description' => __('Dimension 1410px x 380px','vw-stock-images-pro'),
          'section' => 'vw_stock_images_pro_contact_page_section',
          'settings' => 'vw_stock_images_pro_contact_page_bg_image'
  )));
  $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_image_bg_setting', array(
      'default'         => '',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_stock_images_pro_contact_page_image_bg_setting', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-stock-images-pro'),
      'section'   => 'vw_stock_images_pro_contact_page_section',
      'choices'   => array(
      'vw-fixed'      => __( 'Fixed', 'vw-stock-images-pro' ),
      'vw-scroll'      => __( 'Scroll', 'vw-stock-images-pro' ),
  )));
  $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_section_ct_pallete',
	array(
	  'default' => '',
	  'transport' => 'postMessage',
	  'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_contact_page_section_ct_pallete',
	array(
		'label' => __('Content Typoghraphy','vw-stock-images-pro'),
		'section' => 'vw_stock_images_pro_contact_page_section'
	)));

  $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_form_color', array(
      'default' => __('','vw-stock-images-pro'),
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contact_page_form_color', array(
      'label' => __('Form Background image','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_contact_page_section',
      'settings' => 'vw_stock_images_pro_contact_page_form_color',
  )));
$wp_customize->add_setting('vw_stock_images_pro_contact_page_form_bg_image',array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_stock_images_pro_contact_page_form_bg_image',array(
        'label' => __('Form Background image','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'settings' => 'vw_stock_images_pro_contact_page_form_bg_image'
)));

  $wp_customize->add_setting('vw_stock_images_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_address_longitude',array(
        'label' => __('Longitude','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting'   => 'vw_stock_images_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_stock_images_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_address_latitude',array(
        'label' => __('Latitude','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting'   => 'vw_stock_images_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_stock_images_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_stock_images_pro_contactpage_form_title',array(
        'label' => __('Title','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting'   => 'vw_stock_images_pro_contactpage_form_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_stock_images_pro_contactpage_form_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_stock_images_pro_contactpage_form_subtitle',array(
        'label' => __('SubTitle','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting'   => 'vw_stock_images_pro_contactpage_form_subtitle',
        'type'  => 'text'
    ));



    $wp_customize->add_setting('vw_stock_images_pro_contact_us_section_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_stock_images_pro_contact_us_section_shortcode',array(
        'label' => __('Contact Form Shortcode','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting'   => 'vw_stock_images_pro_contact_us_section_shortcode',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_contactpage_content_color_settings',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_contactpage_content_color_settings',
    array(
        'label' => __('Section Color & Typography','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section'
    )));

    $wp_customize->add_setting( 'vw_stock_images_pro_contactpage_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_contactpage_section_ct_pallete',
    array(
        'label' => __('Heading Typography ','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section'
    )));
    $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contact_page_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'settings' => 'vw_stock_images_pro_contact_page_heading_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_stock_images_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_contact_page_heading_font_family', array(
        'section'  => 'vw_stock_images_pro_contact_page_section',
        'label'    => __( 'Heading Fonts','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('vw_stock_images_pro_contact_page_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_contact_page_heading_font_size',array(
        'label' => __('Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting' => 'vw_stock_images_pro_contact_page_heading_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_section_ct_pallete',
        array(
          'default' => '',
          'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_contact_page_section_ct_pallete',
        array(
        'label' => __('Content Typography ','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section'
    )));

    $wp_customize->add_setting( 'vw_stock_images_pro_contact_page_head_content_para_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contact_page_head_content_para_color', array(
        'label' => __('Contact Content Paragraph Color', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'settings' => 'vw_stock_images_pro_contact_page_head_content_para_color',
    )));

    $wp_customize->add_setting('vw_stock_images_pro_contact_page_head_content_para_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_stock_images_pro_contact_page_head_content_para_font_family', array(
        'section'  => 'vw_stock_images_pro_contact_page_section',
        'label'    => __( 'Contact Content Paragraph Fonts','vw-stock-images-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('vw_stock_images_pro_contact_page_head_content_para_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_contact_page_head_content_para_font_size',array(
        'label' => __('Contact Content Paragraph Font Size','vw-stock-images-pro'),
        'description' => __('Add font size in px','vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_contact_page_section',
        'setting' => 'vw_stock_images_pro_contact_page_head_content_para_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_contactform_button_color', array(
    'default' => '',
    'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contactform_button_color',array(
    'label' => __('Button Color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_contact_page_section',
    'settings' => 'vw_stock_images_pro_contactform_button_color',
    )));

    $wp_customize->add_setting('vw_stock_images_pro_contactform_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
      'vw_stock_images_pro_contactform_button_font_family', array(
      'section'  => 'vw_stock_images_pro_contact_page_section',
      'label'    => __( 'Button Font Family','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array
    ));
    $wp_customize->add_setting('vw_stock_images_pro_contactform_button_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_contactform_button_font_size',array(
    'label' => __('Button Font Size','vw-stock-images-pro'),
    'description' => __('Add font size in px','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_contact_page_section',
    'setting' => 'vw_stock_images_pro_contactform_button_font_size',
    'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_stock_images_pro_contactform_button_bg_color', array(
    'default' => '',
    'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contactform_button_bg_color',array(
    'label' => __('Button Background Color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_contact_page_section',
    'settings' => 'vw_stock_images_pro_contactform_button_bg_color',
    )));

    $wp_customize->add_setting( 'vw_stock_images_pro_contactform_button_hover_bg_color', array(
    'default' => '',
    'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_contactform_button_hover_bg_color',array(
    'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_contact_page_section',
    'settings' => 'vw_stock_images_pro_contactform_button_hover_bg_color',
    )));
?>
