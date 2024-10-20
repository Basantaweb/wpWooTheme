<?php
/**
 * Template tags for wpWooTheme
 *
 * @package wpWooTheme
 */

// Add custom template tags
add_action( 'init', 'wpwoo_theme_template_tags' );

// Custom template tags
function wpwoo_theme_template_tags() {
    // Add your custom template tags here
    if ( ! function_exists( 'wpwoo_theme_the_title' ) ) {
        function wpwoo_theme_the_title( $before = '', $after = '' ) {
            global $post;

            if ( is_singular() ) {
                $title = get_the_title( $post->ID );
            } elseif ( is_home() ) {
                $title = __( 'Home', 'wpwoo-theme' );
            } elseif ( is_archive() ) {
                $title = get_the_archive_title();
            } elseif ( is_search() ) {
                $title = sprintf( __( 'Search Results for: %s', 'wpwoo-theme' ), get_search_query() );
            } elseif ( is_404() ) {
                $title = __( '404 Not Found', 'wpwoo-theme' );
            } else {
                $title = '';
            }

            echo $before . $title . $after;
        }
    }
}
?>