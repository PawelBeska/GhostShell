<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description"
          content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#d9230f">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="{{URL::asset('assets/panel/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/panel/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/panel/css/application.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/panel/css/product.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/panel/css/messenger.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

</head>
<body class="layout layout-header-fixed">
@yield('header')
<div class="layout-main">
    @yield('sidebar')
    @yield('content')
    @yield('foter')
</div>
<script src="{{URL::asset('assets/panel/js/vendor.min.js')}}"></script>
<script src="{{URL::asset('assets/panel/js/elephant.min.js')}}"></script>
<script src="{{URL::asset('assets/panel/js/application.min.js')}}"></script>
<script src="{{URL::asset('assets/panel/js/messenger.min.js')}}"></script>

</body>
</html>