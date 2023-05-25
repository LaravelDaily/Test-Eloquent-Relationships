<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user_name }})</li>
    @endforeach
</ul>
