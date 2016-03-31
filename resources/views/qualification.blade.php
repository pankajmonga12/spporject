
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
		<a href="/index.php/addeligibility">Add SubCategory</a>
	  </td>
	  <td>
		<a href="/index.php/addqualification">Add Qualification</a>
	  </td>
	  <td>
		<a href="/index.php/addjob">Add New Job</a>
	  </td>
	</tr>
</table>

{!! Form::open(array('url' => 'savequalification' , 'method' => 'post')) !!}
<h1>Add New Qualification</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('title') }}
</p>

<p>
    {!!  Form::label('title', 'Qualification')!!}
    {!!  Form::text('title', Input::old('title'), array('placeholder' => ' New Qualification ')) !!}
</p>


<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}

<?php //echo "<pre> Data : ".print_r($categories , TRUE)."</pre>";  ?>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<table border="1">
	<tr>
		<td>
			S. No.
		</td>
		<td>
			Eligibility
		</td>
		<td>
			Status
		</td>
		<td>
			Action
		</td>
	</tr>
	<?php for ($i=0; $i <count($qualification) ; $i++) { ?>
	  <tr>
	  	<td>
	  	<?php echo $i+1; ?>
	  	</td>
	  	<td>
	     <?php echo $qualification[$i]['title']; ?>
	  	</td>
	  	<td>
	     <?php if($qualification[$i]['status'] == 1) {
              echo "Active";
	  	 	} else {
	  	 		echo "Inactive";
	  	 	}
	  	 	?>
	  	</td>
	  	<td>
	  	 <input type="button" onclick="Deletecat(<?php echo $qualification[$i]['id']; ?>)" value="Delete"> </input>
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
            url: 'deletequalification',
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