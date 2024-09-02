<?php
/**
 * vw-stock-images-pro Theme Customizer
 *
 * @package vw-stock-images-pro
 */
/**
 * Loads custom control for layout settings
 */
function vw_stock_images_pro_custom_controls() {
    require_once get_template_directory() . '/inc/customize/controls/admin/customize-texteditor-control.php';
     require_once get_template_directory() . '/inc/customize/controls/custom-controls.php';
     require_once get_template_directory() . '/inc/customize/controls/button-controls.php';

     // Inlcude the Alpha Color Picker control file.
     require_once get_template_directory() . '/inc/customize/controls/alpha-color-picker.php';
     get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
     get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';

}
add_action( 'customize_register', 'vw_stock_images_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_stock_images_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ) );

    $wp_customize->add_setting('vw_stock_images_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','vw-stock-images-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('vw_stock_images_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_stock_images_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','vw-stock-images-pro'),
        'section' => 'title_tagline',
    ));
    //add home page setting pannel
    $wp_customize->add_panel( 'vw_stock_images_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'vw-stock-images-pro' ),
        'description' => __( 'Description of what this panel does.', 'vw-stock-images-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'vw-stock-images-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-stock-images-pro' ),
        'Acme' => __( 'Acme', 'vw-stock-images-pro' ),
        'Anton' => __( 'Anton', 'vw-stock-images-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-stock-images-pro' ),
        'Arimo' => __( 'Arimo', 'vw-stock-images-pro' ),
        'Arsenal' => __( 'Arsenal', 'vw-stock-images-pro' ),
        'Arvo' => __( 'Arvo', 'vw-stock-images-pro' ),
        'Alegreya' => __( 'Alegreya', 'vw-stock-images-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-stock-images-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-stock-images-pro' ),
        'Bangers' => __( 'Bangers', 'vw-stock-images-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-stock-images-pro' ),
        'Bad Script' => __( 'Bad Script', 'vw-stock-images-pro' ),
        'Bitter' => __( 'Bitter', 'vw-stock-images-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-stock-images-pro' ),
        'BenchNine' => __( 'BenchNine', 'vw-stock-images-pro' ),
        'Cabin' => __( 'Cabin', 'vw-stock-images-pro' ),
        'Cardo' => __( 'Cardo', 'vw-stock-images-pro' ),
        'Courgette' => __( 'Courgette', 'vw-stock-images-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-stock-images-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-stock-images-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-stock-images-pro' ),
        'Cuprum' => __( 'Cuprum', 'vw-stock-images-pro' ),
        'Cookie' => __( 'Cookie', 'vw-stock-images-pro' ),
        'Chewy' => __( 'Chewy', 'vw-stock-images-pro' ),
        'Days One' => __( 'Days One', 'vw-stock-images-pro' ),
        'Dosis' => __( 'Dosis', 'vw-stock-images-pro' ),
        'Economica' => __( 'Economica', 'vw-stock-images-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-stock-images-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-stock-images-pro' ),
        'Francois One' => __( 'Francois One', 'vw-stock-images-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-stock-images-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-stock-images-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-stock-images-pro' ),
        'Handlee' => __( 'Handlee', 'vw-stock-images-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-stock-images-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-stock-images-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-stock-images-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-stock-images-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-stock-images-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-stock-images-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-stock-images-pro' ),
        'Kanit' => __( 'Kanit', 'vw-stock-images-pro' ),
        'Lobster' => __( 'Lobster', 'vw-stock-images-pro' ),
        'Lato' => __( 'Lato', 'vw-stock-images-pro' ),
        'Lora' => __( 'Lora', 'vw-stock-images-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-stock-images-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-stock-images-pro' ),
        'Merriweather' => __( 'Merriweather', 'vw-stock-images-pro' ),
        'Monda' => __( 'Monda', 'vw-stock-images-pro' ),
        'Montserrat' => __( 'Montserrat', 'vw-stock-images-pro' ),
        'Muli' => __( 'Muli', 'vw-stock-images-pro' ),
        'Marck Script' => __( 'Marck Script', 'vw-stock-images-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-stock-images-pro' ),
        'Open Sans' => __( 'Open Sans', 'vw-stock-images-pro' ),
        'Overpass' => __( 'Overpass', 'vw-stock-images-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-stock-images-pro' ),
        'Oxygen' => __( 'Oxygen', 'vw-stock-images-pro' ),
        'Orbitron' => __( 'Orbitron', 'vw-stock-images-pro' ),
        'Patua One' => __( 'Patua One', 'vw-stock-images-pro' ),
        'Pacifico' => __( 'Pacifico', 'vw-stock-images-pro' ),
        'Padauk' => __( 'Padauk', 'vw-stock-images-pro' ),
        'Playball' => __( 'Playball', 'vw-stock-images-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-stock-images-pro' ),
        'PT Sans' => __( 'PT Sans', 'vw-stock-images-pro' ),
        'Philosopher' => __( 'Philosopher', 'vw-stock-images-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-stock-images-pro' ),
        'Poiret One' => __( 'Poiret One', 'vw-stock-images-pro' ),
        'Quicksand' => __( 'Quicksand', 'vw-stock-images-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-stock-images-pro' ),
        'Raleway' => __( 'Raleway', 'vw-stock-images-pro' ),
        'Rubik' => __( 'Rubik', 'vw-stock-images-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-stock-images-pro' ),
        'Russo One' => __( 'Russo One', 'vw-stock-images-pro' ),
        'Righteous' => __( 'Righteous', 'vw-stock-images-pro' ),
        'Slabo' => __( 'Slabo', 'vw-stock-images-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-stock-images-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-stock-images-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-stock-images-pro' ),
        'Sacramento' => __( 'Sacramento', 'vw-stock-images-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-stock-images-pro' ),
        'Tangerine' => __( 'Tangerine', 'vw-stock-images-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-stock-images-pro' ),
        'VT323' => __( 'VT323', 'vw-stock-images-pro' ),
        'Varela Round' => __( 'Varela Round', 'vw-stock-images-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-stock-images-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-stock-images-pro' ),
        'Volkhov' => __( 'Volkhov', 'vw-stock-images-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-stock-images-pro' )
    );
    require_once get_template_directory() . '/inc/customize/controls/slider-line-control/slider-line-control.php';
    require_once get_template_directory() . '/inc/customize/controls/social-icons/social-icon-picker.php';

    require_once get_template_directory() . '/inc/customize/controls/customizer-text-radio-button/class/customizer-text-radio-button.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-seperator/class/customizer-seperator.php';
     require_once get_template_directory() . '/inc/customize/controls/customizer-notice/class/customizer-notice.php';

    require_once get_template_directory() . '/inc/customize/controls/customize-repeater/customize-repeater.php';

   if ( (ThemeWhizzie::get_the_validation_status() === 'true') && (ThemeWhizzie::get_the_suspension_status() == 'false') ) {
    require_once get_template_directory() . '/inc/customize/sections/customizer-custom-variables.php';
    // require_once get_template_directory() . '/inc/customize/sections/customizer-part-social-icons.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-header.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-slide.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-home.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-footer.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-other-page.php';

  }
}
add_action( 'customize_register', 'vw_stock_images_pro_customize_register' );
//Integer
function vw_stock_images_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/* Logo Resizer */
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_stock_images_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
         add_action( 'customize_register', array( $this, 'bundle' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_stock_images_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_stock_images_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'vw-stock-images-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'vw-stock-images-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority' =>1,
                )
            )
        );
    }

     public function bundle( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_stock_images_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_stock_images_pro_customize_reviews_and_testimonials(
                $manager,
                'example_2',
                array(
                    'title'    => esc_html__( 'Theme Bundle', 'vw-stock-images-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'vw-stock-images-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium/theme-bundle/',
                    'priority' =>2,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'vw-stock-images-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
        wp_enqueue_style( 'vw-stock-images-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
    }
}
// Doing this customizer thang!
vw_stock_images_pro_customize::get_instance();
