<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:wght@200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>

@include('include.header')

@yield('content')

@include('include.footer')


<script src="{{asset('asset')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
