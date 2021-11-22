<h2>{{ $user->name }}</h2>

<b>Comments on their tasks:</b>
<ul>
    @foreach ($user->comments as $comment)
        <li>{{ $comment->name }} ({{ $comment->comment }})</li>
    @endforeach
</ul>
