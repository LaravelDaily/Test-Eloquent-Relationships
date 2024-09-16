<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task->name }}
            @if ($task->user)
                ({{ $task->user->name }})
            @endif
        </li>
    @endforeach
</ul>
