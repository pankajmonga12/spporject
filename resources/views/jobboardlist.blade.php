<div class="container">
    @foreach ($users as $user)
        {{ $user->job_name }}
    @endforeach
</div>

{!! $users->render() !!}
{!! $users->total() !!}