<?php
/**
 * Custom header functions
 *
 * @package wpWooTheme
 */

// Add custom header actions
add_action( 'wp_head', 'wpwoo_theme_custom_header', 10 );

// Custom header functions
function wpwoo_theme_custom_header() {
    // Add your custom header code here
    echo '<meta name="description" content="Your custom description here">';
}
?>