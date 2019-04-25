<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://naveenkharwar.com
 * @since      1.0.0
 *
 * @package    Tabut_Companion
 * @subpackage Tabut_Companion/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Tabut_Companion
 * @subpackage Tabut_Companion/includes
 * @author     Naveen Kharwar <naveen919827@gmail.com>
 */
class Tabut_Companion_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tabut-companion',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
