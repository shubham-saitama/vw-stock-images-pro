<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');

/**
 * vw-stock-images-pro functions and definitions
 *
 * @package vw-stock-images-pro
 */

if (!function_exists('vw_stock_images_pro_setup')):
	// echo "<pre>";
// echo print_r($terms_content);
// echo "</pre>";
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function vw_stock_images_pro_setup()
	{
		$GLOBALS['content_width'] = apply_filters('vw_stock_images_pro_content_width', 640);
		if (!isset($content_width))
			$content_width = 640;
		load_theme_textdomain('vw-stock-images-pro', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support('woocommerce');
		add_theme_support('custom-header');
		add_theme_support('title-tag');
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');
		add_theme_support('wc-template-functions');

		add_theme_support('custom-logo', array(
			'height' => 48,
			'width' => 181,
			'flex-height' => true,
		));
		add_image_size('vw-stock-images-pro-homepage-thumb', 240, 145, true);
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'vw-stock-images-pro'),
			'footer1' => __('Footer Menu1', 'vw-stock-images-pro'),
			'footer2' => __('Footer Menu2', 'vw-stock-images-pro'),
		));
		add_theme_support('custom-background', array(
			'default-color' => 'f1f1f1'
		));
		add_editor_style(array('assets/css/editor-style.css'));
	}
endif;
add_action('after_setup_theme', 'vw_stock_images_pro_setup');

