<!DOCTYPE html>
<html lang="en-us">

@include('header')

	<!--

	TABLE OF CONTENTS.
	
	Use search to find needed section.
	
	===================================================================
	
	|  01. #CSS Links                |  all CSS links and file paths  |
	|  02. #FAVICONS                 |  Favicon links and file paths  |
	|  03. #GOOGLE FONT              |  Google font link              |
	|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
	|  05. #BODY                     |  body tag                      |
	|  06. #HEADER                   |  header tag                    |
	|  07. #PROJECTS                 |  project lists                 |
	|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
	|  09. #MOBILE                   |  mobile view dropdown          |
	|  10. #SEARCH                   |  search field                  |
	|  11. #NAVIGATION               |  left panel & navigation       |
	|  12. #RIGHT PANEL              |  right panel userlist          |
	|  13. #MAIN PANEL               |  main panel                    |
	|  14. #MAIN CONTENT             |  content holder                |
	|  15. #PAGE FOOTER              |  page footer                   |
	|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
	|  17. #PLUGINS                  |  all scripts and plugins       |
	
	===================================================================
	
-->

<!-- #BODY -->
	<!-- Possible Classes

		* 'smart-style-{SKIN#}'
		* 'smart-rtl'         - Switch theme mode to RTL
		* 'menu-on-top'       - Switch to top navigation (no DOM change required)
		* 'no-menu'			  - Hides the menu completely
		* 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
		* 'fixed-header'      - Fixes the header
		* 'fixed-navigation'  - Fixes the main menu
		* 'fixed-ribbon'      - Fixes breadcrumb
		* 'fixed-page-footer' - Fixes footer
		* 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
	-->
	<body class="fixed-header fixed-navigation smart-style-6">

		<!--  TOP NAVIGATION HEADER -->
		@include('topnavigation')
		<!-- END TOP NAVIGATION HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		@include('patient_leftnavigation')

		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">



			<!-- MAIN CONTENT -->
			<div id="content">

				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Basic Info </h1>
					</div>

				</div>
				<!-- widget grid -->
				<article class="col-sm-12 col-md-12 col-lg-12">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
							-->


							<!-- widget div-->
							<div>

								<!-- widget content -->
								<div class="widget-body no-padding">

									<form class="smart-form">
										<footer>
											<a type="button" data-toggle="modal"  class="btn btn-primary" href="#myModal">
												Edit
											</a>
										</footer>
										<fieldset>
											<section>
												<label class="label">Name</label>
												<label class="input">
													<input type="text" disabled="disabled" value ="" >
												</label>
											</section>
											<section>
												<label class="label">Mobile</label>
												<label class="input">
													<input type="text" disabled="disabled" value ="" >
												</label>
											</section>
											<section>
												<label class="label">Gender</label>
												<div class="inline-group">
													<label class="radio">
														<input type="radio" name="gender" disabled="disabled">
														<i></i>Male</label>
														<label class="radio">
															<input type="radio" name="gender" disabled="disabled">
															<i></i>Female</label>
														</div>

													</section>
													<section>
														<label class="label">Blood Group</label>
														<label class="select">
															<select disabled = "disabled">
																<option value="0">Choose Blood Group</option>
																<option value="O+">O+</option>
																<option value="O-">O-</option>
																<option value="A-">A-</option>
																<option value="A+">A+</option>
																<option value="B-">B-</option>
																<option value="B+">B+</option>
																<option value="AB-">AB-</option>
																<option value="AB+">AB+</option>
															</select> <i></i> </label>
														</section>
														<section>
															<label class="label">Occupation</label>
															<label class="input">
																<input type="text" disabled="disabled" value ="" >
															</label>
														</section>

														<section>
															<label class="label">Address</label>
															<label class="textarea"> 										
																<textarea rows="3" class="custom-scroll" disabled="disabled"></textarea> 
															</label>
														</section>
														<section>
															<label class="label">Country</label>
															<label class="input">
																<input type="text" disabled="disabled" value ="" >
															</label>
														</section>
														<section>
															<label class="label">State</label>
															<label class="input">
																<input type="text" disabled="disabled" value ="" >
															</label>
														</section>
														<section>
															<label class="label">City</label>
															<label class="input">
																<input type="text" disabled="disabled" value ="" >
															</label>
														</section>
														<section>
															<label class="label">Pincode</label>
															<label class="input">
																<input type="text" disabled="disabled" value ="" >
															</label>
														</section>
													</fieldset>
												</form>
											</div>
											<!-- end widget content -->
										</div>
										<!-- end widget div -->
									</div>
									<!-- end widget -->
								</article>
								<!-- end widget grid -->
							</div>
							<!-- END MAIN CONTENT -->
						</div>
						<!-- END MAIN PANEL -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
										<h4 class="modal-title">
											<!-- ` -->
										</h4>
									</div>
									<div class="modal-body no-padding">

										<form id="login-form" class="smart-form">

											<fieldset>
												<section>
													<label class="label">Name</label>
													<label class="input">
														<input type="text" name = "name"  value ="" required>
													</label>
												</section>
												<section>
													<label class="label">Contact</label>
													<label class="input">
														<input type="text" name="contact"  value ="" required>
													</label>
												</section>
												<section>
													<label class="label">Gender</label>
													<div class="inline-group">
														<label class="radio">
															<input type="radio" value = "female" name="gender" required>
															<i></i>Male</label>
															<label class="radio">
																<input type="radio" value = "male" name="gender" >
																<i></i>Female</label>
															</div>
														</section>
														<section>
															<label class="label">Blood Group</label>
															<label class="select">
																<select name = "blood_group" required>
																	<option value="0">Choose Blood Group</option>
																	<option value="O+">O+</option>
																	<option value="O-">O-</option>
																	<option value="A-">A-</option>
																	<option value="A+">A+</option>
																	<option value="B-">B-</option>
																	<option value="B+">B+</option>
																	<option value="AB-">AB-</option>
																	<option value="AB+">AB+</option>
																</select> <i></i> </label>
															</section>
															<section>
																<label class="label">Occupation</label>
																<label class="input">
																	<input type="text" name = "occupation" required value ="" >
																</label>
															</section>

															<section>
																<label class="label">Address</label>
																<label class="textarea"> 										
																	<textarea rows="3" name = "address" required class="custom-scroll" ></textarea> 
																</label>
															</section>
															<section>
																<label class="label">Country</label>
																<label class="select">
																	<select name="country" class="countries" id="countryId">
																		<option value="">Select Country</option>
																	</select>	</label>
																</section>
																<section>
																	<label class="label">State</label>
																	<label class="select">
																		<select name="state" class="states" id="stateId">
																			<option value="">Select State</option>
																		</select>
																	</label>
																</label>
															</section>
															<section>
																<label class="label">City</label>
																<label class="select">
																	<select name="city" class="cities" id="cityId">
																		<option value="">Select City</option>
																	</select>
																</label>
															</section>
															<section>
																<label class="label">Pincode</label>
																<label class="input">
																	<input type="text"  value ="" name = "city" id="cityId" >
																</label>
															</section>
														</fieldset>



														<footer>
															<button type="submit" class="btn btn-primary">
																Save Changes
															</button>
															<button type="button" class="btn btn-default" data-dismiss="modal">
																Cancel
															</button>

														</footer>
													</form>						


												</div>

											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div>

									<!-- PAGE FOOTER -->
									@include('footer')
									<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
	-->
	<!-- END SHORTCUT AREA -->

	<!--================================================== -->

	<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
	@include('js');
	<script src="http://iamrohit.in/lab/js/location.js"></script>

</body>

</html>