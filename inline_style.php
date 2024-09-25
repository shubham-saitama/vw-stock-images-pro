<?php
// Boxed or full width layout
	$vw_stock_images_pro_radio_boxed_full_layout = get_theme_mod('vw_stock_images_pro_radio_boxed_full_layout');
	$vw_stock_images_pro_radio_boxed_full_layout_value = get_theme_mod('vw_stock_images_pro_radio_boxed_full_layout_value');


	// ----------- Padding Top ---------
$custom_css = '';

	$vw_stock_images_pro_slider_padding_top = get_theme_mod('vw_stock_images_pro_slider_padding_top');
	$vw_stock_images_pro_category_slider_padding_top = get_theme_mod('vw_stock_images_pro_category_slider_padding_top');
	$vw_stock_images_pro_our_feat_padding_top = get_theme_mod('vw_stock_images_pro_our_feat_padding_top');
	$vw_stock_images_pro_designers_fav_padding_top = get_theme_mod('vw_stock_images_pro_designers_fav_padding_top');
	$vw_stock_images_pro_premium_feat_padding_top = get_theme_mod('vw_stock_images_pro_premium_feat_padding_top');
	$vw_stock_images_pro_desgn_earn_padding_top = get_theme_mod('vw_stock_images_pro_desgn_earn_padding_top');
	$vw_stock_images_pro_top_contributer_padding_top = get_theme_mod('vw_stock_images_pro_top_contributer_padding_top');
	$vw_stock_images_pro_trending_padding_top = get_theme_mod('vw_stock_images_pro_trending_padding_top');
	$vw_stock_images_pro_subscribe_padding_top = get_theme_mod('vw_stock_images_pro_subscribe_padding_top');
	$vw_stock_images_pro_pricing_padding_top = get_theme_mod('vw_stock_images_pro_pricing_padding_top');
	$vw_stock_images_pro_our_partners_padding_top = get_theme_mod('vw_stock_images_pro_our_partners_padding_top');
	$vw_stock_images_pro_our_clients_padding_top = get_theme_mod('vw_stock_images_pro_our_clients_padding_top');
	$vw_stock_images_pro_latest_news_padding_top = get_theme_mod('vw_stock_images_pro_latest_news_padding_top');
	$vw_stock_images_pro_gallery_padding_top = get_theme_mod('vw_stock_images_pro_gallery_padding_top');
	$vw_stock_images_pro_partners_padding_top = get_theme_mod('vw_stock_images_pro_partners_padding_top');

		if($vw_stock_images_pro_slider_padding_top){
			$custom_css .='#slider .slidder-inner-content-row{
				padding-top: '.esc_html($vw_stock_images_pro_slider_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_category_slider_padding_top){
			$custom_css .='.featuress{
				padding-top: '.esc_html($vw_stock_images_pro_category_slider_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_our_feat_padding_top != false){
			$custom_css .='#about-us{
				padding-top: '.esc_html($vw_stock_images_pro_our_feat_padding_top).'px!important;
			}';
		}
		if($vw_stock_images_pro_designers_fav_padding_top != false){
			$custom_css .='section#designer-fav-sec{
				padding-top: '.esc_html($vw_stock_images_pro_designers_fav_padding_top).'px!important;
			}';
		}
		if($vw_stock_images_pro_premium_feat_padding_top != false){
			$custom_css .='section.premium-featuress{
				padding-top: '.esc_html($vw_stock_images_pro_premium_feat_padding_top).'px!important;
			}';
		}
		if($vw_stock_images_pro_desgn_earn_padding_top != false){
			$custom_css .='section.design-earn{
				padding-top: '.esc_html($vw_stock_images_pro_desgn_earn_padding_top).'px!important;
			}';
		}
		if($vw_stock_images_pro_top_contributer_padding_top != false){
			$custom_css .='section.contributers{
				padding-top: '.esc_html($vw_stock_images_pro_top_contributer_padding_top).'px!important;
			}';
		}
		if($vw_stock_images_pro_trending_padding_top != false){
			$custom_css .='section#pests-problem{
				padding-top: '.esc_html($vw_stock_images_pro_trending_padding_top).'px!important;
			}';
		}
		if($vw_stock_images_pro_subscribe_padding_top != false){
			$custom_css .='section#our-newsletter{
				padding-top: '.esc_html($vw_stock_images_pro_subscribe_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_pricing_padding_top != false){
			$custom_css .='section#plans{
				padding-top: '.esc_html($vw_stock_images_pro_pricing_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_our_partners_padding_top != false){
			$custom_css .='section#partner{
				padding-top: '.esc_html($vw_stock_images_pro_our_partners_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_our_clients_padding_top != false){
			$custom_css .='#our-client{
				padding-top: '.esc_html($vw_stock_images_pro_our_clients_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_latest_news_padding_top != false){
			$custom_css .='#blog-news{
				padding-top: '.esc_html($vw_stock_images_pro_latest_news_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_gallery_padding_top != false){
			$custom_css .='#gallery{
				padding-top: '.esc_html($vw_stock_images_pro_gallery_padding_top).'px !important;
			}';
		}
		if($vw_stock_images_pro_partners_padding_top != false){
			$custom_css .='#partner	{
				padding-top: '.esc_html($vw_stock_images_pro_partners_padding_top).'px !important;
			}';
		}


//General Button Color Pallete option
	$vw_stock_images_pro_body_font_family = get_theme_mod('vw_stock_images_pro_body_font_family');
	$vw_stock_images_pro_body_font_size = get_theme_mod('vw_stock_images_pro_body_font_size');
	$vw_stock_images_pro_body_color = get_theme_mod('vw_stock_images_pro_body_color');
	$vw_stock_images_pro_h1_font_family = get_theme_mod('vw_stock_images_pro_h1_font_family');
	$vw_stock_images_pro_h1_font_size = get_theme_mod('vw_stock_images_pro_h1_font_size');
	$vw_stock_images_pro_h1_color = get_theme_mod('vw_stock_images_pro_h1_color');
	$vw_stock_images_pro_h2_font_family = get_theme_mod('vw_stock_images_pro_h2_font_family');
	$vw_stock_images_pro_h2_font_size = get_theme_mod('vw_stock_images_pro_h2_font_size');
	$vw_stock_images_pro_h2_color = get_theme_mod('vw_stock_images_pro_h2_color');
	$vw_stock_images_pro_h3_font_family = get_theme_mod('vw_stock_images_pro_h3_font_family');
	$vw_stock_images_pro_h3_font_size = get_theme_mod('vw_stock_images_pro_h3_font_size');
	$vw_stock_images_pro_h3_color = get_theme_mod('vw_stock_images_pro_h3_color');
	$vw_stock_images_pro_h4_font_family = get_theme_mod('vw_stock_images_pro_h4_font_family');
	$vw_stock_images_pro_h4_font_size = get_theme_mod('vw_stock_images_pro_h4_font_size');
	$vw_stock_images_pro_h4_color = get_theme_mod('vw_stock_images_pro_h4_color');
	$vw_stock_images_pro_h5_font_family = get_theme_mod('vw_stock_images_pro_h5_font_family');
	$vw_stock_images_pro_h5_font_size = get_theme_mod('vw_stock_images_pro_h5_font_size');
	$vw_stock_images_pro_h5_color = get_theme_mod('vw_stock_images_pro_h5_color');
	$vw_stock_images_pro_h6_font_family = get_theme_mod('vw_stock_images_pro_h6_font_family');
	$vw_stock_images_pro_h6_font_size = get_theme_mod('vw_stock_images_pro_h6_font_size');
	$vw_stock_images_pro_h6_color = get_theme_mod('vw_stock_images_pro_h6_color');
	$vw_stock_images_pro_paragarpah_font_family = get_theme_mod('vw_stock_images_pro_paragarpah_font_family');
	$vw_stock_images_pro_para_font_size = get_theme_mod('vw_stock_images_pro_para_font_size');
	$vw_stock_images_pro_para_color = get_theme_mod('vw_stock_images_pro_para_color');
	$vw_stock_images_pro_hi_first_color = get_theme_mod('vw_stock_images_pro_hi_first_color');
	$vw_stock_images_pro_hi_scnd_color = get_theme_mod('vw_stock_images_pro_hi_scnd_color');

// Top bar / Header
	$vw_stock_images_pro_header_text_color = get_theme_mod('vw_stock_images_pro_header_text_color');
	$vw_stock_images_pro_header_text_font_size = get_theme_mod('vw_stock_images_pro_header_text_font_size');
	$vw_stock_images_pro_header_text_font_family = get_theme_mod('vw_stock_images_pro_header_text_font_family');
	$vw_stock_images_pro_header_title_color = get_theme_mod('vw_stock_images_pro_header_title_color');
	$vw_stock_images_pro_header_title_font_family = get_theme_mod('vw_stock_images_pro_header_title_font_family');
	$vw_stock_images_pro_header_title_font_size = get_theme_mod('vw_stock_images_pro_header_title_font_size');
	$vw_stock_images_pro_header_subtitle_color = get_theme_mod('vw_stock_images_pro_header_subtitle_color');
	$vw_stock_images_pro_header_subtitle_font_family = get_theme_mod('vw_stock_images_pro_header_subtitle_font_family');
	$vw_stock_images_pro_header_subtitle_font_size = get_theme_mod('vw_stock_images_pro_header_subtitle_font_size');
	$vw_stock_images_pro_header_contact_details_color = get_theme_mod('vw_stock_images_pro_header_contact_details_color');
	$vw_stock_images_pro_header_contact_details_font_family = get_theme_mod('vw_stock_images_pro_header_contact_details_font_family');
	$vw_stock_images_pro_header_contact_detailsicon_color = get_theme_mod('vw_stock_images_pro_header_contact_detailsicon_color');
	$vw_stock_images_pro_headerhomebg_color = get_theme_mod('vw_stock_images_pro_headerhomebg_color');
	$vw_stock_images_pro_headermenu_color = get_theme_mod('vw_stock_images_pro_headermenu_color');
	$vw_stock_images_pro_headermenu_font_family = get_theme_mod('vw_stock_images_pro_headermenu_font_family');
	$vw_stock_images_pro_header_menuhovercolor = get_theme_mod('vw_stock_images_pro_header_menuhovercolor');
	$vw_stock_images_pro_dropdownbg_color = get_theme_mod('vw_stock_images_pro_dropdownbg_color');
	$vw_stock_images_pro_dropdownbg_itemcolor = get_theme_mod('vw_stock_images_pro_dropdownbg_itemcolor');
	$vw_stock_images_pro_dropdownbg_item_hovercolor = get_theme_mod('vw_stock_images_pro_dropdownbg_item_hovercolor');
	$vw_stock_images_pro_top_submenus_font_size = get_theme_mod('vw_stock_images_pro_top_submenus_font_size', '');
	$vw_stock_images_pro_top_submenus_letter_spacing = get_theme_mod('vw_stock_images_pro_top_submenus_letter_spacing', '');
	$vw_stock_images_pro_top_submenus_font_weight =get_theme_mod('vw_stock_images_pro_top_submenus_font_weight', '');
	$vw_stock_images_pro_top_submenus_text_transform =get_theme_mod('vw_stock_images_pro_top_submenus_text_transform', '');
	$vw_stock_images_pro_top_submenus_bg_opacity_color =get_theme_mod('vw_stock_images_pro_top_submenus_bg_opacity_color', '');
	$vw_stock_images_pro_top_submenus_box_shadow =get_theme_mod('vw_stock_images_pro_top_submenus_box_shadow', '');
	$vw_stock_images_pro_dropdownbg_responsivecolor = get_theme_mod('vw_stock_images_pro_dropdownbg_responsivecolor');
	$vw_stock_images_pro_headermenu_responsive_item_color = get_theme_mod('vw_stock_images_pro_headermenu_responsive_item_color');


	$vw_stock_images_pro_headermenu_font_size = get_theme_mod('vw_stock_images_pro_headermenu_font_size');



	$vw_stock_images_pro_header_social_icon_border_color = get_theme_mod('vw_stock_images_pro_header_social_icon_border_color');
	$vw_stock_images_pro_headermenu_active_color = get_theme_mod('vw_stock_images_pro_headermenu_active_color');
	$vw_stock_images_pro_head_search_icon_color = get_theme_mod('vw_stock_images_pro_head_search_icon_color');


	//Social icon setting
	$vw_stock_images_pro_social_icon_font_size = get_theme_mod('vw_stock_images_pro_social_icon_font_size');
	$vw_stock_images_pro_social_icon_border_radius = get_theme_mod('vw_stock_images_pro_social_icon_border_radius');
	$vw_stock_images_pro_social_icon_width = get_theme_mod('vw_stock_images_pro_social_icon_width');
	$vw_stock_images_pro_social_icon_height = get_theme_mod('vw_stock_images_pro_social_icon_height');
	$vw_stock_images_pro_social_icon_padding = get_theme_mod('vw_stock_images_pro_social_icon_padding');
	$vw_stock_images_pro_social_icon_color = get_theme_mod('vw_stock_images_pro_social_icon_color');
	$vw_stock_images_pro_social_icon_bgcolor = get_theme_mod('vw_stock_images_pro_social_icon_bgcolor');





	// $vw_stock_images_pro_site_menu_width = get_theme_mod('vw_stock_images_pro_site_menu_width');
//Footer Copyright

// ----------- Spinner --------------

	$vw_stock_images_pro_products_spinner_bgcolor = get_theme_mod('vw_stock_images_pro_products_spinner_bgcolor');
	$vw_stock_images_pro_spinner_opacity_color = get_theme_mod('vw_stock_images_pro_spinner_opacity_color');
	$vw_stock_images_pro_general_scroll_top_bgcolor = get_theme_mod('vw_stock_images_pro_general_scroll_top_bgcolor');
	$vw_stock_images_pro_general_scroll_top_hover_bgcolor = get_theme_mod('vw_stock_images_pro_general_scroll_top_hover_bgcolor');
	$vw_stock_images_pro_general_scroll_top_icon_color = get_theme_mod('vw_stock_images_pro_general_scroll_top_icon_color');

	// Scroll to top settings
	$vw_stock_images_pro_scroll_border_radius = get_theme_mod('vw_stock_images_pro_scroll_border_radius');
    $vw_stock_images_pro_scroll_width = get_theme_mod('vw_stock_images_pro_scroll_width');
    $vw_stock_images_pro_scroll_height = get_theme_mod('vw_stock_images_pro_scroll_height');

/* -------------- Frame Setting ------------*/

	$vw_stock_images_pro_site_frame_width = get_theme_mod('vw_stock_images_pro_site_frame_width');
	$vw_stock_images_pro_site_frame_type = get_theme_mod('vw_stock_images_pro_site_frame_type');
	$vw_stock_images_pro_site_frame_color = get_theme_mod('vw_stock_images_pro_site_frame_color');


	$vw_stock_images_pro_product_padding_left = get_theme_mod('vw_stock_images_pro_product_padding_left');

