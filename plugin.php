<?php
/**
 * @package   uixv2
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
define('UIXV2_PATH',  plugin_dir_path( __FILE__ ) );
define('UIXV2_CORE',  __FILE__ );
define('UIXV2_URL',  plugin_dir_url( __FILE__ ) );
define('UIXV2_VER',  '2.0.0' );

/* If Composer */
//autoload dependencies
//require_once( DBPT_PATH . 'vendor/autoload.php' );
/* END Composer */

/* If UIX Installer */
//Load UIX Bootstrap
require_once( UIXV2_PATH . 'uix-bootstrap.php' );
/* END UIX Installer */

// Register UI folders.
function uixv2_register_ui_folders( $uix ){
    $uix->register( DBPT_PATH . 'includes/ui/' );
}
add_filter( 'uix_register', 'uixv2_register_ui_folders' );