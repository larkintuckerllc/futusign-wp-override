<?php
/**
 * Define the override functionality
 *
 * @link       https://github.com/larkintuckerllc
 * @since      0.3.0
 *
 * @package    futusign_override
 * @subpackage futusign_override/common
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Define the override functionality.
 *
 * @since      0.1.0
 * @package    futusign_override
 * @subpackage futusign_override/common
 * @author     John Tucker <john@larkintuckerllc.com>
 */
class Futusign_Override_Type {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 */
	public function __construct() {
	}
	/**
	 * Register the override taxonomy.
	 *
	 * @since    0.1.0
	 */
	public function register() {
		$object_types = array( 'futusign_slide_deck', 'futusign_screen', 'futusign_image' );
		/*
		if (class_exists( 'Futusign_Web' )) {
			array_push( $object_types, 'futusign_web' );
		}
		if (class_exists( 'Futusign_Youtube' )) {
			array_push( $object_types, 'futusign_yt_video' );
		}
		if (class_exists( 'Futusign_Layer' )) {
			array_push( $object_types, 'futusign_layer' );
		}
		*/
		$labels = array(
			 'name' => __( 'Overrides', 'futusign_override' ),
			 'singular_name' => __( 'Override', 'futusign_override' ),
			 'all_items' => __( 'All Overrides', 'futusign_override' ),
			 'edit_item' =>  __( 'Edit Override' , 'futusign_override' ),
			 'view_item' => __('View Override', 'futusign_override'),
			 'update_item' => __('Update Override', 'futusign_override'),
			 'add_new_item' => __( 'Add New Override' , 'futusign_override' ),
			 'new_item_name' => __( 'New Override' , 'futusign_override' ),
			 'search_items' => __( 'Search Overrides', 'futusign_override' ),
			 'popular_items' => __( 'Popular Overrides', 'futusign_override' ),
			 'add_or_remove_items' => __( 'Add or remove playlists', 'futusign_override' ),
			 'choose_from_most_used' => __( 'Choose from the most used playlists.', 'futusign_override' ),
			 'not_found' =>  __('No Overrides found', 'futusign_override'),
		);
		register_taxonomy(
			'futusign_override',
			$object_types,
			array(
				'labels' => $labels,
				'rewrite' => false,
				'query_var' => true,
				'public' => true,
				'publicly_queryable' => false,
				'hierarchical' => true,
				'show_in_rest' => true,
				'rest_base' => 'fs-overrides',
			)
		);
	}
}
