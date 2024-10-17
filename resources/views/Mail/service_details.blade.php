<!DOCTYPE html>
<html>
<head>
    <title>Service Details</title>
</head>
<body>
    <h1>Your Selected Services</h1>

    <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>

    <p><strong>Total Price:</strong> ${{ number_format($total, 2) }}</p>

    <p>Thank you for using our service!</p>
</body>
</html>
