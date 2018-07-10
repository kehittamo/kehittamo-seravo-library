<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://namia.io
 * @since      1.0.0
 *
 * @package    Kehittamo_Seravo_Library
 * @subpackage Kehittamo_Seravo_Library/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Kehittamo_Seravo_Library
 * @subpackage Kehittamo_Seravo_Library/includes
 * @author     Alvar Hyvönen <alvar@namia.io>
 */
class Kehittamo_Seravo_Library_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'kehittamo-seravo-library',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
