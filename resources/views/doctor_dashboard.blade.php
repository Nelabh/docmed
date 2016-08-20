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

			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
					<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard </h1>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
					<ul id="sparks" class="">
						<li class="sparks-info">
							<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
							<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
								1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
							</div>
						</li>
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
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
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
												
												<th>Problem</th>
												<th>Symptoms</th>
												<th data-hide="phone,tablet">Location</th>
												<th data-hide="phone,tablet">Status</th>
												<th data-hide="phone,tablet">Accept</th>
											</tr>
										</thead>
										<tbody>
											<?php $i=1;?>
											@if(count($con))
											@foreach($con as $c)
											@if($c->status ==6)

											<tr style="background-color:salmon">
												<td><?php echo $i++; ?></td>
												<td>{{$c->patient->patient_name}}</td>
												<td>{{$c->problem}}</td>
												<td>{{$c->statement}}</td>
												<td>{{$c->patient->city}}</td>
												@if($c->status==0)
												<td>Pending</td>
												@elseif($c->status==6)
												<td>Urgent</td>
												@elseif($c->status==1||$c->status==7)
												<td>PaymentPending</td>
												@else
												<td>Ongoing</td>
												@endif
												<td><a href = "{{URL::route('accept',$c->id)}}" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>
											</tr>
											@elseif($c->status==2)
											<tr style="background-color:khaki">
												<td><?php echo $i++; ?></td>
												<td>{{$c->patient->patient_name}}</td>
												<td>{{$c->problem}}</td>
												<td>{{$c->statement}}</td>
												<td>{{$c->patient->city}}</td>
												@if($c->status==0)
												<td>Accept REQUEST</td>
												@elseif($c->status==6)
												<td>Urgent</td>
												@elseif($c->status==1||$c->status==7)
												<td>PaymentPending</td>
												@else
												<td>Ongoing</td>
												@endif
												<td><a href = "{{URL::route('accept',$c->id)}}" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>
											</tr>
											@elseif($c->status==7||$c->status==1)
											<tr style="background-color:peachpuff">
												<td><?php echo $i++; ?></td>
												<td>{{$c->patient->patient_name}}</td>
												<td>{{$c->problem}}</td>
												<td>{{$c->statement}}</td>
												<td>{{$c->patient->city}}</td>
												@if($c->status==0)
												<td>Accept REQUEST</td>
												@elseif($c->status==6)
												<td>Urgent</td>
												@elseif($c->status==1||$c->status==7)
												<td>PaymentPending</td>
												@else
												<td>Ongoing</td>
												@endif
												<td><a href = "{{URL::route('accept',$c->id)}}" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>
											</tr>
											@elseif($c->status==8||$c->status==3)
											<tr style="background-color:palegreen">
												<td><?php echo $i++; ?></td>
												<td>{{$c->patient->patient_name}}</td>
												<td>{{$c->problem}}</td>
												<td>{{$c->statement}}</td>
												<td>{{$c->patient->city}}</td>
												@if($c->status==0)
												<td>Accept REQUEST</td>
												@elseif($c->status==6)
												<td>Urgent</td>
												@elseif($c->status==1||$c->status==7)
												<td>PaymentPending</td>
												@else
												<td>Ongoing</td>
												@endif
												<td><a href = "{{URL::route('accept',$c->id)}}" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>
											</tr>
											@else
											<tr>
												<td><?php echo $i++; ?></td>
												<td>{{$c->patient->patient_name}}</td>
												<td>{{$c->problem}}</td>
												<td>{{$c->statement}}</td>
												<td>{{$c->patient->city}}</td>
												@if($c->status==0)
												<td>Accept REQUEST</td>
												@elseif($c->status==6)
												<td>Urgent</td>
												@elseif($c->status==1||$c->status==7)
												<td>PaymentPending</td>
												@else
												<td>Ongoing</td>
												@endif
												<td><a href = "{{URL::route('accept',$c->id)}}" class="btn btn-success btn-circle"><i class="fa fa-check"></i></a></td>
											</tr>
											@endif
											@endforeach
											@else
											<tr><td colspan = "7">NO RECORD FOUND!!!</td></tr>
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