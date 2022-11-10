<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Display</title>
    @include('master.stylesheet')
</head>

<body>
    @include('master.header')
    @yield('main-content')
    @include('master.script')
</body>


</html>
