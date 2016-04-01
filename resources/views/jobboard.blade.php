
<!DOCTYPE html>
<html>
<head>
 <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>	
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
    {!!  Form::label('category', 'Category Name')!!}
    {!!  Form::select('category', $categoriesdrop) !!}
</p>

<p>
    {!!  Form::label('subcategory', 'Sub Category')!!}
    {!!  Form::select('subcategory', array('none' => 'Select Subcategory'), array('id' => 'categorym'), array('onchange' => 'Changesubcat()'), array('onchange' => 'Changesubcat()')) !!}
</p>

<p>
    {!!  Form::label('job_name', 'Job Name')!!}
    {!!  Form::text('job_name', Input::old('job_name'), array('placeholder' => 'Job Name')) !!}
</p>

<p>
    {!!  Form::label('job_notification', 'Job Notification')!!}
    {!!  Form::text('job_notification', Input::old('job_notification'), array('placeholder' => 'Job Notification')) !!}
</p>

<p>
    {!!  Form::label('descipline', 'Descipline')!!}
    {!!  Form::text('descipline', Input::old('descipline'), array('placeholder' => 'Descipline')) !!}
</p>

<p>
    {!!  Form::label('imp_date', 'Imp Date')!!}
    {!!  Form::date('imp_date', Input::old('imp_date'), array('placeholder' => 'Imp Date')) !!}
</p>

<p>
    {!!  Form::label('no_of_post', 'No. Of Post')!!}
    {!!  Form::number('no_of_post', Input::old('no_of_post'), array('placeholder' => 'No. Of Post')) !!}
</p>

<p>
    {!!  Form::label('post_description', 'Post Description')!!}
    {!!  Form::text('post_description', Input::old('post_description'), array('placeholder' => 'Post Description')) !!}
</p>


<p>
    {!!  Form::label('eligibility', 'Eligibility')!!}
    {!!  Form::select('eligibility', $eligibility) !!}
</p>


<p>
    {!!  Form::label('qualification', 'Qualification')!!}
    {!!  Form::select('qualification', $qualification)  !!}
</p>


<p>
    {!!  Form::label('exp_req', 'Experience Required')!!}
    {!!  Form::text('exp_req', Input::old('exp_req'), array('placeholder' => 'Experience Required')) !!}
</p>

<p>
    {!!  Form::label('age_limit', 'Age Limit')!!}
    {!! Form::selectRange('age_limit', $agelimit[0]['minage'], $agelimit[0]['maxage']) !!}
</p>



<p>
    {!!  Form::label('how_to_apply', 'How to Apply')!!}
    {!!  Form::text('how_to_apply', Input::old('how_to_apply'), array('placeholder' => 'How To Apply')) !!}
</p>

<p>
    {!!  Form::label('application_fees', 'Application Fees')!!}
    {!!  Form::number('application_fees', Input::old('application_fees'), array('placeholder' => 'Application Fees')) !!}
</p>


<p>
    {!!  Form::label('website_link', 'Website Url')!!}
    {!!  Form::text('website_link', Input::old('website_link'), array('placeholder' => 'Website Url')) !!}
</p>

<p>
    {!!  Form::label('logo', 'Logo')!!}
    {!! Form::file('logo')!!}
</p>

<p>
    {!!  Form::label('detailed_notification', 'Detailed Notifrication')!!}
    {!!  Form::text('detailed_notification', Input::old('detailed_notification'), array('placeholder' => 'Detailed Notifrication')) !!}
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