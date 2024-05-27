<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user ? $task->user->name : 'none' }})</li>
    @endforeach
</ul>
