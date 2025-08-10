<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Notification' }}</title>
</head>
<body>
    <h1>{{ $heading ?? 'Your OTP Code' }}</h1>
    <p>Your OTP code is: <strong>{{ $otp }}</strong></p>
    <p>{{ $body ?? 'Thank you!' }}</p>
</body>
</html>
