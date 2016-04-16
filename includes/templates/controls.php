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
		<h4>Control box</h4>
		<div class="uix-control-box">
			<div class="uix-control-bar">
				<span class="uix-control-bar-action left">
					<span class="dashicons dashicons-plus" data-add-node="item"></span>
				</span>
				<span class="uix-control-bar-action right">
					<span class="dashicons dashicons-admin-generic"></span>
				</span>
				<span class="uix-control-bar-content"> This is a text line that is way to long for this box</span>
				<span class="uix-control-bar-action right">
					<button type="button" class="button">Button</button>
				</span>

				<span class="uix-control-bar-action right">
					<button type="button" class="button button-small">Small</button>
				</span>

			</div>

			<div class="uix-control-box-content">

				<div class="uix-grid">
					<div class="row">
						<div class="col-sm-6">

							{{#each item}}
											
								<div class="uix-control-bar item_{{_id}}">
									{{:node_point}}				
									<span class="uix-control-bar-action left">
										<span class="dashicons dashicons-menu"></span>
									</span>
									<span class="uix-control-bar-content">
										{{_id}}
									</span>
									<span class="uix-control-bar-action right">
										<span class="dashicons dashicons-arrow-right-alt2" data-remove-element=".item_{{_id}}"></span>
									</span>
								</div>

							{{/each}}

						</div>
						<div class="col-sm-6">


							<div class="uix-control-box">
								<div class="uix-control-bar">
									<span class="uix-control-bar-action left">
										<span class="dashicons dashicons-plus" data-add-node="parts"></span>
									</span>
									<span class="uix-control-bar-action right">
										<span class="dashicons dashicons-admin-generic"></span>
									</span>
									<span class="uix-control-bar-content"> This is a text line that is way to long for this box</span>
									<span class="uix-control-bar-action right">
										<button type="button" class="button">Button</button>
									</span>

									<span class="uix-control-bar-action right">
										<button type="button" class="button button-small">Small</button>
									</span>

								</div>
			
								<div class="uix-control-box-content">

									{{#each parts}}
													
										<div class="uix-control-bar item_{{_id}}">
											{{:node_point}}				
											<label class="uix-control-bar-action left">
												<input type="checkbox" value="1">
											</label>
											<label class="uix-control-bar-action left">
												<input type="radio" value="1" name="pick">
											</label>
																						
											<input type="text" class="" value="{{_id}}">
											
											<span class="uix-control-bar-action right">
												<span class="dashicons dashicons-arrow-right" data-remove-element=".item_{{_id}}"></span>
											</span>										
											<span class="uix-control-bar-action right">
												<span class="dashicons dashicons-arrow-right-alt2" data-remove-element=".item_{{_id}}"></span>
											</span>
										</div>

									{{/each}}

								</div>

							</div>

						</div>

					</div>
					<div class="clear"></div>
				</div>

			</div>

			<div class="uix-control-box">
				<div class="uix-control-bar">
					<span class="uix-control-bar-content">
						This is a text line
					</span>

					<span class="uix-control-bar-action right">
						<span class="dashicons dashicons-plus"></span>
					</span>
					<span class="uix-control-bar-action right">
						<span class="dashicons dashicons-no"></span>
					</span>

				</div>

			</div>

		</div>
		<hr>