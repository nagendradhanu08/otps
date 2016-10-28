<!doctype html>
<html>
<head>
    <title> OTP </title>
    @include('layout.head')
    @yield('Page-Style')
</head>
<body>
@include('layout.header',['page'=>'front'])
@yield('Page-Content')
@include('layout.footer',['page'=>'front'])
@include('layout.foot')
@yield('Page-Script')
</body>
</html>