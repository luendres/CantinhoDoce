<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cantinho Doce</title>
    <link rel="icon" type="image/x-icon" href="storage/images/logo.png">

    <!-- CSS -->
    <script src="https://kit.fontawesome.com/c1a2cc467f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;

    }

    .c-sidebar-nav-link:hover {
        background-color: white !important;
        color: #AC3333 !important;

    }

    .c-main {
        padding-top: 0;
    }
</style>

<body class="c-app">

    @include('partials.menu')

    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-fixed" style="justify-content: flex-end;">
            <h5 class="my-3 mx-3"> Modo Administrador</h5>
            <button class="btn btn-danger" style="color: white;" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Logout</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>


        </header>
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    @yield('content')

                </div>
            </main>
        </div>
        <footer class="c-footer">
            <div>© 2021 Pastelaria Cantinho Doce</div>
        </footer>
    </div>
    </div>



    <!-- Optional JavaScript -->

    <script src="https://unpkg.com/@popperjs/core@2"></script>

</body>

</html>