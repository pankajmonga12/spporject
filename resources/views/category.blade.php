

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

{!! Form::open(array('url' => 'savecategory' , 'method' => 'post')) !!}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('category') }}
</p>

<p>
    {!!  Form::label('category', 'Category Name')!!}
    {!!  Form::text('category', Input::old('category'), array('placeholder' => 'Category Name')) !!}
</p>


<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}

<?php echo "<pre> Data : ".print_r($categories , TRUE)."</pre>";  ?>

<table border="1">
	<tr>
		<td>
			S. No.
		</td>
		<td>
			Category Name
		</td>
		<td>
			Parent Category
		</td>
		<td>
			Status
		</td>
		<td>
			Action
		</td>
	</tr>

</table>