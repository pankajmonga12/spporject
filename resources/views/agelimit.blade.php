<!DOCTYPE html>
<html>
<?php echo ($header) ?> 
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			
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
					
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="{!! URL::to('logout') !!}">
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
			<!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->

			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Categories
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					 <li>
						<i class="fa"></i>
						<a href="#">Cateogory</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
			</div>

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->1
			<div class="row">
				<div class="col-md-10 ">
          
				   <div class="portlet light bordered">
					
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase">SET AGE LIMIT</span>
							</div>
					
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
								{!! Form::open(array('url' => 'saveagelimit' , 'method' => 'post')) !!}
								
								<div class="form-body" style="margin-bottom: 40px;">
								<p>
								  {{ $errors->first('minage') }}
								    {{ $errors->first('maxage') }}
								</p>
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class=" display-hide">
										<button class="close" data-close="alert"></button>
										
									</div>

									<div class="form-group" style="margin-bottom: 54px;">
										<label class="control-label col-md-3">Set Minimum Age <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('minage', Input::old('minage'), array('class' => 'form-control'),array('placeholder' => 'Minimum Age')) !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Set Maximum Age <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('maxage', Input::old('maxage'), array('class' => 'form-control'),array('placeholder' => 'Maximum Age')) !!}
											</div>
										</div>
									</div>
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Save Agelimit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							{!! Form::close() !!}
							<!-- END FORM-->
						</div>
					</div>
				</div>
				
			</div>
			<!-- END PAGE CONTENT-->
			<div class="row">
				<meta name="csrf-token" content="{{ csrf_token() }}" />
<table class="table table-striped table-bordered table-hover">
	<tr>
		<td>
			S. No.
		</td>
		<td>
			Maximum Age
		</td>
		<td>
			Minimum Age
		</td>
		
	</tr>
	<?php for ($i=0; $i <count($agelimit) ; $i++) { ?>
	  <tr>
	  	<td>
	  	<?php echo $i+1; ?>
	  	</td>
	  	<td>
	     <?php echo $agelimit[$i]['maxage']; ?>
	  	</td>
	  	<td>
	     <?php echo $agelimit[$i]['minage']; ?>
	  	</td>
	  </tr>
	<?php } ?>
  </table>
			</div>

			</div>
			
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	
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
