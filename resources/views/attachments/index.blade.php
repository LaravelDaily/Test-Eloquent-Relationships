<ul>
    @foreach ($attachments as $attachment)
        <li>{{ $attachment->filename }} {{ get_class($attachment->attachable) }}</li>
    @endforeach
</ul>
