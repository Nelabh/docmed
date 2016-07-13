<aside id="left-panel">

	<!-- User info -->
	<div class="login-info">
		<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 

			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="{{URL::asset('img/avatars/sunny.png')}}" alt="me" class="online" /> 
				<span>
					{{$name}}
				</span>
			</a> 

		</span>
	</div>
	<!-- end user info -->

	<!-- NAVIGATION : This navigation is also responsive-->
	<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
			-->
			<ul>

				@if(Request::path() == 'dashboard')
				<li class="active">
					<a href="{{URL::route('dashboard')}}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>			
				</li>
				@else
				<li>
					<a href="{{URL::route('dashboard')}}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
				</li>
				@endif

				@if(Request::path() == 'history')
				<li class="active">
					<a href="{{URL::route('history')}}" title="History"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Consultation</span></a>			
				</li>
				@else
				<li>
					<a href="{{URL::route('history')}}" title="History"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Consultation</span></a>
				</li>
				@endif
				<li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">My Queries</span></a>
						
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Health Records</span></a>
						
					</li>
				@if(Request::path() == 'basic-info')
					<li class = "active">
						<a href="{{URL::route('basic_info')}}"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Basic Info</span></a>
						
					</li>
					@else
					<li>
						<a href="{{URL::route('basic_info')}}"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Basic Info</span></a>
						
					</li>
					@endif
					@if(Request::path() == 'health-status')
					<li class = "active">
						<a href="{{URL::route('health_status')}}"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Current Health Status</span></a>
						
					</li>
					@else
					<li>
						<a href="{{URL::route('health_status')}}"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Current Health Status</span></a>
						
					</li>
					@endif
					
<!-- 					<li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
						<ul>
							<li class="">
								<a href="layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
							</li>
							<li class="">
								<a href="skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
							</li>
							<li>
								<a href="applayout.html"><i class="fa fa-cube"></i> App Settings</a>
							</li>
						</ul>
					</li> -->

				</ul>
			</nav>
			

			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>
		