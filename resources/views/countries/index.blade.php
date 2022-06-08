<ul>
    @foreach ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ $team_avg_size }})</li>
    @endforeach
</ul>
