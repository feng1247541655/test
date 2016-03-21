<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Elements - Ace Admin</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/static/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/static/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="/static/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="/static/css/chosen.css" />
		<link rel="stylesheet" href="/static/css/datepicker.css" />
		<link rel="stylesheet" href="/static/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="/static/css/daterangepicker.css" />
		<link rel="stylesheet" href="/static/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="/static/css/colorpicker.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="/static/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/static/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/static/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/static/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/static/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/static/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/static/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/static/js/html5shiv.js"></script>
		<script src="/static/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container" style=" margin-top:0px;">
			<!-- /section:basics/sidebar -->
			<div class="main-content" style="margin-left:0px;">

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">

					<!-- /section:settings.box -->
					<div class="page-header">
						<h1>
							Form Elements
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								Common form elements and layouts
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							<form class="form-horizontal" role="form">
								<!-- #section:elements.form -->
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

									<div class="col-sm-9">
										<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

									<div class="col-sm-9">
										<input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control" />
									</div>
								</div>

								<!-- /section:elements.form -->
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

									<div class="col-sm-9">
										<input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5" />
										<span class="help-inline col-xs-12 col-sm-7">
											<span class="middle">Inline help text</span>
										</span>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

									<div class="col-sm-9">
										<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
										<span class="help-inline col-xs-12 col-sm-7">
											<label class="middle">
												<input class="ace" type="checkbox" id="id-disable-check" />
												<span class="lbl"> Disable it!</span>
											</label>
										</span>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

									<div class="col-sm-9">
										<!-- #section:elements.form.input-icon -->
										<span class="input-icon">
											<input type="text" id="form-field-icon-1" />
											<i class="ace-icon fa fa-leaf blue"></i>
										</span>

										<span class="input-icon input-icon-right">
											<input type="text" id="form-field-icon-2" />
											<i class="ace-icon fa fa-leaf green"></i>
										</span>

										<!-- /section:elements.form.input-icon -->
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

									<div class="col-sm-9">
										<input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="Hello Tooltip!" data-placement="bottom" />
										<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="Popover on hover">?</span>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Small Dropdown</label>

									<div class="col-sm-9">
										<select class="small m-wrap" tabindex="1">
											<option value="Category 1">Category 1</option>
											<option value="Category 2">Category 2</option>
											<option value="Category 3">Category 5</option>
											<option value="Category 4">Category 4</option>
										</select>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Medium Dropdown</label>

									<div class="col-sm-9">
										<select class="medium m-wrap" tabindex="1">
											<option value="Category 1">Category 1</option>
											<option value="Category 2">Category 2</option>
											<option value="Category 3">Category 5</option>
											<option value="Category 4">Category 4</option>
										</select>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Large Dropdown</label>

									<div class="col-sm-9">
										<select class="large m-wrap" tabindex="1">
											<option value="Category 1">Category 1</option>
											<option value="Category 2">Category 2</option>
											<option value="Category 3">Category 5</option>
											<option value="Category 4">Category 4</option>
										</select>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Radio Buttons</label>

									<div class="col-sm-9">
										<div class="radio custom_radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> radio option 1</span>
											</label>
										</div>

										<div class="radio custom_radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> radio option 2</span>
											</label>
										</div>

										<div class="radio custom_radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> radio option 3</span>
											</label>
										</div>

										<div class="radio custom_radio">
											<label>
												<input disabled="" name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> disabled</span>
											</label>
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Radio Buttons</label>

									<div class="col-sm-9">
										<div class="radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> radio option 1</span>
											</label>
										</div>

										<div class="radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> radio option 2</span>
											</label>
										</div>

										<div class="radio">
											<label>
												<input name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> radio option 3</span>
											</label>
										</div>

										<div class="radio">
											<label>
												<input disabled="" name="form-field-radio" type="radio" class="ace" />
												<span class="lbl"> disabled</span>
											</label>
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Checkbox</label>

									<div class="col-xs-12 col-sm-5">
										<div class="checkbox custom_checkbox">
												<label>
													<input name="form-field-checkbox" type="checkbox" class="ace" />
													<span class="lbl"> choice 1</span>
												</label>
											</div>

											<div class="checkbox custom_checkbox">
												<label>
													<input name="form-field-checkbox" type="checkbox" class="ace" />
													<span class="lbl"> choice 2</span>
												</label>
											</div>

											<div class="checkbox custom_checkbox">
												<label>
													<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" />
													<span class="lbl"> choice 3</span>
												</label>
											</div>

											<div class="checkbox custom_checkbox">
												<label class="block">
													<input name="form-field-checkbox" disabled="" type="checkbox" class="ace" />
													<span class="lbl"> disabled</span>
												</label>
											</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Checkbox</label>

									<div class="col-xs-12 col-sm-5">
										<div class="checkbox">
											<label>
												<input name="form-field-checkbox" type="checkbox" class="ace" />
												<span class="lbl"> choice 1</span>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input name="form-field-checkbox" type="checkbox" class="ace" />
												<span class="lbl"> choice 2</span>
											</label>
										</div>

										<div class="checkbox">
											<label>
												<input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox" />
												<span class="lbl"> choice 3</span>
											</label>
										</div>

										<div class="checkbox">
											<label class="block">
												<input name="form-field-checkbox" disabled="" type="checkbox" class="ace" />
												<span class="lbl"> disabled</span>
											</label>
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Textarea</label>

									<div class="col-xs-12 col-sm-5">
										<textarea class="medium m-wrap" rows="3"></textarea>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Default Textarea</label>

									<div class="col-xs-12 col-sm-5">
										<!-- <textarea class="large m-wrap" rows="3"></textarea> -->
										<textarea class="form-control limited large m-wrap" id="form-field-8" placeholder="Default Text"></textarea>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Large Textarea</label>

									<div class="col-xs-12 col-sm-5">
										<textarea class="form-control limited large m-wrap" id="form-field-9" maxlength="50"></textarea>

									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Date Picker</label>

									<div class="col-xs-12 col-sm-5">
										<div class="input-group">
											<input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" />
											<span class="input-group-addon">
												<i class="fa fa-calendar bigger-110"></i>
											</span>
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Date Range Picker</label>

									<div class="col-xs-12 col-sm-5">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-calendar bigger-110"></i>
											</span>

											<input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1" />
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Range Picker</label>

									<div class="col-xs-12 col-sm-5">
										<div class="input-daterange input-group">
											<input type="text" class="input-sm form-control" name="start" />
											<span class="input-group-addon">
												<i class="fa fa-exchange"></i>
											</span>

											<input type="text" class="input-sm form-control" name="end" />
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Time Picker</label>

									<div class="col-xs-12 col-sm-5">
										<div class="input-group bootstrap-timepicker">
											<input id="timepicker1" type="text" class="form-control" />
											<span class="input-group-addon">
												<i class="fa fa-clock-o bigger-110"></i>
											</span>
										</div>
									</div>
								</div>

								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Date/Time Picker</label>

									<div class="col-xs-12 col-sm-5">
										<div class="input-group">
											<input id="date-timepicker1" type="text" class="form-control" />
											<span class="input-group-addon">
												<i class="fa fa-clock-o bigger-110"></i>
											</span>
										</div>
									</div>
								</div>

								<div class="clearfix form-actions">
									<div class="col-md-offset-3 col-md-9">
										<button class="btn btn-info" type="button">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Submit
										</button>

										&nbsp; &nbsp; &nbsp;
										<button class="btn" type="reset">
											<i class="ace-icon fa fa-undo bigger-110"></i>
											Reset
										</button>
									</div>
								</div>

								<div class="hr hr-24"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

									<div class="controls col-xs-12 col-sm-9">
										<!-- #section:custom/checkbox.switch -->
										<div class="row">
											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch" type="checkbox" />
													<span class="lbl" data-lbl="CUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOM"></span>
												</label>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch btn-rotate" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>

											<div class="col-xs-3">
												<label>
													<input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" />
													<span class="lbl"></span>
												</label>
											</div>
										</div>

										<!-- /section:custom/checkbox.switch -->
									</div>
								</div>

								<hr />
							</form>

							<div id="modal-form" class="modal" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="blue bigger">Please fill the following form fields</h4>
										</div>

										<div class="modal-body">
											<div class="row">
												<div class="col-xs-12 col-sm-5">
													<div class="space"></div>

													<input type="file" />
												</div>

												<div class="col-xs-12 col-sm-7">
													<div class="form-group">
														<label for="form-field-select-3">Location</label>

														<div>
															<select class="chosen-select" data-placeholder="Choose a Country...">
																<option value="">&nbsp;</option>
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
																<option value="AZ">Arizona</option>
																<option value="AR">Arkansas</option>
																<option value="CA">California</option>
																<option value="CO">Colorado</option>
																<option value="CT">Connecticut</option>
																<option value="DE">Delaware</option>
																<option value="FL">Florida</option>
																<option value="GA">Georgia</option>
																<option value="HI">Hawaii</option>
																<option value="ID">Idaho</option>
																<option value="IL">Illinois</option>
																<option value="IN">Indiana</option>
																<option value="IA">Iowa</option>
																<option value="KS">Kansas</option>
																<option value="KY">Kentucky</option>
																<option value="LA">Louisiana</option>
																<option value="ME">Maine</option>
																<option value="MD">Maryland</option>
																<option value="MA">Massachusetts</option>
																<option value="MI">Michigan</option>
																<option value="MN">Minnesota</option>
																<option value="MS">Mississippi</option>
																<option value="MO">Missouri</option>
																<option value="MT">Montana</option>
																<option value="NE">Nebraska</option>
																<option value="NV">Nevada</option>
																<option value="NH">New Hampshire</option>
																<option value="NJ">New Jersey</option>
																<option value="NM">New Mexico</option>
																<option value="NY">New York</option>
																<option value="NC">North Carolina</option>
																<option value="ND">North Dakota</option>
																<option value="OH">Ohio</option>
																<option value="OK">Oklahoma</option>
																<option value="OR">Oregon</option>
																<option value="PA">Pennsylvania</option>
																<option value="RI">Rhode Island</option>
																<option value="SC">South Carolina</option>
																<option value="SD">South Dakota</option>
																<option value="TN">Tennessee</option>
																<option value="TX">Texas</option>
																<option value="UT">Utah</option>
																<option value="VT">Vermont</option>
																<option value="VA">Virginia</option>
																<option value="WA">Washington</option>
																<option value="WV">West Virginia</option>
																<option value="WI">Wisconsin</option>
																<option value="WY">Wyoming</option>
															</select>
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">
														<label for="form-field-username">Username</label>

														<div>
															<input class="input-large" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
														</div>
													</div>

													<div class="space-4"></div>

													<div class="form-group">
														<label for="form-field-first">Name</label>

														<div>
															<input class="input-medium" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
															<input class="input-medium" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="modal-footer">
											<button class="btn btn-sm" data-dismiss="modal">
												<i class="ace-icon fa fa-times"></i>
												Cancel
											</button>

											<button class="btn btn-sm btn-primary">
												<i class="ace-icon fa fa-check"></i>
												Save
											</button>
										</div>
									</div>
								</div>
							</div><!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/static/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/static/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/static/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="/static/js/jquery-ui.custom.min.js"></script>
		<script src="/static/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/static/js/chosen.jquery.min.js"></script>
		<script src="/static/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/static/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/static/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/static/js/date-time/moment.min.js"></script>
		<script src="/static/js/date-time/daterangepicker.min.js"></script>
		<script src="/static/js/date-time/bootstrap-datetimepicker.min.js"></script>
		<script src="/static/js/bootstrap-colorpicker.min.js"></script>
		<script src="/static/js/jquery.knob.min.js"></script>
		<script src="/static/js/jquery.autosize.min.js"></script>
		<script src="/static/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/static/js/jquery.maskedinput.min.js"></script>
		<script src="/static/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->
		<script src="/static/js/ace-elements.min.js"></script>
		<script src="/static/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$('.chosen-select').chosen({allow_single_deselect:true}); 
				//resize the chosen on window resize
				$(window).on('resize.chosen', function() {
					var w = $('.chosen-select').parent().width();
					$('.chosen-select').next().css({'width':w});
				}).trigger('resize.chosen');
			
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up', icon_down:'ace-icon fa fa-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus smaller-75', icon_down:'ace-icon fa fa-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#date-timepicker1').datetimepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					);
			
					//programmatically add a new
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>

		<!-- design -->
		<link rel="stylesheet" href="/static/css/design.css" />
		<!-- design end -->
	</body>
</html>
