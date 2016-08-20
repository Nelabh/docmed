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
						<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Profile </h1>
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
										@if($connection == -1)
										<div class="row">
											<div class="col-sm-6">
												<h3 class="price-container">
													Fees : &#8377;{{$doctor->fees}}
													<small>*includes tax</small>
												</h3>
												<a   data-toggle="modal" href="#consult" class="btn  header-btn btn btn-primary">Consult</a>
											</div>
											<div class="col-sm-6">
												<h3 class="price-container">
													Urgent : &#8377;{{$doctor->ufees}}
													<small>*includes tax</small>
												</h3>
												<a  data-toggle="modal" href="#urgent"  class="btn btn-danger">Consult With Urgency</a>
											</div>
										</div>
										@elseif($connection >= 0 && $connection < 6)
										@if($connection == 1)
										<div class="row">
											<div class="col-sm-12">
												<h3 class="price-container">
													Fees : &#8377;{{$doctor->fees}}
													<small>*includes tax</small>
												</h3>
												<a data-toggle="modal" href="#pay" class="btn  header-btn btn btn-primary">Pay Now</a>
											</div>
											<div class="col-sm-6">
												<h3 class="price-container">
													Urgent : &#8377;{{$doctor->ufees}}
													<small>*includes tax</small>
												</h3>
												<a  class="btn btn-danger">Normal Consultation Requested</a>
											</div>
										</div>
										@else
										<div class="row">
											<div class="col-sm-12">
												<h3 class="price-container">
													Fees : &#8377;{{$doctor->fees}}
													<small>*includes tax</small>
												</h3>
												<a data-toggle="modal" href="#editconsult" class="btn  header-btn btn btn-primary">Update Consultation Request</a>
											</div>
											<div class="col-sm-6">
												<h3 class="price-container">
													Urgent : &#8377;{{$doctor->ufees}}
													<small>*includes tax</small>
												</h3>
												<a  class="btn btn-danger">Normal Consultation Requested</a>
											</div>
										</div>
										
										@endif
										@elseif($connection >= 6)
										@if($connection == 7)
										<div class="row">
											<div class="col-sm-12">
												<h3 class="price-container">
													Fees : &#8377;{{$doctor->fees}}
													<small>*includes tax</small>
												</h3>
												<a  class="btn  header-btn btn btn-primary">Urgent Consultation Requested</a>
											</div>
											<div class="col-sm-6">
												<h3 class="price-container">
													Urgent : &#8377;{{$doctor->ufees}}
													<small>*includes tax</small>
												</h3>
												<a data-toggle="modal" href="#pay" class="btn btn-danger">Pay Now</a>
											</div>
										</div>
										@else
										<div class="row">
											<div class="col-sm-12">
												<h3 class="price-container">
													Fees : &#8377;{{$doctor->fees}}
													<small>*includes tax</small>
												</h3>
												<a data-toggle="modal" href="#editconsult" class="btn  header-btn btn btn-primary">Update Consultation Request</a>
											</div>
											<div class="col-sm-6">
												<h3 class="price-container">
													Urgent : &#8377;{{$doctor->ufees}}
													<small>*includes tax</small>
												</h3>
												<a  class="btn btn-danger">Normal Consultation Requested</a>
											</div>
										</div>
										
										@endif
										@endif
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
		<!-- Modal -->
	<div class="modal fade" id="editurgent" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">
						Urgent Consult
					</h4>
				</div>
				<div class="modal-body no-padding">

					<form id="login-form" class="smart-form" method="post" action = "{{URL::route('updateconsult')}}" >
						<input type = "hidden" name = "id" value = "{{$doctor->id}}">

						{{csrf_field()}}
						<fieldset>
							@if(count($health))
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" value = "{{$health->problem}}">
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement">{{$health->statement}}</textarea>
										</label>
									</div>
								</div>
							</section>
							@else
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" >
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement"></textarea>
										</label>
									</div>
								</div>
							</section>
							@endif
						</fieldset>

						<footer>
							<button type="submit" class="btn btn-primary">
								Update Urgent Consultation Request
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

		<!-- Modal -->
	<div class="modal fade" id="editconsult" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">
						Consult
					</h4>
				</div>
				<div class="modal-body no-padding">

					<form id="login-form" class="smart-form" method="post" action = "{{URL::route('updateconsult')}}" >
						<input type = "hidden" name = "id" value = "{{$doctor->id}}">
						{{csrf_field()}}
						<fieldset>
							@if(count($health))
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" value = "{{$health->problem}}">
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement">{{$health->statement}}</textarea>
										</label>
									</div>
								</div>
							</section>
							@else
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" >
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement"></textarea>
										</label>
									</div>
								</div>
							</section>
							@endif
						</fieldset>

						<footer>
							<button type="submit" class="btn btn-primary">
								Update Consultation Request
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

	<!-- Modal -->
	<div class="modal fade" id="consult" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">
						Consult
					</h4>
				</div>
				<div class="modal-body no-padding">

					<form id="login-form" class="smart-form" method="post" action = "{{URL::route('consult')}}" >
						<input type = "hidden" name = "id" value = "{{$doctor->id}}">
						{{csrf_field()}}
						<fieldset>
							@if(count($health_status))
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" value = "{{$health_status->problem}}">
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement">{{$health_status->statement}}</textarea>
										</label>
									</div>
								</div>
							</section>
							@else
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" >
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement"></textarea>
										</label>
									</div>
								</div>
							</section>
							@endif
						</fieldset>

						<footer>
							<button type="submit" class="btn btn-primary">
								Consult @  &#8377;{{$doctor->fees}}
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

	<!-- Modal -->
	<div class="modal fade" id="urgent" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">
						Consult Urgent
					</h4>
				</div>
				<div class="modal-body no-padding">

					<form id="login-form" method="post" action = "{{URL::route('uconsult')}}" class="smart-form">
						<input type = "hidden" name = "id" value = "{{$doctor->id}}">
						{{csrf_field()}}

						<fieldset>
							@if(count($health_status))
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" value = "{{$health_status->problem}}">
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement">{{$health_status->statement}}</textarea>
										</label>
									</div>
								</div>
							</section>
							@else
							<section>
								<div class="row">
									<label class="label col col-2">Problem</label>
									<div class="col col-10">
										<label class="input">
											<input type="text" name="problem" >
										</label>
									</div>
								</div>
							</section>

							<section>
								<div class="row">
									<label class="label col col-2">Statement</label>
									<div class="col col-10">
										<label class="textarea"> 
											<textarea name="statement"></textarea>
										</label>
									</div>
								</div>
							</section>
							@endif
						</fieldset>

						<footer>
							<button type="submit" class="btn btn-primary">
								Consult Urgent @  &#8377;{{$doctor->ufees}}
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

</body>

</html>