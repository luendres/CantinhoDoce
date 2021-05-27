<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Cantinho Doce</title>
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

    .nav-link.categ {
        color: #AC3333;
        font-size: 20px;
        font-weight: bold;
    }

    .queroComent {
        background-color: #AC3333;
        color: white;
        border: 1px solid #AC3333;
    }

    .verMaisCateg {
        background-color: #E0E0E0;
        font-size: 15px;
        font-weight: bold;
        border: solid 2px #E0E0E0;
        color: #4f4e4d;
        border-radius: 5%;
    }

    .fecharModal {
        background-color: #E0E0E0;
        font-weight: bold;
        border: solid 2px #E0E0E0;
        color: #4f4e4d;
    }

    .verMaisCateg:hover,
    .queroComent:hover,
    .fecharModal:hover {
        background-color: white;
        color: #AC3333;
        border-color: #AC3333;
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


    @include('partials.publicmenu')

    <!-- DIV INICIAL DO PRODUTO-->
    <div class="row mt-5 ml-5 mr-5" style="border-bottom:2px solid #ededed;">
        <!--IMAGENS-->
        <div class="col-md-5">

            <!--IMAGEM GRANDE-->
            <div class="card mr-2 mb-5">
                <img class="img-fluid" src="{{ Storage::url($produto->imagem) }}">
                <div class="card-body">
                    <h4 class="card-title">{{$produto->nome}}</h4>
                    <p class="card-text" style="text-align: justify;">bla bla bla <br> bla bla bla<br> bla bla bla <br> bla bla bla <br> bla bla bla</p>
                </div>
            </div>


        </div>

        <!--INFORMAÇÕES-->
        <div class="col-md-7">

            <!--NOME DO PRODUTO-->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5" style="color:#4f4e4d;">{{$produto->nome}}</h2>
                </div>
            </div>

            <!--PREÇO E NÚMERO DE UNIDADES-->
            <div class="row mr-5 mt-5" style="border-top: 2px solid #ededed; border-bottom: 2px solid #ededed ">
                <div class="col-md-6">
                    <p class="mt-5 mb-5" style="font-size:20px;">Preço: {{$produto->preco}}</p>
                </div>
                <div class="col-md-5">
                    <input class="mt-5 mb-5" type="number"> unidades</input>
                </div>
            </div>

            <!--TIPO DE PRODUTO E BOTÃO DE ADICIONAR AO CARRINHO-->
            <div class="row mt-3 mr-5">
                <div class="col-md-6">
                    <div class="dropdown mt-5">
                        <button class="btn dropdown-toggle verMaisCateg" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detalhes</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Tipo 1</a>
                            <a class="dropdown-item" href="#">Tipo 2</a>
                            <a class="dropdown-item" href="#">Tipo 3</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn verMaisCateg mt-5 mb-3">Adicionar ao carrinho <i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!--PRODUTOS SIMILARES-->
    <div class="row" style="border-bottom: 2px solid #ededed;">

        <!--Titulo-->
        <div class="col-md-12">
            <h4 class="text-center mt-3" style="font-weight:bold; color:#4f4e4d;">Produtos Similares</h4>
        </div>

        <!--3 Imagens dos Produtos Similares-->
        <div class="row mb-4 mt-4 ml-5 mr-5">
            @foreach($similares as $similar)
            <!--Primeiro cartão-->
            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" src="{{ Storage::url($similar->imagem) }}">
                    <div class="card-body">
                        <h4 class="card-title">{{$similar->nome}}</h4>
                        <p class="card-text">{{$similar->categoria}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    @include('partials.avaliar-produto')

</body>