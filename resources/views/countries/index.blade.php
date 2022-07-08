<ul>
    @forelse ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ $country->teams_avg_size }})</li>
    @empty
        <p>No countries found..</p>
    @endforelse
</ul>
