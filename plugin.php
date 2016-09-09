<?php
/**
 * @package   uix
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
define('UIX_PATH',  plugin_dir_path( __FILE__ ) );
define('UIX_CORE',  __FILE__ );
define('UIX_URL',  plugin_dir_url( __FILE__ ) );
define('UIX_VER',  '2.0.0' );

/* If Composer */
//autoload dependencies
//require_once( UIX_PATH . 'vendor/autoload.php' );
/* END Composer */

/* If UIX Installer */
//Load UIX Bootstrap
require_once( UIX_PATH . 'uix-bootstrap.php' );
/* END UIX Installer */

// Register UI folders.
function uix_register_ui_folders( $uix ){
    $uix->register( UIX_PATH . 'ui/' );
}
add_filter( 'uix_register', 'uix_register_ui_folders' );