<?php
/**
 * Plugin Pages Structures
 *
 * @package   uixv2
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */

// This array is for the Admin Pages. each element defines a page that is seen in the admin
return array(
    'uix'   => array(                                                         // this is the settings array. The key is the page slug
        'page_title'  =>  __( 'UIX Example Page', 'text-domain' ),                                                  // title of the page
        'menu_title'  =>  __( 'UIX Example', 'text-domain' ),                                                  // title seen on the menu link
        'capability'  =>  'manage_options',                                              // required capability to access page
        'icon'        =>  'dashicons-book-alt',                                          // Icon or image to be used on admin menu
        'save_button' =>  __( 'Save Changes', 'text-domain' ),                                                // If the page required saving settings, Set the text here.
        'base_color'  =>  '#e74c3c',
        'modals'      =>  array(
            //modal templates to be included as an array. slug => file
            'project'   => UIXV2_PATH . 'includes/templates/project.php',
        ),
        'tabs'        =>  array(                                                        // tabs array are for setting the tab / section templates
            // each array element is a tab with the key as the slug that will be the saved object property
            'general'       => array(
                'page_title'        => __( 'General', 'text-domain' ),                                  // the tab page title 
                'page_description'  => __( 'This explains the general principles', 'text-domain' ),                   // the tab description
                'menu_title'        => __( 'General', 'text-domain' ),                                           // the title of the tab menu item
                'template'          => UIXV2_PATH . 'includes/templates/general.php',           // the template to define the tab content and values
                'partials'          => array(                                               // if the tab makes use of partials, use this to define them
                    // the key is the partial slug. {{>partial_slug}} which can be used in the template ( partials are globaly available so tabs can share them )

                ),
                'default'    => true                                                 // defines which is the default tab
            ),
            'modals'        => array(
                'page_title'        => __( 'Modals', 'text-domain' ),                                  // the tab page title 
                'page_description'  => __( 'This is an example of using modals', 'text-domain' ),                   // the tab description
                'menu_title'        => __( 'Modals', 'text-domain' ),                                          // the title of the tab menu item
                'template'          => UIXV2_PATH . 'includes/templates/modals.php',           // the template to define the tab content and values
            ),
            'controls'      => array(
                'page_title'        => __( 'Controls', 'text-domain' ),                                  // the tab page title 
                'page_description'  => __( 'This is an example of built in controls', 'text-domain' ),                   // the tab description
                'menu_title'        => __( 'Controls', 'text-domain' ),                                           // the title of the tab menu item
                'template'          => UIXV2_PATH . 'includes/templates/controls.php',           // the template to define the tab content and values
            ),
        ),
        'help'  => array(   // the wordpress contextual help is also included
            // key is the help slug
            'default-help' => array(
                'title'     =>  __( 'Easy to add Help' , 'text-domain' ),
                'content'   =>  __( 'Just add more items to this array with a unique slug/key.', 'text-domain' ),
            ),
            'more-help' => array(
                'title'     =>  __( 'Makes things Easy' , 'text-domain' ),
                'content'   =>  __( 'the content can also be a file path to a template', 'text-domain' ),
            )
        ),
        'help_sidebar' => __( 'This can be html or a path to a file as well.', 'text-domain' ),
    ),
);