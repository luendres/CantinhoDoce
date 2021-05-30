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
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
    
    } 
    body {
        overflow-x: hidden;
    }
    .about-us
    {
        position: relative;
        min-height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-size: cover;
    }
    .about-us .content 
    {
        max-width: 1000px;
        text-align: justify;

    }
    .about-us .content h2 
    {
        font-size: 36px;
        font-weight: 700;
        color: black;
    }

   .icon 
   {
       color: #AC3333;
        font-size: 50px;
   }
  
    .container 
    {
    margin: 50px;
    width: 50%;
    margin-left: -150px;

    }
    .container-text
    {
    margin: 50px;
    width: 50%;
    margin-left: 600px;
    margin-top: -480px;
 
    }

</style>

<body>
@include('partials.publicmenu')

<!-- CORPO -->


<section class="about-us">
        <div class="content">
            <h2 class="" style="text-align:center"> Sobre Nós</h2>
       
<div class= "container" >
    <div class="row">
        <div class= "col-lg-60 col-md-60 col-sm-50 text-center container-item down-content bg-black p-50">

            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
            <h3>  Encontre-nos no GoogleMaps</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5437.994278900516!2d-8.55150912207063!3d40.098364811767034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7196856ff15f77f9!2sCantinho%20Doce!5e0!3m2!1spt-PT!2spt!4v1622249323620!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
            </div>
            </div>
<div class="container-text" >
    <div class="row">
        <div class= "col-lg-50 col-md-100 col-sm-50 container-item down-content bg-black p-300 mx-300">  
                    <h3> A pastelaria <b>Cantinho Doce</b> foi aberta ao público pela primeira vez em 2001 e encontra-se situada na Freguesia de Ega, no concelho de Condeixa-a-Nova.<br>
                A pastelaria foca-se no fabrico de produtos de pastelaria e padaria, dividindo-se entre a pastelaria artesanal e a pastelaria industrial. <br>Não se esqueça de provar as nossas <b>Escarpeadas!
        </h3>
    </div>
        </div>
</div>

<br>
<br>
<br>
<br>


</section>

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
</body>
</html>