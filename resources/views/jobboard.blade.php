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
			]
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
			New Job
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
						<a href="#">New Job</a>
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
								<span class="caption-subject bold uppercase">New Job </span>
							</div>
					
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							{!! Form::open(array('url' => 'savejob' , 'method' => 'post' , 'files'=>true)) !!}
								
								<div class="form-body" style="margin-bottom: 40px; height: 2413px;">
								<p>
								{{ $errors->first('category') }}
								</p>
								<p>
								{{ $errors->first('subcategory') }}
								</p>
								<p>
								{{ $errors->first('job_name') }}
								</p>
								<p>
								{{ $errors->first('job_notification') }}
								</p>
								<p>
								{{ $errors->first('descipline') }}
								</p>
								<p>
								{{ $errors->first('imp_date') }}
								</p>
								<p>
								{{ $errors->first('no_of_post') }}
								</p>
								<p>
								{{ $errors->first('post_description') }}
								</p>
								<p>
								{{ $errors->first('eligibility') }}
								</p>
								<p>
								{{ $errors->first('qualification') }}
								</p>

								<p>
								{{ $errors->first('exp_req') }}
								</p>

								<p>
								{{ $errors->first('age_limit') }}
								</p>

								<p>
								{{ $errors->first('how_to_apply') }}
								</p>

								<p>
								{{ $errors->first('application_fees') }}
								</p>

								<p>
								{{ $errors->first('website_link') }}
								</p>

								<p>
								{{ $errors->first('logo') }}
								</p>

								<p>
								{{ $errors->first('detailed_notification') }}
								</p>
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class=" display-hide">
										<button class="close" data-close="alert"></button>
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Category Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												
												 {!!  Form::select('category', $categoriesdrop,array('class' => 'form-control'), array('id' => 'category') ) !!}
												
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Sub Category Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!!  Form::select('subcategory', array('none' => 'Select Subcategory'), array('class' => 'form-control'),array('id' => 'subcategory')) !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Select Job Type <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!!  Form::select('job_type', array('none' => ' ---Select--- ',1 =>'Central', '2' => 'State'), array('class' => 'form-control'),array('id' => 'job-type')) !!}
											</div>
										</div>
									</div>

									<div class="form-group" id="stateDropdown" style="display: none">
										<label class="control-label col-md-3">Select State <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="job_state" value="" >
												<option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
												<option value='Andhra Pradesh'>Andhra Pradesh</option>
												<option value='Arunachal Pradesh'>Arunachal Pradesh</option>
												<option value='Assam'>Assam</option>
												<option value='Bihar'>Bihar</option>
												<option value='Chandigarh'>Chandigarh</option>
												<option value='Chhattisgarh'>Chhattisgarh</option>
												<option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
												<option value='Daman and Diu'>Daman and Diu</option>
												<option value='Delhi'>Delhi</option>
												<option value='Goa'>Goa</option>
												<option value='Gujarat'>Gujarat</option>
												<option value='Haryana'>Haryana</option>
												<option value='Himachal Pradesh'>Himachal Pradesh</option>
												<option value='Jammu and Kashmir'>Jammu and Kashmir</option>
												<option value='Jharkhand'>Jharkhand</option>
												<option value='Karnataka'>Karnataka</option>
												<option value='Kerala'>Kerala</option>
												<option value='Lakshadweep'>Lakshadweep</option>
												<option value='Madhya Pradesh'>Madhya Pradesh</option>
												<option value='Maharashtra'>Maharashtra</option>
												<option value='Manipur'>Manipur</option>
												<option value='Meghalaya'>Meghalaya</option>
												<option value='Mizoram'>Mizoram</option>
												<option value='Nagaland'>Nagaland</option>
												<option value='Odisha'>Odisha</option>
												<option value='Puducherry'>Puducherry</option>
												<option value='Punjab'>Punjab</option>
												<option value='Rajasthan'>Rajasthan</option>
												<option value='Sikkim'>Sikkim</option>
												<option value='Tamil Nadu'>Tamil Nadu</option>
												<option value='Telengana'>Telengana</option>
												<option value='Tripura'>Tripura</option>
												<option value='Uttar Pradesh'>Uttar Pradesh</option>
												<option value='Uttarakhand'>Uttarakhand</option>
												<option value='West Bengal'>West Bengal</option>
												</select>
											</div>
										</div>
									</div>
                                   
                                   
                                   <div class="form-group">
										<label class="control-label col-md-3">Job Title <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('job_name', Input::old('job_name'), array('class' => 'form-control'),array('placeholder' => 'Job Title')) !!}
											</div>
										</div>
									</div>

									
                                  

									<div class="form-group">
										<label class="control-label col-md-3">Descipline
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('descipline', Input::old('descipline'), array('class' => 'form-control'),array('placeholder' => 'Descipline')) !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Imp. Date 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::date('imp_date', Input::old('imp_date'), array('class' => 'form-control'), array('placeholder' => 'Imp Date')) !!}
											</div>
										</div>
									</div>



									<div class="form-group">
										<label class="control-label col-md-3"> Total No. Of Post 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('no_of_post', Input::old('no_of_post'), array('class' => 'form-control'),array('placeholder' => 'no of Post')) !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> General No. Of Post 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('general_no_of_post', Input::old('no_of_post'), array('class' => 'form-control'),array('placeholder' => 'no of Post')) !!}
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> SC/ST No. Of Post
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('scst_no_of_post', Input::old('no_of_post'), array('class' => 'form-control'),array('placeholder' => 'no of Post')) !!}
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">OBC No. Of Post 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('obc_no_of_post', Input::old('no_of_post'), array('class' => 'form-control'),array('placeholder' => 'no of Post')) !!}
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Others No. Of Post
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('others_no_of_post', Input::old('no_of_post'), array('class' => 'form-control'),array('placeholder' => 'no of Post')) !!}
											</div>
										</div>
									</div>




									<div class="form-group">
										<label class="control-label col-md-3">Eligibility 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::select('eligibility', $eligibility) !!}
											</div>
										</div>
									</div>
                                 

									<div class="form-group">
										<label class="control-label col-md-3">Qualification 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!!  Form::select('qualification', $qualification)  !!}
											</div>
										</div>
									</div>
                                  

                                     
									<div class="form-group">
										<label class="control-label col-md-3">Experience Required 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('exp_req', Input::old('exp_req'), array('class' => 'form-control'),array('placeholder' => 'Experience Required'))!!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> Genral Min Age Limit
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
												
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> Genral Max Age Limit
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="max_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
											
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> SC/ST Min Age Limit
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="scst_min_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
												
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> SC/ST Max Age Limit 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="scst_max_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
												
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> OBC Min Age Limit 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="obc_min_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
												
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> OBC Max Age Limit 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="obc_max_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
											
											</div>
										</div>
									</div>

                                     <div class="form-group">
										<label class="control-label col-md-3"> Others Min Age Limit 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="other_min_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
											
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> Others Max Age Limit 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<select name="other_max_age_limit">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
											
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> Genral Application Fees <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('application_fees', Input::old('application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3"> SC/ST Application Fees <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('scst_application_fees', Input::old('scst_application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> OBC Application Fees <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('obc_application_fees', Input::old('obc_application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> Others Application Fees <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('others_application_fees', Input::old('others_application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3">Website Url 
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('website_link', Input::old('website_link'), array('class' => 'form-control'),array('placeholder' => 'Website Url'))!!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Logo <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!! Form::file('logo')!!}
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3">Detailed Notification 
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!! Form::file('detailed_notification_file')!!}
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="control-label col-md-3">Job Description 
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('post_description','job description', ['size' => '100x100']) }}
											</div>
										</div>
									</div>
	                              
	                              <div class="form-group">
										<label class="control-label col-md-3">Job Notification
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('job_notification',null, ['size' => '100x100']) }}
											
											</div>
										</div>
									</div>

									 <div class="form-group">
										<label class="control-label col-md-3">How To Apply 
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('how_to_apply',null, ['size' => '100x100']) }}
											
											</div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="control-label col-md-3">Details Notification 
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('detailed_notification',null, ['size' => '100x100']) }}
											
											</div>
										</div>
									</div>									

								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Save Job</button>
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
		
			</div>
			
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->
</div>
<footer>
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<?php echo ($footer) ?> 
</footer>
</body>

