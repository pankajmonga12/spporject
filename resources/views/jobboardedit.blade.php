<?php echo "<pre> Data :".print_r($jobData , TRUE)."</pre>"; ?>
<h1>Job Edit Page</h1>

<<!DOCTYPE html>
<html>
<head>
<script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>	
	<title></title>
</head>
<body>
<meta name="csrf-token" content="{{ csrf_token() }}" />
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
	<table>
		<tr>
		  <td>
			<a href="/index.php/category">Add Category</a>
		  </td>
		  <td>
			<a href="/index.php/subcategory">Add SubCategory</a>
		  </td>
		  <td>
			<a href="/index.php/addjob">Add New Job</a>
		  </td>
		</tr>
	</table>
   <div class="form-section">
    

{!! Form::open(array('url' => 'savejob' , 'method' => 'post' , 'files'=>true)) !!}
 <h1>Add New Job</h1>

<p>
    {!!  Form::label('job_name', 'Job Name')!!}
    {!!  Form::text('job_name', $jobData->job_name, array('placeholder' => 'Job Name')) !!}
</p>

<p>
    {!!  Form::label('job_notification', 'Job Notification')!!}
    {!!  Form::text('job_notification', $jobData->job_notification, array('placeholder' => 'Job Notification')) !!}
</p>

<p>
    {!!  Form::label('descipline', 'Descipline')!!}
    {!!  Form::text('descipline', $jobData->descipline, array('placeholder' => 'Descipline')) !!}
</p>

<p>
    {!!  Form::label('imp_date', 'Imp Date')!!}
    {!!  Form::date('imp_date', $jobData->imp_date, array('placeholder' => 'Imp Date')) !!}
</p>

<p>
    {!!  Form::label('no_of_post', 'No. Of Post')!!}
    {!!  Form::number('no_of_post', $jobData->no_of_post , array('placeholder' => 'No. Of Post')) !!}
</p>

<p>
    {!!  Form::label('post_description', 'Post Description')!!}
    {!!  Form::text('post_description', $jobData->post_description , array('placeholder' => 'Post Description')) !!}
</p>


<p>
    {!!  Form::label('eligibility', 'Eligibility')!!}
    {!!  Form::select('eligibility', $eligibility ,$jobData->eligibility) !!}
</p>


<p>
    {!!  Form::label('qualification', 'Qualification')!!}
    {!!  Form::select('qualification', $qualification ,$jobData->qualification )  !!}
</p>


<p>
    {!!  Form::label('exp_req', 'Experience Required')!!}
    {!!  Form::text('exp_req', $jobData->exp_req, array('placeholder' => 'Experience Required')) !!}
</p>

<p>
    {!!  Form::label('age_limit', 'Age Limit')!!}
    {!! Form::selectRange('age_limit', $agelimit[0]['minage'], $agelimit[0]['maxage']) !!}
</p>



<p>
    {!!  Form::label('how_to_apply', 'How to Apply')!!}
    {!!  Form::text('how_to_apply',$jobData->how_to_apply, array('placeholder' => 'How To Apply')) !!}
</p>

<p>
    {!!  Form::label('application_fees', 'Application Fees')!!}
    {!!  Form::number('application_fees', $jobData->application_fees, array('placeholder' => 'Application Fees')) !!}
</p>


<p>
    {!!  Form::label('website_link', 'Website Url')!!}
    {!!  Form::text('website_link', $jobData->website_link, array('placeholder' => 'Website Url')) !!}
</p>

<p>
    {!!  Form::label('logo', 'Logo')!!}
    {!! Form::file('logo')!!}
</p>

<p>
    {!!  Form::label('detailed_notification', 'Detailed Notifrication')!!}
    {!!  Form::text('detailed_notification', $jobData->detailed_notification, array('placeholder' => 'Detailed Notifrication')) !!}
</p>

<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}
</div>
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
</body>
</html>