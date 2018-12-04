<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <title>note</title>
</head>
<body>
    <div class="container">
        @include('navvar')
        @yield('content')
    </div>
</body>
</html>