<script>
    jQuery(document).ready(function() {    
       Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
    });
  </script>

<script type="text/javascript">
	$(document).ready(function() {
        $('#category').on('change', function() {
        	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        	var id = $(this).val();
        	if ( id == 0 ) {

        		return false;
        	}
            var data = {
                'id': $(this).val(),
                 _token: CSRF_TOKEN
            };
           console.log(data);

           $.ajax({
            url: 'fetchsubcat',
            type: 'post',
            data: data,
            dataType: 'json',
            success: function (data) {
                   console.log(data);
                   var selectList = document.getElementById('subcategory');
                   document.getElementById('subcategory').innerHTML = '';
                    var option = document.createElement("option");
					option.value = 'none';
					option.text = 'Select Subcategory';
					selectList.appendChild(option);
                    
                    for (var i = 0; i < data.length; i++) {
					
					    var option = document.createElement("option");
					    option.value = data[i].id;
					    option.text = data[i].category;
					    selectList.appendChild(option);
                    }
            },
            
        });
        });
    });
</script>

<script type="text/javascript">
	$(document).ready(function() {
        $('#job-type').on('change', function() {
        	
        	var id = $(this).val();
            //console.log('type val = '+id);

            if (id == 2) {

            	document.getElementById('stateDropdown').style.display = 'block';
            } else {

            	document.getElementById('stateDropdown').style.display = 'none';
            }

        });
    });
</script>

<style type="text/css">
	.form-group {
    /* width: 998px; */
    margin-bottom: 55px;
    padding: 8px;
    /* margin-right: -159px; */
}
</style>
<style type="text/css">
	select {
    max-width: 226px;
}
</style>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
</html>