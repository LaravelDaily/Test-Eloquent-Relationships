<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user->name }})</li>
    @endforeach
</ul>
