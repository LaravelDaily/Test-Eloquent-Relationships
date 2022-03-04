<ul>
    @foreach ($roles as $role)
        <li>{{ $role->name }} ({{ $role->users_count }})</li>
    @endforeach
</ul>
