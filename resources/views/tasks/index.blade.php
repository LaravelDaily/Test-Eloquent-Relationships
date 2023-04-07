<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} @isset($task->user->name) {{ $task->user->name }})@endisset</li>
    @endforeach
</ul>
