<?php
/**
 * Plugin metabox Structures
 *
 * @package   uixv2
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 David Cramer
 */
$metabox = array(
    'general'    => array(
        'screen'            =>  null, // The screen or screens on which to show the box (such as a post type, 'link', or 'comment'). Accepts a single screen ID, WP_Screen object, or array of screen IDs. Default is the current screen.
        'name'              =>  esc_html__( 'Metabox Fields', 'text-domain' ), // the label/name of the metabox 
        'context'           =>  'normal', // metabox type ( normal , advanced, side )
        'priority'          =>  'high', // priority of the box in editor        
        'base_color'        =>  '#3498db',
        'base_text_color'   =>  '#fff',
        'chromeless'        =>  true,
        //'template'          =>  UIXV2_PATH . 'includes/ui/templates/metabox.php', // Template file. if set "sections" is not required
        'sections'          =>  array(
            // the key is the slug/id of the section
            'user'         => array(
                'label'         => __( 'General', 'text-domain'), // required
                'description'   => __( 'Setup verious required stuff.', 'text-domain'), // not required
                'icon'          => 'dashicons-admin-generic', // not required
                'active'        => true, // not required
                'controls'       => array(
                    // the slug is the field name/meta_key being saved
                    'first_name'    =>  array(
                        'label'             =>  __('First Name', 'text-domain'), // required  ... maybe
                        'description'       =>  __('The first/called name of the person', 'text-domain'), // not required
                        'type'              =>  'text', // not required, but text is assumed if not set ( text, select, checkbox, radio, textarea, hidden etc... )
                        'value'             =>  'default value', /// not required : default value if a value is not set.
                        'required'          =>  true,
                        'sanitize_callback' =>  'sanitize_text_field', // not required, sanitize callback for submitted value
                    ),
                    'last_name'    =>  array(
                        'label'             =>  __('Last Name', 'text-domain'), // required  ... maybe
                        'description'       =>  __('The surname/last name of the person', 'text-domain'), // not required
                        'type'              =>  'text', // not required, but text is assumed if not set ( text, select, checkbox, radio, textarea, hidden etc... )
                        'sanitize_callback' =>  'sanitize_text_field', // not required, sanitize callback for submitted value

                    ),
                    'option'    =>  array(
                        'label'             =>  __('Option', 'text-domain'), // required  ... maybe
                        'type'              =>  'select', // not required, but text is assumed if not set ( text, select, checkbox, radio, textarea, hidden etc... )
                        'choices'           =>  array( // only required if option based type ( checkbox, select, radio etc..)
                            //array of options. In an associative array the index key is stored value
                            'option_one'    =>  __( 'Option One', 'text-domain' ),
                            'option_two'    =>  __( 'Option Two', 'text-domain' ),
                        ),
                        'sanitize_callback' =>  'sanitize_text_field', // not required, sanitize callback for submitted value
                    ),
                    'bio'    =>  array(
                        'label'             =>  __('Bio', 'text-domain'), // required  ... maybe
                        'description'       =>  __('Stuff about you', 'text-domain'), // not required
                        'type'              =>  'textarea', // not required, but text is assumed if not set ( text, select, checkbox, radio, textarea, hidden etc... )
                        'value'             =>  'default value', /// not required : default value if a value is not set.
                    ),

                ),
            ),
            'extended'         => array(
                'label'         => __( 'Extended', 'text-domain'), // required
                'icon'          => 'dashicons-index-card', // not required
                'controls'      =>array(
                    'extra_option'    =>  array(
                        'label'             =>  __('Option', 'text-domain'), // required  ... maybe
                        'type'              =>  'select', // not required, but text is assumed if not set ( text, select, checkbox, radio, textarea, hidden etc... )
                        'choices'           =>  array( // only required if option based type ( checkbox, select, radio etc..)
                            //array of options. In an associative array the index key is stored value
                            'option_one'    =>  __( 'Option One', 'text-domain' ),
                            'option_two'    =>  __( 'Option Two', 'text-domain' ),
                        ),
                        'sanitize_callback' =>  'sanitize_text_field', // not required, sanitize callback for submitted value
                    ),
                    'more_stuff'    =>  array(
                        'label'             =>  __('More Stuff', 'text-domain'), // required  ... maybe
                        'description'       =>  __('More stuff about you', 'text-domain'), // not required
                        'type'              =>  'textarea', // not required, but text is assumed if not set ( text, select, checkbox, radio, textarea, hidden etc... )
                    ),
                )
            ),
            'template'         => array(
                'label'         => __( 'Template', 'text-domain'), // required
                'icon'          => 'dashicons-layout', // not required
                'template'      => UIXV2_PATH . 'includes/templates/metabox-template.php',
            ),
        ),
    ),
);

return $metabox;