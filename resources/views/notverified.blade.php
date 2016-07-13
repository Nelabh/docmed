<!DOCTYPE html>
<html lang="en-us">

	@include('header')
	<style>
			.error-text-2 {
				text-align: center;
				font-size: 700%;
				font-weight: bold;
				font-weight: 100;
				color: #333;
				line-height: 1;
				letter-spacing: -.05em;
				background-image: -webkit-linear-gradient(92deg,#333,#ed1c24);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}
			.particle {
				position: absolute;
				top: 50%;
				left: 50%;
				width: 1rem;
				height: 1rem;
				border-radius: 100%;
				background-color: #ed1c24;
				background-image: -webkit-linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.3) 75%,rgba(0,0,0,0));
				box-shadow: inset 0 0 1px 1px rgba(0,0,0,.25);
			}
			.particle--a {
				-webkit-animation: particle-a 1.4s infinite linear;
				-moz-animation: particle-a 1.4s infinite linear;
				-o-animation: particle-a 1.4s infinite linear;
				animation: particle-a 1.4s infinite linear;
			}
			.particle--b {
				-webkit-animation: particle-b 1.3s infinite linear;
				-moz-animation: particle-b 1.3s infinite linear;
				-o-animation: particle-b 1.3s infinite linear;
				animation: particle-b 1.3s infinite linear;
				background-color: #00A300;
			}
			.particle--c {
				-webkit-animation: particle-c 1.5s infinite linear;
				-moz-animation: particle-c 1.5s infinite linear;
				-o-animation: particle-c 1.5s infinite linear;
				animation: particle-c 1.5s infinite linear;
				background-color: #57889C;
			}@-webkit-keyframes particle-a {
			0% {
			-webkit-transform: translate3D(-3rem,-3rem,0);
			z-index: 1;
			-webkit-animation-timing-function: ease-in-out;
			} 25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			-webkit-transform: translate3D(4rem, 3rem, 0);
			opacity: 1;
			z-index: 1;
			-webkit-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .75rem;
			height: .75rem;
			opacity: .5;
			}
		
			100% {
			-webkit-transform: translate3D(-3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-moz-keyframes particle-a {
			0% {
			-moz-transform: translate3D(-3rem,-3rem,0);
			z-index: 1;
			-moz-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			-moz-transform: translate3D(4rem, 3rem, 0);
			opacity: 1;
			z-index: 1;
			-moz-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .75rem;
			height: .75rem;
			opacity: .5;
			}
		
			100% {
			-moz-transform: translate3D(-3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-o-keyframes particle-a {
			0% {
			-o-transform: translate3D(-3rem,-3rem,0);
			z-index: 1;
			-o-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			-o-transform: translate3D(4rem, 3rem, 0);
			opacity: 1;
			z-index: 1;
			-o-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .75rem;
			height: .75rem;
			opacity: .5;
			}
		
			100% {
			-o-transform: translate3D(-3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@keyframes particle-a {
			0% {
			transform: translate3D(-3rem,-3rem,0);
			z-index: 1;
			animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			transform: translate3D(4rem, 3rem, 0);
			opacity: 1;
			z-index: 1;
			animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .75rem;
			height: .75rem;
			opacity: .5;
			}
		
			100% {
			transform: translate3D(-3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-webkit-keyframes particle-b {
			0% {
			-webkit-transform: translate3D(3rem,-3rem,0);
			z-index: 1;
			-webkit-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			-webkit-transform: translate3D(-3rem, 3.5rem, 0);
			opacity: 1;
			z-index: 1;
			-webkit-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			-webkit-transform: translate3D(3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-moz-keyframes particle-b {
			0% {
			-moz-transform: translate3D(3rem,-3rem,0);
			z-index: 1;
			-moz-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			-moz-transform: translate3D(-3rem, 3.5rem, 0);
			opacity: 1;
			z-index: 1;
			-moz-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			-moz-transform: translate3D(3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-o-keyframes particle-b {
			0% {
			-o-transform: translate3D(3rem,-3rem,0);
			z-index: 1;
			-o-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			-o-transform: translate3D(-3rem, 3.5rem, 0);
			opacity: 1;
			z-index: 1;
			-o-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			-o-transform: translate3D(3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@keyframes particle-b {
			0% {
			transform: translate3D(3rem,-3rem,0);
			z-index: 1;
			animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.5rem;
			height: 1.5rem;
			}
		
			50% {
			transform: translate3D(-3rem, 3.5rem, 0);
			opacity: 1;
			z-index: 1;
			animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			transform: translate3D(3rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-webkit-keyframes particle-c {
			0% {
			-webkit-transform: translate3D(-1rem,-3rem,0);
			z-index: 1;
			-webkit-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.3rem;
			height: 1.3rem;
			}
		
			50% {
			-webkit-transform: translate3D(2rem, 2.5rem, 0);
			opacity: 1;
			z-index: 1;
			-webkit-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			-webkit-transform: translate3D(-1rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-moz-keyframes particle-c {
			0% {
			-moz-transform: translate3D(-1rem,-3rem,0);
			z-index: 1;
			-moz-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.3rem;
			height: 1.3rem;
			}
		
			50% {
			-moz-transform: translate3D(2rem, 2.5rem, 0);
			opacity: 1;
			z-index: 1;
			-moz-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			-moz-transform: translate3D(-1rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@-o-keyframes particle-c {
			0% {
			-o-transform: translate3D(-1rem,-3rem,0);
			z-index: 1;
			-o-animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.3rem;
			height: 1.3rem;
			}
		
			50% {
			-o-transform: translate3D(2rem, 2.5rem, 0);
			opacity: 1;
			z-index: 1;
			-o-animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			-o-transform: translate3D(-1rem,-3rem,0);
			z-index: -1;
			}
			}
		
			@keyframes particle-c {
			0% {
			transform: translate3D(-1rem,-3rem,0);
			z-index: 1;
			animation-timing-function: ease-in-out;
			}
		
			25% {
			width: 1.3rem;
			height: 1.3rem;
			}
		
			50% {
			transform: translate3D(2rem, 2.5rem, 0);
			opacity: 1;
			z-index: 1;
			animation-timing-function: ease-in-out;
			}
		
			55% {
			z-index: -1;
			}
		
			75% {
			width: .5rem;
			height: .5rem;
			opacity: .5;
			}
		
			100% {
			transform: translate3D(-1rem,-3rem,0);
			z-index: -1;
			}
			}
		</style>
	
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
		<!-- END TOP NAVIGATION HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
				@include('topnavigation')

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

				<!-- row -->
				
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
						<div class="row">
							<div class="col-sm-12">
								<div class="text-center error-box">
									<h1 class="error-text-2 bounceInDown animated"> Not verified <span class="particle particle--c"></span><span class="particle particle--a"></span><span class="particle particle--b"></span></h1>
									<h2 class="font-xl"><strong><i class="fa fa-fw fa-warning fa-lg text-warning"></i> We will <u>be back</u> shortly!!</strong></h2>
									<br />
									<p class="lead">
										Wait till your account is verified.</b>
									</p>
									
									<br>
									
								
				
								</div>
				
							</div>
				
						</div>
				
					</div>

				<!-- end row -->

			
			
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