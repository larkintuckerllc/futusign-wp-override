<?php
/**
 * The common functionality of the plugin.
 *
 * @link       https://bitbucket.org/futusign/futusign-wp-override
 * @since      0.1.0
 *
 * @package    futusign_override
 * @subpackage futusign_override/common
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * The common functionality of the plugin.
 *
 * @package    futusign_override
 * @subpackage futusign_override/common
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Override_Common {
	/**
	 * The override..
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      Futusign_Override_Type    $override    The override.
	 */
	private $override;
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
		$this->load_dependencies();
		$this->override = new Futusign_Override_Type();
	}
	/**
	 * Load the required dependencies for module.
	 *
	 * @since    0.1.0
	 * @access   private
	 */
	private function load_dependencies() {
		require_once plugin_dir_path( __FILE__ ) . 'class-futusign-override-type.php';
	}
	/**
	 * Retrieve the override.
	 *
	 * @since     0.1.0
	 * @return    Futusign_Override_Type    The override functionality.
	 */
	public function get_override() {
		return $this->override;
	}
}
