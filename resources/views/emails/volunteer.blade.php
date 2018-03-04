<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteer: {{ $name }}</title>
</head>
<body>
    <p>{{ $name }} would like to volunteer!</p>
    <p>They have the following volunteer interest(s):</p>
    <ul>
        @foreach ($interests as $interest)
            <li>{{ $interest }}</li>
        @endforeach
    </ul>
</body>
</html>