$custom_css .='html body,h1,h2,h3,h4,h5,h6,a,div,label,button,p{
	';
		if($vw_stock_images_pro_body_font_family != false){
	    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_body_font_family).' !important;';
		}
		if($vw_stock_images_pro_body_color != false){
	    	$custom_css .='color: '.esc_html($vw_stock_images_pro_body_color).'!important;';
		}
		if($vw_stock_images_pro_body_font_size != false){
	    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_body_font_size).'px !important;';
		}
	$custom_css .='}';

	/*-------------------Layout-----------------------*/
	$define_layout = get_theme_mod( 'vw_stock_images_pro_radio_boxed_full_layout' );
	if('boxed' == $define_layout ){
		$custom_css .='body{';
				$custom_css .='max-width: '.esc_html($vw_stock_images_pro_radio_boxed_full_layout_value).'px;';
				$custom_css .='margin: 0 auto !important ;';
				$custom_css .='width: 100% ;';
		$custom_css .='}';
	}

	/*-------------------h1-----------------------*/
	if($vw_stock_images_pro_h1_font_family != false || $vw_stock_images_pro_h1_color != false || $vw_stock_images_pro_h1_font_size != false){
		$custom_css .='h1, #slider h1{';
			if($vw_stock_images_pro_h1_font_family != false){
		    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_h1_font_family).' !important;';
			}
			if($vw_stock_images_pro_h1_color != false){
		    	$custom_css .='color: '.esc_html($vw_stock_images_pro_h1_color).'!important;';
			}
			if($vw_stock_images_pro_h1_font_size != false){
		    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_h1_font_size).'px !important;';
			}
		$custom_css .='}';
	}

	/*-------------------h2-----------------------*/
	if($vw_stock_images_pro_h2_font_family != false || $vw_stock_images_pro_h2_color != false || $vw_stock_images_pro_h2_font_size != false){
		$custom_css .='body h2,h2,section h2, h2.woocommerce-loop-product__title, h2.woocommerce-loop-category__title, .postbox h2, #comments h2.comments-title, #comments h2#reply-title, .product-title a, .product-name a, .related.products li a{';
			if($vw_stock_images_pro_h2_font_family != false){
		    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_h2_font_family).'!important;';
			}
			if($vw_stock_images_pro_h2_color != false){
		    	$custom_css .='color: '.esc_html($vw_stock_images_pro_h2_color).'!important;';
			}
			if($vw_stock_images_pro_h2_font_size != false){
		    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_h2_font_size).'px !important;';
			}
		$custom_css .='}';
	}
	/*-------------------h3-----------------------*/
	if($vw_stock_images_pro_h3_font_family != false || $vw_stock_images_pro_h3_color != false || $vw_stock_images_pro_h3_font_size != false){
			$custom_css .='h3,.footer-top-col h3, #footer h3, #comments h3.comment-reply-title, #sidebar h3, .tesimonialtitle a, .blog-title a{';
				if($vw_stock_images_pro_h3_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_h3_font_family).';';
				}
				if($vw_stock_images_pro_h3_color != false){
			    	$custom_css .='color: '.esc_html($vw_stock_images_pro_h3_color).'!important;';
				}
				if($vw_stock_images_pro_h3_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_h3_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_stock_images_pro_h4_font_family != false || $vw_stock_images_pro_h4_color != false || $vw_stock_images_pro_h4_font_size != false){
			$custom_css .='h4, section h4, .news-title a, #pests-problem .pests-problem-title a, #pests-library .pests-problem-title a, #professional-services .service-title a{';
				if($vw_stock_images_pro_h4_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_h4_font_family).'!important;';
				}
				if($vw_stock_images_pro_h4_color != false){
			    	$custom_css .='color: '.esc_html($vw_stock_images_pro_h4_color).'!important;';
				}
				if($vw_stock_images_pro_h4_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_h4_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_stock_images_pro_h5_font_family != false || $vw_stock_images_pro_h5_color != false || $vw_stock_images_pro_h5_font_size != false){
			$custom_css .='h5, section h5, #our-client .testi-title a{';
				if($vw_stock_images_pro_h5_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_h5_font_family).';';
				}
				if($vw_stock_images_pro_h5_color != false){
			    	$custom_css .='color: '.esc_html($vw_stock_images_pro_h5_color).'!important;';
				}
				if($vw_stock_images_pro_h5_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_h5_font_size).'px;';
				}
			$custom_css .='}';
	}
	if($vw_stock_images_pro_h6_font_family != false || $vw_stock_images_pro_h6_color != false || $vw_stock_images_pro_h6_font_size != false){
			$custom_css .='body h6,#new-product h6.product-brand, #feature-product h6.product-brand,h6,#latest_post .collectionbox-text h6, .postbox h6, #category .categorytitle a{';
				if($vw_stock_images_pro_h6_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_h6_font_family).'!important;';
				}
				if($vw_stock_images_pro_h6_color != false){
			    	$custom_css .='color: '.esc_html($vw_stock_images_pro_h6_color).'!important;';
				}
				if($vw_stock_images_pro_h6_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_h6_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_stock_images_pro_paragarpah_font_family != false || $vw_stock_images_pro_para_color != false || $vw_stock_images_pro_para_font_size != false){
			$custom_css .='p, .theme-para , .pests-problem-content, .accordion-body, .test-content, .blog-admin p {';
				if($vw_stock_images_pro_paragarpah_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_stock_images_pro_paragarpah_font_family).'!important;';
				}
				if($vw_stock_images_pro_para_color != false){
			    	$custom_css .='color: '.esc_html($vw_stock_images_pro_para_color).'!important;';
				}
				if($vw_stock_images_pro_para_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_stock_images_pro_para_font_size).'px!important;';
				}
			$custom_css .='}';
	}

	/*-------------------Primary Color --------------------*/
	if($vw_stock_images_pro_hi_first_color != false){
			$custom_css .=' #professional-services .nav-link ,#counter-offer>.container, #choose-sec .choose-video-main-inner:after,.news-content-main::after
			.client-img-quote,.blog-detail:hover,#pests-problem .pests-problem-inner-content:hover .pests-problem-img, #pests-library .pests-problem-inner-content:hover .pests-problem-img{
				background-color: '.esc_html($vw_stock_images_pro_hi_first_color).';
			}';
	}
	if($vw_stock_images_pro_hi_first_color != false){
		$custom_css .='#slider .slider-heading span,#faq-sec .accordion-button:not(.collapsed), #faq-page .accordion-button:not(.collapsed){
				color: '.esc_html($vw_stock_images_pro_hi_first_color).';
		}';
	}
	if($vw_stock_images_pro_hi_first_color != false){
		$custom_css .='#cart{
				border-color: '.esc_html($vw_stock_images_pro_hi_first_color).';
		}';
	}
	if($vw_stock_images_pro_hi_first_color != false){
		$custom_css .='.theme-btn, .slider-right-mask-img::after,  #pests-problem button.owl-dot.active,#return-to-top, .about-contact-main,#professional-services .nav-link,#counter-offer>.container,.popular-pro-box:hover,#choose-sec .choose-icon-img,#choose-sec .choose-video-main-inner:after,.news-content-main::after,.client-img-quote,#professionals-team .team-inner-content:hover,.blog-category a,.news-img::after,.blog-detail:hover, .instagram-shortcode, .sticky.stickynavbar{
				background: '.esc_html($vw_stock_images_pro_hi_first_color).';
		}';
	}


	/*-------------------Secondry Color --------------------*/
	if($vw_stock_images_pro_hi_scnd_color != false){
			$custom_css .='.right-small-img,.header-inner,.header-inner,.about-year, .theme-btn-yellow,.offer-img-main::after,.choose-main-img::after,.cart-btn a:before, .wishlist-items-wrapper .product-add-to-cart a:before, .wishlist_table.mobile li .product-add-to-cart a:before,.news-form-main .theme-btn,.appoinment-content-main::after, .blog-detail:hover .blog-category a,#gallery i.gallery-icon,.copyright-outer{
				background-color: '.esc_html($vw_stock_images_pro_hi_scnd_color).';
			}';
	}
	if($vw_stock_images_pro_hi_scnd_color != false){
		$custom_css .='.socialbox a i, .feature-product-info h4,#limited-offer .limited-offer-desc-one h4,.social_widget .custom-social-icons a i,.cat_toggle,.contact_details ul li,#site_top .header-text,#site_top .socialbox a,.sale-box2-inner,#offer .offer-bg,#feature-product .feature-product-info,#limited-offer .limited-offer-desc-one,#limited-offer .product-offer-date p,.footer-contact h2,.social_widget .custom-social-icons a,.cart_box i, .wishlist_view i, .account_icon i,a.theme_button,#slider .carousel-control-prev-icon i,#new-product a.see-more-btn, #slider .carousel-control-next-icon i,#return-to-top i,.toggle-nav i,#sale .sale_desc3,#offer h2,#offer h4,#offer .offer_desc,.copyright p,.copyright .privacy-span,.footer-contact-detail,#feature .feature-icon .icon-bg i,#sale .sale-box2-inner h4,#sale .sale_desc2,#feature .feature-main h4,.contact_details i,.contact_details ul li a,#testimonials .tesimonialtitle a, #testimonials p, #testimonials h3, , #return-to-top {
				color: '.esc_html($vw_stock_images_pro_hi_scnd_color).';
		}';
	}


	/*--------------- Top Bar -------------------*/


	$vw_stock_images_pro_header_title_font_family = get_theme_mod('vw_stock_images_pro_header_title_font_family');
	$vw_stock_images_pro_header_title_color = get_theme_mod('vw_stock_images_pro_header_title_color');
	$vw_stock_images_pro_header_title_font_size = get_theme_mod('vw_stock_images_pro_header_title_font_size');
	if($vw_stock_images_pro_header_title_color != false || $vw_stock_images_pro_header_title_font_size != false || $vw_stock_images_pro_header_title_font_family != false ){
	$custom_css .='header .logo-text h2 a{';
		if($vw_stock_images_pro_header_title_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_header_title_color).'!important;';
		}
		if($vw_stock_images_pro_header_title_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_header_title_font_family).';';
		}
		if($vw_stock_images_pro_header_title_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_header_title_font_size).'px!important;';
		}
	$custom_css .='}';
	}
	$vw_stock_images_pro_header_subtitle_font_family = get_theme_mod('vw_stock_images_pro_header_subtitle_font_family');
	$vw_stock_images_pro_header_subtitle_color = get_theme_mod('vw_stock_images_pro_header_subtitle_color');
	$vw_stock_images_pro_header_subtitle_font_size = get_theme_mod('vw_stock_images_pro_header_subtitle_font_size');
	if($vw_stock_images_pro_header_subtitle_color != false || $vw_stock_images_pro_header_subtitle_font_size != false || $vw_stock_images_pro_header_subtitle_font_family != false ){
	$custom_css .='header .logo-text p{';
		if($vw_stock_images_pro_header_subtitle_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_header_subtitle_color).'!important;';
		}
		if($vw_stock_images_pro_header_subtitle_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_header_subtitle_font_family).';';
		}
		if($vw_stock_images_pro_header_subtitle_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_header_subtitle_font_size).'px!important;';
		}
	$custom_css .='}';
	}



	if($vw_stock_images_pro_header_text_color != false || $vw_stock_images_pro_header_text_font_family != false || $vw_stock_images_pro_header_text_font_size != false){
		$custom_css .='.top-bar-contact a{';

		if($vw_stock_images_pro_header_text_color != false){
			$custom_css .= 'color: '.esc_html($vw_stock_images_pro_header_text_color).'!important;';
		}
		if($vw_stock_images_pro_header_text_font_family != false){
			$custom_css .= 'font-family: '.esc_html($vw_stock_images_pro_header_text_font_family).'!important;';
		}
		if($vw_stock_images_pro_header_text_font_size != false){
			$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_header_text_font_size).'px!important;';
		}
		$custom_css .='}';
	}


	$vw_stock_images_pro_header_button_color = get_theme_mod('vw_stock_images_pro_header_button_color');
	$vw_stock_images_pro_header_button_font_size = get_theme_mod('vw_stock_images_pro_header_button_font_size');
	$vw_stock_images_pro_header_button_font_family = get_theme_mod('vw_stock_images_pro_header_button_font_family');
	$vw_stock_images_pro_header_button_bg_color = get_theme_mod('vw_stock_images_pro_header_button_bg_color');

	if($vw_stock_images_pro_header_button_color != false || $vw_stock_images_pro_header_button_bg_color != false || $vw_stock_images_pro_header_button_font_family != false || $vw_stock_images_pro_header_button_font_size != false){
		$custom_css .='#site_top .theme-btn{';
		if($vw_stock_images_pro_header_button_color != false){
			$custom_css .= 'color: '.esc_html($vw_stock_images_pro_header_button_color).'!important;';
		}
		if($vw_stock_images_pro_header_button_bg_color != false){
			$custom_css .= 'background: '.esc_html($vw_stock_images_pro_header_button_bg_color).'!important;';
		}
		if($vw_stock_images_pro_header_button_font_family != false){
			$custom_css .= 'font-family: '.esc_html($vw_stock_images_pro_header_button_font_family).'!important;';
		}
		if($vw_stock_images_pro_header_button_font_size != false){
			$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_header_button_font_size).'px!important;';
		}
		$custom_css .='}';
	}

	$vw_stock_images_pro_header_button_hover_bg_color = get_theme_mod('vw_stock_images_pro_header_button_hover_bg_color');

	if($vw_stock_images_pro_header_button_hover_bg_color != false ){
		$custom_css .='#site_top .theme-btn:hover{';
		if($vw_stock_images_pro_header_button_hover_bg_color != false){
			$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_header_button_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_header_button_hover_bg_color) .'!important;';
		}
		$custom_css .='}';
	}

	/* ------------ Social Settings ----------------- */
	if($vw_stock_images_pro_social_icon_font_size != false){
		$custom_css .='.socialbox a i, .social_widget a i{
			font-size:'.esc_html($vw_stock_images_pro_social_icon_font_size).'px;
		}';
	}

	if($vw_stock_images_pro_social_icon_border_radius != false){
		$custom_css .='.socialbox a i, .social_widget a i{
			border-radius:'.esc_html($vw_stock_images_pro_social_icon_border_radius).'px;
		}';
	}

    if($vw_stock_images_pro_social_icon_width != false || $vw_stock_images_pro_social_icon_height != false || $vw_stock_images_pro_social_icon_padding != false || $vw_stock_images_pro_social_icon_color != false || $vw_stock_images_pro_social_icon_bgcolor != false){
        $custom_css .='.socialbox a i, .social_widget a i{
            width: '.esc_html($vw_stock_images_pro_social_icon_width).'px;
            height: '.esc_html($vw_stock_images_pro_social_icon_height).'px;
            padding-top: '.esc_html($vw_stock_images_pro_social_icon_padding).'px;
            padding-bottom: '.esc_html($vw_stock_images_pro_social_icon_padding).'px;
            color: '.esc_html($vw_stock_images_pro_social_icon_color).';
            background-color: '.esc_html($vw_stock_images_pro_social_icon_bgcolor).';
            padding-left: 0;
            padding-right:0;
            text-align:center;
        }';
    }
	/*----------------------------- Header / Site Branding --------------------------*/


	if($vw_stock_images_pro_headermenu_active_color != false){
		$custom_css .='.main-navigation .current-menu-item >a{';
				$custom_css .='color: '.esc_html($vw_stock_images_pro_headermenu_active_color).' !important;
		}';
	}

	if($vw_stock_images_pro_head_search_icon_color != false){
		$custom_css .='.search-icon i{';
				$custom_css .='color: '.esc_html($vw_stock_images_pro_head_search_icon_color).';
		}';
	}


	$vw_stock_images_pro_headermenu_font_size = get_theme_mod('vw_stock_images_pro_headermenu_font_size');
	$vw_stock_images_pro_headermenu_color = get_theme_mod('vw_stock_images_pro_headermenu_color');
	$vw_stock_images_pro_headermenu_font_family = get_theme_mod('vw_stock_images_pro_headermenu_font_family');
	if($vw_stock_images_pro_headermenu_color != false || $vw_stock_images_pro_headermenu_font_family != false || $vw_stock_images_pro_headermenu_font_size != false ){
	$custom_css .='.main-navigation a{';
		if($vw_stock_images_pro_headermenu_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_headermenu_color).'!important;';
		}
		if($vw_stock_images_pro_headermenu_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_headermenu_font_family).';';
		}
		if($vw_stock_images_pro_headermenu_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_headermenu_font_size).'px!important;';
		}
	$custom_css .='}';
	}

	if($vw_stock_images_pro_header_menuhovercolor != false){
		$custom_css .='.main-navigation a:hover{';
				$custom_css .='color: '.esc_html($vw_stock_images_pro_header_menuhovercolor).' !important;';
		$custom_css .='}';
	}
	if($vw_stock_images_pro_dropdownbg_color != false){
		$custom_css .='.primary_nav>li>ul{';
				$custom_css .='background-color: '.esc_html($vw_stock_images_pro_dropdownbg_color).' !important;';
		$custom_css .='}';
	}

	$vw_stock_images_pro_dropdownbg_item_font_size = get_theme_mod('vw_stock_images_pro_dropdownbg_item_font_size');
	$vw_stock_images_pro_dropdownbg_itemcolor = get_theme_mod('vw_stock_images_pro_dropdownbg_itemcolor');
	$vw_stock_images_pro_dropdownbg_item_font_family = get_theme_mod('vw_stock_images_pro_dropdownbg_item_font_family');
	if($vw_stock_images_pro_dropdownbg_itemcolor != false || $vw_stock_images_pro_dropdownbg_item_font_family != false || $vw_stock_images_pro_dropdownbg_item_font_size != false ){
	$custom_css .='.primary_nav>li>ul>li a{';
		if($vw_stock_images_pro_dropdownbg_itemcolor != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_dropdownbg_itemcolor).'!important;';
		}
		if($vw_stock_images_pro_dropdownbg_item_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_dropdownbg_item_font_family).';';
		}
		if($vw_stock_images_pro_dropdownbg_item_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_dropdownbg_item_font_size).'px!important;';
		}
	$custom_css .='}';
	}
	if($vw_stock_images_pro_dropdownbg_color != false){
		$custom_css .='.primary_nav>li>ul{';
				$custom_css .='background-color: '.esc_html($vw_stock_images_pro_dropdownbg_color).';';
		$custom_css .='}';
	}
	if($vw_stock_images_pro_dropdownbg_item_hovercolor != false){
		$custom_css .='.primary_nav>li>ul>li a:hover{';
				$custom_css .='color: '.esc_html($vw_stock_images_pro_dropdownbg_item_hovercolor).'!important;';
		$custom_css .='}';
	}


	$vw_stock_images_pro_header_icon_font_size = get_theme_mod('vw_stock_images_pro_header_icon_font_size');
	$vw_stock_images_pro_header_icon_color = get_theme_mod('vw_stock_images_pro_header_icon_color');

	if($vw_stock_images_pro_header_icon_color != false || $vw_stock_images_pro_header_icon_font_size != false ){
	$custom_css .='.topbar-cart-content i{';
		if($vw_stock_images_pro_header_icon_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_header_icon_color).'!important;';
		}
		if($vw_stock_images_pro_header_icon_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_header_icon_font_size).'px!important;';
		}
	$custom_css .='}';
	}

	$vw_stock_images_pro_header_icon_count_font_size = get_theme_mod('vw_stock_images_pro_header_icon_count_font_size');
	$vw_stock_images_pro_header_icon_count_color = get_theme_mod('vw_stock_images_pro_header_icon_count_color');

	if($vw_stock_images_pro_header_icon_count_color != false || $vw_stock_images_pro_header_icon_count_font_size != false ){
	$custom_css .='.topbar-cart-content .count{';
		if($vw_stock_images_pro_header_icon_count_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_header_icon_count_color).'!important;';
		}
		if($vw_stock_images_pro_header_icon_count_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_header_icon_count_font_size).'px!important;';
		}
	$custom_css .='}';
	}

	$vw_stock_images_pro_header_search_background_color = get_theme_mod('vw_stock_images_pro_header_search_background_color');
	if($vw_stock_images_pro_header_search_background_color != false || $vw_stock_images_pro_header_icon_count_font_size != false ){
	$custom_css .='.search_form form{';
		if($vw_stock_images_pro_header_search_background_color != false){
			$custom_css .='background-color: '.esc_html($vw_stock_images_pro_header_search_background_color).'!important;';
		}
	$custom_css .='}';
	}
	$vw_stock_images_pro_header_search_line_color = get_theme_mod('vw_stock_images_pro_header_search_line_color');
	if($vw_stock_images_pro_header_search_line_color != false || $vw_stock_images_pro_header_icon_count_font_size != false ){
	$custom_css .='.search-form >i::after{';
		if($vw_stock_images_pro_header_search_line_color != false){
			$custom_css .='border-color: '.esc_html($vw_stock_images_pro_header_search_line_color).'!important;';
		}
	$custom_css .='}';
	}



	$custom_css .='@media screen and (min-width:720px) {';
		if($vw_stock_images_pro_headermenu_color != false || $vw_stock_images_pro_headermenu_font_family != false || $vw_stock_images_pro_headermenu_font_size != false){
			$custom_css .='.menubar .nav ul li a{';
				if($vw_stock_images_pro_headermenu_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_headermenu_color).' !important;';
				}
				if($vw_stock_images_pro_headermenu_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_headermenu_font_family).';';
				}
				if($vw_stock_images_pro_headermenu_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_headermenu_font_size).'px;';
				}
			$custom_css .='}';
		}

		if($vw_stock_images_pro_header_menuhovercolor != false){
			$custom_css .='.menubar .nav ul li a:hover{
				color: '.esc_html($vw_stock_images_pro_header_menuhovercolor).' !important;
			}';
		}
		if($vw_stock_images_pro_dropdownbg_color != false){
			$custom_css .='.menubar .nav ul li:hover > ul{
				background: '.esc_html($vw_stock_images_pro_dropdownbg_color).';
			}';
		}
		if($vw_stock_images_pro_dropdownbg_itemcolor != false){
			$custom_css .='.menubar .nav ul li > ul > li a{
				color: '.esc_html($vw_stock_images_pro_dropdownbg_itemcolor).'!important;
			}';
		}
		if($vw_stock_images_pro_dropdownbg_item_hovercolor != false){
			$custom_css .='.menubar .nav ul.sub-menu li:hover a{
				color: '.esc_html($vw_stock_images_pro_dropdownbg_item_hovercolor).'!important;
			}';
		}
	$custom_css .='}';

	       if($vw_stock_images_pro_top_submenus_letter_spacing != false){
        $custom_css .='#header #site-navigation ul ul a{
                letter-spacing: '.esc_html($vw_stock_images_pro_top_submenus_letter_spacing).'px;
        }';
    }
    if($vw_stock_images_pro_top_submenus_font_size != false){
        $custom_css .='#header #site-navigation ul ul a{
                font-size: '.esc_html($vw_stock_images_pro_top_submenus_font_size).'px;
        }';
    }

    $theme_lay = get_theme_mod( 'vw_stock_images_pro_top_submenus_font_weight','');
    if($theme_lay == '100'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:100';
        $custom_css .='}';
        }else if($theme_lay == '200'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:200';
        $custom_css .='}';
        }else if($theme_lay == '300'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:300';
        $custom_css .='}';
        }else if($theme_lay == '400'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:400';
        $custom_css .='}';
        }else if($theme_lay == '500'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:500';
        $custom_css .='}';
        }else if($theme_lay == '600'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:600';
        $custom_css .='}';
        }else if($theme_lay == '700'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:700';
        $custom_css .='}';
        }else if($theme_lay == '800'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:800';
        $custom_css .='}';
        }else if($theme_lay == '900'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:900';
        $custom_css .='}';
        }else if($theme_lay == 'bold'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:bold';
        $custom_css .='}';
        }else if($theme_lay == 'bolder'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='font-weight:bolder';
        $custom_css .='}';
    }
    //---------Text Transform---------------
    $theme_lay = get_theme_mod( 'vw_stock_images_pro_top_submenus_text_transform','');
    if($theme_lay == 'uppercase'){
        $custom_css .='#header #site-navigation ul ul a {';
            $custom_css .='text-transform:uppercase';
        $custom_css .='}';
        }else if($theme_lay == 'lowercase'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='text-transform:lowercase';
        $custom_css .='}';
        }else if($theme_lay == 'capitalize'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='text-transform:capitalize';
        $custom_css .='}';
        }else if($theme_lay == 'unset'){
        $custom_css .='#header #site-navigation ul ul a{';
            $custom_css .='text-transform:unset';
        $custom_css .='}';
        }


    if($vw_stock_images_pro_top_submenus_bg_opacity_color != ""){
        $custom_css .='#header #site-navigation ul li:hover > ul{
            opacity: '.esc_html($vw_stock_images_pro_top_submenus_bg_opacity_color).';
        }';
    }
    if($vw_stock_images_pro_top_submenus_box_shadow != false){
        $custom_css .='#header #site-navigation ul li:hover > ul{
            box-shadow: 0 0 3px '.esc_html($vw_stock_images_pro_top_submenus_box_shadow).' #ccc;
        }';
    }

	$vw_stock_images_pro_header_res_background_bgcolor = get_theme_mod('vw_stock_images_pro_header_res_background_bgcolor');
	$vw_stock_images_pro_header_res_menu_color = get_theme_mod('vw_stock_images_pro_header_res_menu_color');
	$vw_stock_images_pro_header_res_menu_font_family = get_theme_mod('vw_stock_images_pro_header_res_menu_font_family');
	$vw_stock_images_pro_header_res_menu_font_size = get_theme_mod('vw_stock_images_pro_header_res_menu_font_size');
	$vw_stock_images_pro_header_res_itemcolor = get_theme_mod('vw_stock_images_pro_header_res_itemcolor');
	$vw_stock_images_pro_header_res_item_font_family = get_theme_mod('vw_stock_images_pro_header_res_item_font_family');
	$vw_stock_images_pro_header_res_item_font_size = get_theme_mod('vw_stock_images_pro_header_res_item_font_size');
	$vw_stock_images_pro_res_open_menu_icon_color = get_theme_mod('vw_stock_images_pro_res_open_menu_icon_color');
	$vw_stock_images_pro_res_open_menu_icon_font_size = get_theme_mod('vw_stock_images_pro_res_open_menu_icon_font_size');
	$vw_stock_images_pro_header_close_iconcolor = get_theme_mod('vw_stock_images_pro_header_close_iconcolor');
	$vw_stock_images_pro_header_close_icon_font_size = get_theme_mod('vw_stock_images_pro_header_close_icon_font_size');

	$custom_css .='@media screen and (max-width:1023px) {';
		if($vw_stock_images_pro_header_res_background_bgcolor != false){
			$custom_css .='#sidebar1{
				background-color: '.esc_html($vw_stock_images_pro_header_res_background_bgcolor).' !important;
			}';
		}
		if($vw_stock_images_pro_header_res_menu_color != false){
			$custom_css .='.main-navigation ul li a,#sidebar1 .main-navigation .current_page_item>a{
				color: '.esc_html($vw_stock_images_pro_header_res_menu_color).' !important;
			}';
		}
		if($vw_stock_images_pro_header_res_menu_font_family != false){
			$custom_css .='.main-navigation ul li a,#sidebar1 .main-navigation .current_page_item>a{
				font-family: '.esc_html($vw_stock_images_pro_header_res_menu_font_family).' !important;
			}';
		}
		if($vw_stock_images_pro_header_res_menu_font_size != false){
			$custom_css .='.main-navigation ul li a,#sidebar1 .main-navigation .current_page_item>a{
				font-size: '.esc_html($vw_stock_images_pro_header_res_menu_font_size).'px!important;
			}';
		}

		if($vw_stock_images_pro_header_res_itemcolor != false){
			$custom_css .='#sidebar1 .sub-menu a{
				color: '.esc_html($vw_stock_images_pro_header_res_itemcolor).' !important;
			}';
		}
		if($vw_stock_images_pro_header_res_item_font_size != false){
			$custom_css .='#sidebar1 ul ul a{
				font-size: '.esc_html($vw_stock_images_pro_header_res_item_font_size).'px!important;
			}';
		}
		if($vw_stock_images_pro_header_res_item_font_family != false){
			$custom_css .='#sidebar1 ul ul a{
				font-family: '.esc_html($vw_stock_images_pro_header_res_item_font_family).' !important;
			}';
		}
		if($vw_stock_images_pro_res_open_menu_icon_color != false){
			$custom_css .='.toggle-nav i{
				color: '.esc_html($vw_stock_images_pro_res_open_menu_icon_color).'!important;
			}';
		}
		if($vw_stock_images_pro_res_open_menu_icon_font_size != false){
			$custom_css .='.toggle-nav i{
				font-size: '.esc_html($vw_stock_images_pro_res_open_menu_icon_font_size).'px!important;
			}';
		}
		if($vw_stock_images_pro_header_close_iconcolor != false){
			$custom_css .='#close_nav i{
				color: '.esc_html($vw_stock_images_pro_header_close_iconcolor).';
			}';
		}
		if($vw_stock_images_pro_header_close_icon_font_size != false){
			$custom_css .='#close_nav i{
				font-size: '.esc_html($vw_stock_images_pro_header_close_icon_font_size).'px !important;
			}';
		}
	$custom_css .='}';

	/*-----------------------Slider Section-------------------------*/

	$vw_stock_images_pro_slider_heading_color = get_theme_mod('vw_stock_images_pro_slider_heading_color');
	$vw_stock_images_pro_slider_heading_font_family = get_theme_mod('vw_stock_images_pro_slider_heading_font_family');
	$vw_stock_images_pro_slider_heading_font_size = get_theme_mod('vw_stock_images_pro_slider_heading_font_size');
	if($vw_stock_images_pro_slider_heading_color != false || $vw_stock_images_pro_slider_heading_font_family != false || $vw_stock_images_pro_slider_heading_font_size != false){
		$custom_css .='.slider-heading{';
			if($vw_stock_images_pro_slider_heading_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_slider_heading_color).';';
			}
			if($vw_stock_images_pro_slider_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_slider_heading_font_family).';';
			}
			if($vw_stock_images_pro_slider_heading_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_slider_heading_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_slider_hightlight_heading_color = get_theme_mod('vw_stock_images_pro_slider_hightlight_heading_color');
	$vw_stock_images_pro_slider_hightlight_heading_font_family = get_theme_mod('vw_stock_images_pro_slider_hightlight_heading_font_family');
	$vw_stock_images_pro_slider_hightlight_heading_font_size = get_theme_mod('vw_stock_images_pro_slider_hightlight_heading_font_size');
	if($vw_stock_images_pro_slider_hightlight_heading_color != false || $vw_stock_images_pro_slider_hightlight_heading_font_family != false || $vw_stock_images_pro_slider_hightlight_heading_font_size != false){
		$custom_css .='#slider .slider-heading span{';
			if($vw_stock_images_pro_slider_hightlight_heading_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_slider_hightlight_heading_color).';';
			}
			if($vw_stock_images_pro_slider_hightlight_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_slider_hightlight_heading_font_family).';';
			}
			if($vw_stock_images_pro_slider_hightlight_heading_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_slider_hightlight_heading_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_slider_paragraph_color = get_theme_mod('vw_stock_images_pro_slider_paragraph_color');
	$vw_stock_images_pro_slider_paragraph_font_family = get_theme_mod('vw_stock_images_pro_slider_paragraph_font_family');
	$vw_stock_images_pro_slider_paragraph_font_size = get_theme_mod('vw_stock_images_pro_slider_paragraph_font_size');
	if($vw_stock_images_pro_slider_paragraph_color != false || $vw_stock_images_pro_slider_paragraph_font_family != false || $vw_stock_images_pro_slider_paragraph_font_size != false){
		$custom_css .='#slider .theme-para{';
			if($vw_stock_images_pro_slider_paragraph_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_slider_paragraph_color).';';
			}
			if($vw_stock_images_pro_slider_paragraph_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_slider_paragraph_font_family).';';
			}
			if($vw_stock_images_pro_slider_paragraph_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_slider_paragraph_font_size).'px;';
			}
		$custom_css .='}';
	}
	$vw_stock_images_pro_slider_button_color = get_theme_mod('vw_stock_images_pro_slider_button_color');
	$vw_stock_images_pro_slider_button_font_family = get_theme_mod('vw_stock_images_pro_slider_button_font_family');
	$vw_stock_images_pro_slider_button_font_size = get_theme_mod('vw_stock_images_pro_slider_button_font_size');
	$vw_stock_images_pro_slider_button_bg_color = get_theme_mod('vw_stock_images_pro_slider_button_bg_color');
	if($vw_stock_images_pro_slider_button_color != false || $vw_stock_images_pro_slider_button_font_family != false || $vw_stock_images_pro_slider_button_font_size != false || $vw_stock_images_pro_slider_button_bg_color != false ){
		$custom_css .='#slider .theme-btn{';
			if($vw_stock_images_pro_slider_button_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_slider_button_color).';';
			}
			if($vw_stock_images_pro_slider_button_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_slider_button_font_family).';';
			}
			if($vw_stock_images_pro_slider_button_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_slider_button_font_size).'px;';
			}
			if($vw_stock_images_pro_slider_button_bg_color != false){
				$custom_css .='background: '.esc_html($vw_stock_images_pro_slider_button_bg_color).';';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_slider_button_hover_bg_color = get_theme_mod('vw_stock_images_pro_slider_button_hover_bg_color');
	if($vw_stock_images_pro_slider_button_hover_bg_color != false ){
		$custom_css .='#slider .theme-btn:hover{';
		if($vw_stock_images_pro_slider_button_hover_bg_color != false){
			$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_slider_button_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_slider_button_hover_bg_color) .'!important;';
		}
		$custom_css .='}';
	}

	$vw_stock_images_pro_slider_right_man_img_bg_color = get_theme_mod('vw_stock_images_pro_slider_right_man_img_bg_color');
	if($vw_stock_images_pro_slider_right_man_img_bg_color != false ){
		$custom_css .='.slider-right-mask-img::after{';
		if($vw_stock_images_pro_slider_right_man_img_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_slider_right_man_img_bg_color).';';
		}
		$custom_css .='}';
	}
	$vw_stock_images_pro_slider_right_beetle_img_bg_color = get_theme_mod('vw_stock_images_pro_slider_right_beetle_img_bg_color');
	if($vw_stock_images_pro_slider_right_beetle_img_bg_color != false ){
		$custom_css .='.right-small-img{';
		if($vw_stock_images_pro_slider_right_beetle_img_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_slider_right_beetle_img_bg_color).';';
		}
		$custom_css .='}';
	}


		$vw_stock_images_pro_right_review_heading_color = get_theme_mod('vw_stock_images_pro_right_review_heading_color');
		$vw_stock_images_pro_right_review_heading_font_family = get_theme_mod('vw_stock_images_pro_right_review_heading_font_family');
		$vw_stock_images_pro_right_review_heading_font_size = get_theme_mod('vw_stock_images_pro_right_review_heading_font_size');
		if($vw_stock_images_pro_right_review_heading_color != false || $vw_stock_images_pro_right_review_heading_font_family != false || $vw_stock_images_pro_right_review_heading_font_size != false){
			$custom_css .='.slider-review-content h6{';
				if($vw_stock_images_pro_right_review_heading_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_right_review_heading_color).';';
				}
				if($vw_stock_images_pro_right_review_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_right_review_heading_font_family).';';
				}
				if($vw_stock_images_pro_right_review_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_right_review_heading_font_size).'px;';
				}
			$custom_css .='}';
		}
		$vw_stock_images_pro_right_review_para_color = get_theme_mod('vw_stock_images_pro_right_review_para_color');
		$vw_stock_images_pro_right_review_para_font_family = get_theme_mod('vw_stock_images_pro_right_review_para_font_family');
		$vw_stock_images_pro_right_review_para_font_size = get_theme_mod('vw_stock_images_pro_right_review_para_font_size');
		if($vw_stock_images_pro_right_review_para_color != false || $vw_stock_images_pro_right_review_para_font_family != false || $vw_stock_images_pro_right_review_para_font_size != false){
			$custom_css .='.slider-review-content p{';
				if($vw_stock_images_pro_right_review_para_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_right_review_para_color).';';
				}
				if($vw_stock_images_pro_right_review_para_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_right_review_para_font_family).';';
				}
				if($vw_stock_images_pro_right_review_para_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_right_review_para_font_size).'px;';
				}
			$custom_css .='}';
		}
		$vw_stock_images_pro_slider_social_icon_heading_color = get_theme_mod('vw_stock_images_pro_slider_social_icon_heading_color');
		$vw_stock_images_pro_slider_social_icon_heading_font_family = get_theme_mod('vw_stock_images_pro_slider_social_icon_heading_font_family');
		$vw_stock_images_pro_slider_social_icon_heading_font_size = get_theme_mod('vw_stock_images_pro_slider_social_icon_heading_font_size');
		if($vw_stock_images_pro_slider_social_icon_heading_color != false || $vw_stock_images_pro_slider_social_icon_heading_font_family != false || $vw_stock_images_pro_slider_social_icon_heading_font_size != false){
			$custom_css .='.slider-social-heading{';
				if($vw_stock_images_pro_slider_social_icon_heading_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_slider_social_icon_heading_color).';';
				}
				if($vw_stock_images_pro_slider_social_icon_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_slider_social_icon_heading_font_family).';';
				}
				if($vw_stock_images_pro_slider_social_icon_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_slider_social_icon_heading_font_size).'px;';
				}
			$custom_css .='}';
		}

		$vw_stock_images_pro_slider_social_icon_color = get_theme_mod('vw_stock_images_pro_slider_social_icon_color');
		$vw_stock_images_pro_slider_social_icon_font_size = get_theme_mod('vw_stock_images_pro_slider_social_icon_font_size');
		$vw_stock_images_pro_slider_social_icon_bg_color = get_theme_mod('vw_stock_images_pro_slider_social_icon_bg_color');
		if($vw_stock_images_pro_slider_social_icon_color != false  || $vw_stock_images_pro_slider_social_icon_font_size != false || $vw_stock_images_pro_slider_social_icon_bg_color != false ){
			$custom_css .='.slider-social-main i{';
				if($vw_stock_images_pro_slider_social_icon_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_slider_social_icon_color).';';
				}
				if($vw_stock_images_pro_slider_social_icon_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_slider_social_icon_font_size).'px;';
				}
				if($vw_stock_images_pro_slider_social_icon_bg_color != false){
					$custom_css .='background: '.esc_html($vw_stock_images_pro_slider_social_icon_bg_color).';';
				}
			$custom_css .='}';
		}

		$vw_stock_images_pro_slider_social_icon_hover_bg_color = get_theme_mod('vw_stock_images_pro_slider_social_icon_hover_bg_color');
		if($vw_stock_images_pro_slider_social_icon_hover_bg_color != false ){
			$custom_css .='.slider-social-main i:hover{';
			if($vw_stock_images_pro_slider_social_icon_hover_bg_color != false){
				$custom_css .='background: '.esc_html($vw_stock_images_pro_slider_social_icon_hover_bg_color).';';
			}
			$custom_css .='}';
		}

/*------------------------------ ABout section start----------------------------------------*/

/*------------------------------ Pest problem section start----------------------------------------*/
$vw_stock_images_pro_pests_problem_heading_color = get_theme_mod('vw_stock_images_pro_pests_problem_heading_color');
$vw_stock_images_pro_pests_problem_heading_font_family = get_theme_mod('vw_stock_images_pro_pests_problem_heading_font_family');
$vw_stock_images_pro_pests_problem_heading_font_size = get_theme_mod('vw_stock_images_pro_pests_problem_heading_font_size');

