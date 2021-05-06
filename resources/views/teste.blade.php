<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Catinho Doce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>


<style>
    *,
    html,
    body {
        font-family: 'Poppins', sans-serif;

    }

    body {
        overflow-x: hidden;
    }



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

    /* Latest Produtcs */

    .latest-products {
        margin-top: 100px;
    }

    .section-heading a {
        float: right;
        margin-top: -35px;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;
        color: #f33f3f;
    }

    /* Services */

    .services {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        padding: 100px 0px;
    }

    .services .section-heading h2 {
        color: #fff;
    }

    .service-item {
        text-align: center;
        margin-bottom: 30px;

    }

    .service-item .down-content {
        background-color: #fff;
        padding: 40px 30px;
    }

    .service-item .down-content h4 {
        font-size: 17px;
        color: black;
        margin-bottom: 20px;
        text-align: justify;
    }


    .services-item-image {
        display: block;
    }
</style>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md navbar-expand-sm sticky-top py-0" style="background-color: #EFF4EE;">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
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
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Página Inicial</a>
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
    <div class="container-fluid text-center menu-item position-relative">
        <div class="row">
            <div class="col border border-3 py-2">
                <a class="active" href="#home">Início</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Produtos</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Sobre Nós</a>
            </div>
            <div class="col border border-3 py-2">
                <a href="#about">Contato</a>
            </div>


        </div>
    </div>



    <!-- CORPO -->

    <!-- Imagem bem-vindo -->
    <div class="container-fluid" style="padding-left: 0; padding-right: 0; ">
        <img src="storage/images/pastelaria.jfif" alt="pastelaria" style="float:center;max-width:100%;height:auto;object-fit:cover;">
        <div class="center">Bem-vindo!</div>
        <div class="center-down">Faça já sua compra online!</div>

    </div>

    <!--Produtos mais vendidos-->
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Nossos produtos mais vendidos</h2>
                        <a href="products.html">Ver mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="container-fluid ">
                    <section class="pt-3">
                        <div class="container">
                            <div class="row">

                                <!--Carousel-->
                                <div class="col-12">
                                    <div id="carouselIndicator" class="carousel slide" data-ride="carousel">

                                        <!--Primeiro slide-->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">

                                                    <!--Primeiro cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="images/berlim/spati.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Produto 1</h4>
                                                                <p class="card-text">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Segundo cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="images/berlim/currywurst.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Produto2</h4>
                                                                <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Terceiro cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Produto3</h4>
                                                                <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Segundo slide-->
                                            <div class="carousel-item">
                                                <div class="row">

                                                    <!--Primeiro cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="images/berlim/joelho.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Produto 4</h4>
                                                                <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Segundo cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="images/berlim/schnitzel.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Produto 5</h4>
                                                                <p class="card-text" style="text-align: justify;"> bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Terceiro cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280" src="images/berlim/strudel.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Produto 6</h4>
                                                                <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Botões left right-->
                                <div class="col-7 text-right">
                                    <a class="btn btn-light mb-3 mr-1" href="#carouselIndicator" role="button" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-light mb-3 " href="#carouselIndicator" role="button" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

    <!--Produtos frescos-->
    <div class="services" style="background-image: url(storage/images/paes.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2><b>Sempre Fresco, Sempre Doce</h2></b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-5 text-center service-item down-content bg-white p-5">
                    <h5>Na Cantinho Doce, damos preferência à frescura e à qualidade dos nossos produtos. Pretendemos que nossos clientes usufruam de uma experiência <b>maravilhosa</b>, garantindo que os produtos sejam fabricados com a melhor qualidade e entregues ao cliente no tempo certo e nas condições certas. Caso não possa se deslocar até nós, <b>nós vamos até si.</b></h5>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 service-item down-content bg-white p-3 mx-3">
                    <a href="#" class="services-item-image p-4"><img src="storage/images/badge.svg" class="img-fluid w-50" alt=""></a>
                    <h5>Frescura e Doçura</h5>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Footer-->
    <div class="container-fluid mt-5" style="padding-left: 0; padding-right: 0;">
        <div class="card bg-white">
            <div class="row mb-4 mt-4">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="footer-text pull-left">
                        <div class="d-flex">
                            <h3 class="font-weight-bold mr-2 px-3" style="color:white; background-color:#AC3333"> Pastelaria</h3>
                            <h3 style="color: #AC3333">Cantinho Doce</h3>
                        </div>
                        <p class="card-text">Rua do Arieiro 4, Ega <br> Condeixa-a-Nova, Coimbra, Portugal</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <h5 class="heading">MENU PRINCIPAL</h5>
                    <ul>
                        <li>Início</li>
                        <li>Produtos</li>
                        <li>Sobre Nós</li>
                        <li>Contactos</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <h5 class="heading">SOBRE O SITE</h5>
                    <ul class="card-text">
                        <li>Livro de Reclamações</li>
                        <li>Política de Privacidade</li>
                        <li>Termos e Condições</li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <h5 class="heading">NOSSAS REDES SOCIAIS</h5>
                    <ul class="card-text">
                        <i class="fab fa-facebook-square fa-lg"></i> Facebook <br>
                        <i class="fab fa-instagram fa-lg"></i> Instagram
                    </ul>
                </div>
            </div>
            <div class="divider mb-4"> </div>
            <div class="row" style="font-size:10px;">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="pull-left">
                        <p><i class="fa fa-copyright"></i> 2021 Cantinho Doce</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        const searchBtn = document.querySelector(".search-icon");

        searchBtn.onclick = () => {
            form.classList.add("active");
            searchBtn.classList.add("hide");
        }
    </script>


</body>

</html>