<?php
if ( ! function_exists( 'digitalmarketingagency_setup' ) ) :
function digitalmarketingagency_setup() {

// Root path/URI.
define( 'DIGITALMARKETINGAGENCY_PARENT_DIR', get_template_directory() );
define( 'DIGITALMARKETINGAGENCY_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'DIGITALMARKETINGAGENCY_PARENT_INC_DIR', DIGITALMARKETINGAGENCY_PARENT_DIR . '/inc');
define( 'DIGITALMARKETINGAGENCY_PARENT_INC_URI', DIGITALMARKETINGAGENCY_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'digital-marketing-agency' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'digital-marketing-agency' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', digitalmarketingagency_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'digitalmarketingagency_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'digitalmarketingagency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function digitalmarketingagency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'digitalmarketingagency_content_width', 1170 );
}
add_action( 'after_setup_theme', 'digitalmarketingagency_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function digitalmarketingagency_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'digital-marketing-agency' ),
		'id' => 'digitalmarketingagency-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'digital-marketing-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'digital-marketing-agency' ),
		'id' => 'digitalmarketingagency-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'digital-marketing-agency' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'digital-marketing-agency' ),
		'id' => 'digitalmarketingagency-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'digital-marketing-agency' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'digitalmarketingagency_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/digitalmarketingagency-customizer.php';
 
require_once get_template_directory() . '/inc/tab-control.php';



// for header
function digitalmarketingagency_header_reset_settings() {
    remove_theme_mod('hide_show_sticky');
    remove_theme_mod('topheader_btntxt');
    remove_theme_mod('topheader_btnlink');
    remove_theme_mod('topheader_menucolor');
    remove_theme_mod('topheader_menuhovercolor');
    remove_theme_mod('topheader_submenucolor');
    remove_theme_mod('topheader_submenubgcolor');
    remove_theme_mod('topheader_submenuhovercolor');
    remove_theme_mod('topheader_submenubghovercolor');
    remove_theme_mod('topheader_btnlinktextcolor');
    remove_theme_mod('topheader_btngradientcolor1');
    remove_theme_mod('topheader_btngradientcolor2');
    remove_theme_mod('topheader_btnhovercolor');
    remove_theme_mod('topheader_stickybgcolor');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_digitalmarketingagency_header_reset_settings', 'digitalmarketingagency_header_reset_settings' );


// for slider
function digitalmarketingagency_slider_reset_settings() {
    remove_theme_mod('slider1');
    remove_theme_mod('slider2');
    remove_theme_mod('slider3');
    remove_theme_mod('slider4');
    remove_theme_mod('slider5');
    remove_theme_mod('slider6');
    remove_theme_mod('slider_leftboxbgcolor1');
    remove_theme_mod('slider_leftboxbgcolor2');
    remove_theme_mod('slider_titlecolor');
    remove_theme_mod('slider_descriptioncolor');
    remove_theme_mod('slider_buttonbgcolor');
    remove_theme_mod('slider_buttontextcolor');
    remove_theme_mod('slider_buttonbghovercolor');
    remove_theme_mod('slider_buttontexthovercolor');
    remove_theme_mod('slider_arrowscolor');
    remove_theme_mod('slider_arrowshovercolor');
    remove_theme_mod('slider_arrowsbgcolor');
    remove_theme_mod('slider_arrowsbghovercolor');
    remove_theme_mod('digitalmarketingagency_slider_section_width');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_digitalmarketingagency_slider_reset_settings', 'digitalmarketingagency_slider_reset_settings' );


// for Service
function digitalmarketingagency_Service_reset_settings() {
    remove_theme_mod('service_disable_section');
    remove_theme_mod('Service1');
    remove_theme_mod('service_icon1');
    remove_theme_mod('Service2');
    remove_theme_mod('service_icon2');
    remove_theme_mod('Service3');
    remove_theme_mod('service_icon3');
    remove_theme_mod('Service4');
    remove_theme_mod('service_icon4');
    remove_theme_mod('Service5');
    remove_theme_mod('service_icon5');
    remove_theme_mod('Service6');
    remove_theme_mod('service_icon6');
    remove_theme_mod('service_titlecolor');
    remove_theme_mod('service_descriptioncolor');
    remove_theme_mod('service_boxbgcolor');
    remove_theme_mod('service_iconbgicon1color');
    remove_theme_mod('service_iconbg2color');
    remove_theme_mod('service_iconbghovercolor');
    remove_theme_mod('service_iconcolor');
    remove_theme_mod('service_boxtitlecolorcolor');
    remove_theme_mod('service_boxdescriptioncolorcolor');
    remove_theme_mod('service_buttonbgcolor');
    remove_theme_mod('service_buttontextcolor');
    remove_theme_mod('service_buttonhovercolor');
    remove_theme_mod('service_buttontexthovercolor');
    remove_theme_mod('service_buttoniconcolor');
    remove_theme_mod('service_buttoniconbgcolor');
    remove_theme_mod('digitalmarketingagency_service_section_width');
    remove_theme_mod('digitalmarketingagency_service_top_padding');
    remove_theme_mod('digitalmarketingagency_service_bottom_padding');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_digitalmarketingagency_Service_reset_settings', 'digitalmarketingagency_Service_reset_settings' );


// for blog
function digitalmarketingagency_blog_reset_settings() {
    remove_theme_mod('blog_disable_section');
    remove_theme_mod('blog_section_heading');
    remove_theme_mod('blog_section_subheading');
    remove_theme_mod('blog_headingcolor');
    remove_theme_mod('blog_subheadingcolor');
    remove_theme_mod('blog_subboxbgcolor');
    remove_theme_mod('blog_datecolor');
    remove_theme_mod('blog_datebg1color');
    remove_theme_mod('blog_datebg2color');
    remove_theme_mod('blog_titlecolor');
    remove_theme_mod('blog_titlehovercolor');
    remove_theme_mod('blog_descriptioncolor');
    remove_theme_mod('blog_commentcolor');
    remove_theme_mod('blog_commentsbordercolor');
    remove_theme_mod('digitalmarketingagency_blog_section_width');
    remove_theme_mod('digitalmarketingagency_blog_top_padding');
    remove_theme_mod('digitalmarketingagency_blog_bottom_padding');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_digitalmarketingagency_blog_reset_settings', 'digitalmarketingagency_blog_reset_settings' );



add_filter( 'nav_menu_link_attributes', 'digitalmarketingagency_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function digitalmarketingagency_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

