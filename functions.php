<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');

/**
 * vw-stock-images-pro functions and definitions
 *
 * @package vw-stock-images-pro
 */

if ( ! function_exists( 'vw_stock_images_pro_setup' ) ) :
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
function vw_stock_images_pro_setup() {
	$GLOBALS['content_width'] = apply_filters( 'vw_stock_images_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'vw-stock-images-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-template-functions' );

	add_theme_support( 'custom-logo', array(
		'height'      => 48,
		'width'       => 181,
		'flex-height' => true,
	) );
	add_image_size('vw-stock-images-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'vw-stock-images-pro' ),
		'footer1'   => __( 'Footer Menu1', 'vw-stock-images-pro' ),
		'footer2'   => __( 'Footer Menu2', 'vw-stock-images-pro' ),
) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
}
endif;
add_action( 'after_setup_theme', 'vw_stock_images_pro_setup' );

/* Theme Widgets Setup */
function vw_stock_images_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-stock-images-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-stock-images-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-stock-images-pro' ),
		'description'   => __( 'Appears on page sidebar', 'vw-stock-images-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'vw-stock-images-pro' ),
		'description'   => __( 'Appears on footer', 'vw-stock-images-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'vw-stock-images-pro' ),
		'description'   => __( 'Appears on footer', 'vw-stock-images-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'vw-stock-images-pro' ),
		'description'   => __( 'Appears on footer', 'vw-stock-images-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'vw-stock-images-pro' ),
		'description'   => __( 'Appears on footer', 'vw-stock-images-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_stock_images_pro_widgets_init' );

/* Theme Font URL */
function vw_stock_images_pro_font_url() {
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
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_stock_images_pro_scripts() {
	wp_enqueue_style( 'vw-stock-images-pro-font', vw_stock_images_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'vw-stock-images-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'vw-stock-images-pro-style', 'rtl', 'replace' );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'vw-stock-images-pro-basic-style',$custom_css );

	if(is_rtl()){
	    wp_enqueue_style( 'rtl-style', get_template_directory_uri().'/rtl-style.css',true, null,'all');
	    wp_add_inline_style( 'rtl-style',$custom_css );
	    wp_enqueue_script( 'vw-stock-images-pro-customscripts-rtl', get_template_directory_uri() . '/assets/js/custom-rtl.js', array('jquery'),'', true );
  	}

  	else{
	    // ---------- CSS Enqueue -----------
	    if(is_front_page() || is_home()){
	      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
	      wp_add_inline_style( 'home-page-style',$custom_css );
	    }else{
	      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
	      wp_add_inline_style( 'other-page-style',$custom_css );
	    }
	    if('post' == get_post_type() && is_home()){
	      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
	      wp_add_inline_style( 'other-page-style',$custom_css );
	    }
	    wp_enqueue_style( 'header-footer-style', get_template_directory_uri().'/assets/css/main-css/header-footer.css',true, null,'all' );
	    wp_enqueue_style( 'responsive-style', get_template_directory_uri().'/assets/css/main-css/mobile-main.css',true, null,'screen and (max-width: 3000px) and (min-width: 320px)' );

	    wp_add_inline_style( 'header-footer-style',$custom_css );
	    wp_add_inline_style( 'responsive-media-style',$custom_css );
  	}

  	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
	    wp_enqueue_style( 'amp-style', get_template_directory_uri().'/assets/css/main-css/amp-style.css',true, null,'all' );
	}else{
		wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animate.css' );
		wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
	}

	// wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animate.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'effect', get_template_directory_uri().'/assets/css/effect.css' );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'jquery-ui.min.css', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '',true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'bootstrap-notify-js', get_template_directory_uri() . '/assets/js/bootstrap-notify.min.js', array( 'bootstrap' ) );
	wp_enqueue_script( 'superfsh', get_template_directory_uri() . '/assets/js/jquery.superfish.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js',array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
 //wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);
 // wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ) );
	wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_script('jquery-ui-touch-punch', get_template_directory_uri() . '/assets/js/jquery.ui.touch-punch.min.js', array('jquery-ui-slider'), '0.2.3', true);


	global $wpdb;
	$product_price_max_query = "SELECT MAX( CAST( $wpdb->postmeta.meta_value AS SIGNED ) ) AS product_max_price FROM $wpdb->postmeta WHERE meta_key='%s'";
	$product_meta_price_max = $wpdb->get_row( $wpdb->prepare( $product_price_max_query, '_price' ) );

	wp_register_script( 'vw-stock-images-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );

	$get_woocommerce_currency_symbol = '';
	if (class_exists('WooCommerce')) {
		$get_woocommerce_currency_symbol = get_woocommerce_currency_symbol();
	}

	$vw_stock_images_pro_customscripts_obj = array(
		'is_home' =>  ( is_home() || is_front_page() ),
		'home_url' =>  home_url(),
		'is_rtl' => is_rtl(),
		'product_max_price'  =>  $product_meta_price_max->product_max_price,
		'get_woocommerce_currency_symbol' => $get_woocommerce_currency_symbol,
		'ajaxurl'				=>	admin_url('admin-ajax.php')
	);

	wp_localize_script('vw-stock-images-pro-customscripts', 'vw_stock_images_pro_customscripts_obj' ,$vw_stock_images_pro_customscripts_obj);

	wp_enqueue_script( 'vw-stock-images-pro-customscripts' );
// }



	wp_enqueue_script( 'vw-stock-images-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'', true );
	 wp_enqueue_script( 'animation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('vw-stock-images-pro-ie', get_template_directory_uri().'/assets/css/ie.css', array('vw-stock-images-pro-basic-style'));
	wp_style_add_data( 'vw-stock-images-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'vw_stock_images_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customize/customizer.php' );
/* wc-templatefunction */
// require get_parent_theme_file_path( 'inc/wc-template-functions.php' );
// require 'inc/wc-template-functions.php';
 //about us
require get_template_directory() . '/inc/widget/about-us-widget.php';
// Contact-Widgets
require get_parent_theme_file_path( 'inc/widget/contact-widget.php');
// social-widgets
require get_parent_theme_file_path( 'inc/widget/socail-widget.php');





/**
 * Functions which enhance the theme by hooking into WordPress
*/
require get_parent_theme_file_path( 'inc/custom-functions.php');

require get_template_directory().'/inc/verify_theme_version.php';
/* Theme Wizard */
require get_template_directory() . '/theme-wizard/config.php';
require get_parent_theme_file_path('/theme-wizard/plugin-activation.php' );
/* URL DEFINES */
require get_parent_theme_file_path('custom-filter.php' );
define('vw_stock_images_pro_SITE_URL','https://www.vwthemes.com/');
/* Theme Credit link */
function vw_stock_images_pro_credit_link() {
	echo esc_html_e('','vw-furniture-pro'). "<a href=".esc_url(vw_stock_images_pro_SITE_URL)." target='_blank'> Pest Control WordPress Theme. </a>";
}
/*Radio Button sanitization*/
function vw_stock_images_pro_sanitize_choices( $input, $setting ) {
	global $wp_customize;
	$control = $wp_customize->get_control( $setting->id );
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}



/* Excerpt Read more overwrite */
function vw_stock_images_pro_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-stock-images-pro' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'vw_stock_images_pro_excerpt_more' );

define('vw_stock_images_pro_THEME_DOC','https://www.vwthemesdemo.com/docs/vw-stock-images-pro/');
define('vw_stock_images_pro_SUPPORT','https://www.vwthemes.com/support/vw-theme/');
define('vw_stock_images_pro_FAQ','https://www.vwthemes.com/faqs/');
define('vw_stock_images_pro_CONTACT','https://www.vwthemes.com/contact/');
define('vw_stock_images_pro_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/');

define('vw_stock_images_pro_banner_link','https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/');
define('vw_stock_images_pro_social_media_plugin','https://www.vwthemes.com/free-plugin/vw-social-media/');
define('vw_stock_images_pro_preloader_plugin','https://www.vwthemes.com/free-plugin/vw-preloader/');
define('vw_stock_images_pro_accordion_plugin','https://www.vwthemes.com/free-plugin/vw-accordion/');
define('vw_stock_images_pro_gallery_link','https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/');
define('vw_stock_images_pro_footer_link','https://www.youtube.com/watch?v=7BvTpLh-RB8');

define( 'IBTANA_THEME_LICENCE_ENDPOINT', 'https://preview.vwthemesdemo.com/old_website/wp-json/ibtana-licence/v2/' );
define( 'SHOPIFY_THEME_LICENCE_ENDPOINT', 'https://license.vwthemes.com/api/public/' );

//-------- Bundle Notice ---------
add_action( 'admin_notices', 'vw_theme_bundle_admin_notice' );
function vw_theme_bundle_admin_notice() {
       ?>
    <div class="notice bundle-notice is-dismissible">
      <div class="theme_box">
        <h3><?php echo esc_html('Thank You For Purchasing VW Stock Images Theme','vw-stock-images-pro'); ?></h3>
        <p><?php echo esc_html('Get our all','sirat-pro'); ?>
        <strong><?php echo esc_html('120+ Premium Themes','vw-stock-images-pro'); ?></strong>
        <?php echo esc_html('worth $7021 With Our','vw-stock-images-pro'); ?>
        <strong><?php echo esc_html('WP Theme Bundle','vw-stock-images-pro'); ?></strong>
        <?php echo esc_html('in just $89.','vw-stock-images-pro'); ?></p>

      </div>
      <div class="bubdle_button">
        <a href="https://www.vwthemes.com/premium/all-themes/" class="button button-primary button-hero" target="_blank" rel="noopener"><?php echo esc_html('Get Bundle at $89','vw-stock-images-pro'); ?></a>
      </div>
    </div>
   <?php
}

add_action('switch_theme', 'vw_stock_images_pro_deactivate');
function vw_stock_images_pro_deactivate() {
  ThemeWhizzie::remove_the_theme_key();
  ThemeWhizzie::set_the_validation_status('false');
}

define('CUSTOM_TEXT_DOMAIN', 'vw-stock-images-pro');
add_filter( 'woocommerce_add_to_cart_fragments', 'vw_stock_images_pro_wc_refresh_mini_cart_count');
function vw_stock_images_pro_wc_refresh_mini_cart_count( $fragments ) {
  ob_start();
  $items_count = WC()->cart->get_cart_contents_count();
  ?>
    <span class="cart-value count"><?php echo $items_count ? '('.$items_count.')' : '(0)'; ?></span>
  <?php
  $fragments['.cart-value'] = ob_get_clean();
  return $fragments;
}

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
  function loop_columns() {
    return 3; // 3 products per row
  }
}
// Remove default WC image sizes
function remove_wc_image_sizes() {
    remove_image_size( 'woocommerce_thumbnail' );
    remove_image_size( 'woocommerce_single' );
    remove_image_size( 'woocommerce_gallery_thumbnail' );
    remove_image_size( 'shop_thumbnail' );
}
add_action('init', 'remove_wc_image_sizes');

add_filter( 'woocommerce_gallery_thumbnail_size', function( $size ) {
return 'full';
});

// add_action('wp_footer', 'single_added_to_cart_event');

function aw_include_script() {

	if ( ! did_action( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
	}

		wp_enqueue_script( 'awscript', get_stylesheet_directory_uri() . '/assets/js/admin_script.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'aw_include_script' );


function single_added_to_cart_event()
{
    if( isset($_POST['add-to-cart']) && isset($_POST['quantity']) ) {
        // Get added to cart product ID (or variation ID) and quantity (if needed)
        $quantity   = $_POST['quantity'];
        $product_id = isset($_POST['variation_id']) ? $_POST['variation_id'] : $_POST['add-to-cart'];

        // JS code goes here below
        ?>
        <script>
        jQuery(function($){
            alert('Product added to cart');
        });
        </script>
        <?php
    }
}
// buy now button
function buy_now_submit_form() {
 ?>
  <script>
      jQuery(document).ready(function(){
          // listen if someone clicks 'Buy Now' button
          jQuery('#buy_now_button').click(function(){
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
function redirect_to_checkout($redirect_url) {
  if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
     global $woocommerce;
     $redirect_url = wc_get_checkout_url();
  }
  return $redirect_url;
}

add_action('wp_ajax_get_wishlist_count', 'get_wishlist_count');
add_action('wp_ajax_nopriv_get_wishlist_count', 'get_wishlist_count');
function get_wishlist_count() {
    $wishlist_count = YITH_WCWL()->count_products();
    $resp = array(
        "wishlist_count" => '(' .$wishlist_count.')' ,
        "status" => 200
    );
    wp_send_json($resp);
    exit;
}

//additional info tab
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['additional_information']['title'] = __( 'Additional Information' );

	$tabs['description']['priority'] = 5; // Description first
	$tabs['reviews']['priority'] = 15;  //  Reviews third
	$tabs['additional_information']['priority'] = 10;

	$tabs['additional_information']['title'] = __( 'Additional Information' );
	$tabs['additional_information']['callback'] = 'woocommerce_additional_information_callback';

	$tabs['description']['title'] = __( 'Description' );

 // Rename the additional information tab
   return $tabs;
}

function woocommerce_additional_information_callback(){
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

function custom_comment_form_defaults( $defaults ) {
    $defaults['title_reply'] = 'Leave a Comment';
	$defaults['label_submit'] = 'Leave a comment';
    return $defaults;
}

add_filter( 'comment_form_defaults', 'custom_comment_form_defaults' );
function average_rating() {
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
		  return (round(($average_rating/$counter)*2,0)/2);
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

function get_page_id_by_title_global($pagename){
	$args = array(
		'post_type' => 'page',
		'posts_per_page' => 1,
		'title' => $pagename
	);
	$query = new WP_Query( $args );

	$page_id = '1';
	if (isset($query->post->ID)) {
		$page_id = $query->post->ID;
	}

	return $page_id;
}


add_filter( 'loop_shop_per_page', 'bbloomer_redefine_products_per_page', 9999 );

function bbloomer_redefine_products_per_page( $per_page ) {
   $per_page = 9;
   return $per_page;
}


function vw_pest_control_pro_professional_services_section_shortcode() {
	ob_start();
	get_template_part( 'template-parts/home/section-professional-services' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('section-professional-services', 'vw_pest_control_pro_professional_services_section_shortcode');

function vw_pest_control_pro_professional_appoinment_section_shortcode() {
	ob_start();
	get_template_part( 'template-parts/home/section-our-newsletter' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('section-appoinment-sec', 'vw_pest_control_pro_professional_appoinment_section_shortcode');
