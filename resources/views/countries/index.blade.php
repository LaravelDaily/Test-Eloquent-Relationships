<ul>
    @foreach ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ $country->teams()->pluck('size')->avg(); }})</li>
    @endforeach
</ul>
