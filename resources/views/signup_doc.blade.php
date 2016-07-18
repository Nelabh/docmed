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
	<link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/font-awesome.min.css')}}">

	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
	<link rel="stylesheet" type="text/css" media="screen" href = "{{URL::asset('css/smartadmin-production-plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" media="screen" href = "{{URL::asset('css/smartadmin-production.min.css')}}">
	<link rel="stylesheet" type="text/css" media="screen" href = "{{URL::asset('css/smartadmin-skins.min.css')}}">

	<!-- SmartAdmin RTL Support -->
	<link rel="stylesheet" type="text/css" media="screen" href = "{{URL::asset('css/smartadmin-rtl.min.css')}}"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		     <link rel="stylesheet" type="text/css" media="screen" href = "css/your_style.css"> -->

		     <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		     <link rel="stylesheet" type="text/css" media="screen" href = "{{URL::asset('css/demo.min.css')}}">

		     <!-- #FAVICONS -->
		     <link rel="shortcut icon" href = "{{URL::asset('img/favicon/favicon.ico')}}" type="image/x-icon">
		     <link rel="icon" href = "{{URL::asset('img/favicon/favicon.ico')}}" type="image/x-icon">

		     <!-- #GOOGLE FONT -->
		     <link rel="stylesheet" href = "http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		     <!-- #APP SCREEN / ICONS -->
		<!-- Specifying a Webpage Icon for Web Clip 
		Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href = "{{URL::asset('img/splash/sptouch-icon-iphone.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href = "{{URL::asset('img/splash/touch-icon-ipad.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href = "{{URL::asset('img/splash/touch-icon-iphone-retina.png')}}">
		<link rel="apple-touch-icon" sizes="152x152" href = "{{URL::asset('img/splash/touch-icon-ipad-retina.png')}}">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href = "{{URL::asset('img/splash/ipad-landscape.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href = "{{URL::asset('img/splash/ipad-portrait.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href = "{{URL::asset('img/splash/iphone.png')}}" media="screen and (max-device-width: 320px)">

	</head>
	
	<body id="login">

		<header id="header">
			<!--<span id="logo"></span>-->

			<div id="logo-group">
				<span id="logo"> <img src="{{URL::asset('img/logo.png')}}" alt="SmartAdmin"> </span>

				<!-- END AJAX-DROPDOWN -->
			</div>

			<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Already registered?</span> <a href = "{{URL::route('home')}}" class="btn btn-danger">Sign In</a> </span>

		</header>

		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big">DocMed</h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
								<div class="login-app-icons">
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Frontend Template</a>
									<a href="javascript:void(0);" class="btn btn-danger btn-sm">Find out more</a>
								</div>
							</div>
							
							<img src = "{{URL::asset('img/demo/iphoneview.png')}}" alt="" class="pull-right display-image" style="width:210px">
							
						</div>

						
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<div class="well no-padding">

							<form action="{{URL::route('signup_doctor')}}" id="smart-form-register" method = "post" class="smart-form client-form">
								{{csrf_field()}}

								<input type="hidden" name="privilege" value = "1">
								<header>
									Doctor Registration Details
								</header>

								<fieldset>
									<section>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="text" name="name" required placeholder="Name">
										</label>
									</section>

									<section>
										<label class="input"> <i class="icon-append fa fa-envelope"></i>
											<input type="email" name="email" required placeholder="Email address">
										</label>
									</section>
									<section>
										<label class="input"> <i class="icon-append fa fa-phone"></i>
											<input type="tel" name="mobile" id = "mobile" maxlength = "10" placeholder="Mobile" aria-required="true" aria-invalid="false" class="valid">
										</label>
									</section>
									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password" required placeholder="Password" id="password">
										</label>
									</section>
									<section>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password_confirmation" required placeholder="Confirm Password" id="password_confirmation">
										</label>
									</section>

									<section>
										<label class="select"> 
											<select name="country" class= "countries" id="countryId" required >
												<option>Select Country</option>
											</select>
											<i></i>
										</label>
									</section>

									<section>
										<label class="select"> 
											<select name="state" id="stateId" class= "states"   required>
												<option>Select State</option>
											</select>
											<i></i>
										</label>
									</section>

									<section>
										<label class="select"> 
											<select name="city" id="cityId" class= "cities"  required placeholder="City">
												<option>Select City</option>
											</select>
											<i></i>
										</label>
									</section>
									<section>
										<label class="textarea"> <i class="icon-append fa fa-graduation-cap"></i>
											<textarea rows="3" required="required" name="qualification" placeholder="Enter your Qualification details"></textarea>											</textarea></label>
										</section>

										<section>
											<label class="select">
												<select name="speciality" required>
													@foreach($speciality as $sp)
													<option value="{{$sp->id}}">{{$sp->speciality_name}}</option>
													@endforeach
												</select> <i></i> </label>
											</section>


											<div class="row">
												<section class="col col-6">
													<label class="select">
														<select required name="gender">
															<option value="0" selected="" disabled="">Gender</option>
															<option value="1">Male</option>
															<option value="2">Female</option>
															<option value="3">Prefer not to answer</option>
														</select> <i></i> </label>
													</section>
													<section class="col col-6">
														<label class="input"> <i class="icon-append fa fa-question"></i>
															<input type="text" required name="mci" placeholder="IMR">
														</label>
													</section>
												</div>

												<section>

													<label class="checkbox">
														<input type="checkbox" required name="terms" id="terms">
														<i></i>I agree with the <a href="#" data-toggle="modal" data-target="#myModal"> Terms and Conditions </a></label>
													</section>
												</fieldset>
												<footer>
													<button type="submit" class="btn btn-primary">
														Register
													</button>
													@if($errors->has())
													<div class="has-error" >
														<p>
															{{$errors->first('name',':message')}} 
														</p>

														<p>
															{{$errors->first('email',':message')}} 
														</p>
														<p>
															{{$errors->first('password',':message')}} 
														</p>
														<p>
															{{$errors->first('password_confirmation',':message')}} 
														</p>
														<p>
															{{$errors->first('city',':message')}} 
														</p>
														<p>
															{{$errors->first('qualification',':message')}}
														</p>
														<p>
															{{$errors->first('speciality',':message')}}
														</p>
														<p>
															{{$errors->first('gender',':message')}}
														</p>
														<p> 
															{{$errors->first('mci',':message')}} 
														</p>
													</div>
													@endif
													
													@if(Session::has('message'))
													<div class = "alert alert-block alert-danger">{{Session::get('message')}}</div>
													@endif
												</footer>


											</form>

										</div>

									</div>
								</div>
							</div>

						</div>

						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
									</div>
									<div class="modal-body custom-scroll terms-body">

										<div id="left">






										</div>

										<br><br>



									</div>

								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<!--================================================== -->	

						<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
						<script src = "{{URL::asset('js/plugin/pace/pace.min.js')}}"></script>

						<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
						<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
						<script> if (!window.jQuery) { document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');} </script>

						<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
						<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

						<!-- IMPORTANT: APP CONFIG -->
						<script src = "{{URL::asset('js/app.config.js')}}"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->
		<script src="http://iamrohit.in/lab/js/location.js"></script>
		<!-- BOOTSTRAP JS -->		
		<script src = "{{URL::asset('js/bootstrap/bootstrap.min.js')}}"></script>

		<!-- JQUERY VALIDATE -->
		<script src = "{{URL::asset('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>
		
		<!-- JQUERY MASKED INPUT -->
		<script src = "{{URL::asset('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
			<![endif]-->

			<!-- MAIN APP JS FILE -->
			<script src = "{{URL::asset('js/app.min.js')}}"></script>

			<script type="text/javascript">
			runAllForms();
			
			// Model i agree button
			$("#i-agree").click(function(){
				$this=$("#terms");
				if($this.checked) {
					$('#myModal').modal('toggle');
				} else {
					$this.prop('checked', true);
					$('#myModal').modal('toggle');
				}
			});
			
			// Validation
			$(function() {
				// Validation
				$("#smart-form-register").validate({

					// Rules for form validation
					rules : {
						name : {
							required : true
						},
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						},
						password_confirmation : {
							required : true,
							minlength : 3,
							maxlength : 20,
							equalTo : '#password'
						},
						city : {
							required : true
						},
						qualification : {
							required : true
						},
						mobile : {
							required : true
						},
						speciality : {
							required : true
						},
						gender : {
							required : true
						},
						mci : {
							required : true
						},
						terms : {
							required : true
						}
					},

					// Messages for form validation
					messages : {
						login : {
							required : 'Please enter your login'
						},
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						},
						password_confirmation : {
							required : 'Please enter your password one more time',
							equalTo : 'Please enter the same password as above'
						},
						name : {
							required : 'Please enter your name'
						},

						mobile : {
							required : 'Please enter your mobile'
						},
						speciality : {
							required : 'Please select your Speciality'
						},
						gender : {
							required : 'Please select your gender'
						},

						mci : {
							required : 'Please enter your MCI number'
						},

						qualification : {
							required : 'Please enter your Qualification'
						},
						terms : {
							required : 'You must agree with Terms and Conditions'
						}
					},


					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});

});
document.getElementById('mobile').addEventListener('keydown', function(e)
{
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
             (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
             (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
             (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
             (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
             return;
         }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        	e.preventDefault();
        }
    });

</script>

</body>
</html>