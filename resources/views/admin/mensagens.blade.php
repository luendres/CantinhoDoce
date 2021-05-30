@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/ui.css')}}">

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

    .search-container {
        margin: 0 auto;
    }

    .search-container input[type=text] {
        padding: 7px;
        margin-top: 8px;
        font-size: 15px;
        border: none;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        outline: none;
        width: 200px;
    }

    .search-container button {
        float: right;
        padding: 11px 8px;
        margin-top: 8px;
        margin-right: 16px;
        background-color: #AC3333;
        color: white;
        font-size: 15px;
        border: none;
        cursor: pointer;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        outline: none;
    }

    .search-container button:hover {
        background: white;
        color: #AC3333;

    }
</style>

@section('content')


<div class="aside-nav">
    <ul>
        <li><a href="/admin/utilizadores/">
                Clientes
            </a></li>

        <li><a href="/admin/avaliacoes">
                Avaliações

            </a></li>
        <li class="active"><a href="/admin/mensagens">
                Mensagens de Contato
                <i class="fas fa-chevron-right mt-1"></i></a></li>


    </ul>
</div>
<div class="content-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="row">
                <div class="col-8 page-title">
                    <h2>Mensagens de Contacto</h2>
                </div>
            </div>

        </div>
        <div class="page-content">
            <div class="filtered-tags"></div>
            <div class="table">
                <div class="grid-container">
                    <div class="datagrid-filters">
                        <div class="filter-left"></div>
                    </div>
                    <div id="datagrid-filters" class="datagrid-filters">
                        <div class="filter-left">
                            <div class="search-container">
                                <form action=" {{ route('pesquisa-contacto') }}" method="get" class="search-form">
                                    <input type="text" placeholder="Procure aqui..." name="query" id="query" value="{{ request()->input('query') }}">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="filter-right">
                            <div class="dropdown-filters per-page">
                                <div class="control-group"><label for="perPage" class="per-page-label">
                                        Itens por página
                                    </label> <select id="perPage" name="perPage" class="control">
                                        <option value="05"> 05 </option>
                                        <option value="10"> 10 </option>
                                        <option value="15"> 15 </option>
                                        <option value="20"> 20 </option>
                                        <option value="25"> 25 </option>
                                    </select></div>

                            </div>
                        </div>
                    </div>

                    <table class="table-categories">
                        <!---->
                        <th class="grid_head">
                            ID
                        </th>
                        <th class="grid_head">
                            Nome
                        </th>
                        <th class="grid_head">
                            E-mail
                        </th>
                        <th class="grid_head">
                            Mensagem
                        </th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($mensagens as $key => $mensagem)
                            <tr>
                                <td data-value="ID">{{$mensagem->id}}</td>
                                <td data-value="Nome">{{$mensagem->nome}}</td>
                                <td data-value="E-mail">{{$mensagem->email}}</td>
                                <td data-value="Mensagem">{{$mensagem->mensagem}}</td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

</div>


@endsection