<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav>
        <ul class="fancy-menu">
            <h2>To do list</h2>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        @yield("content")
    </main>
</body>
</html>
