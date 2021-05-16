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


<div class="aside-nav">
    <ul>
        <li class="active"><a href="/admin/catalogo/">
                Produtos

                <i class="angle-right-icon"></i></a></li>
        <li><a href="/admin/catalogo/categorias">
                Categorias

            </a></li>

    </ul>
</div>
<div class="content-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="row">
                <div class="col-8 page-title">
                    <h2>Produtos</h2>
                </div>

                <div class="col page-action">
                    <a href="/admin/catalogo/adicionar-produto" class="btn btn-success">Adicionar novo produto</a>
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
                            <div class="search-filter"><input type="search" id="search-field" placeholder="Procure aqui..." class="control">
                                <div class="icon-wrapper"><span class="icon search-icon search-btn"></span></div>
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

                        <th class="grid_head" id="mastercheckbox" style="width: 50px;"><span class="checkbox"><input type="checkbox"> <label for="checkbox" class="checkbox-view"></label></span></th>
                        <th class="grid_head">
                            ID
                        </th>
                        <th class="grid_head">
                            Nome do Produto
                        </th>
                        <th class="grid_head">
                            Categoria do Produto
                        </th>
                        <th class="grid_head">
                            Sub-Categoria do Produto
                        </th>
                        <th class="grid_head">
                            Preço
                        </th>
                        <th class="grid_head">
                            Estado
                        </th>
                        <th>
                            Ações
                        </th>
                        </tr>
                        </thead>


                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td><span class="checkbox"><input type="checkbox" v-model="dataIds" @change="select" value=""> <label for="checkbox" class="checkbox-view"></label></span></td>
                                <td data-value="ID">{{$produto->id}}</td>
                                <td data-value="Nome">{{$produto->nome}}</td>
                                <td data-value="Categoria">{{$produto->categoria}}</td>
                                <td data-value="Sub-Categoria do Produto">{{$produto->sub_categoria}}</td>
                                <td data-value="Preço">{{$produto->preco}}</td>
                                <td data-value="Estado">{{$produto->estado ? 'Ativo' : 'Inativo'}}</td>
                                <td data-value="Actions" class="actions" style="white-space: nowrap; width: 100px;">
                                    <div class=""><a form action="" method="post" href="{{ URL::to('/admin/catalogo/' . $produto->id . '/editar-produto') }}"><span class="icon pencil-lg-icon"></span></a> <a data-method="POST" data-action="" title="Delete"><span class="icon trash-icon"></span></a>
                                        @csrf
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <div class="pagination shop mt-50"><a class="page-item previous"><i class="icon angle-left-icon"></i></a> <a class="page-item active">
                            1
                        </a> <a href="/admin/sales/orders?page=2" class="page-item as">
                            2
                        </a> <a href="/admin/sales/orders?page=3" class="page-item as">
                            3
                        </a> <a href="/admin/sales/orders?page=4" class="page-item as">
                            4
                        </a> <a href="/admin/sales/orders?page=2" data-page="/admin/sales/orders?page=2" id="next" class="page-item next"><i class="icon angle-right-icon"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!---->
</div>

@endsection