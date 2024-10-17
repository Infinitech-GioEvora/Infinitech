<meta name="csrf-token" content="{{ csrf_token() }}">

<p>You have received a new inquiry.</p>

<p><strong>Name:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Phone:</strong> {{ $phone }}</p>
{{-- <p><strong>Website:</strong> {{ $website }}</p> --}}
<p><strong>Message:</strong></p>
<p>{{ $message }}</p>
