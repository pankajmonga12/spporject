<?php echo "<pre> Data  ".print_r($users , TRUE)."</pre>"; ?>
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
    
    @foreach ($users as $user)
        <tr>
        	<td>
        		
        	</td>
        	<td>
            {{ $user->job_name }}
        	</td>
        	<td>
        <a href="http://128.199.192.88/public/logos/{{ $user->job_name }}" width="100" hight="100"></a>	
        	</td>
        	<td>
        	{{ $user->job_name }}
        	</td>
        	<td>
        	{{ $user->job_name }}
        	</td>
        	<td>
        	{{ $user->job_name }}
        	</td>
        	<td>
        	{{ $user->job_name }}
        	</td>
        	<td>
        	{{ $user->job_name }}
        	</td>
        	<td>
        	{{ $user->job_name }}
        	</td>
        </tr>
        
    @endforeach
</div>
{!! $users->render() !!}
{!! $users->total() !!}