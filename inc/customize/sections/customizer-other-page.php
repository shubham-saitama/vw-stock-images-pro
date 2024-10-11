<?php
// ---------------------About Page Setting---------------------------
$wp_customize->add_section('vw_stock_images_pro_about_page', array(
  'title' => __('About Page', 'vw-stock-images-pro'),
  'description' => __('About Page Settings', 'vw-stock-images-pro'),
  'priority' => null,
  'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_mission_heading', array(
  'label' => __('Mission Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_mission_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_paragraph', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_mission_paragraph', array(
  'label' => __('Mission Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_mission_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_story_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_story_heading', array(
  'label' => __('Story Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_story_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_story_paragraph', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_story_paragraph', array(
  'label' => __('Story Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_story_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_vission_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_vission_heading', array(
  'label' => __('Vission Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_vission_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_vission_paragraph', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_vission_paragraph', array(
  'label' => __('Vission Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_vission_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_vission_point_one', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_vission_point_one', array(
  'label' => __('Vission Point One', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_vission_point_one',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_vission_point_two', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_vission_point_two', array(
  'label' => __('Vission Point Two', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_vission_point_two',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_vission_img_one', array(
  'default' => get_theme_mod('vw_stock_images_pro_about_section_vission_img_one'),
  'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_about_section_vission_img_one', array(
  'label' => __('About Image One', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'settings' => 'vw_stock_images_pro_about_section_vission_img_one'
)));
$wp_customize->add_setting('vw_stock_images_pro_about_section_vission_img_two', array(
  'default' => get_theme_mod('vw_stock_images_pro_about_section_vission_img_two'),
  'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_about_section_vission_img_two', array(
  'label' => __('About Image One', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'settings' => 'vw_stock_images_pro_about_section_vission_img_two'
)));


$wp_customize->add_setting('vw_stock_images_pro_about_section_our_value_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_our_value_heading', array(
  'label' => __('Our Values Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_our_value_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vvw_stock_images_pro_about_section_our_value_paragraph', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vvw_stock_images_pro_about_section_our_value_paragraph', array(
  'label' => __('Our Values Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vvw_stock_images_pro_about_section_our_value_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_our_resource_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_our_resource_heading', array(
  'label' => __('Our Resources Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_our_resource_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_our_resource_paragraph', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_our_resource_paragraph', array(
  'label' => __('Our Resources Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_our_resource_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_feature_img', array(
  'default' => get_theme_mod('vw_stock_images_pro_about_section_feature_img'),
  'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_about_section_feature_img', array(
  'label' => __('Feature Image', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'settings' => 'vw_stock_images_pro_about_section_feature_img'
)));

$wp_customize->add_setting('vw_stock_images_pro_about_section_feature_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_feature_heading', array(
  'label' => __('Features Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_feature_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_feature_paragraph', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_feature_paragraph', array(
  'label' => __('Features Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_feature_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_feature_point_one', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_feature_point_one', array(
  'label' => __('Features Point One', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_feature_point_one',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_feature_point_two', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_feature_point_two', array(
  'label' => __('Features Point Two', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_feature_point_two',
  'type' => 'text'
));

$wp_customize->add_setting(
  'vw_stock_images_pro_about_section_content_color_typoghraphy',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_about_section_content_color_typoghraphy',
  array(
    'label' => __('Color & Font setting', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_about_page'
  )
));

$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_about_section_mission_heading_color', array(
  'label' => __('Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'settings' => 'vw_stock_images_pro_about_section_mission_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_about_section_mission_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_about_page',
    'label' => __('Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_mission_heading_font_size', array(
  'label' => __('Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_mission_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_para_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_about_section_mission_para_color', array(
  'label' => __('Paragraph Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'settings' => 'vw_stock_images_pro_about_section_mission_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_para_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_about_section_mission_para_font_family',
  array(
    'section' => 'vw_stock_images_pro_about_page',
    'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_about_section_mission_para_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_about_section_mission_para_font_size', array(
  'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'setting' => 'vw_stock_images_pro_about_section_mission_para_font_size',
  'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_about_section_points_dot_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_about_section_points_dot_color', array(
  'label' => __('Points Dot Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_about_page',
  'settings' => 'vw_stock_images_pro_about_section_points_dot_color',
)));
// ---------------------Support Page Setting---------------------------


$wp_customize->add_section('vw_stock_images_pro_support_page', array(
  'title' => __('Support Page Setting', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));


$wp_customize->add_setting('vw_stock_images_pro_support_page_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_support_page_heading_color', array(
  'label' => __('Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_support_page',
  'settings' => 'vw_stock_images_pro_support_page_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_support_page_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_support_page_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_support_page',
    'label' => __('Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_support_page_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_support_page_heading_font_size', array(
  'label' => __('Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_support_page',
  'setting' => 'vw_stock_images_pro_support_page_heading_font_size',
  'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_support_page_sub_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_support_page_sub_heading_color', array(
  'label' => __('Sub Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_support_page',
  'settings' => 'vw_stock_images_pro_support_page_sub_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_support_page_sub_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_support_page_sub_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_support_page',
    'label' => __('Sub Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_support_page_sub_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_support_page_sub_heading_font_size', array(
  'label' => __('Sub Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_support_page',
  'setting' => 'vw_stock_images_pro_support_page_sub_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_support_page_para_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_support_page_para_color', array(
  'label' => __('Content Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_support_page',
  'settings' => 'vw_stock_images_pro_support_page_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_support_page_para_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_support_page_para_font_family',
  array(
    'section' => 'vw_stock_images_pro_support_page',
    'label' => __('Content Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_support_page_para_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_support_page_para_font_size', array(
  'label' => __('Content Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_support_page',
  'setting' => 'vw_stock_images_pro_support_page_para_font_size',
  'type' => 'number'
));


// ---------------------Category Page Setting---------------------------
$wp_customize->add_section('vw_stock_images_pro_category_page', array(
  'title' => __('Category Page Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));


$wp_customize->add_setting('vw_stock_images_pro_category_page_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_heading_color', array(
  'label' => __('Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_heading_font_size', array(
  'label' => __('Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_para_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_para_color', array(
  'label' => __('Paragraph Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_para_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_para_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Paragraph Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_para_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_para_font_size', array(
  'label' => __('Paragraph Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_para_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_sub_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_sub_heading_color', array(
  'label' => __('Sub Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_sub_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_sub_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_sub_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Sub Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_sub_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_sub_heading_font_size', array(
  'label' => __('Sub Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_sub_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_points_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_points_color', array(
  'label' => __('Points Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_points_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_points_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_points_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Points Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_points_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_points_font_size', array(
  'label' => __('Points Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_points_font_size',
  'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_category_page_points_check_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_points_check_bg_color', array(
  'label' => __('Check Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_points_check_bg_color',
)));
$wp_customize->add_setting(
  'vw_stock_images_pro_category_page_category_tab_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_category_page_category_tab_setting',
  array(
    'label' => __('Category Tab Setting ', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_category_page'
  )
));

$wp_customize->add_setting('vw_stock_images_pro_category_page_category_tab_category_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_tab_category_color', array(
  'label' => __('Tab Category Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_tab_category_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_tab_category_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_category_tab_category_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Tab Category Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_tab_category_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_category_tab_category_font_size', array(
  'label' => __('Tab Category Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_category_tab_category_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_tab_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_tab_bg_color', array(
  'label' => __('Tab Category Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_tab_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_tab_active_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_tab_active_bg_color', array(
  'label' => __('Tab Category Active Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_tab_active_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_name_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_name_color', array(
  'label' => __('Tab Category Name Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_name_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_name_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_category_name_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Tab Category Name Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_name_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_category_name_font_size', array(
  'label' => __('Tab Category Name Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_category_name_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_name_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_name_bg_color', array(
  'label' => __('Tab Category Name Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_name_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_main_heading_color', array(
  'label' => __('Category Name Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_main_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_category_main_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Category Name Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_category_main_heading_font_size', array(
  'label' => __('Category Name Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_category_main_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_sub_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_main_sub_heading_color', array(
  'label' => __('Category Sub Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_main_sub_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_sub_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_category_main_sub_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Category Sub Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_sub_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_category_main_sub_heading_font_size', array(
  'label' => __('Category Sub Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_category_main_sub_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_content_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_main_content_color', array(
  'label' => __('Category Content Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_main_content_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_content_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_category_main_content_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Category Content Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_main_content_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_category_main_content_font_size', array(
  'label' => __('Category Content Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_category_main_content_font_size',
  'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_category_page_category_btn_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_btn_color', array(
  'label' => __('Get Service Button Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_btn_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_category_page_category_btn_font_size', array(
  'label' => __(' Get Service Button Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'setting' => 'vw_stock_images_pro_category_page_category_btn_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_btn_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_category_page_category_btn_font_family',
  array(
    'section' => 'vw_stock_images_pro_category_page',
    'label' => __('Get Service Button Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);

$wp_customize->add_setting('vw_stock_images_pro_category_page_category_btn_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_btn_bg_color', array(
  'label' => __('Get Service Button Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_btn_hover_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_btn_hover_bg_color', array(
  'label' => __('Get Service Button Hover Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_btn_hover_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_category_page_category_section_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_category_page_category_section_bg_color', array(
  'label' => __('Section Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_category_page',
  'settings' => 'vw_stock_images_pro_category_page_category_section_bg_color',
)));
// ---------------------Location Page Setting---------------------------

$wp_customize->add_section('vw_stock_images_pro_lacation_page', array(
  'title' => __('Location Page Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting(
  'vw_stock_images_pro_lacation_page_main_map_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_lacation_page_main_map_setting',
  array(
    'label' => __('Map Setting ', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_lacation_page'
  )
));
$wp_customize->add_setting('vw_stock_images_pro_location_longitude', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_longitude', array(
  'label' => __('Map Longitude', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_longitude',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_location_latitude', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_latitude', array(
  'label' => __(' Map Latitude', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_latitude',
  'type' => 'text'
));

$wp_customize->add_setting(
  'vw_stock_images_pro_lacation_page_card_setting',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_lacation_page_card_setting',
  array(
    'label' => __('Card Setting ', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_lacation_page'
  )
));

$no_cards = get_theme_mod('vw_stock_images_pro_location_number');

$wp_customize->add_setting('vw_stock_images_pro_location_number', array(
  'default' => __('', 'vw-stock-images-pro'),
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_number', array(
  'label' => __('No Of Locations', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_number',
  'type' => 'Number'
));

for ($i = 1; $i <= $no_cards; $i++) {
  $wp_customize->add_setting(
    'vvw_stock_images_pro_location_number_settings' . $i,
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
    )
  );
  $wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'vvw_stock_images_pro_location_number_settings' . $i,
    array(
      'label' => __('Location ' . $i, 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_lacation_page'
    )
  ));

  $wp_customize->add_setting('vw_stock_images_pro_location_name' . $i, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_stock_images_pro_location_name' . $i, array(
    'label' => __('Location Name', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_lacation_page',
    'setting' => 'vw_stock_images_pro_location_name' . $i,
    'type' => 'text'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_location_address' . $i, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_stock_images_pro_location_address' . $i, array(
    'label' => __('Location Address', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_lacation_page',
    'setting' => 'vw_stock_images_pro_location_address' . $i,
    'type' => 'text'
  ));
  $wp_customize->add_setting('vw_stock_images_pro_location_number' . $i, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_stock_images_pro_location_number' . $i, array(
    'label' => __('Location Number', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_lacation_page',
    'setting' => 'vw_stock_images_pro_location_number' . $i,
    'type' => 'text'
  ));
}

$wp_customize->add_setting('vw_stock_images_pro_location_name_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_name_color', array(
  'label' => __('Location Name Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_name_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_location_name_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_name_font_size', array(
  'label' => __(' Location Name Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_name_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_location_name_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_location_name_font_family',
  array(
    'section' => 'vw_stock_images_pro_lacation_page',
    'label' => __('Location Name Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_location_address_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_address_color', array(
  'label' => __('Location Address Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_address_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_location_address_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_address_font_size', array(
  'label' => __(' Location Address Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_address_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_location_address_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_location_address_font_family',
  array(
    'section' => 'vw_stock_images_pro_lacation_page',
    'label' => __('Location Address Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_location_number_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_number_color', array(
  'label' => __('Location Number Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_number_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_location_number_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_number_font_size', array(
  'label' => __(' Location Number Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_number_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_location_number_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_location_number_font_family',
  array(
    'section' => 'vw_stock_images_pro_lacation_page',
    'label' => __('Location Number Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);

$wp_customize->add_setting('vw_stock_images_pro_location_btn_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_btn_color', array(
  'label' => __('Button Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_location_btn_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_location_btn_font_size', array(
  'label' => __(' Button Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'setting' => 'vw_stock_images_pro_location_btn_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_location_btn_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_location_btn_font_family',
  array(
    'section' => 'vw_stock_images_pro_lacation_page',
    'label' => __('Button Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);

$wp_customize->add_setting('vw_stock_images_pro_location_btn_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_btn_bg_color', array(
  'label' => __('Button Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_location_btn_hover_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_btn_hover_bg_color', array(
  'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_btn_hover_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_location_card_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_location_card_bg_color', array(
  'label' => __('Card Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_lacation_page',
  'settings' => 'vw_stock_images_pro_location_card_bg_color',
)));
// ---------------------Appoinment Page---------------------------
$wp_customize->add_section('vw_stock_images_pro_appoinment_page', array(
  'title' => __('Appoinment Page Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_section('vw_stock_images_pro_appoinment_page', array(
  'title' => __('Appoinment Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_form_heading', array(
  'label' => __('Appoinment Heading', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'setting' => 'vw_stock_images_pro_appoinment_form_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_shortcode', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_form_shortcode', array(
  'label' => __('Appoinment Shortcode', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'setting' => 'vw_stock_images_pro_appoinment_form_shortcode',
  'type' => 'text'
));

$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_form_heading_color', array(
  'label' => __('Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'settings' => 'vw_stock_images_pro_appoinment_form_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_form_heading_font_size', array(
  'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'setting' => 'vw_stock_images_pro_appoinment_form_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_appoinment_form_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_appoinment_page',
    'label' => __('Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);


$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_btn_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_form_btn_color', array(
  'label' => __('Button Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'settings' => 'vw_stock_images_pro_appoinment_form_btn_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_btn_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_appoinment_form_btn_font_size', array(
  'label' => __(' Button Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'setting' => 'vw_stock_images_pro_appoinment_form_btn_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_btn_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_appoinment_form_btn_font_family',
  array(
    'section' => 'vw_stock_images_pro_appoinment_page',
    'label' => __('Button Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);

$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_btn_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_form_btn_bg_color', array(
  'label' => __('Button Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'settings' => 'vw_stock_images_pro_appoinment_form_btn_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_btn_hover_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_form_btn_hover_bg_color', array(
  'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'settings' => 'vw_stock_images_pro_appoinment_form_btn_hover_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_appoinment_form_card_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_appoinment_form_card_bg_color', array(
  'label' => __('Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_appoinment_page',
  'settings' => 'vw_stock_images_pro_appoinment_form_card_bg_color',
)));

// ---------------------Terms & Condition Page---------------------------

$wp_customize->add_section('vw_stock_images_pro_terms_condition_page', array(
  'title' => __('Terms & Condtion Page Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));

$wp_customize->add_setting('vw_stock_images_pro_terms_condition_page_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_terms_condition_page_heading_color', array(
  'label' => __('Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_terms_condition_page',
  'settings' => 'vw_stock_images_pro_terms_condition_page_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_terms_condition_page_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_terms_condition_page_heading_font_size', array(
  'label' => __(' Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_terms_condition_page',
  'setting' => 'vw_stock_images_pro_terms_condition_page_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_terms_condition_page_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_terms_condition_page_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_terms_condition_page',
    'label' => __('Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_terms_condition_page_para_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_terms_condition_page_para_color', array(
  'label' => __('Paragraph Color Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_terms_condition_page',
  'settings' => 'vw_stock_images_pro_terms_condition_page_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_terms_condition_page_para_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_terms_condition_page_para_font_size', array(
  'label' => __(' Paragraph Color Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_terms_condition_page',
  'setting' => 'vw_stock_images_pro_terms_condition_page_para_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_terms_condition_page_para_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_terms_condition_page_para_font_family',
  array(
    'section' => 'vw_stock_images_pro_terms_condition_page',
    'label' => __('Paragraph Color Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
// ------------------------Privacy Policy Page
$wp_customize->add_section('vw_stock_images_pro_privacy_policy_page', array(
  'title' => __('Privacy Policy Page Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting('vw_stock_images_pro_privacy_policy_page_heading_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_privacy_policy_page_heading_color', array(
  'label' => __('Heading Color Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_privacy_policy_page',
  'settings' => 'vw_stock_images_pro_privacy_policy_page_heading_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_privacy_policy_page_heading_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_privacy_policy_page_heading_font_size', array(
  'label' => __(' Heading Color Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_privacy_policy_page',
  'setting' => 'vw_stock_images_pro_privacy_policy_page_heading_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_privacy_policy_page_heading_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_privacy_policy_page_heading_font_family',
  array(
    'section' => 'vw_stock_images_pro_privacy_policy_page',
    'label' => __('Heading Color Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_privacy_policy_page_para_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_privacy_policy_page_para_color', array(
  'label' => __('Paragraph Color Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_privacy_policy_page',
  'settings' => 'vw_stock_images_pro_privacy_policy_page_para_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_privacy_policy_page_para_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_privacy_policy_page_para_font_size', array(
  'label' => __(' Paragraph Color Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_privacy_policy_page',
  'setting' => 'vw_stock_images_pro_privacy_policy_page_para_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_privacy_policy_page_para_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_privacy_policy_page_para_font_family',
  array(
    'section' => 'vw_stock_images_pro_privacy_policy_page',
    'label' => __('Paragraph Color Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);



//-------------------Sell Content page setting---------------

$wp_customize->add_section('vw_stock_images_pro_sell_content_page', array(
  'title' => __('Sell Content Page Setting', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting('product_helpline_fields', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('product_helpline_fields', array(
  'label' => __('Add Helpline Number', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_sell_content_page',
  'type' => 'text'
));

$wp_customize->add_setting('product_helpline_timing', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('product_helpline_timing', array(
  'label' => __('Add Timing', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_sell_content_page',
  'type' => 'text'
));

for ($i = 1; $i <= 4; $i++) {

  $wp_customize->add_setting('vw_stock_images_pro_why_join_us_sec_image' . $i, array(
    'default' => get_theme_mod('vw_stock_images_pro_why_join_us_sec_image' . $i),
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_stock_images_pro_why_join_us_sec_image' . $i, array(
    'label' => __('Feature ' . $i . ' Image', 'vw-stock-images-pro'),
    'description' => __('choose image', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_sell_content_page',
    'settings' => 'vw_stock_images_pro_why_join_us_sec_image' . $i,
  )));

  $wp_customize->add_setting(
    'vw_stock_images_pro_why_join_us_sec_feature_title_' . $i,
    array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    'vw_stock_images_pro_why_join_us_sec_feature_title_' . $i,
    array(
      'label' => __('Feature ' . $i . ' Title', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_sell_content_page',
      'setting' => 'vw_stock_images_pro_why_join_us_sec_feature_title_' . $i,
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'vw_stock_images_pro_why_join_us_sec_feature_desc_' . $i,
    array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    'vw_stock_images_pro_why_join_us_sec_feature_desc_' . $i,
    array(
      'label' => __('Feature ' . $i . ' Descreption', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_sell_content_page',
      'setting' => 'vw_stock_images_pro_why_join_us_sec_feature_desc_' . $i,
      'type' => 'text'
    )
  );


}



$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_heading_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_why_join_us_sec_feature_heading_settings',
  array(
    'label' => __('Why Join US Heading settings', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_sell_content_page'
  )
));

$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_title_font_family',
  array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'vw_stock_images_pro_why_join_us_sec_feature_title_font_family',
  array(
    'section' => 'vw_stock_images_pro_sell_content_page',
    'label' => __('Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);

$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_title_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'vw_stock_images_pro_why_join_us_sec_feature_title_font_size',
  array(
    'label' => __('Font Size', 'vw-stock-images-pro'),
    'description' => __('Add font size in px', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_sell_content_page',
    'setting' => 'vw_stock_images_pro_why_join_us_sec_feature_title_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_title_color',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  )
);
$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'vw_stock_images_pro_why_join_us_sec_feature_title_color',
    array(
      'label' => __('Color', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_sell_content_page',
      'settings' => 'vw_stock_images_pro_why_join_us_sec_feature_title_color',
    )
  )
);


$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_why_join_us_sec_feature_settings',
  array(
    'label' => __('Feature Descreption', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_sell_content_page'
  )
));


$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_desc_font_family',
  array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'vw_stock_images_pro_why_join_us_sec_feature_desc_font_family',
  array(
    'section' => 'vw_stock_images_pro_sell_content_page',
    'label' => __('Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);

$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_desc_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'vw_stock_images_pro_why_join_us_sec_feature_desc_font_size',
  array(
    'label' => __('Font Size', 'vw-stock-images-pro'),
    'description' => __('Add font size in px', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_sell_content_page',
    'setting' => 'vw_stock_images_pro_why_join_us_sec_feature_desc_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
  'vw_stock_images_pro_why_join_us_sec_feature_desc_color',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  )
);
$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'vw_stock_images_pro_why_join_us_sec_feature_desc_color',
    array(
      'label' => __('Color', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_sell_content_page',
      'settings' => 'vw_stock_images_pro_why_join_us_sec_feature_desc_color',
    )
  )
);
// ---------------------404 Page---------------------------

//404 Page Setting
$wp_customize->add_section('vw_stock_images_pro_404_page', array(
  'title' => __('404 Page Settings', 'vw-stock-images-pro'),
  'panel' => 'vw_stock_images_pro_panel_id',
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_bgcolor', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_404_page_bgcolor', array(
  'label' => __('Background Color', 'vw-stock-images-pro'),
  'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'settings' => 'vw_stock_images_pro_404_page_bgcolor',
)));
$wp_customize->add_setting('vw_stock_images_pro_404_page_bgimage', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(
  new WP_Customize_Image_Control(
    $wp_customize,
    'vw_stock_images_pro_404_page_bgimage',
    array(
      'label' => __('Background image', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_404_page',
      'settings' => 'vw_stock_images_pro_404_page_bgimage'
    )
  )
);
$wp_customize->add_setting('vw_stock_images_pro_404_page_bg_attachment', array(
  'default' => '',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control('vw_stock_images_pro_404_page_bg_attachment', array(
  'type' => 'radio',
  'label' => __('Choose image option', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'choices' => array(
    'vw-fixed' => __('Fixed', 'vw-stock-images-pro'),
    'vw-scroll' => __('Scroll', 'vw-stock-images-pro'),
  )
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_heading', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('vw_stock_images_pro_404_page_heading', array(
  'label' => __('Add Title', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_content', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('vw_stock_images_pro_404_page_content', array(
  'label' => __('Add Paragraph', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_button_text', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_404_page_button_text', array(
  'label' => __('Add Button Text', 'vw-stock-images-pro'),
  'input_attrs' => array(
    'placeholder' => __('Back to Home Page', 'vw-stock-images-pro'),
  ),
  'section' => 'vw_stock_images_pro_404_page',
  'type' => 'text'
));
$wp_customize->add_setting('vw_stock_images_pro_error_temp_bg_images', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(
  new WP_Customize_Image_Control(
    $wp_customize,
    'vw_stock_images_pro_error_temp_bg_images',
    array(
      'label' => __('404 Image', 'vw-stock-images-pro'),
      'section' => 'vw_stock_images_pro_404_page',
      'settings' => 'vw_stock_images_pro_error_temp_bg_images'
    )
  )
);
$wp_customize->add_setting(
  'vw_stock_images_pro_404_page_color_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_404_page_color_settings',
  array(
    'label' => __('Heading Typography', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_404_page'
  )
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_title_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_404_page_title_color', array(
  'label' => __('Heading Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'settings' => 'vw_stock_images_pro_404_page_title_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_404_page_title_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_404_page_title_font_family',
  array(
    'section' => 'vw_stock_images_pro_404_page',
    'label' => __('Heading Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_404_page_title_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_404_page_title_font_size', array(
  'label' => __('Heading Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'setting' => 'vw_stock_images_pro_404_page_title_font_size',
  'type' => 'number'
));

$wp_customize->add_setting('vw_stock_images_pro_404_page_content_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_404_page_content_color', array(
  'label' => __('Content Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'settings' => 'vw_stock_images_pro_404_page_content_color',
)));

$wp_customize->add_setting('vw_stock_images_pro_404_page_content_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_404_page_content_font_family',
  array(
    'section' => 'vw_stock_images_pro_404_page',
    'label' => __('Content Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);

$wp_customize->add_setting('vw_stock_images_pro_404_page_content_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_404_page_content_font_size', array(
  'label' => __('Content Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'setting' => 'vw_stock_images_pro_404_page_content_font_size',
  'type' => 'number'
));


$wp_customize->add_setting(
  'vw_stock_images_pro_404_page_button_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_stock_images_pro_text_sanitization'
  )
);
$wp_customize->add_control(new VW_Themes_Seperator_custom_Control(
  $wp_customize,
  'vw_stock_images_pro_404_page_button_settings',
  array(
    'label' => __('Button Typography', 'vw-stock-images-pro'),
    'section' => 'vw_stock_images_pro_404_page'
  )
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_button_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_404_page_button_color', array(
  'label' => __('Button Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'settings' => 'vw_stock_images_pro_404_page_button_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_404_page_button_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_stock_images_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_stock_images_pro_404_page_button_font_family',
  array(
    'section' => 'vw_stock_images_pro_404_page',
    'label' => __('Button Font Family', 'vw-stock-images-pro'),
    'type' => 'select',
    'choices' => $font_array
  )
);
$wp_customize->add_setting('vw_stock_images_pro_404_page_button_font_size', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_stock_images_pro_404_page_button_font_size', array(
  'label' => __('Button Font Size', 'vw-stock-images-pro'),
  'description' => __('Add font size in px', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'setting' => 'vw_stock_images_pro_404_page_button_font_size',
  'type' => 'number'
));
$wp_customize->add_setting('vw_stock_images_pro_404_page_button_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_404_page_button_bg_color', array(
  'label' => __('Button Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'settings' => 'vw_stock_images_pro_404_page_button_bg_color',
)));
$wp_customize->add_setting('vw_stock_images_pro_404_page_button_bg_hover_bg_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_stock_images_pro_404_page_button_bg_hover_bg_color', array(
  'label' => __('Button Hover Background Color', 'vw-stock-images-pro'),
  'section' => 'vw_stock_images_pro_404_page',
  'settings' => 'vw_stock_images_pro_404_page_button_bg_hover_bg_color',
)));




