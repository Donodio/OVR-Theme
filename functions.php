<?php
/**
 * Theme functions.
 *
 * @package OVR_Villages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'OVRV_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function ovrv_setup(): void {
	load_theme_textdomain( 'ovr-villages', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 96,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation', 'ovr-villages' ),
		'footer'  => esc_html__( 'Footer Navigation', 'ovr-villages' ),
	) );
}
add_action( 'after_setup_theme', 'ovrv_setup' );

/**
 * Enqueue assets.
 */
function ovrv_enqueue_assets(): void {
	$tailwind_config = <<<JS
tailwind.config = {
	darkMode: "class",
	theme: {
		extend: {
			colors: {
				"on-surface": "#1b1b20",
				"inverse-primary": "#bdc2ff",
				"error-container": "#ffdad6",
				"outline": "#767682",
				"on-tertiary-container": "#c96758",
				"secondary-fixed": "#c9e6ff",
				"background": "#fbf8ff",
				"muted-text": "#5F6B7A",
				"tertiary-fixed-dim": "#ffb4a7",
				"on-primary-container": "#747dcf",
				"on-secondary-container": "#004667",
				"surface": "#fbf8ff",
				"on-tertiary-fixed-variant": "#7c2d21",
				"on-surface-variant": "#454651",
				"primary-fixed": "#dfe0ff",
				"surface-tint": "#4e57a7",
				"soft-page-white": "#F8FAFC",
				"unavailable-red": "#B3261E",
				"featured-gold": "#DEAF0C",
				"on-tertiary": "#ffffff",
				"primary-container": "#010b62",
				"on-secondary-fixed": "#001e2f",
				"secondary-fixed-dim": "#8bceff",
				"surface-container-high": "#eae7ee",
				"border-gray": "#DBDBDB",
				"outline-variant": "#c6c5d3",
				"surface-variant": "#e4e1e9",
				"tertiary-container": "#400200",
				"secondary": "#006492",
				"success-green": "#2E7D32",
				"surface-bright": "#fbf8ff",
				"error": "#ba1a1a",
				"on-secondary": "#ffffff",
				"ink-text": "#1C2430",
				"on-error": "#ffffff",
				"on-primary-fixed-variant": "#353f8d",
				"on-primary": "#ffffff",
				"surface-container-low": "#f5f2fa",
				"on-background": "#1b1b20",
				"on-tertiary-fixed": "#400200",
				"primary": "#000000",
				"tertiary": "#000000",
				"surface-dim": "#dbd9e0",
				"surface-container-highest": "#e4e1e9",
				"on-primary-fixed": "#010b62",
				"inverse-surface": "#303036",
				"on-error-container": "#93000a",
				"tertiary-fixed": "#ffdad4",
				"secondary-container": "#39b8ff",
				"on-secondary-fixed-variant": "#004b6f",
				"primary-fixed-dim": "#bdc2ff",
				"surface-container-lowest": "#ffffff",
				"surface-container": "#efedf4",
				"inverse-on-surface": "#f2eff7"
			},
			borderRadius: {
				DEFAULT: "0.25rem",
				lg: "0.5rem",
				xl: "0.75rem",
				full: "9999px"
			},
			spacing: {
				"margin-desktop": "1.5rem",
				"sidebar-width": "300px",
				"tap-target-min": "48px",
				"container-max-width": "1440px",
				gutter: "1rem"
			},
			fontFamily: {
				"body-md": [ "Atkinson Hyperlegible Next" ],
				"body-lg": [ "Atkinson Hyperlegible Next" ],
				"card-title": [ "Atkinson Hyperlegible Next" ],
				"headline-lg": [ "Atkinson Hyperlegible Next" ],
				metadata: [ "Atkinson Hyperlegible Next" ],
				"label-md": [ "Atkinson Hyperlegible Next" ],
				"headline-md-mobile": [ "Atkinson Hyperlegible Next" ],
				"headline-md": [ "Atkinson Hyperlegible Next" ],
				"headline-lg-mobile": [ "Atkinson Hyperlegible Next" ]
			},
			fontSize: {
				"body-md": [ "16px", { lineHeight: "1.5", fontWeight: "400" } ],
				"body-lg": [ "18px", { lineHeight: "1.65", fontWeight: "400" } ],
				"card-title": [ "20px", { lineHeight: "1.4", fontWeight: "600" } ],
				"headline-lg": [ "44px", { lineHeight: "1.2", fontWeight: "700" } ],
				metadata: [ "14px", { lineHeight: "1.4", fontWeight: "400" } ],
				"label-md": [ "16px", { lineHeight: "1.2", fontWeight: "600" } ],
				"headline-md-mobile": [ "24px", { lineHeight: "1.3", fontWeight: "600" } ],
				"headline-md": [ "32px", { lineHeight: "1.3", fontWeight: "600" } ],
				"headline-lg-mobile": [ "32px", { lineHeight: "1.2", fontWeight: "700" } ]
			}
		}
	}
};
JS;

	wp_register_script( 'ovrv-tailwind', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false );
	wp_add_inline_script( 'ovrv-tailwind', $tailwind_config, 'before' );
	wp_enqueue_script( 'ovrv-tailwind' );

	wp_enqueue_style( 'ovrv-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );
	wp_enqueue_style( 'ovrv-atkinson-font', 'https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&display=swap', array(), null );
	wp_enqueue_style( 'ovrv-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), OVRV_VERSION );
	wp_enqueue_script( 'ovrv-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), OVRV_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ovrv_enqueue_assets' );

