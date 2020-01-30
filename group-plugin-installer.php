<?php
/**
 * Group Plugin Installer
 *
 * @author  Andy Fragen
 * @license MIT
 * @link    https://github.com/afragen/group-plugin-installer
 * @package group-plugin-installer
 */

/**
 * Plugin Name: Group Plugin Installer
 * Plugin URI: https://github.com/afragen/group-plugin-installer
 * Description: Allows you to easily add a group of plugins to a WordPress installation.
 * Author: Andy Fragen
 * Version: 0.2.4
 * License: MIT
 * Domain Path: /languages
 * Text Domain: group-plugin-installer
 * Network: true
 * Requires at least: 4.7
 * Requires PHP: 5.6
 * GitHub Plugin URI: afragen/group-plugin-installer
 */

require_once __DIR__ . '/vendor/autoload.php';
WP_Dependency_Installer::instance()->run( __DIR__ );
add_filter(
	'wp_dependency_timeout',
	function( $timeout, $source ) {
		$timeout = basename( __DIR__ ) !== $source ? $timeout : 14;
		return $timeout;
	},
	10,
	2
);
