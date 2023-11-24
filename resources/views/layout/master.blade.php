<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/portfolioStyle.css')}}">
    <link rel="stylesheet" href="{{asset('/bootstap/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Developer Portfolio </title>
</head>
<body>
    <!-- header-area-start-hear -->
    @include('component.header')
    <!-- header-area-end-hear -->
    <!---------main-content------------>
    @yield('content')
    <!---------main-content------------>
    @include('component.footer')
    
    <script src="{{asset('/bootstap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('/bootstap/js/popper.min.js')}}"></script>
</body>
</html>