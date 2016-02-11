<?php
/**
 * Example partial  template 
 *
 * @package   /uix/templates
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 */
?>

<div class="uix-field-wrapper">
	<label for="checks"><?php esc_html_e( 'Check List', 'uix-plugin' ); ?></label>
	<div class="uix-check-wrapper">
		<label><input type="checkbox" value="1" name="checks[first]" {{#if checks/first}}checked="checked"{{/if}}> <?php esc_html_e( 'First Option', 'uix-plugin' ); ?></label>
		<label><input type="checkbox" value="1" name="checks[second]" {{#if checks/second}}checked="checked"{{/if}}> <?php esc_html_e( 'Second', 'uix-plugin' ); ?></label>
		<label><input type="checkbox" value="1" name="checks[third]" {{#if checks/third}}checked="checked"{{/if}}> <?php esc_html_e( 'Last Checkbox', 'uix-plugin' ); ?></label>		
	</div>
</div>
