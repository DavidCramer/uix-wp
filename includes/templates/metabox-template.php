<?php
/**
 * Example page template 
 *
 * @package   templates
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 */
?>
<h3>HTML TEMPLATE</h3>
<div class="uix-field-wrapper">
    <label for="checks"><?php esc_html_e( 'Check List', 'uix-plugin' ); ?></label>
    <div class="uix-check-wrapper">
        <label><input type="checkbox" value="1" name="uix_control[<?php echo $slug; ?>][first]"> <?php esc_html_e( 'First Option', 'uix-plugin' ); ?></label>
        <label><input type="checkbox" value="1" name="uix_control[<?php echo $slug; ?>][second]"> <?php esc_html_e( 'Second', 'uix-plugin' ); ?></label>
        <label><input type="checkbox" value="1" name="uix_control[<?php echo $slug; ?>][third]"> <?php esc_html_e( 'Last Checkbox', 'uix-plugin' ); ?></label>        
    </div>
</div>
