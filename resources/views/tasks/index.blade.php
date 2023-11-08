<ul>
    @forelse ($tasks as $task)
        <li>{{ $task->name }} ({{ $task->user->name ?? ' ' }})</li>
    @empty
        <li>{{__('No data available')}}
    @endforelse
</ul>
