<aside id="left-panel">

	<!-- User info -->
	<div class="login-info">
		<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 

			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="img/avatars/sunny.png" alt="me" class="online" /> 
				<span>
					{{Auth::user()->email}}
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

				@if(Request::path() == 'admin/dashboard')
				<li class="active">
					<a href="{{URL::route('admin_dashboard')}}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>			
				</li>
				@else
				<li>
					<a href="{{URL::route('admin_dashboard')}}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
				</li>
				@endif

				@if(Request::path() == 'admin/verify-doctor')
				<li class="active">
					<a href="{{URL::route('verify_doctor')}}" title="doctor"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Doctors</span></a>			
				</li>
				@else
				<li class="active">
					<a href="{{URL::route('verify_doctor')}}" title="doctor"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Doctors</span></a>			
				</li>
				@endif


				@if(Request::path() == 'admin/verify-vendor')
				<li class="top-menu-invisible">
						<a href="{{URL::route('verify_vendor')}}"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">Medicine Vendors</span></a>
						
					</li>
				@else
				<li class="top-menu-invisible">
						<a href="{{URL::route('verify_vendor')}}"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">Medicine Vendors</span></a>
					</li>
				@endif
				@if(Request::path() == 'admin/verify-pathologist')
				<li class="top-menu-invisible">
						<a href="{{URL::route('verify_pathologist')}}"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">Pathologist</span></a>
						
					</li>
				@else
				<li class="top-menu-invisible">
						<a href="{{URL::route('verify_pathologist')}}"><i class="fa fa-lg fa-fw fa-cube"></i> <span class="menu-item-parent">Pathologist</span></a>
					</li>
				@endif

				@if(Request::path() == 'admin/edit-doctor')
				<li class="active">
					<a href="{{URL::route('edit_doctor')}}" title="doctor"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Edit Doctors</span></a>			
				</li>
				@else
				<li class="active">
					<a href="{{URL::route('edit_doctor')}}" title="doctor"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Edit Doctors</span></a>			
				</li>
				@endif

				@if(Request::path() == 'admin/edit-vendor')
				<li class="active">
					<a href="{{URL::route('edit_vendor')}}" title="vendor"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Edit Vendor</span></a>			
				</li>
				@else
				<li class="active">
					<a href="{{URL::route('edit_vendor')}}" title="vendor"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Edit Vendor</span></a>			
				</li>
				@endif

				@if(Request::path() == 'admin/edit-pathologist')
				<li class="active">
					<a href="{{URL::route('edit_pathologist')}}" title="pathology"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Edit Pathologist</span></a>			
				</li>
				@else
				<li class="active">
					<a href="{{URL::route('edit_pathologist')}}" title="pathology"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Edit Patholoist</span></a>			
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
		