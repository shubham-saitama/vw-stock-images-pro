<?php
  $wp_customize->add_section('vw_stock_images_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','vw-stock-images-pro'),
      'description'=> __('Section Ordering.','vw-stock-images-pro'),
      'panel' => 'vw_stock_images_pro_panel_id',
  ));
  $wp_customize->add_setting( 'vw_stock_images_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new vw_stock_images_pro_Repeater_Custom_Control( $wp_customize, 'vw_stock_images_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','vw-stock-images-pro' ),
        'section' => 'vw_stock_images_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','vw-stock-images-pro' ),
  ))));
  $wp_customize->add_setting( 'vw_stock_images_pro_section_ordering_padding_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_section_ordering_padding_settings',
    array(
    'label' => __('Section Padding Top Settings','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_section_ordering_settings'
  )));
  $wp_customize->add_setting('vw_stock_images_pro_slider_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_slider_padding_top',array(
      'label' => __('Slider Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_slider_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_category_slider_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_category_slider_padding_top',array(
      'label' => __('Category Slider Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_category_slider_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_our_feat_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_our_feat_padding_top',array(
      'label' => __('Our Features Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_our_feat_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_designers_fav_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_designers_fav_padding_top',array(
      'label' => __('Designers Fav Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_designers_fav_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_premium_feat_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_premium_feat_padding_top',array(
      'label' => __('Premium Features Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_premium_feat_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_desgn_earn_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_desgn_earn_padding_top',array(
      'label' => __('Design And Earn Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_desgn_earn_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_top_contributer_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_top_contributer_padding_top',array(
      'label' => __('Top Contributer Paddning Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_top_contributer_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_trending_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_trending_padding_top',array(
      'label' => __('Trending Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_trending_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_subscribe_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_subscribe_padding_top',array(
      'label' => __('Newsletter Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_subscribe_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_pricing_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_pricing_padding_top',array(
      'label' => __('Pricing Plans Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_pricing_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_our_clients_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_our_clients_padding_top',array(
      'label' => __('Our Client Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_our_clients_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_our_partners_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_our_partners_padding_top',array(
      'label' => __('Professional Team Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_our_partners_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_latest_news_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_latest_news_padding_top',array(
      'label' => __('Latest News Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_latest_news_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_gallery_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_gallery_padding_top',array(
      'label' => __('Gallery Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_gallery_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_partners_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_stock_images_pro_partners_padding_top',array(
      'label' => __('Partners Padding Top','vw-stock-images-pro'),
      'description' => __('Add Padding Top in Pixels','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_section_ordering_settings',
      'setting'   => 'vw_stock_images_pro_partners_padding_top',
      'type'  => 'number'
  ));
  //General Color Pallete
  $wp_customize->add_section('vw_stock_images_pro_color_pallette',array(
      'title' => __('Typography / General settings','vw-stock-images-pro'),
      'description'=> __('Typography settings','vw-stock-images-pro'),
      'panel' => 'vw_stock_images_pro_panel_id',
  ));


  $wp_customize->add_setting( 'vw_stock_images_pro_theme_layout_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_theme_layout_section_ct_pallete',
    array(
    'label' => __('Theme Layout ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_radio_boxed_full_layout',
      array(
        'default' => 'full-Width',
        'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_stock_images_pro_radio_boxed_full_layout',
      array(
        'type' => 'radio',
        'label' => __('Choose Boxed or Full Width Layout', 'vw-stock-images-pro'),
        'section' => 'vw_stock_images_pro_color_pallette',
        'choices' => array(
        'full-Width' => __('Full Width', 'vw-stock-images-pro'),
        'boxed' => __('Boxed', 'vw-stock-images-pro')
      ),
  ));

  $wp_customize->add_setting('vw_stock_images_pro_radio_boxed_full_layout_value',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_radio_boxed_full_layout_value',array(
      'label' => __('Add Boxed layout Width Here','vw-stock-images-pro'),
      'description' => __('Value should be less than 1140px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_radio_boxed_full_layout_value',
      'type'    => 'number'
    )
  );

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting( 'vw_stock_images_pro_body_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_body_section_ct_pallete',
    array(
    'label' => __('Body Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_body_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'Body Font family','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_body_font_size',array(
      'label' => __('font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_body_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_body_color', array(
    'label' => __('Body color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_body_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_h1_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_h1_section_ct_pallete',
    array(
    'label' => __('H1 Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_h1_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'H1','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_h1_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_h1_font_size',array(
      'label' => __('H1 font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_h1_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_h1_color', array(
    'label' => __('H1 color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_h1_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_h2_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_h2_section_ct_pallete',
    array(
    'label' => __('H2 Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_h2_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'H2','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_h2_font_size',array(
      'label' => __('H2 font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_h2_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_h2_color', array(
    'label' => __('H2 color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_h2_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_h3_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_h3_section_ct_pallete',
    array(
    'label' => __('H3 Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_h3_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'H3','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_h3_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_h3_font_size',array(
      'label' => __('H3 font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_h3_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_h3_color', array(
    'label' => __('H3 color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_h3_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_h4_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_h4_section_ct_pallete',
    array(
    'label' => __('H4 Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_h4_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'H4','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_h4_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_h4_font_size',array(
      'label' => __('H4 font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_h4_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_h4_color', array(
    'label' => __('H4 color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_h4_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_h5_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_h5_section_ct_pallete',
    array(
    'label' => __('H5 Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_h5_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'H5','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_h5_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_h5_font_size',array(
      'label' => __('H5 font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_h5_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_h5_color', array(
    'label' => __('H5 color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_h5_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_h6_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_h6_section_ct_pallete',
    array(
    'label' => __('H6 Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_stock_images_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_h6_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'H6','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_h6_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_h6_font_size',array(
      'label' => __('H6 font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_h6_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_h6_color', array(
    'label' => __('H6 color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_h6_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_para_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_para_section_ct_pallete',
    array(
    'label' => __('Paragraph Typography ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  //paragarph font family
  $wp_customize->add_setting('vw_stock_images_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_stock_images_pro_paragarpah_font_family', array(
      'section'  => 'vw_stock_images_pro_color_pallette',
      'label'    => __( 'Paragraph','vw-stock-images-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_stock_images_pro_para_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_stock_images_pro_para_font_size',array(
      'label' => __('Paragraph font size in px','vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'setting' => 'vw_stock_images_pro_para_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_stock_images_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_para_color', array(
      'label' => __('Para color', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_color_pallette',
      'settings' => 'vw_stock_images_pro_para_color',
    )
  ));

  $wp_customize->add_setting( 'vw_stock_images_pro_global_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_global_section_ct_pallete',
    array(
    'label' => __('Global Color ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_primary_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_primary_section_ct_pallete',
    array(
    'label' => __('Primary ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_hi_first_color', array(
    'default' => '#339D55',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_hi_first_color', array(
    'label' => __('Primary Color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_hi_first_color',
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_secondry_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_stock_images_pro_secondry_section_ct_pallete',
    array(
    'label' => __('Secondry ','vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_stock_images_pro_hi_scnd_color', array(
    'default' => '#FCB900',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_stock_images_pro_hi_scnd_color', array(
    'label' => __('Secondry Color', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_color_pallette',
    'settings' => 'vw_stock_images_pro_hi_scnd_color',
  )));
  /*------------------------ Button ---------------------------*/
  $wp_customize->add_section('vw_stock_images_pro_section_button_settings',array(
      'title' => __('Button Typography','vw-stock-images-pro'),
      'panel' => 'vw_stock_images_pro_panel_id',
  ));
