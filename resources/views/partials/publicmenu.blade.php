<style>
    .search-container {
        margin: 0 auto;
        justify-content: center;
    }

    .search-container input[type=text] {
        padding: 7px;
        margin-top: 8px;
        font-size: 15px;
        border: none;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        outline: none;
        width: 350px;
        justify-content: center;
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

    #carrinhoIcon:hover {
        text-decoration: none !important;

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

    .alert {
        position: relative;
        padding: .10rem .10rem;
        border-radius: .25rem;
    }
</style>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md navbar-expand-sm sticky-top py-0" style="background-color: #EFF4EE;">

        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="/storage/images/logo.png" alt="logo" style="width: 50%;">

        </a>
        @if (Session::has('errors'))
        <div class="alert alert-danger alert-dismissible fade show mt-2" style="size:3px;" role="alert" id="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>

        </div>
        @endif
        <!-- Caixa de pesquisa -->

        <div class="search-container">
            <form action=" {{ route('search') }}" method="get" class="search-form">
                <input type="text" placeholder="O que procura?" name="query" id="query" value="{{ request()->input('query') }}">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>






        <!-- Login e Registo -->
        <ul class="navbar-nav justify-content-right">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/user') }}"><i class="far fa-user fa-2x mx-3" style="color: #AC3333;"></i></a>
                <a href="{{ url('/cart') }}" id="carrinhoIcon">
                    <i class="fas fa-shopping-cart fa-2x mx-3" style="color: #AC3333;">
                        @if(Cart::instance('default')->count() > 0)
                        <span class="text-center" style="font-size:20px;">{{Cart::instance('default')->count() }}</span>
                        @endif
                    </i>

                </a>
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
                <a href="/products">Produtos</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="/about">Sobre Nós</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="/contactos">Contacto</a>
            </div>


        </div>
    </div>