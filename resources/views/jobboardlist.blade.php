<div class="container">
    @foreach ($users as $user)
        {{ $user->job_name }}
    @endforeach
</div>
{ {$users->total() }}
{!! str_replace('/?', '?', $users->render()) !!}