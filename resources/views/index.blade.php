<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train['train_code'] }}</li>
        @endforeach
    </ul>

</body>

</html>
