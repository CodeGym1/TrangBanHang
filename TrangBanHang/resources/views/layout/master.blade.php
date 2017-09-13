<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link href="/jquery/jquery.bxslider.css" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" type="text/css" href="/css/banhang.css">
    <script src="/jquery/jquery-3.2.1.min.js"></script>
    <script src="/jquery/jquery.bxslider.min.js"></script>



</head>

<body>
@include('layout.header')
@include('layout.menu')
@include('layout.slides')
@yield('Noidung')

@include('layout.footer')

<script src="/js/banhang.js"></script>




</body>
</html>