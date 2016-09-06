<?php
/**
 * @package   uix2
 * @author    %author%
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 %author%
 *
 * @wordpress-plugin
 * Plugin Name: %name%
 * Plugin URI:  %url%
 * Description: %description%
 * Version:     %version%
 * Author:      %author%
 * Author URI:  %url%
 * Text Domain: text-domain
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Constants
define('UIX2_PATH',  plugin_dir_path( __FILE__ ) );
define('UIX2_CORE',  __FILE__ );
define('UIX2_URL',  plugin_dir_url( __FILE__ ) );
define('UIX2_VER',  '2.0.0' );

/* If Composer */
//autoload dependencies
//require_once( UIX2_PATH . 'vendor/autoload.php' );
/* END Composer */

/* If UIX Installer */
//Load UIX Bootstrap
require_once( UIX2_PATH . 'uix-bootstrap.php' );
/* END UIX Installer */

// Register UI folders.
function uix2_register_ui_folders( $uix ){
    $uix->register( UIX2_PATH . 'ui/' );
}
add_filter( 'uix2_register', 'uix2_register_ui_folders' );