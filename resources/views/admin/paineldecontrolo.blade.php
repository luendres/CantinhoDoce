@extends('layouts.app')

<style>
    .dashboard .page-header {
        margin-bottom: 0 !important;
        padding-bottom: 15px;
        border-bottom: 1px solid hsla(0, 0%, 63.5%, .2)
    }

    .dashboard .page-header .control-group span {
        width: 100%
    }

    .dashboard .page-header .control-group.date:after {
        margin-top: -13px;
        left: 100%
    }

    .dashboard .page-content {
        margin-top: 15px
    }

    .dashboard .card {
        height: 445px;
        background-color: #fff;
        border: 1px solid hsla(0, 0%, 63.5%, .2);
        box-shadow: 0 5px 10px 2px hsla(0, 0%, 63.5%, .2);
        border-radius: .25rem;
        padding: 20px 0 0 20px;
        overflow: auto
    }

    .dashboard .card .card-title {
        font-size: 14px;
        color: #a2a2a2;
        letter-spacing: -.26px;
        text-transform: uppercase
    }

    .dashboard .card .card-info {
        width: 100%;
        display: inline-block
    }

    .dashboard .card .card-info.center {
        text-align: center
    }

    .dashboard .card .card-info ul li {
        border-bottom: 1px solid hsla(0, 0%, 63.5%, .2);
        width: 100%;
        display: inline-block;
        padding: 10px 0;
        position: relative
    }

    .dashboard .card .card-info ul li .image {
        height: 60px;
        width: 60px;
        float: left;
        margin-right: 15px
    }

    .dashboard .card .card-info ul li .image.product {
        background: #f2f2f2
    }

    .dashboard .card .card-info ul li .image img {
        width: 100%
    }

    .dashboard .card .card-info ul li .description {
        margin-top: 10px
    }

    .dashboard .card .card-info ul li .description .name {
        color: #0041ff
    }

    .dashboard .card .card-info ul li .description .info {
        color: #3a3a3a;
        margin-top: 5px
    }



    .dashboard .card .card-info ul li:last-child {
        border-bottom: 0
    }

    .dashboard .card .card-info .no-result-found {
        margin-top: 146px
    }

    .dashboard .card .card-info .no-result-found p {
        margin: 0;
        color: #a2a2a2
    }

    .dashboard .dashboard-stats {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        grid-auto-rows: auto;
        grid-column-gap: 30px;
        grid-row-gap: 15px
    }

    .dashboard .dashboard-stats .dashboard-card {
        height: 100px;
        background: #fff;
        border: 1px solid hsla(0, 0%, 63.5%, .2);
        box-shadow: 0 5px 10px 2px hsla(0, 0%, 63.5%, .2);
        border-radius: 5px;
        position: relative;
        padding: 15px
    }

    .dashboard .dashboard-stats .dashboard-card .title {
        font-size: 14px;
        color: #a2a2a2;
        text-transform: uppercase
    }

    .dashboard .dashboard-stats .dashboard-card .data {
        padding-top: 13px;
        font-size: 32px;
        color: #AC3333;
    }

    .dashboard .dashboard-stats .dashboard-card .data .progress {
        font-size: 14px;
        color: #AC3333;
        background-color: white;
        float: right;
        margin-top: 5px;
        padding-top: 10px;
    }

    .dashboard .dashboard-stats .dashboard-card .data .progress .icon {
        vertical-align: middle
    }

    .dashboard .graph-stats {
        margin-top: 30px;
        width: 100%;
        display: inline-block
    }

    .dashboard .graph-stats .left-card-container {
        float: left;
        width: 75%;
        padding-right: 9px
    }

    .dashboard .graph-stats .right-card-container {
        float: left;
        width: 25%;
        padding-left: 21px;
        display: grid;
        grid-auto-rows: auto;
        grid-column-gap: 30px;
        grid-row-gap: 15px;

    }

    .dashboard .sale-stock {
        width: 100%;
        display: inline-block;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(435px, 1fr));
        grid-auto-rows: auto;
        grid-column-gap: 30px;
        grid-row-gap: 15px;
        margin-top: 30px
    }
</style>

@section('content')
<div class="content full-page dashboard">
    <div class="page-header">
        <div class="row pt-5">
            <div class="col-7 page-title mt-6">
                <h2>Painel de Controlo</h2>
            </div>

            <div class="col" style="text-align: -webkit-right;">
                <i class="far fa-calendar-alt fa-lg mr-3"></i>
                <input type="text" id="start_date" value="2021-04-12" placeholder="From">
                <input type="text" id="end_date" value="2021-05-12" placeholder="To">
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="dashboard-stats">
            <div class="dashboard-card">
                <div class="title">
                    Total de Clientes
                </div>
                <div class="data">
                    {{ $userCount }}
                    <div class="progress"><i class="fas fa-long-arrow-alt-up fa-lg mr-2"></i>
                        0.0%
                    </div>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="title">
                    Total de Pedidos
                </div>
                <div class="data">
                    {{ $pedidosCount }}

                    <span class="progress"><i class="fas fa-long-arrow-alt-up fa-lg mr-2"></i>
                        100%
                    </span>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="title">
                    Total de Vendas Sem Portes
                </div>
                <div class="data">
                    {{ $pedidosSum }} €

                    <span class="progress"><i class="fas fa-long-arrow-alt-up fa-lg mr-2"></i>
                        100%
                    </span>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="title">
                    Média de venda por pedido
                </div>
                <div class="data">
                    {{ $media }} €

                    <span class="progress"><i class="fas fa-long-arrow-alt-up fa-lg mr-2"></i>
                        100%
                    </span>
                </div>
            </div>
        </div>
        <div class="graph-stats">
            <div class="left-card-container graph">
                <div class="card" style="overflow: hidden;">
                    <div class="card-title" style="margin-bottom: 30px;">
                        Vendas
                    </div>
                    <div class="card-info" style="height: 100%;">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div><canvas id="myChart" width="1258" style="width: 100%; height: 87%; display: block;" height="460" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
            <div class="right-card-container category">
                <div class="card">
                    <div class="card-title">
                        Produtos mais vendidos
                    </div>
                    <div class="card-info center">
                        <ul></ul>
                        <div class="no-result-found"><i class="icon no-result-icon"></i>
                            <p>Não encontramos nenhum registo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection