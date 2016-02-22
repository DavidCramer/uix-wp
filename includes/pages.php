<?php
/**
 * Plugin Pages Structures
 *
 * @package   uix_example
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */


// This array is for the Admin Pages. each element defines a page that is seen in the admin
return array(
	'uix_example'   => array(                                                         // this is the settings array. The key is the page slug
		'page_title'  =>  'UIX Example Page',                                                  // title of the page
		'menu_title'  =>  'UIX Example',                                                  // title seen on the menu link
		'capability'  =>  'manage_options',                                              // required capability to access page
		'icon'        =>  'dashicons-book-alt',                                          // Icon or image to be used on admin menu
		'save_button' =>  'Save Changes',                                                // If the page required saving settings, Set the text here.
		'base_color'  => '#438373',
		'modals'	  =>  array(
			//modal templates to be included as an array. slug => file
			'project'	=> 'includes/templates/project.php',
		),
		'tabs'        =>  array(                                                        // tabs array are for setting the tab / section templates
			// each array element is a tab with the key as the slug that will be the saved object property
			'general'		=> array(
				'page_title'        => 'General',                                  // the tab page title 
				'page_description'  => 'This explains the general principles',                   // the tab description
				'menu_title'        => 'General',                                           // the title of the tab menu item
				'template'          => 'includes/templates/general.php',           // the template to define the tab content and values
				'partials'          => array(                                               // if the tab makes use of partials, use this to define them
					// the key is the partial slug. {{>partial_slug}} which can be used in the template ( partials are globaly available so tabs can share them )

				),
				'default'	 => true                                                 // defines which is the default tab
			),
			'modals'		=> array(
				'page_title'        => 'Modals',                                  // the tab page title 
				'page_description'  => 'This is an example of using modals',                   // the tab description
				'menu_title'        => 'Modals',                                           // the title of the tab menu item
				'template'          => 'includes/templates/modals.php',           // the template to define the tab content and values
			),
		),
		'help'	=> array(	// the wordpress contextual help is also included
			// key is the help slug
			'default-help' => array(
				'title'		=> 	esc_html__( 'Easy to add Help' , 'uix' ),
				'content'	=>	"Just add more items to this array with a unique slug/key."
			),
			'more-help' => array(
				'title'		=> 	esc_html__( 'Makes things Easy' , 'uix' ),
				'content'	=>	"the content can also be a file path to a template"
			)
		),
		'help_sidebar' => 'This can be html or a path to a file as well.'
	),
);