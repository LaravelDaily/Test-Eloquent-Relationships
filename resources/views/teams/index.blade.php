<ul>
    @foreach ($teams as $team)
        <li>
            {{ $team->name }}
            <ul>
                @foreach ($team->users as $user)
                    {{ $user->name }}:
                    position {{ $user->pivot->position }},
                    started at {{ $user->pivot->created_at }}
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
