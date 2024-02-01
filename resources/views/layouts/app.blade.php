<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies List</title>
    @vite('resources/js/app.js')
</head>

@yield('head-content')
<body>
    <main>
        App.Blade
    </main>
    @yield('main-content')


@yield('script-content')

</body>

</html>