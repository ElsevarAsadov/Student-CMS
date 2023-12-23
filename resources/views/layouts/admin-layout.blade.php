<!doctype html>
<html lang="en">
<head>
    <meta charset="{{str_replace('-', '_', app()->getLocale())}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="{{asset("/bs/bootstrap.min.css")}}" rel="stylesheet" >
    <script defer src="{{asset("/bs/bootstrap.bundle.min.js")}}"></script>
   {{-- @yield('vite')--}}
    <script src="/build/assets/app-4ed993c7.js"></script>
    <script src="/build/assets/app-5f739ed6.js"></script>


</head>
<body>

@yield('content')

@yield('scripts')
</body>
</html>
