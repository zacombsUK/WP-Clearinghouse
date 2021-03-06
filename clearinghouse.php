<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://zacombs.com/
 * @since             1.0.0
 * @package           Clearinghouse
 *
 * @wordpress-plugin
 * Plugin Name:       CCLD Clearinghouse
 * Plugin URI:        https://github.com/zacombsUK/wp-clearinghouse.git
 * Description:       Plugin to display clearinghouse resources for educators, admins, and policy makers.
 * Version:           1.0.0
 * Author:            Zachary Combs
 * Author URI:        http://zacombs.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       clearinghouse
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-clearinghouse-activator.php
 */
function activate_clearinghouse() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-clearinghouse-activator.php';
	Clearinghouse_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-clearinghouse-deactivator.php
 */
function deactivate_clearinghouse() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-clearinghouse-deactivator.php';
	Clearinghouse_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_clearinghouse' );
register_deactivation_hook( __FILE__, 'deactivate_clearinghouse' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-clearinghouse.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_clearinghouse() {

	$plugin = new Clearinghouse();
	$plugin->run();

}
run_clearinghouse();
