<<!DOCTYPE html>
<html>
<?php echo ($header) ?> 
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Remove "hor-menu-light" class to have a horizontal menu with theme background instead of white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) in the responsive menu below along with sidebar menu. So the horizontal menu has 2 seperate versions -->
	
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<form class="search-form" action="extra_search.html" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
		
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="../../assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Admin </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="login.html">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU1 -->
			<ul class="page-sidebar-menu hidden-sm hidden-xs" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->
			
			
				
				<?php echo $submenu; ?>
				
			</ul>
			<!-- END SIDEBAR MENU1 -->
			<!-- BEGIN RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
			<ul class="page-sidebar-menu visible-sm visible-xs" data-slide-speed="200" data-auto-scroll="true">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search sidebar-search-bordered" action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn submit"><i class="icon-magnifier"></i></button>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="index.html">
					Dashboard <span class="selected">
					</span>
					<span class="arrow open">
					</span>
					</a>
					<ul class="sub-menu">
						<li class="active open">
							<a href="javascript:;">
							<i class="fa fa-cogs"></i>
							<span class="title">
							Page Layouts </span>
							<span class="arrow open">
							</span>
							</a>
							<ul class="sub-menu">
								<li class="active">
									<a href="layout_horizontal_sidebar_menu.html">
									Horizontal & Sidebar Menu </a>
								</li>
								<li>
									<a href="index_horizontal_menu.html">
									Dashboard & Mega Menu </a>
								</li>
								<li>
									<a href="layout_horizontal_menu1.html">
									Horizontal Mega Menu 1 </a>
								</li>
								<li>
									<a href="layout_horizontal_menu2.html">
									Horizontal Mega Menu 2 </a>
								</li>
								<li>
									<a href="layout_fontawesome_icons.html">
									<span class="badge badge-roundless badge-danger">new</span>Layout with Fontawesome Icons</a>
								</li>
								<li>
									<a href="layout_glyphicons.html">
									Layout with Glyphicon</a>
								</li>
								<li>
									<a href="layout_full_height_portlet.html">
									<span class="badge badge-roundless badge-success">new</span>Full Height Portlet</a>
								</li>
								<li>
									<a href="layout_full_height_content.html">
									<span class="badge badge-roundless badge-warning">new</span>Full Height Content</a>
								</li>
								<li>
									<a href="layout_search_on_header1.html">
									Search Box On Header 1 </a>
								</li>
								<li>
									<a href="layout_search_on_header2.html">
									Search Box On Header 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option1.html">
									Sidebar Search Option 1 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option2.html">
									Sidebar Search Option 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_reversed.html">
									<span class="badge badge-roundless badge-warning">
									new </span>
									Right Sidebar Page </a>
								</li>
								<li>
									<a href="layout_sidebar_fixed.html">
									Sidebar Fixed Page </a>
								</li>
								<li>
									<a href="layout_sidebar_closed.html">
									Sidebar Closed Page </a>
								</li>
								<li>
									<a href="layout_ajax.html">
									Content Loading via Ajax </a>
								</li>
								<li>
									<a href="layout_disabled_menu.html">
									Disabled Menu Links </a>
								</li>
								<li>
									<a href="layout_blank_page.html">
									Blank Page </a>
								</li>
								<li>
									<a href="layout_boxed_page.html">
									Boxed Page </a>
								</li>
								<li>
									<a href="layout_language_bar.html">
									Language Switch Bar </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-th-list"></i>
							<span class="title">
							Portlets </span>
							<span class="arrow ">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="portlet_general.html">
									General Portlets </a>
								</li>
								<li>
									<a href="portlet_draggable.html">
									Draggable Portlets </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							<i class="fa fa-map-marker"></i>
							<span class="title">
							Maps </span>
							<span class="arrow ">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="maps_google.html">
									Google Maps </a>
								</li>
								<li>
									<a href="maps_vector.html">
									Vector Maps </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="charts.html">
							<i class="fa fa-bar-chart-o"></i>
							<span class="title">
							Visual Charts </span>
							</a>
						</li>
						<li>
							<a href="login.html">
							<i class="fa fa-user"></i>
							<span class="title">
							Login Page </span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					Mega <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="index_horizontal_menu.html">
									Dashboard & Mega Menu </a>
								</li>
								<li>
									<a href="layout_fontawesome_icons.html">
									<span class="badge badge-roundless badge-danger">new</span>Layout with Fontawesome Icons</a>
								</li>
								<li>
									<a href="layout_glyphicons.html">
									Layout with Glyphicon</a>
								</li>
								<li>
									<a href="layout_full_height_portlet.html">
									<span class="badge badge-roundless badge-success">new</span>Full Height Portlet</a>
								</li>
								<li>
									<a href="layout_full_height_content.html">
									<span class="badge badge-roundless badge-warning">new</span>Full Height Content</a>
								</li>
								<li>
									<a href="layout_horizontal_sidebar_menu.html">
									Horizontal & Sidebar Menu </a>
								</li>
								<li>
									<a href="layout_horizontal_menu1.html">
									Horizontal Mega Menu 1 </a>
								</li>
								<li>
									<a href="layout_horizontal_menu2.html">
									Horizontal Mega Menu 2 </a>
								</li>
								<li>
									<a href="layout_search_on_header1.html">
									Search Box On Header 1 </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							More Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_search_on_header2.html">
									Search Box On Header 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option1.html">
									Sidebar Search Option 1 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option2.html">
									Sidebar Search Option 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_reversed.html">
									<span class="badge badge-roundless badge-success">
									new </span>
									Right Sidebar Page </a>
								</li>
								<li>
									<a href="layout_sidebar_fixed.html">
									Sidebar Fixed Page </a>
								</li>
								<li>
									<a href="layout_sidebar_closed.html">
									Sidebar Closed Page </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Even More <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_ajax.html">
									Content Loading via Ajax </a>
								</li>
								<li>
									<a href="layout_disabled_menu.html">
									Disabled Menu Links </a>
								</li>
								<li>
									<a href="layout_blank_page.html">
									Blank Page </a>
								</li>
								<li>
									<a href="layout_boxed_page.html">
									Boxed Page </a>
								</li>
								<li>
									<a href="layout_language_bar.html">
									Language Switch Bar </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					Full Mega <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="index_horizontal_menu.html">
									Dashboard & Mega Menu </a>
								</li>
								<li>
									<a href="layout_glyphicons.html">
									Layout with Glyphicon <span class="badge badge-roundless badge-danger">
									new </span>
									</a>
								</li>
								<li>
									<a href="layout_horizontal_sidebar_menu.html">
									Horizontal & Sidebar Menu </a>
								</li>
								<li>
									<a href="layout_horizontal_menu1.html">
									Horizontal Mega Menu 1 </a>
								</li>
								<li>
									<a href="layout_horizontal_menu2.html">
									Horizontal Mega Menu 2 </a>
								</li>
								<li>
									<a href="layout_search_on_header1.html">
									Search Box On Header 1 </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							More Layouts <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_search_on_header2.html">
									Search Box On Header 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option1.html">
									Sidebar Search Option 1 </a>
								</li>
								<li>
									<a href="layout_sidebar_search_option2.html">
									Sidebar Search Option 2 </a>
								</li>
								<li>
									<a href="layout_sidebar_reversed.html">
									<span class="badge badge-roundless badge-success">
									new </span>
									Right Sidebar Page </a>
								</li>
								<li>
									<a href="layout_sidebar_fixed.html">
									Sidebar Fixed Page </a>
								</li>
								<li>
									<a href="layout_sidebar_closed.html">
									Sidebar Closed Page </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Even More <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="layout_ajax.html">
									Content Loading via Ajax </a>
								</li>
								<li>
									<a href="layout_disabled_menu.html">
									Disabled Menu Links </a>
								</li>
								<li>
									<a href="layout_blank_page.html">
									Blank Page </a>
								</li>
								<li>
									<a href="layout_boxed_page.html">
									Boxed Page </a>
								</li>
								<li>
									<a href="layout_language_bar.html">
									Language Switch Bar </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
							Accordions <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<div id="accordion2" class="panel-group mega-menu-responsive-content">
										<div class="panel panel-success">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" class="collapsed">
												Mega Menu Info #1 </a>
												</h4>
											</div>
											<div id="collapseOne2" class="panel-collapse in">
												<div class="panel-body">
													 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.
												</div>
											</div>
										</div>
										<div class="panel panel-danger">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" class="collapsed">
												Mega Menu Info #2 </a>
												</h4>
											</div>
											<div id="collapseTwo2" class="panel-collapse collapse">
												<div class="panel-body">
													 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.
												</div>
											</div>
										</div>
										<div class="panel panel-info">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
												Mega Menu Info #3 </a>
												</h4>
											</div>
											<div id="collapseThree2" class="panel-collapse collapse">
												<div class="panel-body">
													 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements.
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a>
					Classic <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Section 1 </a>
						</li>
						<li>
							<a href="javascript:;">
							Section 2 </a>
						</li>
						<li>
							<a href="javascript:;">
							Section 3 </a>
						</li>
						<li>
							<a href="javascript:;">
							Section 4 </a>
						</li>
						<li>
							<a href="javascript:;">
							Section 5 </a>
						</li>
						<li>
							<a href="javascript:;">
							More options <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
									Second level link </a>
								</li>
								<li class="sub-menu">
									<a href="javascript:;">
									More options <span class="arrow">
									</span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
										<li>
											<a href="index.html">
											Third level link </a>
										</li>
									</ul>
								</li>
								<li>
									<a href="index.html">
									Second level link </a>
								</li>
								<li>
									<a href="index.html">
									Second level link </a>
								</li>
								<li>
									<a href="index.html">
									Second level link </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
						<ul>
							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
							</li>
							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
							</li>
							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
							</li>
							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Theme Style </span>
						<select class="layout-style-option form-control input-sm">
							<option value="square" selected="selected">Square corners</option>
							<option value="rounded">Rounded corners</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-sm">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="page-header-option form-control input-sm">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Top Menu Dropdown</span>
						<select class="page-header-top-dropdown-style-option form-control input-sm">
							<option value="light" selected="selected">Light</option>
							<option value="dark">Dark</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Mode</span>
						<select class="sidebar-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Menu </span>
						<select class="sidebar-menu-option form-control input-sm">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Style </span>
						<select class="sidebar-style-option form-control input-sm">
							<option value="default" selected="selected">Default</option>
							<option value="light">Light</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-sm">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="page-footer-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Horizontal & Sidebar Menu <small>horizontal mega menu & sidebar menu layout</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Page Layouts</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Horizontal & Sidebar Menu</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row margin-bottom-20">
				<div class="col-md-12">
					<p>
						 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<p>
						 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
					<p>
						 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Simple Table
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="" class="fullscreen">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-hover">
							<thead>
							<tr>
								<th>
									 #
								</th>
								<th>
									 First Name
								</th>
								<th>
									 Last Name
								</th>
								<th class="hidden-480">
									 Username
								</th>
								<th>
									 Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 1
								</td>
								<td>
									 Mark
								</td>
								<td>
									 Otto
								</td>
								<td class="hidden-480">
									 makr124
								</td>
								<td>
									<span class="label label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
									 2
								</td>
								<td>
									 Jacob
								</td>
								<td>
									 Nilson
								</td>
								<td class="hidden-480">
									 jac123
								</td>
								<td>
									<span class="label label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
									 3
								</td>
								<td>
									 Larry
								</td>
								<td>
									 Cooper
								</td>
								<td class="hidden-480">
									 lar
								</td>
								<td>
									<span class="label label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
									 3
								</td>
								<td>
									 Sandy
								</td>
								<td>
									 Lim
								</td>
								<td class="hidden-480">
									 sanlim
								</td>
								<td>
									<span class="label label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
				<div class="col-md-6">
					<!-- BEGIN BORDERED TABLE PORTLET-->
					<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-coffee"></i>Bordered Table
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="" class="fullscreen">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>
									 #
								</th>
								<th>
									 First Name
								</th>
								<th>
									 Last Name
								</th>
								<th class="hidden-480">
									 Username
								</th>
								<th>
									 Status
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 1
								</td>
								<td>
									 Mark
								</td>
								<td>
									 Otto
								</td>
								<td class="hidden-480">
									 makr124
								</td>
								<td>
									<span class="label label-success">
									Approved </span>
								</td>
							</tr>
							<tr>
								<td>
									 2
								</td>
								<td>
									 Jacob
								</td>
								<td>
									 Nilson
								</td>
								<td class="hidden-480">
									 jac123
								</td>
								<td>
									<span class="label label-info">
									Pending </span>
								</td>
							</tr>
							<tr>
								<td>
									 3
								</td>
								<td>
									 Larry
								</td>
								<td>
									 Cooper
								</td>
								<td class="hidden-480">
									 lar
								</td>
								<td>
									<span class="label label-warning">
									Suspended </span>
								</td>
							</tr>
							<tr>
								<td>
									 3
								</td>
								<td>
									 Sandy
								</td>
								<td>
									 Lim
								</td>
								<td class="hidden-480">
									 sanlim
								</td>
								<td>
									<span class="label label-danger">
									Blocked </span>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END BORDERED TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
	<div class="page-quick-sidebar-wrapper">
		<div class="page-quick-sidebar">
			<div class="nav-justified">
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#quick_sidebar_tab_1" data-toggle="tab">
						Users <span class="badge badge-danger">2</span>
						</a>
					</li>
					<li>
						<a href="#quick_sidebar_tab_2" data-toggle="tab">
						Alerts <span class="badge badge-success">7</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						More<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-bell"></i> Alerts </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-info"></i> Notifications </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-speech"></i> Activities </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-settings"></i> Settings </a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
						<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
							<h3 class="list-heading">Staff</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">8</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Bob Nilson</h4>
										<div class="media-heading-sub">
											 Project Manager
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Nick Larson</h4>
										<div class="media-heading-sub">
											 Art Director
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">3</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Hubert</h4>
										<div class="media-heading-sub">
											 CTO
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ella Wong</h4>
										<div class="media-heading-sub">
											 CEO
										</div>
									</div>
								</li>
							</ul>
							<h3 class="list-heading">Customers</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-warning">2</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lara Kunis</h4>
										<div class="media-heading-sub">
											 CEO, Loop Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="label label-sm label-success">new</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ernie Kyllonen</h4>
										<div class="media-heading-sub">
											 Project Manager,<br>
											 SmartBizz PTL
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lisa Stone</h4>
										<div class="media-heading-sub">
											 CTO, Keort Inc
										</div>
										<div class="media-heading-small">
											 Last seen 13:10 PM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">7</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Portalatin</h4>
										<div class="media-heading-sub">
											 CFO, H&D LTD
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Irina Savikova</h4>
										<div class="media-heading-sub">
											 CEO, Tizda Motors Inc
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">4</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Maria Gomez</h4>
										<div class="media-heading-sub">
											 Manager, Infomatic Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="page-quick-sidebar-item">
							<div class="page-quick-sidebar-chat-user">
								<div class="page-quick-sidebar-nav">
									<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
								</div>
								<div class="page-quick-sidebar-chat-user-messages">
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:16</span>
											<span class="body">
											You are most welcome. Sorry for the delay. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Alright. I just emailed it to you. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Great! Thanks. Will check it right away. </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Please let me know if you have any comment. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="javascript:;" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
										</div>
									</div>
								</div>
								<div class="page-quick-sidebar-chat-user-form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type a message here...">
										<div class="input-group-btn">
											<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
						<div class="page-quick-sidebar-alerts-list">
							<h3 class="list-heading">General</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
							<h3 class="list-heading">System</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-warning">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="javascript:;">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
						<div class="page-quick-sidebar-settings-list">
							<h3 class="list-heading">General Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<h3 class="list-heading">System Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Security Level
									<select class="form-control input-inline input-sm input-small">
										<option value="1">Normal</option>
										<option value="2" selected>Medium</option>
										<option value="e">High</option>
									</select>
								</li>
								<li>
									 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
								</li>
								<li>
									 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
								</li>
								<li>
									 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<div class="inner-content">
								<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
</body>
<footer>
	<?php echo ($footer) ?> 
</footer>
<script>
    jQuery(document).ready(function() {    
       Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
    });
  </script>

</html>
