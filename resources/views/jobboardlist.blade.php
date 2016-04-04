<div class="container">
<?php    @foreach ($users as $user)
        {{ $user->job_name }}
    @endforeach ?>
</div>
<?php {!! $users->total() !!}

{!! str_replace('/?', '?', $users->render()) 

<?