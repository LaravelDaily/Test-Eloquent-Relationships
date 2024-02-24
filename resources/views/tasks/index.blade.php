<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user->name }})</li>
        <li>{{ $task->name }} ({{ optional($task->user)->name ?? '' }})</li>
    @endforeach
</ul>
