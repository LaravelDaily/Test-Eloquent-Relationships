<ul>
    @foreach ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ $country->teams_avg_size }})</li>
    @endforeach
</ul>
