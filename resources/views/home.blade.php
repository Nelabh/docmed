<!DOCTYPE html>
<html lang="en-us" id="extr-page">
<head>
	<meta charset="utf-8">
	<title> DocMed</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- #CSS Links -->
	<!-- Basic Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

	<!-- SmartAdmin RTL Support -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		     <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		     <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		     <link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		     <!-- #FAVICONS -->
		     <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		     <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		     <!-- #GOOGLE FONT -->
		     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		     <!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
		Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	</head>
	
	<body class="container-fluid animated fadeInDown">

		<header class="row" id="header1" style="margin-bottom:2%; padding-top:10px;">

			<div class="col-sm-3 col-xs-12" id="logo-group">
				<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
			</div>
			<div class="col-sm-4 col-xs-12 col-sm-push-5" >

				<div class="project-context col-xs-4 col-sm-push-3 col-xs-push-4">

					<span class="project-selector dropdown-toggle " data-toggle="dropdown"><a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Login </a></span>
					<!-- Suggestion: populate this list with fetch and push technique -->
					
					<!-- end dropdown-menu-->

				</div>
				
				<div class="project-context col-xs-4 col-xs-push-3">
					@if($errors->has())
					<div class="has-error" >
						<p>
							{{$errors->first('email',':message')}} </p>
							<p>  {{$errors->first('password',':message')}} </p>
						</div>

						@endif
						<span class="project-selector dropdown-toggle " data-toggle="dropdown"><a class="btn btn-danger">Sign Up</a><i class="fa fa-angle-down"></i></span>
						<!-- Suggestion: populate this list with fetch and push technique -->
						<ul class="dropdown-menu">
							<li><a href="{{URL::route('signupform_doctor')}}">As Doctor</a></li>
							<li><a href="{{URL::route('signupform_patient')}}">As Patient</a></li>
							<li><a href="{{URL::route('signupform_medvend')}}">As Medicine Vendor</a></li>
							<li><a href="{{URL::route('signupform_pathology')}}">As Pathology Labs</a></li>



							
						</ul>
						<!-- end dropdown-menu-->

					</div>
				</div>
				

			</header>

			<div id="main" role="main" style="padding:0; background: transparent;">

				<!-- MAIN CONTENT -->
				<img class="img-responsive" src="{{URL::asset('img/banner02.jpg')}}" >

			</div>

			
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
								&times;
							</button>
							<h4 class="modal-title">
								<img src="img/logo.png" width="150" alt="SmartAdmin">
							</h4>
						</div>
						<div class="modal-body no-padding">

							<form  method="post" action="{{URL::route('login')}}" id="login-form" class="smart-form">
								{{csrf_field()}}
								<fieldset>
									<section>
										<div class="row">
											<label class="label col col-2">Username</label>
											<div class="col col-10">
												<label class="input"> <i class="icon-append fa fa-user"></i>
													<input type="email" name="email">
												</label>
											</div>
										</div>
									</section>

									<section>
										<div class="row">
											<label class="label col col-2">Password</label>
											<div class="col col-10">
												<label class="input"> <i class="icon-append fa fa-lock"></i>
													<input type="password" name="password">
												</label>
												<div class="note">
													<a href="javascript:void(0)">Forgot password?</a>
												</div>
											</div>
										</div>
									</section>


									<div class="form-group">
										<label class="col-md-2 control-label">You want to login as:</label>
										<div class=" col-md-10 inline-group">
											<label class="radio radio-inline">
												<input type="radio"  class="radiobox" name="level" required value="1">
												<span>Doctor</span> 
												
											</label>
											<label class="radio radio-inline">
												<input type="radio" class="radiobox" name="level" value="2">
												<span>Patient</span>  
											</label>
											<label class="radio radio-inline">
												<input type="radio" class="radiobox" name="level" value="3">
												<span>Medicine Provider</span> 
											</label>

											<label class="radio radio-inline">
												<input type="radio" class="radiobox" name="level" value="4">
												<span>Pathology Labs</span> 
											</label>
										</div>
									</div>
									





									<section>
										<div class="row">
											<div class="col col-2"></div>
											<div class="col col-10">
												<label class="checkbox">
													<input type="checkbox" name="remember" checked="">
													<i></i>Keep me logged in</label>
												</div>
											</div>
										</section>
									</fieldset>
									
									<footer>
										<button type="submit" class="btn btn-primary">
											Sign in
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
		<!-- 			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
							<form action="index.html" id="login-form" class="smart-form client-form">
								<header>
									Sign In
								</header>
								<fieldset>
									
									<section>
										<label class="label">E-mail</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="email" name="email">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
									</section>
									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password">
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
										<div class="note">
											<a href="forgotpassword.html">Forgot password?</a>
										</div>
									</section>
									<section>
										<label class="checkbox">
											<input type="checkbox" name="remember" checked="">
											<i></i>Stay signed in</label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										Sign in
									</button>
								</footer>
							</form>
						</div>
						
						<h5 class="text-center"> - Or sign in using -</h5>
															
							<ul class="list-inline text-center">
								<li>
									<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
						
						</div> -->
					</div>
				</div>

			</div>

			<!--================================================== -->	

			<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
			<script src="js/plugin/pace/pace.min.js"></script>

			<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');} </script>

			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

			<!-- IMPORTANT: APP CONFIG -->
			<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
			<![endif]-->

			<!-- MAIN APP JS FILE -->
			<script src="js/app.min.js"></script>

			<script type="text/javascript">
			runAllForms();
			$(function() {
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						},
						level : {
							required : true,
						}
					},
					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						},
						level : {
							required : 'Please select your level'
						}
					},
					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			});
			</script>

		</body>
		</html>