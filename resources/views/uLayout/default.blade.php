<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 top">@include('ulayout.header')</div>
        </div>
        <div class="row">
            <div class="col-12 menu">@include('ulayout.menu')</div>
        </div>
        <div class="row">
            <div class="col-12 contents">@yield('content')</div>
        </div>
        <div class="row">
            <div class="col-12 foot">@include('ulayout.footer')</div>
        </div>
    </div>
</body>
</html>