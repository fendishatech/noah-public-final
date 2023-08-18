<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noah COOP | @yield('page_title') </title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/main.css">
    @yield('styles')
</head>

<body>
    {{-- content --}}
    @include('master.partials.header')
    @yield('content')
    @include('master.partials.footer')

    {{-- scripts --}}
    <script src="/js/main.js"></script>
    @yield('scripts')
</body>

</html>
