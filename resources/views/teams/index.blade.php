<ul>
    @foreach ($teams as $team)
        <li>
            {{ $team->name }}
            <ul>
                @foreach ($team->users as $user)
                    <li>
                        {{ $user->name }}:
                        position {{ $user->pivot->position }},
                        started at {{ $user->pivot->created_at }}
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