/* Theme Widgets Setup */
function vw_stock_images_pro_widgets_init()
{
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'vw-stock-images-pro'),
		'description' => __('Appears on blog page sidebar', 'vw-stock-images-pro'),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Page Sidebar', 'vw-stock-images-pro'),
		'description' => __('Appears on page sidebar', 'vw-stock-images-pro'),
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Footer Column 1', 'vw-stock-images-pro'),
		'description' => __('Appears on footer', 'vw-stock-images-pro'),
		'id' => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Footer Column 2', 'vw-stock-images-pro'),
		'description' => __('Appears on footer', 'vw-stock-images-pro'),
		'id' => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Footer Column 3', 'vw-stock-images-pro'),
		'description' => __('Appears on footer', 'vw-stock-images-pro'),
		'id' => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar(array(
		'name' => __('Footer Column 4', 'vw-stock-images-pro'),
		'description' => __('Appears on footer', 'vw-stock-images-pro'),
		'id' => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'vw_stock_images_pro_widgets_init');

/* Theme Font URL */
function vw_stock_images_pro_font_url()
{
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$font_family[] = 'PT Serif';
	$font_family[] = 'Work Sans';
	$query_args = array(
		'family' => urlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_stock_images_pro_scripts()
{
	wp_enqueue_style('vw-stock-images-pro-font', vw_stock_images_pro_font_url(), array());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('vw-stock-images-pro-basic-style', get_stylesheet_uri());
	wp_style_add_data('vw-stock-images-pro-style', 'rtl', 'replace');

	/* Inline style sheet */
	require get_parent_theme_file_path('/inline_style.php');
	wp_add_inline_style('vw-stock-images-pro-basic-style', $custom_css);

	if (is_rtl()) {
		wp_enqueue_style('rtl-style', get_template_directory_uri() . '/rtl-style.css', true, null, 'all');
		wp_add_inline_style('rtl-style', $custom_css);
		wp_enqueue_script('vw-stock-images-pro-customscripts-rtl', get_template_directory_uri() . '/assets/js/custom-rtl.js', array('jquery'), '', true);
	} else {
		// ---------- CSS Enqueue -----------
		if (is_front_page() || is_home()) {
			wp_enqueue_style('home-page-style', get_template_directory_uri() . '/assets/css/main-css/home-page.css', true, null, 'all');
			wp_add_inline_style('home-page-style', $custom_css);
			wp_enqueue_style('other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css', true, null, 'all');
			wp_add_inline_style('other-page-style', $custom_css);
		} else {
			wp_enqueue_style('other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css', true, null, 'all');
			wp_add_inline_style('other-page-style', $custom_css);
		}
		if ('post' == get_post_type() && is_home()) {
			wp_enqueue_style('other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css', true, null, 'all');
			wp_add_inline_style('other-page-style', $custom_css);
		}
		wp_enqueue_style('header-footer-style', get_template_directory_uri() . '/assets/css/main-css/header-footer.css', true, null, 'all');

		wp_add_inline_style('header-footer-style', $custom_css);
		wp_add_inline_style('responsive-media-style', $custom_css);
	}

	if (function_exists('is_amp_endpoint') && is_amp_endpoint()) {

	} else {
		wp_enqueue_style('animation-wow', get_template_directory_uri() . '/assets/css/animate.css');
		wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	}
	wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/main-css/mobile-main.css', true, null, 'screen and (max-width: 3000px) and (min-width: 320px)');

	// wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animate.css' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
	wp_enqueue_style('effect', get_template_directory_uri() . '/assets/css/effect.css');
	wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('jquery-ui.min.css', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
	wp_enqueue_script('isotope-filter', get_template_directory_uri() . '/assets/js/isotopeFilter.min.js', array('jquery'), true);
	wp_enqueue_script('tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap-notify-js', get_template_directory_uri() . '/assets/js/bootstrap-notify.min.js', array('bootstrap'));
	wp_enqueue_script('superfsh', get_template_directory_uri() . '/assets/js/jquery.superfish.min.js', array('jquery'), '', true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), '', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true);
	//wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);
	// wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ) );
	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_script('jquery-ui-touch-punch', get_template_directory_uri() . '/assets/js/jquery.ui.touch-punch.min.js', array('jquery-ui-slider'), '0.2.3', true);


	global $wpdb;
	$product_price_max_query = "SELECT MAX( CAST( $wpdb->postmeta.meta_value AS SIGNED ) ) AS product_max_price FROM $wpdb->postmeta WHERE meta_key='%s'";
	$product_meta_price_max = $wpdb->get_row($wpdb->prepare($product_price_max_query, '_price'));

	wp_register_script('vw-stock-images-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));

	$get_woocommerce_currency_symbol = '';
	if (class_exists('WooCommerce')) {
		$get_woocommerce_currency_symbol = get_woocommerce_currency_symbol();
	}

	$vw_stock_images_pro_customscripts_obj = array(
		'is_home' => (is_home() || is_front_page()),
		'home_url' => home_url(),
		'is_rtl' => is_rtl(),
		'product_max_price' => $product_meta_price_max->product_max_price,
		'get_woocommerce_currency_symbol' => $get_woocommerce_currency_symbol,
		'ajaxurl' => admin_url('admin-ajax.php'),
		'loginUrl' => wp_login_url(), // Pass the login URL
		'upgradeUrl' => 'https://example.com/upgrade', // Replace with your actual upgrade URL
		'ajax_url' => admin_url('admin-ajax.php'),
		'liked_posts_page_url' => esc_url(get_permalink(get_page_by_title("Liked Page"))),
		"isUserLoggedIn" => is_user_logged_in() ? 'yes' : 'no',
	);

	wp_localize_script('vw-stock-images-pro-customscripts', 'vw_stock_images_pro_customscripts_obj', $vw_stock_images_pro_customscripts_obj);

	wp_enqueue_script('vw-stock-images-pro-customscripts');
	// }



	wp_enqueue_script('vw-stock-images-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
	wp_enqueue_script('animation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_enqueue_style('vw-stock-images-pro-ie', get_template_directory_uri() . '/assets/css/ie.css', array('vw-stock-images-pro-basic-style'));
	wp_style_add_data('vw-stock-images-pro-ie', 'conditional', 'IE');
}
add_action('wp_enqueue_scripts', 'vw_stock_images_pro_scripts');

/* Implement the Custom Header feature. */
require get_parent_theme_file_path('/inc/custom-header.php');
/* Custom template tags for this theme. */
require get_parent_theme_file_path('/inc/template-tags.php');
/* Customizer additions. */
require get_parent_theme_file_path('/inc/customize/customizer.php');
/* wc-templatefunction */
// require get_parent_theme_file_path( 'inc/wc-template-functions.php' );
// require 'inc/wc-template-functions.php';
//about us
require get_template_directory() . '/inc/widget/about-us-widget.php';
// Contact-Widgets
require get_parent_theme_file_path('inc/widget/contact-widget.php');
// social-widgets
require get_parent_theme_file_path('inc/widget/socail-widget.php');





/**
 * Functions which enhance the theme by hooking into WordPress
 */
require get_parent_theme_file_path('inc/custom-functions.php');

require get_template_directory() . '/inc/verify_theme_version.php';
/* Theme Wizard */
require get_template_directory() . '/theme-wizard/config.php';
require get_parent_theme_file_path('/theme-wizard/plugin-activation.php');
/* URL DEFINES */
require get_parent_theme_file_path('custom-filter.php');
define('vw_stock_images_pro_SITE_URL', 'https://www.vwthemes.com/');
/* Theme Credit link */
function vw_stock_images_pro_credit_link()
{
	echo esc_html_e('', 'vw-furniture-pro') . "<a href=" . esc_url(vw_stock_images_pro_SITE_URL) . " target='_blank'> Pest Control WordPress Theme. </a>";
}
/*Radio Button sanitization*/
function vw_stock_images_pro_sanitize_choices($input, $setting)
{
	global $wp_customize;
	$control = $wp_customize->get_control($setting->id);
	if (array_key_exists($input, $control->choices)) {
		return $input;
	} else {
		return $setting->default;
	}
}



/* Excerpt Read more overwrite */
function vw_stock_images_pro_excerpt_more($link)
{
	if (is_admin()) {
		return $link;
	}
	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url(get_permalink(get_the_ID())),
		/* translators: %s: Name of current post */
		sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-stock-images-pro'), get_the_title(get_the_ID()))
	);
	return ' &hellip; ' . $link;
}
add_filter('excerpt_more', 'vw_stock_images_pro_excerpt_more');

define('vw_stock_images_pro_THEME_DOC', 'https://www.vwthemesdemo.com/docs/vw-stock-images-pro/');
define('vw_stock_images_pro_SUPPORT', 'https://www.vwthemes.com/support/vw-theme/');
define('vw_stock_images_pro_FAQ', 'https://www.vwthemes.com/faqs/');
define('vw_stock_images_pro_CONTACT', 'https://www.vwthemes.com/contact/');
define('vw_stock_images_pro_REVIEW', 'https://www.vwthemes.com/topic/reviews-and-testimonials/');

define('vw_stock_images_pro_banner_link', 'https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/');
define('vw_stock_images_pro_social_media_plugin', 'https://www.vwthemes.com/free-plugin/vw-social-media/');
define('vw_stock_images_pro_preloader_plugin', 'https://www.vwthemes.com/free-plugin/vw-preloader/');
define('vw_stock_images_pro_accordion_plugin', 'https://www.vwthemes.com/free-plugin/vw-accordion/');
define('vw_stock_images_pro_gallery_link', 'https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/');
define('vw_stock_images_pro_footer_link', 'https://www.youtube.com/watch?v=7BvTpLh-RB8');

define('IBTANA_THEME_LICENCE_ENDPOINT', 'https://preview.vwthemesdemo.com/old_website/wp-json/ibtana-licence/v2/');
define('SHOPIFY_THEME_LICENCE_ENDPOINT', 'https://license.vwthemes.com/api/public/');

//-------- Bundle Notice ---------
add_action('admin_notices', 'vw_theme_bundle_admin_notice');
function vw_theme_bundle_admin_notice()
{
	?>
	<div class="notice bundle-notice is-dismissible">
		<div class="theme_box">
			<h3><?php echo esc_html('Thank You For Purchasing VW Stock Images Theme', 'vw-stock-images-pro'); ?></h3>
			<p><?php echo esc_html('Get our all', 'sirat-pro'); ?>
				<strong><?php echo esc_html('120+ Premium Themes', 'vw-stock-images-pro'); ?></strong>
				<?php echo esc_html('worth $7021 With Our', 'vw-stock-images-pro'); ?>
				<strong><?php echo esc_html('WP Theme Bundle', 'vw-stock-images-pro'); ?></strong>
				<?php echo esc_html('in just $89.', 'vw-stock-images-pro'); ?>
			</p>

		</div>
		<div class="bubdle_button">
			<a href="https://www.vwthemes.com/premium/all-themes/" class="button button-primary button-hero" target="_blank"
				rel="noopener"><?php echo esc_html('Get Bundle at $89', 'vw-stock-images-pro'); ?></a>
		</div>
	</div>
	<?php
}

add_action('switch_theme', 'vw_stock_images_pro_deactivate');
function vw_stock_images_pro_deactivate()
{
	ThemeWhizzie::remove_the_theme_key();
	ThemeWhizzie::set_the_validation_status('false');
}

define('CUSTOM_TEXT_DOMAIN', 'vw-stock-images-pro');
add_filter('woocommerce_add_to_cart_fragments', 'vw_stock_images_pro_wc_refresh_mini_cart_count');
function vw_stock_images_pro_wc_refresh_mini_cart_count($fragments)
{
	ob_start();
	$items_count = WC()->cart->get_cart_contents_count();
	?>
	<span class="cart-value count"><?php echo $items_count ? '(' . $items_count . ')' : '(0)'; ?></span>
	<?php
	$fragments['.cart-value'] = ob_get_clean();
	return $fragments;
}

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns()
	{
		return 3; // 3 products per row
	}
}
// Remove default WC image sizes
function remove_wc_image_sizes()
{
	remove_image_size('woocommerce_thumbnail');
	remove_image_size('woocommerce_single');
	remove_image_size('woocommerce_gallery_thumbnail');
	remove_image_size('shop_thumbnail');
}
add_action('init', 'remove_wc_image_sizes');

add_filter('woocommerce_gallery_thumbnail_size', function ($size) {
	return 'full';
});

// add_action('wp_footer', 'single_added_to_cart_event');

function aw_include_script()
{

	if (!did_action('wp_enqueue_media')) {
		wp_enqueue_media();
	}

	wp_enqueue_script('awscript', get_stylesheet_directory_uri() . '/assets/js/admin_script.js', array('jquery'), null, false);
}
add_action('admin_enqueue_scripts', 'aw_include_script');


function single_added_to_cart_event()
{
	if (isset($_POST['add-to-cart']) && isset($_POST['quantity'])) {
		// Get added to cart product ID (or variation ID) and quantity (if needed)
		$quantity = $_POST['quantity'];
		$product_id = isset($_POST['variation_id']) ? $_POST['variation_id'] : $_POST['add-to-cart'];

		// JS code goes here below
		?>
		<script>
			jQuery(function ($) {
				alert('Product added to cart');
			});
		</script>
		<?php
	}
}
// buy now button
function buy_now_submit_form()
{
	?>
	<script>
		jQuery(document).ready(function () {
			// listen if someone clicks 'Buy Now' button
			jQuery('#buy_now_button').click(function () {
				// set value to 1
				jQuery('#is_buy_now').val('1');
				//submit the form
				jQuery('form.cart').submit();
			});
		});
	</script>
	<?php
}
add_action('woocommerce_after_add_to_cart_form', 'buy_now_submit_form');

add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url)
{
	if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
		global $woocommerce;
		$redirect_url = wc_get_checkout_url();
	}
	return $redirect_url;
}

add_action('wp_ajax_get_wishlist_count', 'get_wishlist_count');
add_action('wp_ajax_nopriv_get_wishlist_count', 'get_wishlist_count');
function get_wishlist_count()
{
	$wishlist_count = YITH_WCWL()->count_products();
	$resp = array(
		"wishlist_count" => '(' . $wishlist_count . ')',
		"status" => 200
	);
	wp_send_json($resp);
	exit;
}

//additional info tab
add_filter('woocommerce_product_tabs', 'woo_rename_tabs', 98);
function woo_rename_tabs($tabs)
{

	$tabs['additional_information']['title'] = __('Additional Information');

	$tabs['description']['priority'] = 5; // Description first
	$tabs['reviews']['priority'] = 15;  //  Reviews third
	$tabs['additional_information']['priority'] = 10;

	$tabs['additional_information']['title'] = __('Additional Information');
	$tabs['additional_information']['callback'] = 'woocommerce_additional_information_callback';

	$tabs['description']['title'] = __('Description');

	// Rename the additional information tab
	return $tabs;
}

function woocommerce_additional_information_callback()
{
	echo 'This is the content of the additional information';
}

// add_filter( 'woocommerce_get_price_html', 'rounded_price_html', 100, 2 );
// function rounded_price_html( $price, $product ){
// return number_format( $price, 2, ‘,’, ‘.’);
// }

ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '55M');


// function vw_stock_images_pro_categories_with_count($attr)
// {
//   $args = array(
//     'taxonomy'   => $attr['taxonomy'],
//     'hide_empty' => false,
//   );
//
//   $product_categories = get_terms($args);
// 	$string = '';
//   $string .= '<h3 class="widget-title">'. $attr['heading'] .'</h3>';
//   $string .= '<ul class="product-categories">';
//
//   foreach ($product_categories as $key => $cat) {
//     $string .= '<li class="cat-item mb-2 cat-item-'. $cat->term_id .'"><a target="_blank" href="'. get_term_link($cat) .'">'. $cat->name .'</a> <span class="count">'. $cat->count .'</span></li>';
//   }
//   $string .= '</ul>';
//
//   return $string;
// }
//
// // Register shortcode
// add_shortcode('sidebar-categories-with-count', 'vw_stock_images_pro_categories_with_count');

function custom_comment_form_defaults($defaults)
{
	$defaults['title_reply'] = 'Leave a Comment';
	$defaults['label_submit'] = 'Leave a comment';
	return $defaults;
}

add_filter('comment_form_defaults', 'custom_comment_form_defaults');
function average_rating()
{
	global $wpdb;
	$post_id = get_the_ID();
	$ratings = $wpdb->get_results("

		SELECT $wpdb->commentmeta.meta_value
		FROM $wpdb->commentmeta
		INNER JOIN $wpdb->comments on $wpdb->comments.comment_id=$wpdb->commentmeta.comment_id
		WHERE $wpdb->commentmeta.meta_key='rating'
		AND $wpdb->comments.comment_post_id=$post_id
		AND $wpdb->comments.comment_approved =1

		");
	$counter = 0;
	$average_rating = 0;
	if ($ratings) {
		foreach ($ratings as $rating) {
			$average_rating = $average_rating + $rating->meta_value;
			$counter++;
		}
		//round the average to the nearast 1/2 point
		return (round(($average_rating / $counter) * 2, 0) / 2);
	} else {
		//no ratings
		return '0';
	}
}


// woo commerce function

function get_star_rating()
{
	global $product;

	$average = $product->get_average_rating();
	$stars_html = '<div class="star-rating">';
	$full_stars = ceil($average);

	// Full stars
	for ($i = 1; $i <= $full_stars; $i++) {
		$stars_html .= '<span class="fa fa-star"></span>';
	}

	// Empty stars
	for ($i = $full_stars + 1; $i <= 5; $i++) {
		$stars_html .= '<span class="fa fa-star-o"></span>';
	}

	$stars_html .= '</div>';

	return $stars_html;
}




if (is_admin()) {
	add_action('admin_menu', 'vw_stock_images_pro_product_custom_meta');
}

function vw_stock_images_pro_product_custom_meta()
{

	add_meta_box('bn_meta', __('Products Meta', 'clothing-store-pro'), 'vw_stock_images_pro_posttype_bn_meta_callback_product', 'product', 'normal', 'high');
}

function vw_stock_images_pro_posttype_bn_meta_callback_product($post)
{
	wp_nonce_field(basename(__FILE__), 'bn_nonce');
	$bn_stored_meta = get_post_meta($post->ID);

	$shipping_text1 = get_post_meta($post->ID, 'shipping-text1', true);
	$shipping_text2 = get_post_meta($post->ID, 'shipping-text2', true);
	$shipping_text3 = get_post_meta($post->ID, 'shipping-text3', true);
	$shipping_text4 = get_post_meta($post->ID, 'shipping-text4', true);



	$shipping_img1 = get_post_meta($post->ID, 'shipping-img1', true);
	$shipping_img2 = get_post_meta($post->ID, 'shipping-img2', true);
	$shipping_img3 = get_post_meta($post->ID, 'shipping-img3', true);
	$shipping_img4 = get_post_meta($post->ID, 'shipping-img4', true);

	$product_single_text = get_post_meta($post->ID, 'product-single-text', true);

	$product_meta_image = get_post_meta($post->ID, 'product-meta-image', true);

	?>
	<div id="property_stuff">
		<table id="list-table">
			<tbody id="the-list" data-wp-lists="list:meta">

				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Free Delivery Text', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text1" id="shipping-text1"
							value="<?php echo esc_html($shipping_text1); ?>" />
					</td>
				</tr>

				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Top Brand Text', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text2" id="shipping-text2"
							value="<?php echo esc_html($shipping_text2); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Pay On Delivery Text', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text3" id="shipping-text3"
							value="<?php echo esc_html($shipping_text3); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('10 Day Return & Exchange Text', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text4" id="shipping-text4"
							value="<?php echo esc_html($shipping_text4); ?>" />
					</td>
				</tr>



				<tr id="meta-1">
					<td class="left">
						<?php _e('Free Delivery Image', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-img1" value="<?php echo $shipping_img1; ?>" readonly>
						<input type="button" class="button button-primary" value="Upload Image" id="shipping-img1"><br>

					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php _e('Top Brand Image', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-img2" value="<?php echo $shipping_img2; ?>" readonly>
						<input type="button" class="button button-primary" value="Upload Image" id="shipping-img2"><br>
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php _e('Pay On Delivery Image', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-img3" value="<?php echo $shipping_img3; ?>" readonly>
						<input type="button" class="button button-primary" value="Upload Image" id="shipping-img3"><br>
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php _e('10 Day Return & Exchange Image', 'vw-stock-images-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-img4" value="<?php echo $shipping_img4; ?>" readonly>
						<input type="button" class="button button-primary" value="Upload Image" id="shipping-img4"><br>
					</td>
				</tr>


			</tbody>
		</table>
	</div>
	<?php
}

function vw_stock_images_pro_meta_save_product($post_id)
{

	if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Team Meta 1


	if (isset($_POST['graph-icon'])) {
		update_post_meta($post_id, 'graph-icon', sanitize_text_field($_POST['graph-icon']));
	}


	if (isset($_POST['shipping-text1'])) {
		update_post_meta($post_id, 'shipping-text1', sanitize_text_field($_POST['shipping-text1']));
	}
	if (isset($_POST['shipping-text2'])) {
		update_post_meta($post_id, 'shipping-text2', sanitize_text_field($_POST['shipping-text2']));
	}
	if (isset($_POST['shipping-text3'])) {
		update_post_meta($post_id, 'shipping-text3', sanitize_text_field($_POST['shipping-text3']));
	}
	if (isset($_POST['shipping-text4'])) {
		update_post_meta($post_id, 'shipping-text4', sanitize_text_field($_POST['shipping-text4']));
	}

	if (isset($_POST['shipping-img1'])) {
		update_post_meta($post_id, 'shipping-img1', sanitize_text_field($_POST['shipping-img1']));
	}
	if (isset($_POST['shipping-img2'])) {
		update_post_meta($post_id, 'shipping-img2', sanitize_text_field($_POST['shipping-img2']));
	}
	if (isset($_POST['shipping-img3'])) {
		update_post_meta($post_id, 'shipping-img3', sanitize_text_field($_POST['shipping-img3']));
	}
	if (isset($_POST['shipping-img4'])) {
		update_post_meta($post_id, 'shipping-img4', sanitize_text_field($_POST['shipping-img4']));
	}

}
add_action('save_post', 'vw_stock_images_pro_meta_save_product');

function get_page_id_by_title_global($pagename)
{
	$args = array(
		'post_type' => 'page',
		'posts_per_page' => 1,
		'title' => $pagename
	);
	$query = new WP_Query($args);

	$page_id = '1';
	if (isset($query->post->ID)) {
		$page_id = $query->post->ID;
	}

	return $page_id;
}


add_filter('loop_shop_per_page', 'bbloomer_redefine_products_per_page', 9999);

function bbloomer_redefine_products_per_page($per_page)
{
	$per_page = 9;
	return $per_page;
}


function vw_pest_control_pro_professional_services_section_shortcode()
{
	ob_start();
	get_template_part('template-parts/home/section-professional-services');
	$output = ob_get_clean();
	return $output;
}
add_shortcode('section-professional-services', 'vw_pest_control_pro_professional_services_section_shortcode');

function vw_pest_control_pro_professional_appoinment_section_shortcode()
{
	ob_start();
	get_template_part('template-parts/home/section-our-newsletter');
	$output = ob_get_clean();
	return $output;
}
add_shortcode('section-appoinment-sec', 'vw_pest_control_pro_professional_appoinment_section_shortcode');

add_action('woocommerce_single_product_summary', 'add_download_link_for_virtual_products', 20);

function add_download_link_for_virtual_products()
{
	global $product;

	// Check if the product is virtual and downloadable
	if ($product->is_virtual() && $product->is_downloadable()) {
		// Get the download links
		$downloads = $product->get_downloads();

		// Display the download link
		if (!empty($downloads)) {
			echo '<h2>Download Your Product</h2>';
			echo '<ul>';
			foreach ($downloads as $download_id => $download) {
				$download_url = $download['file'];
				echo '<a href="' . esc_url($download_url) . '" download>' . esc_html('Dowinload Image') . '</a>';
			}
			echo '</ul>';
		}
	}
}







function create_product_images_cpt()
{
	$labels = array(
		'name' => _x('Product Images', 'Post Type General Name'),
		'singular_name' => _x('Product Image', 'Post Type Singular Name'),
		'menu_name' => __('Product Images'),
		'name_admin_bar' => __('Product Image'),
	);

	$args = array(
		'label' => __('Product Image'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'page-attributes', 'revisions', 'media'),
		// 'taxonomies'          => array( 'category' ), 
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'has_archive' => true,
		'can_export' => true,
		'capability_type' => array('product_image', 'product_images'), // Custom capability type
		'capabilities' => array(
			'publish_posts' => 'publish_product_images',
			'edit_posts' => 'edit_product_images',
			'edit_others_posts' => 'edit_others_product_images',
			'delete_posts' => 'delete_product_images',
			'delete_others_posts' => 'delete_others_product_images',
			'read_private_posts' => 'read_private_product_images',
			'edit_post' => 'edit_product_image',
			'delete_post' => 'delete_product_image',
			'read_post' => 'read_product_image',
		),
	);

	register_post_type('product_images', $args);
}
add_action('init', 'create_product_images_cpt');


function register_image_cat_taxonomy()
{
	// Labels for the taxonomy
	$labels = array(
		'name' => _x('Image Categories', 'taxonomy general name'),
		'singular_name' => _x('Image Category', 'taxonomy singular name'),
		'search_items' => __('Search Image Categories'),
		'all_items' => __('All Image Categories'),
		'parent_item' => __('Parent Image Category'),
		'parent_item_colon' => __('Parent Image Category:'),
		'edit_item' => __('Edit Image Category'),
		'update_item' => __('Update Image Category'),
		'add_new_item' => __('Add New Image Category'),
		'new_item_name' => __('New Image Category Name'),
		'menu_name' => __('Image Categories'),
	);

	// Arguments for the taxonomy
	$args = array(
		'hierarchical' => true, // Set to true for category-like taxonomy
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'image-category'), // Customize the URL slug
	);

	// Register the taxonomy and associate it with the custom post type
	register_taxonomy('image_cat', array('product_images'), $args);
}

add_action('init', 'register_image_cat_taxonomy');
function custom_upload_mimes($mimes) {
    $mimes['mp4'] = 'video/mp4';
    $mimes['webm'] = 'video/webm';
    $mimes['ogg'] = 'video/ogg';
    return $mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');
// Register Custom Taxonomies for Product Images

function register_product_images_taxonomies()
{

	// Orientation Taxonomy
	$labels_orientation = array(
		'name' => _x('Orientations', 'taxonomy general name'),
		'singular_name' => _x('Orientation', 'taxonomy singular name'),
		'search_items' => __('Search Orientations'),
		'all_items' => __('All Orientations'),
		'parent_item' => __('Parent Orientation'),
		'parent_item_colon' => __('Parent Orientation:'),
		'edit_item' => __('Edit Orientation'),
		'update_item' => __('Update Orientation'),
		'add_new_item' => __('Add New Orientation'),
		'new_item_name' => __('New Orientation Name'),
		'menu_name' => __('Orientation'),
	);

	$args_orientation = array(
		'hierarchical' => true,
		'labels' => $labels_orientation,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'orientation'),
	);

	register_taxonomy('orientation', array('product_images'), $args_orientation);

	// Colors Taxonomy
	$labels_colors = array(
		'name' => _x('Colors', 'taxonomy general name'),
		'singular_name' => _x('Color', 'taxonomy singular name'),
		'search_items' => __('Search Colors'),
		'all_items' => __('All Colors'),
		'parent_item' => __('Parent Color'),
		'parent_item_colon' => __('Parent Color:'),
		'edit_item' => __('Edit Color'),
		'update_item' => __('Update Color'),
		'add_new_item' => __('Add New Color'),
		'new_item_name' => __('New Color Name'),
		'menu_name' => __('Color'),
	);

	$args_colors = array(
		'hierarchical' => true,
		'labels' => $labels_colors,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'color'),
	);

	register_taxonomy('colors', array('product_images'), $args_colors);

	// File Type Taxonomy
	$labels_file_type = array(
		'name' => _x('File Types', 'taxonomy general name'),
		'singular_name' => _x('File Type', 'taxonomy singular name'),
		'search_items' => __('Search File Types'),
		'all_items' => __('All File Types'),
		'parent_item' => __('Parent File Type'),
		'parent_item_colon' => __('Parent File Type:'),
		'edit_item' => __('Edit File Type'),
		'update_item' => __('Update File Type'),
		'add_new_item' => __('Add New File Type'),
		'new_item_name' => __('New File Type Name'),
		'menu_name' => __('File Type'),
	);

	$args_file_type = array(
		'hierarchical' => true,
		'labels' => $labels_file_type,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'file-type'),
	);

	register_taxonomy('file_type', array('product_images'), $args_file_type);
}

// Hook into the init action to register the taxonomies
add_action('init', 'register_product_images_taxonomies');


// category image meta ------------------------------------------------------------------------------------------------

// Add image field to the taxonomy add form
function image_cat_add_meta_field()
{
	?>
	<div class="form-field term-group">
		<label for="image_cat_image"><?php _e('Category Image', 'textdomain'); ?></label>
		<input type="button" class="button button-secondary image-upload-button"
			value="<?php _e('Upload Image', 'textdomain'); ?>" id="image_cat_image_btn">
		<input type="hidden" id="image_cat_image" name="image_cat_image" value="">
		<div id="image_cat_image_preview"></div>
	</div>
	<?php
}
add_action('image_cat_add_form_fields', 'image_cat_add_meta_field');

// Edit image field on the taxonomy edit form
function image_cat_edit_meta_field($term)
{
	// Get current value of the image field
	$image = get_term_meta($term->term_id, 'image_cat_image', true);
	?>
	<tr class="form-field term-group-wrap">
		<th scope="row">
			<label for="image_cat_image"><?php _e('Category Image', 'textdomain'); ?></label>
		</th>
		<td>
			<input type="button" class="button button-secondary image-upload-button"
				value="<?php _e('Upload Image', 'textdomain'); ?>" id="image_cat_image_btn">
			<input type="hidden" id="image_cat_image" name="image_cat_image" value="<?php echo esc_attr($image); ?>">
			<div id="image_cat_image_preview">
				<?php if ($image) {
					echo '<img src="' . esc_url($image) . '" style="max-width:150px;"/>';
				} ?>
			</div>
		</td>
	</tr>
	<?php
}
add_action('image_cat_edit_form_fields', 'image_cat_edit_meta_field');

// Save the image when the term is created
function save_image_cat_meta_field($term_id)
{
	if (isset($_POST['image_cat_image']) && '' !== $_POST['image_cat_image']) {
		$image = sanitize_text_field($_POST['image_cat_image']);
		update_term_meta($term_id, 'image_cat_image', $image);
	}
}
add_action('created_image_cat', 'save_image_cat_meta_field');
add_action('edited_image_cat', 'save_image_cat_meta_field');
// Enqueue media uploader script and custom script for handling the image upload
function enqueue_image_cat_media_uploader()
{
	if (isset($_GET['taxonomy']) && $_GET['taxonomy'] === 'image_cat') {
		wp_enqueue_media(); // Enqueue the WordPress media uploader
		wp_enqueue_script('image-cat-script', get_template_directory_uri() . '/assets/js/image-cat.js', array('jquery'), null, true);
	}
}
add_action('admin_enqueue_scripts', 'enqueue_image_cat_media_uploader');

function add_video_meta_box() {
    add_meta_box(
        'product_image_video_meta',
        'Product Image Video',
        'render_video_meta_box',
        'product_images',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_video_meta_box');

function render_video_meta_box($post) {
    $video_url = get_post_meta($post->ID, '_product_image_video_url', true);
    ?>
    <label for="product_image_video_url">Video URL:</label>
    <input type="text" id="product_image_video_url" name="product_image_video_url" value="<?php echo esc_attr($video_url); ?>" style="width:100%;" />
    <p>Or upload a video file from the media library.</p>
    <button class="button" id="upload_video_button">Upload Video</button>
    <?php
}
function save_video_meta_box($post_id) {
    if (array_key_exists('product_image_video_url', $_POST)) {
        update_post_meta(
            $post_id,
            '_product_image_video_url',
            sanitize_text_field($_POST['product_image_video_url'])
        );
    }
}
add_action('save_post', 'save_video_meta_box');


// category image meta ------------------------------------------------------------------------------------------------

function add_custom_role_with_cpt_access()
{
	// Remove the role if it already exists to avoid duplication
	remove_role('product_images_manager');

	// Add the custom role with specific capabilities
	add_role('product_images_manager', 'Assets Contributer', array(
		// Basic capabilities (deny general access)
		'read' => true, // No general read access
		'edit_posts' => false, // Cannot edit regular posts
		'delete_posts' => false, // Cannot delete regular posts
		'edit_pages' => false, // Cannot edit pages
		'delete_pages' => false, // Cannot delete pages
		'edit_theme_options' => false, // Cannot access theme options or editor
		'edit_files' => false, // Cannot access the file editor
		'manage_options' => false, // Cannot manage options/settings

		// Product Images custom post type capabilities
		'edit_product_images' => true,  // Can edit product images
		'publish_product_images' => true,  // Can publish product images
		'delete_product_images' => true,  // Can delete product images
		'edit_others_product_images' => true,  // Can edit others' product images
		'delete_others_product_images' => true,  // Can delete others' product images
		'read_product_image' => true,  // Can read individual product images
		'read_private_product_images' => true,  // Can read private product images
		'delete_product_image' => true,  // Can delete individual product images
		'edit_product_image' => true,  // Can edit a single product image
		'create_posts' => true,  // Allow creating new product images

		// Capability to upload featured images
		'upload_files' => true,  // Can upload media files, including featured images
	));
}
add_action('init', 'add_custom_role_with_cpt_access');


function assign_product_images_caps_to_admin()
{
	// Get the administrator role
	$role = get_role('administrator');

	// Add custom capabilities
	$role->add_cap('edit_product_images');
	$role->add_cap('publish_product_images');
	$role->add_cap('edit_others_product_images');
	$role->add_cap('delete_product_images');
	$role->add_cap('delete_others_product_images');
	$role->add_cap('read_private_product_images');
	$role->add_cap('edit_product_image');
	$role->add_cap('delete_product_image');
	$role->add_cap('read_product_image');
}
add_action('admin_init', 'assign_product_images_caps_to_admin');


// Add custom field to user profile page
function custom_user_profile_fields($user)
{ ?>
	<h3><?php _e("Extra User Information", "blank"); ?></h3>
	<table class="form-table">
		<tr>
			<th><label for="country"><?php _e("Country"); ?></label></th>
			<td>
				<input type="text" name="country" id="country"
					value="<?php echo esc_attr(get_user_meta($user->ID, 'country', true)); ?>" class="regular-text" /><br />
				<span class="description"><?php _e("Please enter your country."); ?></span>
			</td>
		</tr>
	</table>
<?php }

add_action('show_user_profile', 'custom_user_profile_fields');
add_action('edit_user_profile', 'custom_user_profile_fields');

// Save custom field data
function save_custom_user_profile_fields($user_id)
{
	if (!current_user_can('edit_user', $user_id)) {
		return false;
	}

	update_user_meta($user_id, 'country', $_POST['country']);
}

add_action('personal_options_update', 'save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'save_custom_user_profile_fields');


// --------------------------------meta field for cpt prod_images ----------------------------------------------

// Add a meta box in the post editor
function add_image_type_meta_box()
{
	add_meta_box('image_type_meta', 'Image Type', 'image_type_meta_callback', 'product_images', 'side', 'high');
}
add_action('add_meta_boxes', 'add_image_type_meta_box');

function image_type_meta_callback($post)
{
	$value = get_post_meta($post->ID, '_image_type', true);
	?>
	<label for="image_type">Select Image Type:</label>
	<select name="image_type" id="image_type">
		<option value="free" <?php selected($value, 'free'); ?>>Free</option>
		<option value="premium" <?php selected($value, 'premium'); ?>>Premium</option>
	</select>
	<?php
}

// Save the meta value
function save_image_type_meta($post_id)
{
	if (isset($_POST['image_type'])) {
		update_post_meta($post_id, '_image_type', sanitize_text_field($_POST['image_type']));
	}
}
add_action('save_post', 'save_image_type_meta');



// meta field for location =======================================================================================\
// Add meta box for location field
function add_location_meta_box()
{
	add_meta_box(
		'product_image_location',       // Unique ID
		'Location',       // Box title
		'render_location_meta_box',     // Content callback
		'product_images',               // Post type
		'normal',                         // Context (where to display the meta box)
		'default'                       // Priority
	);
}
add_action('add_meta_boxes', 'add_location_meta_box');

// Render the location meta box
function render_location_meta_box($post)
{
	// Retrieve the current value of the 'location' meta field
	$location = get_post_meta($post->ID, '_product_image_location', true);

	// Nonce field for security
	wp_nonce_field('save_location_meta_box', 'location_meta_box_nonce');

	// Display the text input field for location
	echo '<label for="product_image_location">Location:</label>';
	echo '<input type="text" id="product_image_location" name="product_image_location" value="' . esc_attr($location) . '" size="25" />';
}

// Save the location meta field value
function save_location_meta_box($post_id)
{
	// Check if nonce is set and valid
	if (!isset($_POST['location_meta_box_nonce']) || !wp_verify_nonce($_POST['location_meta_box_nonce'], 'save_location_meta_box')) {
		return;
	}

	// Check if the current user has permission to edit the post
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	// Check if the 'product_image_location' is set and sanitize it
	if (isset($_POST['product_image_location'])) {
		$location = sanitize_text_field($_POST['product_image_location']);
		update_post_meta($post_id, '_product_image_location', $location);
	}
}
add_action('save_post', 'save_location_meta_box');


// meta field for location =======================================================================================\


// keeping track of number of images upoded by user 


function add_post_count_meta_field($user_id)
{
	if (!get_user_meta($user_id, 'post_count', true)) {
		add_user_meta($user_id, 'post_count', 0, true);
	}
}
add_action('profile_update', 'add_post_count_meta_field');
add_action('user_register', 'add_post_count_meta_field');



function get_post_count_by_user($user_id)
{
	$query = new WP_Query(array(
		'author' => $user_id,
		'post_type' => 'post', // Change if you need to count for a custom post type
		'post_status' => 'publish', // Only count published posts
		'fields' => 'ids', // Retrieve only the IDs
		'posts_per_page' => -1, // Retrieve all posts
	));

	return $query->found_posts;
}
function update_post_count_on_publish($post_id)
{
	// Ensure this function only runs on a 'publish' action
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Avoid running this function for revisions
	if (wp_is_post_revision($post_id)) {
		return;
	}

	// Check if the post is published
	$post_status = get_post_status($post_id);
	if ($post_status !== 'publish') {
		return;
	}

	$post_author_id = get_post_field('post_author', $post_id);
	$user = get_userdata($post_author_id);

	if ($user && in_array('product_images_manager', $user->roles)) {
		$post_count = (int) get_user_meta($post_author_id, 'post_count', true);
		update_user_meta($post_author_id, 'post_count', $post_count + 1);
	}
}
add_action('save_post', 'update_post_count_on_publish');
function decrement_post_count_on_delete($post_id)
{
	error_log("Function triggered for post ID: $post_id");
	// Avoid running for revisions or non-posts
	if (wp_is_post_revision($post_id)) {
		return;
	}

	// Get the post author ID
	$post_author_id = get_post_field('post_author', $post_id);

	// Check if the user has the specific role
	$user = get_userdata($post_author_id);
	if ($user && in_array('product_images_manager', $user->roles)) {

		$post_count = (int) get_user_meta($post_author_id, 'post_count', true);
		$new_post_count = max(0, $post_count - 1);

		update_user_meta($post_author_id, 'post_count', $new_post_count);
	}
}
add_action('wp_trash_post', 'decrement_post_count_on_delete');

function show_post_count_in_user_profile($user)
{
	$post_count = get_user_meta($user->ID, 'post_count', true);
	?>
	<h3><?php _e('Post Count', 'vw-stock-images-pro'); ?></h3>
	<table class="form-table">
		<tr>
			<th><label for="post_count"><?php _e('Post Count'); ?></label></th>
			<td>
				<input type="text" name="post_count" id="post_count" value="<?php echo esc_attr($post_count); ?>"
					class="regular-text" readonly />
			</td>
		</tr>
	</table>
	<?php
}
add_action('show_user_profile', 'show_post_count_in_user_profile');
add_action('edit_user_profile', 'show_post_count_in_user_profile');





function filter_custom_post_type_posts_by_author($query)
{
	// Check if we're in the admin area and it's a post list query
	if (is_admin() && $query->is_main_query() && $query->post_type === 'product_images') {
		// Restrict to posts authored by the current user
		if (!current_user_can('manage_options')) { // 'manage_options' is usually for admins
			$query->set('author', get_current_user_id());
		}
	}
}
add_action('pre_get_posts', 'filter_custom_post_type_posts_by_author');


function restrict_custom_post_type_editing($allcaps, $cap, $args, $user)
{
	if ($args[0] === 'edit_post') {
		$post_id = $args[2];
		$post = get_post($post_id);

		// If the post exists and the user is not the author, deny edit access
		if ($post && $post->post_author != $user->ID) {
			$allcaps[$cap[0]] = false;
		}
	}

	if ($args[0] === 'delete_post') {
		$post_id = $args[2];
		$post = get_post($post_id);

		// If the post exists and the user is not the author, deny delete access
		if ($post && $post->post_author != $user->ID) {
			$allcaps[$cap[0]] = false;
		}
	}

	return $allcaps;
}
add_filter('user_has_cap', 'restrict_custom_post_type_editing', 10, 4);



// code to manage number of download count in mambership level 
function pmpro_add_download_limit_field()
{
	$level_id = intval($_REQUEST['edit']);
	$download_limit = get_option('pmpro_download_limit_' . $level_id, 10); // Default to 10 downloads

	?>
	<h3 class="topborder"><?php esc_html_e('Download Limit', 'pmpro'); ?></h3>
	<table class="form-table">
		<tr>
			<th scope="row" valign="top"><label
					for="download_limit"><?php esc_html_e('Number of Downloads Allowed', 'pmpro'); ?>:</label></th>
			<td>
				<input name="download_limit" type="number" id="download_limit"
					value="<?php echo esc_attr($download_limit); ?>" class="regular-text" />
				<p class="description">
					<?php esc_html_e('Set the maximum number of downloads allowed for this membership level.', 'pmpro'); ?>
				</p>
			</td>
		</tr>
	</table>
	<?php
}
add_action('pmpro_membership_level_after_other_settings', 'pmpro_add_download_limit_field');

function pmpro_save_download_limit($level_id)
{
	if (isset($_REQUEST['download_limit'])) {
		$download_limit = intval($_REQUEST['download_limit']);
		update_option('pmpro_download_limit_' . $level_id, $download_limit);
	}
}
add_action('pmpro_save_membership_level', 'pmpro_save_download_limit');




// Add the 'Best Value' checkbox to the membership level settings
function my_pmpro_best_value_field()
{
	// Get the level ID from the request
	$level_id = isset($_REQUEST['edit']) ? intval($_REQUEST['edit']) : 0;

	// If no valid level ID is found, return early
	if ($level_id <= 0) {
		return;
	}

	// Fetch the best value metadata
	$best_value = get_post_meta($level_id, 'best_value', true);

	?>
	<h3 class="topborder"><?php esc_html_e('Best Value', 'pmpro'); ?></h3>
	<table class="form-table">
		<tbody>
			<tr>
				<th scope="row" valign="top"><label for="best_value"><?php esc_html_e('Best Value', 'pmpro'); ?>:</label>
				</th>
				<td>
					<input type="checkbox" id="best_value" name="best_value" value="1" <?php checked($best_value, 1); ?> />
					<label for="best_value"><?php esc_html_e('Mark this plan as Best Value', 'pmpro'); ?></label>
				</td>
			</tr>
		</tbody>
	</table>
	<?php
}
add_action('pmpro_membership_level_after_other_settings', 'my_pmpro_best_value_field');
function my_pmpro_save_best_value_field($level_id)
{
	if (isset($_REQUEST['best_value'])) {
		update_post_meta($level_id, 'best_value', 1);
	} else {
		update_post_meta($level_id, 'best_value', 0);
	}
}
add_action('pmpro_save_membership_level', 'my_pmpro_save_best_value_field');




// ---------------------------------code to manage number of download count in mambership level -------------------------------

function download_image_file($file_url)
{
	// Ensure the file exists before proceeding
	if (file_exists($file_url)) {
		// Set headers for file download
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="' . basename($file_url) . '"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file_url));

		// Read and output the file
		readfile($file_url);
		exit;
	} else {
		wp_die('File not found.');
	}
}
function handle_image_download_request()
{
	if (isset($_GET['download_image'])) {
		$post_id = intval($_GET['download_image']);
		$user_id = get_current_user_id();

		// Get the image type (free or premium)
		$image_type = get_post_meta($post_id, '_image_type', true);

		// Check if user can download the image
		if (!can_user_download($user_id, $image_type)) {
			wp_die('You do not have permission to download this image.');
		}

		// Get the image URL from the post's featured image
		$attachment_id = get_post_thumbnail_id($post_id);
		$image_url = wp_get_attachment_url($attachment_id);

		// Securely download the image
		if ($image_url) {
			$image_path = str_replace(home_url('/'), ABSPATH, $image_url);

			// Increment user download count
			increment_user_download_count($user_id);

			// Increment the download count for the post using a new meta key
			$post_download_count = get_post_meta($post_id, '_image_downloads', true);
			$post_download_count = !empty($post_download_count) ? intval($post_download_count) : 0;
			$post_download_count++;
			update_post_meta($post_id, '_image_downloads', $post_download_count);

			if (file_exists($image_path)) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="' . basename($image_path) . '"');
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize($image_path));
				readfile($image_path);
				exit;
			} else {
				wp_die('Image file not found.');
			}
		} else {
			wp_die('Image not found.');
		}
	}
}
add_action('template_redirect', 'handle_image_download_request');



function add_download_button($content)
{
	if (is_singular('product_images')) {
		$user_id = get_current_user_id();
		$post_id = get_the_ID();
		$image_type = get_post_meta($post_id, '_image_type', true);
		$download_url = add_query_arg('download_image', $post_id, home_url('/product_images/' . get_post_field('post_name', $post_id)));

		if (is_user_logged_in()) {
			if ($image_type === 'free') {
				$content .= '<a href="' . esc_url($download_url) . '" class="download-button">Download Free Image</a>';
			} elseif ($image_type === 'premium') {
				if (can_user_download($user_id, $image_type)) {
					$content .= '<a href="' . esc_url($download_url) . '" class="download-button">Download Premium Image</a>';
				} else {
					$content .= '<p>You need a premium membership to download this image. <a href="upgrade_link">Upgrade here</a></p>';
				}
			}
		} else {
			$content .= '<p>You need to <a href="' . wp_login_url() . '">log in</a> to download images.</p>';
		}
	}
	return $content;
}

function increment_user_download_count($user_id)
{
	$download_count = get_user_meta($user_id, '_download_count', true);
	$download_count = $download_count ? $download_count + 1 : 1;
	update_user_meta($user_id, '_download_count', $download_count);
}

function get_user_download_count($user_id)
{
	return get_user_meta($user_id, '_download_count', true);
}
function get_user_download_limit($user_id)
{
	// Retrieve the membership level for the user
	$level = pmpro_getMembershipLevelForUser($user_id);

	// Check if a valid membership level was found
	if ($level && isset($level->id)) {
		$level_id = $level->id;
	} else {
		// If no valid membership level, use default limit
		$level_id = 0; // Default or fallback ID
	}

	// Retrieve download limit based on membership level ID
	$download_limit = get_option('pmpro_download_limit_' . $level_id, 10); // Default to 10 downloads if option not found
	return $download_limit;
}
function can_user_download($user_id, $image_type)
{
	// Get the user's download limit and current download count
	$allowed_downloads = get_user_download_limit($user_id);
	$current_download_count = get_user_download_count($user_id);

	// Check if the image type is 'free'
	if ($image_type === 'free' && $current_download_count < $allowed_downloads) {
		return true;
	}
	// Check if the user has the required membership level and has not exceeded the download limit
	else if (function_exists('pmpro_hasMembershipLevel') && pmpro_hasMembershipLevel('2', $user_id) && $current_download_count < $allowed_downloads) {
		return true;
	}

	return false;
}

//-----------------------reseting all download counts daily ----------------------------

function schedule_daily_download_reset()
{
	if (!wp_next_scheduled('reset_user_download_count_daily')) {
		wp_schedule_event(strtotime('midnight'), 'daily', 'reset_user_download_count_daily');
	}
}
add_action('wp', 'schedule_daily_download_reset');

function reset_all_users_download_count()
{
	$args = array(
		'meta_key' => '_download_count', // Only users with this meta key
		'meta_compare' => 'EXISTS',
	);

	$users = get_users($args);

	foreach ($users as $user) {
		update_user_meta($user->ID, '_download_count', 0); // Reset download count to 0
	}
}
add_action('reset_user_download_count_daily', 'reset_all_users_download_count');

function unschedule_daily_download_reset()
{
	$timestamp = wp_next_scheduled('reset_user_download_count_daily');
	if ($timestamp) {
		wp_unschedule_event($timestamp, 'reset_user_download_count_daily');
	}
}
add_action('switch_theme', 'unschedule_daily_download_reset');

//-----------------------reseting all download counts ----------------------------


// ----------------------------- watermark code -------------------------

function generate_watermarked_image($original_image_url, $post_id)
{
	$upload_dir = wp_upload_dir();
	$original_image_path = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $original_image_url);
	// error_log('original image =================>' . $original_image_path);
	// Set the watermarked image path
	$watermarked_image_path = $upload_dir['basedir'] . '/watermarked-images/' . $post_id . '-watermarked.jpg';

	// Check if the watermarked image already exists
	if (file_exists($watermarked_image_path)) {
		return $upload_dir['baseurl'] . '/watermarked-images/' . $post_id . '-watermarked.jpg';
	}

	// Load the original image based on the format
	$image_info = getimagesize($original_image_path);
	$image_type = $image_info[2];

	switch ($image_type) {
		case IMAGETYPE_JPEG:
			$original_image = imagecreatefromjpeg($original_image_path);
			break;
		case IMAGETYPE_PNG:
			$original_image = imagecreatefrompng($original_image_path);
			break;
		case IMAGETYPE_GIF:
			$original_image = imagecreatefromgif($original_image_path);
			break;
		default:
			return false;
	}

	if (!$original_image) {
		return false;
	}

	// Load the watermark (use absolute path)
	$watermark_path = get_template_directory() . '/assets/images/watermark.png';
	$watermark = imagecreatefrompng($watermark_path);

	if (!$watermark) {
		imagedestroy($original_image);
		return false;
	}

	// Get dimensions of the original image
	$original_width = imagesx($original_image);
	$original_height = imagesy($original_image);

	// Get dimensions of the watermark
	$watermark_width = imagesx($watermark);
	$watermark_height = imagesy($watermark);

	// Create a new true color image for the resized watermark
	$stretched_watermark = imagecreatetruecolor($original_width, $original_height);

	// Preserve transparency for PNG watermark
	imagealphablending($stretched_watermark, false);
	imagesavealpha($stretched_watermark, true);

	// Fill the stretched watermark with transparent color
	$transparent = imagecolorallocatealpha($stretched_watermark, 0, 0, 0, 127);
	imagefill($stretched_watermark, 0, 0, $transparent);

	// Stretch the watermark to cover the entire original image
	imagecopyresampled($stretched_watermark, $watermark, 0, 0, 0, 0, $original_width, $original_height, $watermark_width, $watermark_height);

	// Merge the stretched watermark onto the original image
	imagecopy($original_image, $stretched_watermark, 0, 0, 0, 0, $original_width, $original_height);

	// Ensure watermarked directory exists
	if (!file_exists($upload_dir['basedir'] . '/watermarked-images/')) {
		mkdir($upload_dir['basedir'] . '/watermarked-images/', 0755, true);
	}

	// Save the watermarked image based on its format
	switch ($image_type) {
		case IMAGETYPE_JPEG:
			imagejpeg($original_image, $watermarked_image_path, 90);
			break;
		case IMAGETYPE_PNG:
			imagepng($original_image, $watermarked_image_path, 9);
			break;
		case IMAGETYPE_GIF:
			imagegif($original_image, $watermarked_image_path);
			break;
	}

	// Clean up
	imagedestroy($original_image);
	imagedestroy($watermark);
	imagedestroy($stretched_watermark);

	// Return the URL of the watermarked image
	return $upload_dir['baseurl'] . '/watermarked-images/' . $post_id . '-watermarked.jpg';
}


// ----------------------------- watermark code -------------------------


// ========================================================= Like Post Functionality ==================================== 


// Helper function to check if a post is saved
function is_post_saved_by_user($post_id, $user_id)
{
	$saved_posts = get_user_meta($user_id, 'saved_posts', true);
	return is_array($saved_posts) && in_array($post_id, $saved_posts);
}


// Function to display the save or remove post button
function add_save_post_buttons($post_id, $context = "")
{
	$user_id = get_current_user_id();
	$is_saved = is_post_saved_by_user($post_id, $user_id);

	// Check if the user is logged in
	if ($user_id) {
		// If we are on the liked posts page, show the "Remove Like" button
		if (is_page('liked-page') && $is_saved) {
			$button_text = '<i class="fa-solid fa-heart-circle-xmark"></i>';
			$button_class = 'remove-liked-post-btn';
			$href_attr = 'href="javascript:void(0)"';

			echo '<a class="' . esc_attr($button_class) . '" data-post-id="' . esc_attr($post_id) . '" ' . $href_attr . '>' . $button_text . '</a>';
		} else {
			// Otherwise, show the "Like" button
			$button_text = $is_saved ? '<i class="fa-solid fa-heart"></i>' : '<i class="fa-regular fa-heart"></i>';
			$button_class = $is_saved ? 'saved' : 'save';
			$button_href = $is_saved ? esc_url(get_permalink(get_page_by_title("Liked Page"))) : '';
			$href_attr = $is_saved ? 'href="' . $button_href . '"' : 'href="javascript:void(0)"';

			// Add "Like" text if the context is for the main post button
			if ($context === 'main-post-button') {
				$button_text .= ' Like';
			}

			echo '<a class="save-post-button ' . esc_attr($button_class) . '" data-post-id="' . esc_attr($post_id) . '" ' . $href_attr . '>' . $button_text . '</a>';
		}
	} else {

		// Show login prompt when the user is not logged in
		echo '<a href="#" class="save-post-button" data-type="like"><i class="fa-solid fa-heart"></i> </a>';
	}
}

// Hook the function to display the button
add_action('wp_footer', 'add_save_post_buttons');

// AJAX handler to save/remove a post
function handle_save_post()
{
	if (!is_user_logged_in()) {
		wp_send_json_error(array('message' => 'User not logged in.'));
	}

	$user_id = get_current_user_id();
	$post_id = intval($_POST['post_id']);
	$action = sanitize_text_field($_POST['action']);

	$saved_posts = get_user_meta($user_id, 'saved_posts', true);
	$saved_posts = $saved_posts ? $saved_posts : array();

	if ($action === 'save_post') {
		if (!in_array($post_id, $saved_posts)) {
			$saved_posts[] = $post_id;
			update_user_meta($user_id, 'saved_posts', $saved_posts);
		}
		wp_send_json_success();
	} elseif ($action === 'remove_saved_post') {
		if (($key = array_search($post_id, $saved_posts)) !== false) {
			unset($saved_posts[$key]);
			update_user_meta($user_id, 'saved_posts', $saved_posts);
		}
		wp_send_json_success();
	}

	wp_send_json_error(array('message' => 'Invalid action.'));
}
add_action('wp_ajax_save_post', 'handle_save_post');
add_action('wp_ajax_remove_saved_post', 'handle_save_post');

// Function to check if a post is liked and add a message
function check_post_liked()
{
	if (is_single() && is_user_logged_in()) {
		global $post;
		$user_id = get_current_user_id();

		if (is_post_saved_by_user($post->ID, $user_id)) {
			add_filter('the_content', 'add_liked_status');
		}
	}
}
add_action('wp', 'check_post_liked');

function add_liked_status($content)
{
	return $content . '<p>This post is liked!</p>';
}
function load_post_content()
{
	$post_id = intval($_POST['post_id']);
	// error_log('Requested Post ID: ' . $post_id); 

	$post = get_post($post_id);

	if ($post) {
		setup_postdata($post);
		ob_start();
		include(get_template_directory() . '/single-product_images.php');
		$output = ob_get_clean();
		echo $output;
		wp_reset_postdata();
	} else {
		// error_log('Post not found with ID: ' . $post_id); // Log when post not found
		echo 'Post not found.';
	}

	die();
}

add_action('wp_ajax_load_post_content', 'load_post_content');
add_action('wp_ajax_nopriv_load_post_content', 'load_post_content');




function load_collections_content($post_id)
{
	$post_id = intval($_POST['post_id']);
	// error_log('Requested Post ID: ' . $post_id); 

	$post = get_post($post_id);
	// Verify the request is coming from an authenticated user if necessary
	if (!is_user_logged_in()) {
		wp_send_json_error('User not logged in');
		wp_die(); // Properly terminate AJAX request
	}
	ob_start();
	include(get_template_directory() . '/page-template/collections-modal-template.php');
	$output = ob_get_clean();
	wp_reset_postdata();
	echo $output;

	wp_die(); // Properly terminate AJAX request
}

add_action('wp_ajax_load_collections_content', 'load_collections_content');
add_action('wp_ajax_nopriv_load_collections_content', 'load_collections_content'); // Allow non-logged-in users if needed


// Convert file size to human-readable format (e.g., KB, MB)
function format_size_units($bytes)
{
	if ($bytes >= 1073741824) {
		$bytes = number_format($bytes / 1073741824, 2) . ' GB';
	} elseif ($bytes >= 1048576) {
		$bytes = number_format($bytes / 1048576, 2) . ' MB';
	} elseif ($bytes >= 1024) {
		$bytes = number_format($bytes / 1024, 2) . ' KB';
	} else {
		$bytes = $bytes . ' bytes';
	}

	return $bytes;
}



// =================================================== post views functionality ===============================================================
// function add_post_view_count($post_id) {
//     $count = get_post_meta($post_id, 'view_count', true);
//     $count = empty($count) ? 0 : $count;
//     $count++;
//     update_post_meta($post_id, 'view_count', $count);
// }
// function increment_view_count_ajax() {
//     if (isset($_POST['post_id'])) {
//         $post_id = intval($_POST['post_id']);
//         if ($post_id) {
//             add_post_view_count($post_id);
//             wp_send_json_success(array('message' => 'View count updated.'));
//         }
//     }
//     wp_send_json_error(array('message' => 'Invalid post ID.'));
// }
// add_action('wp_ajax_increment_view_count', 'increment_view_count_ajax');
// add_action('wp_ajax_nopriv_increment_view_count', 'increment_view_count_ajax');
// // Function to get the views count for a post
// function get_post_views($post_id) {
//     $views = get_post_meta($post_id, 'post_views_count', true);
//     if ($views == '') {
//         return '0 views';
//     }
//     return $views . ' views';
// }


// =================================================== post views functionality ===============================================================





//==================================Collections functionality ===================================================================================

// registering collectons cpt 


function register_collections_post_type()
{
	$args = array(
		'public' => true,
		'label' => 'Collections',
		'supports' => array('title', ),
		'show_in_rest' => true,
		'show_ui' => true,
		'show_in_menu' => true,
	);
	register_post_type('collection', $args);
}
add_action('init', 'register_collections_post_type');

// post registerred 

// Register the meta box
function collections_meta_box()
{
	add_meta_box(
		'collections_meta_box',        // Unique ID for the meta box
		'Manage Collections',          // Meta box title
		'collections_meta_box_callback', // Callback function to display the fields
		'collections',                 // Post type where the meta box should appear
		'normal',                      // Context where the box appears (normal, side, advanced)
		'high'                         // Priority within the context
	);
}
add_action('add_meta_boxes', 'collections_meta_box');

// Meta box display callback function
function collections_meta_box_callback($post)
{
	// Use a nonce field for security
	wp_nonce_field('save_collections_meta_box', 'collections_meta_box_nonce');

	// Get the current value of the meta field if it exists
	$collections_data = get_post_meta($post->ID, '_collections', true);

	// Display the form field
	?>
	<label for="collections_data">Collections Data</label>
	<input type="text" name="collections_data" id="collections_data" value="<?php echo esc_attr($collections_data); ?>"
		size="25" />
	<?php
}


// Save the meta box data
function save_collections_meta_box_data($post_id)
{
	// Check if our nonce is set
	if (!isset($_POST['collections_meta_box_nonce'])) {
		return;
	}

	// Verify the nonce for security
	if (!wp_verify_nonce($_POST['collections_meta_box_nonce'], 'save_collections_meta_box')) {
		return;
	}

	// Check if this is an autosave (don't save if it is)
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Check user permissions
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	// Sanitize and save the data
	if (isset($_POST['collections_data'])) {
		$collections_data = sanitize_text_field($_POST['collections_data']);

		// Update the meta field in the database
		update_post_meta($post_id, '_collections', $collections_data);
	}
}
add_action('save_post', 'save_collections_meta_box_data');



add_action('wp_ajax_add_collection', 'handle_add_collection');
add_action('wp_ajax_remove_collection', 'handle_remove_collection');
add_action('wp_ajax_add_product_image_to_collection', 'handle_add_product_image_to_collection');
add_action('wp_ajax_remove_product_image_from_collection', 'handle_remove_product_image_from_collection');

function handle_add_collection()
{
	if (isset($_POST['collection_name']) && is_user_logged_in()) {
		$collection_name = sanitize_text_field($_POST['collection_name']);
		$post_id = wp_insert_post(array(
			'post_type' => 'collection',
			'post_title' => $collection_name,
			'post_status' => 'publish',
			'post_author' => get_current_user_id(),
		));

		if ($post_id) {
			wp_send_json_success(array(
				'message' => 'Collection added successfully',
				'new_collection_id' => $post_id
			));

		} else {
			wp_send_json_error('Failed to add collection');
		}
	} else {
		wp_send_json_error('User not logged in or missing data');
	}
}

function handle_remove_collection()
{
	if (isset($_POST['collection_id']) && is_user_logged_in()) {
		$collection_id = intval($_POST['collection_id']);

		// Check if the collection belongs to the current user
		$collection = get_post($collection_id);
		if ($collection && $collection->post_author == get_current_user_id()) {
			wp_delete_post($collection_id, true);
			wp_send_json_success('Collection removed successfully');
		} else {
			wp_send_json_error('Collection not found or you do not have permission to delete it');
		}
	} else {
		wp_send_json_error('User not logged in or missing data');
	}
}

add_action('wp_ajax_fetch_user_collections', 'fetch_user_collections');
function fetch_user_collections()
{
	if (is_user_logged_in()) {
		$user_collections = get_posts(array(
			'post_type' => 'collection',
			'author' => get_current_user_id(),
			'posts_per_page' => -1
		));

		if ($user_collections) {
			$collections_data = array();
			foreach ($user_collections as $collection) {
				$collections_data[] = array(
					'ID' => $collection->ID,
					'post_title' => $collection->post_title
				);
			}
			wp_send_json_success($collections_data);
		} else {
			wp_send_json_error('No collections found.');
		}
	} else {
		wp_send_json_error('User not logged in.');
	}
}


// Handle Add Post to Collection AJAX Request
add_action('wp_ajax_add_post_to_collection', 'handle_add_post_to_collection');


function handle_add_post_to_collection()
{
	if (isset($_POST['post_id']) && isset($_POST['collection_id']) && is_user_logged_in()) {
		$post_id = intval($_POST['collection_id']);
		$collection_id = intval($_POST['post_id']);

		// Validate if post and collection exist
		if (get_post($post_id) && get_post($collection_id)) {
			// Add post to the collection (you may need a custom field or taxonomy to manage this)
			$existing_collections = get_post_meta($post_id, '_collections', true);
			if (!$existing_collections) {
				$existing_collections = array();
			}

			if (!in_array($collection_id, $existing_collections)) {
				$existing_collections[] = $collection_id;
				update_post_meta($post_id, '_collections', $existing_collections);
				wp_send_json_success('Post added to collection successfully.');
			} else {
				wp_send_json_error('Post is already in this collection.');
			}
		} else {
			wp_send_json_error('Invalid post or collection.');
		}
	} else {
		wp_send_json_error('User not logged in or missing data.');
	}
}




function handle_remove_post_from_collection()
{
	// Check nonce for security
	// check_ajax_referer('manage_collection_nonce', 'nonce');

	// Get the collection ID and post ID from the AJAX request
	$collection_id = isset($_POST['collection_id']) ? intval($_POST['collection_id']) : 0;
	$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;

	// Verify that both IDs are valid
	if ($collection_id && $post_id) {
		// Get the current collection items
		$collection_items = get_post_meta($collection_id, '_collections', true);
		error_log('collection items: ' . print_r($collection_items, true));

		// Check if the collection items are an array
		if (is_array($collection_items)) {
			// Check if the post is in the collection
			if (in_array($post_id, $collection_items)) {
				// Remove the post ID from the array
				$updated_items = array_diff($collection_items, array($post_id));

				// Update the collection meta
				update_post_meta($collection_id, '_collections', $updated_items);

				// Send success response
				wp_send_json_success(array(
					'message' => 'Post removed from collection.',
					'collection_id' => $collection_id,
					'post_id' => $post_id,
					'remaining_items' => count($updated_items) // Return the number of remaining items in the collection
				));
			} else {
				// Send error response if the post isn't in the collection
				wp_send_json_error(array('message' => 'Post not found in the collection.'));
			}
		} else {
			// Send error response if the collection doesn't have any posts
			wp_send_json_error(array('message' => 'Invalid collection or no posts found.'));
		}
	} else {
		// Send error response if the IDs are invalid
		wp_send_json_error(array('message' => 'Invalid collection or post ID.'));
	}

	// End the AJAX request
	wp_die();
}

// Hook the function into WordPress for AJAX requests
add_action('wp_ajax_remove_post_from_collection', 'handle_remove_post_from_collection');


// render remove post button 
function render_remove_post_from_collection_button($collection_id, $post_id)
{
	// Check if it's a single post of the 'collection' post type
	if (is_singular('collection')) {
		?>
		<button class="remove-post-from-collection-btn" data-collection-id="<?php echo esc_attr($collection_id); ?>"
			data-post-id="<?php echo esc_attr($post_id); ?>">
			<i class="fa-solid fa-file-excel"></i>
		</button>
		<?php
	}
}
//==================================Collections functionality ===================================================================================


// function runOnce() {

// }

// // Example usage: Run this function on theme activation
// add_action('after_theme_switch', 'runOnce');


function custom_search_filter($query)
{
	if (!is_admin() && $query->is_search() && $query->is_main_query()) {
		$query->set('post_type', 'product_images');

		if (!empty($_GET['taxonomy_term'])) {
			$taxonomy_term = sanitize_text_field($_GET['taxonomy_term']);

			if (strpos($taxonomy_term, ':') !== false) {
				list($taxonomy, $term_slug) = explode(':', $taxonomy_term, 2);

				if (taxonomy_exists($taxonomy)) {
					$query->set('tax_query', array(
						array(
							'taxonomy' => $taxonomy,
							'field' => 'slug',
							'terms' => $term_slug,
						),
					));
				}
			}
		}

		// Ensure pagination is working correctly
		$query->set('posts_per_page', -1); // For debugging, retrieve all posts
	}
}
add_action('pre_get_posts', 'custom_search_filter');

function get_images_by_post_type_category_author($post_type, $number_of_posts, $category_name = '', $author = '')
{
	// Set up the query arguments
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => $number_of_posts,
		'post_status' => 'publish',
		'no_found_rows' => true, // optimize performance if pagination is not needed
	);

	// Add the category filter if a category is provided
	if (!empty($category_name)) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category', // Replace 'category' with your custom taxonomy if applicable
				'field' => 'slug',
				'terms' => $category_name,
			),
		);
	}

	// Add the author filter if provided (can be author ID or name)
	if (!empty($author)) {
		// Check if the author is provided as a numeric ID or a string (name)
		if (is_numeric($author)) {
			$args['author'] = intval($author); // Filter by author ID
		} else {
			$author_data = get_user_by('slug', $author);
			if ($author_data) {
				$args['author'] = $author_data->ID; // Filter by author slug
			}
		}
	}

	// Run the query
	$query = new WP_Query($args);

	// Initialize an array to store the image URLs
	$image_urls = array();

	// Loop through the posts
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();

			// Get the post thumbnail (featured image)
			$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

			// Add the image URL to the array
			if ($thumbnail_url) {
				$image_urls[] = $thumbnail_url;
			}
		}
		wp_reset_postdata(); // Reset the global $post variable
	}

	return $image_urls; // Return the array of image URLs
}



// pland table featuers================================================================================



// pland table featuers================================================================================
function enqueue_media_uploader() {
    wp_enqueue_media(); // Enqueue the WordPress media uploader scripts
}
add_action('admin_enqueue_scripts', 'enqueue_media_uploader');
