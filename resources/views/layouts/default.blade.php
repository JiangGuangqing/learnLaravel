<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Sample') - Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
</html>
