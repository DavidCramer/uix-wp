<?php
/**
 * Example modals page template 
 *
 * @package   templates
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 */
?>
<hr>
<button type="button" 
	data-title="<?php echo esc_attr( 'Create Project' ); ?>"
	data-height="360"
	data-width="500"

	
	data-modal="project"
	data-template="project"
	data-focus="true"
	data-buttons="create"
	data-footer="conduitModalFooter"
	data-default='{"name":"untitled"}'

	class="button" 
><?php  esc_html_e( 'Create Project' ); ?></button>
<hr>
{{#each project}}
<div>
	<h4 style="margin:0;">{{name}}</h4>
	<p class="description">{{description}}</p>
	<input type="hidden" name="{{:name}}" value="{{json this}}">
	<a href="#"
		data-title="<?php echo esc_attr( 'Create Project' ); ?>"
		data-height="360"
		data-width="500"

		
		data-modal="{{_node_point}}"
		data-template="project"
		data-focus="true"
		data-buttons="save delete"
		data-footer="conduitModalFooter"

	><?php  esc_html_e( 'Edit Project' ); ?></a>
</div>
<hr>
{{/each}}

