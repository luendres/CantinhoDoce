<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Order;
use App\Models\OrderProduct;

use Gloudemans\Shoppingcart\Facades\Cart;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'hora_entrega' => $request->hora_entrega,
            'metodo_entrega' => $request->metodo_entrega,
            'data_entrega' => $request->data_entrega,
            'morada_entrega' => $request->morada_entrega,
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'taxa_entrega' => $request->taxa_entrega,
            'metodo_pagamento' => $request->metodo_pagamento,
        ]);

        foreach(Cart::content() as $item){
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item -> qty,
            ]);
        }

        Cart::instance('default')->destroy();

        return redirect('/')->with('success_message', 'Pedido inserido com sucesso!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
