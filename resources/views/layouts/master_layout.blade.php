<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MuseScore</title>

</head>

<body>

{{--Header--}}
<div class="header">
    @yield('layouts.header')
</div>

{{--Content--}}
<div class="content">
    @yield('content')
</div>

{{--Footer--}}
<div class="footer">
    @yield('layouts.footer')
</div>

</body>
</html>