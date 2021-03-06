<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>金龙的博客 - @yield('title')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        <div class="offset-md-1 col-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>

    <div class="text-center  bg-dark text-white p-4 fixed-bottom">Copyright © 2019 腾牛信息科技有限公司</div>
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>