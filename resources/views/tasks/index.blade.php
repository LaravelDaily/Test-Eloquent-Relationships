<ul>
    @foreach ($tasks as $task)
    @if($task->user->name->exists())
    {
        <li>{{ $task->name }} ({{ $task->user->name }})</li>
    }
    else
    {
        <li>{{ $task->name }}</li>
    }
        @endforeach
</ul>
