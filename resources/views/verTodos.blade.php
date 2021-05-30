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

    .card{
        color:black;
    }
    .card:hover{
        color:black;
        text-decoration:underline;
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
        <!--Imagens da Padaria-->
        <div class="col col-md-12" style="border-left:solid 2px; border-color:#E0E0E0">
            <div class="row">

                <!--Linha Produtos-->
                <div class="col-12 p-5 mx-2">
                    <div class="row mb-4">

                        @foreach($produto as $produtos)
                        <div class="col-md-3">
                            <a href="{{ URL::to('/productview/' . $produtos->id) }}">
                                <div class="card h-100">
                                    <img class="img-fluid" alt="100%x280" src="{{ Storage::url($produtos->imagem) }}">
                                    <div class="card-body">
                                        <h4 class="card-title" style="text-transform: uppercase !important;">{{$produtos->nome}}</h4>
                                        <p class="card-text">{{$produtos->categoria}}, {{$produtos->sub_categoria}} </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>