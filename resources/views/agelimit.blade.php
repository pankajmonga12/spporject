
<!DOCTYPE html>
<html>
<head>
 <script   src="https://code.jquery.com/jquery-2.2.2.min.js"   integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="   crossorigin="anonymous"></script>	
</head>
<body>

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
	
	  <tr>
	  <td>
		<a href="/index.php/category">Add Category</a>
	  </td>
	  <td>
		<a href="/index.php/subcategory">Add SubCategory</a>
	  </td>

	  <td>
		<a href="/index.php/subcategory">Add SubCategory</a>
	  </td>
	  

	  <td>
		<a href="/index.php/addeligibility">Add Eligibilities</a>
	  </td>

	  <td>
		<a href="/index.php/addagelimit">Add age limit</a>
	  </td>

	  <td>
		<a href="/index.php/addqualification">Add Qualification</a>
	  </td>

	  <td>
		<a href="/index.php/addjob">Add New Job</a>
	  </td>

	  <td>
		<a href="/index.php/jobboardlist">Job Listing</a>
	  </td>
	</tr>
</table>

{!! Form::open(array('url' => 'saveagelimit' , 'method' => 'post')) !!}
<h1>Add New Aligibility</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('title') }}
</p>

<p>
    {!!  Form::label('minage', 'Minimum Age')!!}
    {!!  Form::text('minage', Input::old('minage'), array('placeholder' => ' Minimum Age ')) !!}
</p>

<p>
    {!!  Form::label('maxage', 'MAx Age')!!}
    {!!  Form::text('maxage', Input::old('maxage'), array('placeholder' => ' NMaximum Age ')) !!}
</p>


<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}

<meta name="csrf-token" content="{{ csrf_token() }}" />
<table border="1">
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
 </body>
</html>
<script type="text/javascript">
	function Deletecat(id) {
   
    if (confirm("Are You Sure you want to Delete ? ") == true) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       var user = {
            id: id,
            _token: CSRF_TOKEN
        }

      $.ajax({
            url: 'deleteeligibility',
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