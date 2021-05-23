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
        background-image: url('storage/images/fundo.jpg');
        overflow-x: hidden;
    }

    .nav-link.categ {
        color: #AC3333;
        font-size: 20px;
        font-weight: bold;
    }

    .userInput {
        width: 70%;
    }

    .opcoes {
        border-bottom: 3px solid #7d7d7d;
        color: #7d7d7d;
    }

    .opcoes:hover,
    .OpcoesActive,
    .opcoesUser:hover {
        border-bottom-color: #AC3333;
        cursor: pointer;
        color: #AC3333;
    }

    .OpcoesActive {
        font-weight: bold;
        color: black;
        border-bottom-color: black;
    }

    .queroComent {
        background-color: #AC3333;
        color: white;
        border: 1px solid #AC3333;

    }

    .proximo {
        background-color: #4f4e4d;
        font-size: 15px;
        font-weight: bold;
        border: solid 2px #4f4e4d;
        color: #E0E0E0;
        border-radius: 5%;
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
    .fecharModal:hover,
    .proximo:hover {
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

    <div class="row my-5">
        <div class="col col-md-2" style="border-right: 3px dotted;">
            <div class="row">
                <div class="col-md-12 mt-5 opcoesUser text-center">
                    <i class="far fa-user" style="font-size:40px;"></i>
                    <h5 class="mt-2" style="font-size:20px;">Perfil</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 opcoesUser text-center ">
                    <i class="fas fa-box-open" style="font-size:40px; "></i>
                    <h5 class="mt-2" style="font-size:20px;">Encomendas</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 opcoesUser text-center">
                    <i class="fas fa-sign-out-alt" style="font-size:40px;"></i>
                    <h5 class="mt-2" style="font-size:20px; ">Sair</h5>
                </div>
            </div>
        </div>

        <div class="col col-md-10">

            <div class="row text-center mt-5 mr-5">
                <div class="col-md-6">
                    <p>Primeiro Nome *</p>
                    <input type="text" class="userInput" readonly="true" id="primeiroNome" value="{{ $user->nome }}">
                </div>
                <div class="col-md-6 ">
                    <p>Último Nome *</p>
                    <input type="text" class="userInput" readonly="true" id="ultimooNome">
                </div>
                <div class="col-md-6 mt-5">
                    <p>Endereço de Email *</p>
                    <input type="text" class="userInput" readonly="true" id="email" value="{{ $user->email }}">
                </div>
                <div class="col-md-6 mt-5">
                    <p>Morada </p>
                    <input type="text" class="userInput" readonly="true" id="morada" value="{{ $user->morada }}">
                </div>
                <div class="col-md-6 mt-5">
                    <p>NIF </p>
                    <input type="number" class="userInput" readonly="true" id="nif">
                </div>
                <div class="col-md-6 mt-5">
                    <p>Número de telemóvel</p>
                    <input type="number" class="userInput" readonly="true" id="telemovel" value="{{ $user->telemovel }}">
                </div>
                <div id="editarD" class="col-md-12">
                    <button id="editar" type="button" class="btn verMaisCateg mt-5 mb-3 float-right mr-5">Alterar informações <i class="fas fa-user-edit"></i></button>
                </div>
            </div>
            <div class="row m-5 p-4">
                <div class="col-md-2"></div>
                <div class="col-md-8 px-5 py-3" id="mudarPassword" style="display:none; background-color:#E0E0E0; border:1px solid #4f4e4d">
                    <div class="col-md-12 mx-3">
                        <h3> Alterar palavra-passe</h3>
                    </div>
                    <div class="col-md-12 mt-3 mr-5">
                        <p>Palavra-passe atual</p>
                        <input type="password" id="password1" style="width:90%;"><i class="fas fa-eye ml-3" id="olho1" style="font-size:20px;cursor:pointer"></i>
                    </div>
                    <div class="col-md-12 mt-3 mr-5">
                        <p>Nova palavra-passe</p>
                        <input type="password" id="password2" style="width:90%;"><i class="fas fa-eye ml-3" id="olho2" style="font-size:20px;cursor:pointer"></i>
                    </div>
                    <div class="col-md-12 mt-3 mr-5">
                        <p>Confirme a nova palavra-passe</p>
                        <input type="password" id="password3" style="width: 90%;"><i class="fas fa-eye ml-3" id="olho3" style="font-size:20px;cursor:pointer"></i>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div id="confirmarBotoes" class="col-md-12">
                    <button id="guardar" type="button" class="btn proximo mt-5 mb-3 float-right mr-5" style="display:none;">Guardar <i class="fas fa-check"></i> </button>
                    <button id="cancelar" data-toggle="modal" data-target="#CancelarModal" type="button" class="btn verMaisCateg mt-5 mb-3 float-right mr-5" style="display:none;">Cancelar <i class="fas fa-times"></i></button>

                </div>


            </div>
        </div>

        <div class="col-md-2">
            <div class="row">
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cancelar -->
    <div class="modal fade" id="CancelarModal" tabindex="-1" role="dialog" aria-labelledby="CancelarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#AC3333;color:white;">
                    <h5 class="modal-title" id="CancelarModalLabel">Cancelar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem a certeza que pretende cancelar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn fecharModal" data-dismiss="modal">Não</button>
                    <button type="button" id="confirmarCancelar" class="btn queroComent">Sim</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Guardar -->
    <div class="modal fade" id="GuardarModal" tabindex="-1" role="dialog" aria-labelledby="GuardarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#AC3333;color:white;">
                    <h5 class="modal-title" id="GuardarModalLabel">Cancelar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem a certeza que pretende guardar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn fecharModal" data-dismiss="modal">Cancelar</button>
                    <button type="button" id="confirmarGuardar" data-dismiss="modal" class="btn queroComent">Guardar</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        var editar = document.getElementById("editar");
        var mudarPassword = document.getElementById("mudarPassword");
        var editarD = document.getElementById("editarD");
        var primeiroNome = document.getElementById("primeiroNome");
        var ultimooNome = document.getElementById("ultimooNome");
        var email = document.getElementById("email");
        var morada = document.getElementById("morada");
        var nif = document.getElementById("nif");
        var telemovel = document.getElementById("telemovel");
        var cancelar = document.getElementById("cancelar");
        var guardar = document.getElementById("guardar");
        var confirmarBotoes = document.getElementById("confirmarBotoes");
        var confirmarGuardar = document.getElementById("confirmarGuardar");
        var confirmarCancelar = document.getElementById("confirmarCancelar");
        var olho1 = document.getElementById("olho1");
        var olho2 = document.getElementById("olho2");
        var olho3 = document.getElementById("olho3");
        var password1 = document.getElementById("password1");
        var password2 = document.getElementById("password2");
        var password3 = document.getElementById("password3");


        editar.addEventListener("click", function() {
            mudarPassword.style.display = 'block';
            editarD.style.display = 'none';
            primeiroNome.removeAttribute("readOnly");
            ultimooNome.removeAttribute("readOnly");
            email.removeAttribute("readOnly");
            morada.removeAttribute("readOnly");
            nif.removeAttribute("readOnly");
            telemovel.removeAttribute("readOnly");
            cancelar.style.display = 'block';
            guardar.style.display = 'block';
        })
        confirmarGuardar.addEventListener("click", function() {
            window.location.reload(true);
        })
        confirmarCancelar.addEventListener("click", function() {
            window.location.reload(true);
        })
        guardar.addEventListener("click", function() {
            if (password2.value !== password3.value) {
                window.alert("As passwords não são iguais.");
            } else {
                if (password2.value == '') {
                    window.alert("A password não pode ser vazia.");
                } else {
                    $('#GuardarModal').modal('show');
                }
            }

        })
        olho1.addEventListener("click", function() {
            if (password1.type === "password") {
                password1.type = 'text'
                olho1.classList.toggle('fa-eye-slash');
            } else {
                password1.type = "password";
                olho1.classList.remove('fa-eye-slash');
            }
        })
        olho2.addEventListener("click", function() {
            if (password2.type === "password") {
                password2.type = 'text';
                olho2.classList.toggle('fa-eye-slash');
            } else {
                password2.type = "password";
                olho2.classList.remove('fa-eye-slash');
            }
        })
        olho3.addEventListener("click", function() {
            if (password3.type === "password") {
                password3.type = 'text';
                olho3.classList.toggle('fa-eye-slash');
            } else {
                password3.type = "password";
                olho3.classList.remove('fa-eye-slash');
            }
        })
    </script>

</body>

</html>