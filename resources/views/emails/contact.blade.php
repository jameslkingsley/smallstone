<h3>{{ $data->name }}</h3>

<p>
    <small>{{ $data->email }} &middot; {{ $data->phone ?: 'No phone number' }} &middot; {{ $data->website ?: 'No website' }}</small>
</p>

<p>{{ $data->body }}</p>
