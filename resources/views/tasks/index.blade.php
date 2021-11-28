<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ isset($task->user->name) ?  $task->user->name : null }})</li>
    @endforeach
</ul>
