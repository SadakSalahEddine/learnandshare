<?php
/**
 * leardandshare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package leardandshare
 */

if ( ! function_exists( 'leardandshare_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function leardandshare_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on leardandshare, use a find and replace
		 * to change 'leardandshare' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'leardandshare', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'leardandshare' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'leardandshare_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'leardandshare_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leardandshare_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'leardandshare_content_width', 640 );
}
add_action( 'after_setup_theme', 'leardandshare_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leardandshare_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'leardandshare' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'leardandshare' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'leardandshare_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function leardandshare_scripts() {
	wp_enqueue_style( 'leardandshare-style', get_template_directory_uri().'/css/styles.css' );

        wp_enqueue_style( 'leardandshare-woocommercelayout', get_template_directory_uri().'/css/woocommerce-layout.css' );
        
        wp_enqueue_style( 'leardandshare-smallscreen', get_template_directory_uri().'/css/woocommerce-smallscreen.css' );
        
        wp_enqueue_style( 'leardandshare-woocommerce', get_template_directory_uri().'/css/woocommerce.css' );
        
        wp_enqueue_style( 'leardandshare-colorbox', get_template_directory_uri().'/css/colorbox.css' );
        
        wp_enqueue_style( 'leardandshare-prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css' );
        
        wp_enqueue_style( 'leardandshare-index-css', get_template_directory_uri().'/css/index-css.css' );
        
        wp_enqueue_style( 'leardandshare-index-css1', get_template_directory_uri().'/css/index-css1.css' );
        
        wp_enqueue_style( 'leardandshare-colorbox', get_template_directory_uri().'/css/jquery.selectBox.css' );
        
        wp_enqueue_style( 'leardandshare-woocommerce-wishlist', get_template_directory_uri().'/css/yith-woocommerce-wishlist/style.css' );
        
        wp_enqueue_style( 'leardandshare-font-awesome.min', get_template_directory_uri().'/css/font-awesome.min.css' );
        
        wp_enqueue_style( 'leardandshare-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
        
        wp_enqueue_style( 'leardandshare-material-design-iconic-font', get_template_directory_uri().'/css/material-design-iconic-font.min.css' );
        
        wp_enqueue_style( 'leardandshare-magnific-popup', get_template_directory_uri().'/css/magnific-popup.css' );
        
        wp_enqueue_style( 'leardandshare-animate', get_template_directory_uri().'/css/animate.css' );
        
        wp_enqueue_style( 'leardandshare-slick', get_template_directory_uri().'/css/slick.css' );
        
        wp_enqueue_style( 'leardandshare-carousel', get_template_directory_uri().'/css/owl.carousel.min.css' );
        
        wp_enqueue_style( 'leardandshare-nivo-slider', get_template_directory_uri().'/css/nivo-slider.css' );
        
        wp_enqueue_style( 'leardandshare-nivo-preview', get_template_directory_uri().'/css/nivo-preview.css' );
        
        wp_enqueue_style( 'leardandshare-meanmenu', get_template_directory_uri().'/css/meanmenu.min.css' );
        
        wp_enqueue_style( 'leardandshare-theme-default', get_template_directory_uri().'/css/theme-default.css' );
        
        wp_enqueue_style( 'leardandshare-blog-post', get_template_directory_uri().'/css/blog-post.css' );
        
        wp_enqueue_style( 'leardandshare-theme-style', get_template_directory_uri().'/css/theme-style.css' );
        
        wp_enqueue_style( 'leardandshare-theme-main', get_template_directory_uri().'/css/theme-main.css' );
        
        wp_enqueue_style( 'leardandshare-educat-style', get_template_directory_uri().'/css/educat/style.css' );
        
        wp_enqueue_style( 'leardandshare-educat-style', get_template_directory_uri().'/css/responsive.css' );
        
        wp_enqueue_style( 'leardandshare-jquery-scrollbar', get_template_directory_uri().'/css/jquery.scrollbar.css' );
        
        wp_enqueue_style( 'leardandshare-kingcomposer', get_template_directory_uri().'/css/kingcomposer.min.css' );
        
        wp_enqueue_style( 'leardandshare-kingcomposer-animate', get_template_directory_uri().'/css/kingcomposer/animate.css' );
        
        wp_enqueue_style( 'leardandshare-material-design-iconic-font', get_template_directory_uri().'/css/educat-core/material-design-iconic-font.min.css' );
        
        wp_enqueue_style( 'leardandshare-icons', get_template_directory_uri().'/css/icons.css' );
        
        wp_enqueue_style( 'leardandshare-icons', get_template_directory_uri().'/css/icons.css' );
        
        wp_enqueue_style( 'leardandshare-educat-core-material-design-iconic-font', get_template_directory_uri().'/css/educat-core/material-design-iconic-font.min.css' );
        
        
        
        
	wp_enqueue_script( 'leardandshare-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20151215', true );

	wp_enqueue_script( 'leardandshare-jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-jquery-nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-watch', get_template_directory_uri() . '/js/watch.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-jquery-alert', get_template_directory_uri() . '/js/jquery.alert.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-circle', get_template_directory_uri() . '/js/circle-bar.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-underscore', get_template_directory_uri() . '/js/underscore.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-utils', get_template_directory_uri() . '/js/utils.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-global', get_template_directory_uri() . '/js/global.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-scrollbar', get_template_directory_uri() . '/js/jquery.scrollbar.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-learnpress', get_template_directory_uri() . '/js/learnpress.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-course', get_template_directory_uri() . '/js/course.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-teacher', get_template_directory_uri() . '/js/become-teacher.js', array(), '20151215', true );

        wp_enqueue_script( 'leardandshare-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-popper', get_template_directory_uri() . '/js/popper.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-waypoints', get_template_directory_uri() . '/js/waypoints.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-counterup', get_template_directory_uri() . '/js/jquery.counterup.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-masonry', get_template_directory_uri() . '/js/masonry.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-wow', get_template_directory_uri() . '/js/wow-min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-jquery-meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-retina', get_template_directory_uri() . '/js/retina.min.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-onepage', get_template_directory_uri() . '/js/jquery.onepage.nav.js', array(), '20151215', true );
        
        wp_enqueue_script( 'leardandshare-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
        
}
add_action( 'wp_enqueue_scripts', 'leardandshare_scripts' );



