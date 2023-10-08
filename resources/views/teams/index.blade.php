<ul>
    @foreach ($teams as $team)
        <li>
            {{ $team->name }}
            <ul>
                @foreach ($team->users as $user)
                        <strong>- User name</strong>: {{ $user->name }} <br>
                        <strong>- Position</strong>: {{ $user->pivot->position }}, <br>
                        <strong> - Started at</strong>: {{ $user->pivot->created_at }}
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
