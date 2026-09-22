<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="{{ $restaurant['name'] }} menu"
    >

    <title>
        @yield('title', 'Restaurant Menu')
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/menu.css') }}"
    >
</head>

<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>