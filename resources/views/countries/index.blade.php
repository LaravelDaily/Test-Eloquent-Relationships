<ul>
    @foreach ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ $country->teams->first()->teams_avg_size ?? 0 }})</li>
    @endforeach
</ul>
