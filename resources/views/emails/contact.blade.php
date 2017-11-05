<h2>{{ $data->name }}</h2>

<h4>{{ $data->email }} &middot; {{ $data->phone ?: 'No phone number' }} &middot; {{ $data->website ?: 'No website' }}</h4>

<p>{!! nl2br($data->body) !!}</p>
