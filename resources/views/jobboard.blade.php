
<!DOCTYPE html>
<html>
<head>
 <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>	
</head>
<body>

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
   
    

{!! Form::open(array('url' => 'savesubcategory' , 'method' => 'post')) !!}
 <h1>Add New Job</h1>


<p>
    {!!  Form::label('category', 'Category Name')!!}
    {!!  Form::select('category', $categoriesdrop) !!}
</p>

<p>
    {!!  Form::label('subcategory', 'Sub Category')!!}
    {!!  Form::select('subcategory', array('none' => 'Select Subcategory')) !!}
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
    {!!  Form::text('eligibility', Input::old('eligibility'), array('placeholder' => 'Eligibility')) !!}
</p>


<p>
    {!!  Form::label('qualification', 'Qualification')!!}
    {!!  Form::text('qualification', Input::old('qualification'), array('placeholder' => 'Qualification')) !!}
</p>


<p>
    {!!  Form::label('exp_req', 'Experience Required')!!}
    {!!  Form::text('exp_req', Input::old('exp_req'), array('placeholder' => 'Experience Required')) !!}
</p>

<p>
    {!!  Form::label('age_limit', 'Age Limit')!!}
    {!! Form::selectRange('age_limit', 10, 20) !!}
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
   </body>
</html>