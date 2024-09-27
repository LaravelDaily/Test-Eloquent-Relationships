<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user == null ? ' ' : $task->user->name }})</li>
    @endforeach
</ul>
