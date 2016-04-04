<?php //echo "<pre> Data  ".print_r($joblist , TRUE)."</pre>"; ?>
<div class="container">
<table border="1">
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
		<th colspan="2">
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
        	<img href="http://128.199.192.88/logos/{{ $joblistD->logo }}" width="100" height="100"></img> 
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
        	<button onclick="Editjob({{ $joblistD->id }})" value="Edit"> Edit  </button>
        	</td>
        	<td>
        	<button onclick="" value="Delete"> Delete </button>
        	</td>
        </tr>
        
    @endforeach
    </table>
</div>
{!! $joblist->render() !!}

<script type="text/javascript">
	
	function Editjob(id) {

         window.open('jobboardedit/'+id, "MsgWindow", "width=1000, height=1000");
	}
</script>
