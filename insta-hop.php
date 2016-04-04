<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/brunopincaro/instahop
 * @since             1.0.0
 * @package           Insta_Hop
 *
 * @wordpress-plugin
 * Plugin Name:       InstaHOP
 * Plugin URI:        https://github.com/brunopincaro/instahop
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bruno Pincaro
 * Author URI:        http://brunopincaro.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       insta-hop
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-insta-hop-activator.php
 */
function activate_insta_hop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-insta-hop-activator.php';
	Insta_Hop_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-insta-hop-deactivator.php
 */
function deactivate_insta_hop() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-insta-hop-deactivator.php';
	Insta_Hop_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_insta_hop' );
register_deactivation_hook( __FILE__, 'deactivate_insta_hop' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-insta-hop.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_insta_hop() {

	$plugin = new Insta_Hop();
	$plugin->run();

}
run_insta_hop();
