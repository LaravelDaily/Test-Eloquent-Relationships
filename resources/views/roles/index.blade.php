<ul>
    @foreach ($roles as $role)
        <li>{{ $role->name }} ({{ $role->users }})</li>
    @endforeach
</ul>
