<ul>
    @foreach ($countries as $country)
        <li>{{ $country->name }} (avg team size {{ $country->teams->avg('size') }})</li>
    @endforeach
</ul>
