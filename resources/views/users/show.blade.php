<h2>{{ $user->name }}</h2>
{{--@dd($user->comments->name)--}}
<b>Comments on their tasks:</b>
<ul>
{{--    @foreach ($user->comments as $comment) --}}
        <li>{{ $user->comments->name }} ({{ $user->comments->comment }})</li>
{{--    @endforeach--}}
</ul>
