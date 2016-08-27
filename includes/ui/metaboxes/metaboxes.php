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
    'uix_metabox'   => array(
        'post_type'         =>  array( 'post' ), // array of post types this should be in
        'name'              =>  esc_html__( 'UIX Metabox Example', 'text-domain' ), // the label/name of the metabox 
        'context'           =>  'normal', // metabox type ( normal , advanced, side )
        'priority'          =>  'core', // priority of the box in editor        
        'base_color'        =>  '#c0392b',
        'base_text_color'   =>  '#fff',
        'chromeless'        =>  true,
        'modals'      =>  array(
            //modal templates to be included as an array. slug => file
            'project'   => UIXV2_PATH . 'includes/templates/project.php',
        ),
        'template'          =>  UIXV2_PATH . 'includes/templates/modals.php',
    ),
);



return $metabox;