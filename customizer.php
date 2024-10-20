<?php
/**
 * Customizer functions
 *
 * @package wpWooTheme
 */

// Add customizer settings
add_action( 'customize_register', 'wpwoo_theme_customize_register' );

// Customizer settings
function wpwoo_theme_customize_register( $wp_customize ) {
    // Add your customizer settings here
    $wp_customize->add_section(
        'wpwoo_theme_customizer_section',
        array(
            'title' => __( 'wpWooTheme Customizer Settings', 'wpwoo-theme' ),
            'description' => __( 'Customize your wpWooTheme theme.', 'wpwoo-theme' ),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'wpwoo_theme_customizer_setting',
        array(
            'default' => '',
            'transport' => 'postMessage',
        )
    );

    $wp_customize->add_control(
        'wpwoo_theme_customizer_setting',
        array(
            'label' => __( 'Custom Setting', 'wpwoo-theme' ),
            'section' => 'wpwoo_theme_customizer_section',
            'type' => 'text',
        )
    );
}

// Add customizer preview scripts
add_action( 'customize_preview_init', 'wpwoo_theme_customize_preview_init' );

// Customizer preview scripts
function wpwoo_theme_customize_preview_init() {
    wp_enqueue_script(
        'wpwoo-theme-customizer-preview',
        get_stylesheet_directory_uri() . '/assets/js/customizer-preview.js',
        array( 'customize-preview', 'jquery' ),
        '1.0',
        true
    );
}
?>