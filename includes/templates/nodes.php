<?php
/**
 * Nodes Example
 *
 * @package   /uix/templates
 * @author    David Cramer
 * @license   GPL-2.0+
 * @link      
 * @copyright 2016 David Cramer
 */
?>
<p>A node is best described as a dynamically created property.</p>
<p>Since the object is created by the templates fields, adding new fields will alter the object.</p>
<p>The <code>data-add-node="tmp"</code> attribute defines the node creation path.</p>

<div style="float:left;width:500px;min-height:200px;">
	<button data-add-node="tmp" class="button" type="button">Add Temporary Node</button>
	<hr>
	{{#each tmp}}
		<h4>Node ID: {{_id}}</h4>
		<p class="description">This is a temporary node instance. It doesn't contain any form fields within the template area so when the UI rebuilds, the structure is lost. Its useful for allowing parts of a template to be shown.</p>
		<button type="button" class="button" data-live-sync="true">Close</button>
	{{/each}}
	<hr>
	{{#unless permanent}}
	<button data-add-node="permanent" class="button" type="button">Add Permanent Node</button>
	<hr>
	{{/unless}}
	{{#each permanent}}
		<h4>Node ID: {{_id}}</h4>
		<p class="description">To make the node perminant, you simply record it with an input. For this theres a helper <code>\{{:node_point}}</code> which creates the hidden input fields for the object to read.</p>
		{{:node_point}}
		<p>To remove the node, you use the<br> <code>data-remove-element="[name^='\{{:name}}']"</code> attribute on the delete trigger. As on the button below:</p>
		<button class="button button-small" data-remove-element="[name^='{{:name}}']" type="button">Remove</button><br>
		<p>This simply removes all elements that match the selector then triggers a rebuild on the UI. So if the fields are not there, the object wont have them</p>
	{{/each}}
	<hr>
	<p>Nodes are repeatable. So it's useful for adding multiple items to the config.</p>
	<button data-add-node="item" class="button" type="button">Add Item</button> <code>data-add-node="item"</code>
	<hr>
	{{#each item}}
		<h4>Node ID: {{_id}}</h4>
		{{:node_point}}
		<p class="description">To keep the context of the item, fields within can make use of the <code>\{{:name}}</code> helper.</p>
		<code>name="\{{:name}}[title]"</code><br>
		<input style="width:60%;float:left;" data-live-sync="true" type="text" value="{{title}}" name="{{:name}}[title]" placeholder="Title">
		<button style="float:left;" class="button" data-remove-element="[name^='{{:name}}']" type="button">Remove</button><br>
		<div style="clear:both;">
		This means that the field name is now <code>name="{{:name}}[title]"</code>
		</div>
	{{/each}}
</div>
<div style="float:left; width:600px;min-height:200px;">
<h4>Current Config Object</h4>
<pre style="background: transparent;"><code style="background: transparent;" class="language-javascript" id="highlight-object">{{json this}}</code></pre>
{{#script}}
	Prism.highlightElement( document.getElementById( "highlight-object" ) );
{{/script}}
</div>
