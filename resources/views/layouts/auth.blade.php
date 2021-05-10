<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">

    <title>{{ config('app.name', 'Cantinho Doce') }}</title>
</head>

<body class="flex-row align-items-center" style="background-image: url('storage/images/fundo.jpg');">

    @yield('content')
</body>

</html>