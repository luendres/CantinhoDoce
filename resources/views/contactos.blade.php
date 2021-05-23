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

    .contact {
        position: relative;
        min-height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #fff;
        background-size: cover;
    }

    .contact .content {
        max-width: 1000px;
        text-align: center;
    }

    .contact .content h2 {
        font-size: 36px;
        font-weight: 700;
        color: black;
    }

    .contact .content p {
        font-weight: 500;
        color: black;
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
        margin-right: 2000px;
    }


    .container .contactInfo .box {
        position: relative;
        padding: 20px 0;
        display: flex;
    }

    .container .contactInfo .box .icon {
        min-width: 60px;
        height: 60px;
        background: #AC3333;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 22px;
    }

    .container .contactInfo .box .text {
        display: flex;
        margin-left: 20px;
        font-size: 16px;
        color: black;
        flex-direction: column;
        font-weight: 300;
    }

    .container .contactInfo .box .text h3 {
        font-weight: 600;
        color: #AC3333;
    }

    .contactForm {
        width: 40%;
        padding: 70px;
        margin-right: -700px;
        margin-top: -500px;
        background-image: url(storage/images/paes.jpg);
        border-radius: 15px;
    }

    .contactForm h2 {
        font-size: 30px;
        color: #fff;
        font-weight: 900;
    }

    .contactForm .inputBox {
        position: relative;
        width: 100%;
        margin-top: 10px;
    }

    .contactForm .inputBox input,
    .contactForm .inputBox textarea {
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border: none;
        border-bottom: 2px solid #333;
        outline: none;
        resize: none;
    }

    .contactForm .inputBox span {
        position: absolute;
        left: 5px;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }

    .contactForm .inputBox input:focus~span,
    .contactForm .inputBox input:valid~span,
    .contactForm .inputBox textarea:focus~span,
    .contactForm .inputBox textarea:valid~span {
        color: #F1F76F;
        font-weight: 900;
        font-size: 15px;
        transform: translateY(-25px);
    }

    .contactForm .inputBox input[type="submit"] {
        width: 100px;
        background: #AC3333;
        color: #fff;
        font-weight: 700;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
    }

    @media (max-width: 991px) {
        .contact {
            padding: 50px;
        }

        .container {
            flex-direction: column;
        }

        .container .contactInfo {
            margin-bottom: 40px;
        }

        .container .contactInfo,
        .contactForm {
            width: 100%;
        }
    }
</style>

<body>
    @include('partials.publicmenu')

    <!-- CORPO -->

    <section class="contact">
        <div class="content my-4">
            <h3><b>Contacte-nos</h3></b>
            <p> bla bla bla bla bla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla blabla bla bla bla </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker-alt" style="color: white;"></i></div>
                    <div class="text">
                        <h4>Endereço</h4>
                        <p>Rua do Arieiro 4, Ega <br> Condeixa-a-Nova, Coimbra, Portugal</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-phone" style="color: white;"></i></div>
                    <div class="text">
                        <h4>Telemóvel</h4>
                        <p>239 944 956</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-at" style="color: white;"></i></div>
                    <div class="text">
                        <h4>Email</h4>
                        <p>cantinhodoce@sapo.pt</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-users" style="color: white;"></i></div>
                    <div class="text">
                        <h4>Redes Sociais</h4>
                        <ul class="card-text" style="text-decoration:none;">
                            <a href="https://www.facebook.com/Cantinho-Doce-171238046553832" target="_blank" style="color:#4f4e4d;"><i class="fab fa-facebook-square fa-lg"></i> Facebook <br></a>
                            <a href="https://www.instagram.com/cantinho_doce_pastelaria/" target="_blank" style="color:#4f4e4d;"><i class="fab fa-instagram fa-lg"></i> Instagram</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form>
                <h2>Enviar Mensagem</h2>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Primeiro e Último Nome</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Escreva a sua Mensagem...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="" required="Send">
                </div>
            </form>
        </div>
        </div>
    </section>
</body>

</html>