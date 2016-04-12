
<h1>Job Edit Page</h1>

<<!DOCTYPE html>
<html>
<head>
<script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>	

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="http://128.199.192.88/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="http://128.199.192.88/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="http://128.199.192.88/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="http://128.199.192.88/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

	<title></title>
</head>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
   <div class="form-section">
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
							<?php  //echo "<pre> Job Data : ".print_r($jobData , TRUE)."</pre>"; ?>
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
									<!--<div class="form-group">
										<label class="control-label col-md-3">Category Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::hidden('id', $jobData->id ) }}
												 {!!  Form::select('category', $categoriesdrop ,$jobData->category,array('class' => 'form-control'), array('id' => 'category') ) !!}
												
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
												
											</div>
										</div>
									</div> -->

									<div class="form-group">
										<label class="control-label col-md-3">Select Job Type <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												 {!!  Form::select('job_type', array('none' => ' ---Select--- ',1 =>'Central', '2' => 'State'),array('class' => 'form-control'),array('id' => 'job-type')) !!}
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
												<select name="job_state" value="" id="job_state">
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
												{!!  Form::text('job_name',$jobData->job_name, array('class' => 'form-control'),array('placeholder' => 'Job Title')) !!}
											</div>
										</div>
									</div>

									
                                  

									<div class="form-group">
										<label class="control-label col-md-3">Descipline <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('descipline', $jobData->descipline, array('class' => 'form-control'),array('placeholder' => 'Descipline')) !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Imp. Date <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::date('imp_date' ,$jobData->imp_date, array('class' => 'form-control'), array('placeholder' => 'Imp Date')) !!}
											</div>
										</div>
									</div>



									<div class="form-group">
										<label class="control-label col-md-3">No. Of Post <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('no_of_post',$jobData->no_of_post, array('class' => 'form-control'),array('placeholder' => 'no of Post')) !!}
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
												{!!  Form::select('eligibility', $eligibility , $jobData->eligibility) !!}
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
												 {!!  Form::select('qualification', $qualification , $jobData->qualification)  !!}
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
												{!!  Form::text('exp_req',  $jobData->exp_req , array('class' => 'form-control'),array('placeholder' => 'Experience Required'))!!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Age Limit <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!! Form::selectRange('age_limit', $agelimit[0]['minage'], $agelimit[0]['maxage'],$jobData->age_limit) !!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Application Fees <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::number('application_fees',$jobData->application_fees, array('class' => 'form-control'),array('placeholder' => 'Application Fees'))!!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Website Url <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												{!!  Form::text('website_link',$jobData->website_link, array('class' => 'form-control'),array('placeholder' => 'Website Url'))!!}
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
												<img src="http://128.199.192.88/logos/{{$jobData->logo}}">
												 {!! Form::file('logo')!!}
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Job Description <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('post_description',$jobData->post_description, ['size' => '100x100']) }}
											</div>
										</div>
									</div>
	                              
	                              <div class="form-group">
										<label class="control-label col-md-3">Job Notification <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('job_notification',$jobData->job_notification, ['size' => '100x100']) }}
											
											</div>
										</div>
									</div>

									 <div class="form-group">
										<label class="control-label col-md-3">How To Apply  <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('how_to_apply',$jobData->how_to_apply, ['size' => '100x100']) }}
											
											</div>
										</div>
									</div>

                                    <div class="form-group">
										<label class="control-label col-md-3">Details Notification <span class="required">
										* </span>
										</label>
										<div class="col-md-7">
											<div class="input-icon right">
												<i class="fa"></i>
												{{ Form::textarea('detailed_notification',$jobData->detailed_notification, ['size' => '100x100']) }}
											
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
    </div>
    <footer>
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<?php echo ($footer) ?> 
</footer>

<script type="text/javascript">
	$(document).ready(function() {
		document.querySelector('[name="job_state"]').value = <?php echo $jobData->job_state; ?>; 

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

<style type="text/css">
	select {
    max-width: 226px;

}
</style>
<style type="text/css">
	.form-group {
    /* width: 998px; */
    margin-bottom: 55px;
    padding: 8px;
    /* margin-right: -159px; */
}
</style>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
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
    </body>
    </html>
