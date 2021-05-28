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

    <!-- CORPO -->

    <!-- Imagem bem-vindo -->
    <div class="container-fluid" style="padding-left: 0; padding-right: 0; ">
        <img src="storage/images/pastelaria.jpg" alt="pastelaria" style="float:center;min-width:100%;height:auto;object-fit:cover;">
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
                        <a href="products">Ver mais <i class="fa fa-angle-right"></i></a>
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
                                            @foreach($produtos->chunk(3) as $produto)
                                            <div class="carousel-item @if ($loop->first) active @endif">
                                                <div class="row">

                                                    @foreach($three as $produto)
                                                    <!--Primeiro cartão-->
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card h-100">
                                                            <img class="img-fluid" src="{{ Storage::url($produto->imagem) }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">{{$produto->nome}}</h4>
                                                                <p class="card-text">{{$produto->categoria}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <!--Botões left right-->
                                <div class="col-7 text-right">
                                    <a class="btn btn-light mb-3 mr-1" data-bs-target="#carouselIndicator" href="#carouselIndicator" role="button" data-slide-to="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-light mb-3 " data-bs-target="#carouselIndicator" href="#carouselIndicator" role="button" data-slide="next">
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
                    <ul class="card-text" style="text-decoration:none;">
                        <a href="https://www.facebook.com/Cantinho-Doce-171238046553832" target="_blank" style="color:#4f4e4d;"><i class="fab fa-facebook-square fa-lg"></i> Facebook <br></a>
                        <a href="https://www.instagram.com/cantinho_doce_pastelaria/" target="_blank" style="color:#4f4e4d;"><i class="fab fa-instagram fa-lg"></i> Instagram</a>
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