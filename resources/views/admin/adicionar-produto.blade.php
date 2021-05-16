@extends('layouts.app')
<link rel="stylesheet" href="https://demo.bagisto.com/bagisto-148-63-136-182/vendor/webkul/ui/assets/css/ui.css">



<style>
    .navbar-top {
        height: 60px;
        background-color: #fff;
        font-size: 0;
        box-shadow: 0 3px 6px 0 rgba(0, 0, 0, .05);
        border-bottom: 1px solid hsla(0, 0%, 63.5%, .2);
        position: fixed;
        left: 0;
        right: 0;
        z-index: 5
    }

    .navbar-top .navbar-top-left {
        width: 50%;
        height: 60px;
        display: inline-block;
        vertical-align: middle;
        background-color: #fff
    }

    .navbar-top .navbar-top-left .brand-logo {
        padding: 10px
    }

    .navbar-top .navbar-top-right {
        width: 50%;
        height: 60px;
        text-align: right;
        display: inline-block;
        vertical-align: middle
    }

    .navbar-top .navbar-top-right .profile-info {
        display: inline-block;
        vertical-align: middle;
        text-align: left;
        min-width: 50px;
        padding: 12px 0;
        margin: 0 25px 0 30px;
        font-size: 15px;
        cursor: pointer;
        position: relative
    }

    .navbar-top .navbar-top-right .profile-info .app-version {
        padding: 10px 20px 0;
        margin-bottom: -10px;
        display: block;
        cursor: default;
        color: #a2a2a2
    }

    .navbar-top .navbar-top-right .profile-info .dropdown-list {
        top: 63px;
        right: 0;
        bottom: inherit !important
    }

    .navbar-top .navbar-top-right .profile-info .name {
        color: #000311;
        display: block;
        text-align: left
    }

    .navbar-top .navbar-top-right .profile-info .role {
        font-size: 14px;
        color: #8e8e8e;
        display: block;
        text-align: left
    }

    .navbar-top .navbar-top-right .profile-info i.icon {
        margin-left: 10px
    }

    .navbar-left {
        position: fixed;
        left: 0;
        top: 60px;
        width: 90px;
        padding-top: 20px;
        border-right: 1px solid hsla(0, 0%, 63.5%, .2);
        height: auto;
        bottom: 0;
        z-index: 2;
        background-color: #fff
    }

    .navbar-left ul.menubar li.menu-item {
        padding: 10px 5px;
        font-size: 11px;
        text-align: center;
        text-transform: uppercase
    }

    .navbar-left ul.menubar li.menu-item a {
        color: #a2a2a2
    }

    .navbar-left ul.menubar li.menu-item.active a {
        color: #0041ff
    }

    .navbar-left ul.menubar li.menu-item span {
        display: block;
        margin: auto
    }


    .aside-nav {
        width: 250px;
        position: fixed;
        top: 40px;
        left: 255px;
        height: 88%;
        background-color: #f8f9fa;
        padding-top: 12px;

    }

    .aside-nav ul {
        overflow-y: auto;
        height: 90%
    }

    .aside-nav a {
        padding: 15px;
        display: block;
        color: #000311
    }

    .aside-nav .active a {
        background: #fff;
        border-top: 1px solid hsla(0, 0%, 63.5%, .2);
        border-bottom: 1px solid hsla(0, 0%, 63.5%, .2)
    }

    .aside-nav .active i {
        float: right
    }


    .content-wrapper {
        padding: 25px 25px 25px 15px;
        margin-left: 220px;
        background-color: #ebedef;
    }


    .content .page-header {
        display: inline-block;
        width: 100%;
        padding: 15px 10px 15px 0;
        top: 50px;
        z-index: 3;
        border-bottom: 1px solid hsla(0, 0%, 63.5%, .2);

    }


    .content-container .content .page-header .page-title h1 {
        margin-bottom: 0;
        vertical-align: middle;
        display: inline-block;
        line-height: normal;

    }


    .table-categories {

        height: 100px;
        background: #fff;
        border: 1px solid hsla(0, 0%, 63.5%, .2);
        box-shadow: 0 5px 10px 2px hsl(0deg 0% 64% / 20%);
        border-radius: 5px;
        position: relative;
        padding: 15px;

    }


    .sale-container .table .qty-row {
        display: block;
        margin-bottom: 5px
    }



    .pagination {
        margin-top: 30px
    }



    .pagination .page-item.active {
        background: #AC3333;
        color: #fff;
        border-color: #AC3333;
    }

    .btn-success {
        float: right;
        margin-left: 25px;
        color: white !important;
        box-shadow: 0 1px 4px 0 rgb(0 0 0 / 20%), 0 0 8px 0 rgb(0 0 0 / 10%);
        border-radius: 3px;
        cursor: pointer;
    }
</style>

@section('content')

<h3 class="mt-4">Adicionar novo produto</h3>
<hr>
<form action="/admin/catalogo" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Nome do produto</label>
        <input type="text" class="form-control" id="nome_produto" name="nome">
    </div>

    <div class="form-group">
        <label for="description">Categoria</label>
        <select class="form-control" id="categoria" name="categoria">
            <option value="" selected="selected"></option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Sub-Categoria</label>
        <select class="form-control" id="sub_categoria" name="sub_categoria">
            <option value="" selected="selected"></option>
        </select>

    </div>
    <div class="form-group">
        <label for="description">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" />
    </div>
    <div class="form-group">
        <label for="description">Estado</label><br />
        <label class="radio-inline"><input type="radio" name="estado" value="1"> Ativo</label>
        <label class="radio-inline"><input type="radio" name="estado" value="0"> Inativo</label>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row" style="place-content: center;">
        <button type="submit" class="btn btn-success mx-3" style="
    width: 200px; color: white;">Salvar</button>
        <a href="/admin/catalogo" class="btn btn-danger" style="
    width: 200px; color: white;">Voltar</a>
    </div>
</form>


@endsection

<script>
    var subjectObject = {
        "Padaria": {
            "Pão 0,5": [],
            "Broa Grande": [],
            "Broa Pequena": []
        },
        "Doces": {
            "Sobremesas": [],
            "Pastéis Diversos": [],
            "Pastéis Miniatura Diversos": []
        },
        "Salgados": {
            "Rissóis": [],
            "Pastéis Diversos": [],
            "Pastéis Miniatura Diversos": [],
            "Pizzas, Bolas e Quiches": []
        },
        "Produtos ao Peso": {
            "Bolos de Aniversário": [],
            "Sobremesas": [],
            "Sortidos": []

        }
    }
    window.onload = function() {
        var categoriaSel = document.getElementById("categoria");
        var subcategoriaSel = document.getElementById("sub_categoria");

        for (var x in subjectObject) {
            categoriaSel.options[categoriaSel.options.length] = new Option(x, x);
        }
        categoriaSel.onchange = function() {

            subcategoriaSel.length = 1;
            //display correct values
            for (var y in subjectObject[this.value]) {
                subcategoriaSel.options[subcategoriaSel.options.length] = new Option(y, y);
            }
        }
        subcategoriaSel.onchange = function() {

            //display correct values
            var z = subjectObject[categoriaSel.value][this.value];

        }
    }
</script>