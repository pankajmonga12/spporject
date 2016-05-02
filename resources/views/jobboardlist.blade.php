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
			<div class="modal fade" id="change-category" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"></h4>
						</div>
						<div class="modal-body">
							<div class="portlet light bordered">
					<?php //echo $this->session->flashdata('error_msg'); ?>
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> ADD POST </span>
							</div>
					
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="/saveposttype" id="changepasswordform" class="form-horizontal"  method="POST">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">Post For : <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="hidden" class="form-control" id="pid" name="id"/>
												<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
												<input type="text" class="form-control" id="posttype" name="posttype"/>
											</div>
										</div>
									</div>


										<div class="form-group">
										<label class="control-label col-md-3">Eligibility <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::select('eligibility', $eligibility) !!}
											</div>
										</div>
									</div>
                                 

									<div class="form-group">
										<label class="control-label col-md-3">Qualification <span class="required">
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
										<label class="control-label col-md-3">Experience Required <span class="required">
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
										<label class="control-label col-md-3">No. Of Post <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" id="no_of_post" name="no_of_post"/>
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
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Save Post</button>
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->

							<table id="postTable" class="table table-striped table-bordered table-hover">
								
							</table>
						</div>
					</div>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>




				
				<!-- /.modal-dialog -->




			</div>
  

        <div class="modal fade" id="changepostdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title"></h4>
						</div>
						<div class="modal-body">
						  <div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> EDIT POST </span>
							</div>
					
					      </div>

					      <div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="/savechangePost" id="changepasswordform" class="form-horizontal"  method="POST">
								<div class="form-body">

								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">Post For : <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="hidden" class="form-control" id="pid" name="id"/>
												<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
												<input type="text" class="form-control" id="posttypep" name="posttype"/>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
										<label class="control-label col-md-3">Eligibility <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::select('eligibilityp', $eligibility) !!}
											</div>
										</div>
									</div>
                                 

									<div class="form-group">
										<label class="control-label col-md-3">Qualification <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!!  Form::select('qualificationp', $qualification)  !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Experience Required <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('exp_req', Input::old('exp_req'), array('class' => 'form-control'),array('placeholder' => 'Experience Required'),,array('id' => 'exp_reqp'))!!}
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
												<select name="age_limit" id="age_limitp">
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
												<select name="max_age_limit" id="max_age_limitp">
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
												<select name="scst_min_age_limit"  id="scst_min_age_limitp">
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
												<select name="scst_max_age_limit"  id="scst_max_age_limitp">
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
												<select name="obc_min_age_limit" id="obc_min_age_limitp">
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
												<select name="obc_max_age_limit" id="obc_max_age_limitp">
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
												<select name="other_min_age_limit"  id="other_min_age_limitp">
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
												<select name="other_max_age_limit" id="other_max_age_limitp">
												<option value="0">Nill</option>
													<?php for ($i=$agelimit[0]['minage']; $i <=$agelimit[0]['maxage'] ; $i++) {  ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php } ?>
												</select>
											
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">No. Of Post <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" id="no_of_postp" name="no_of_post"/>
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
												{{ Form::textarea('post_descriptionp','job description', ['size' => '100x100']) }}
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
												{!!  Form::number('application_feesp', Input::old('application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
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
												{!!  Form::number('scst_application_feesp', Input::old('scst_application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
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
												{!!  Form::number('obc_application_feesp', Input::old('obc_application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
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
												{!!  Form::number('others_application_feesp', Input::old('others_application_fees'), array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
											</div>
										</div>
									</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Save Post</button>
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</form>
						   </div>	
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
       </div>
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->

			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Job Board List
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
						<a href="#">Job Board List</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
			</div>
			<!-- END PAGE CONTENT-->
			<div class="row">
				<meta name="csrf-token" content="{{ csrf_token() }}" />
<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>
			S. No.
		</th>
		<th>
			Job Name
		</th>
        <th>
			Logo
		</th>
		<th>
			Category
		</th>
		<th>
			Sub - Category
		</th>
		<th>
			Imp Date
		</th>
		<th>
			No. Of Post
		</th>
		<th>
			Aplication Fees
		</th>
		<th colspan="3">
			Action
		</th>

	</tr>

    
    @foreach ($joblist as $joblistD)
        <tr>
        	<td>
        		
        	</td>
        	<td>
             {{ $joblistD->job_name }}      
        	</td>
        	<td>
        	<img src="http://128.199.192.88/logos/{{ $joblistD->logo }}" width="100" height="100"></img> 
        	</td>
        	<td>
        	   {{ $joblistD->category }}
        	</td>
        	<td>
        	  {{ $joblistD->subcategory }}	
        	</td>
        	<td>
        	 {{ date("F jS, Y",strtotime($joblistD->imp_date)) }}
        	</td>
        	<td>
        	 {{ $joblistD->no_of_post }}
        	</td>
        	<td>
        	 {{ $joblistD->application_fees  }}
        	</td>
        	<td>
        	<button onclick="Addpost({{ $joblistD->id }})" value="Edit"> Add Post  </button>
        	</td>
        	<td>
        	<button onclick="Editjob({{ $joblistD->id }})" value="Edit"> Edit  </button>
        	</td>
        	<td>
        	<button onclick="DeleteJob({{ $joblistD->id }})" value="Delete"> Delete </button>
        	</td>
        </tr>
        
    @endforeach
    </table>
			</div>
        {!! $joblist->render() !!}
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
<style type="text/css">
	select {
    max-width: 226px;
}
</style>
<script>
    jQuery(document).ready(function() {    
       Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
    });
  </script>


</html>


 
<script type="text/javascript">
	function DeleteJob(id) {
   
    if (confirm("Are You Sure you want to Delete ? ") == true) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       var user = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'deletejob',
            type: 'post',
            data: user,
            dataType: 'json',
            success: function (data) {
                   console.log(data);
                   if (data.status==true) {}
                  window.location.reload();
            },
            
        });

    } else {
      

    }
    
}
</script>


<script type="text/javascript">
	function Deletepost(id) {
   
    if (confirm("Are You Sure you want to Delete ? ") == true) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       var user = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'deletepost',
            type: 'post',
            data: user,
            dataType: 'json',
            success: function (data) {
                   console.log(data);
                   if (data.status==true) {}
                  window.location.reload();
            },
            
        });

    } else {
      

    }
    
}
</script>

<script type="text/javascript">
	
	function Editjob(id) {

         window.open('jobboardedit/'+id, "MsgWindow", "width=1000, height=1000");
	}
</script>


<script type="text/javascript">
	function Addpost( id) {
     
     document.getElementById('pid').value = id;
     document.getElementById('postTable').innerHTML = '';

     var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var post = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'fetchposttype',
            type: 'post',
            data: post,
            dataType: 'json',
            success: function (obj) {
                   console.log(obj);
                
                var tr="<tr>";
				var td1="<td>Post For</td>";
				var td2="<td>Eligibility</td>";
				var td3="<td>Qualification</td>";
				var td4="<td>No Of Post</td>";
				var td5="<td colspan='2'>Action</td></tr>";

				$("#postTable").append(tr+td1+td2+td3+td4+td5);

				for(var i=0;i<obj.length;i++)
				{

				var tr="<tr>";
				var td1="<td>"+obj[i]["posttype"]+"</td>";
				var td2="<td>"+obj[i]["eligibility"]+"</td>";
				var td3="<td>"+obj[i]["qualification"]+"</td>";
				var td4="<td>"+obj[i]["no_of_post"]+"</td>";
				var td5="<td> <button onclick=Deletepost("+obj[i]["id"]+") >Delete Post</button></td>";
				var td6="<td> <button onclick=Editpostdata("+obj[i]["id"]+") >Edit Post</button></td></tr>";

				$("#postTable").append(tr+td1+td2+td3+td4+td5+td6); 

				} 
                
            },
            
        });

		$('#change-category').modal('show');
	}
</script>
<script type="text/javascript">
	function Editpostdata(id) {
		
		console.log(id);
		$('#change-category').modal('hide');
		

		//document.getElementById('pid').value = id;
  
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
         
         var postData = {
            id: id,
            _token: CSRF_TOKEN
        }

         console.log(postData);

         $.ajax({
            url: 'fetchposttypedata',
            type: 'post',
            data: postData,
            dataType: 'json',
            success: function (obj) {
                   console.log(obj);
                   document.getElementById('posttypep').value = obj[0].posttype;
                 
                $('#changepostdata').modal('show');
            },
            
        });
	}
</script>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>