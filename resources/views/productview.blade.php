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



    .verMaisCateg:hover {
        background-color: white;
        color: #AC3333;
        border-color: #AC3333;


    }
</style>

<body>
    @include('partials.publicmenu')
    <!-- DIV INICIAL DO PRODUTO-->
    <div class="row mt-5 ml-5 mr-5" style="border-bottom:2px solid #ededed;">
        <!--IMAGENS-->
        <div class="col-md-5">

            <!--IMAGEM GRANDE-->
            <div class="card mr-2">
                <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                <div class="card-body">
                    <h4 class="card-title">Produto</h4>
                    <p class="card-text" style="text-align: justify;">bla bla bla <br> bla bla bla<br> bla bla bla <br> bla bla bla <br> bla bla bla</p>
                </div>
            </div>

            <!-- 3 IMAGENS PEQUENAS-->
            <div class="row mt-3 mb-5">

                <!--Primeiro cartão-->
                <div class="col-md-4">
                    <div class="card mr-2">
                        <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Produto (2)</h4>
                            <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                </div>

                <!--Segundo cartão-->
                <div class="col-md-4">
                    <div class="card mr-2">
                        <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Produto (3)</h4>
                            <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                </div>

                <!--Terceiro cartão-->
                <div class="col-md-4">
                    <div class="card mr-2">
                        <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Produto (4)</h4>
                            <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--INFORMAÇÕES-->
        <div class="col-md-7">

            <!--NOME DO PRODUTO-->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5" style="color:#4f4e4d;">Nome do Produto</h2>
                </div>
            </div>

            <!--PREÇO E NÚMERO DE UNIDADES-->
            <div class="row mr-5 mt-5" style="border-top: 2px solid #ededed; border-bottom: 2px solid #ededed ">
                <div class="col-md-6">
                    <p class="mt-5 mb-5" style="font-size:20px;">Preço <span>€</span></p>
                </div>
                <div class="col-md-6">
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

            <!--Primeiro cartão-->
            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" alt="100%x280" src="images/berlim/spati.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Produtos Peso 1</h4>
                        <p class="card-text">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                    </div>
                </div>
            </div>

            <!--Segundo cartão-->
            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" alt="100%x280" src="images/berlim/currywurst.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Produtos Peso 2</h4>
                        <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                    </div>
                </div>
            </div>

            <!--Terceiro cartão-->
            <div class="col-md-4">
                <div class="card">
                    <img class="img-fluid" alt="100%x280" src="images/berlim/markthalle.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Produtos Peso 3</h4>
                        <p class="card-text" style="text-align: justify;">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--AVALIAÇÕES-->
    <div class="row">
        <div class="col-md-12">
            <h4 class=" mt-3 ml-5 " style="font-weight:bold; color:#AC3333;">Avaliações</h4>

        </div>
    </div>
</body>