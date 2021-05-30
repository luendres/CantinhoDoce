<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="{{url('css/ui.css')}}">

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

    a{text-decoration:none !important;
    color:black;}

    a:hover{color:black;}

    .userInput {
        width: 100%;
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
        text-decoration: underline;
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
                    <a href="/user"><i class="far fa-user" style="font-size:40px;color:black;"></i>
                    <h5 class="mt-2" style="font-size:20px;;">Perfil</h5></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 opcoesUser text-center ">
                    <i class="fas fa-box-open" style="font-size:40px;color:#AC3333; "></i>
                    <h5 class="mt-2" style="font-size:20px;color:#AC3333;">Encomendas</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 opcoesUser text-center">
                    <a href="/"><i class="fas fa-sign-out-alt" style="font-size:40px; color:black;"></i>
                    <h5 class="mt-2" style="font-size:20px; ">Sair</h5></a>
                </div>
            </div>
        </div>

        <div class="col col-md-10">
            <div class="content-wrapper">
            <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h2>Pedidos</h2>
            </div>

        </div>
        <div class="page-content">
            <div class="table">
                <div class="grid-container">
                    <div class="datagrid-filters">
                        <div class="filter-left"></div>
                    </div>
                    <div id="datagrid-filters" class="datagrid-filters">
                        <div class="filter-left">
                            <div class="search-filter"><input type="search" id="search-field" placeholder="Procure aqui..." class="control">
                                <div class="icon-wrapper"><i style="color:#999695"class="fas fa-search mt-1 ml-1"></i></div>
                            </div>
                        </div>
                        <div class="filter-right">
                            <div class="dropdown-filters per-page">
                                <div class="control-group"><label for="perPage" class="per-page-label">
                                        Itens por página
                                    </label> <select id="perPage" name="perPage" class="control">
                                        <option value="10"> 10 </option>
                                        <option value="20"> 20 </option>
                                        <option value="30"> 30 </option>
                                        <option value="40"> 40 </option>
                                        <option value="50"> 50 </option>
                                    </select></div>

                            </div>
                        </div>
                    </div>

                    <table class="table-categories">
                        <!---->
                        <thead>
                            <tr style="height: 65px;">
                                <th class="grid_head">
                                    ID
                                </th>
                                <th class="grid_head">
                                    Subtotal
                                </th>
                                <th class="grid_head">
                                    Total Final
                                </th>
                                <th class="grid_head">
                                    Data do Pedido
                                </th>
                                <th class="grid_head">
                                    Estado
                                </th>
                                <th>
                                    Mais informações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pedidos as $key => $pedido)
                            <tr>
                                <td data-value="ID">{{$pedido->id}}</td>
                                <td data-value="Sub Total">{{$pedido->subtotal}}</td>
                                <td data-value="Total Final">{{$pedido->total}}</td>
                                <td data-value="Data do Pedido">{{$pedido->created_at}}</td>
                                <td data-value="Estado"><span class="badge badge-md badge-warning">{{$pedido->estado}}</span></td>
                                <td data-value="Actions" class="actions" style="white-space: nowrap; width: 100px;">
                                    <div class="action"><a id="38" href="/admin/vendas/pedidos/visualizar/38" data-method="GET" data-action="/admin/vendas/pedidos/visualizar/38" data-token="gUTS2U4jWn7t8Lij76zJSyNATcMEfSVAON2gG8Xf" title="View"><span class="icon eye-icon"></span></a></div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                    </table>
                 </div>
                 <div class="pagination">
                <div class="pagination shop mt-50"><a class="page-item previous"><i class="fas fa-chevron-left mt-1 ml-1 mr-1"></i></a> <a class="page-item active">
                        1
                    </a> <a href="/admin/sales/orders?page=2" class="page-item as">
                        2
                    </a> <a href="/admin/sales/orders?page=3" class="page-item as">
                        3
                    </a> <a href="/admin/sales/orders?page=4" class="page-item as">
                        4
                    </a> <a href="/admin/sales/orders?page=2" data-page="/admin/sales/orders?page=2" id="next" class="page-item next"><i class="fas fa-chevron-right mt-1 ml-1 mr-1"></i></a></div>
            </div>
    </div>





    

</body>

</html>