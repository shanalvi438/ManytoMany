<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role List</title>
</head>
<body>
    <h1>Role List</h1>
    <ul>
        @foreach ($roles as $role)
            <li>{{ $role->name }}</li>
        @endforeach
    </ul>
</body>
</html>
