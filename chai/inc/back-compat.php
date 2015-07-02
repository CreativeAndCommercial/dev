<?php
/**
 * Chai back compat functionality
 *
 * Prevents Chai from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible beyond that
 * and relies on many newer functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Chai
 * @since Chai 1.0
 */

/**
 * Prevent switching to Chai on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Chai 1.0
 */
function chai_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'chai_upgrade_notice' );
}
add_action( 'after_switch_theme', 'chai_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Chai on WordPress versions prior to 3.6.
 *
 * @since Chai 1.0
 */
function chai_upgrade_notice() {
	$message = sprintf( __( 'Chai requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'chai' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Chai 1.0
 */
function chai_customize() {
	wp_die( sprintf( __( 'Chai requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'chai' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'chai_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Chai 1.0
 */
function chai_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Chai requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'chai' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'chai_preview' );
