<div class="container">
    @foreach ($users as $user)
        {{ $user->job_name }}
    @endforeach
</div>

{!! str_replace('/?', '?', $users->render()) !!}