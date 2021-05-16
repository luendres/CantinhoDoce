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
</style>

@section('content')


<div class="aside-nav">
    <ul>
        <li><a href="/admin/vendas/">
                Pedidos


        <li><a href="/admin/vendas/remessas">
                Remessas

                <i class="angle-right-icon"></i></a></li>
        </a></li>
        <li class="active"><a href="/admin/vendas/faturas">
                Faturas
                <i class="angle-right-icon"></i></a></li>
        </a></li>

    </ul>
</div>
<div class="content-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h2>Faturas</h2>
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
                        <thead>
                            <tr style="height: 65px;">
                                <th class="grid_head">
                                    ID
                                </th>
                                <th class="grid_head">
                                    ID do Pedido
                                </th>
                                <th class="grid_head">
                                    Valor Total
                                </th>
                                <th class="grid_head">
                                    Data da Fatura
                                </th>
                                <th>
                                    Mais informações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-value="ID">3</td>
                                <td data-value="ID Pedido">321</td>
                                <td data-value="Valor Total">8,50€</td>
                                <td data-value="Data da Fatura">2021-03-18 09:01:09</td>
                                <td data-value="Mais Informaçóes" class="actions" style="white-space: nowrap; width: 100px;">
                                    <!-- Adicionar um modal para ver mais informações invés de uma pagina inteira? -->
                                    <div class="action"><a id="3" href="/" data-method="GET" data-action="/"><span class="icon eye-icon"></span></a></div>
                                </td>
                            </tr>

                            <tr>
                                <td data-value="ID">4</td>
                                <td data-value="ID Pedido">322</td>
                                <td data-value="Valor Total">13,00€</td>
                                <td data-value="Data da Fatura">2021-03-18 10:32:04</td>
                                <td data-value="Mais Informaçóes" class="actions" style="white-space: nowrap; width: 100px;">
                                    <!-- Adicionar um modal para ver mais informações invés de uma pagina inteira? -->
                                    <div class="action"><a id="4" href="/" data-method="GET" data-action="/"><span class="icon eye-icon"></span></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td data-value="ID">2</td>
                                <td data-value="ID Pedido">323</td>
                                <td data-value="Valor Total">23,30€</td>
                                <td data-value="Data da Fatura">2021-03-19 13:06:19</td>
                                <td data-value="Mais Informaçóes" class="actions" style="white-space: nowrap; width: 100px;">
                                    <!-- Adicionar um modal para ver mais informações invés de uma pagina inteira? -->
                                    <div class="action icon eye-icon"><a id="2" href="/" data-method="GET" data-action="/"></a></div>
                                </td>
                            </tr>
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