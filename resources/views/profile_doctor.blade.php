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
		
		@include('doctor_leftnavigation')

		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">


			

			<!-- MAIN CONTENT -->
			<div id="content">
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2>Your Account Details </h2>				
					
				</header>

				<!-- widget div-->
				<div>
					
					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						
					</div>
					<!-- end widget edit box -->
					
					<!-- widget content -->
					<div class="widget-body no-padding">
						
						<form id="checkout-form" class="smart-form" novalidate="novalidate" method="post" action="{{URL::route('edit')}}">
							{{csrf_field()}}

							<fieldset>
								<div class="row">
									<section class="col col-6">
										<label class="label">Name</label>
										<label class="input"> <i class="icon-prepend fa fa-user"></i>
											<input type="text" required name="doc_name" value="{{$doc->doc_name}}" placeholder="Name">
										</label>
									</section>
									<section class="col col-6">
										<label class="label">Mobile</label>

										<label class="input"> <i class="icon-prepend fa fa-phone"></i>
											<input type="tel" value="{{$doc->mobile}}"required name="mobile" placeholder="Phone" data-mask="(999) 999-9999">
										</label>
									</section>
									
								</div>

								<div class="row">
									<section class="col col-6">
										<label class="label">Email</label>

										<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
											<input type="email" value="{{$doc->email}}" disabled="disabled" required name="email" placeholder="E-mail">
										</label>
									</section>

									<section class="col col-6">
										<label class="label">Country</label>

										<label class="select">

											<select name="country"  required class="countries" id="countryId" placeholder="Country">
												
												<option value="{{$doc->country}}" selected>{{$doc->country}}</option>
											</select>
										</label>


									</section>
									
								</div>
							</fieldset>

							<fieldset><div class="row">
								<section class="col col-6">
										<label class="label">Current Position</label>

										<label class="input"> <i class="icon-prepend "></i>
											<input type="text" value="{{$doc->current_position}}" required name="current_position" placeholder="Current Position">
										</label>
									</section>
									<section class="col col-6">
										<label class="input"> <i class="icon-prepend "></i>
											<input type="text" value="{{$doc->age}}" required name="age" placeholder="Age">
										</label>
									</section>
							</div>


						</fieldset>

							<fieldset>
								<div class="row">
									

									<section class="col col-5">
										<label class="label">State</label>

										<label class="select">
											<select name="state" value="{{$doc->state}}" required class="states" id="stateId">
												<option value="{{$doc->state}}" selected> {{$doc->state}}</option>
											</select>
										</label>
									</section>

									<section class="col col-4">
										<label class="label">City</label>

										<label class="select">
											
											<select name="city"  value="{{$doc->city}}" required class="cities" id="cityId">
												<option value="{{$doc->city}}" selected> {{$doc->city}}</option>
												
											</select>
										</label>
									</section>

									<section class="col col-3">
										<label class="label">Pincode</label>

										<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
											<input type="text" value="{{$doc->pincode}}" required name="pincode" placeholder="Post Code">
										</label>
									</section>
								</div>

								<section>
										<label class="label">Address</label>

									<label for="address2" class="input">
										<input type="text"  required name="address" value="{{$doc->address}}" id="address2" placeholder="Address">
									</label>
								</section>

								<section>
										<label class="label">Qualification</label>

									<label class="textarea"> 										
										<textarea rows="3" required name="qualification" value="{{$doc->qualification}}" placeholder="Additional Qualification">{{$doc->qualification}}</textarea> 
									</label>
								</section>
							</fieldset>


							<fieldset>
								<div class="row">

								</div>
							</fieldset>

								<fieldset>
								<div class="row">
									<section class="col col-6">
										<label class="label">Registration Number(M.C.I)</label>

										<label class="input"> <i class="icon-prepend fa fa-user"></i>
											<input type="text" required name="mci" value="{{$doc->mci}}" placeholder="Registration Number">
										</label>
									</section>
									<section class="col col-6">
										<label class="label">Years of Experience</label>

										<label class="input"> <i class="icon-prepend fa fa-phone"></i>
											<input type="text" required name="years_of_exp" value="{{$doc->years_of_exp}}" placeholder="Enter your Years of Experience">
										</label>
									</section>
									
								</div>

								<div class="row">
									<section class="col col-6">
										<label class="label">Hospital Affiliation</label>

										<label class="input"> <i class="icon-prepend"></i>
											<input type="text" required name="hospital_affiliation" value="{{$doc->hospital_affiliation}}" placeholder="Hospital Affiliation">
										</label>
									</section>

									<section class="col col-6">
										<label class="label">Speciality</label>

											<label class="select">

												<select name="speciality"  placeholder="Speciality" required>
													@foreach($speciality as $sp)
												
													<option value="{{$sp->id}}" selected>{{$sp->speciality_name}}</option>
												@endforeach
												</select> <i></i> </label>
											</section>

									
								</div>
							</fieldset>

								<footer>
									<button type="submit" class="btn btn-primary">
										Save
									</button>
								</footer>
							</form>

						</div>
						<!-- end widget content -->

					</div>
				</div>


				
				<!-- end widget grid -->

				<!-- END MAIN CONTENT -->

			</div>
			<!-- END MAIN PANEL -->

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
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://iamrohit.in/lab/js/location.js"></script>

</html>