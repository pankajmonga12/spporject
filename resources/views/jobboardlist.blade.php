<div class="container">
    <?php echo "<pre> Job Data : ".print_r($users , TRUE)."</pre>"; ?>
    @foreach ($users as $user)
        {{ $user->job_name }}
    @endforeach
</div>
{!! $users->render() !!}
{!! $users->total() !!}