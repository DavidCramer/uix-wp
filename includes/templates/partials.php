<?php
/**
 * Example page template 
 *
 * @package   /uix/templates
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 */
?>

<div class="uix-field-wrapper">
	<label for="text-example"><?php esc_html_e( 'Single Text Field', 'uix-plugin' ); ?></label>
	<div class="uix-field">
		<input type="text" value="{{text_field}}" id="text-example" name="text_field" class="regular-text">
	</div>
</div>


<div class="uix-field-wrapper">
	<label><?php esc_html_e( 'Text Fields', 'uix-plugin' ); ?></label>
	<div class="uix-field">
		<label for="something" style="display: inline-block; width: 150px;"><?php esc_html_e( 'Something', 'uix-plugin' ); ?></label> <input id="something" type="text" value="{{something}}" name="something" style="width: 196px;">
		<label for="another" style="display: inline-block; width: 150px;"><?php esc_html_e( 'Another', 'uix-plugin' ); ?></label> <input id="another" type="text" value="{{another}}" name="another" style="width: 196px;">
		
	</div>
</div>

<h4>This is an example loading a partial template</h4>
{{>checkboxes}}

