<?php
/**
 * @package   uix-plugin
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 *
 * @wordpress-plugin
 * Plugin Name: UIX implementation Example Plugin
 * Plugin URI:  http://cramer.co.za
 * Description: An example plugin to demonstrate the UIX plugin platform
 * Version:     1.0.0
 * Author:      David Cramer
 * Author URI:  http://cramer.co.za
 * Text Domain: uix-plugin
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('UIX_PLUGIN_PATH',  plugin_dir_path( __FILE__ ) );
define('UIX_PLUGIN_CORE',  __FILE__ );
define('UIX_PLUGIN_URL',  plugin_dir_url( __FILE__ ) );
define('UIX_PLUGIN_VER',  '1.0.0' );

// Load instance
add_action( 'plugins_loaded', function(){
	// include the library
	include_once UIX_PLUGIN_PATH . 'classes/uix.php';
	
	// get the pages
	$pages = include UIX_PLUGIN_PATH . 'includes/pages.php';

	// initialize admin UI
	\v1_0_0\ui\uix::get_instance( $pages, 'uix-plugin' );

	// front
	if( !is_admin() ){
		// front class
		include_once UIX_PLUGIN_PATH . 'classes/front.php';
		
		\v1_0_0\front\core::get_instance( $pages, 'uix-plugin' );
	}
} );
