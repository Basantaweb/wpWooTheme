<?php
/*
Theme Name: wpWooTheme
Theme URI: https://example.com/wpWooTheme
Description: A custom theme for WooCommerce.
Version: 1.0
Author: Your Name
Author URI: https://example.com
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: woocommerce, two-columns, right-sidebar, custom-menu, custom-colors, custom-header, custom-background, threaded-comments, sticky-post, translation-ready
Text Domain: wpWooTheme
*/

// Enqueue WooCommerce styles
add_action( 'wp_enqueue_scripts', 'wpwoo_theme_enqueue_styles', 20 );
function wpwoo_theme_enqueue_styles() {
    wp_enqueue_style( 'woocommerce-style', get_stylesheet_directory_uri() . '/woocommerce/woocommerce-layout.css' );
    wp_enqueue_style( 'woocommerce-general-style', get_stylesheet_directory_uri() . '/woocommerce/woocommerce.css' );
}

// Include WooCommerce template hooks and functions
require get_template_directory() . '/woocommerce/woocommerce.php';

// Add theme support for WooCommerce
add_action( 'after_setup_theme', 'wpwoo_theme_setup' );
function wpwoo_theme_setup() {
    add_theme_support( 'woocommerce' );
}

// Add custom WooCommerce styles
add_action( 'wp_enqueue_scripts', 'wpwoo_theme_enqueue_custom_styles', 30 );
function wpwoo_theme_enqueue_custom_styles() {
    wp_enqueue_style( 'wpwoo-theme-custom-styles', get_stylesheet_directory_uri() . '/assets/css/main.min.css' );
}

// Add custom WooCommerce scripts
add_action( 'wp_enqueue_scripts', 'wpwoo_theme_enqueue_custom_scripts', 30 );
function wpwoo_theme_enqueue_custom_scripts() {
    wp_enqueue_script( 'wpwoo-theme-custom-scripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array( 'jquery' ), '1.0', true );
}
?>