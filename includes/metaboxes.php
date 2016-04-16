<?php
/**
 * Plugin metabox Structures
 *
 * @package   uix_example
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */

$plugin_path =  plugin_dir_path( dirname( __FILE__ ) );

$metabox = array(
	'metabox'   => array(
		'post_type'			=> 	array( 'post','page' ), // array of post types this should be in
		'name'				=>	'UIX Metabox Example', // the label/name of the metabox 
		'context'			=>	'normal', // metabox type ( normal , advanced, side )
		'priority'			=>	'core', // priority of the box in editor		
		'base_color'  		=>	'#e06000',
		'chromeless'		=>	true,
		'template'	 		=>	$plugin_path . 'includes/templates/controls.php',
	)
);



return $metabox;