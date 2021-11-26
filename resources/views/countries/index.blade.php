<ul>
    @foreach ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ round($country->teams_avg_size) }})</li>
    @endforeach
</ul>
