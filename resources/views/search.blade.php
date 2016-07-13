<!DOCTYPE html>
<html lang="en-us">

@include('header')
<style>
input[type=text] {
	width: 100%;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	font-size: 16px;
	background-color: white;
	background-image: url('searchicon.png');
	background-position: 10px 10px;
	background-repeat: no-repeat;
	padding: 12px 20px 12px 40px;

}

</style>
<!-- 
		<link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/smartadmin-production-plugins.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/smartadmin-production.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/smartadmin-skins.min.css')}}">
	-->
	<!-- SmartAdmin RTL Support -->
<!-- 		<link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/smartadmin-rtl.min.css')}}"> 
-->

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
						<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Search </h1>
					</div>

				</div>
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- row -->
					<div class="row">
						<article class="col-sm-12">
							

						</article>
					</div>

					<!-- end row -->
					<div class="row">

						<div class="col-sm-12">


							<div id="myTabContent1" class="tab-content bg-color-white padding-10" style = "">
								<div class="tab-pane fade in active" id="s1">
									<form action = "{{URL::route('search')}}">
										<div class="input-group input-group-lg hidden-mobile">
											@if($data != "")
											<input class="form-control input-lg" type="text" name = "query" value = "{{$data}}" placeholder="Search..." id="search-project" list="list">
											@else
											<input class="form-control input-lg" type="text" name = "query" placeholder="Search..." id="search-project" list="list">

											@endif
											<datalist id="list">
												@foreach($speciality as $sp)
												<option value="{{$sp->speciality_name}}">{{$sp->speciality_name	}}</option>
												@endforeach

											</datalist>

											<div class="input-group-btn">
												<button type="submit" class="btn btn-default">
													&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-search fa-lg"></i>&nbsp;&nbsp;&nbsp;
												</button>
											</div>
										</div>
									</form>	
								</div>

							</div>
							

						</div>
						<div class="row">
							@if($data == "")
							<div class = "text-center"><h2>Search Results</h2></div>
							@else
							<div class = "text-center"><h2>Search Results for "{{$data}}"</h2></div>
							@endif
							<div class="text">
								@if(count($result))
								@foreach($result as $re)
								<div class="col-sm-12 col-md-6 col-lg-3">
									<div class="well text-center connect">
										<img src="{{URL::asset('img/avatars/male.png')}}" alt="img" class="margin-bottom-5 margin-top-5">
										<br>
										<span class="font-xs"><b>{{$re['doc_name']}}</b></span>
										<div class="row"><span class="font-xs">
											@if(isset($review[$re['email']]))
											
											@for($i=1;$i <= $review[$re['email']]; $i++)
											<i class="fa fa-star fa-2x text-primary"></i>
											@endfor

											@for($i=1;$i <= 5 - $review[$re['email']]; $i++)
											<i class="fa fa-star fa-2x text-muted"></i>
											@endfor
											@else
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											@endif
										</span>
										</div>
										<a href="{{URL::route('profile',$re['id'])}}" class="btn btn-xs btn-success margin-top-5 margin-bottom-5"> <span class="font-xs">View Profile</span> </a>
									</div>
								</div>
								@endforeach
								@else
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="well text-center connect">
										NO DOCTORS FOUND 	
									</div>
								</div>
								@endif
							</div>
						</div>	

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