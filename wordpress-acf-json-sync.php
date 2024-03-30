<?php
/**
 * Plugin Name:       ACF Local JSON demo task
 * Description:       This is a demo plugin includes the use of ACF Local JSON. It's display sync option to ACF plugin for field group and post type.
 * Version:           1.0.0
 * Requires PHP:      7.4
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       demo-plugin
 * Domain Path:       /languages
 * Tested up to: 6.4.3
 *
 * @package ACF Local JSON demo task
 */

// If this file is called directly, abort.
use Demo_Plugin\Activator;
use Demo_Plugin\Deactivator;
use Demo_Plugin\Demo_Plugin;

if ( ! defined( 'WPINC' ) ) {
	wp_die();
}

/**
 * Plugin absolute path
 */
define( 'DEMO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'DEMO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Use Composer PSR-4 Autoloading
 */
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
require plugin_dir_path( __FILE__ ) . 'vendor/vendor-prefixed/autoload.php';

/**
 * The code that runs during plugin activation.
 *
 * @return void
 */
function activate_demo_plugin() {
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_demo_plugin() {
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_demo_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_demo_plugin' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_demo_plugin() {

	$version = '1.0.0';
	$plugin  = new Demo_Plugin( $version );
	$plugin->run();
}
run_demo_plugin();
