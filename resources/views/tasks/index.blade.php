<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->name }}</li>
    @endforeach
</ul>
