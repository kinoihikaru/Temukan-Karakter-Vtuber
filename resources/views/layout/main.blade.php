<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')
    <title> TKVtuber </title>

    @include('layout.partial.style')
</head>
<body id="page-top">

    @yield('content')

    @include('layout.partial.script')
</body>
</html>
