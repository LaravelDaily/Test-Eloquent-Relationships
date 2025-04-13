<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ optional($task->user)->name }})</li>
    @endforeach
</ul>
