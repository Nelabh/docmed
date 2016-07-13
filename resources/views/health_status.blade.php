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
						<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard </h1>
					</div>

				</div>
				<!-- widget grid -->
				<section id="widget-grid" class="">
					<div class="row">

						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false">
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
								<span class="widget-icon"> <i class="fa fa-table"  ></i> </span>
								<h2>Standard Data Tables </h2>

							</header>

							<!-- widget div-->
							<div>

								<!-- widget edit box -->

								<!-- end widget edit box -->

								<!-- widget content -->
								<div class="widget-body no-padding"><div class = "pull-right"><a type="button" data-toggle="modal"  class="btn btn-primary" href="#myModal">
									Add New Record
								</a></div>

								<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
									<thead>			                
										<tr>
											<th data-hide="phone">#</th>
											<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Problem</th>
											<th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i>Statement</th>
											<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Date Time</th>
										</tr>
									</thead><?php $i=1; ?>
									<tbody>@if(count($health_status))
										@foreach($health_status as $hs)
										<tr>	
											<td>{{$i++}}</td>
											<td>{{$hs->problem}}</td>
											<td>{{$hs->statement}}</td>
											<td>{{$hs->created_at}}</td>
										</tr>
										@endforeach
										@else
										<tr> <td colspan = "4" class = "text-center"> No Record Available</td> </tr>
										@endif

									</tbody>
								</table>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
				</article>

			</div>


		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- END MAIN PANEL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title">
				Add New Record
				</h4>
			</div>
			<div class="modal-body no-padding">

				<form id="login-form" class="smart-form" method = "post" action = "{{URL::route('edit_healthstatus')}}">
					{{csrf_field()}}
					<fieldset>
						<section>
							<label class="label">Problem</label>
							<label class="input">
								<input type="text" name = "problem" required>
							</label>
						</section>
						<section>
							<label class="label">Statement</label>
							<label class="textarea">
								<textarea rows="3" class="custom-scroll" name = "statement"></textarea>
							</label>
						</section>
					</fieldset>
					<footer>
						<button type="submit" class="btn btn-primary">
							Add As Current Record
						</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Cancel
						</button>

					</footer>
				</form>						


			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>


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
	<!-- PAGE RELATED PLUGIN(S) -->
	<script src = "{{URL::asset('js/plugin/datatables/jquery.dataTables.min.js')}}"></script>
	<script src = "{{URL::asset('js/plugin/datatables/dataTables.colVis.min.js')}}"></script>
	<script src = "{{URL::asset('js/plugin/datatables/dataTables.tableTools.min.js')}}"></script>
	<script src = "{{URL::asset('js/plugin/datatables/dataTables.bootstrap.min.js')}}"></script>
	<script src = "{{URL::asset('js/plugin/datatable-responsive/datatables.responsive.min.js')}}"></script>

	<script type="text/javascript">

		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/	

			/* BASIC ;*/
			var responsiveHelper_dt_basic = undefined;
			var responsiveHelper_datatable_fixed_column = undefined;
			var responsiveHelper_datatable_col_reorder = undefined;
			var responsiveHelper_datatable_tabletools = undefined;

			var breakpointDefinition = {
				tablet : 1024,
				phone : 480
			};

			$('#dt_basic').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				"t"+
				"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});

		})
</script>

</body>

</html>