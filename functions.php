<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */

add_filter('hello_elementor_enqueue_style', '__return_false'); // Deaktiviert style.min.css
#add_filter('hello_elementor_enqueue_theme_style', '__return_false'); // Deaktiviert theme.min.css
#add_filter('hello_elementor_enqueue_header_footer', '__return_false'); // Deaktiviert header-footer.min.css


function hello_elementor_child_scripts_styles() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[], // Keine Abhängigkeiten, da Parent-Styles entfernt wurden
		'1.0' // Version des Child-Stylesheets
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles');


