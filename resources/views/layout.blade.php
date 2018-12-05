<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <title>note</title>
</head>
<body style='font-family: "游ゴシック体", YuGothic, "游ゴシック Medium",
        "Yu Gothic Medium", "游ゴシック", "Yu Gothic", "メイリオ", sans-serif;'>
    <div class="container">
        @include('navvar')
        @yield('content')
    </div>
</body>
</html>