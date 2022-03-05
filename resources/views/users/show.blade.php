<h2>{{ $user->name }}</h2>
<<<<<<< HEAD
{{--@dd($user->comments->name)--}}
<b>Comments on their tasks:</b>
<ul>
{{--    @foreach ($user->comments as $comment) --}}
        <li>{{ $user->comments->name }} ({{ $user->comments->comment }})</li>
{{--    @endforeach--}}
=======

<b>Comments on their tasks:</b>
<ul>
    @foreach ($user->comments as $comment)
        <li>{{ $comment->name }} ({{ $comment->comment }})</li>
    @endforeach
>>>>>>> fa61e15864560f8e0111ee58875e20cddd146138
</ul>
