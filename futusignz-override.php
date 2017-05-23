<?php
/**
 * The plugin bootstrap file
 *
 * @link             https://bitbucket.org/futusign/futusign-wp-override
 * @since            0.1.0
 * @package          futusign_override
 * @wordpress-plugin
 * Plugin Name:      futusign Override
 * Plugin URI:       https://www.futusign.com
 * Description:      Add futusign Override feature
 * Version:          0.3.0
 * Author:           John Tucker
 * Author URI:       https://github.com/larkintuckerllc
 * License:          Custom
 * License URI:      https://www.futusign.com/license
 * Text Domain:      futusign-override
 * Domain Path:      /languages
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
//Use version 3.1 of the update checker.
require 'plugin-update-checker/plugin-update-checker.php';
$MyUpdateChecker = new PluginUpdateChecker_3_1 (
	'http://futusign-wordpress.s3-website-us-east-1.amazonaws.com/futusignz-override.json',
	__FILE__
);
function activate_futusign_override() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-futusign-override-activator.php';
	Futusign_Override_Activator::activate();
}
function deactivate_futusign_override() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-futusign-override-deactivator.php';
	Futusign_Override_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_futusign_override' );
register_deactivation_hook( __FILE__, 'deactivate_futusign_override' );
require_once plugin_dir_path( __FILE__ ) . 'includes/class-futusign-override.php';
/**
 * Begins execution of the plugin.
 *
 * @since    0.1.0
 */
function run_futusign_override() {
	$plugin = new Futusign_Override();
	$plugin->run();
}
run_futusign_override();
