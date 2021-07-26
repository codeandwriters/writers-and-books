<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	if ( ! file_exists( get_template_directory() . '/plugins/bootstrap_5_wp_nav_menu_walker.php' ) ) {
        // File does not exist... return an error.
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // File exists... require it.
        require_once get_template_directory() . '/plugins/bootstrap_5_wp_nav_menu_walker.php';
    }
}
add_action( 'after_setup_theme', 'register_navwalker' );