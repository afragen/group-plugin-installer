<?php
/**
 * Plugin Name: Group Plugin Installer
 * Plugin URI: https://github.com/afragen/group-plugin-installer
 * Description: Allows you to easily add a group of plugins to a WordPress installation.
 * Author: Andy Fragen
 * License: MIT
 * Requires WP: 4.7
 * Requires PHP: 5.6
 * GitHub Plugin URI: afragen/group-plugin-installer
 */

require_once __DIR__ . '/vendor/autoload.php';
WP_Dependency_Installer::instance()->run( __DIR__ );
add_filter(
	'wp_dependency_timeout',
	function( $timeout, $source ) {
		$timeout = $source !== basename( __DIR__ ) ? $timeout : 14;
		return $timeout;
	},
	10,
	2
);
