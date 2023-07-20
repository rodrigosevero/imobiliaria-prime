<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Imobiliária Prime')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
