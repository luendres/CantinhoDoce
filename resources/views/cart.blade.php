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
    .nav-link.categ{
        color:#AC3333;
        font-size:20px;
        font-weight:bold;
    }
    .opcoes{
        border-bottom: 3px solid #7d7d7d;
        color: #7d7d7d;
    }
    .opcoes:hover, .OpcoesActive{
        border-bottom-color: #AC3333; 
        cursor: pointer;
        color: #AC3333;
    }
    .OpcoesActive{
        font-weight: bold;
        color:black;
        border-bottom-color: black;
    }
    .queroComent{
        background-color:#AC3333;
        color:white;
        border: 1px solid #AC3333;
        
    }
    .proximo{
        background-color:#4f4e4d;
        font-size:15px;
        font-weight:bold;
        border: solid 2px #4f4e4d;
        color:#E0E0E0;
        border-radius:5%;
    }
    .verMaisCateg{
        background-color:#E0E0E0;
        font-size:15px;
        font-weight:bold;
        border: solid 2px #E0E0E0;
        color:#4f4e4d;
        border-radius:5%;
    }
    .fecharModal{
        background-color:#E0E0E0;
        font-weight:bold;
        border: solid 2px #E0E0E0;
        color:#4f4e4d;
    }
    .verMaisCateg:hover, .queroComent:hover, .fecharModal:hover, .proximo:hover{
        background-color: white;
        color:#AC3333;
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
    <div>
        <div> 
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{session()->get('success_message') }}
                </div>
            @endif
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif


        </div>
    </div>

    @if (Cart::count()>0)

    <div class="container-fluid">
        <div class="row m-5 p-5 " style="background-color:#E0E0E0 ">
            <div class="col-md-4 mb-3 opcoes OpcoesActive" id="opcao1" >
                <h4>1. Detalhes de entrega</h4>
            </div>
            <div class="col-md-4 mb-3 opcoes" id="opcao2">
                <h4 >2. O meu carrinho</h4>
            </div>
            <div class="col-md-4 mb-3 opcoes"  id="opcao3">
               <h4>3. Opções de pagamento</h4>
            </div>
        </div>
    </div>

    <div id="detEntrega">
        <div class="row m-5">

            <div class="col-md-7" >
                <h5 class="p-3" style="color:black; border-bottom: 3px solid #E0E0E0; font-weight: bold;">Escolha o método de entrega*</h5>

                <div class="form-check mt-5">
                    <input class="form-check-input" type="radio" id="casa" name="metodoentrega" />
                    <label class="form-check-label" for="casa">Quero receber a encomenda em minha casa</label>
                </div>

                <div class="form-check mt-3">
                    <input class="form-check-input" type="radio"  id="ega" name="metodoentrega"/>
                    <label class="form-check-label" for="ega">Quero receber a minha encomenda na Pastelaria Cantinho Doce - Ega </label>
                </div>

                <div class="form-check mt-3">
                    <input class="form-check-input" type="radio"  id="condeixa" name="metodoentrega"/>
                    <label class="form-check-label" for="condeixa">Quero receber a minha encomenda na Pastelaria Cantinho Doce - Condeixa </label>
                </div>                
            </div>

            <div class="col-md-5" >
                <h5 class="p-3" style="color:black; border-bottom: 3px solid #E0E0E0; font-weight: bold;">Quando entregaremos o seu pedido?</h5>
                <div class="row">
                    <div class="col-md-6"><p class="mt-3">Insira o dia:</p></div>
                    <div class="col-md-6"><input type="text" style="min-width: 100%;" class="mt-3" id="dataEntrega" placeholder="dd/mm/aaaa"></div>
                    
                    <div class="col-md-6"><p class="mt-3">Insira a hora:</p></div>
                    <div class="col-md-6"><input type="time" style="min-width: 100%; margin-right: 50px;"  class="mt-3" id="horaEntrega"></div> 
                </div>

                <div id="Endereco" style="display:none;">
                    <h5 class="p-3" style="color:black; border-bottom: 3px solid #E0E0E0; font-weight: bold;">Onde entregaremos o seu pedido?</h5>

                    <div class="row">
                        <div class="col-md-4"><p class="mt-3">Endereço:</p></div>
                        <div class="col-md-8"><input class="mt-3" type="text" style="min-width: 100%;" id="morada"></div>
                    </div>
                </div>

                <div class="row mt-2 p-3">
                    <div class="col-md-12" style="color:black; border-top: 3px solid #E0E0E0;">
                        <button type="button" id="proximoDet" class="btn float-right proximo mt-3 ml-3">Próximo</button>
                        <a href="/"><button type="button" class="btn float-right verMaisCateg mt-3">Cancelar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="meuCarrinho" style="display: none">
        <div class="row m-5">
            <div class="col-md-7" >
                <h5 class="p-3" style="color:black; border-bottom: 3px solid #E0E0E0; font-weight: bold;">Carrinho de Compras</h5>

                @foreach(Cart::content() as $item)
                <div class="row mt-5 p-3">
                    <div class="col-md-4 card" style="border:none;">
                        <img src="{{ Storage::url($item->model->imagem) }}" alt="produto">
                    </div>
                    <div class="col-md-6">
                        <div class="row mt-3">
                            <div class="col-md-12" style="text-transform: uppercase;"><p>{{$item->model->nome}}</p></div>
                            <div class="col-md-12"><p>{{$item->model->preco}} <span>€</span></p></div>
                            <div class="col-md-12"><p>{{$item->qty}} unidades</p></div>

                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type=submit class="btn"><i class="fas fa-trash-alt" style="color:#AC3333;"></i></button>
                        </form>
                    </div>
                </div>
                @endforeach


                


            </div>
            <div class="col-md-5" >
                <h5 class="p-3" style="color:black; border-bottom: 3px solid #E0E0E0; font-weight: bold;">Resumo da compra</h5>

                <div class="row mt-5">
                    <div class="col-md-6"><p>SUBTOTAL</p></div>
                    <div class="col-md-6"><p> {{Cart::subtotal()}} <span>€</span></p></div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6"><p>TAXA DE ENTREGA</p></div>
                    <div class="col-md-6"><p> {{Cart::tax ()}}  <span>€</span></p></div>
                </div>

                <div class="row mt-5" style="border-top: 3px solid #E0E0E0;">
                    <div class="col-md-6 mt-4"><p><b>TOTAL</b></p></div>
                    <div class="col-md-6 mt-4"><p><b> {{Cart::total()}} </b> <span>€</span></p></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-12" style="color:black; border-top: 3px solid #E0E0E0;">
                        <button type="button" id="proximoCar" class="btn proximo float-right mt-3 ml-3">Próximo</button>
                        <a href="/"><button type="button" class="btn verMaisCateg float-right mt-3 ml-3">Cancelar</button></a>
                        <button type="button" id="anteriorCar" class="btn verMaisCateg mt-3">Anterior</button>

                    </div>
                </div>

            </div>

            

        </div>
    </div>

    <div id="opPagamento" style="display: none">
        <div class="row m-5">
            <div class="col-md-12" >
                <h5 class="p-3" style="color:black; border-bottom: 3px solid #E0E0E0; font-weight: bold;">Método de pagamento</h5>

                    <div class="row p-3 text-center">
                        <div class="col-md-3">IMAGEM 1</div>
                        <div class="col-md-3">IMAGEM 2</div>
                        <div class="col-md-3">IMAGEM 3</div>
                        <div class="col-md-3" id="pagBalcaoImagem">IMAGEM 4</div>
                    </div>

                    <div class="row p-3 text-center">
                        <div class="col-md-3">
                            <input class="form-check-input" type="radio"  id="multibanco" name="metodo"/>
                            <label class="form-check-label" for="multibanco">Multibanco </label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-check-input" type="radio"  id="mbway" name="metodo"/>
                            <label class="form-check-label" for="mbway">MB WAY </label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-check-input" type="radio"  id="cartaoCred" name="metodo"/>
                            <label class="form-check-label" for="cartaoCred">Cartão de Crédito</label>
                        </div>
                        <div class="col-md-3" id="pagBalcao">
                            <input class="form-check-input" type="radio" name="metodo" id="pagBalcaoRadio" />
                            <label class="form-check-label" for="pagBalcao">Pagamento ao balcão </label>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row m-5 p-3">

            <div class="col-md-12" style="border-top: 3px solid #E0E0E0;">
                <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <input type="hidden" id="hora_entrega" name="hora_entrega" value="">
                <input type="hidden" id="data_entrega" name="data_entrega" value="">
                <input type="hidden" id="morada_entrega" name="morada_entrega" value="">

                <input type="hidden" name="subtotal" value="{{Cart::subtotal()}}">
                <input type="hidden" name="taxa_entrega" value="{{Cart::tax()}}">
                <input type="hidden" name="total" value="{{Cart::total()}}">
                <input type="hidden" name="metodo_entrega" id="metodo_entrega" value="">
                <input type="hidden" name="metodo_pagamento" id="metodo_pagamento" value="">
                
                <a id="anteriorOP" class="btn verMaisCateg mt-3">Anterior</a>
                <button type="Submit" id="proximoCar" class="btn proximo float-right mt-3 ml-3">Confirmar Encomenda</button>
                <a href="/" class="btn verMaisCateg float-right mt-3 ml-3">Cancelar</a>
            </div>
        </div>
    </div>

    @else

        <h3 class="text-center mt-5" style="color:#AC3333;">Não tem artigos no carrinho <i class="fas fa-sad-tear"></i></h3>

    @endif



