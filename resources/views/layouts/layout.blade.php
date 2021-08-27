<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes">
    <title>Document</title>

    @include('layouts.style')
</head>

<body>
    <div data-role="page" id="page" style="height:100%">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>
    @include('layouts.script')
</body>

</html>
