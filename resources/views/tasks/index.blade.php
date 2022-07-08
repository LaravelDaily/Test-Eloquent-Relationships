<ul>
    @forelse ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user()->exists() ? $task->user->name : '' }})</li>
    @empty
        <p>No tasks found..</p>
    @endforelse
</ul>
