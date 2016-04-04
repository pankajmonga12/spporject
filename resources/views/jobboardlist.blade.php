<?php echo "<pre> Data  ".print_r($joblist , TRUE)."</pre>"; ?>
<div class="container">
<table>
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
		<th>
			Action
		</th>

	</tr>
</table>
    
    @foreach ($joblist as $joblistD)
        <tr>
        	<td>
        		
        	</td>
        	<td>
            
        	</td>
        	<td>
        		
        	</td>
        	<td>
        		
        	</td>
        	<td>
        		
        	</td>
        	<td>
        		
        	</td>
        	<td>
        		
        	</td>
        	<td>
        		
        	</td>
        	<td>
        		
        	</td>
        </tr>
        
    @endforeach
</div>
{!! $joblist->render() !!}
{!! $joblist->total() !!}