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
		<link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/font-awesome.css">
    <link rel="stylesheet" href="front/css/custom-variation2.css">
    <link rel="stylesheet" href="front/css/responsive.css"> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->


	</head>
	
	<body class="container-fluid animated fadeInDown">


		<!-- <header class="row" id="header1" style="margin-bottom:2%; padding-top:10px;">

			<div class="col-sm-3 col-xs-12" id="logo-group">
				<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
			</div>
			@if(Session::has('message'))
			<div class = "alert alert-block alert-danger">{{Session::get('message')}}</div>
			@endif
			<div class="col-sm-4 col-xs-12 col-sm-push-5" >

				<div class="project-context col-xs-4 col-sm-push-3 col-xs-push-4">

					<span class="project-selector dropdown-toggle " data-toggle="dropdown"><a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Login </a></span>
					

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
						<ul class="dropdown-menu">
							<li><a href="{{URL::route('signupform_doctor')}}">As Doctor</a></li>
							<li><a href="{{URL::route('signupform_patient')}}">As Patient</a></li>
							<li><a href="{{URL::route('signupform_medvend')}}">As Medicine Vendor</a></li>
							<li><a href="{{URL::route('signupform_pathology')}}">As Pathology Labs</a></li>



							
						</ul>
					
					</div>
				</div>
				

			</header> -->

			<div id="main" role="main" style="padding:0; background: transparent;">

			
<div class="outer-sync var2">
      <!--==================================
       		 Header parts starts here
        ==================================-->
	<header id="header1">
    	<div class="container">
        <div class="row">
        <div class="col-sm-12 top-strip">
            <h2 class="delt-bord">Email :<a href="#">info@medicaltheme.com</a></h2>
            <h2>Call :<a href="#">9999999</a></h2>
        </div><!-- /.col-sm-12 -->
        <div class="col-sm-12 bottom-strip p-both">
        <div class="col-sm-3 logo">
        	<a href="#"><img src="front/images/logo-var2.png" alt="medical theams" /></a>
        </div><!-- /.col-sm-3 -->
        <div class="col-sm-9 navigation">
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
						<span class="project-selector dropdown-toggle" data-toggle="dropdown"><a class="btn btn-danger">Sign Up</a><i class="fa fa-angle-down"></i></span>
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
        </div><!-- /.col-sm-9 -->
        </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
        </div><!-- /.container -->

    </header><!-- #header -->                                            

      <!--==================================
       		 Header parts ends here
       	  ==================================-->
      <!--==================================
       		Banner parts starts here
          ==================================-->
<div class="banner-wrapper">
	<div class="banner">
    	<img src="front/images/banner2.jpg" alt="banner" />
    </div><!-- /.banner -->
    <div class="magnet">
    <div class="container">
    <div class="row">
    	
    </div><!-- /.row -->
    </div><!-- /.container -->  
    </div><!-- /.magnet -->
</div><!-- /.banner-wrapper -->    
      <!--==================================
       		Banner parts ends here
          ==================================-->
      <!--==================================
       		service Quick links starts here
          ==================================-->    
    <div class="first-section p82-topbot">
    <div class="container">
    <div class="row">
       			 <div class="col-sm-3 element-lft lft-bottom">
                      <img src="front/images/icons/icon-doc-var1.png" alt="Find a Doctor">
                      <div class="text-needleft">
                      <h2>Find a Doctor</h2>
                      <p>Scrambled it to make a type specimen book. It has survived not only five centuries</p>
                      </div>
                       </div>

                 <div class="col-sm-3 element-lft lft-bottom">
                      <img src="front/images/icons/icon-dep-var1.png" alt="Departments">
                      <div class="text-needleft">
                      <h2>Departments</h2>
                      <p>Scrambled it to make a type specimen book. It has survived not only five centuries</p>
                      </div>
                 </div>

                 <div class="col-sm-3 element-lft">
                       <img src="front/images/icons/icon-loc-var1.png" alt="Our Locations">
                       <div class="text-needleft">
                       <h2>Our Locations</h2>
                       <p>Scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
                 </div>

                 <div class="col-sm-3 element-lft">
                       <img src="front/images/icons/icon-pay-var1.png" alt="Pay your bill online">
                       <div class="text-needleft">
                       <h2>pay your bill online</h2>
                       <p>Scrambled it to make a type specimen book. It has survived not only five centuries</p>
                       </div>
                 </div>
    </div><!-- /.row -->
    </div><!-- /.container -->  
    </div><!-- /.first-section -->      
     <!--==================================
       		Service Quick liniks ends here
          ==================================-->
                  
     <!--==================================
       		Service section starts here
          ==================================-->
    <div class="third-section p82-topbot">
    <div class="container">
    <div class="row">
    	<div class="col-sm-12">
    	<h2 class="title-grp">
                        <span>Our</span>
                        Services
                    </h2>
        </div>            
        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <img src="front/images/icons/icon-med-var2.png" alt="med">
                <h2>medical SERVICE</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <img src="front/images/icons/icon-serv-var2.png" alt="serv">
                <h2>24 Hours Service</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <img src="front/images/icons/icon-emerg-var2.png" alt="emerg">
                <h2>Emergency Departments</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="service-box">
                <img src="front/images/icons/icon-xray-var2.png" alt="xray">
                <h2>x-RAY</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <img src="front/images/icons/icon-card-var2.png" alt="card">
                    <h2>CARDIOLOGY</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
           
               </div>
        </div>

        <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <img src="front/images/icons/icon-neur-var2.png" alt="neur">
                    <h2>nEUROLOGY</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
        </div>

        <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <img src="front/images/icons/icon-preg-var2.png" alt="preg">
                    <h2>PREGNANCY</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 
                </div>
        </div>

         <div class="col-md-3 col-sm-6">
                <div class="service-box">
                    <img src="front/images/icons/icon-dent-var2.png" alt="dent">
                    <h2>DENTAL</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
         </div>

    </div><!-- /.row -->
    </div><!-- /.container -->  
    </div><!-- /.second-section -->      
           
     <!--==================================
       		Service section ends here
          ==================================-->  
     <!--==================================
       		footer parts starts here
          ==================================-->     
     
    <div class="copyrights">
    	<p>Gary Global Solutions © 2016 | All Rights Reserved</p>
    </div><!-- /.copy-rights -->
                   

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

			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
			<script> if (!window.jQuery.ui) { document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

			<!-- IMPORTANT: APP CONFIG -->
			<script src="js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->		
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<!-- JQUERY VALIDATE -->
	
		
		<!-- JQUERY MASKED INPUT -->
		<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>
		
		<!--[if IE 8]>
			
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
			
			<![endif]-->

			<!-- MAIN APP JS FILE -->
			<script src="js/app.min.js"></script>

    <script src="front/js/vendor/jquery-min.js"></script>
    <script src="front/js/vendor/modernizr.custom.68477.js"></script>
    <script src="front/js/vendor/bootstrap.min.js"></script>
    <script src="front/js/plugins.js"></script>
    <script src="front/js/vendor/jquery.bxslider.js"></script>
    <script src="front/js/main.js"></script>
    <script type="text/javascript" src="front/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript">
	"use strict";
        $('.form_date').datetimepicker({
            language:  'fr',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    
    </script>

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