<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user->name??null }})</li>
    @endforeach
</ul>
