<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--@yield可以传两个参数，第一个参数表示站位区域的名称，第二个参数表示当title为空时，取第二个参数--}}
    <title>@yield('title','sample') -  Laravel 新手入门教程</title>
</head>
<body>
    @yield('content')
</body>
</html>