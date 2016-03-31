
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
    {!!  Form::select('subcategory', array('none' => 'Select')) !!}
</p>

<p>
    {!!  Form::label('category', 'Sub Category Name')!!}
    {!!  Form::text('subcategory', Input::old('category'), array('placeholder' => 'Category Name')) !!}
</p>




<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}
   </body>
</html>