<!DOCTYPE html>
<html lang="en-us">

@include('header')
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
						<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard </h1>
					</div>

				</div>
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<div class="row">

						<div class="col-sm-12 col-md-12 col-lg-12">
							<!-- product -->
							<div class="product-content product-wrap clearfix product-deatil">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12 ">
										<div class="product-image"> 
											<div id="myCarousel-3" class="carousel fade">
												
												<div class="carousel-inner">
													<!-- Slide 1 -->
													<div class="item active">
														<img src="{{URL::asset('img/avatars/male.png')}}" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-7 col-sm-12 col-xs-12">

										<h2 class="name">
											{{$doctor->doc_name}} 
											<small>Speciality : <a target = "_blank" href="{{URL::route('search',['query'=>$doctor->speci])}}">{{$doctor->speci}}</a></small>
											@if($stars)
											
											@for($i=1;$i <= $stars; $i++)
											<i class="fa fa-star fa-2x text-primary"></i>
											@endfor

											@for($i=1;$i <= 5 - $stars; $i++)
											<i class="fa fa-star fa-2x text-muted"></i>
											@endfor
											@else
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											<i class="fa fa-star fa-2x text-muted"></i>
											@endif
											<span class="fa fa-2x"><h5>{{$doctor->tot_review}} Votes</h5></span>	
										</h2>
										<hr>
										<div class="row">
											<div class="col-sm-6">
												<h3 class="price-container">
													Fees : $129.54
													<small>*includes tax</small>
												</h3>
											</div>
											<div class="col-sm-6 text-right">
												<a href="javascript:void(0);" class="btn btn-primary">Connect ($129.54)</a>
											</div>
										</div>
										
										

										

										<hr>
										<div class="description description-tabs">


											<ul id="myTab2" class="nav nav-tabs">
												<li class="active"><a href="#more-information2" data-toggle="tab" class="no-margin">Doctor Description </a></li>
												<li class=""><a href="#specifications2" data-toggle="tab">Education</a></li>
												<li class=""><a href="#reviews2" data-toggle="tab">Reviews</a></li>
											</ul>
											<div id="myTabContent2" class="tab-content">
												<div class="tab-pane fade active in" id="more-information2">
													<br>
													<strong>Description Title</strong>
													<p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
												</div>
												<div class="tab-pane fade" id="specifications2">
													<br>
													<dl class="">
														<dt>Gravina</dt>
														<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
														<dd>Donec id elit non mi porta gravida at eget metus.</dd>
														<dd>Eget lacinia odio sem nec elit.</dd>
														<br>

														<dt>Test lists</dt>
														<dd>A description list is perfect for defining terms.</dd>
														<br>	

														<dt>Altra porta</dt>
														<dd>Vestibulum id ligula porta felis euismod semper</dd>
													</dl>
												</div>
												<div class="tab-pane fade" id="reviews2">
													<br>
													<form method="post" class="well padding-bottom-10" onsubmit="return false;">
														<textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
														<div class="margin-top-10">
															<button type="submit" class="btn btn-sm btn-primary pull-right">
																Submit Review
															</button>
															<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
															<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
															<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
															<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
														</div>
													</form>

													<div class="chat-body no-padding profile-message">
														<ul>
															@if(count($review))
															@foreach($review as $rev)
															<li class="message">
																<img src="{{URL::asset('img/avatars/1.png')}}" class="online">
																<span class="message-text"> <a href="javascript:void(0);" class="username">{{$rev->name}} </a>
																	@if($rev->stars)

																	@for($i=1;$i <= $rev->stars; $i++)
																	<i class="fa fa-star fa-2x text-primary"></i>
																	@endfor
																	@for($i=1;$i <= 5 - $rev->stars; $i++)
																	<i class="fa fa-star fa-2x text-muted"></i>
																	@endfor
																	@else
																	<i class="fa fa-star fa-2x text-muted"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																	@endif
																	<br> {{$rev->review}} </span>
																</li>
																@endforeach
																@else
																<li class="message">
																	<span class="message-text">No Review Added Yet. </span>
																</li>
																@endif
															</ul>
														</div>
													</div>
												</div>


											</div>
											<hr>

										</div>
									</div>
								</div>
								<!-- end product -->
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