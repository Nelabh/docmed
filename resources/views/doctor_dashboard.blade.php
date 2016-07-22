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

				
				<section id="widget-grid" class="">

		<div class="row">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
								
								<header>
									<span class="widget-icon"> <i class="fa fa-table"></i> </span>
									<h2>List of Patients Request </h2>
				
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
				
										<table id="dt_basic" class="table table-striped table-bordered table-hover" width="80%">
											<thead>			                
												<tr>
													<th data-hide="phone">Sno.</th>
													<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Patient Name</th>
													<th data-hide="phone,tablet">Problem</th>
													<th data-hide="phone,tablet">Statement</th>
													<th data-hide="phone,tablet">City</th>
													<th data-hide="phone,tablet">Phone No.</th>

													<th data-hide="phone,tablet">Status</th>
													<th data-hide="phone,tablet">Accept</th>
												</tr>
											</thead>
											<tbody>
												@if(count($patient))
												@foreach($patient as $p)
													@if($p->status==0)

												<tr bgcolor="#FF0000">
													<?php $id=0; ?>
													<td><?php  $id++; ?></td>
													<td>$p->name</td>
													<td>$p->problem</td>
													<td>$p->statement</td>
													<td>$p->city</td>
													<td>$p->mobile</td>
													<td>PENDING</td>

													<td><a href="javascript:void(0);" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>

												</tr>
												@elseif($p->status==1)
												<tr bgcolor="#FFFFFF">

													<?php $id=1; ?>
													<td><?php  $id++; ?></td>
													<td>$p->name</td>
													<td>$p->problem</td>
													<td>$p->statement</td>
													<td>$p->city</td>
													<td>$p->mobile</td>
													<td>ONGOING</td>

													<td><a href="javascript:void(0);" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>

												</tr>
												@else
												<tr bgcolor="#FFF000">

													<?php $id=1; ?>
													<td><?php  $id++; ?></td>
													<td>$p->name</td>
													<td>$p->problem</td>
													<td>$p->statement</td>
													<td>$p->city</td>
													<td>$p->mobile</td>
													<td>URGENT</td>

													<td><a href="javascript:void(0);" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>

												</tr>
												@endif
												@endforeach
												@else
												<tr>
												<td>-</td>
												<td>-</td>

												<td>-</td>

												<td>-</td>

												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>

												</tr>
												@endif
												
												
											</tbody>
										</table>

									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
				
						</article>
						<!-- WIDGET END -->
				
					</div>
			
				</section>
				<!-- end widget grid -->

			</div>
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

</html>