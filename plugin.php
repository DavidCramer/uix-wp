<?php
/**
 * @package   uix_nice
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 *
 * @wordpress-plugin
 * Plugin Name: My Plugin
 * Plugin URI:  http://cramer.co.za
 * Description: My Plugins Description
 * Version:     1.0.0
 * Author:      David Cramer
 * Author URI:  http://cramer.co.za
 * Text Domain: uix_nice
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('MYPLGN_PATH',  plugin_dir_path( __FILE__ ) );
define('MYPLGN_CORE',  __FILE__ );
define('MYPLGN_URL',  plugin_dir_url( __FILE__ ) );
define('MYPLGN_VER',  '1.0.0' );

// Load instance
add_action( 'plugins_loaded', function(){
	// include the library
	include_once MYPLGN_PATH . 'uix/uix.php';
	// front
	if( !is_admin() ){
		// front class
		include_once MYPLGN_PATH . 'uix/front.php';
	}
	
	// get the pages
	$pages = include MYPLGN_PATH . 'includes/pages.php';

	// initialize admin UI
	$uix = \uix_nice\ui\uix::get_instance( 'uix_nice' );
	$uix->register_pages( $pages );

	//$metaboxes = include uix_nice_PATH . 'includes/metaboxes.php';	
	//$uix->register_metaboxes( $metaboxes );	
	
} );
