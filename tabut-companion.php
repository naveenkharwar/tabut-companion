<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://naveenkharwar.com
 * @since             1.0.0
 * @package           Tabut_Companion
 *
 * @wordpress-plugin
 * Plugin Name:       Tabut Companion
 * Plugin URI:        https://naveenkharwar/doc/tabut
 * Description:       This plugin is developed for Tabut theme. This plugin creates the additional sections on the front page in Tabut theme .Tabut Companion is a plugin creation to enhance the functionality of Tabut Theme.
 * Version:           1.0.0
 * Author:            Naveen Kharwar
 * Author URI:        https://naveenkharwar.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tabut-companion
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TABUT_COMPANION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-tabut-companion-activator.php
 */
function activate_tabut_companion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tabut-companion-activator.php';
	Tabut_Companion_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-tabut-companion-deactivator.php
 */
function deactivate_tabut_companion() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-tabut-companion-deactivator.php';
	Tabut_Companion_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_tabut_companion' );
register_deactivation_hook( __FILE__, 'deactivate_tabut_companion' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tabut-companion.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_tabut_companion() {

	$plugin = new Tabut_Companion();
	$plugin->run();

}
run_tabut_companion();