if($vw_stock_images_pro_pests_problem_heading_color != false || $vw_stock_images_pro_pests_problem_heading_font_family != false || $vw_stock_images_pro_pests_problem_heading_font_size != false){
	$custom_css .='#pests-problem .main-head{';
		if($vw_stock_images_pro_pests_problem_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_pests_problem_heading_color).';';
		}
		if($vw_stock_images_pro_pests_problem_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_pests_problem_heading_font_family).';';
		}
		if($vw_stock_images_pro_pests_problem_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_pests_problem_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_pests_problem_paragraph_color = get_theme_mod('vw_stock_images_pro_pests_problem_paragraph_color');
$vw_stock_images_pro_pests_problem_paragraph_font_family = get_theme_mod('vw_stock_images_pro_pests_problem_paragraph_font_family');
$vw_stock_images_pro_pests_problem_paragraph_font_size = get_theme_mod('vw_stock_images_pro_pests_problem_paragraph_font_size');

if($vw_stock_images_pro_pests_problem_paragraph_color != false || $vw_stock_images_pro_pests_problem_paragraph_font_family != false || $vw_stock_images_pro_pests_problem_paragraph_font_size != false){
	$custom_css .='#pests-problem .theme-para{';
		if($vw_stock_images_pro_pests_problem_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_pests_problem_paragraph_color).';';
		}
		if($vw_stock_images_pro_pests_problem_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_pests_problem_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_pests_problem_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_pests_problem_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

// $vw_stock_images_pro_pests_problem_btn_color = get_theme_mod('vw_stock_images_pro_pests_problem_btn_color');
// $vw_stock_images_pro_pests_problem_btn_font_family = get_theme_mod('vw_stock_images_pro_pests_problem_btn_font_family');
// $vw_stock_images_pro_pests_problem_btn_font_size = get_theme_mod('vw_stock_images_pro_pests_problem_btn_font_size');
//
// if($vw_stock_images_pro_pests_problem_btn_color != false || $vw_stock_images_pro_pests_problem_btn_font_family != false || $vw_stock_images_pro_pests_problem_btn_font_size != false){
// 	$custom_css .='#pests-problem .theme-btn{';
// 		if($vw_stock_images_pro_pests_problem_btn_color != false){
// 			$custom_css .='color: '.esc_html($vw_stock_images_pro_pests_problem_btn_color).';';
// 		}
// 		if($vw_stock_images_pro_pests_problem_btn_font_family != false){
// 			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_pests_problem_btn_font_family).';';
// 		}
// 		if($vw_stock_images_pro_pests_problem_btn_font_size != false){
// 			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_pests_problem_btn_font_size).'px;';
// 		}
// 	$custom_css .='}';
// }


$vw_stock_images_pro_pests_problem_btn_color = get_theme_mod('vw_stock_images_pro_pests_problem_btn_color');
$vw_stock_images_pro_pests_problem_btn_font_family = get_theme_mod('vw_stock_images_pro_pests_problem_btn_font_family');
$vw_stock_images_pro_pests_problem_btn_font_size = get_theme_mod('vw_stock_images_pro_pests_problem_btn_font_size');
$vw_stock_images_pro_pests_problem_btn_bg_color = get_theme_mod('vw_stock_images_pro_pests_problem_btn_bg_color');
if($vw_stock_images_pro_pests_problem_btn_color != false || $vw_stock_images_pro_pests_problem_btn_font_family != false || $vw_stock_images_pro_pests_problem_btn_font_size != false || $vw_stock_images_pro_pests_problem_btn_bg_color != false ){
	$custom_css .='#pests-problem .theme-btn{';
		if($vw_stock_images_pro_pests_problem_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_pests_problem_btn_color).';';
		}
		if($vw_stock_images_pro_pests_problem_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_pests_problem_btn_font_family).';';
		}
		if($vw_stock_images_pro_pests_problem_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_pests_problem_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_pests_problem_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_pests_problem_btn_bg_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_pests_problem_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_pests_problem_btn_hover_bg_color');
if($vw_stock_images_pro_pests_problem_btn_hover_bg_color != false ){
	$custom_css .='#pests-problem .theme-btn:hover{';
	if($vw_stock_images_pro_pests_problem_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_pests_problem_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_pests_problem_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}


$vw_stock_images_pro_pests_problem_card_heading_color = get_theme_mod('vw_stock_images_pro_pests_problem_card_heading_color');
$vw_stock_images_pro_pests_problem_card_heading_font_family = get_theme_mod('vw_stock_images_pro_pests_problem_card_heading_font_family');
$vw_stock_images_pro_pests_problem_card_heading_font_size = get_theme_mod('vw_stock_images_pro_pests_problem_card_heading_font_size');

if($vw_stock_images_pro_pests_problem_card_heading_color != false || $vw_stock_images_pro_pests_problem_card_heading_font_family != false || $vw_stock_images_pro_pests_problem_card_heading_font_size != false){
	$custom_css .='#pests-problem .pests-problem-title a{';
		if($vw_stock_images_pro_pests_problem_card_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_pests_problem_card_heading_color).';';
		}
		if($vw_stock_images_pro_pests_problem_card_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_pests_problem_card_heading_font_family).';';
		}
		if($vw_stock_images_pro_pests_problem_card_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_pests_problem_card_heading_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_pests_problem_card_header_border_bottom_color = get_theme_mod('vw_stock_images_pro_pests_problem_card_header_border_bottom_color');
if($vw_stock_images_pro_pests_problem_card_header_border_bottom_color != false ){
	$custom_css .='#pests-problem .pests-problem-title{';
	if($vw_stock_images_pro_pests_problem_card_header_border_bottom_color != false){
		$custom_css .='border-color: '.esc_html($vw_stock_images_pro_pests_problem_card_header_border_bottom_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_pests_problem_card_paragraph_color = get_theme_mod('vw_stock_images_pro_pests_problem_card_paragraph_color');
$vw_stock_images_pro_pests_problem_card_paragraph_font_family = get_theme_mod('vw_stock_images_pro_pests_problem_card_paragraph_font_family');
$vw_stock_images_pro_pests_problem_card_paragraph_font_size = get_theme_mod('vw_stock_images_pro_pests_problem_card_paragraph_font_size');

if($vw_stock_images_pro_pests_problem_card_paragraph_color != false || $vw_stock_images_pro_pests_problem_card_paragraph_font_family != false || $vw_stock_images_pro_pests_problem_card_paragraph_font_size != false){
	$custom_css .='#pests-problem .pests-problem-content{';
		if($vw_stock_images_pro_pests_problem_card_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_pests_problem_card_paragraph_color).';';
		}
		if($vw_stock_images_pro_pests_problem_card_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_pests_problem_card_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_pests_problem_card_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_pests_problem_card_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_pests_problem_card_background_color = get_theme_mod('vw_stock_images_pro_pests_problem_card_background_color');
if($vw_stock_images_pro_pests_problem_card_background_color != false ){
	$custom_css .='#pests-problem .pests-problem-inner-content{';
	if($vw_stock_images_pro_pests_problem_card_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_pests_problem_card_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_pests_problem_card_hover_background_color = get_theme_mod('vw_stock_images_pro_pests_problem_card_hover_background_color');
if($vw_stock_images_pro_pests_problem_card_hover_background_color != false ){
	$custom_css .='#pests-problem .pests-problem-inner-content:hover{';
	if($vw_stock_images_pro_pests_problem_card_hover_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_pests_problem_card_hover_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_pests_problem_card_hover_image_background_color = get_theme_mod('vw_stock_images_pro_pests_problem_card_hover_image_background_color');
if($vw_stock_images_pro_pests_problem_card_hover_image_background_color != false ){
	$custom_css .='#pests-problem .pests-problem-inner-content:hover .pests-problem-img{';
	if($vw_stock_images_pro_pests_problem_card_hover_image_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_pests_problem_card_hover_image_background_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_pests_problem_owl_dots_color = get_theme_mod('vw_stock_images_pro_pests_problem_owl_dots_color');

if($vw_stock_images_pro_pests_problem_owl_dots_color != false){
	$custom_css .='#pests-problem .owl-dots button{';
		if($vw_stock_images_pro_pests_problem_owl_dots_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_pests_problem_owl_dots_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_pests_problem_owl_dots_active_color = get_theme_mod('vw_stock_images_pro_pests_problem_owl_dots_active_color');
if($vw_stock_images_pro_pests_problem_owl_dots_active_color != false ){
	$custom_css .='#pests-problem button.owl-dot.active{';
	if($vw_stock_images_pro_pests_problem_owl_dots_active_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_pests_problem_owl_dots_active_color).';';
	}
	$custom_css .='}';
}
/*-------------------------------About Section Start-------------------------*/

$vw_stock_images_pro_about_heading_color = get_theme_mod('vw_stock_images_pro_about_heading_color');
$vw_stock_images_pro_about_heading_font_family = get_theme_mod('vw_stock_images_pro_about_heading_font_family');
$vw_stock_images_pro_about_heading_font_size = get_theme_mod('vw_stock_images_pro_about_heading_font_size');


if($vw_stock_images_pro_about_heading_color != false || $vw_stock_images_pro_about_heading_font_family != false || $vw_stock_images_pro_about_heading_font_size != false){
	$custom_css .='#about-us .main-head {';
		if($vw_stock_images_pro_about_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_heading_color).';';
		}
		if($vw_stock_images_pro_about_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_heading_font_family).';';
		}
		if($vw_stock_images_pro_about_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_about_paragraph_color = get_theme_mod('vw_stock_images_pro_about_paragraph_color');
$vw_stock_images_pro_about_paragraph_font_family = get_theme_mod('vw_stock_images_pro_about_paragraph_font_family');
$vw_stock_images_pro_about_paragraph_font_size = get_theme_mod('vw_stock_images_pro_about_paragraph_font_size');

if($vw_stock_images_pro_about_paragraph_color != false || $vw_stock_images_pro_about_paragraph_font_family != false || $vw_stock_images_pro_about_paragraph_font_size != false){
	$custom_css .='#about-us .theme-para {';
		if($vw_stock_images_pro_about_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_paragraph_color).';';
		}
		if($vw_stock_images_pro_about_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_about_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_about_inner_heading_color = get_theme_mod('vw_stock_images_pro_about_inner_heading_color');
$vw_stock_images_pro_about_inner_heading_font_family = get_theme_mod('vw_stock_images_pro_about_inner_heading_font_family');
$vw_stock_images_pro_about_inner_heading_font_size = get_theme_mod('vw_stock_images_pro_about_inner_heading_font_size');

if($vw_stock_images_pro_about_inner_heading_color != false || $vw_stock_images_pro_about_inner_heading_font_family != false || $vw_stock_images_pro_about_inner_heading_font_size != false){
	$custom_css .='#about-us .inner-heading {';
		if($vw_stock_images_pro_about_inner_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_inner_heading_color).';';
		}
		if($vw_stock_images_pro_about_inner_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_inner_heading_font_family).';';
		}
		if($vw_stock_images_pro_about_inner_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_inner_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_about_inner_paragraph_color = get_theme_mod('vw_stock_images_pro_about_inner_paragraph_color');
$vw_stock_images_pro_about_inner_paragraph_font_family = get_theme_mod('vw_stock_images_pro_about_inner_paragraph_font_family');
$vw_stock_images_pro_about_inner_paragraph_font_size = get_theme_mod('vw_stock_images_pro_about_inner_paragraph_font_size');

if($vw_stock_images_pro_about_inner_paragraph_color != false || $vw_stock_images_pro_about_inner_paragraph_font_family != false || $vw_stock_images_pro_about_inner_paragraph_font_size != false){
	$custom_css .='#about-us .inner-para {';
		if($vw_stock_images_pro_about_inner_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_inner_paragraph_color).';';
		}
		if($vw_stock_images_pro_about_inner_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_inner_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_about_inner_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_inner_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_about_left_btn_color = get_theme_mod('vw_stock_images_pro_about_left_btn_color');
$vw_stock_images_pro_about_left_btn_font_family = get_theme_mod('vw_stock_images_pro_about_left_btn_font_family');
$vw_stock_images_pro_about_left_btn_font_size = get_theme_mod('vw_stock_images_pro_about_left_btn_font_size');
$vw_stock_images_pro_about_left_btn_bg_color = get_theme_mod('vw_stock_images_pro_about_left_btn_bg_color');
if($vw_stock_images_pro_about_left_btn_color != false || $vw_stock_images_pro_about_left_btn_font_family != false || $vw_stock_images_pro_about_left_btn_font_size != false || $vw_stock_images_pro_about_left_btn_bg_color != false ){
	$custom_css .='#about-us .theme-btn{';
		if($vw_stock_images_pro_about_left_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_left_btn_color).';';
		}
		if($vw_stock_images_pro_about_left_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_left_btn_font_family).';';
		}
		if($vw_stock_images_pro_about_left_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_left_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_about_left_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_about_left_btn_bg_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_about_left_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_about_left_btn_hover_bg_color');
if($vw_stock_images_pro_about_left_btn_hover_bg_color != false ){
	$custom_css .='#about-us .theme-btn:hover{';
	if($vw_stock_images_pro_about_left_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_about_left_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_about_left_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_about_manager_color = get_theme_mod('vw_stock_images_pro_about_manager_color');
$vw_stock_images_pro_about_manager_font_family = get_theme_mod('vw_stock_images_pro_about_manager_font_family');
$vw_stock_images_pro_about_manager_font_size = get_theme_mod('vw_stock_images_pro_about_manager_font_size');

if($vw_stock_images_pro_about_manager_color != false || $vw_stock_images_pro_about_manager_font_family != false || $vw_stock_images_pro_about_manager_font_size != false){
	$custom_css .='#about-us .about-footer-content h6 {';
		if($vw_stock_images_pro_about_manager_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_manager_color).';';
		}
		if($vw_stock_images_pro_about_manager_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_manager_font_family).';';
		}
		if($vw_stock_images_pro_about_manager_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_manager_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_about_manager_text_color = get_theme_mod('vw_stock_images_pro_about_manager_text_color');
$vw_stock_images_pro_about_manager_text_font_family = get_theme_mod('vw_stock_images_pro_about_manager_text_font_family');
$vw_stock_images_pro_about_manager_text_font_size = get_theme_mod('vw_stock_images_pro_about_manager_text_font_size');

if($vw_stock_images_pro_about_manager_text_color != false || $vw_stock_images_pro_about_manager_text_font_family != false || $vw_stock_images_pro_about_manager_text_font_size != false){
	$custom_css .='#about-us .about-footer-content p {';
		if($vw_stock_images_pro_about_manager_text_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_manager_text_color).';';
		}
		if($vw_stock_images_pro_about_manager_text_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_manager_text_font_family).';';
		}
		if($vw_stock_images_pro_about_manager_text_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_manager_text_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_about_year_number_color = get_theme_mod('vw_stock_images_pro_about_year_number_color');
$vw_stock_images_pro_about_year_number_font_family = get_theme_mod('vw_stock_images_pro_about_year_number_font_family');
$vw_stock_images_pro_about_year_number_font_size = get_theme_mod('vw_stock_images_pro_about_year_number_font_size');

if($vw_stock_images_pro_about_year_number_color != false || $vw_stock_images_pro_about_year_number_font_family != false || $vw_stock_images_pro_about_year_number_font_size != false){
	$custom_css .='.about-year h4{';
		if($vw_stock_images_pro_about_year_number_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_year_number_color).';';
		}
		if($vw_stock_images_pro_about_year_number_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_year_number_font_family).';';
		}
		if($vw_stock_images_pro_about_year_number_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_year_number_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_about_year_text_color = get_theme_mod('vw_stock_images_pro_about_year_text_color');
$vw_stock_images_pro_about_year_text_font_family = get_theme_mod('vw_stock_images_pro_about_year_text_font_family');
$vw_stock_images_pro_about_year_text_font_size = get_theme_mod('vw_stock_images_pro_about_year_text_font_size');

if($vw_stock_images_pro_about_year_text_color != false || $vw_stock_images_pro_about_year_text_font_family != false || $vw_stock_images_pro_about_year_text_font_size != false){
	$custom_css .='.about-year p{';
		if($vw_stock_images_pro_about_year_text_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_year_text_color).';';
		}
		if($vw_stock_images_pro_about_year_text_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_year_text_font_family).';';
		}
		if($vw_stock_images_pro_about_year_text_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_year_text_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_about_year_background_color = get_theme_mod('vw_stock_images_pro_about_year_background_color');
if($vw_stock_images_pro_about_year_background_color != false ){
	$custom_css .='.about-year{';
	if($vw_stock_images_pro_about_year_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_about_year_background_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_about_number_color = get_theme_mod('vw_stock_images_pro_about_number_color');
$vw_stock_images_pro_about_number_font_family = get_theme_mod('vw_stock_images_pro_about_number_font_family');
$vw_stock_images_pro_about_number_font_size = get_theme_mod('vw_stock_images_pro_about_number_font_size');

if($vw_stock_images_pro_about_number_color != false || $vw_stock_images_pro_about_number_font_family != false || $vw_stock_images_pro_about_number_font_size != false){
	$custom_css .='.about-contact-main h5{';
		if($vw_stock_images_pro_about_number_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_number_color).';';
		}
		if($vw_stock_images_pro_about_number_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_number_font_family).';';
		}
		if($vw_stock_images_pro_about_number_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_number_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_about_emergency_number_color = get_theme_mod('vw_stock_images_pro_about_emergency_number_color');
$vw_stock_images_pro_about_emergency_number_font_family = get_theme_mod('vw_stock_images_pro_about_emergency_number_font_family');
$vw_stock_images_pro_about_emergency_number_font_size = get_theme_mod('vw_stock_images_pro_about_emergency_number_font_size');

if($vw_stock_images_pro_about_emergency_number_color != false || $vw_stock_images_pro_about_emergency_number_font_family != false || $vw_stock_images_pro_about_emergency_number_font_size != false){
	$custom_css .='.about-contact-main a{';
		if($vw_stock_images_pro_about_emergency_number_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_emergency_number_color).';';
		}
		if($vw_stock_images_pro_about_emergency_number_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_emergency_number_font_family).';';
		}
		if($vw_stock_images_pro_about_emergency_number_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_emergency_number_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_about_emergency_phone_icon_color = get_theme_mod('vw_stock_images_pro_about_emergency_phone_icon_color');
$vw_stock_images_pro_about_emergency_phone_icon_font_size = get_theme_mod('vw_stock_images_pro_about_emergency_phone_icon_font_size');

if($vw_stock_images_pro_about_emergency_phone_icon_color != false || $vw_stock_images_pro_about_emergency_phone_icon_font_size != false){
	$custom_css .='.about-contact-main i{';
		if($vw_stock_images_pro_about_emergency_phone_icon_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_about_emergency_phone_icon_color).';';
		}
		if($vw_stock_images_pro_about_emergency_phone_icon_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_emergency_phone_icon_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_about_emergency_number_background_color = get_theme_mod('vw_stock_images_pro_about_emergency_number_background_color');
if($vw_stock_images_pro_about_emergency_number_background_color != false ){
	$custom_css .='.about-contact-main{';
	if($vw_stock_images_pro_about_emergency_number_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_about_emergency_number_background_color).';';
	}
	$custom_css .='}';
}
/*-------------------------------Professional Services Start-------------------------*/

$vw_stock_images_pro_professional_services_heading_color = get_theme_mod('vw_stock_images_pro_professional_services_heading_color');
$vw_stock_images_pro_professional_services_heading_font_family = get_theme_mod('vw_stock_images_pro_professional_services_heading_font_family');
$vw_stock_images_pro_professional_services_heading_font_size = get_theme_mod('vw_stock_images_pro_professional_services_heading_font_size');


if($vw_stock_images_pro_professional_services_heading_color != false || $vw_stock_images_pro_professional_services_heading_font_family != false || $vw_stock_images_pro_professional_services_heading_font_size != false){
	$custom_css .='#professional-services .main-head {';
		if($vw_stock_images_pro_professional_services_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_heading_color).';';
		}
		if($vw_stock_images_pro_professional_services_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_heading_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_heading_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_professional_services_paragraph_color = get_theme_mod('vw_stock_images_pro_professional_services_paragraph_color');
$vw_stock_images_pro_professional_services_paragraph_font_family = get_theme_mod('vw_stock_images_pro_professional_services_paragraph_font_family');
$vw_stock_images_pro_professional_services_paragraph_font_size = get_theme_mod('vw_stock_images_pro_professional_services_paragraph_font_size');

if($vw_stock_images_pro_professional_services_paragraph_color != false || $vw_stock_images_pro_professional_services_paragraph_font_family != false || $vw_stock_images_pro_professional_services_paragraph_font_size != false){
	$custom_css .='#professional-services .theme-para {';
		if($vw_stock_images_pro_professional_services_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_paragraph_color).';';
		}
		if($vw_stock_images_pro_professional_services_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_professional_services_tab_btn_color = get_theme_mod('vw_stock_images_pro_professional_services_tab_btn_color');
$vw_stock_images_pro_professional_services_tab_btn_font_family = get_theme_mod('vw_stock_images_pro_professional_services_tab_btn_font_family');
$vw_stock_images_pro_professional_services_tab_btn_font_size = get_theme_mod('vw_stock_images_pro_professional_services_tab_btn_font_size');
$vw_stock_images_pro_professional_services_tab_btn_bg_color = get_theme_mod('vw_stock_images_pro_professional_services_tab_btn_bg_color');
if($vw_stock_images_pro_professional_services_tab_btn_color != false || $vw_stock_images_pro_professional_services_tab_btn_font_family != false || $vw_stock_images_pro_professional_services_tab_btn_font_size != false || $vw_stock_images_pro_professional_services_tab_btn_bg_color != false ){
	$custom_css .='#professional-services .nav-link{';
		if($vw_stock_images_pro_professional_services_tab_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_tab_btn_color).';';
		}
		if($vw_stock_images_pro_professional_services_tab_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_tab_btn_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_tab_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_tab_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_professional_services_tab_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_professional_services_tab_btn_bg_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_professional_services_paragraph_color = get_theme_mod('vw_stock_images_pro_professional_services_paragraph_color');
$vw_stock_images_pro_professional_services_paragraph_font_family = get_theme_mod('vw_stock_images_pro_professional_services_paragraph_font_family');
$vw_stock_images_pro_professional_services_paragraph_font_size = get_theme_mod('vw_stock_images_pro_professional_services_paragraph_font_size');

if($vw_stock_images_pro_professional_services_paragraph_color != false || $vw_stock_images_pro_professional_services_paragraph_font_family != false || $vw_stock_images_pro_professional_services_paragraph_font_size != false){
	$custom_css .='#professional-services .theme-para {';
		if($vw_stock_images_pro_professional_services_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_paragraph_color).';';
		}
		if($vw_stock_images_pro_professional_services_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_professional_services_card_heading_color = get_theme_mod('vw_stock_images_pro_professional_services_card_heading_color');
$vw_stock_images_pro_professional_services_card_heading_font_family = get_theme_mod('vw_stock_images_pro_professional_services_card_heading_font_family');
$vw_stock_images_pro_professional_services_card_heading_font_size = get_theme_mod('vw_stock_images_pro_professional_services_card_heading_font_size');

if($vw_stock_images_pro_professional_services_card_heading_color != false || $vw_stock_images_pro_professional_services_card_heading_font_family != false || $vw_stock_images_pro_professional_services_card_heading_font_size != false){
	$custom_css .='#professional-services .service-title a {';
		if($vw_stock_images_pro_professional_services_card_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_card_heading_color).';';
		}
		if($vw_stock_images_pro_professional_services_card_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_card_heading_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_card_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_card_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_professional_services_card_paragraph_color = get_theme_mod('vw_stock_images_pro_professional_services_card_paragraph_color');
$vw_stock_images_pro_professional_services_card_paragraph_font_family = get_theme_mod('vw_stock_images_pro_professional_services_card_paragraph_font_family');
$vw_stock_images_pro_professional_services_card_paragraph_font_size = get_theme_mod('vw_stock_images_pro_professional_services_card_paragraph_font_size');

if($vw_stock_images_pro_professional_services_card_paragraph_color != false || $vw_stock_images_pro_professional_services_card_paragraph_font_family != false || $vw_stock_images_pro_professional_services_card_paragraph_font_size != false){
	$custom_css .='#professional-services .services-box p {';
		if($vw_stock_images_pro_professional_services_card_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_card_paragraph_color).';';
		}
		if($vw_stock_images_pro_professional_services_card_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_card_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_card_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_card_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_professional_services_card_btn_color = get_theme_mod('vw_stock_images_pro_professional_services_card_btn_color');
$vw_stock_images_pro_professional_services_card_btn_font_family = get_theme_mod('vw_stock_images_pro_professional_services_card_btn_font_family');
$vw_stock_images_pro_professional_services_card_btn_font_size = get_theme_mod('vw_stock_images_pro_professional_services_card_btn_font_size');
$vw_stock_images_pro_professional_services_card_btn_bg_color = get_theme_mod('vw_stock_images_pro_professional_services_card_btn_bg_color');
if($vw_stock_images_pro_professional_services_card_btn_color != false || $vw_stock_images_pro_professional_services_card_btn_font_family != false || $vw_stock_images_pro_professional_services_card_btn_font_size != false || $vw_stock_images_pro_professional_services_card_btn_bg_color != false ){
	$custom_css .='#professional-services .theme-btn{';
		if($vw_stock_images_pro_professional_services_card_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_professional_services_card_btn_color).';';
		}
		if($vw_stock_images_pro_professional_services_card_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_professional_services_card_btn_font_family).';';
		}
		if($vw_stock_images_pro_professional_services_card_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_professional_services_card_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_professional_services_card_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_professional_services_card_btn_bg_color).';';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_professional_services_card_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_professional_services_card_btn_hover_bg_color');
if($vw_stock_images_pro_professional_services_card_btn_hover_bg_color != false ){
	$custom_css .='#professional-services .theme-btn:hover{';
	if($vw_stock_images_pro_professional_services_card_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_professional_services_card_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_professional_services_card_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_professional_services_card_heading_border_bottom_color = get_theme_mod('vw_stock_images_pro_professional_services_card_heading_border_bottom_color');
if($vw_stock_images_pro_professional_services_card_heading_border_bottom_color != false ){
	$custom_css .='#professional-services .service-title::after{';
	if($vw_stock_images_pro_professional_services_card_heading_border_bottom_color != false){
		$custom_css .='border-color: '.esc_html($vw_stock_images_pro_professional_services_card_heading_border_bottom_color).';';
	}
	$custom_css .='}';
}




$vw_stock_images_pro_professional_services_card_background_color = get_theme_mod('vw_stock_images_pro_professional_services_card_background_color');
if($vw_stock_images_pro_professional_services_card_background_color != false ){
	$custom_css .='#professional-services .services-box{';
	if($vw_stock_images_pro_professional_services_card_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_professional_services_card_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_professional_services_card_small_image_color = get_theme_mod('vw_stock_images_pro_professional_services_card_small_image_color');
if($vw_stock_images_pro_professional_services_card_small_image_color != false ){
	$custom_css .='#professional-services .services-img-main .services-img{';
	if($vw_stock_images_pro_professional_services_card_small_image_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_professional_services_card_small_image_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_professional_services_card_owl_dots_color = get_theme_mod('vw_stock_images_pro_professional_services_card_owl_dots_color');
if($vw_stock_images_pro_professional_services_card_owl_dots_color != false){
	$custom_css .='#professional-services .owl-dots button{';
		if($vw_stock_images_pro_professional_services_card_owl_dots_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_professional_services_card_owl_dots_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_professional_services_card_owl_dots_active_color = get_theme_mod('vw_stock_images_pro_professional_services_card_owl_dots_active_color');
if($vw_stock_images_pro_professional_services_card_owl_dots_active_color != false ){
	$custom_css .=' #professional-services .owl-dots button.active{';
	if($vw_stock_images_pro_professional_services_card_owl_dots_active_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_professional_services_card_owl_dots_active_color).';';
	}
	$custom_css .='}';
}

/*-------------------------------Counter Offer Section Start-------------------------*/

$vw_stock_images_pro_counter_offer_bg_color_one = get_theme_mod('vw_stock_images_pro_counter_offer_bg_color_one');
if($vw_stock_images_pro_counter_offer_bg_color_one != false ){
	$custom_css .=' .offer-img-main::after{';
	if($vw_stock_images_pro_counter_offer_bg_color_one != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_counter_offer_bg_color_one).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_counter_offer_bg_color_two = get_theme_mod('vw_stock_images_pro_counter_offer_bg_color_two');
if($vw_stock_images_pro_counter_offer_bg_color_two != false ){
	$custom_css .=' #counter-offer>.container{';
	if($vw_stock_images_pro_counter_offer_bg_color_two != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_counter_offer_bg_color_two).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_counter_offer_heading_color = get_theme_mod('vw_stock_images_pro_counter_offer_heading_color');
$vw_stock_images_pro_counter_offer_heading_font_family = get_theme_mod('vw_stock_images_pro_counter_offer_heading_font_family');
$vw_stock_images_pro_counter_offer_heading_font_size = get_theme_mod('vw_stock_images_pro_counter_offer_heading_font_size');
if($vw_stock_images_pro_counter_offer_heading_color != false || $vw_stock_images_pro_counter_offer_heading_font_family != false || $vw_stock_images_pro_counter_offer_heading_font_size != false){
	$custom_css .='#counter-offer h2{';
		if($vw_stock_images_pro_counter_offer_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_offer_heading_color).';';
		}
		if($vw_stock_images_pro_counter_offer_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_offer_heading_font_family).';';
		}
		if($vw_stock_images_pro_counter_offer_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_offer_heading_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_counter_offer_paragraph_color = get_theme_mod('vw_stock_images_pro_counter_offer_paragraph_color');
$vw_stock_images_pro_counter_offer_paragraph_font_family = get_theme_mod('vw_stock_images_pro_counter_offer_paragraph_font_family');
$vw_stock_images_pro_counter_offer_paragraph_font_size = get_theme_mod('vw_stock_images_pro_counter_offer_paragraph_font_size');
if($vw_stock_images_pro_counter_offer_paragraph_color != false || $vw_stock_images_pro_counter_offer_paragraph_font_family != false || $vw_stock_images_pro_counter_offer_paragraph_font_size != false){
	$custom_css .='#counter-offer p{';
		if($vw_stock_images_pro_counter_offer_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_offer_paragraph_color).';';
		}
		if($vw_stock_images_pro_counter_offer_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_offer_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_counter_offer_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_offer_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_counter_offer_counter_number_color = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_color');
$vw_stock_images_pro_counter_offer_counter_number_font_family = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_font_family');
$vw_stock_images_pro_counter_offer_counter_number_font_size = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_font_size');
if($vw_stock_images_pro_counter_offer_counter_number_color != false || $vw_stock_images_pro_counter_offer_counter_number_font_family != false || $vw_stock_images_pro_counter_offer_counter_number_font_size != false){
	$custom_css .='#counter-offer .timer_days{';
		if($vw_stock_images_pro_counter_offer_counter_number_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_offer_counter_number_color).';';
		}
		if($vw_stock_images_pro_counter_offer_counter_number_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_offer_counter_number_font_family).';';
		}
		if($vw_stock_images_pro_counter_offer_counter_number_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_offer_counter_number_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_counter_offer_counter_number_text_color = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_text_color');
$vw_stock_images_pro_counter_offer_counter_number_text_font_family = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_text_font_family');
$vw_stock_images_pro_counter_offer_counter_number_text_font_size = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_text_font_size');
if($vw_stock_images_pro_counter_offer_counter_number_text_color != false || $vw_stock_images_pro_counter_offer_counter_number_text_font_family != false || $vw_stock_images_pro_counter_offer_counter_number_text_font_size != false){
	$custom_css .='#counter-offer .nofont{';
		if($vw_stock_images_pro_counter_offer_counter_number_text_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_offer_counter_number_text_color).';';
		}
		if($vw_stock_images_pro_counter_offer_counter_number_text_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_offer_counter_number_text_font_family).';';
		}
		if($vw_stock_images_pro_counter_offer_counter_number_text_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_offer_counter_number_text_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_counter_offer_counter_number_bg_color = get_theme_mod('vw_stock_images_pro_counter_offer_counter_number_bg_color');
if($vw_stock_images_pro_counter_offer_counter_number_bg_color != false ){
	$custom_css .='#counter-offer .timer_days{';
	if($vw_stock_images_pro_counter_offer_counter_number_bg_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_counter_offer_counter_number_bg_color).';';
	}
	$custom_css .='}';
}


$vw_stock_images_pro_counter_offer_btn_color = get_theme_mod('vw_stock_images_pro_counter_offer_btn_color');
$vw_stock_images_pro_counter_offer_btn_font_family = get_theme_mod('vw_stock_images_pro_counter_offer_btn_font_family');
$vw_stock_images_pro_counter_offer_btn_font_size = get_theme_mod('vw_stock_images_pro_counter_offer_btn_font_size');
$vw_stock_images_pro_counter_offer_btn_bg_color = get_theme_mod('vw_stock_images_pro_counter_offer_btn_bg_color');
if($vw_stock_images_pro_counter_offer_btn_color != false || $vw_stock_images_pro_counter_offer_btn_font_family != false || $vw_stock_images_pro_counter_offer_btn_font_size != false || $vw_stock_images_pro_counter_offer_btn_bg_color != false ){
	$custom_css .='#counter-offer a.theme-btn.theme-btn-yellow{';
		if($vw_stock_images_pro_counter_offer_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_offer_btn_color).';';
		}
		if($vw_stock_images_pro_counter_offer_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_offer_btn_font_family).';';
		}
		if($vw_stock_images_pro_counter_offer_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_offer_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_counter_offer_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_counter_offer_btn_bg_color).';';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_counter_offer_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_counter_offer_btn_hover_bg_color');
if($vw_stock_images_pro_counter_offer_btn_hover_bg_color != false ){
	$custom_css .='#counter-offer .theme-btn:hover{';
	if($vw_stock_images_pro_counter_offer_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_counter_offer_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_counter_offer_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}


/*-------------------------------Why Choose Section Start-------------------------*/

$vw_stock_images_pro_why_choose_heading_color = get_theme_mod('vw_stock_images_pro_why_choose_heading_color');
$vw_stock_images_pro_why_choose_heading_font_family = get_theme_mod('vw_stock_images_pro_why_choose_heading_font_family');
$vw_stock_images_pro_why_choose_heading_font_size = get_theme_mod('vw_stock_images_pro_why_choose_heading_font_size');


if($vw_stock_images_pro_why_choose_heading_color != false || $vw_stock_images_pro_why_choose_heading_font_family != false || $vw_stock_images_pro_why_choose_heading_font_size != false){
	$custom_css .='#choose-sec .main-head{';
		if($vw_stock_images_pro_why_choose_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_why_choose_heading_color).';';
		}
		if($vw_stock_images_pro_why_choose_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_why_choose_heading_font_family).';';
		}
		if($vw_stock_images_pro_why_choose_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_why_choose_heading_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_why_choose_para_color = get_theme_mod('vw_stock_images_pro_why_choose_para_color');
$vw_stock_images_pro_why_choose_para_font_family = get_theme_mod('vw_stock_images_pro_why_choose_para_font_family');
$vw_stock_images_pro_why_choose_para_font_size = get_theme_mod('vw_stock_images_pro_why_choose_para_font_size');
if($vw_stock_images_pro_why_choose_para_color != false || $vw_stock_images_pro_why_choose_para_font_family != false || $vw_stock_images_pro_why_choose_para_font_size != false){
	$custom_css .='#choose-sec .theme-para{';
		if($vw_stock_images_pro_why_choose_para_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_why_choose_para_color).';';
		}
		if($vw_stock_images_pro_why_choose_para_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_why_choose_para_font_family).';';
		}
		if($vw_stock_images_pro_why_choose_para_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_why_choose_para_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_why_choose_points_color = get_theme_mod('vw_stock_images_pro_why_choose_points_color');
$vw_stock_images_pro_why_choose_points_font_family = get_theme_mod('vw_stock_images_pro_why_choose_points_font_family');
$vw_stock_images_pro_why_choose_points_font_size = get_theme_mod('vw_stock_images_pro_why_choose_points_font_size');
if($vw_stock_images_pro_why_choose_points_color != false || $vw_stock_images_pro_why_choose_points_font_family != false || $vw_stock_images_pro_why_choose_points_font_size != false){
	$custom_css .='#choose-sec .choose-content-main h6{';
		if($vw_stock_images_pro_why_choose_points_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_why_choose_points_color).';';
		}
		if($vw_stock_images_pro_why_choose_points_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_why_choose_points_font_family).';';
		}
		if($vw_stock_images_pro_why_choose_points_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_why_choose_points_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_why_choose_img_one_background_color = get_theme_mod('vw_stock_images_pro_why_choose_img_one_background_color');
if($vw_stock_images_pro_why_choose_img_one_background_color != false ){
	$custom_css .='.choose-main-img::after{';
	if($vw_stock_images_pro_why_choose_img_one_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_why_choose_img_one_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_why_choose_img_video_overlay_color = get_theme_mod('vw_stock_images_pro_why_choose_img_video_overlay_color');
if($vw_stock_images_pro_why_choose_img_video_overlay_color != false ){
	$custom_css .='#choose-sec .choose-video-main-inner:after{';
	if($vw_stock_images_pro_why_choose_img_video_overlay_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_why_choose_img_video_overlay_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_why_choose_video_play_icon_border_color = get_theme_mod('vw_stock_images_pro_why_choose_video_play_icon_border_color');
if($vw_stock_images_pro_why_choose_video_play_icon_border_color != false ){
	$custom_css .='#videoBtn i{';
	if($vw_stock_images_pro_why_choose_video_play_icon_border_color != false){
		$custom_css .='border-color: '.esc_html($vw_stock_images_pro_why_choose_video_play_icon_border_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_why_choose_video_play_icon_color = get_theme_mod('vw_stock_images_pro_why_choose_video_play_icon_color');
if($vw_stock_images_pro_why_choose_video_play_icon_color != false ){
	$custom_css .='#videoBtn i{';
	if($vw_stock_images_pro_why_choose_video_play_icon_color != false){
		$custom_css .='color: '.esc_html($vw_stock_images_pro_why_choose_video_play_icon_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_why_choose_video_play_icon_background_color = get_theme_mod('vw_stock_images_pro_why_choose_video_play_icon_background_color');
if($vw_stock_images_pro_why_choose_video_play_icon_background_color != false ){
	$custom_css .='#videoBtn i{';
	if($vw_stock_images_pro_why_choose_video_play_icon_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_why_choose_video_play_icon_background_color).';';
	}
	$custom_css .='}';
}
/*-------------------------------Counter Section Start-------------------------*/
$vw_stock_images_pro_counter_no_color = get_theme_mod('vw_stock_images_pro_counter_no_color');
$vw_stock_images_pro_counter_no_font_family = get_theme_mod('vw_stock_images_pro_counter_no_font_family');
$vw_stock_images_pro_counter_no_font_size = get_theme_mod('vw_stock_images_pro_counter_no_font_size');


if($vw_stock_images_pro_counter_no_color != false || $vw_stock_images_pro_counter_no_font_family != false || $vw_stock_images_pro_counter_no_font_size != false){
	$custom_css .='#counter-sec .recrd_inner{';
		if($vw_stock_images_pro_counter_no_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_no_color).';';
		}
		if($vw_stock_images_pro_counter_no_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_no_font_family).';';
		}
		if($vw_stock_images_pro_counter_no_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_no_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_counter_title_color = get_theme_mod('vw_stock_images_pro_counter_title_color');
$vw_stock_images_pro_counter_title_font_family = get_theme_mod('vw_stock_images_pro_counter_title_font_family');
$vw_stock_images_pro_counter_title_font_size = get_theme_mod('vw_stock_images_pro_counter_title_font_size');


if($vw_stock_images_pro_counter_title_color != false || $vw_stock_images_pro_counter_title_font_family != false || $vw_stock_images_pro_counter_title_font_size != false){
	$custom_css .=' .our-records-info p{';
		if($vw_stock_images_pro_counter_title_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_counter_title_color).';';
		}
		if($vw_stock_images_pro_counter_title_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_counter_title_font_family).';';
		}
		if($vw_stock_images_pro_counter_title_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_counter_title_font_size).'px;';
		}
	$custom_css .='}';
}

if ( is_front_page() ) {

	$vw_stock_images_pro_counter_card_background_color = get_theme_mod('vw_stock_images_pro_counter_card_background_color');
} else {
	$vw_stock_images_pro_counter_card_background_color = get_theme_mod('vw_stock_images_pro_counter_card_background_color_about');
}

if($vw_stock_images_pro_counter_card_background_color != false ){
	$custom_css .='#counter-sec .counter-inner{';
	if($vw_stock_images_pro_counter_card_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_counter_card_background_color).' !important;';
	}
	$custom_css .='}';
}

/*-------------------------------Popular Section Start-------------------------*/

$vw_stock_images_pro_section_popular_products_heading_color = get_theme_mod('vw_stock_images_pro_section_popular_products_heading_color');
$vw_stock_images_pro_section_popular_products_heading_font_family = get_theme_mod('vw_stock_images_pro_section_popular_products_heading_font_family');
$vw_stock_images_pro_section_popular_products_heading_font_size = get_theme_mod('vw_stock_images_pro_section_popular_products_heading_font_size');

if($vw_stock_images_pro_section_popular_products_heading_color != false || $vw_stock_images_pro_section_popular_products_heading_font_family != false || $vw_stock_images_pro_section_popular_products_heading_font_size != false){
	$custom_css .='#popular-product .main-head {';
		if($vw_stock_images_pro_section_popular_products_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_section_popular_products_heading_color).';';
		}
		if($vw_stock_images_pro_section_popular_products_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_section_popular_products_heading_font_family).';';
		}
		if($vw_stock_images_pro_section_popular_products_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_section_popular_products_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_section_popular_products_paragraph_color = get_theme_mod('vw_stock_images_pro_section_popular_products_paragraph_color');
$vw_stock_images_pro_section_popular_products_paragraph_font_family = get_theme_mod('vw_stock_images_pro_section_popular_products_paragraph_font_family');
$vw_stock_images_pro_section_popular_products_paragraph_font_size = get_theme_mod('vw_stock_images_pro_section_popular_products_paragraph_font_size');

if($vw_stock_images_pro_section_popular_products_paragraph_color != false || $vw_stock_images_pro_section_popular_products_paragraph_font_family != false || $vw_stock_images_pro_section_popular_products_paragraph_font_size != false){
	$custom_css .='#popular-product .theme-para {';
		if($vw_stock_images_pro_section_popular_products_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_section_popular_products_paragraph_color).';';
		}
		if($vw_stock_images_pro_section_popular_products_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_section_popular_products_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_section_popular_products_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_section_popular_products_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_popular_products_btn_color = get_theme_mod('vw_stock_images_pro_popular_products_btn_color');
$vw_stock_images_pro_popular_products_btn_font_family = get_theme_mod('vw_stock_images_pro_popular_products_btn_font_family');
$vw_stock_images_pro_popular_products_btn_font_size = get_theme_mod('vw_stock_images_pro_popular_products_btn_font_size');
$vw_stock_images_pro_popular_products_btn_bg_color = get_theme_mod('vw_stock_images_pro_popular_products_btn_bg_color');
if($vw_stock_images_pro_popular_products_btn_color != false || $vw_stock_images_pro_popular_products_btn_font_family != false || $vw_stock_images_pro_popular_products_btn_font_size != false || $vw_stock_images_pro_popular_products_btn_bg_color != false ){
	$custom_css .='#popular-product .theme-btn{';
		if($vw_stock_images_pro_popular_products_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_popular_products_btn_color).';';
		}
		if($vw_stock_images_pro_popular_products_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_popular_products_btn_font_family).';';
		}
		if($vw_stock_images_pro_popular_products_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_popular_products_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_popular_products_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_popular_products_btn_bg_color).';';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_popular_products_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_popular_products_btn_hover_bg_color');
if($vw_stock_images_pro_popular_products_btn_hover_bg_color != false ){
	$custom_css .='#popular-product .theme-btn:hover{';
	if($vw_stock_images_pro_popular_products_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_popular_products_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_popular_products_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_section_popular_products_cards_heading_color = get_theme_mod('vw_stock_images_pro_section_popular_products_cards_heading_color');
$vw_stock_images_pro_section_popular_products_cards_heading_font_family = get_theme_mod('vw_stock_images_pro_section_popular_products_cards_heading_font_family');
$vw_stock_images_pro_section_popular_products_cards_heading_font_size = get_theme_mod('vw_stock_images_pro_section_popular_products_cards_heading_font_size');

if($vw_stock_images_pro_section_popular_products_cards_heading_color != false || $vw_stock_images_pro_section_popular_products_cards_heading_font_family != false || $vw_stock_images_pro_section_popular_products_cards_heading_font_size != false){
	$custom_css .='.product-title a, .product-name a, .related.products li a{';
		if($vw_stock_images_pro_section_popular_products_cards_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_section_popular_products_cards_heading_color).';';
		}
		if($vw_stock_images_pro_section_popular_products_cards_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_section_popular_products_cards_heading_font_family).';';
		}
		if($vw_stock_images_pro_section_popular_products_cards_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_section_popular_products_cards_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_section_popular_products_cards_paragraph_color = get_theme_mod('vw_stock_images_pro_section_popular_products_cards_paragraph_color');
$vw_stock_images_pro_section_popular_products_cards_paragraph_font_family = get_theme_mod('vw_stock_images_pro_section_popular_products_cards_paragraph_font_family');
$vw_stock_images_pro_section_popular_products_cards_paragraph_font_size = get_theme_mod('vw_stock_images_pro_section_popular_products_cards_paragraph_font_size');

if($vw_stock_images_pro_section_popular_products_cards_paragraph_color != false || $vw_stock_images_pro_section_popular_products_cards_paragraph_font_family != false || $vw_stock_images_pro_section_popular_products_cards_paragraph_font_size != false){
	$custom_css .='.product-content p{';
		if($vw_stock_images_pro_section_popular_products_cards_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_section_popular_products_cards_paragraph_color).';';
		}
		if($vw_stock_images_pro_section_popular_products_cards_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_section_popular_products_cards_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_section_popular_products_cards_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_section_popular_products_cards_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_popular_products_regular_price_color = get_theme_mod('vw_stock_images_pro_popular_products_regular_price_color');
$vw_stock_images_pro_popular_products_regular_price_font_family = get_theme_mod('vw_stock_images_pro_popular_products_regular_price_font_family');
$vw_stock_images_pro_popular_products_regular_price_font_size = get_theme_mod('vw_stock_images_pro_popular_products_regular_price_font_size');

if($vw_stock_images_pro_popular_products_regular_price_color != false || $vw_stock_images_pro_popular_products_regular_price_font_family != false || $vw_stock_images_pro_popular_products_regular_price_font_size != false){
	$custom_css .='del .woocommerce-Price-amount bdi, .product-price del .woocommerce-Price-amount.amount, .item-details-table del .woocommerce-Price-amount.amount, .wc-block-components-product-price__regular{';
		if($vw_stock_images_pro_popular_products_regular_price_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_popular_products_regular_price_color).';';
		}
		if($vw_stock_images_pro_popular_products_regular_price_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_popular_products_regular_price_font_family).';';
		}
		if($vw_stock_images_pro_popular_products_regular_price_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_popular_products_regular_price_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_popular_products_sale_price_color = get_theme_mod('vw_stock_images_pro_popular_products_sale_price_color');
$vw_stock_images_pro_popular_products_sale_price_font_family = get_theme_mod('vw_stock_images_pro_popular_products_sale_price_font_family');
$vw_stock_images_pro_popular_products_sale_price_font_size = get_theme_mod('vw_stock_images_pro_popular_products_sale_price_font_size');

if($vw_stock_images_pro_popular_products_sale_price_color != false || $vw_stock_images_pro_popular_products_sale_price_font_family != false || $vw_stock_images_pro_popular_products_sale_price_font_size != false){
	$custom_css .='ins .woocommerce-Price-amount bdi, .product-price ins .woocommerce-Price-amount.amount, .item-details-table ins .woocommerce-Price-amount.amount, ins.wc-block-components-product-price__value.is-discounted{';
		if($vw_stock_images_pro_popular_products_sale_price_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_popular_products_sale_price_color).';';
		}
		if($vw_stock_images_pro_popular_products_sale_price_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_popular_products_sale_price_font_family).';';
		}
		if($vw_stock_images_pro_popular_products_sale_price_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_popular_products_sale_price_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_popular_products_card_border_color = get_theme_mod('vw_stock_images_pro_popular_products_card_border_color');
if($vw_stock_images_pro_popular_products_card_border_color != false ){
	$custom_css .='.popular-pro-box, .related.products li{';
	if($vw_stock_images_pro_popular_products_card_border_color != false){
		$custom_css .='border-color: '.esc_html($vw_stock_images_pro_popular_products_card_border_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_popular_products_image_background_color = get_theme_mod('vw_stock_images_pro_popular_products_image_background_color');
if($vw_stock_images_pro_popular_products_image_background_color != false ){
	$custom_css .='.pro-img, .wishlist-items-wrapper .product-thumbnail, .wishlist_table.mobile li .item-wrapper .product-thumbnail, .related.products li img{';
	if($vw_stock_images_pro_popular_products_image_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_popular_products_image_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_popular_products_hover_image_background_color = get_theme_mod('vw_stock_images_pro_popular_products_hover_image_background_color');
if($vw_stock_images_pro_popular_products_hover_image_background_color != false ){
	$custom_css .='.content-overlay{';
	if($vw_stock_images_pro_popular_products_hover_image_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_popular_products_hover_image_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_popular_products_card_hover_background_color = get_theme_mod('vw_stock_images_pro_popular_products_card_hover_background_color');
if($vw_stock_images_pro_popular_products_card_hover_background_color != false ){
	$custom_css .='.popular-pro-box:hover{';
	if($vw_stock_images_pro_popular_products_card_hover_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_popular_products_card_hover_background_color).';';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_popular_products_card_hover_text_color = get_theme_mod('vw_stock_images_pro_popular_products_card_hover_text_color');
if($vw_stock_images_pro_popular_products_card_hover_text_color != false ){
	$custom_css .='.popular-pro-box:hover .product-title a, .popular-pro-box:hover .product-content p, .popular-pro-box:hover del .woocommerce-Price-amount bdi, .popular-pro-box:hover ins .woocommerce-Price-amount bdi, .popular-pro-box:hover{';
	if($vw_stock_images_pro_popular_products_card_hover_text_color != false){
		$custom_css .='color: '.esc_html($vw_stock_images_pro_popular_products_card_hover_text_color).';';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_popular_products_icon_color = get_theme_mod('vw_stock_images_pro_popular_products_icon_color');
$vw_stock_images_pro_popular_products_icon_font_size = get_theme_mod('vw_stock_images_pro_popular_products_icon_font_size');
$vw_stock_images_pro_popular_products_icon_bg_color = get_theme_mod('vw_stock_images_pro_popular_products_icon_bg_color');
if($vw_stock_images_pro_popular_products_icon_color != false || $vw_stock_images_pro_popular_products_icon_font_size != false ||$vw_stock_images_pro_popular_products_icon_bg_color != false ){
	$custom_css .='.cart-btn a:before, .wishlist-items-wrapper .product-add-to-cart a:before, .wishlist_table.mobile li .product-add-to-cart a:before,.wishlist_text i{';
		if($vw_stock_images_pro_popular_products_icon_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_popular_products_icon_color).';';
		}
		if($vw_stock_images_pro_popular_products_icon_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_popular_products_icon_bg_color).';';
		}
		if($vw_stock_images_pro_popular_products_icon_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_popular_products_icon_font_size).'px;';
		}
	$custom_css .='}';
}
/*-------------------------------Faq Start-------------------------*/
$vw_stock_images_pro_faq_heading_color = get_theme_mod('vw_stock_images_pro_faq_heading_color');
$vw_stock_images_pro_faq_heading_font_family = get_theme_mod('vw_stock_images_pro_faq_heading_font_family');
$vw_stock_images_pro_faq_heading_font_size = get_theme_mod('vw_stock_images_pro_faq_heading_font_size');


if($vw_stock_images_pro_faq_heading_color != false || $vw_stock_images_pro_faq_heading_font_family != false || $vw_stock_images_pro_faq_heading_font_size != false){
	$custom_css .='#faq-sec .main-head{';
		if($vw_stock_images_pro_faq_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_heading_color).';';
		}
		if($vw_stock_images_pro_faq_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_heading_font_family).';';
		}
		if($vw_stock_images_pro_faq_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_faq_paragraph_color = get_theme_mod('vw_stock_images_pro_faq_paragraph_color');
$vw_stock_images_pro_faq_paragraph_font_family = get_theme_mod('vw_stock_images_pro_faq_paragraph_font_family');
$vw_stock_images_pro_faq_paragraph_font_size = get_theme_mod('vw_stock_images_pro_faq_paragraph_font_size');


if($vw_stock_images_pro_faq_paragraph_color != false || $vw_stock_images_pro_faq_paragraph_font_family != false || $vw_stock_images_pro_faq_paragraph_font_size != false){
	$custom_css .='#faq-sec .theme-para{';
		if($vw_stock_images_pro_faq_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_paragraph_color).';';
		}
		if($vw_stock_images_pro_faq_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_faq_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_faq_question_color = get_theme_mod('vw_stock_images_pro_faq_question_color');
$vw_stock_images_pro_faq_question_font_family = get_theme_mod('vw_stock_images_pro_faq_question_font_family');
$vw_stock_images_pro_faq_question_font_size = get_theme_mod('vw_stock_images_pro_faq_question_font_size');


if($vw_stock_images_pro_faq_question_color != false || $vw_stock_images_pro_faq_question_font_family != false || $vw_stock_images_pro_faq_question_font_size != false){
	$custom_css .='#faq-sec .accordion-button, #faq-page .accordion-button{';
		if($vw_stock_images_pro_faq_question_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_question_color).';';
		}
		if($vw_stock_images_pro_faq_question_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_question_font_family).';';
		}
		if($vw_stock_images_pro_faq_question_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_question_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_faq_answer_color = get_theme_mod('vw_stock_images_pro_faq_answer_color');
$vw_stock_images_pro_faq_answer_font_family = get_theme_mod('vw_stock_images_pro_faq_answer_font_family');
$vw_stock_images_pro_faq_answer_font_size = get_theme_mod('vw_stock_images_pro_faq_answer_font_size');
if($vw_stock_images_pro_faq_answer_color != false || $vw_stock_images_pro_faq_answer_font_family != false || $vw_stock_images_pro_faq_answer_font_size != false){
	$custom_css .='#faq-sec .accordion-body, #faq-page .accordion-body{';
		if($vw_stock_images_pro_faq_answer_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_answer_color).';';
		}
		if($vw_stock_images_pro_faq_answer_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_answer_font_family).';';
		}
		if($vw_stock_images_pro_faq_answer_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_answer_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_active_faq_question_color = get_theme_mod('vw_stock_images_pro_active_faq_question_color');
if($vw_stock_images_pro_active_faq_question_color != false){
	$custom_css .='#slider .slider-heading span, #faq-sec .accordion-button:not(.collapsed), #faq-page .accordion-button:not(.collapsed){';
		if($vw_stock_images_pro_active_faq_question_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_active_faq_question_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_active_faq_box_background_color = get_theme_mod('vw_stock_images_pro_active_faq_box_background_color');
if($vw_stock_images_pro_active_faq_box_background_color != false){
	$custom_css .='#faq-sec .accordion, #faq-page .accordion{';
		if($vw_stock_images_pro_active_faq_box_background_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_active_faq_box_background_color).';';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_active_faq_que_ans_bg_color = get_theme_mod('vw_stock_images_pro_active_faq_que_ans_bg_color');
if($vw_stock_images_pro_active_faq_que_ans_bg_color != false){
	$custom_css .='#faq-sec .accordion-item, #faq-page .accordion-item{';
		if($vw_stock_images_pro_active_faq_que_ans_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_active_faq_que_ans_bg_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_faq_inner_heading_color = get_theme_mod('vw_stock_images_pro_faq_inner_heading_color');
$vw_stock_images_pro_faq_inner_heading_font_family = get_theme_mod('vw_stock_images_pro_faq_inner_heading_font_family');
$vw_stock_images_pro_faq_inner_heading_font_size = get_theme_mod('vw_stock_images_pro_faq_inner_heading_font_size');


if($vw_stock_images_pro_faq_inner_heading_color != false || $vw_stock_images_pro_faq_inner_heading_font_family != false || $vw_stock_images_pro_faq_inner_heading_font_size != false){
	$custom_css .='#faq-sec .main-head-inner {';
		if($vw_stock_images_pro_faq_inner_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_inner_heading_color).';';
		}
		if($vw_stock_images_pro_faq_inner_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_inner_heading_font_family).';';
		}
		if($vw_stock_images_pro_faq_inner_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_inner_heading_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_faq_inner_paragraph_color = get_theme_mod('vw_stock_images_pro_faq_inner_paragraph_color');
$vw_stock_images_pro_faq_inner_paragraph_font_family = get_theme_mod('vw_stock_images_pro_faq_inner_paragraph_font_family');
$vw_stock_images_pro_faq_inner_paragraph_font_size = get_theme_mod('vw_stock_images_pro_faq_inner_paragraph_font_size');


if($vw_stock_images_pro_faq_inner_paragraph_color != false || $vw_stock_images_pro_faq_inner_paragraph_font_family != false || $vw_stock_images_pro_faq_inner_paragraph_font_size != false){
	$custom_css .='#faq-sec .theme-para-inner   {';
		if($vw_stock_images_pro_faq_inner_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_inner_paragraph_color).';';
		}
		if($vw_stock_images_pro_faq_inner_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_inner_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_faq_inner_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_inner_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_faq_form_label_color = get_theme_mod('vw_stock_images_pro_faq_form_label_color');
$vw_stock_images_pro_faq_form_label_font_family = get_theme_mod('vw_stock_images_pro_faq_form_label_font_family');
$vw_stock_images_pro_faq_form_label_font_size = get_theme_mod('vw_stock_images_pro_faq_form_label_font_size');


if($vw_stock_images_pro_faq_form_label_color != false || $vw_stock_images_pro_faq_form_label_font_family != false || $vw_stock_images_pro_faq_form_label_font_size != false){
	$custom_css .='#faq-sec label  {';
		if($vw_stock_images_pro_faq_form_label_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_faq_form_label_color).';';
		}
		if($vw_stock_images_pro_faq_form_label_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_faq_form_label_font_family).';';
		}
		if($vw_stock_images_pro_faq_form_label_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_faq_form_label_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_faq_btn_color = get_theme_mod('vw_stock_images_pro_faq_btn_color');
$vw_stock_images_pro_faq_btn_font_size = get_theme_mod('vw_stock_images_pro_faq_btn_font_size');
$vw_stock_images_pro_faq_btn_font_family = get_theme_mod('vw_stock_images_pro_faq_btn_font_family');
$vw_stock_images_pro_faq_btn_bg_color = get_theme_mod('vw_stock_images_pro_faq_btn_bg_color');

if($vw_stock_images_pro_faq_btn_color != false || $vw_stock_images_pro_faq_btn_font_family != false || $vw_stock_images_pro_faq_btn_font_size != false){
	$custom_css .='#faq-sec form .theme-btn p input{';
	if($vw_stock_images_pro_faq_btn_color != false){
		$custom_css .= 'color: '.esc_html($vw_stock_images_pro_faq_btn_color).'!important;';
	}
	if($vw_stock_images_pro_faq_btn_font_family != false){
		$custom_css .= 'font-family: '.esc_html($vw_stock_images_pro_faq_btn_font_family).'!important;';
	}
	if($vw_stock_images_pro_faq_btn_font_size != false){
		$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_faq_btn_font_size).'px!important;';
	}
	$custom_css .='}';
}
if($vw_stock_images_pro_faq_btn_bg_color != false ){
	$custom_css .='#faq-sec form .theme-btn{';
	if($vw_stock_images_pro_faq_btn_bg_color != false){
		$custom_css .= 'background: '.esc_html($vw_stock_images_pro_faq_btn_bg_color).'!important;';
	}
	$custom_css .='}';
}


$vw_stock_images_pro_faq_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_faq_btn_hover_bg_color');

if($vw_stock_images_pro_faq_btn_hover_bg_color != false ){
	$custom_css .='#faq-sec form .theme-btn:hover{';
	if($vw_stock_images_pro_faq_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_faq_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_faq_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}
/*-------------------------------Newsletter Section Start-------------------------*/


$vw_stock_images_pro_our_newsletter_bg_color_one = get_theme_mod('vw_stock_images_pro_our_newsletter_bg_color_one');
if($vw_stock_images_pro_our_newsletter_bg_color_one != false){
	$custom_css .='.news-content-main::after{';
		if($vw_stock_images_pro_our_newsletter_bg_color_one != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_newsletter_bg_color_one).';';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_our_newsletter_bg_color_two = get_theme_mod('vw_stock_images_pro_our_newsletter_bg_color_two');
if($vw_stock_images_pro_our_newsletter_bg_color_two != false){
	$custom_css .='.appoinment-content-main::after{';
		if($vw_stock_images_pro_our_newsletter_bg_color_two != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_newsletter_bg_color_two).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_newsletter_heading_color = get_theme_mod('vw_stock_images_pro_newsletter_heading_color');
$vw_stock_images_pro_newsletter_heading_font_family = get_theme_mod('vw_stock_images_pro_newsletter_heading_font_family');
$vw_stock_images_pro_newsletter_heading_font_size = get_theme_mod('vw_stock_images_pro_newsletter_heading_font_size');
if($vw_stock_images_pro_newsletter_heading_color != false || $vw_stock_images_pro_newsletter_heading_font_family != false || $vw_stock_images_pro_newsletter_heading_font_size != false){
	$custom_css .='.newsletter-content h2{';
		if($vw_stock_images_pro_newsletter_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_newsletter_heading_color).';';
		}
		if($vw_stock_images_pro_newsletter_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_newsletter_heading_font_family).';';
		}
		if($vw_stock_images_pro_newsletter_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_newsletter_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_newsletter_paragraph_color = get_theme_mod('vw_stock_images_pro_newsletter_paragraph_color');
$vw_stock_images_pro_newsletter_paragraph_font_family = get_theme_mod('vw_stock_images_pro_newsletter_paragraph_font_family');
$vw_stock_images_pro_newsletter_paragraph_font_size = get_theme_mod('vw_stock_images_pro_newsletter_paragraph_font_size');
if($vw_stock_images_pro_newsletter_paragraph_color != false || $vw_stock_images_pro_newsletter_paragraph_font_family != false || $vw_stock_images_pro_newsletter_paragraph_font_size != false){
	$custom_css .='.newsletter-content .theme-para{';
		if($vw_stock_images_pro_newsletter_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_newsletter_paragraph_color).';';
		}
		if($vw_stock_images_pro_newsletter_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_newsletter_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_newsletter_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_newsletter_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
// $vw_stock_images_pro_our_newsletter_form_bg_two = get_theme_mod('vw_stock_images_pro_our_newsletter_form_bg_two');
// if($vw_stock_images_pro_our_newsletter_form_bg_two != false){
// 	$custom_css .='.news-form-main input[type="email"]{';
// 		if($vw_stock_images_pro_our_newsletter_form_bg_two != false){
// 			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_newsletter_form_bg_two).';';
// 		}
// 	$custom_css .='}';
// }


$vw_stock_images_pro_our_newsletter_form_btn_color = get_theme_mod('vw_stock_images_pro_our_newsletter_form_btn_color');
$vw_stock_images_pro_our_newsletter_form_btn_font_size = get_theme_mod('vw_stock_images_pro_our_newsletter_form_btn_font_size');
$vw_stock_images_pro_our_newsletter_form_btn_font_family = get_theme_mod('vw_stock_images_pro_our_newsletter_form_btn_font_family');
$vw_stock_images_pro_our_newsletter_form_btn_bg_color = get_theme_mod('vw_stock_images_pro_our_newsletter_form_btn_bg_color');

if($vw_stock_images_pro_our_newsletter_form_btn_color != false || $vw_stock_images_pro_our_newsletter_form_btn_font_family != false || $vw_stock_images_pro_our_newsletter_form_btn_font_size != false){
	$custom_css .='.news-form-main .theme-btn p input{';
	if($vw_stock_images_pro_our_newsletter_form_btn_color != false){
		$custom_css .= 'color: '.esc_html($vw_stock_images_pro_our_newsletter_form_btn_color).'!important;';
	}
	if($vw_stock_images_pro_our_newsletter_form_btn_font_family != false){
		$custom_css .= 'font-family: '.esc_html($vw_stock_images_pro_our_newsletter_form_btn_font_family).'!important;';
	}
	if($vw_stock_images_pro_our_newsletter_form_btn_font_size != false){
		$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_our_newsletter_form_btn_font_size).'px!important;';
	}
	$custom_css .='}';
}
if($vw_stock_images_pro_our_newsletter_form_btn_bg_color != false ){
	$custom_css .='.news-form-main .theme-btn{';
	if($vw_stock_images_pro_our_newsletter_form_btn_bg_color != false){
		$custom_css .= 'background: '.esc_html($vw_stock_images_pro_our_newsletter_form_btn_bg_color).'!important;';
	}
	$custom_css .='}';
}


$vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color');

if($vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color != false ){
	$custom_css .='.news-form-main .theme-btn:hover{';
	if($vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_our_newsletter_form_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_appoinment_heading_color = get_theme_mod('vw_stock_images_pro_appoinment_heading_color');
$vw_stock_images_pro_appoinment_heading_font_family = get_theme_mod('vw_stock_images_pro_appoinment_heading_font_family');
$vw_stock_images_pro_appoinment_heading_font_size = get_theme_mod('vw_stock_images_pro_appoinment_heading_font_size');
if($vw_stock_images_pro_appoinment_heading_color != false || $vw_stock_images_pro_appoinment_heading_font_family != false || $vw_stock_images_pro_appoinment_heading_font_size != false){
	$custom_css .='.appoinment-content-main  .main-head{';
		if($vw_stock_images_pro_appoinment_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_appoinment_heading_color).';';
		}
		if($vw_stock_images_pro_appoinment_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_appoinment_heading_font_family).';';
		}
		if($vw_stock_images_pro_appoinment_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_appoinment_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_appoinment_para_color = get_theme_mod('vw_stock_images_pro_appoinment_para_color');
$vw_stock_images_pro_appoinment_para_font_family = get_theme_mod('vw_stock_images_pro_appoinment_para_font_family');
$vw_stock_images_pro_appoinment_para_font_size = get_theme_mod('vw_stock_images_pro_appoinment_para_font_size');
if($vw_stock_images_pro_appoinment_para_color != false || $vw_stock_images_pro_appoinment_para_font_family != false || $vw_stock_images_pro_appoinment_para_font_size != false){
	$custom_css .='.appoinment-content-main .theme-para{';
		if($vw_stock_images_pro_appoinment_para_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_appoinment_para_color).';';
		}
		if($vw_stock_images_pro_appoinment_para_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_appoinment_para_font_family).';';
		}
		if($vw_stock_images_pro_appoinment_para_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_appoinment_para_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_our_appoinment_form_btn_color = get_theme_mod('vw_stock_images_pro_our_appoinment_form_btn_color');
$vw_stock_images_pro_our_appoinment_form_btn_font_family = get_theme_mod('vw_stock_images_pro_our_appoinment_form_btn_font_family');
$vw_stock_images_pro_our_appoinment_form_btn_font_size = get_theme_mod('vw_stock_images_pro_our_appoinment_form_btn_font_size');
$vw_stock_images_pro_our_appoinment_form_btn_bg_color = get_theme_mod('vw_stock_images_pro_our_appoinment_form_btn_bg_color');
if($vw_stock_images_pro_our_appoinment_form_btn_color != false || $vw_stock_images_pro_our_appoinment_form_btn_font_family != false || $vw_stock_images_pro_our_appoinment_form_btn_font_size != false || $vw_stock_images_pro_our_appoinment_form_btn_bg_color != false ){
	$custom_css .='.appoinment-content-main .theme-btn{';
		if($vw_stock_images_pro_our_appoinment_form_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_our_appoinment_form_btn_color).';';
		}
		if($vw_stock_images_pro_our_appoinment_form_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_our_appoinment_form_btn_font_family).';';
		}
		if($vw_stock_images_pro_our_appoinment_form_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_our_appoinment_form_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_our_appoinment_form_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_appoinment_form_btn_bg_color).';';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color');
if($vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color != false ){
	$custom_css .='.appoinment-content-main .theme-btn:hover{';
	if($vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_our_appoinment_form_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}
$vw_stock_images_pro_our_newsletter_man_image_bg_color = get_theme_mod('vw_stock_images_pro_our_newsletter_man_image_bg_color');
if($vw_stock_images_pro_our_newsletter_man_image_bg_color != false){
	$custom_css .='.news-img::after{';
		if($vw_stock_images_pro_our_newsletter_man_image_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_newsletter_man_image_bg_color).';';
		}
	$custom_css .='}';
}

/*-------------------------------our Client Section Start-------------------------*/
$vw_stock_images_pro_our_client_heading_color = get_theme_mod('vw_stock_images_pro_our_client_heading_color');
$vw_stock_images_pro_our_client_heading_font_family = get_theme_mod('vw_stock_images_pro_our_client_heading_font_family');
$vw_stock_images_pro_our_client_heading_font_size = get_theme_mod('vw_stock_images_pro_our_client_heading_font_size');
if($vw_stock_images_pro_our_client_heading_color != false || $vw_stock_images_pro_our_client_heading_font_family != false || $vw_stock_images_pro_our_client_heading_font_size != false){
	$custom_css .='#our-client .main-head {';
		if($vw_stock_images_pro_our_client_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_our_client_heading_color).';';
		}
		if($vw_stock_images_pro_our_client_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_our_client_heading_font_family).';';
		}
		if($vw_stock_images_pro_our_client_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_our_client_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_our_client_paragraph_color = get_theme_mod('vw_stock_images_pro_our_client_paragraph_color');
$vw_stock_images_pro_our_client_paragraph_font_family = get_theme_mod('vw_stock_images_pro_our_client_paragraph_font_family');
$vw_stock_images_pro_our_client_paragraph_font_size = get_theme_mod('vw_stock_images_pro_our_client_paragraph_font_size');
if($vw_stock_images_pro_our_client_paragraph_color != false || $vw_stock_images_pro_our_client_paragraph_font_family != false || $vw_stock_images_pro_our_client_paragraph_font_size != false){
	$custom_css .='#our-client .theme-para {';
		if($vw_stock_images_pro_our_client_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_our_client_paragraph_color).';';
		}
		if($vw_stock_images_pro_our_client_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_our_client_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_our_client_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_our_client_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_our_client_review_content_color = get_theme_mod('vw_stock_images_pro_our_client_review_content_color');
$vw_stock_images_pro_our_client_review_content_font_family = get_theme_mod('vw_stock_images_pro_our_client_review_content_font_family');
$vw_stock_images_pro_our_client_review_content_font_size = get_theme_mod('vw_stock_images_pro_our_client_review_content_font_size');
if($vw_stock_images_pro_our_client_review_content_color != false || $vw_stock_images_pro_our_client_review_content_font_family != false || $vw_stock_images_pro_our_client_review_content_font_size != false){
	$custom_css .='#our-client .test-content {';
		if($vw_stock_images_pro_our_client_review_content_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_our_client_review_content_color).';';
		}
		if($vw_stock_images_pro_our_client_review_content_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_our_client_review_content_font_family).';';
		}
		if($vw_stock_images_pro_our_client_review_content_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_our_client_review_content_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_our_client_name_color = get_theme_mod('vw_stock_images_pro_our_client_name_color');
$vw_stock_images_pro_our_client_name_font_family = get_theme_mod('vw_stock_images_pro_our_client_name_font_family');
$vw_stock_images_pro_our_client_name_font_size = get_theme_mod('vw_stock_images_pro_our_client_name_font_size');
if($vw_stock_images_pro_our_client_name_color != false || $vw_stock_images_pro_our_client_name_font_family != false || $vw_stock_images_pro_our_client_name_font_size != false){
	$custom_css .='#our-client .testi-title a{';
		if($vw_stock_images_pro_our_client_name_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_our_client_name_color).';';
		}
		if($vw_stock_images_pro_our_client_name_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_our_client_name_font_family).';';
		}
		if($vw_stock_images_pro_our_client_name_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_our_client_name_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_our_client_desig_color = get_theme_mod('vw_stock_images_pro_our_client_desig_color');
$vw_stock_images_pro_our_client_desig_font_family = get_theme_mod('vw_stock_images_pro_our_client_desig_font_family');
$vw_stock_images_pro_our_client_desig_font_size = get_theme_mod('vw_stock_images_pro_our_client_desig_font_size');
if($vw_stock_images_pro_our_client_desig_color != false || $vw_stock_images_pro_our_client_desig_font_family != false || $vw_stock_images_pro_our_client_desig_font_size != false){
	$custom_css .='#our-client .testi-desi {';
		if($vw_stock_images_pro_our_client_desig_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_our_client_desig_color).';';
		}
		if($vw_stock_images_pro_our_client_desig_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_our_client_desig_font_family).';';
		}
		if($vw_stock_images_pro_our_client_desig_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_our_client_desig_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_our_client_quote_img_color = get_theme_mod('vw_stock_images_pro_our_client_quote_img_color');
	if($vw_stock_images_pro_our_client_quote_img_color != false ){
	$custom_css .='#quote-img  path{';
		if($vw_stock_images_pro_our_client_quote_img_color != false){
			$custom_css .='fill: '.esc_html($vw_stock_images_pro_our_client_quote_img_color).' !important;';
		}
	$custom_css .='}';
	}
$vw_stock_images_pro_our_client_quote_bg_color = get_theme_mod('vw_stock_images_pro_our_client_quote_bg_color');
$vw_stock_images_pro_our_client_quote_border_color = get_theme_mod('vw_stock_images_pro_our_client_quote_border_color');

if($vw_stock_images_pro_our_client_quote_bg_color != false || $vw_stock_images_pro_our_client_quote_border_color != false){
	$custom_css .='.client-img-quote{';
		if($vw_stock_images_pro_our_client_quote_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_client_quote_bg_color).';';
		}
		if($vw_stock_images_pro_our_client_quote_border_color != false){
			$custom_css .='border-color: '.esc_html($vw_stock_images_pro_our_client_quote_border_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_our_client_owl_dots_color = get_theme_mod('vw_stock_images_pro_our_client_owl_dots_color');

if($vw_stock_images_pro_our_client_owl_dots_color != false){
	$custom_css .='#our-client .slick-dots li button{';
		if($vw_stock_images_pro_our_client_owl_dots_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_our_client_owl_dots_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_our_client_owl_dots_active_color = get_theme_mod('vw_stock_images_pro_our_client_owl_dots_active_color');
if($vw_stock_images_pro_our_client_owl_dots_active_color != false ){
	$custom_css .='#our-client .slick-active button{';
	if($vw_stock_images_pro_our_client_owl_dots_active_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_our_client_owl_dots_active_color).' !important;';
	}
	$custom_css .='}';
}


/*-------------------------------Professional Team Start-------------------------*/



$vw_stock_images_pro_team_heading_color = get_theme_mod('vw_stock_images_pro_team_heading_color');
$vw_stock_images_pro_team_heading_font_family = get_theme_mod('vw_stock_images_pro_team_heading_font_family');
$vw_stock_images_pro_team_heading_font_size = get_theme_mod('vw_stock_images_pro_team_heading_font_size');
if($vw_stock_images_pro_team_heading_color != false || $vw_stock_images_pro_team_heading_font_family != false || $vw_stock_images_pro_team_heading_font_size != false){
	$custom_css .='#professionals-team .main-head{';
		if($vw_stock_images_pro_team_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_team_heading_color).';';
		}
		if($vw_stock_images_pro_team_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_team_heading_font_family).';';
		}
		if($vw_stock_images_pro_team_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_team_heading_font_size).'px;';
		}
	$custom_css .='}';
}
	$vw_stock_images_pro_team_paragraph_color = get_theme_mod('vw_stock_images_pro_team_paragraph_color');
	$vw_stock_images_pro_team_paragraph_font_family = get_theme_mod('vw_stock_images_pro_team_paragraph_font_family');
	$vw_stock_images_pro_team_paragraph_font_size = get_theme_mod('vw_stock_images_pro_team_paragraph_font_size');
	if($vw_stock_images_pro_team_paragraph_color != false || $vw_stock_images_pro_team_paragraph_font_family != false || $vw_stock_images_pro_team_paragraph_font_size != false){
		$custom_css .='#professionals-team .theme-para{';
			if($vw_stock_images_pro_team_paragraph_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_team_paragraph_color).';';
			}
			if($vw_stock_images_pro_team_paragraph_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_team_paragraph_font_family).';';
			}
			if($vw_stock_images_pro_team_paragraph_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_team_paragraph_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_team_card_background_color = get_theme_mod('vw_stock_images_pro_team_card_background_color');
	$vw_stock_images_pro_team_card_border_color = get_theme_mod('vw_stock_images_pro_team_card_border_color');

	if($vw_stock_images_pro_team_card_background_color != false || $vw_stock_images_pro_team_card_border_color != false){
		$custom_css .='#professionals-team .team-inner-content{';
			if($vw_stock_images_pro_team_card_background_color != false){
				$custom_css .='background: '.esc_html($vw_stock_images_pro_team_card_background_color).';';
			}
			if($vw_stock_images_pro_team_card_border_color != false){
				$custom_css .='border-color: '.esc_html($vw_stock_images_pro_team_card_border_color).';';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_team_card_hover_bg_color = get_theme_mod('vw_stock_images_pro_team_card_hover_bg_color');
	if($vw_stock_images_pro_team_card_hover_bg_color != false || $vw_stock_images_pro_team_card_border_color != false){
		$custom_css .='#professionals-team .team-inner-content:hover{';
			if($vw_stock_images_pro_team_card_hover_bg_color != false){
				$custom_css .='background: '.esc_html($vw_stock_images_pro_team_card_hover_bg_color).';';
			}
		$custom_css .='}';
	}



	$vw_stock_images_pro_team_name_color = get_theme_mod('vw_stock_images_pro_team_name_color');
	$vw_stock_images_pro_team_name_font_family = get_theme_mod('vw_stock_images_pro_team_name_font_family');
	$vw_stock_images_pro_team_name_font_size = get_theme_mod('vw_stock_images_pro_team_name_font_size');
	if($vw_stock_images_pro_team_name_color != false || $vw_stock_images_pro_team_name_font_family != false || $vw_stock_images_pro_team_name_font_size != false){
		$custom_css .='#professionals-team .service-title h4{';
			if($vw_stock_images_pro_team_name_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_team_name_color).';';
			}
			if($vw_stock_images_pro_team_name_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_team_name_font_family).';';
			}
			if($vw_stock_images_pro_team_name_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_team_name_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_team_desig_color = get_theme_mod('vw_stock_images_pro_team_desig_color');
	$vw_stock_images_pro_team_desig_font_family = get_theme_mod('vw_stock_images_pro_team_desig_font_family');
	$vw_stock_images_pro_team_desig_font_size = get_theme_mod('vw_stock_images_pro_team_desig_font_size');
	if($vw_stock_images_pro_team_desig_color != false || $vw_stock_images_pro_team_desig_font_family != false || $vw_stock_images_pro_team_desig_font_size != false){
		$custom_css .='#professionals-team .team-desig{';
			if($vw_stock_images_pro_team_desig_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_team_desig_color).';';
			}
			if($vw_stock_images_pro_team_desig_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_team_desig_font_family).';';
			}
			if($vw_stock_images_pro_team_desig_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_team_desig_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_team_social_icon_color = get_theme_mod('vw_stock_images_pro_team_social_icon_color');
	$vw_stock_images_pro_team_social_icon_bg_color = get_theme_mod('vw_stock_images_pro_team_social_icon_bg_color');
	if($vw_stock_images_pro_team_social_icon_color != false ||  $vw_stock_images_pro_team_social_icon_bg_color != false){
		$custom_css .='#professionals-team .team-social-icon-box i{';
			if($vw_stock_images_pro_team_social_icon_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_team_social_icon_color).';';
			}
			if($vw_stock_images_pro_team_social_icon_bg_color != false){
				$custom_css .='background:'.esc_html($vw_stock_images_pro_team_social_icon_bg_color).';';
			}
		$custom_css .='}';
	}
	$vw_stock_images_pro_team_social_icon_hover_color = get_theme_mod('vw_stock_images_pro_team_social_icon_hover_color');
	$vw_stock_images_pro_team_social_icon_hover_bg_color = get_theme_mod('vw_stock_images_pro_team_social_icon_hover_bg_color');
	if($vw_stock_images_pro_team_social_icon_hover_color != false ||  $vw_stock_images_pro_team_social_icon_hover_bg_color != false){
		$custom_css .='#professionals-team .team-social-icon-box i:hover{';
			if($vw_stock_images_pro_team_social_icon_hover_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_team_social_icon_hover_color).';';
			}
			if($vw_stock_images_pro_team_social_icon_hover_bg_color != false){
				$custom_css .='background:'.esc_html($vw_stock_images_pro_team_social_icon_hover_bg_color).';';
			}
		$custom_css .='}';
	}





/*-------------------------------Blog Section Start-------------------------*/
$vw_stock_images_pro_latest_news_heading_color = get_theme_mod('vw_stock_images_pro_latest_news_heading_color');
$vw_stock_images_pro_latest_news_heading_font_family = get_theme_mod('vw_stock_images_pro_latest_news_heading_font_family');
$vw_stock_images_pro_latest_news_heading_font_size = get_theme_mod('vw_stock_images_pro_latest_news_heading_font_size');
if($vw_stock_images_pro_latest_news_heading_color != false || $vw_stock_images_pro_latest_news_heading_font_family != false || $vw_stock_images_pro_latest_news_heading_font_size != false){
	$custom_css .='#blog-news .main-head {';
		if($vw_stock_images_pro_latest_news_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_heading_color).';';
		}
		if($vw_stock_images_pro_latest_news_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_heading_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_heading_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_latest_news_paragraph_color = get_theme_mod('vw_stock_images_pro_latest_news_paragraph_color');
$vw_stock_images_pro_latest_news_paragraph_font_family = get_theme_mod('vw_stock_images_pro_latest_news_paragraph_font_family');
$vw_stock_images_pro_latest_news_paragraph_font_size = get_theme_mod('vw_stock_images_pro_latest_news_paragraph_font_size');
if($vw_stock_images_pro_latest_news_paragraph_color != false || $vw_stock_images_pro_latest_news_paragraph_font_family != false || $vw_stock_images_pro_latest_news_paragraph_font_size != false){
	$custom_css .='#blog-news  .theme-para{';
		if($vw_stock_images_pro_latest_news_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_paragraph_color).';';
		}
		if($vw_stock_images_pro_latest_news_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_latest_news_btn_color = get_theme_mod('vw_stock_images_pro_latest_news_btn_color');
$vw_stock_images_pro_latest_news_btn_font_family = get_theme_mod('vw_stock_images_pro_latest_news_btn_font_family');
$vw_stock_images_pro_latest_news_btn_font_size = get_theme_mod('vw_stock_images_pro_latest_news_btn_font_size');
$vw_stock_images_pro_latest_news_btn_bg_color = get_theme_mod('vw_stock_images_pro_latest_news_btn_bg_color');
if($vw_stock_images_pro_latest_news_btn_color != false || $vw_stock_images_pro_latest_news_btn_font_family != false || $vw_stock_images_pro_latest_news_btn_font_size != false || $vw_stock_images_pro_latest_news_btn_bg_color != false ){
	$custom_css .='#blog-news .theme-btn{';
		if($vw_stock_images_pro_latest_news_btn_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_btn_color).';';
		}
		if($vw_stock_images_pro_latest_news_btn_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_btn_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_btn_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_btn_font_size).'px;';
		}
		if($vw_stock_images_pro_latest_news_btn_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_latest_news_btn_bg_color).';';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_latest_news_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_latest_news_btn_hover_bg_color');
if($vw_stock_images_pro_latest_news_btn_hover_bg_color != false ){
	$custom_css .='#blog-news .theme-btn:hover{';
	if($vw_stock_images_pro_latest_news_btn_hover_bg_color != false){
		$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_latest_news_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_latest_news_btn_hover_bg_color) .'!important;';
	}
	$custom_css .='}';
}

$vw_stock_images_pro_latest_news_card_title_color = get_theme_mod('vw_stock_images_pro_latest_news_card_title_color');
$vw_stock_images_pro_latest_news_card_title_font_family = get_theme_mod('vw_stock_images_pro_latest_news_card_title_font_family');
$vw_stock_images_pro_latest_news_card_title_font_size = get_theme_mod('vw_stock_images_pro_latest_news_card_title_font_size');
if($vw_stock_images_pro_latest_news_card_title_color != false || $vw_stock_images_pro_latest_news_card_title_font_family != false || $vw_stock_images_pro_latest_news_card_title_font_size != false){
	$custom_css .='.blog-title a{';
		if($vw_stock_images_pro_latest_news_card_title_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_card_title_color).';';
		}
		if($vw_stock_images_pro_latest_news_card_title_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_card_title_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_card_title_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_card_title_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_latest_news_card_para_color = get_theme_mod('vw_stock_images_pro_latest_news_card_para_color');
$vw_stock_images_pro_latest_news_card_para_font_family = get_theme_mod('vw_stock_images_pro_latest_news_card_para_font_family');
$vw_stock_images_pro_latest_news_card_para_font_size = get_theme_mod('vw_stock_images_pro_latest_news_card_para_font_size');
if($vw_stock_images_pro_latest_news_card_para_color != false || $vw_stock_images_pro_latest_news_card_para_font_family != false || $vw_stock_images_pro_latest_news_card_para_font_size != false){
	$custom_css .='#blog-news .blog-content{';
		if($vw_stock_images_pro_latest_news_card_para_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_card_para_color).';';
		}
		if($vw_stock_images_pro_latest_news_card_para_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_card_para_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_card_para_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_card_para_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_latest_news_card_meta_color = get_theme_mod('vw_stock_images_pro_latest_news_card_meta_color');
$vw_stock_images_pro_latest_news_card_meta_font_family = get_theme_mod('vw_stock_images_pro_latest_news_card_meta_font_family');
$vw_stock_images_pro_latest_news_card_meta_font_size = get_theme_mod('vw_stock_images_pro_latest_news_card_meta_font_size');
if($vw_stock_images_pro_latest_news_card_meta_color != false || $vw_stock_images_pro_latest_news_card_meta_font_family != false || $vw_stock_images_pro_latest_news_card_meta_font_size != false){
	$custom_css .='.blog-admin p, .post-month{';
		if($vw_stock_images_pro_latest_news_card_meta_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_card_meta_color).';';
		}
		if($vw_stock_images_pro_latest_news_card_meta_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_card_meta_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_card_meta_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_card_meta_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_latest_news_card_meta_border_color = get_theme_mod('vw_stock_images_pro_latest_news_card_meta_border_color');
if($vw_stock_images_pro_latest_news_card_meta_border_color != false ){
$custom_css .='.blog-admin::after{';
	if($vw_stock_images_pro_latest_news_card_meta_border_color != false){
		$custom_css .='border-color: '.esc_html($vw_stock_images_pro_latest_news_card_meta_border_color).';';
	}
$custom_css .='}';
}


$vw_stock_images_pro_latest_news_card_category_color = get_theme_mod('vw_stock_images_pro_latest_news_card_category_color');
$vw_stock_images_pro_latest_news_card_category_bg_color = get_theme_mod('vw_stock_images_pro_latest_news_card_category_bg_color');
$vw_stock_images_pro_latest_news_card_category_font_family = get_theme_mod('vw_stock_images_pro_latest_news_card_category_font_family');
$vw_stock_images_pro_latest_news_card_category_font_size = get_theme_mod('vw_stock_images_pro_latest_news_card_category_font_size');
if($vw_stock_images_pro_latest_news_card_category_color != false || $vw_stock_images_pro_latest_news_card_category_bg_color || $vw_stock_images_pro_latest_news_card_category_font_family != false || $vw_stock_images_pro_latest_news_card_category_font_size != false){
	$custom_css .='.blog-category a{';
		if($vw_stock_images_pro_latest_news_card_category_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_latest_news_card_category_color).';';
		}
		if($vw_stock_images_pro_latest_news_card_category_bg_color != false){
			$custom_css .='background: '.esc_html($vw_stock_images_pro_latest_news_card_category_bg_color).';';
		}
		if($vw_stock_images_pro_latest_news_card_category_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_latest_news_card_category_font_family).';';
		}
		if($vw_stock_images_pro_latest_news_card_category_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_latest_news_card_category_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_latest_news_card_background_color = get_theme_mod('vw_stock_images_pro_latest_news_card_background_color');
if($vw_stock_images_pro_latest_news_card_background_color != false ){
$custom_css .='.blog-detail{';
	if($vw_stock_images_pro_latest_news_card_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_latest_news_card_background_color).';';
	}
$custom_css .='}';
}
$vw_stock_images_pro_latest_news_card_hover_background_color = get_theme_mod('vw_stock_images_pro_latest_news_card_hover_background_color');
if($vw_stock_images_pro_latest_news_card_hover_background_color != false ){
$custom_css .='.blog-detail:hover{';
	if($vw_stock_images_pro_latest_news_card_hover_background_color != false){
		$custom_css .='background: '.esc_html($vw_stock_images_pro_latest_news_card_hover_background_color).';';
	}
$custom_css .='}';
}

/*-------------------------------Gallery Section End-------------------------*/
$vw_stock_images_pro_gallery_heading_color = get_theme_mod('vw_stock_images_pro_gallery_heading_color');
$vw_stock_images_pro_gallery_heading_font_family = get_theme_mod('vw_stock_images_pro_gallery_heading_font_family');
$vw_stock_images_pro_gallery_heading_font_size = get_theme_mod('vw_stock_images_pro_gallery_heading_font_size');
if($vw_stock_images_pro_gallery_heading_color != false || $vw_stock_images_pro_gallery_heading_font_family != false || $vw_stock_images_pro_gallery_heading_font_size != false){
	$custom_css .='#gallery .main-head{';
		if($vw_stock_images_pro_gallery_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_gallery_heading_color).';';
		}
		if($vw_stock_images_pro_gallery_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_gallery_heading_font_family).';';
		}
		if($vw_stock_images_pro_gallery_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_gallery_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_gallery_paragraph_color = get_theme_mod('vw_stock_images_pro_gallery_paragraph_color');
$vw_stock_images_pro_gallery_paragraph_font_family = get_theme_mod('vw_stock_images_pro_gallery_paragraph_font_family');
$vw_stock_images_pro_gallery_paragraph_font_size = get_theme_mod('vw_stock_images_pro_gallery_paragraph_font_size');
if($vw_stock_images_pro_gallery_paragraph_color != false || $vw_stock_images_pro_gallery_paragraph_font_family != false || $vw_stock_images_pro_gallery_paragraph_font_size != false){
	$custom_css .='#gallery .theme-para{';
		if($vw_stock_images_pro_gallery_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_gallery_paragraph_color).';';
		}
		if($vw_stock_images_pro_gallery_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_gallery_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_gallery_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_gallery_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_gallery_hover_button_color = get_theme_mod('vw_stock_images_pro_gallery_hover_button_color');
$vw_stock_images_pro_gallery_hover_button_background_color = get_theme_mod('vw_stock_images_pro_gallery_hover_button_background_color');
if($vw_stock_images_pro_gallery_hover_button_color != false || $vw_stock_images_pro_gallery_hover_button_background_color != false){
	$custom_css .='#gallery i.gallery-icon{';
		if($vw_stock_images_pro_gallery_hover_button_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_gallery_hover_button_color).';';
		}
		if($vw_stock_images_pro_gallery_hover_button_background_color != false){
			$custom_css .='background-color:'.esc_html($vw_stock_images_pro_gallery_hover_button_background_color).'px;';
		}
	$custom_css .='}';
}

// $vw_stock_images_pro_gallery_hover_background_color = get_theme_mod('vw_stock_images_pro_gallery_hover_background_color');
// if($vw_stock_images_pro_gallery_hover_background_color != false){
// 	$custom_css .='#gallery i.gallery-icon{';
// 		if($vw_stock_images_pro_gallery_hover_background_color != false){
// 			$custom_css .='background-color:'.esc_html($vw_stock_images_pro_gallery_hover_background_color).'px;';
// 		}
// 	$custom_css .='}';
// }

/*-------------------------------Partners-------------------------*/
$vw_stock_images_pro_partners_heading_color = get_theme_mod('vw_stock_images_pro_partners_heading_color');
$vw_stock_images_pro_partners_heading_font_family = get_theme_mod('vw_stock_images_pro_partners_heading_font_family');
$vw_stock_images_pro_partners_heading_font_size = get_theme_mod('vw_stock_images_pro_partners_heading_font_size');
if($vw_stock_images_pro_partners_heading_color != false || $vw_stock_images_pro_partners_heading_font_family != false || $vw_stock_images_pro_partners_heading_font_size != false){
	$custom_css .='#partner .main-head {';
		if($vw_stock_images_pro_partners_heading_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_partners_heading_color).';';
		}
		if($vw_stock_images_pro_partners_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_partners_heading_font_family).';';
		}
		if($vw_stock_images_pro_partners_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_partners_heading_font_size).'px;';
		}
	$custom_css .='}';
}
$vw_stock_images_pro_partners_paragraph_color = get_theme_mod('vw_stock_images_pro_partners_paragraph_color');
$vw_stock_images_pro_partners_paragraph_font_family = get_theme_mod('vw_stock_images_pro_partners_paragraph_font_family');
$vw_stock_images_pro_partners_paragraph_font_size = get_theme_mod('vw_stock_images_pro_partners_paragraph_font_size');
if($vw_stock_images_pro_partners_paragraph_color != false || $vw_stock_images_pro_partners_paragraph_font_family != false || $vw_stock_images_pro_partners_paragraph_font_size != false){
	$custom_css .='#partner .theme-para {';
		if($vw_stock_images_pro_partners_paragraph_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_partners_paragraph_color).';';
		}
		if($vw_stock_images_pro_partners_paragraph_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_partners_paragraph_font_family).';';
		}
		if($vw_stock_images_pro_partners_paragraph_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_partners_paragraph_font_size).'px;';
		}
	$custom_css .='}';
}

/*-------------------------------Blog Page -------------------------*/
$vw_stock_images_pro_blog_page_meta_color = get_theme_mod('vw_stock_images_pro_blog_page_meta_color');
$vw_stock_images_pro_blog_page_meta_font_family = get_theme_mod('vw_stock_images_pro_blog_page_meta_font_family');
$vw_stock_images_pro_blog_page_meta_font_size = get_theme_mod('vw_stock_images_pro_blog_page_meta_font_size');

if($vw_stock_images_pro_blog_page_meta_color != false || $vw_stock_images_pro_blog_page_meta_font_family != false || $vw_stock_images_pro_blog_page_meta_font_size != false){
	$custom_css .='.meta-heading, #single-post .author-name{';
		if($vw_stock_images_pro_blog_page_meta_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_blog_page_meta_color).';';
		}
		if($vw_stock_images_pro_blog_page_meta_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_blog_page_meta_font_family).';';
		}
		if($vw_stock_images_pro_blog_page_meta_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_blog_page_meta_font_size).'px;';
		}
	$custom_css .='}';
}


$vw_stock_images_pro_blog_page_content_color = get_theme_mod('vw_stock_images_pro_blog_page_content_color');
$vw_stock_images_pro_blog_page_content_font_family = get_theme_mod('vw_stock_images_pro_blog_page_content_font_family');
$vw_stock_images_pro_blog_page_content_font_size = get_theme_mod('vw_stock_images_pro_blog_page_content_font_size');

if($vw_stock_images_pro_blog_page_content_color != false ||  $vw_stock_images_pro_blog_page_content_font_family != false || $vw_stock_images_pro_blog_page_content_font_size != false){
	$custom_css .='.single-blog-content p{';
		if($vw_stock_images_pro_blog_page_content_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_blog_page_content_color).';';
		}
		if($vw_stock_images_pro_blog_page_content_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_blog_page_content_font_family).';';
		}
		if($vw_stock_images_pro_blog_page_content_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_blog_page_content_font_size).'px;';
		}
	$custom_css .='}';
}

$vw_stock_images_pro_blog_page_inner_header_color = get_theme_mod('vw_stock_images_pro_blog_page_inner_header_color');
$vw_stock_images_pro_blog_page_inner_header_font_family = get_theme_mod('vw_stock_images_pro_blog_page_inner_header_font_family');
$vw_stock_images_pro_blog_page_inner_header_font_size = get_theme_mod('vw_stock_images_pro_blog_page_inner_header_font_size');

if($vw_stock_images_pro_blog_page_inner_header_color != false || $vw_stock_images_pro_blog_page_inner_header_font_family != false || $vw_stock_images_pro_blog_page_inner_header_font_size != false){
	$custom_css .='.single-blog-content .blog-que{';
		if($vw_stock_images_pro_blog_page_inner_header_color != false){
			$custom_css .='color: '.esc_html($vw_stock_images_pro_blog_page_inner_header_color).';';
		}
		if($vw_stock_images_pro_blog_page_inner_header_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_stock_images_pro_blog_page_inner_header_font_family).';';
		}
		if($vw_stock_images_pro_blog_page_inner_header_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_stock_images_pro_blog_page_inner_header_font_size).'px;';
		}
	$custom_css .='}';
}

	/*------------------------------ Footer----------------------------------------*/

	/*------------------------------ Footer Menu----------------------------------------*/
	//Footer Menu
	$vw_stock_images_pro_footer_menu_heading_color = get_theme_mod('vw_stock_images_pro_footer_menu_heading_color');
	$vw_stock_images_pro_footer_menu_heading_font_family = get_theme_mod('vw_stock_images_pro_footer_menu_heading_font_family');
	$vw_stock_images_pro_footer_menu_heading_font_size = get_theme_mod('vw_stock_images_pro_footer_menu_heading_font_size');


	if($vw_stock_images_pro_footer_menu_heading_color != false || $vw_stock_images_pro_footer_menu_heading_font_family != false || $vw_stock_images_pro_footer_menu_heading_font_size != false){
		$custom_css .='#footer h3{';
			if($vw_stock_images_pro_footer_menu_heading_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_menu_heading_color).';';
			}
			if($vw_stock_images_pro_footer_menu_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_menu_heading_font_family).';';
			}
			if($vw_stock_images_pro_footer_menu_heading_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_menu_heading_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_footer_menu_para_color = get_theme_mod('vw_stock_images_pro_footer_menu_para_color');
	$vw_stock_images_pro_footer_menu_para_font_family = get_theme_mod('vw_stock_images_pro_footer_menu_para_font_family');
	$vw_stock_images_pro_footer_menu_para_font_size = get_theme_mod('vw_stock_images_pro_footer_menu_para_font_size');


	if($vw_stock_images_pro_footer_menu_para_color != false || $vw_stock_images_pro_footer_menu_para_font_family != false || $vw_stock_images_pro_footer_menu_para_font_size != false){
		$custom_css .='#footer #footer_box p{';
			if($vw_stock_images_pro_footer_menu_para_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_menu_para_color).';';
			}
			if($vw_stock_images_pro_footer_menu_para_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_menu_para_font_family).';';
			}
			if($vw_stock_images_pro_footer_menu_para_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_menu_para_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_footer_menu_item_color = get_theme_mod('vw_stock_images_pro_footer_menu_item_color');
	$vw_stock_images_pro_footer_menu_item_font_family = get_theme_mod('vw_stock_images_pro_footer_menu_item_font_family');
	$vw_stock_images_pro_footer_menu_item_font_size = get_theme_mod('vw_stock_images_pro_footer_menu_item_font_size');


	if($vw_stock_images_pro_footer_menu_item_color != false || $vw_stock_images_pro_footer_menu_item_font_family != false || $vw_stock_images_pro_footer_menu_item_font_size != false){
		$custom_css .='#footer .widget.widget_nav_menu ul li a{';
			if($vw_stock_images_pro_footer_menu_item_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_menu_item_color).';';
			}
			if($vw_stock_images_pro_footer_menu_item_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_menu_item_font_family).';';
			}
			if($vw_stock_images_pro_footer_menu_item_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_menu_item_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_footer_contact_heading_color = get_theme_mod('vw_stock_images_pro_footer_contact_heading_color');
	$vw_stock_images_pro_footer_contact_heading_font_family = get_theme_mod('vw_stock_images_pro_footer_contact_heading_font_family');
	$vw_stock_images_pro_footer_contact_heading_font_size = get_theme_mod('vw_stock_images_pro_footer_contact_heading_font_size');
	if($vw_stock_images_pro_footer_contact_heading_color != false || $vw_stock_images_pro_footer_contact_heading_font_family != false || $vw_stock_images_pro_footer_contact_heading_font_size != false){
		$custom_css .='#footer .about_me h6{';
			if($vw_stock_images_pro_footer_contact_heading_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_contact_heading_color).';';
			}
			if($vw_stock_images_pro_footer_contact_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_contact_heading_font_family).';';
			}
			if($vw_stock_images_pro_footer_contact_heading_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_contact_heading_font_size).'px;';
			}
		$custom_css .='}';
	}
	$vw_stock_images_pro_footer_icon_color = get_theme_mod('vw_stock_images_pro_footer_icon_color');
	$vw_stock_images_pro_footer_icon__bg_color = get_theme_mod('vw_stock_images_pro_footer_icon__bg_color');
	$vw_stock_images_pro_footer_icon_font_size = get_theme_mod('vw_stock_images_pro_footer_icon_font_size');
	if($vw_stock_images_pro_footer_icon_color != false || $vw_stock_images_pro_footer_icon__bg_color != false || $vw_stock_images_pro_footer_icon_font_size != false){
		$custom_css .='#footer .social_widget i{';
			if($vw_stock_images_pro_footer_icon_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_icon_color).';';
			}
			if($vw_stock_images_pro_footer_icon__bg_color != false){
				$custom_css .='background:'.esc_html($vw_stock_images_pro_footer_icon__bg_color).';';
			}
			if($vw_stock_images_pro_footer_icon_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_icon_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_footer_icon_hover_color = get_theme_mod('vw_stock_images_pro_footer_icon_hover_color');
	$vw_stock_images_pro_footer_icon_hover_bg_color = get_theme_mod('vw_stock_images_pro_footer_icon_hover_bg_color');
	if($vw_stock_images_pro_footer_icon_hover_color != false || $vw_stock_images_pro_footer_icon_hover_bg_color != false){
		$custom_css .='#footer .social_widget i:hover{';
			if($vw_stock_images_pro_footer_icon_hover_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_icon_hover_color).';';
			}
			if($vw_stock_images_pro_footer_icon_hover_bg_color != false){
				$custom_css .='background:'.esc_html($vw_stock_images_pro_footer_icon_hover_bg_color).';';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_footer_contact_content_color = get_theme_mod('vw_stock_images_pro_footer_contact_content_color');
	$vw_stock_images_pro_footer_contact_content_font_family = get_theme_mod('vw_stock_images_pro_footer_contact_content_font_family');
	$vw_stock_images_pro_footer_contact_content_font_size = get_theme_mod('vw_stock_images_pro_footer_contact_content_font_size');
	if($vw_stock_images_pro_footer_contact_content_color != false || $vw_stock_images_pro_footer_contact_content_font_family != false || $vw_stock_images_pro_footer_contact_content_font_size != false){
		$custom_css .='.widget_wpb_widget a{';
			if($vw_stock_images_pro_footer_contact_content_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_contact_content_color).';';
			}
			if($vw_stock_images_pro_footer_contact_content_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_contact_content_font_family).';';
			}
			if($vw_stock_images_pro_footer_contact_content_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_contact_content_font_size).'px;';
			}
		$custom_css .='}';
	}
	$vw_stock_images_pro_footer_instagram_title_color = get_theme_mod('vw_stock_images_pro_footer_instagram_title_color');
	$vw_stock_images_pro_footer_instagram_title_font_family = get_theme_mod('vw_stock_images_pro_footer_instagram_title_font_family');
	$vw_stock_images_pro_footer_instagram_title_font_size = get_theme_mod('vw_stock_images_pro_footer_instagram_title_font_size');
	if($vw_stock_images_pro_footer_instagram_title_color != false || $vw_stock_images_pro_footer_instagram_title_font_family != false || $vw_stock_images_pro_footer_instagram_title_font_size != false){
		$custom_css .='.instagram-shortcode h4{';
			if($vw_stock_images_pro_footer_instagram_title_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_footer_instagram_title_color).';';
			}
			if($vw_stock_images_pro_footer_instagram_title_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_instagram_title_font_family).';';
			}
			if($vw_stock_images_pro_footer_instagram_title_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_footer_instagram_title_font_size).'px;';
			}
		$custom_css .='}';
	}


		$vw_stock_images_pro_footer_instagram_color = get_theme_mod('vw_stock_images_pro_footer_instagram_color');
		if($vw_stock_images_pro_footer_instagram_color != false){
			$custom_css .='.instagram-shortcode{';
				if($vw_stock_images_pro_footer_instagram_color != false){
					$custom_css .='background:'.esc_html($vw_stock_images_pro_footer_instagram_color).';';
				}
			$custom_css .='}';
		}
		$vw_stock_images_pro_footer_instagram_title_color = get_theme_mod('vw_stock_images_pro_footer_instagram_title_color');
		$vw_stock_images_pro_footer_instagram_title_font_family = get_theme_mod('vw_stock_images_pro_footer_instagram_title_font_family');
		$vw_stock_images_pro_footer_instagram_title_font_size = get_theme_mod('vw_stock_images_pro_footer_instagram_title_font_size');

		if($vw_stock_images_pro_footer_instagram_title_color != false || $vw_stock_images_pro_footer_instagram_title_font_family != false || $vw_stock_images_pro_footer_instagram_title_font_size != false){

			$custom_css .='.instagram-shortcode h4{';
				if($vw_stock_images_pro_footer_instagram_title_color != false){
					$custom_css .='color:'.esc_html($vw_stock_images_pro_footer_instagram_title_color).';';
				}
				if($vw_stock_images_pro_footer_instagram_title_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_instagram_title_font_family).';';
				}
				if($vw_stock_images_pro_footer_instagram_title_font_size != false){
					$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_footer_instagram_title_font_size).'px;';
				}
			$custom_css .='}';
		}


	// ----------- Footer Contact ---------

		$vw_stock_images_pro_custom_footer_heading_color = get_theme_mod('vw_stock_images_pro_custom_footer_heading_color');
		$vw_stock_images_pro_custom_footer_heading_font_family = get_theme_mod('vw_stock_images_pro_custom_footer_heading_font_family');
		$vw_stock_images_pro_custom_footer_heading_font_size = get_theme_mod('vw_stock_images_pro_custom_footer_heading_font_size');

		if($vw_stock_images_pro_custom_footer_heading_color != false || $vw_stock_images_pro_custom_footer_heading_font_family != false || $vw_stock_images_pro_custom_footer_heading_font_size != false){

			$custom_css .='.footer-contact-detail h2{';
				if($vw_stock_images_pro_custom_footer_heading_color != false){
					$custom_css .='color:'.esc_html($vw_stock_images_pro_custom_footer_heading_color).';';
				}
				if($vw_stock_images_pro_custom_footer_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_custom_footer_heading_font_family).';';
				}
				if($vw_stock_images_pro_custom_footer_heading_font_size != false){
				  $custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_custom_footer_heading_font_size).'px;';
				}
			$custom_css .='}';
		}

		$vw_stock_images_pro_custom_footer_para_color = get_theme_mod('vw_stock_images_pro_custom_footer_para_color');
		$vw_stock_images_pro_custom_footer_para_font_family = get_theme_mod('vw_stock_images_pro_custom_footer_para_font_family');
		$vw_stock_images_pro_custom_footer_para_font_size = get_theme_mod('vw_stock_images_pro_custom_footer_para_font_size');

	if($vw_stock_images_pro_custom_footer_para_color != false || $vw_stock_images_pro_custom_footer_para_font_family != false || $vw_stock_images_pro_custom_footer_para_font_size != false){

		$custom_css .='.footer-contact p{';
			if($vw_stock_images_pro_custom_footer_para_color != false){
				$custom_css .='color:'.esc_html($vw_stock_images_pro_custom_footer_para_color).';';
			}
			if($vw_stock_images_pro_custom_footer_para_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_custom_footer_para_font_family).';';
			}
			if($vw_stock_images_pro_custom_footer_para_font_size != false){
			  $custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_custom_footer_para_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_custom_footer_icon_color = get_theme_mod('vw_stock_images_pro_custom_footer_icon_color');
	$vw_stock_images_pro_custom_footer_icon_font_size = get_theme_mod('vw_stock_images_pro_custom_footer_icon_font_size');
	if($vw_stock_images_pro_custom_footer_icon_color != false || $vw_stock_images_pro_custom_footer_icon_font_size != false){
	$custom_css .='.footer-contact-detail .wpcf7-submit{';
		if($vw_stock_images_pro_custom_footer_icon_color != false){
			$custom_css .='color:'.esc_html($vw_stock_images_pro_custom_footer_icon_color).';';
		}
		if($vw_stock_images_pro_custom_footer_icon_font_size != false){
			$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_custom_footer_icon_font_size).'px;';
		}
	$custom_css .='}';
	}



	// ----------- Copyright ---------
	$vw_stock_images_pro_footer_privacy_text_color = get_theme_mod('vw_stock_images_pro_footer_privacy_text_color');
	$vw_stock_images_pro_footer_privacy_text_font_family = get_theme_mod('vw_stock_images_pro_footer_privacy_text_font_family');
	$vw_stock_images_pro_footer_privacy_text_font_size = get_theme_mod('vw_stock_images_pro_footer_privacy_text_font_size');

	if($vw_stock_images_pro_footer_privacy_text_color != false || $vw_stock_images_pro_footer_privacy_text_font_family != false || $vw_stock_images_pro_footer_privacy_text_font_size != false){
		$custom_css .='.outer-footer .legal-text, .outer-footer .privacy-text, .outer-footer .condition-text, .copyright p{';
			if($vw_stock_images_pro_footer_privacy_text_color != false){
				$custom_css .='color:'.esc_html($vw_stock_images_pro_footer_privacy_text_color).';';
			}
			if($vw_stock_images_pro_footer_privacy_text_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_footer_privacy_text_font_family).';';
			}
			if($vw_stock_images_pro_footer_privacy_text_font_size != false){
				$custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_footer_privacy_text_font_size).'px;';
			}
		$custom_css .='}';
	}


	// ----------- Contact Page ---------
	$vw_stock_images_pro_contact_page_heading_color = get_theme_mod('vw_stock_images_pro_contact_page_heading_color');
	$vw_stock_images_pro_contact_page_heading_font_family = get_theme_mod('vw_stock_images_pro_contact_page_heading_font_family');
	$vw_stock_images_pro_contact_page_heading_font_size = get_theme_mod('vw_stock_images_pro_contact_page_heading_font_size');

	if($vw_stock_images_pro_contact_page_heading_color != false || $vw_stock_images_pro_contact_page_heading_font_family != false || $vw_stock_images_pro_contact_page_heading_font_size != false){
		$custom_css .='.contactpage-details h3{';
			if($vw_stock_images_pro_contact_page_heading_color != false){
				$custom_css .='color:'.esc_html($vw_stock_images_pro_contact_page_heading_color).';';
			}
			if($vw_stock_images_pro_contact_page_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_contact_page_heading_font_family).';';
			}
			if($vw_stock_images_pro_contact_page_heading_font_size != false){
			  $custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_contact_page_heading_font_size).'px;';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_contact_page_head_content_para_color = get_theme_mod('vw_stock_images_pro_contact_page_head_content_para_color');
	$vw_stock_images_pro_contact_page_head_content_para_font_family = get_theme_mod('vw_stock_images_pro_contact_page_head_content_para_font_family');
	$vw_stock_images_pro_contact_page_head_content_para_font_size = get_theme_mod('vw_stock_images_pro_contact_page_head_content_para_font_size');

	if($vw_stock_images_pro_contact_page_head_content_para_color != false || $vw_stock_images_pro_contact_page_head_content_para_font_family != false || $vw_stock_images_pro_contact_page_head_content_para_font_size != false){
		$custom_css .='.contactpage-details p{';
			if($vw_stock_images_pro_contact_page_head_content_para_color != false){
				$custom_css .='color:'.esc_html($vw_stock_images_pro_contact_page_head_content_para_color).';';
			}
			if($vw_stock_images_pro_contact_page_head_content_para_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_contact_page_head_content_para_font_family).';';
			}
			if($vw_stock_images_pro_contact_page_head_content_para_font_size != false){
			  $custom_css .= 'font-size: '.esc_html($vw_stock_images_pro_contact_page_head_content_para_font_size).'px;';
			}
		$custom_css .='}';
	}


	$vw_stock_images_pro_contactform_button_color = get_theme_mod('vw_stock_images_pro_contactform_button_color');
	$vw_stock_images_pro_contactform_button_font_family = get_theme_mod('vw_stock_images_pro_contactform_button_font_family');
	$vw_stock_images_pro_contactform_button_font_size = get_theme_mod('vw_stock_images_pro_contactform_button_font_size');

	if($vw_stock_images_pro_contactform_button_color != false || $vw_stock_images_pro_contactform_button_font_family != false || $vw_stock_images_pro_contactform_button_font_size != false ){
		$custom_css .='.contac_form .theme-btn p input{';
			if($vw_stock_images_pro_contactform_button_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_contactform_button_color).';';
			}
			if($vw_stock_images_pro_contactform_button_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_contactform_button_font_family).';';
			}
			if($vw_stock_images_pro_contactform_button_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_contactform_button_font_size).'px;';
			}
		$custom_css .='}';
	}


	$vw_stock_images_pro_contactform_button_bg_color = get_theme_mod('vw_stock_images_pro_contactform_button_bg_color');
	if( $vw_stock_images_pro_contactform_button_bg_color != false ){
		$custom_css .='.contac_form .theme-btn{';
			if($vw_stock_images_pro_contactform_button_bg_color != false){
				$custom_css .='background: '.esc_html($vw_stock_images_pro_contactform_button_bg_color).';';
			}
		$custom_css .='}';
	}

	$vw_stock_images_pro_contactform_button_hover_bg_color = get_theme_mod('vw_stock_images_pro_contactform_button_hover_bg_color');
	if($vw_stock_images_pro_contactform_button_hover_bg_color != false ){
		$custom_css .='.contac_form .theme-btn:hover{';
		if($vw_stock_images_pro_contactform_button_hover_bg_color != false){
			$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_contactform_button_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_contactform_button_hover_bg_color) .'!important;';
		}
		$custom_css .='}';
	}




		// 404 page
		$vw_stock_images_pro_404_page_title_color = get_theme_mod('vw_stock_images_pro_404_page_title_color');
		$vw_stock_images_pro_404_page_title_font_family = get_theme_mod('vw_stock_images_pro_404_page_title_font_family');
		$vw_stock_images_pro_404_page_title_font_size = get_theme_mod('vw_stock_images_pro_404_page_title_font_size');
			if($vw_stock_images_pro_404_page_title_font_family != false || $vw_stock_images_pro_404_page_title_color != false || $vw_stock_images_pro_404_page_title_font_size != false){
		$custom_css .='.error-page .error-heading{';
			if($vw_stock_images_pro_404_page_title_font_family != false){
					$custom_css .='font-family: '.esc_html($vw_stock_images_pro_404_page_title_font_family).';';
			}
			if($vw_stock_images_pro_404_page_title_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_404_page_title_color).';';
			}
			if($vw_stock_images_pro_404_page_title_font_size != false){
					$custom_css .='font-size: '.esc_html($vw_stock_images_pro_404_page_title_font_size).'px;';
			}
		$custom_css .='}';
	 }


	 $vw_stock_images_pro_404_page_content_color = get_theme_mod('vw_stock_images_pro_404_page_content_color');
	 $vw_stock_images_pro_404_page_content_font_family = get_theme_mod('vw_stock_images_pro_404_page_content_font_family');
	 $vw_stock_images_pro_404_page_content_font_size = get_theme_mod('vw_stock_images_pro_404_page_content_font_size');
		 if($vw_stock_images_pro_404_page_content_font_family != false || $vw_stock_images_pro_404_page_content_color != false || $vw_stock_images_pro_404_page_content_font_size != false){
	 $custom_css .='.error-page .error-para{';
		 if($vw_stock_images_pro_404_page_content_font_family != false){
				 $custom_css .='font-family: '.esc_html($vw_stock_images_pro_404_page_content_font_family).';';
		 }
		 if($vw_stock_images_pro_404_page_content_color != false){
				 $custom_css .='color: '.esc_html($vw_stock_images_pro_404_page_content_color).';';
		 }
		 if($vw_stock_images_pro_404_page_content_font_size != false){
				 $custom_css .='font-size: '.esc_html($vw_stock_images_pro_404_page_content_font_size).'px;';
		 }
	 $custom_css .='}';
	}


	$vw_stock_images_pro_404_page_button_color = get_theme_mod('vw_stock_images_pro_404_page_button_color');
	$vw_stock_images_pro_404_page_button_font_family = get_theme_mod('vw_stock_images_pro_404_page_button_font_family');
	$vw_stock_images_pro_404_page_button_font_size = get_theme_mod('vw_stock_images_pro_404_page_button_font_size');
	$vw_stock_images_pro_404_page_button_bg_color = get_theme_mod('vw_stock_images_pro_404_page_button_bg_color');

	  if($vw_stock_images_pro_404_page_button_color != false || $vw_stock_images_pro_404_page_button_font_family != false || $vw_stock_images_pro_404_page_button_font_size != false ){
	    $custom_css .='.content_page .theme-btn{';
	      if($vw_stock_images_pro_404_page_button_color != false){
	        $custom_css .='color: '.esc_html($vw_stock_images_pro_404_page_button_color).'!important;';
	      }
	      if($vw_stock_images_pro_404_page_button_font_family != false){
	        $custom_css .='font-family:'.esc_html($vw_stock_images_pro_404_page_button_font_family).';';
	      }
	      if($vw_stock_images_pro_404_page_button_font_size != false){
	        $custom_css .='font-size:'.esc_html($vw_stock_images_pro_404_page_button_font_size).'px!important;';
	      }
	      if($vw_stock_images_pro_404_page_button_bg_color != false){
	        $custom_css .='background-color:'.esc_html($vw_stock_images_pro_404_page_button_bg_color).';';
	      }
	    $custom_css .='}';
	  }

		$vw_stock_images_pro_404_page_button_bg_hover_bg_color = get_theme_mod('vw_stock_images_pro_404_page_button_bg_hover_bg_color');
		if($vw_stock_images_pro_404_page_button_bg_hover_bg_color != false ){
			$custom_css .='.content_page .theme-btn:hover{';
			if($vw_stock_images_pro_404_page_button_bg_hover_bg_color != false){
				$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_404_page_button_bg_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_404_page_button_bg_hover_bg_color) .'!important;';
			}
			$custom_css .='}';
		}

		// ------------About Page Setting-----------------

		$vw_stock_images_pro_about_section_mission_heading_color = get_theme_mod('vw_stock_images_pro_about_section_mission_heading_color');
		$vw_stock_images_pro_about_section_mission_heading_font_family = get_theme_mod('vw_stock_images_pro_about_section_mission_heading_font_family');
		$vw_stock_images_pro_about_section_mission_heading_font_size = get_theme_mod('vw_stock_images_pro_about_section_mission_heading_font_size');

			if($vw_stock_images_pro_about_section_mission_heading_color != false || $vw_stock_images_pro_about_section_mission_heading_font_family != false || $vw_stock_images_pro_about_section_mission_heading_font_size != false ){
				$custom_css .='#vission-mission h5, #our-values h5{';
					if($vw_stock_images_pro_about_section_mission_heading_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_about_section_mission_heading_color).'!important;';
					}
					if($vw_stock_images_pro_about_section_mission_heading_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_section_mission_heading_font_family).';';
					}
					if($vw_stock_images_pro_about_section_mission_heading_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_section_mission_heading_font_size).'px!important;';
					}
				$custom_css .='}';
			}

		$vw_stock_images_pro_about_section_mission_para_color = get_theme_mod('vw_stock_images_pro_about_section_mission_para_color');
		$vw_stock_images_pro_about_section_mission_para_font_family = get_theme_mod('vw_stock_images_pro_about_section_mission_para_font_family');
		$vw_stock_images_pro_about_section_mission_para_font_size = get_theme_mod('vw_stock_images_pro_about_section_mission_para_font_size');

			if($vw_stock_images_pro_about_section_mission_para_color != false || $vw_stock_images_pro_about_section_mission_para_font_family != false || $vw_stock_images_pro_about_section_mission_para_font_size != false ){
				$custom_css .='#vission-mission p, .vision-points p, #our-values p{';
					if($vw_stock_images_pro_about_section_mission_para_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_about_section_mission_para_color).'!important;';
					}
					if($vw_stock_images_pro_about_section_mission_para_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_about_section_mission_para_font_family).';';
					}
					if($vw_stock_images_pro_about_section_mission_para_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_about_section_mission_heading_font_size).'px!important;';
					}
				$custom_css .='}';
			}

			$vw_stock_images_pro_about_section_points_dot_color = get_theme_mod('vw_stock_images_pro_about_section_points_dot_color');
			if( $vw_stock_images_pro_about_section_points_dot_color != false ){
				$custom_css .='.vision-points p::after, .pests-list:before{';
					if($vw_stock_images_pro_about_section_points_dot_color != false){
						$custom_css .='background: '.esc_html($vw_stock_images_pro_about_section_points_dot_color).';';
					}
				$custom_css .='}';
			}

	// ------------Support setting------------------
	$vw_stock_images_pro_support_page_heading_color = get_theme_mod('vw_stock_images_pro_support_page_heading_color');
	$vw_stock_images_pro_support_page_heading_font_family = get_theme_mod('vw_stock_images_pro_support_page_heading_font_family');
	$vw_stock_images_pro_support_page_heading_font_size = get_theme_mod('vw_stock_images_pro_support_page_heading_font_size');

		if($vw_stock_images_pro_support_page_heading_color != false || $vw_stock_images_pro_support_page_heading_font_family != false || $vw_stock_images_pro_support_page_heading_font_size != false ){
			$custom_css .='#support-page .top-content h2{';
				if($vw_stock_images_pro_support_page_heading_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_support_page_heading_color).'!important;';
				}
				if($vw_stock_images_pro_support_page_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_support_page_heading_font_family).';';
				}
				if($vw_stock_images_pro_support_page_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_support_page_heading_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	$vw_stock_images_pro_support_page_sub_heading_color = get_theme_mod('vw_stock_images_pro_support_page_sub_heading_color');
	$vw_stock_images_pro_support_page_sub_heading_font_family = get_theme_mod('vw_stock_images_pro_support_page_sub_heading_font_family');
	$vw_stock_images_pro_support_page_sub_heading_font_size = get_theme_mod('vw_stock_images_pro_support_page_sub_heading_font_size');

		if($vw_stock_images_pro_support_page_sub_heading_color != false || $vw_stock_images_pro_support_page_sub_heading_font_family != false || $vw_stock_images_pro_support_page_sub_heading_font_size != false ){
			$custom_css .='#support-page .top-content h4{';
				if($vw_stock_images_pro_support_page_sub_heading_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_support_page_sub_heading_color).'!important;';
				}
				if($vw_stock_images_pro_support_page_sub_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_support_page_sub_heading_font_family).';';
				}
				if($vw_stock_images_pro_support_page_sub_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_support_page_sub_heading_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	$vw_stock_images_pro_support_page_para_color = get_theme_mod('vw_stock_images_pro_support_page_para_color');
	$vw_stock_images_pro_support_page_para_font_family = get_theme_mod('vw_stock_images_pro_support_page_para_font_family');
	$vw_stock_images_pro_support_page_para_font_size = get_theme_mod('vw_stock_images_pro_support_page_para_font_size');

		if($vw_stock_images_pro_support_page_para_color != false || $vw_stock_images_pro_support_page_para_font_family != false || $vw_stock_images_pro_support_page_para_font_size != false ){
			$custom_css .='#support-page li,#support-page p{';
				if($vw_stock_images_pro_support_page_para_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_support_page_para_color).'!important;';
				}
				if($vw_stock_images_pro_support_page_para_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_support_page_para_font_family).';';
				}
				if($vw_stock_images_pro_support_page_para_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_support_page_para_font_size).'px!important;';
				}
			$custom_css .='}';
		}


	// ------------Single Category Page setting------------------
	$vw_stock_images_pro_category_page_heading_color = get_theme_mod('vw_stock_images_pro_category_page_heading_color');
	$vw_stock_images_pro_category_page_heading_font_family = get_theme_mod('vw_stock_images_pro_category_page_heading_font_family');
	$vw_stock_images_pro_category_page_heading_font_size = get_theme_mod('vw_stock_images_pro_category_page_heading_font_size');

		if($vw_stock_images_pro_category_page_heading_color != false || $vw_stock_images_pro_category_page_heading_font_family != false || $vw_stock_images_pro_category_page_heading_font_size != false ){
			$custom_css .='#services-category-main .main-head {';
				if($vw_stock_images_pro_category_page_heading_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_heading_color).'!important;';
				}
				if($vw_stock_images_pro_category_page_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_heading_font_family).';';
				}
				if($vw_stock_images_pro_category_page_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_heading_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	$vw_stock_images_pro_category_page_para_color = get_theme_mod('vw_stock_images_pro_category_page_para_color');
	$vw_stock_images_pro_category_page_para_font_family = get_theme_mod('vw_stock_images_pro_category_page_para_font_family');
	$vw_stock_images_pro_category_page_para_font_size = get_theme_mod('vw_stock_images_pro_category_page_para_font_size');

		if($vw_stock_images_pro_category_page_para_color != false || $vw_stock_images_pro_category_page_para_font_family != false || $vw_stock_images_pro_category_page_para_font_size != false ){
			$custom_css .='#services-category-main .theme-para {';
				if($vw_stock_images_pro_category_page_para_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_para_color).'!important;';
				}
				if($vw_stock_images_pro_category_page_para_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_para_font_family).';';
				}
				if($vw_stock_images_pro_category_page_para_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_para_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	$vw_stock_images_pro_category_page_sub_heading_color = get_theme_mod('vw_stock_images_pro_category_page_sub_heading_color');
	$vw_stock_images_pro_category_page_sub_heading_font_family = get_theme_mod('vw_stock_images_pro_category_page_sub_heading_font_family');
	$vw_stock_images_pro_category_page_sub_heading_font_size = get_theme_mod('vw_stock_images_pro_category_page_sub_heading_font_size');

		if($vw_stock_images_pro_category_page_sub_heading_color != false || $vw_stock_images_pro_category_page_sub_heading_font_family != false || $vw_stock_images_pro_category_page_sub_heading_font_size != false ){
			$custom_css .='#services-category-main .cat-points h6 {';
				if($vw_stock_images_pro_category_page_sub_heading_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_sub_heading_color).'!important;';
				}
				if($vw_stock_images_pro_category_page_sub_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_sub_heading_font_family).';';
				}
				if($vw_stock_images_pro_category_page_sub_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_sub_heading_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	$vw_stock_images_pro_category_page_points_color = get_theme_mod('vw_stock_images_pro_category_page_points_color');
	$vw_stock_images_pro_category_page_points_font_family = get_theme_mod('vw_stock_images_pro_category_page_points_font_family');
	$vw_stock_images_pro_category_page_points_font_size = get_theme_mod('vw_stock_images_pro_category_page_points_font_size');

		if($vw_stock_images_pro_category_page_points_color != false || $vw_stock_images_pro_category_page_points_font_family != false || $vw_stock_images_pro_category_page_points_font_size != false ){
			$custom_css .='.cat-points p{';
				if($vw_stock_images_pro_category_page_points_color != false){
					$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_points_color).'!important;';
				}
				if($vw_stock_images_pro_category_page_points_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_points_font_family).';';
				}
				if($vw_stock_images_pro_category_page_points_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_points_font_size).'px!important;';
				}
			$custom_css .='}';
		}
		$vw_stock_images_pro_category_page_points_check_bg_color = get_theme_mod('vw_stock_images_pro_category_page_points_check_bg_color');
		if( $vw_stock_images_pro_category_page_points_check_bg_color != false ){
			$custom_css .='#services-category-main .check-icon, #services-cat-pills-tabContent .check-icon{';
				if($vw_stock_images_pro_category_page_points_check_bg_color != false){
					$custom_css .='background: '.esc_html($vw_stock_images_pro_category_page_points_check_bg_color).';';
				}
			$custom_css .='}';
		}

		$vw_stock_images_pro_category_page_points_color = get_theme_mod('vw_stock_images_pro_category_page_points_color');
		$vw_stock_images_pro_category_page_points_font_family = get_theme_mod('vw_stock_images_pro_category_page_points_font_family');
		$vw_stock_images_pro_category_page_points_font_size = get_theme_mod('vw_stock_images_pro_category_page_points_font_size');

			if($vw_stock_images_pro_category_page_points_color != false || $vw_stock_images_pro_category_page_points_font_family != false || $vw_stock_images_pro_category_page_points_font_size != false ){
				$custom_css .='.cat-points p{';
					if($vw_stock_images_pro_category_page_points_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_points_color).'!important;';
					}
					if($vw_stock_images_pro_category_page_points_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_points_font_family).';';
					}
					if($vw_stock_images_pro_category_page_points_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_points_font_size).'px!important;';
					}
				$custom_css .='}';
			}
		$vw_stock_images_pro_category_page_category_tab_category_color = get_theme_mod('vw_stock_images_pro_category_page_category_tab_category_color');
		$vw_stock_images_pro_category_page_category_tab_category_font_family = get_theme_mod('vw_stock_images_pro_category_page_category_tab_category_font_family');
		$vw_stock_images_pro_category_page_category_tab_category_font_size = get_theme_mod('vw_stock_images_pro_category_page_category_tab_category_font_size');

			if($vw_stock_images_pro_category_page_category_tab_category_color != false || $vw_stock_images_pro_category_page_category_tab_category_font_family != false || $vw_stock_images_pro_category_page_category_tab_category_font_size != false ){
				$custom_css .='.single-cat-post-title{';
					if($vw_stock_images_pro_category_page_category_tab_category_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_category_tab_category_color).'!important;';
					}
					if($vw_stock_images_pro_category_page_category_tab_category_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_category_tab_category_font_family).';';
					}
					if($vw_stock_images_pro_category_page_category_tab_category_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_category_tab_category_font_size).'px!important;';
					}
				$custom_css .='}';
			}
			$vw_stock_images_pro_category_page_category_tab_bg_color = get_theme_mod('vw_stock_images_pro_category_page_category_tab_bg_color');
			if( $vw_stock_images_pro_category_page_category_tab_bg_color != false ){
				$custom_css .='#services-cat-pills-tab .nav-link{';
					if($vw_stock_images_pro_category_page_category_tab_bg_color != false){
						$custom_css .='background: '.esc_html($vw_stock_images_pro_category_page_category_tab_bg_color).';';
					}
				$custom_css .='}';
			}
			$vw_stock_images_pro_category_page_category_tab_active_bg_color = get_theme_mod('vw_stock_images_pro_category_page_category_tab_active_bg_color');
			if( $vw_stock_images_pro_category_page_category_tab_active_bg_color != false ){
				$custom_css .='#services-cat-pills-tab .nav-link.active{';
					if($vw_stock_images_pro_category_page_category_tab_active_bg_color != false){
						$custom_css .='background: '.esc_html($vw_stock_images_pro_category_page_category_tab_active_bg_color).';';
					}
				$custom_css .='}';
			}

			$vw_stock_images_pro_category_page_category_name_color = get_theme_mod('vw_stock_images_pro_category_page_category_name_color');
			$vw_stock_images_pro_category_page_category_name_bg_color = get_theme_mod('vw_stock_images_pro_category_page_category_name_bg_color');
			$vw_stock_images_pro_category_page_category_name_font_family = get_theme_mod('vw_stock_images_pro_category_page_category_name_font_family');
			$vw_stock_images_pro_category_page_category_name_font_size = get_theme_mod('vw_stock_images_pro_category_page_category_name_font_size');

				if($vw_stock_images_pro_category_page_category_name_color != false || $vw_stock_images_pro_category_page_category_name_bg_color != false || $vw_stock_images_pro_category_page_category_name_font_family != false || $vw_stock_images_pro_category_page_category_name_font_size != false ){
					$custom_css .='.single-cat-title{';
						if($vw_stock_images_pro_category_page_category_name_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_category_name_color).'!important;';
						}
						if($vw_stock_images_pro_category_page_category_name_bg_color != false){
							$custom_css .='background: '.esc_html($vw_stock_images_pro_category_page_category_name_bg_color).'!important;';
						}
						if($vw_stock_images_pro_category_page_category_name_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_category_name_font_family).';';
						}
						if($vw_stock_images_pro_category_page_category_name_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_category_name_font_size).'px!important;';
						}
					$custom_css .='}';
				}

				$vw_stock_images_pro_category_page_category_main_heading_color = get_theme_mod('vw_stock_images_pro_category_page_category_main_heading_color');
				$vw_stock_images_pro_category_page_category_main_heading_font_family = get_theme_mod('vw_stock_images_pro_category_page_category_main_heading_font_family');
				$vw_stock_images_pro_category_page_category_main_heading_font_size = get_theme_mod('vw_stock_images_pro_category_page_category_main_heading_font_size');

				if($vw_stock_images_pro_category_page_category_main_heading_color != false || $vw_stock_images_pro_category_page_category_main_heading_font_family != false || $vw_stock_images_pro_category_page_category_main_heading_font_size != false ){
					$custom_css .='#services-cat-pills-tabContent .post-title{';
						if($vw_stock_images_pro_category_page_category_main_heading_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_category_main_heading_color).'!important;';
						}
						if($vw_stock_images_pro_category_page_category_main_heading_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_category_main_heading_font_family).';';
						}
						if($vw_stock_images_pro_category_page_category_main_heading_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_category_main_heading_font_size).'px!important;';
						}
					$custom_css .='}';
				}
				$vw_stock_images_pro_category_page_category_main_sub_heading_color = get_theme_mod('vw_stock_images_pro_category_page_category_main_sub_heading_color');
				$vw_stock_images_pro_category_page_category_main_sub_heading_font_family = get_theme_mod('vw_stock_images_pro_category_page_category_main_sub_heading_font_family');
				$vw_stock_images_pro_category_page_category_main_sub_heading_font_size = get_theme_mod('vw_stock_images_pro_category_page_category_main_sub_heading_font_size');

				if($vw_stock_images_pro_category_page_category_main_sub_heading_color != false || $vw_stock_images_pro_category_page_category_main_sub_heading_font_family != false || $vw_stock_images_pro_category_page_category_main_sub_heading_font_size != false ){
					$custom_css .='.post-extra-content h4{';
						if($vw_stock_images_pro_category_page_category_main_sub_heading_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_category_main_sub_heading_color).'!important;';
						}
						if($vw_stock_images_pro_category_page_category_main_sub_heading_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_category_main_sub_heading_font_family).';';
						}
						if($vw_stock_images_pro_category_page_category_main_sub_heading_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_category_main_sub_heading_font_size).'px!important;';
						}
					$custom_css .='}';
				}
				$vw_stock_images_pro_category_page_category_main_content_color = get_theme_mod('vw_stock_images_pro_category_page_category_main_content_color');
				$vw_stock_images_pro_category_page_category_main_content_font_family = get_theme_mod('vw_stock_images_pro_category_page_category_main_content_font_family');
				$vw_stock_images_pro_category_page_category_main_content_font_size = get_theme_mod('vw_stock_images_pro_category_page_category_main_content_font_size');

				if($vw_stock_images_pro_category_page_category_main_content_color != false || $vw_stock_images_pro_category_page_category_main_content_font_family != false || $vw_stock_images_pro_category_page_category_main_content_font_size != false ){
					$custom_css .='#services-cat-pills-tabContent p{';
						if($vw_stock_images_pro_category_page_category_main_content_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_category_main_content_color).'!important;';
						}
						if($vw_stock_images_pro_category_page_category_main_content_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_category_main_content_font_family).';';
						}
						if($vw_stock_images_pro_category_page_category_main_content_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_category_main_content_font_size).'px!important;';
						}
					$custom_css .='}';
				}

				$vw_stock_images_pro_category_page_category_btn_color = get_theme_mod('vw_stock_images_pro_category_page_category_btn_color');
				$vw_stock_images_pro_category_page_category_btn_font_family = get_theme_mod('vw_stock_images_pro_category_page_category_btn_font_family');
				$vw_stock_images_pro_category_page_category_btn_font_size = get_theme_mod('vw_stock_images_pro_category_page_category_btn_font_size');
				$vw_stock_images_pro_category_page_category_btn_bg_color = get_theme_mod('vw_stock_images_pro_category_page_category_btn_bg_color');
				if($vw_stock_images_pro_category_page_category_btn_color != false || $vw_stock_images_pro_category_page_category_btn_font_family != false || $vw_stock_images_pro_category_page_category_btn_font_size != false || $vw_stock_images_pro_category_page_category_btn_bg_color != false ){
					$custom_css .='#services-cat-pills-tabContent .theme-btn{';
						if($vw_stock_images_pro_category_page_category_btn_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_category_page_category_btn_color).';';
						}
						if($vw_stock_images_pro_category_page_category_btn_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_category_page_category_btn_font_family).';';
						}
						if($vw_stock_images_pro_category_page_category_btn_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_category_page_category_btn_font_size).'px;';
						}
						if($vw_stock_images_pro_category_page_category_btn_bg_color != false){
							$custom_css .='background: '.esc_html($vw_stock_images_pro_category_page_category_btn_bg_color).';';
						}
					$custom_css .='}';
				}

				$vw_stock_images_pro_category_page_category_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_category_page_category_btn_hover_bg_color');
				if($vw_stock_images_pro_category_page_category_btn_hover_bg_color != false ){
					$custom_css .='#services-cat-pills-tabContent .theme-btn:hover{';
					if($vw_stock_images_pro_category_page_category_btn_hover_bg_color != false){
						$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_category_page_category_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_category_page_category_btn_hover_bg_color) .'!important;';
					}
					$custom_css .='}';
				}


				$vw_stock_images_pro_category_page_category_section_bg_color = get_theme_mod('vw_stock_images_pro_category_page_category_section_bg_color');
				if( $vw_stock_images_pro_category_page_category_section_bg_color != false ){
					$custom_css .='#tab-services-category{';
						if($vw_stock_images_pro_category_page_category_section_bg_color != false){
							$custom_css .='background: '.esc_html($vw_stock_images_pro_category_page_category_section_bg_color).' !important;';
						}
					$custom_css .='}';
				}

				// ------------Location Page setting------------------

				$vw_stock_images_pro_location_name_color = get_theme_mod('vw_stock_images_pro_location_name_color');
				$vw_stock_images_pro_location_name_font_family = get_theme_mod('vw_stock_images_pro_location_name_font_family');
				$vw_stock_images_pro_location_name_font_size = get_theme_mod('vw_stock_images_pro_location_name_font_size');

				if($vw_stock_images_pro_location_name_color != false || $vw_stock_images_pro_location_name_font_family != false || $vw_stock_images_pro_location_name_font_size != false ){
					$custom_css .='.location-box h4{';
						if($vw_stock_images_pro_location_name_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_location_name_color).'!important;';
						}
						if($vw_stock_images_pro_location_name_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_location_name_font_family).';';
						}
						if($vw_stock_images_pro_location_name_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_location_name_font_size).'px!important;';
						}
					$custom_css .='}';
				}
				$vw_stock_images_pro_location_address_color = get_theme_mod('vw_stock_images_pro_location_address_color');
				$vw_stock_images_pro_location_address_font_family = get_theme_mod('vw_stock_images_pro_location_address_font_family');
				$vw_stock_images_pro_location_address_font_size = get_theme_mod('vw_stock_images_pro_location_address_font_size');

				if($vw_stock_images_pro_location_address_color != false || $vw_stock_images_pro_location_address_font_family != false || $vw_stock_images_pro_location_address_font_size != false ){
					$custom_css .='.location-box .location-address{';
						if($vw_stock_images_pro_location_address_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_location_address_color).'!important;';
						}
						if($vw_stock_images_pro_location_address_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_location_address_font_family).';';
						}
						if($vw_stock_images_pro_location_address_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_location_address_font_size).'px!important;';
						}
					$custom_css .='}';
				}
				$vw_stock_images_pro_location_number_color = get_theme_mod('vw_stock_images_pro_location_number_color');
				$vw_stock_images_pro_location_number_font_family = get_theme_mod('vw_stock_images_pro_location_number_font_family');
				$vw_stock_images_pro_location_number_font_size = get_theme_mod('vw_stock_images_pro_location_number_font_size');

				if($vw_stock_images_pro_location_number_color != false || $vw_stock_images_pro_location_number_font_family != false || $vw_stock_images_pro_location_number_font_size != false ){
					$custom_css .='.location-number{';
						if($vw_stock_images_pro_location_number_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_location_number_color).'!important;';
						}
						if($vw_stock_images_pro_location_number_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_location_number_font_family).';';
						}
						if($vw_stock_images_pro_location_number_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_location_number_font_size).'px!important;';
						}
					$custom_css .='}';
				}


				$vw_stock_images_pro_location_btn_color = get_theme_mod('vw_stock_images_pro_location_btn_color');
				$vw_stock_images_pro_location_btn_font_family = get_theme_mod('vw_stock_images_pro_location_btn_font_family');
				$vw_stock_images_pro_location_btn_font_size = get_theme_mod('vw_stock_images_pro_location_btn_font_size');
				$vw_stock_images_pro_location_btn_bg_color = get_theme_mod('vw_stock_images_pro_location_btn_bg_color');
				if($vw_stock_images_pro_location_btn_color != false || $vw_stock_images_pro_location_btn_font_family != false || $vw_stock_images_pro_location_btn_font_size != false || $vw_stock_images_pro_location_btn_bg_color != false ){
					$custom_css .='#find-location .theme-btn{';
						if($vw_stock_images_pro_location_btn_color != false){
							$custom_css .='color: '.esc_html($vw_stock_images_pro_location_btn_color).';';
						}
						if($vw_stock_images_pro_location_btn_font_family != false){
							$custom_css .='font-family:'.esc_html($vw_stock_images_pro_location_btn_font_family).';';
						}
						if($vw_stock_images_pro_location_btn_font_size != false){
							$custom_css .='font-size:'.esc_html($vw_stock_images_pro_location_btn_font_size).'px;';
						}
						if($vw_stock_images_pro_location_btn_bg_color != false){
							$custom_css .='background: '.esc_html($vw_stock_images_pro_location_btn_bg_color).';';
						}
					$custom_css .='}';
				}

				$vw_stock_images_pro_location_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_location_btn_hover_bg_color');
				if($vw_stock_images_pro_location_btn_hover_bg_color != false ){
					$custom_css .='#find-location .theme-btn:hover{';
					if($vw_stock_images_pro_location_btn_hover_bg_color != false){
						$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_location_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_location_btn_hover_bg_color) .'!important;';
					}
					$custom_css .='}';
				}


				$vw_stock_images_pro_location_card_bg_color = get_theme_mod('vw_stock_images_pro_location_card_bg_color');
				if($vw_stock_images_pro_location_card_bg_color != false ){
					$custom_css .='#find-location .location-box{';
						if($vw_stock_images_pro_location_card_bg_color != false){
							$custom_css .='background: '.esc_html($vw_stock_images_pro_location_card_bg_color).';';
						}
					$custom_css .='}';
				}
			// ------------Appoinment setting------------------


			$vw_stock_images_pro_appoinment_form_heading_color = get_theme_mod('vw_stock_images_pro_appoinment_form_heading_color');
			$vw_stock_images_pro_appoinment_form_heading_font_family = get_theme_mod('vw_stock_images_pro_appoinment_form_heading_font_family');
			$vw_stock_images_pro_appoinment_form_heading_font_size = get_theme_mod('vw_stock_images_pro_appoinment_form_heading_font_size');

			if($vw_stock_images_pro_appoinment_form_heading_color != false || $vw_stock_images_pro_appoinment_form_heading_font_family != false || $vw_stock_images_pro_appoinment_form_heading_font_size != false ){
				$custom_css .='.appoinment-heading{';
					if($vw_stock_images_pro_appoinment_form_heading_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_appoinment_form_heading_color).'!important;';
					}
					if($vw_stock_images_pro_appoinment_form_heading_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_appoinment_form_heading_font_family).';';
					}
					if($vw_stock_images_pro_appoinment_form_heading_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_appoinment_form_heading_font_size).'px!important;';
					}
				$custom_css .='}';
			}


			$vw_stock_images_pro_appoinment_form_btn_color = get_theme_mod('vw_stock_images_pro_appoinment_form_btn_color');
			$vw_stock_images_pro_appoinment_form_btn_font_family = get_theme_mod('vw_stock_images_pro_appoinment_form_btn_font_family');
			$vw_stock_images_pro_appoinment_form_btn_font_size = get_theme_mod('vw_stock_images_pro_appoinment_form_btn_font_size');
			$vw_stock_images_pro_appoinment_form_btn_bg_color = get_theme_mod('vw_stock_images_pro_appoinment_form_btn_bg_color');
			if($vw_stock_images_pro_appoinment_form_btn_color != false || $vw_stock_images_pro_appoinment_form_btn_font_family != false || $vw_stock_images_pro_appoinment_form_btn_font_size != false || $vw_stock_images_pro_appoinment_form_btn_bg_color != false ){
				$custom_css .='#appoinment .theme-btn input{';
					if($vw_stock_images_pro_appoinment_form_btn_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_appoinment_form_btn_color).'!important;';
					}
					if($vw_stock_images_pro_appoinment_form_btn_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_appoinment_form_btn_font_family).'!important;';
					}
					if($vw_stock_images_pro_appoinment_form_btn_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_appoinment_form_btn_font_size).'px !important;';
					}

				$custom_css .='}';
			}

			if($vw_stock_images_pro_appoinment_form_btn_bg_color != false ){
				$custom_css .='#appoinment .theme-btn{';
					if($vw_stock_images_pro_appoinment_form_btn_bg_color != false){
						$custom_css .='background: '.esc_html($vw_stock_images_pro_appoinment_form_btn_bg_color).';';
					}
				$custom_css .='}';
			}

			$vw_stock_images_pro_appoinment_form_btn_hover_bg_color = get_theme_mod('vw_stock_images_pro_appoinment_form_btn_hover_bg_color');
			if($vw_stock_images_pro_appoinment_form_btn_hover_bg_color != false ){
				$custom_css .='#appoinment .theme-btn:hover{';
				if($vw_stock_images_pro_appoinment_form_btn_hover_bg_color != false){
					$custom_css .= 'box-shadow:inset 6em 0 0 0 '.esc_html($vw_stock_images_pro_appoinment_form_btn_hover_bg_color).',inset -6em 0 0 0 ' .esc_html($vw_stock_images_pro_appoinment_form_btn_hover_bg_color) .'!important;';
				}
				$custom_css .='}';
			}



			$vw_stock_images_pro_appoinment_form_card_bg_color = get_theme_mod('vw_stock_images_pro_appoinment_form_card_bg_color');
			if($vw_stock_images_pro_appoinment_form_card_bg_color != false ){
				$custom_css .='#appoinment .appoinment-form-inner{';
					if($vw_stock_images_pro_appoinment_form_card_bg_color != false){
						$custom_css .='background: '.esc_html($vw_stock_images_pro_appoinment_form_card_bg_color).';';
					}
				$custom_css .='}';
			}

			// ------------Terms setting------------------
			$vw_stock_images_pro_terms_condition_page_heading_color = get_theme_mod('vw_stock_images_pro_terms_condition_page_heading_color');
			$vw_stock_images_pro_terms_condition_page_heading_font_family = get_theme_mod('vw_stock_images_pro_terms_condition_page_heading_font_family');
			$vw_stock_images_pro_terms_condition_page_heading_font_size = get_theme_mod('vw_stock_images_pro_terms_condition_page_heading_font_size');

			if($vw_stock_images_pro_terms_condition_page_heading_color != false || $vw_stock_images_pro_terms_condition_page_heading_font_family != false || $vw_stock_images_pro_terms_condition_page_heading_font_size != false ){
				$custom_css .='#terms-condition-main h2{';
					if($vw_stock_images_pro_terms_condition_page_heading_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_terms_condition_page_heading_color).'!important;';
					}
					if($vw_stock_images_pro_terms_condition_page_heading_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_terms_condition_page_heading_font_family).';';
					}
					if($vw_stock_images_pro_terms_condition_page_heading_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_terms_condition_page_heading_font_size).'px!important;';
					}
				$custom_css .='}';
			}
			$vw_stock_images_pro_terms_condition_page_para_color = get_theme_mod('vw_stock_images_pro_terms_condition_page_para_color');
			$vw_stock_images_pro_terms_condition_page_para_font_family = get_theme_mod('vw_stock_images_pro_terms_condition_page_para_font_family');
			$vw_stock_images_pro_terms_condition_page_para_font_size = get_theme_mod('vw_stock_images_pro_terms_condition_page_para_font_size');

			if($vw_stock_images_pro_terms_condition_page_para_color != false || $vw_stock_images_pro_terms_condition_page_para_font_family != false || $vw_stock_images_pro_terms_condition_page_para_font_size != false ){
				$custom_css .='#terms-condition-main p{';
					if($vw_stock_images_pro_terms_condition_page_para_color != false){
						$custom_css .='color: '.esc_html($vw_stock_images_pro_terms_condition_page_para_color).'!important;';
					}
					if($vw_stock_images_pro_terms_condition_page_para_font_family != false){
						$custom_css .='font-family:'.esc_html($vw_stock_images_pro_terms_condition_page_para_font_family).';';
					}
					if($vw_stock_images_pro_terms_condition_page_para_font_size != false){
						$custom_css .='font-size:'.esc_html($vw_stock_images_pro_terms_condition_page_para_font_size).'px!important;';
					}
				$custom_css .='}';
			}
	// ------------Privacy Policy  setting------------------
	$vw_stock_images_pro_privacy_policy_page_heading_color = get_theme_mod('vw_stock_images_pro_privacy_policy_page_heading_color');
	$vw_stock_images_pro_privacy_policy_page_heading_font_family = get_theme_mod('vw_stock_images_pro_privacy_policy_page_heading_font_family');
	$vw_stock_images_pro_privacy_policy_page_heading_font_size = get_theme_mod('vw_stock_images_pro_privacy_policy_page_heading_font_size');

	if($vw_stock_images_pro_privacy_policy_page_heading_color != false || $vw_stock_images_pro_privacy_policy_page_heading_font_family != false || $vw_stock_images_pro_privacy_policy_page_heading_font_size != false ){
		$custom_css .='.privacy-policy .middle-content h2{';
			if($vw_stock_images_pro_privacy_policy_page_heading_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_privacy_policy_page_heading_color).'!important;';
			}
			if($vw_stock_images_pro_privacy_policy_page_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_privacy_policy_page_heading_font_family).';';
			}
			if($vw_stock_images_pro_privacy_policy_page_heading_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_privacy_policy_page_heading_font_size).'px!important;';
			}
		$custom_css .='}';
	}
	$vw_stock_images_pro_privacy_policy_page_para_color = get_theme_mod('vw_stock_images_pro_privacy_policy_page_para_color');
	$vw_stock_images_pro_privacy_policy_page_para_font_family = get_theme_mod('vw_stock_images_pro_privacy_policy_page_para_font_family');
	$vw_stock_images_pro_privacy_policy_page_para_font_size = get_theme_mod('vw_stock_images_pro_privacy_policy_page_para_font_size');

	if($vw_stock_images_pro_privacy_policy_page_para_color != false || $vw_stock_images_pro_privacy_policy_page_para_font_family != false || $vw_stock_images_pro_privacy_policy_page_para_font_size != false ){
		$custom_css .='.privacy-policy .middle-content ul li, .privacy-policy .middle-content  p{';
			if($vw_stock_images_pro_privacy_policy_page_para_color != false){
				$custom_css .='color: '.esc_html($vw_stock_images_pro_privacy_policy_page_para_color).'!important;';
			}
			if($vw_stock_images_pro_privacy_policy_page_para_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_stock_images_pro_privacy_policy_page_para_font_family).';';
			}
			if($vw_stock_images_pro_privacy_policy_page_para_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_stock_images_pro_privacy_policy_page_para_font_size).'px!important;';
			}
		$custom_css .='}';
	}



		// ------------filter setting------------------
		$vw_stock_images_pro_filter_heading_color = get_theme_mod('vw_stock_images_pro_filter_heading_color');
		$vw_stock_images_pro_filter_heading_font_family = get_theme_mod('vw_stock_images_pro_filter_heading_font_family');
		$vw_stock_images_pro_filter_heading_font_size = get_theme_mod('vw_stock_images_pro_filter_heading_font_size');
		$vw_stock_images_pro_404_page_button_bg_color = get_theme_mod('vw_stock_images_pro_404_page_button_bg_color');
		  if($vw_stock_images_pro_filter_heading_color != false || $vw_stock_images_pro_filter_heading_font_family != false || $vw_stock_images_pro_filter_heading_font_size != false ){
		    $custom_css .='.shop-page-filters .accordion-header button{';
		      if($vw_stock_images_pro_filter_heading_color != false){
		        $custom_css .='color: '.esc_html($vw_stock_images_pro_filter_heading_color).'!important;';
		      }
		      if($vw_stock_images_pro_filter_heading_font_family != false){
		        $custom_css .='font-family:'.esc_html($vw_stock_images_pro_filter_heading_font_family).';';
		      }
		      if($vw_stock_images_pro_filter_heading_font_size != false){
		        $custom_css .='font-size:'.esc_html($vw_stock_images_pro_filter_heading_font_size).'px!important;';
		      }
		    $custom_css .='}';
		  }

		$vw_stock_images_pro_filter_inner_text_color = get_theme_mod('vw_stock_images_pro_filter_inner_text_color');
		$vw_stock_images_pro_filter_inner_text_font_family = get_theme_mod('vw_stock_images_pro_filter_inner_text_font_family');
		$vw_stock_images_pro_filter_inner_text_font_size = get_theme_mod('vw_stock_images_pro_filter_inner_text_font_size');
		$vw_stock_images_pro_404_page_button_bg_color = get_theme_mod('vw_stock_images_pro_404_page_button_bg_color');

		  if($vw_stock_images_pro_filter_inner_text_color != false || $vw_stock_images_pro_filter_inner_text_font_family != false || $vw_stock_images_pro_filter_inner_text_font_size != false ){
		    $custom_css .='.shop-page-filters span, .shop-page-filters p{';
		      if($vw_stock_images_pro_filter_inner_text_color != false){
		        $custom_css .='color: '.esc_html($vw_stock_images_pro_filter_inner_text_color).'!important;';
		      }
		      if($vw_stock_images_pro_filter_inner_text_font_family != false){
		        $custom_css .='font-family:'.esc_html($vw_stock_images_pro_filter_inner_text_font_family).';';
		      }
		      if($vw_stock_images_pro_filter_inner_text_font_size != false){
		        $custom_css .='font-size:'.esc_html($vw_stock_images_pro_filter_inner_text_font_size).'px!important;';
		      }
		    $custom_css .='}';
		  }


	/*---------------------------Blog Layout -------------------*/

		$theme_lay = get_theme_mod( 'vw_stock_images_pro_blog_layout_option','Left');
	    if($theme_lay == 'Left'){
			$custom_css .='.collectionbox-text{';
				$custom_css .='text-align:Left;';
			$custom_css .='}';
		}else if($theme_lay == 'Center'){
			$custom_css .='.collectionbox-text{';
				$custom_css .='text-align:center;';
			$custom_css .='}';
		}else if($theme_lay == 'Right'){
			$custom_css .='.collectionbox-text{';
				$custom_css .='text-align:Right;';
			$custom_css .='}';
		}

	/* ------------ Border Radius And Box Shadow --------------- */
	$vw_stock_images_pro_blog_featured_image_border_radius = get_theme_mod('vw_stock_images_pro_blog_featured_image_border_radius');
	$vw_stock_images_pro_blog_featured_image_box_shadow = get_theme_mod('vw_stock_images_pro_blog_featured_image_box_shadow');

	if($vw_stock_images_pro_blog_featured_image_border_radius != false){
		$custom_css .='.collectionbox img,.feature-box img{
			border-radius: '.esc_html($vw_stock_images_pro_blog_featured_image_border_radius).'px;
		}';
	}


	if($vw_stock_images_pro_blog_featured_image_box_shadow != false){
		    $custom_css .='.collectionbox img,.feature-box img{
		        box-shadow: 0 0 3px '.esc_html($vw_stock_images_pro_blog_featured_image_box_shadow).' #ccc !important;
		    }';
	}

	/*---------------------------Page Title Layout -------------------*/

	// --------- Scroll Top --------------

	if($vw_stock_images_pro_general_scroll_top_bgcolor != false){
		$custom_css .='#return-to-top{
			background-color: '.esc_html($vw_stock_images_pro_general_scroll_top_bgcolor).'!important;
		}';
	}
	if($vw_stock_images_pro_general_scroll_top_hover_bgcolor != false){
		$custom_css .='#return-to-top:hover{
			background-color: '.esc_html($vw_stock_images_pro_general_scroll_top_hover_bgcolor).'!important;
		}';
	}
	if($vw_stock_images_pro_general_scroll_top_icon_color != false){
		$custom_css .='#return-to-top i{
			color: '.esc_html($vw_stock_images_pro_general_scroll_top_icon_color).'!important;
		}';
	}

	$slider_layouy="";
	if(get_theme_mod('vw_stock_images_pro_scroll_top_layout')!=''){
		$slider_layouy= get_theme_mod('vw_stock_images_pro_scroll_top_layout');
	}


		if($slider_layouy=="Left"){
			$custom_css .='#return-to-top{
				left:0;
			}';
		}

		if($slider_layouy=="Right"){
			$custom_css .='#return-to-top{
				  right:0;
			}';

		}

		if($slider_layouy=="Center"){
			$custom_css .='#return-to-top{
				left: 0;
				right: 0;
				margin: auto;
				text-align: center;
			}';
		}

	/* --------- Spinner Other Settings ------------ */
	    if($vw_stock_images_pro_products_spinner_bgcolor != false){
			$custom_css .='.eco-box{
				background-color: '.esc_html($vw_stock_images_pro_products_spinner_bgcolor).' !important;
			}';
		}

		if($vw_stock_images_pro_spinner_opacity_color != ""){
		$custom_css .='.eco-box{
				opacity: '.esc_html($vw_stock_images_pro_spinner_opacity_color).'!important;
			}';
	    }

	/* ---------- Frame Setting ------------ */

	if($vw_stock_images_pro_site_frame_width != false && $vw_stock_images_pro_site_frame_type != false && $vw_stock_images_pro_site_frame_color != false){
		$custom_css .='body{
			border: '.esc_html($vw_stock_images_pro_site_frame_width).'px '.esc_html($vw_stock_images_pro_site_frame_type).' '.esc_html($vw_stock_images_pro_site_frame_color).';
		}';
	}

	/* ------------ Responsive Media Settings ----------- */

	$custom_css .='@media screen and (max-width:575px){';

		if ( get_theme_mod('vw_stock_images_pro_resp_slider_hide_show',true) != "1" ) {

			$custom_css .='#slider{
				display: none;
			}';
		}

		if ( get_theme_mod('vw_stock_images_pro_metabox_hide_show',true) != "1" ) {
			$custom_css .='#single_post .post-meta-box,.content_page .metabox{
				display: none;
			}';
		}

		if ( get_theme_mod('vw_stock_images_pro_sidebar_hide_show',true) != "1" ) {
			$custom_css .='#sidebar{
				display: none;
			}';
		}

	$custom_css .='}';


	/* ------------ Menu Padding ----------------- */

		/*---------------------------Copyright Allingment Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_stock_images_pro_footer_copy_right_align_setting','Center');
    if($theme_lay == 'Left'){
		$custom_css .='.copyright p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.copyright p{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='.copyright p{';
			$custom_css .='text-align:Right;';
		$custom_css .='}';
	}


	// ------------ Sticky Header Alignment -----------

    $sticky_alignment = get_theme_mod('vw_stock_images_pro_header_section_sticky_alingment','center');
    if($sticky_alignment=="left"){
        $custom_css .='.scrolled .innermenubox {
                float: left;
			    position: relative;
			    left: 0;
			    text-align: left;
        }';
    }
    if($sticky_alignment=="center"){
        $custom_css .='.scrolled .innermenubox {
			    // margin-left: 20%;
            	text-align: center;
            	float:left;

        }';
    }

    if($sticky_alignment=="right"){
        $custom_css .='.scrolled .innermenubox {
                float: right;
        }';
    }
    	/*--------------------------Scroll to top ----------------------*/

	if($vw_stock_images_pro_scroll_border_radius != false){
		$custom_css .='#return-to-top{
			border-radius:'.esc_html($vw_stock_images_pro_scroll_border_radius).'%;
		}';
	}
	if($vw_stock_images_pro_scroll_width != false){
		$custom_css .='#return-to-top{
			width:'.esc_html($vw_stock_images_pro_scroll_width).'px;
		}';
	}
	if($vw_stock_images_pro_scroll_height != false){
		$custom_css .='#return-to-top{
			height:'.esc_html($vw_stock_images_pro_scroll_height).'px;
		}';
	}

		/*--------------------------Sale Badge----------------------*/

	if($vw_stock_images_pro_product_padding_left != false){
		$custom_css .='.product-sale .onsale{
			padding-left:'.esc_html($vw_stock_images_pro_product_padding_left).'px;
			padding-right:'.esc_html($vw_stock_images_pro_product_padding_left).'px;
		}';
	}







?>
