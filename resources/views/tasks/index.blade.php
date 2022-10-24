<ul>
    @foreach ($tasks as $task)
        @if ($task->users_id == null)
            <li>{{ $task->name }} (      )</li>
        @else
            <li>{{ $task->name }} ({{ $task->user->name }})</li>
        @endif
    @endforeach
    
</ul>
