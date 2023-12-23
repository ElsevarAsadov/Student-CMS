<!doctype html>
<html lang="en">
<head>
    <meta charset="{{str_replace('-', '_', app()->getLocale())}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="{{asset("/bs/bootstrap.min.css")}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="{{asset("/bs/bootstrap.bundle.min.js")}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @vite(["resources/js/app.js", "resources/css/app.css"])
</head>
<body>

@yield('content')

</body>
</html>
