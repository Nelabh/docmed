<!DOCTYPE html>
<html lang="en-us">
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>

@include('admin\header')

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
		@include('admin\topnavigation')
		<!-- END TOP NAVIGATION HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		@include('admin\admin_leftnavigation')

		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				

				<!-- breadcrumb -->
				
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
			</span> -->

		</div>
		<!-- END RIBBON -->

		<!-- MAIN CONTENT -->
		<div id="content">

			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
					<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Edit Pathologist details </h1>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
					<ul id="sparks" class="">

							<!-- <li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
								<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
								<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li> -->
						</ul>
					</div>
				</div>
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<div class="row">

						<!-- NEW WIDGET START -->

		<div class="widget-body no-padding">
					<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th data-hide="phone">ID</th>
													<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
													<th >Email</th>
													<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Phone</th>
													<th>Shop Name</th>
													<th data-hide="phone,tablet">City</th>
													<th>Qualification</th>
													<th>Age</th>
													<th>Years of Experience</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $id=0 ?>
												@if(count($data))
												@foreach($data as $d)
												<tr>
													<?php $id++ ?>
													<td>{{$id}}</td>
													<td>{{$d->mp_name}}</td>
													<td>{{$d->email}}</td>
													<td>{{$d->mobile}}</td>
													<td>{{$d->shop_name}}</td>
													<td>{{$d->city}}</td>
													<td>{{$d->qualification}}</td>
													<td>{{$d->age}}</td>
													<td>{{$d->years_of_exp}}</td>




		<!-- Button trigger modal -->
		<td><a data-toggle="modal" href="#my_{{$d->id}}" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">Edit</a></td>
	

													
												</tr>
												@endforeach

												@else
												<center><tr col-span="9"><h2>No record found</h2></tr></center>
												@endif
											</tbody>
										</table>
		</div>

		</div>

	</section>
	<!-- end widget grid -->

</div>
<!-- END MAIN CONTENT -->
	@foreach($data as $d)
<!-- Modal -->
<div class="modal fade" id="my_{{$d->id}}" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h1 class="modal-title">
					Edit details
				</h1>
			</div>
			<div class="modal-body no-padding">

				<form id="login-form" class="smart-form" method="post" action = "{{URL::route('editpathologist',$d->id)}}">

							<fieldset>
								<section>
								<input type="hidden"  name="id" value = "{{$d->id}}">
									<div class="row">
										<label class="label col col-2">Email</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="email"  disabled="disabled" name="email" value = "{{$d->email}}">
											</label>
										</div>
									</div>
									{{csrf_field()}}
									<div class="row">
										<label class="label col col-2">Name</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="text" name="name" value = "{{$d->mp_name}}">
											</label>
										</div>
									</div>
								
									<div class="row">
										<label class="label col col-2">Phone</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="text" name="mobile" value = "{{$d->mobile}}">
											</label>
										</div>
									</div>
									<div class="row">
										<label class="label col col-2">Qualification</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="text" name="qualification" value = "{{$d->qualification}}">
											</label>
										</div>
									</div>
									<div class="row">
										<label class="label col col-2">M.C.I</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="text" name="mci" value = "{{$d->mci}}">
											</label>
										</div>
									</div>
								
									<div class="row">
										<label class="label col col-2">Shop Name</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="text" name="shop_name" value = "{{$d->shop_name}}">
											</label>
										</div>
									</div>
									<div class="row">
										<label class="label col col-2">Age</label>
										<div class="col col-10">
											<label class="input"> <i class="icon-append fa fa-user"></i>
												<input type="text" name="age" value = "{{$d->age}}">
											</label>
										</div>
									</div>
								</section>


								

								<section>
									<div class="row">
										<div class="col col-2"></div>
										<div class="col col-10">
											<label class="checkbox">
												<input type="checkbox" name="remember" checked="">
												<i></i>Are you sure ??</label>
										</div>
									</div>
								</section>
							</fieldset>
							
							<footer>
								<button  class="btn btn-primary">
								Edit
								</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Cancel
								</button>

							</footer>
						</form>						
						

			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
@include('admin\footer')
<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
	-->
	<!-- END SHORTCUT AREA -->

	<!--================================================== -->

	<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
	@include('admin\js');
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
	<script type="text/javascript">

	$(document).ready(function() {


				/* DO NOT REMOVE : GLOBAL FUNCTIONS!
				 *
				 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
				 *
				 * // activate tooltips
				 * $("[rel=tooltip]").tooltip();
				 *
				 * // activate popovers
				 * $("[rel=popover]").popover();
				 *
				 * // activate popovers with hover states
				 * $("[rel=popover-hover]").popover({ trigger: "hover" });
				 *
				 * // activate inline charts
				 * runAllCharts();
				 *
				 * // setup widgets
				 * setup_widgets_desktop();
				 *
				 * // run form elements
				 * runAllForms();
				 *
				 ********************************
				 *
				 * pageSetUp() is needed whenever you load a page.
				 * It initializes and checks for all basic elements of the page
				 * and makes rendering easier.
				 *
				 */

				 pageSetUp();
				 
				/*
				 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
				 * eg alert("my home function");
				 * 
				 * var pagefunction = function() {
				 *   ...
				 * }
				 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
				 * 
				 * TO LOAD A SCRIPT:
				 * var pagefunction = function (){ 
				 *  loadScript(".../plugin.js", run_after_loaded);	
				 * }
				 * 
				 * OR
				 * 
				 * loadScript(".../plugin.js", run_after_loaded);
				 */

				 /* Formatting function for row details - modify as you need */


</script>








</body>

</html>