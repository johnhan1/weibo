<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--@yield可以传两个参数，第一个参数表示站位区域的名称，第二个参数表示当title为空时，取第二个参数--}}
    <title>@yield('title','sample') -  Laravel 新手入门教程</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/default.css">
    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    @include('layouts._header')
    <div class="container" id="content">
        <div class="col-md-10 col-md-offset-1">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
</body>
</html>