<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\pedidos_detalhes;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    $order = Order::create([
        'user_id'=> auth()->user() ? auth()->user()->id :null,
        'nome' => auth()->user() ? auth()->user->nome :null,
        'subtotal'
        'taxa_entrega'
        'estado'=> 'Em processamento'
        'total'
        'localEntrega'
        'dataEntrega'
        'horaEntrega'
        'moradaEntrega'
        'metodoPagamento'
    ])
    
}
