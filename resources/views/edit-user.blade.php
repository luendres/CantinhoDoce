<div class="col col-md-8">
    <form action="{{ route('user.update', $user) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PATCH')

        <div class="row text-center mt-5 mr-5">
            <div class="col-md-6">
                <p>Nome *</p>
                <input type="text" name="nome" class="userInput" readonly="true" id="nome" value="{{ $user->nome }}" />
            </div>
            <div class="col-md-6">
                <p>Endereço de Email *</p>
                <input type="email" name="email" class="userInput" readonly="true" id="email" value="{{ $user->email }}" />
            </div>
            <div class="col-md-6 mt-5">
                <p>NIF </p>
                <input type="number" name="nif" class="userInput" readonly="true" id="nif" value="{{ $user->nif }}">
            </div>
            <div class="col-md-6 mt-5">
                <p>Número de telemóvel</p>
                <input type="number" name="telemovel" class="userInput" readonly="true" id="telemovel" value="{{ $user->telemovel }}" />
            </div>
            <div class="col-md-6 mt-5">
                <p>Morada</p>
                <input type="text" name="morada" class="userInput" readonly="true" id="morada" value="{{ $user->morada }}" />
            </div>
            <div class="col-md-3 mt-5">
                <p>Cidade </p>
                <input type="text" name="cidade" class="userInput" readonly="true" id="cidade" value="{{ $user->cidade }}">
            </div>
            <div class="col-md-3 mt-5">
                <p>Código Postal </p>
                <input type="text" name="postal" class="userInput" readonly="true" id="postal" value="{{ $user->postal }}">
            </div>
            <div id="editarD" class="col-md-12 mt-4">
                <a id="editar" class="btn verMaisCateg mt-5 mb-3 float-right mr-5">Alterar informações <i class="fas fa-user-edit"></i></a>
            </div>
        </div>
        <div class="row m-5 p-4">
            <div class="col-md-2"></div>
            <div class="col-md-8 px-5 py-3" id="mudarPassword" style="display:none; background-color:#E0E0E0; border:1px solid #4f4e4d">
                <div class="col-md-12 mx-3">
                    <h3> Alterar palavra-passe</h3>
                </div>

                <div class="col-md-12 mt-3 mr-5">
                    <p>Nova Palavra-passe</p>
                    <input type="password" name="password " id="password" style="width:90%;"><i class="fas fa-eye ml-3" id="olho1" style="font-size:20px;cursor:pointer"></i>
                </div>
                <div class="col-md-12 mt-3 mr-5">
                    <p>Confirme a palavra-passe</p>
                    <input type="password" name="password_confirmation" id="password_confirmation" style="width:90%;"><i class="fas fa-eye ml-3" id="olho2" style="font-size:20px;cursor:pointer"></i>
                </div>

            </div>
            <div class="col-md-2"></div>

            <div id="confirmarBotoes" class="col-md-12">
                <button id="guardar" type="submit" class="btn proximo mt-5 mb-3 float-right mr-5" style="display:none;">Guardar <i class="fas fa-check"></i> </button>
                <button id="cancelar" data-toggle="modal" data-target="#CancelarModal" type="button" class="btn verMaisCateg mt-5 mb-3 float-right mr-5" style="display:none;">Cancelar <i class="fas fa-times"></i></button>

            </div>


        </div>
    </form>
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


<script>
    var editar = document.getElementById("editar");
    var mudarPassword = document.getElementById("mudarPassword");
    var editarD = document.getElementById("editarD");
    var nome = document.getElementById("nome");
    var codigoPostal = document.getElementById("postal");
    var cidade = document.getElementById("cidade");
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
    var password = document.getElementById("password");
    var password2 = document.getElementById("password_confirmation");



    editar.addEventListener("click", function() {
        mudarPassword.style.display = 'block';
        editarD.style.display = 'none';
        cancelar.style.display = 'block';
        guardar.style.display = 'block';
        nome.removeAttribute("readOnly");
        cidade.removeAttribute("readOnly");
        codigoPostal.removeAttribute("readOnly");
        email.removeAttribute("readOnly");
        morada.removeAttribute("readOnly");
        nif.removeAttribute("readOnly");
        telemovel.removeAttribute("readOnly");

    })

    confirmarCancelar.addEventListener("click", function() {
        window.location.reload(true);
    })

    guardar.addEventListener("click", function() {
        validacoes();
    })

    olho1.addEventListener("click", function() {
        if (password.type === "password") {
            password.type = 'text'
            olho1.classList.toggle('fa-eye-slash');
        } else {
            password.type = "password";
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

    function validacoes() {

        if (password.value !== password2.value) {
            window.alert("As passwords não são iguais.");
        } else {
            $('#GuardarModal').modal('show');
        }

    }
</script>