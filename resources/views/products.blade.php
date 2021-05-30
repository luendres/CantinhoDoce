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

    .verMaisCateg {
        background-color: #E0E0E0;
        font-size: 15px;
        font-weight: bold;
        border: solid 2px #E0E0E0;
        color: #4f4e4d;
        border-radius: 5%;
    }

    .card {
        color: black;
    }

    .card:hover {
        color: black;
        text-decoration: underline;
    }



    .verMaisCateg:hover {
        background-color: white;
        color: #AC3333;
        border-color: #AC3333;


    }
</style>


<body>
    @include('partials.publicmenu')

    <!-- CORPO -->

    <!--Menu de Padaria-->
    <div class="row mt-4">
        <div class="col col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ" aria-current="page" href="#">Padaria</a>
                <li><a class="dropdown-item" href="#">Pão</a></li>
                <li><a class="dropdown-item" href="#">Pão de 0,5 kg</a></li>
                <li><a class="dropdown-item" href="#">Broa grande</a></li>
                <li><a class="dropdown-item mb-3" href="#">Broa pequena</a></li>
                </li>
            </ul>
        </div>

        <!--Imagens da Padaria-->
        <div class="col col-md-9" style="border-left:solid 2px; border-color:#E0E0E0">
            <div class="row">

                <!--Linha Produtos-->
                <div class="col-12">
                    <div class="row mb-4">
                        @foreach($produtos_padaria->slice(0, 3) as $produto_padaria)

                        <div class="col-md-3">
                            <a href="{{ URL::to('/productview/' . $produto_padaria->id) }}">
                                <div class="card h-100">
                                    <img class="img-fluid" alt="100%x280" src="{{ Storage::url($produto_padaria->imagem) }}">
                                    <div class="card-body">
                                        <h4 class="card-title" style="text-transform: uppercase !important;">{{$produto_padaria->nome}}</h4>
                                        <p class="card-text">{{$produto_padaria->categoria}}, {{$produto_padaria->sub_categoria}} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach


                        <!-- Botão de Ver Todos-->
                        <div class="col-md-3 mb-3">
                            <a href="{{ URL::to('/verTodos/Padaria') }}" class="btn verMaisCateg mt-5 ml-5">Ver todos <i class="fas fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Menu dos Doces-->
    <div class="row">
        <div class="col col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ " aria-current="page" href="#">Doces</a>
                <li><a class="dropdown-item" href="#">Sobremesas</a></li>
                <li><a class="dropdown-item" href="#">Pastéis Diversos</a></li>
                <li><a class="dropdown-item mb-3" href="#">Pastéis Miniatura Diversos</a></li>
                </li>
            </ul>
        </div>

        <!--Imagens dos Doces-->
        <div class="col col-md-9" style="border-left:solid 2px; border-color:#E0E0E0">
            <div class="row">

                <!--Linha 2 Produtos-->
                <div class="col-12">
                    <div class="row mb-4">
                        @foreach($produtos_doces->slice(0, 3) as $produto_doces)

                        <div class="col-md-3">
                            <a href="{{ URL::to('/productview/' . $produto_doces->id) }}">
                                <div class="card h-100">
                                    <img class="img-fluid" alt="100%x280" src="{{ Storage::url($produto_doces->imagem) }}">
                                    <div class="card-body">
                                        <h4 class="card-title"  style="text-transform: uppercase !important;">{{$produto_doces->nome}}</h4>
                                        <p class="card-text">{{$produto_doces->categoria}}, {{$produto_doces->sub_categoria}} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach


                        <!-- Botão de Ver Todos-->
                        <div class="col-md-3 mb-3">
                            <a href="{{ URL::to('/verTodos/Doces') }}" class="btn verMaisCateg mt-5 ml-5">Ver todos <i class="fas fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Menu dos Salgados-->
    <div class="row">
        <div class="col col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item ">
                    <a class="nav-link categ" aria-current="page" href="#">Salgados</a>
                <li><a class="dropdown-item" href="#">Rissóis</a></li>
                <li><a class="dropdown-item" href="#">Pasteis Diversos</a></li>
                <li><a class="dropdown-item" href="#">Pastéis Miniatura Diversos</a></li>
                <li><a class="dropdown-item mb-3" href="#">Pizzas/Bolas/Quiches</a></li>
                </li>
            </ul>
        </div>

        <!--Imagens dos Salgados-->
        <div class="col col-md-9" style="border-left:solid 2px; border-color:#E0E0E0">
            <div class="row">

                <!--Linha 3 produtos-->
                <div class="col-12">
                    <div class="row mb-4">
                        @foreach($produtos_salgados->slice(0, 3) as $produto_salgados)

                        <div class="col-md-3">
                            <a href="{{ URL::to('/productview/' . $produto_salgados->id) }}">
                                <div class="card h-100">
                                    <img class="img-fluid" alt="100%x280" src="{{ Storage::url($produto_salgados->imagem) }}">
                                    <div class="card-body">
                                        <h4 class="card-title"  style="text-transform: uppercase !important;">{{$produto_salgados->nome}}</h4>
                                        <p class="card-text">{{$produto_salgados->categoria}}, {{$produto_salgados->sub_categoria}} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach



                        <!-- Botão de Ver Todos-->
                        <div class="col-md-3 mb-3">
                            <a href="{{ URL::to('/verTodos/Salgados') }}" class="btn verMaisCateg mt-5 ml-5">Ver todos <i class="fas fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Menu dos Produtos ao Peso-->
    <div class="row">
        <div class="col col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link categ" aria-current="page" href="#">Produtos ao Peso</a>
                <li><a class="dropdown-item" href="#">Bolos de Aniversário</a></li>
                <li><a class="dropdown-item" href="#">Sobremesas</a></li>
                <li><a class="dropdown-item" href="#">Sortidos</a></li>
                </li>
            </ul>
        </div>

        <!--Imagens dos Produtos ao Peso-->
        <div class="col col-md-9" style="border-left:solid 2px; border-color:#E0E0E0">
            <div class="row">

                <!--Linha 4 Produtos-->
                <div class="col-12">
                    <div class="row mb-4">
                        @foreach($produtos_peso->slice(0, 3) as $produto_peso)

                        <div class="col-md-3">
                            <a href="{{ URL::to('/productview/' . $produto_peso->id) }}">
                                <div class="card h-100">
                                    <img class="img-fluid" alt="100%x280" src="{{ Storage::url($produto_peso->imagem) }}">
                                    <div class="card-body">
                                        <h4 class="card-title" style="text-transform: uppercase !important;">{{$produto_peso->nome}}</h4>
                                        <p class="card-text">{{$produto_peso->categoria}}, {{$produto_peso->sub_categoria}} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach



                        <!-- Botão de Ver Todos-->
                        <div class="col-md-3 mb-3">
                            <a href="{{ URL::to('/verTodos/Produtos%20ao%20Peso') }}" class="btn verMaisCateg mt-5 ml-5">Ver todos <i class="fas fa-angle-double-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>