</body>

<script>
    var detEntrega=document.getElementById("detEntrega");
    var meuCarrinho=document.getElementById("meuCarrinho");
    var opPagamento=document.getElementById("opPagamento");
    var Endereco=document.getElementById("Endereco");
    var opcao1=document.getElementById("opcao1");
    var opcao2=document.getElementById("opcao2");
    var opcao3=document.getElementById("opcao3");

 



    
    document.getElementById('opcao1').addEventListener("click",function(){
        if (detEntrega.style.display == "none"){
            detEntrega.style.display='block';
            meuCarrinho.style.display='none';
            opPagamento.style.display='none';
            opcao1.classList.add('OpcoesActive');
            opcao2.classList.remove('OpcoesActive');
            opcao3.classList.remove('OpcoesActive');
        }
    })
    document.getElementById('opcao2').addEventListener("click",function(){
        if (meuCarrinho.style.display == "none"){
            detEntrega.style.display='none';
            meuCarrinho.style.display='block';
            opPagamento.style.display='none';
            opcao2.classList.add('OpcoesActive');
            opcao1.classList.remove('OpcoesActive');
            opcao3.classList.remove('OpcoesActive');
        }
    })
    document.getElementById('opcao3').addEventListener("click",function(){
        if (opPagamento.style.display == "none"){
            detEntrega.style.display='none';
            meuCarrinho.style.display='none';
            opPagamento.style.display='block';
            opcao3.classList.add('OpcoesActive');
            opcao2.classList.remove('OpcoesActive');
            opcao1.classList.remove('OpcoesActive');
            document.getElementById('hora_entrega').value=document.getElementById('horaEntrega').value;
            document.getElementById('morada_entrega').value=document.getElementById('morada').value;
            document.getElementById('data_entrega').value=document.getElementById('dataEntrega').value;

        }
    })
    document.getElementById('proximoCar').addEventListener("click",function(){
        detEntrega.style.display='none';
        meuCarrinho.style.display='none';
        opPagamento.style.display='block';
        opcao3.classList.add('OpcoesActive');
        opcao2.classList.remove('OpcoesActive');
        opcao1.classList.remove('OpcoesActive');
        document.getElementById('hora_entrega').value=document.getElementById('horaEntrega').value;
        document.getElementById('morada_entrega').value=document.getElementById('morada').value;
        document.getElementById('data_entrega').value=document.getElementById('dataEntrega').value;
        


    })   
    document.getElementById('proximoDet').addEventListener("click",function(){
        detEntrega.style.display='none';
        meuCarrinho.style.display='block';
        opPagamento.style.display='none';
        opcao2.classList.add('OpcoesActive');
        opcao1.classList.remove('OpcoesActive');
        opcao3.classList.remove('OpcoesActive');
    })   
    document.getElementById('anteriorCar').addEventListener("click",function(){
        detEntrega.style.display='block';
        meuCarrinho.style.display='none';
        opPagamento.style.display='none';
        opcao1.classList.add('OpcoesActive');
        opcao2.classList.remove('OpcoesActive');
        opcao3.classList.remove('OpcoesActive');
    }) 
    document.getElementById('anteriorOP').addEventListener("click",function(){
        detEntrega.style.display='none';
        meuCarrinho.style.display='block';
        opPagamento.style.display='none';
        opcao2.classList.add('OpcoesActive');
        opcao1.classList.remove('OpcoesActive');
        opcao3.classList.remove('OpcoesActive');
    })    
    document.getElementById('casa').addEventListener("click",function(){
        Endereco.style.display='block';
        document.getElementById('pagBalcao').style.display='none';
        document.getElementById('pagBalcaoImagem').style.display='none';
        document.getElementById('metodo_entrega').value='Casa';
        
    }) 
    document.getElementById('ega').addEventListener("click",function(){
        Endereco.style.display='none';
        document.getElementById('pagBalcao').style.display='block';
        document.getElementById('pagBalcaoImagem').style.display='block';
        document.getElementById('metodo_entrega').value='Pastelaria Cantinho Doce';
        document.getElementById('morada').value='Pastelaria Cantinho Doce';
    })   
    document.getElementById('condeixa').addEventListener("click",function(){
        Endereco.style.display='none';
        document.getElementById('pagBalcao').style.display='block';
        document.getElementById('pagBalcaoImagem').style.display='block';
        document.getElementById('metodo_entrega').value='Pastelaria Sisi';
        document.getElementById('morada').value='Pastelaria Sisi';
    }) 
    document.getElementById('multibanco').addEventListener("click",function(){
        document.getElementById('metodo_pagamento').value='Multibanco';
    })   
    document.getElementById('mbway').addEventListener("click",function(){
        document.getElementById('metodo_pagamento').value='MB Way';
    })   
    document.getElementById('cartaoCred').addEventListener("click",function(){
        document.getElementById('metodo_pagamento').value='Cartão de Crédito';
    })   
    document.getElementById('pagBalcaoRadio').addEventListener("click",function(){
        document.getElementById('metodo_pagamento').value='Pagamento ao Balcão';
    })   



</script>

</html>