<style>
    .search-container {
        margin: 0 auto;
    }

    .search-container input[type=text] {
        padding: 7px;
        margin-top: 8px;
        font-size: 15px;
        border: none;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        outline: none;
        width: 400px;
    }

    .search-container button {
        float: right;
        padding: 7px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background-color: #AC3333;
        color: white;
        font-size: 15px;
        border: none;
        cursor: pointer;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        outline: none;
    }

    .search-container button:hover {
        background: white;
        color: #AC3333;

    }

    .menu-item {
        border: 5px;
        border-color: #DF1F2F;
        outline-color: #DF1F2F;
        color: black;
    }

    .menu-item {

        border-color: black;
        outline-color: #DF1F2F;
        color: white;
        background-color: #AC3333;
    }

    .menu-item a {
        border: 5px;
        border-color: #DF1F2F;
        outline-color: #DF1F2F;
        color: white;

    }

    .border-3 {
        border-width: 0px 3px 3px 0px !important;
        border-color: white !important;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 5vw;
        color: white;
        font-family: 'Pacifico', cursive;

    }

    .center-down {
        position: absolute;
        top: 62%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2.5vw;
        color: white;
    }

    .section-heading {
        text-align: left;
        margin-bottom: 40px;
        border-bottom: 1px solid #eee;
    }

    .section-heading h2 {
        font-size: 28px;
        font-weight: 400;
        color: #1e1e1e;

    }
</style>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md navbar-expand-sm sticky-top py-0" style="background-color: #EFF4EE;">

        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="storage/images/logo.png" alt="logo" style="width: 50%;">

        </a>

        <!-- Caixa de pesquisa -->

        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="O que procura?" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>



        <!-- Login e Registo -->
        <ul class="navbar-nav justify-content-right">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/user') }}"><i class="far fa-user fa-2x mx-3" style="color: #AC3333;"></i></a>
                <a href="{{ url('/cart') }}"><i class="fas fa-shopping-cart fa-2x mx-3" style="color: #AC3333;"></i></a>
                <button class="btn btn-outline-light" style="color: black;" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();"> Logout</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <a href="{{ route('login') }}" class="px-2 text-sm" style="color: black;"><b>Login</b></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-2 px-4 text-sm" style="color: black;"><b>Registo</a></b>
                @endif
                @endauth
            </div>
            @endif
        </ul>

    </nav>

    <!--MENU PRINCIPAL-->
    <div class="container-fluid text-center menu-item position-relative">
        <div class="row">
            <div class="col border border-3 py-2">
                <a class="active" href="/">Início</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="products">Produtos</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Sobre Nós</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Contacto</a>
            </div>


        </div>
    </div>